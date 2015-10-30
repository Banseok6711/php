<?php include 'template/header.php';?>
<div class="jumbotron">
  <h1> my Info</h1>
  <p>this page is about my infomation.</p>
  <p>
    <!-- <a class="btn btn-lg btn-primary" href="../../components/#navbar" role="button">View navbar docs »</a> -->
  </p>
</div>

<?php include 'template/navigation.php'; ?>
<article>
    <?php

      // session에 로그인 아뒤가 없으면 로그인 화면으로 이동시키기
      if($_SESSION['userid'] == null){
        header("Location: loginForm.php");
        
      }

      $servername ="localhost";
      $username="root";
      $password="1111";
      $dbname="appledb";

      $conn = mysqli_connect($servername,$username,$password);
      mysqli_select_db($conn,$dbname);

      if($conn->connect_error){
        die("Connection Failed".$conn->connect_error);
      }
      echo "Connection Successfully";

      $sql = "SELECT * FROM users where userid='".$_SESSION['userid']."'";
      $result= mysqli_query($conn, $sql);
      $row = mysqli_fetch_assoc($result);

      if($row != null){
        echo "<h3>".$row['fullname']."</h3>";
      }
     ?>
       <div class="col-sm-9">
         <div class="row">
           <div class="col-sm-3">
             <a class="navbar-brand" >아이디</a>
           </div>
           <div class="col-sm-6">
             <div class="form-group">
                  <?php echo $row['userid']; ?>
             </div>
           </div>
         </div>
       <div class="row">
         <div class="col-sm-3">
           <a class="navbar-brand" >fullName</a>
         </div>
         <div class="col-sm-6">
           <div class="form-group">
                 <?php echo $row['fullname']; ?>
           </div>
         </div>
       </div>
       <div class="row">
         <div class="col-sm-3">
           <a class="navbar-brand" >phone</a>
         </div>
         <div class="col-sm-6">
           <div class="form-group">
                 <?php echo $row['phone']; ?>
           </div>
         </div>
       </div>
       <div class="row">
         <div class="col-sm-3">
           <a class="navbar-brand" >birth</a>
         </div>
         <div class="col-sm-6">
           <div class="form-group">
                 <?php echo $row['birth']; ?>
           </div>
         </div>
       </div>
       <div class="row">
         <div class="col-sm-3">
           <a class="navbar-brand" >email</a>
         </div>
         <div class="col-sm-6">
           <div class="form-group">
                 <?php echo $row['email']; ?>
           </div>
         </div>
       </div>
       <div class="row">
         <div class="col-sm-3">
         </div>
         <div class="col-sm-6">
           <button type="button" class="btn btn-lg btn-success">Edit</button>
         </div>
       </div>


  </div>
</article>
<?php include 'template/footer.php'; ?>
