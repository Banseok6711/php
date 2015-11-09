<?php
    session_start();

    $userid = $_POST["userid"];
    $password = $_POST["password"];
    $passwordCheck = $_POST["passwordCheck"];
    $fullName = $_POST["fullName"];
    $email = $_POST["email"];
    $birth = $_POST["birth"];
    $phone = $_POST["phone"];

    // Database connect
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
    echo "<h3>Connected successfully</h3>";

    $sql = "UPDATE users SET password='".$password."', fullname='".$fullName."', birth=".$birth.",phone='".$phone."',email='".$email."'
            where userid='".$userid."'";

    if($conn->query($sql) == TRUE){
       echo "<h3>update user successfully</h3>";

       //관리자가 수정 or 이용자가 수정 햇는지 구분해줘야함
       if($_SESSION['userid']=="admin"){
         header('Location: http://192.168.0.29:8080/index.php/userlist/showlist');
       }else{
         $_SESSION['userid']=$userid;
         header('Location: myInfo.php');
       }

     }else{
       echo "<h3>Error insert user</h3>".$conn->error;
     }

     //현재 로그인 상태에서 회원가입을 누른 것일 수 도 있기때문에 세션 아웃을 해준다
    //  session_destroy();


?>
