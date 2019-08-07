Model
<?
defined('BASEPATH') or exit('No direct script access allowed');

class Updatedbmodel extends CI_Model
{
    function update_user ( $sid, $data_to_update) {

        $this->db->where('id', $sid );
        $this->db->update('users', $data_to_update);
    }
}


?>