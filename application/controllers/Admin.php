<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("Model");
    }

    public function index() //garsonları listele
    {
        if ($this->session->userdata("user") and $this->session->userdata("user")->yetki == '1') {
            $this->load->view('templates/header');
            $users['users'] = $this->Model->garsonlar("users", "yetki='2'");
            $this->load->view('admin/admin', $users);
        } else {
            $this->load->view('login');
        }
    }

    public function new()  //yeni garson ekle
    {
        $kullanici_adi = $this->input->post("kullanici_adi");
        $yetki = $this->input->post("yetki");
        $password = $this->input->post("password");
        $telefon = $this->input->post("telefon");

        if (!empty($kullanici_adi) AND !empty($yetki) AND !empty($password) AND !empty($telefon)) {
            $new = $this->Model->insert(
                array(
                    'ad' => $kullanici_adi,
                    'yetki' => $yetki,
                    'telefon' => $telefon,
                    'password' => $password,
                    'status' => '1'
                ),
                "users"
            );
        }
        if ($new) {
            redirect('admin');
        } else {
            $this->session->set_flashdata('msg', 'Kaydedilmedi!!');
            redirect('admin');
        }
    }

    public function update() //garson düzenleme
    {
        $this->Model->update(
            $this->input->post("id"),
            array(
                'ad' => $this->input->post('ad'),
                'yetki' => $this->input->post('yetki'),
                'telefon' => $this->input->post('telefon'),
                'password' => $this->input->post('password'),
                'status' => $this->input->post('status')
            ),
            "users"
        );
        redirect('admin');

    }
}
