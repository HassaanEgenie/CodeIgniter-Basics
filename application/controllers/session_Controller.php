<?
defined('BASEPATH') or exit('No direct script access allowed');

class session_Controller extends CI_Controller
{
    public function index()
    {
        $this->load->library('session');
        $this->session->set_userdata('favcolour', 'blue');
        $favColour = $this->session->userdata('favcolour');
        echo $favColour;
        $this->session->unset_userdata('favcolour');
    }
}

?>
