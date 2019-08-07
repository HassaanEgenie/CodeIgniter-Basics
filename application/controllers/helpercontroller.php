<?
defined('BASEPATH') or exit('No direct script access allowed');

class helpercontroller extends CI_Controller
{
    public function index()
    {
          $greeting = greeting('morning');
          echo $greeting;
    }
}

?>