<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("HomeModel");
    }
    public function index()
    {
        $this->load->view('home');
    }
    public function masalogin()
    {
        $this->load->view('masalogin');
    }
    
    public function masaac()
    {
        $this->HomeModel->masaackapa(
            $this->input->post("id"),
            array(
                'durum' => 2
            ),
            "masa"
        );
        redirect('menu');
    }
}
