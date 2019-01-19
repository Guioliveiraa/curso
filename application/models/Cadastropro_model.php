<?php
class Cadastropro_model extends CI_Model {
	function __construct(){
		parent::__construct();
	}
function cadastra_professor($data)
{
$this->db->insert('professor',$data);
}


}
