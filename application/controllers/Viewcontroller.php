<?
defined('BASEPATH') or exit('No direct script access allowed');

class Viewcontroller extends CI_controller
{
    public function index(){
        $this->load->view("Viewform");
    
    }
}
?>