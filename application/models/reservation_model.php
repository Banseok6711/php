<?php
  class Reservation_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    public function reservate($re_time,$re_day){

      // echo $data['res_day'];

      //return $data;
      $str_date = "STR_TO_DATE('".$re_day."','%c/%e/%Y')";

      $sql = "INSERT INTO reservation values(null,'reservation_fourth',".$str_date.",".$re_time.",curdate(),1,".$str_date.")";

      $this->db->query($sql);

        // $this->db->query("INSERT INTO reservation(reservation_user,reservation_day,reservation_time,reg_time,reservation_situation,cancel_time)
                      //  values('lbs6711',".$datsa-> ,123,now(),1,now())");
    }
  }
?>
