<?
defined('BASEPATH') or exit('No direct script access allowed');

class Partialcontroller extends CI_Controller{

    public function index(){
        
        $this->load->view('partial/header');
        $this->load->view('partial/main');
        $this->load->view('partial/footer');


    }
}
?>