<?
defined('BASEPATH') or exit('No direct script access allowed');

class Datemodel extends CI_Model
{
    public function update_date($uid,$bal,$data_to_update)
    {
        $this->db->where('bal_id', $uid );
        $this->db->where('Balance', $bal );
        $query=$this->db->update('user_balance',$data_to_update);
        


    }
    public function getdata($date,$data_to_update)
    {
        $this->db->where('date', $date );
        $query=$this->db->update('user_balance',$data_to_update);
        


    }
}

?>