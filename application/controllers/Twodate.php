<?
defined('BASEPATH') or exit('No direct script access allowed');

 class Twodate extends CI_Controller
 {
   public function index(){

    $this->load->model("Twodatemodel");
    $data["records"]=$this->Twodatemodel->getdata();
    $this->load->view("Twodateview",$data);
   }

 }
?>