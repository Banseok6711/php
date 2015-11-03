<?php include 'template/header.php'; ?>
<div class="jumbotron">
  <h1> User Info Edit</h1>
  <p>You can edit your infomation about you.</p>
  <p>
    <!-- <a class="btn btn-lg btn-primary" href="../../components/#navbar" role="button">View navbar docs »</a> -->
  </p>
</div>

<?php include 'template/navigation.php';

  $servername = "localhost";
  $username = "root";
  $password = "1111";
  $dbname = "appledb";

  // Create connection
  $conn = new mysqli($servername, $username, $password,$dbname);

  // Check connection
  if ($conn->connect_error){
        die("Connection failed: ".$conn->connect_error);
  }


  $sql = "SELECT * from users where userid='".$_SESSION['userid']."'";

  $result = mysqli_query($conn,$sql);
  $row = mysqli_fetch_assoc($result);


  // if($conn->query($sql) == TRUE){
  //    echo "<h3>Table user created successfully</h3>";
  //  }else{
  //    echo "<h3>Error createing table</h3>".$conn->error;
  //  }

?>
<article>

  <form action="editProcess.php" method="post" onsubmit="return valiEdit();">
    <div class="col-sm-9">
      <div class="row">
        <div class="col-sm-3">
          <a class="navbar-brand" >아이디</a>
        </div>
        <div class="col-sm-6">
          <div class="form-group">
              <input type="text" class="form-control" value="<?php echo $row['userid']?>" name="userid" readonly="readonly">
              <!-- <div id="userid_check"></div> -->
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <a class="navbar-brand" >password</a>
        </div>
        <div class="col-sm-6">
          <div class="form-group">
              <input type="password" class="form-control" value="<?php echo $row['password']?>" name="password" readonly="readonly">
              <div id="password_check"></div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <a class="navbar-brand" >password check</a>
        </div>
        <div class="col-sm-6">
          <div class="form-group">
              <input type="password" class="form-control"  name="passwordCheck">
              <div id="passwordCheck_check"></div>
          </div>
        </div>
      </div>
    <div class="row">
      <div class="col-sm-3">
        <a class="navbar-brand" >fullName</a>
      </div>
      <div class="col-sm-6">
        <div class="form-group">
            <input type="text" class="form-control" value="<?php echo $row['fullname']?>" name="fullName">
              <div id="fullName_check"></div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-3">
        <a class="navbar-brand" >phone</a>
      </div>
      <div class="col-sm-6">
        <div class="form-group">
            <input type="text" class="form-control" value="<?php echo $row['phone']?>" name="phone">
            <div id="phone_check"></div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-3">
        <a class="navbar-brand" >birth</a>
      </div>
      <div class="col-sm-6">
        <div class="form-group">
            <input type="text" class="form-control" value="<?php echo $row['birth']?>" name="birth">
            <div id="birth_check"></div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-3">
        <a class="navbar-brand" >email</a>
      </div>
      <div class="col-sm-6">
        <div class="form-group">
            <input type="text" class="form-control" value="<?php echo $row['email']?>" name="email">
                <div id="email_check"></div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-3">
      </div>
      <div class="col-sm-6">
        <button type="joinbtn" class="btn btn-lg btn-success" >Edit success</button>
        <!-- <input type="submit" value="회원가입"></input> -->
        <!-- <button type="reset" class="btn btn-lg btn-danger">Reset</button> -->
      </div>
    </div>
</form>

<!--  jquery로 Form 데이터 입력 처리 -->
<script language="javascript" type="text/javascript" src="js/joinValidation.js"></script>
<script type="text/javascript">

  $(document).ready(function(){

      //수정페이지에서 입력된 값들은 유효하기 때문에 처음에 vali_success 부여 해줘야한다.
      $("#fullName_check").addClass("vali_success");
      $("#phone_check").addClass("vali_success");
      $("#birth_check").addClass("vali_success");
      $("#email_check").addClass("vali_success");

      joinValidate();

  });

  function valiEdit(){


    if($(".vali_success").size() == 5){
      alert("vail_success = =5");

    }else{
        alert("Check invalid Elements!!");
        alert($(".vali_success").size());
        return false;
    }

  }





</script>
  </div>

</article>
<?php include 'template/footer.php'; ?>
