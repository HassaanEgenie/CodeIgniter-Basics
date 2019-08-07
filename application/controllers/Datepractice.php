<?
defined('BASEPATH') or exit('No direct script access allowed');

class Datepractice extends CI_Controller
{
    public function index()
    {

         $this->load->model('Datemodel');
         
         $data_to_update = array();
         $data_to_update ['date'] = '2001-01-12';
         
        $this->Datemodel->update_date(1,5000,$data_to_update);
        
        $data=array();
        $data['Balance']='73333';
        $this->Datemodel->getdata('2001-09-11',$data);



    }
}

?>