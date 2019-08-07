<?php
defined('BASEPATH') or die('No direct script access allowed');

class Viewvariables extends CI_Controller
{

    public function index()
    {

        // $marks = array('23','52','78');

        $marks = array(
            "Name" => "Ali",
            "RegNo" => "45677",
            "Course" => "Computer Science",

        );

        $view_data['marks'] = $marks;

        $view_data['title'] = "test";
        $view_data['Colour'] = "Blue";
        $this->load->view('Phpvariablesview', $view_data);
    }
}