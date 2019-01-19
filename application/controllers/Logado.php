<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logado extends CI_Controller {

	public function __construct(){
		parent::__construct();

    $this->load->model('adm_model','modeladm');
    
	}

	public function index()
	{
		if ($this->session->userdata['logado'])
		{
			$this->load->view('back/template/html-headerlog');
	    $this->load->view('back/template/logado');
			$this->load->view('back/template/html-footer');
		}
		else {
			redirect(base_url());
		}

	}
	public function deslogar()
	{
		$this->session->sess_destroy();
		redirect(base_url());
	}

}
