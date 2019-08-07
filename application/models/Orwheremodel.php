<?
defined('BASEPATH') or exit('No direct script access allowed');

class  Orwheremodel extends CI_Model
{
    public function getdata($uid,$uname,$data_to_update)
    {   
        $this->db->where('Name', $uname );
        $this->db->or_where('id', $uid );
        $query=$this->db->update('users',$data_to_update);
        


    }
}

?>