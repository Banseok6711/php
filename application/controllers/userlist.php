<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class Userlist extends CI_Controller{

    public function showlist(){
      $this->load->database();
      $this->load->model('user_model');
      $data = $this->user_model->gets();

      $this->load->view("header");
      $this->load->view("navigation");
      $this->load->view("userlist",array('userlist'=>$data));
      $this->load->view("footer");
    }

    public function get($id){
      $this->load->database();
      $this->load->model('user_model');
      $user = $this->user_model->get($id);

      $this->load->view("header");
      $this->load->view("navigation");
      $this->load->view("userget",array('user'=>$user));
      $this->load->view("footer");
    }

    public function edit($id){
      $this->load->database();
      $this->load->model('user_model');
      $user = $this->user_model->get($id);

      $this->load->view("header");
      $this->load->view("navigation");
      $this->load->view("useredit",array('user'=>$user));
      $this->load->view("footer");

    }



  }
?>
