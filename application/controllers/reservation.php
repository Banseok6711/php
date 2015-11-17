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


    $this->load->database();
    $this->load->model("reservation_model");
    $re_day = $_POST['res_day'];
    $re_time = $_POST['res_time'];

    if($re_time == '18:00'){
      $re_time = 18;
    }
    // $data =  array('res_day'=>$_POST['res_day']); //,
            // 'res_time'=>$_POST['res_time']);

    $res = $this->reservation_model->reservate($re_time,$re_day);


    $this->load->view("header");
    $this->load->view("navigation");
    $this->load->view("reservationResult",array('res_day'=>$re_day ,
                                                'res_time'=>$re_time));
    $this->load->view("footer");
  }



}


?>
