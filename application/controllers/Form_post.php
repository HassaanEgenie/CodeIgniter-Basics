<?
defined('BASEPATH') or exit('No direct script access allowed');

class Form_post extends CI_Controller
{
    public function index()
    {
        $this->load->view("Formpost");


        $Username= $this->input->post('username');

        $Id=$this->input->post('id');
        echo $Username."<br>";
        echo $Id."<br>";
    }

    public function test($a,$b) {
        echo $a;
        echo "<br>";
        echo $b;
        echo 'this is a test';
    }

}

?>
