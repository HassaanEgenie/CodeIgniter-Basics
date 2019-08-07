<?
defined('BASEPATH') or exit('No direct script access allowed');

Class library extends CI_Controller{

    public function index(){

   $this->load->library('email');
   $this->email->from('ali@gmail.com','Ali');
   $this->email->to('ahmad@gmail.com');
   $this->email->cc('shah@gmail.com');
   $this->email->subject("testing the funtionalities");
   $this->email->message("this is just a text message for funtionalities");
   $this->email->attach('image.jpg', 'inline');

    $this->email->send();

    }
}
?>
