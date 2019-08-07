<?
defined('BASEPATH') or exit('No direct script access allowed');

class DbModel extends CI_Model
{
    public function getdata()
    {

$query=$this->db->get('data');
return $query->result();


    }
}

?>
