<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Garson extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("GarsonModel");
    }

    public function index()
    {
        if ($this->session->userdata("user") and $this->session->userdata("user")->yetki == '2') {
            $this->load->view('templates/header');
            $masa['masa'] = $this->GarsonModel->openmasa("masa", "durum='1'");   //açık masalar
            $this->load->view('admin/garson', $masa);
        } else {
            $this->load->view('login');
        }
    }

    public function durumDegistir()
    {

        $masa = $this->input->post("id");
        $durum = $this->input->post("durum");

        $masa = substr($masa, 5, strlen($masa));

        $updated = $this->GarsonModel->update(array("masa_no" => $masa), array('durum' => $durum), "siparis");
        if (!$updated) {
            echo "eklenmedi";
        } else {
            echo "Sepete Eklendi";
        }
    }

    public function masakapat()  //masa durumu 0 -> kapalı
    {
        $kapat = $this->GarsonModel->masaackapa(
            $this->input->post("id"),
            array(
                'durum' => 0
            ),
            "masa"
        );
        if ($kapat) {
            $this->db->delete('siparis', array('masa_no' => $this->input->post("id")));     // masayı kapattığında siparişleri sil 
            redirect('garson');
        }
    }

    public function bekleyen()
    {
        if ($this->session->userdata("user") and $this->session->userdata("user")->yetki == '2') {
            $this->load->view('templates/header');
            $masa['masa'] = $this->GarsonModel->getAllGeneral("masa", array("durum" => '2'));   //açılmayı bekleyen masalar
            $this->load->view('admin/masa', $masa);
        } else {
            $this->load->view('login');
        }
    }

    public function masaac()
    {
        $this->GarsonModel->masaackapa(
            $this->input->post("id"),
            array(
                'durum' => 1
            ),
            "masa"
        );
        redirect('masa');
    }

    public function masalar()
    {
        if ($this->session->userdata("user") and $this->session->userdata("user")->yetki == '2') {
            $this->load->view('templates/header');
            $masa['masa'] = $this->GarsonModel->openmasa("masa", "durum='0'");   //kapalı masalar
            $this->load->view('admin/masalar', $masa);
        } else {
            $this->load->view('login');
        }
    }

    public function urun()
    {
        $category_id = $this->input->post("category_id");

        $menu = $this->GarsonModel->getAllGeneral("menu", array("grup_id" => $category_id));

        foreach ($menu as $item) {
            echo '<option value="'.$item->id .'">'. $item->ad .'</option>';
        }
    }

    public function new()
    {
        $masa = $this->input->post("masano");
        $urun = $this->input->post("urun");
        $adet = $this->input->post("adet");
        if (!empty($masa) AND !empty($urun) AND !empty($adet)) {
            date_default_timezone_set('Europe/Istanbul');
            $urunBilgi = $this->GarsonModel->getGeneral("menu", array("id" => $urun));
            
             $new =$this->GarsonModel->siparisekle(
                "siparis",
                array(
                    'masa_no' => $masa,
                    'siparis_id' => $urun,
                    'urun_id' => $urun,
                    'adet' => $adet,
                    'toplam' => ($adet * $urunBilgi->fiyat),
                    'durum' => '1',
                    'zaman' => date("Y-m-d")
                )
            );
            if ($new) {
                redirect('garson');
                $this->session->set_flashdata('msg', 'Eklendi');
            } else {
                redirect('garson');
            }
        }
        
    }
}
