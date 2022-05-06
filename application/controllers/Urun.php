<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Urun extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("GarsonModel");
    }
    public function index() //garsonları listele
    {
        if ($this->session->userdata("user") and $this->session->userdata("user")->yetki == '2') {
            $this->load->view('templates/header');
            $this->load->view('admin/urunekle');
        } else {
            $this->load->view('login');
        }
    }

    public function urunekle() //menüye ürün ekle
    {
        date_default_timezone_set('Europe/Istanbul');
        $tip = $_FILES['foto']['type'];
        $resimAdi = $_FILES['foto']['name'];
        $uzantisi = explode('.', $resimAdi);
        $uzantisi = $uzantisi[count($uzantisi) - 1];
        $yeni_adi = "uploads/" . time() . "." . $uzantisi;

        if ($tip == 'image/jpeg' || $tip == 'image/png') {
            if (move_uploaded_file($_FILES["foto"]["tmp_name"], $yeni_adi)) {
                $ad = $this->input->post('ad');
                $info = $this->input->post('info');
                $foto =  $yeni_adi;
                $fiyat = $this->input->post('fiyat');
                $grup_id = $this->input->post('grup_id');
                $zaman = date("Y-m-d");

                $ekle = $this->GarsonModel->insert(
                    array(
                        'ad' => $ad,
                        'info' => $info,
                        'foto' => $foto,
                        'fiyat' => $fiyat,
                        'grup_id' => $grup_id,
                        'zaman' => $zaman
                    ),
                    "menu"
                );
                
            }
           
        }
        if ($ekle) {
            redirect('urun');
        } else {
            $this->session->set_flashdata('msg', 'Eklenemedi!!!');
            redirect('urun');
        }
    }
}
