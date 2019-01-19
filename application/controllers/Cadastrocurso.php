<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastrocurso extends CI_Controller {

	function __construct(){
		parent::__construct();

    $this->load->model('adm_model');
		$this->load->model('cadastrocurso_model');
	}

	public function index()
	{
		$this->load->view('back/template/html-headerlog');
    $this->load->view('back/template/cadastrocurso');
	}


	public function inserir(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nome','nome do curso','required|is_unique[curso.nome]');
		if($this->form_validation->run()== FALSE){
			$this->index();
	}}

 public function cadastra_curso()
{
$data = array(
'nome'=>$this->input->post('nome'),
'descricao'=>$this->input->post('descricao'),
);

$this->cadastrocurso_model->cadastra_curso($data);
$this->session->set_flashdata('sucesso','<h2>Cadastro efetuado com sucesso!</h2>');
redirect(base_url('Cadastrocurso'));

}
	}
