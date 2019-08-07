<?
defined('BASEPATH') or exit('No direct script access allowed');

class session_Controller2 extends CI_Controller
{
    public function index()
    {
        $this->load->library('session');
        $newdata = array(
            'fullname'  => 'Hamza Ali',
            'email'     => 'hamza@gmail.com',
            'logged_in' => TRUE
         );

         $this->session->set_userdata($newdata);

         $arr =  $this->session->set_userdata($newdata);
         echo $arr['email'];
    //   foreach($arr as $key=>$value){
    //       echo $value;
    //   }

    }
}

?>
