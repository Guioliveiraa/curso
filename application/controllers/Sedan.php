<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sedan extends CI_Controller {

	function __construct(){
		parent::__construct();


	}

	public function index()
	{
		$this->load->view('front/template/html-header');
		$this->load->view('front/template/header');

			$this->load->view('front/template/sedan');

				$this->load->view('front/template/footer');
		$this->load->view('front/template/html-footer');
	}





}
