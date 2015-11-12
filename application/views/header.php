<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
      <!-- bootStrap link -->
      <link href="http://192.168.0.29:8080/bootstrap-3.3.5-dist/css/bootstrap-theme.min.css" rel="stylesheet">
      <link href="http://192.168.0.29:8080/bootstrap-3.3.5-dist/css/bootstrap.min.css" rel="stylesheet" />
      <link href="http://192.168.0.29:8080/bootstrap-3.3.5-dist/css/datepicker.css" rel="stylesheet" />

      <link href="http://getbootstrap.com/examples/sticky-footer/sticky-footer.css" rel="stylesheet">

      <!-- jQuery cnd link -->
      <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script src="http://192.168.0.29:8080/bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
      <script src="http://192.168.0.29:8080/bootstrap-3.3.5-dist/js/bootstrap-datepicker.js"></script>


    <title>Apple A/S Reservation System</title>
  </head>
  <body>
    <?php
       session_start();
    ?>
    <div class="container">
    <nav class="navbar navbar-default ">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="http://192.168.0.29:8080/test/main.php">Apple A/S Center</a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="http://192.168.0.29:8080/index.php/reservation/form">Reservation</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="#map">map</a></li>
                <!-- <li><a href='http://192.168.0.29:8080/test/loginForm.php'>로그인</a></li> -->
                <li><a href="http://192.168.0.29:8080/test/joinForm.php">회원가입</a></li>

                <?php
                  if($_SESSION['userid'] == "admin"){
                    echo "<li><a href='#'>관리자 접속중</a></li>" ;
                  }else if($_SESSION['userid'] != null){
                    echo "<li><a href='#'>".$_SESSION['userid']."님</a></li>";
                  }else{
                    echo "<li><a href='http://192.168.0.29:8080/test/loginForm.php'>로그인</a></li>";
                  }
                  ?>

              </ul>
            </div><!--/.nav-collapse -->
          </div>
      </nav>
