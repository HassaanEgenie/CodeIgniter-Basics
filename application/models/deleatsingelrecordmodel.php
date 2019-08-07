<?
defined('BASEPATH') or exit('No direct script access allowed');

class deleatsingelrecordmodel extends CI_Model
{
    public function deleat_data($sid )
    {
        $this->db->where('id', $sid );
        $query=$this->db->delete('users');
        


    }
}

?>
