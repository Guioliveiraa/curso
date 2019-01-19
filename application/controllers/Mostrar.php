<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mostrar extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Adm_model');
		$this->load->model('Mostrar_model');

	}

	public function index()
	{

		$this->load->view('back/template/html-headerlog');
    $this->load->view('back/template/mostrar');
		$this->load->view('back/template/html-footer');


	}

public function buscar_aluno()
{
	$busca=$this->input->post('nome');
	$data['busca']=$this->Mostrar_model->buscar_aluno($busca);
	$this->load->view('back/template/html-headerlog');
	$this->load->view('back/template/mostrar2',$data);
	$this->load->view('back/template/html-footer');

}


}
