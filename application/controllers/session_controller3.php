<?
defined("BASEPATH") or exit ("No direct script access allowed");

class session_controller3 extends CI_Controller
{
    public function index(){

        $this->load->library("session");
        $this->session->set_userdata("username","Hassaan");

       $username= $this->session->userdata("username");
       echo $username;
       echo"<br>";
       $this->session->set_userdata("Id","123");
       $Id=$this->session->userdata("Id");
       echo $Id;
       echo"<br>";

       $this->session->unset_userdata('username');
       $this->session->unset_userdata('Id');
       $this->session->unset_userdata('fullname');
       $this->session->unset_userdata('email');

       $std_info=array(
           "std_name"=>"Hassaan",
           "std_id"=>"123",
           "std_course"=>"Computer Science",
       );

       echo"<br>";
       $this->session->set_userdata($std_info);
       $student=$this->session->get_userdata($std_info);

       echo"<br>";
       echo '<pre>';
      $student['std_name']="Ali";//updating session variables
       echo"<br>";
      echo $student['std_name'];
      echo"<br>";
       foreach($student as $key => $value){
           if(is_string($value)){
            echo $key ;
            echo"<br>";
            echo $value ;
            echo"<br>";
           }

       }

    //    unset(
    //     $_SESSION['std_name'],
    //     $_SESSION['std_id'],
    //     $_SESSION['std_course']
    //   );
      $this->session->set_flashdata("message","This is flash data message");
      $this->session->set_flashdata("login","You are sucessfully loged in");
    //   $this->load->view("Formget");
    redirect("product/1");
    }
}
?>