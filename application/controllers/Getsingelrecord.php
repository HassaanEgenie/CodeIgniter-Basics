<?
defined('BASEPATH') or exit('No direct script access allowed');

class Getsingelrecord extends CI_Controller
{
    public function index()
    {

         $this->load->model('Singelrecordmodel');
         $data['records']=$this->Singelrecordmodel->getdata(3);
         $this->load->view("singelrecordview",$data);


    }
}

?>