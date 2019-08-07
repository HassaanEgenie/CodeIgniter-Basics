<?
defined('BASEPATH') or exit('No direct script access allowed');
class Joins extends CI_Controller
{
    public function index()
    {
          
         $this->load->model('Joinsmodel');
         
         $data['records']=$this->Joinsmodel->getdata();
         $this->load->view("Joinsview",$data);

       


    }
}

?>