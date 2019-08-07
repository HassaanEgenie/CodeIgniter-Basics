<?php
class Calculaterhelper_controller extends CI_Controller
{
    public function index()
    {
        $this->load->helper("calculator");
        echo addition(5, 5);
        echo "<br>";
        echo multiply(5, 5);
        echo "<br>";
        echo devide(600, 5);
        echo "<br>";
        myname("hassaan");
    }
}