<?php
defined('BASEPATH') or exit('No direct script access allowed');
class googlemodelcontroller extends CI_controller
{
    public function index()
    {
        $this->load->model('googlescriptmodelhere', 'google');
        $this->google->firstname();
        $this->google->lastname();
    }
}
