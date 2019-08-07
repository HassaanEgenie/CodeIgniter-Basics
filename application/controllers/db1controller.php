<?
defined('BASEPATH') or exit('No direct script access allowed');

Class db1controller extends CI_Controller{

    function index(){

     $this->load->model("db1model");
     $data['user_array']=$this->db1model->return_users();

    }

}
?>
