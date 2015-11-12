<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reservation extends CI_Controller{

  public function form(){

    $this->load->view("header");
    $this->load->view("navigation");
    $this->load->view("reservationform");
    $this->load->view("footer");
  }

  public function formsubmit(){
    $this->load->view("header");
    $this->load->view("navigation");
    $this->load->view("reservationResult");
    $this->load->view("footer");

  }

}


?>
