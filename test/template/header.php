<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
      <!-- bootStrap link -->
      <link href="../bootstrap-3.3.5-dist/css/bootstrap-theme.min.css" rel="stylesheet">
      <link href="../bootstrap-3.3.5-dist/css/bootstrap.min.css" rel="stylesheet" />

      <!-- jQuery cnd link -->
      <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
      
    <title>Apple A/S Reservation System</title>
  </head>
  <body>
    <?php
       session_start();
    ?>
    <div class="container">
    <nav class="navbar navbar-inverse">
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
                <li class="active"><a href="http://192.168.0.29:8080/test/reservationForm.php">Reservation</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="#map">map</a></li>
                <li><a href="http://192.168.0.29:8080/test/joinForm.php">회원가입</a></li>
                <li><a href="http://192.168.0.29:8080/test/loginForm.php">로그인</a></li>
              </ul>
            </div><!--/.nav-collapse -->
          </div>
      </nav>
