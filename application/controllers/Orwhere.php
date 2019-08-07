<?
defined('BASEPATH') or exit('No direct script access allowed');

class Orwhere extends CI_Controller
{
    public function index()
    {

         $this->load->model('Orwheremodel');
         
         $data_to_update = array();
         $data_to_update ['Email'] = 'zaheer@gmail.com';
         
        $this->Orwheremodel->getdata(5,'hamid Khan',$data_to_update);
       


    }
}

?>