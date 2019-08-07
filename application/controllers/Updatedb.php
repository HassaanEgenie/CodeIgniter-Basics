controller
<?
defined('BASEPATH') or exit('No direct script access allowed');

class Updatedb extends CI_Controller
{
    public function index()
    {

         $this->load->model('Updatedbmodel');
        

         $data_to_update = array();
         $data_to_update ['Name'] = 'Ahmar';
         $data_to_update ['Email'] = 'hassan@rockatmail.com';
         $this->Updatedbmodel->update_user(3, $data_to_update);

         

    }
}

?>