<?
defined('BASEPATH') or exit('No direct script access allowed');

class Form_get extends CI_Controller
{
    public function index()
    {
        $this->load->view("Formget");


        $Username= $this->input->get('username');

        $Id=$this->input->get('id');
        echo $Username."<br>";
        echo $Id."<br>";
    }

    public function test() {

        echo $_GET['param1'];
echo "</br>";
        echo $_GET['param2'];
        
echo "</br>";
echo $_GET['param3'];

exit;
        echo 'this is a test';
    }

}

?>
