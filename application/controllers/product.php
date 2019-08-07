<?
defined('BASEPATH') or exit('No direct script access allowed');

Class product extends CI_Controller {


    public function index($product_name=Null){

        $this->load->library("session");

        echo $this->session->flashdata("message");

        echo"$product_name";
        $this->load->view("productview");
    }
}
?>