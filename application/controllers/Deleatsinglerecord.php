<?
defined('BASEPATH') or exit('No direct script access allowed');

class Deleatsinglerecord extends CI_Controller
{
    public function index()
    {

         $this->load->model('deleatsingelrecordmodel');
        
         $this->deleatsingelrecordmodel->deleat_data(3);
       


    }
}

?>
