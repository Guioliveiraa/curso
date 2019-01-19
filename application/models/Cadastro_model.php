<?php
class Cadastro_model extends CI_Model {
	function __construct(){
		parent::__construct();
	}
function cadastra_aluno($data)
{
$this->db->insert('alunos',$data);
}


}
