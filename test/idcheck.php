<?php

  //db connection

  $servername = "localhost";
  $dbusername = "root";
  $dbpassword = "1111";
  $dbname = "appledb";

  // Create connection
  $conn = new mysqli($servername, $dbusername, $dbpassword,$dbname);

  // Check connection
  if ($conn->connect_error){
        die("Connection failed: ".$conn->connect_error);
  }
  // echo "<h3>Connected successfully</h3>";

  $sql ="select userid from users where userid='".$_REQUEST['userid']."'";
  //
  $result =mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);

  //id duplicated
  if($row['userid'] != null){
    echo json_encode(array('result'=>false , 'msg'=>'이미 있는 아이디입니다.'));
 }else{ // 0
    echo json_encode(array('result'=>true , 'msg'=>'사용가능한 아이디입니다.'));
 }

?>
