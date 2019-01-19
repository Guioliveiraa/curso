<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();

	}

	public function index()
	{
		$this->load->view('front/template/html-header');
		$this->load->view('front/template/header');

			$this->load->view('front/template/aside');
			
				$this->load->view('front/template/footer');
		$this->load->view('front/template/html-footer');
	}


}
