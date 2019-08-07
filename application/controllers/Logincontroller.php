<?
defined('BASEPATH') or exit("No direct script acess allowed");
class Logincontroller extends CI_Controller
{

  public function index(){

   $this->load->library("form_validation");
   $this->form_validation->set_rules('FirstName','FirstName','required');
   $this->form_validation->set_rules('LastName','LastName','required');
   $this->form_validation->set_rules('CompanyName','CompanyName','required');
   $this->form_validation->set_rules('PhoneNumber','PhoneNumber','required');
   $this->form_validation->set_rules('Email','Email','required');


   if($this->form_validation->run()==false){
    $this->load->view("login_form");
    } else {
        //handle post here
        $firstname = $this->input->post('FirstName');
        $lastname = $this->input->post('LastName');
        $companyname = $this->input->post('CompanyName');
        $phonenumber = $this->input->post('PhoneNumber');
        $email = $this->input->post('Email');

        echo $firstname,$lastname,$companyname,$phonenumber,$email;
    }
  }

}
?>
