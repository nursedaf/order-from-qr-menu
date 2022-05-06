<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masano extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model("HomeModel");
    }
	public function masa($parametre)
	{
        $no = $parametre;
		$masa= $this->HomeModel->masaId("masa", array("id" => $no));
        $this->session->set_userdata("masano", $masa->masano);
        $this->session->set_userdata("masaid", $masa->id);
        $this->load->view("home",$masa);
	}
    
}
