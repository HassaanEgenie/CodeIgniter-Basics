<?
defined('BASEPATH') or exit('No direct script access allowed');

class  Multiplewheremodel extends CI_Model
{
    public function getdata($uid,$uemail,$data_to_update)
    {
        $this->db->where('id', $uid );
        $this->db->where('Email', $uemail );
        $query=$this->db->update('users',$data_to_update);
        


    }
}

?>