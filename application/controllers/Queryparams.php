<?
defined('BASEPATH') or exit('No direct script access allowed');
class Queryparams extends CI_Controller{
    public function index()
    {
       $this->load->view("Querypharamview");

       if(isset($_POST['searchterm'])){
           echo"you searched for ".$_POST['searchterm']." item";
       }
    }

}
?>
