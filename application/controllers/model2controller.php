<?
defined('BASEPATH') or exit('No direct script access allowed');

Class model2controller extends CI_Controller{

public function index(){
    $this->load->model("model2");
    $this->model2->address();
    $this->model2->country();
}
}
?>
