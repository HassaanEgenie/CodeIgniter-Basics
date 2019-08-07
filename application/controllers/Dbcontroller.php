<?
defined('BASEPATH') or exit('No direct script access allowed');

class Dbcontroller extends CI_Controller
{
    public function index()
    {

         $this->load->model('Dbmodel');
         $data['records']=$this->Dbmodel->getdata();
         $this->load->view("dbview",$data);


    }
}

?>
