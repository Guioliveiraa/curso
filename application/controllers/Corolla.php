<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Corolla extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Reserva');

	}

	public function index()
	{
		$this->load->view('front/template/html-header');
		$this->load->view('front/template/header');

			$this->load->view('front/template/corolla');

				$this->load->view('front/template/footer');
		$this->load->view('front/template/html-footer');
	}



	public function cadastra_aluno()
 {
 $data = array(
 'nome'=>$this->input->post('nome'),
 'email'=>$this->input->post('email'),
 'telefone'=>$this->input->post('telefone'),
 'telefone2'=>$this->input->post('telefone2'),
 'endereço'=>$this->input->post('endereço'),
 'cidade'=>$this->input->post('cidade'),
 'estado'=>$this->input->post('estado'),
 'cep'=>$this->input->post('cep'),
 'datar'=>$this->input->post('datae'),
 'datae'=>$this->input->post('datae'),
 'cadeira'=>$this->input->post('cadeira'),
 'gps'=>$this->input->post('gps'),
 'retirada'=>$this->input->post('retirada'),


 );

 $this->Reserva->cadastra_aluno($data);
 $this->session->set_flashdata('sucesso','<h2>Cadastro efetuado com sucesso!</h2>');
 redirect(base_url('corolla'));

 }








}
