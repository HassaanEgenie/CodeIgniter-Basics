<?
defined('BASEPATH') or exit('No direct script access allowed ');

class Phpviewcontroller extends CI_Controller
{
  public function index(){
      $this->load->view("PhpView");
  }
}
?>