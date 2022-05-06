<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("Model");
    }


    public function index()
    {
        if ($this->session->userdata("user")) redirect(base_url(""));
        else $this->load->view('login');
    }
    public function giris()
    {
        $ad = $this->input->post("ad");
        $password = $this->input->post("password");
        if (!empty($ad) || !empty($password)) {
            $user = $this->Model->login(
                array(
                    "ad" => $ad,
                    "password" => $password,
                )
            );
            if ($user) {
                $this->session->set_userdata("user", $user);
                if ($this->session->userdata("user")->yetki == '1') {
                    redirect('admin');
                } elseif ($this->session->userdata("user")->yetki == '2') {
                    redirect('garson');
                }
            } else {
                $this->session->set_flashdata('msg', 'kullanıcı adı veya parola yanlış');
                redirect('login');
              
            }
        }
    }

    public function logout()
    {
        $this->session->unset_userdata("user");
        redirect(base_url("login"));
    }
}
