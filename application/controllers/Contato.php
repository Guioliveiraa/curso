<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contato extends CI_Controller {

	function __construct(){
		parent::__construct();

		$this->load->model('cadastro_m');
	}

	public function index()
	{
		$this->load->view('front/template/html-header');
		$this->load->view('front/template/header');

			$this->load->view('front/template/contato');

				$this->load->view('front/template/footer');
		$this->load->view('front/template/html-footer');
	}


	public function cadastra_aluno()
 {
 $data = array(
 'nome'=>$this->input->post('nome'),
 'telefone'=>$this->input->post('telefone'),
 'email'=>$this->input->post('email'),
 'mensagem'=>$this->input->post('mensagem'),
 );

 $this->cadastro_m->cadastra_aluno($data);

 $this->session->set_flashdata('sucesso','<h2>Cadastro efetuado com sucesso!</h2>');
 redirect(base_url('contato'));

 }


}
