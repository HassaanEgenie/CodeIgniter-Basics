<?
defined('BASEPATH') or exit('No direct script access allowed');

class Twodatemodel extends CI_Model
{
    public function getdata(){

        $start_date='1992-02-14';
        $end_date='2001-09-11';
        $this->db->order_by("date","desc");
        $this->db->select("*");
        $this->db->from("user_balance");
        $this->db->where("date >=","1992-02-14");
        $this->db->where("date <=","2001-09-11");

        // $this->db->where('date BETWEEN "'. date('Y-m-d', strtotime($start_date)). '" and "'. date('Y-m-d', strtotime($end_date)).'"');
    
        $query=$this->db->get();
        return $query->result();
        
    }
    
}