<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	public function __construct(){
		parent::__construct();

	}

	public function index()
	{
		$dados['titulo']='Painel de Controle';
		$dados['subtitulo']='Home';

		$this->load->view('back/template/html-header',$dados);
		$this->load->view('back/template/html-footer');
		$this->load->view('back/home');
		$this->load->view('back/template/template');

	}
public function pag_login()
{
	$dados['titulo']='Painel de Controle';
	$dados['subtitulo']='Entrar no sistema';

	$this->load->view('back/template/html-header',$dados);
	$this->load->view('back/login');
	$this->load->view('back/template/html-footer');
}
public function login ()
{
	$this->load->library('form_validation');
	$this->form_validation->set_rules('txt-user','usuario',
	'required|min_length[3]');
	$this->form_validation->set_rules('txt-senha','senha',
	'required|min_length[3]');
	if($this->form_validation->run()==FALSE)
	{
		$this->pag_login();
	}
	else{
		$usuario=$this->input->post('txt-user');
		$senha=$this->input->post('txt-senha');

		if($usuario =='admin' && $senha =='admin'){
			$dadosSessao['userlogado']=$userlogado[0];
			$dadosSessao['logado']=TRUE;
			$this->session->set_userdata($dadosSessao);
			redirect(base_url('logado'));
		}
		else{
			$dadosSessao['userlogado']=NULL;
			$dadosSessao['logado']=FALSE;
			$this->session->set_userdata($dadosSessao);
			redirect(base_url('admin/login'));
			
		}
	}
}


}
