<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastropro extends CI_Controller {

	function __construct(){
		parent::__construct();

    $this->load->model('adm_model');
		$this->load->model('cadastropro_model');
	}

	public function index()
	{
		$this->load->view('back/template/html-headerlog');
    $this->load->view('back/template/cadastropro');
	}


	public function inserir(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nome','nome do professor','required|is_unique[professor.nome]');
		if($this->form_validation->run()== FALSE){
			$this->index();
	}}

 public function cadastra_professor()
{
$data = array(
'nome'=>$this->input->post('nome'),
'curso'=>$this->input->post('curso'),
'salario'=>$this->input->post('salario'),
);

$this->cadastropro_model->cadastra_professor($data);
$this->session->set_flashdata('sucesso','<h2>Cadastro efetuado com sucesso!</h2>');
redirect(base_url('Cadastropro'));

}
	}
