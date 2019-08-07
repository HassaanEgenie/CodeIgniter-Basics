<?
Class db1model extends CI_model{

function return_users(){

$this->load->database();

$query=$this->db->query("SELECT * FROM users");

$query->result_array();

print_r($query);
}
}
?>
