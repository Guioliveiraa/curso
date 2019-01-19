<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastro extends CI_Controller {

	function __construct(){
		parent::__construct();

    $this->load->model('adm_model');
		$this->load->model('cadastro_model');
	}

	public function index()
	{
		$this->load->view('back/template/html-headerlog');
    $this->load->view('back/template/cadastro');
	}


	public function inserir(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nome','nome do aluno','required|is_unique[alunos.nome]');
		if($this->form_validation->run()== FALSE){
			$this->index();
	}}

 public function cadastra_aluno()
{
$data = array(
'nome'=>$this->input->post('nome'),
'curso'=>$this->input->post('curso'),
'dataN'=>$this->input->post('datan'),
'vencimento'=>$this->input->post('vencimento'),
'mae'=>$this->input->post('mae'),
'pai'=>$this->input->post('pai'),
'endereco'=>$this->input->post('endereço'),
'bairro'=>$this->input->post('bairro'),
'cidade'=>$this->input->post('cidade'),
'professor'=>$this->input->post('professor'),
'dia'=>$this->input->post('dia'),
'hora'=>$this->input->post('hora'),
'telefone'=>$this->input->post('telefone'),
'valor'=>$this->input->post('valor'),
);

$this->cadastro_model->cadastra_aluno($data);
$this->session->set_flashdata('sucesso','<h2>Cadastro efetuado com sucesso!</h2>');
redirect(base_url('Cadastro'));

}
	}
