<?
defined('BASEPATH') or exit('No direct script access allowed');

class Mylibrarycontroller extends CI_controller
{
    public function index()
    {
      $this->load->library("mylibrary");
      echo $this->mylibrary->addition(5,5);
      echo"<br>";
      echo $this->mylibrary->multiply(5,5);
      echo"<br>";
      echo $this->mylibrary->devide(500,5);
    }
}
?>