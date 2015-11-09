<?php
  class User_model extends CI_Model{
    function __construct(){
      parent::__construct();
    }
    public function gets(){
        return $this->db->query('SELECT * FROM users')->result();
    }

    public function get($id){
      return $this->db->get_where('users',array('id'=>$id))->row();
    }
  }
?>
