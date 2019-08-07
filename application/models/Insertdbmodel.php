<?
defined('BASEPATH') or exit('No direct script access allowed');

class insertdbmodel extends CI_Model
{
    function insert_user($data_to_insert) {
        $this->db->insert('users',$data_to_insert);
        return $this->db->insert_id();
    }
}




?>