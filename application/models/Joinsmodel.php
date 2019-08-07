<?
defined('BASEPATH') or exit('No direct script access allowed');

class  Joinsmodel extends CI_Model
{
    public function getdata()
    {   
        $this->db->select('*');
        $this->db->from('users');
         $this->db->join('user_balance', 'user_balance.bal_id =users.id ');

         $query = $this->db->get();
         return $query->result();
       
        


    }
}

?>