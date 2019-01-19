<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mostrar_model extends CI_Model {

	public function __construct(){
		parent::__construct();

	}
public function buscar_aluno($busca)
{
	$query = $this->db->query("SELECT * FROM alunos where nome like ('%$busca%')");
	return $query->result();
}

public function buscar_aluno2()
{
	$query = $this->db->query("SELECT * FROM alunos");
	return $query->result();
}



}
