<?
defined('BASEPATH') or exit('No direct script access allowed');

class Singelrecordmodel extends CI_Model
{
    public function getdata($sid )
    {
        $this->db->where('id', $sid );
        $query=$this->db->get('users');
        return $query->result();


    }
}

?>
