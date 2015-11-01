<?php include 'template/header.php'; ?>
<div class="jumbotron">
  <h1> 로그인</h1>
  <p>this page is about my infomation.</p>
  <p>
    <!-- <a class="btn btn-lg btn-primary" href="../../components/#navbar" role="button">View navbar docs »</a> -->
  </p>
</div>

<?php include 'template/navigation.php'; ?>
<?php
  $servername = "localhost";
  $dbusername = "root";
  $dbpassword = "1111";
  $dbname = "appledb";

  // Create connection
  $conn =mysqli_connect($servername, $dbusername, $dbpassword);
  mysqli_select_db($conn , $dbname);

  // Check connection
  if ($conn->connect_error){
        die("Connection failed: ".$conn->connect_error);
  }
  echo "<h3>Connected successfully</h3>";

  $userid = mysql_real_escape_string($_POST['userid']);
  $password = mysql_real_escape_string($_POST['password']);

  $sql = "select * from users where userid='".$userid."' AND password='".$password."'";
  //  AND  password='".$_POST['password']."'";

  $result =mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  // var_dump($row);
  // echo "<br/>";
  // echo "<h3>sql : ".$sql."</h3>";s


  if($row != null){
     echo "<h3>Login Successfully</h3>";
     echo $row['fullname']."님 반갑습니다.";
     // 세션에 로그인한 id 등록
    //  session_save_path("./session");

     $_SESSION['userid']=$row['userid'];
   }else{
     echo "<h3>Error Login</h3>".$conn->error;
       
   }
?>

<article>
  <div class="col-xs-6 col-sm-6"></div>
  <div class="col-xs-6 col-sm-6"></div>
</article>
<?php include 'template/footer.php'; ?>
