<?php
class Cadastrocurso_model extends CI_Model {
	function __construct(){
		parent::__construct();
	}
function cadastra_curso($data)
{
$this->db->insert('curso',$data);
}


}
