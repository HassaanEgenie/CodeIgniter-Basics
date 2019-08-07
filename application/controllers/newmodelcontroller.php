<?php
defined('BASEPATH') or exit('No direct script access allowed');
class newmodelcontroller extends CI_Controller
{
    public function index()
    {
        $this->load->model("newmodel");
        $this->newmodel->firstname();
        $this->newmodel->lastname();
    }
}
