<?
defined('BASEPATH') or exit('No direct script access allowed');

class insertdb extends CI_Controller
{
    public function index()
    {

         $this->load->model('insertdbmodel');
         $data = array();
         $data['Name'] = 'Khubaib';
         $data['Email'] = 'Khubaib@tmaim.com';
         $this->insertdbmodel->insert_user($data);


    }
}

?>
