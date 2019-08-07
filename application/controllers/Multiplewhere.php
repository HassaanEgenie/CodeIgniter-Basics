<?
defined('BASEPATH') or exit('No direct script access allowed');

class Multiplewhere extends CI_Controller
{
    public function index()
    {

         $this->load->model('Multiplewheremodel');
         
         $data_to_update = array();
         $data_to_update ['Name'] = 'Zaheer Khan';
         
        $this->Multiplewheremodel->getdata(5,'abc@tmaim.com',$data_to_update);
       


    }
}

?>