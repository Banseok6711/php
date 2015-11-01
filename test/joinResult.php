<?php include 'template/header.php'; ?>
<div class="jumbotron">
  <h1> 회원가입 완료</h1>
  <p>회원가입을 축하합니다.</p>
  <p>
    <!-- <a class="btn btn-lg btn-primary" href="../../components/#navbar" role="button">View navbar docs »</a> -->
  </p>
</div>

<?php include 'template/navigation.php';
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

    $sql = "insert into users(userid,password,fullname,birth,email,phone,reg_date)
    values('".$userid."','".$password."','".$fullName."',".$birth.",'".$email."',".$phone.","."now())";

      if($conn->query($sql) == TRUE){
       echo "<h3>insert user successfully</h3>";
     }else{
       echo "<h3>Error insert user</h3>".$conn->error;
     }

     //현재 로그인 상태에서 회원가입을 누른 것일 수 도 있기때문에 세션 아웃을 해준다
     session_destroy();


?>
<article>
  <div class="col-sm-9">
    <div class="row">
      <div class="col-sm-3">
        <a class="navbar-brand" href="#">아이디</a>
      </div>
      <div class="col-sm-6">
        <div class="form-group">
            <?php
              echo $userid;
            ?>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-3">
        <a class="navbar-brand" href="#">password</a>
      </div>
      <div class="col-sm-6">
        <div class="form-group">
          <?php
            echo $password;
          ?>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-3">
        <a class="navbar-brand" href="#">password check</a>
      </div>
      <div class="col-sm-6">
        <div class="form-group">
          <?php
            echo $passwordCheck;
          ?>
        </div>
      </div>
    </div>
  <div class="row">
    <div class="col-sm-3">
      <a class="navbar-brand" href="#">userName</a>
    </div>
    <div class="col-sm-6">
      <div class="form-group">
        <?php
          echo $fullName;
        ?>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-3">
      <a class="navbar-brand" href="#">phone</a>
    </div>
    <div class="col-sm-6">
      <div class="form-group">
        <?php
          echo $phone;
        ?>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-3">
      <a class="navbar-brand" href="#">birth</a>
    </div>
    <div class="col-sm-6">
      <div class="form-group">
        <?php
          echo $birth;
        ?>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-3">
      <a class="navbar-brand" href="#">email</a>
    </div>
    <div class="col-sm-6">
      <div class="form-group">
        <?php
          echo $email;
        ?>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-3">
    </div>
    <div class="col-sm-3">
      <a href="http://192.168.0.29:8080/test/loginForm.php" >Login</button>
    </div>
  </div>
</form>
  </div>
</article>
<?php include 'template/footer.php'; ?>
