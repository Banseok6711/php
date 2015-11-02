<?php include 'template/header.php'; ?>
<div class="jumbotron">
  <h1> 회원가입</h1>
  <p>간편하게 가입후 사이트를 이용하세요.</p>
  <p>
    <!-- <a class="btn btn-lg btn-primary" href="../../components/#navbar" role="button">View navbar docs »</a> -->
  </p>
</div>

<?php include 'template/navigation.php'; ?>
<article>

  <form action="joinResult.php" method="post" onsubmit="return vali();">
    <div class="col-sm-9">
      <div class="row">
        <div class="col-sm-3">
          <a class="navbar-brand" >아이디</a>
        </div>
        <div class="col-sm-6">
          <div class="form-group">
              <input type="text" class="form-control" placeholder="ID" name="userid"  >
              <div id="userid_check"></div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <a class="navbar-brand" >password</a>
        </div>
        <div class="col-sm-6">
          <div class="form-group">
              <input type="password" class="form-control" placeholder="password" name="password">
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
              <input type="password" class="form-control" placeholder="password check" name="passwordCheck">
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
            <input type="text" class="form-control" placeholder="fullnName" name="fullName">
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
            <input type="text" class="form-control" placeholder="phone" name="phone">
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
            <input type="text" class="form-control" placeholder="birth" name="birth">
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
            <input type="text" class="form-control" placeholder="email" name="email">
                <div id="email_check"></div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-3">
      </div>
      <div class="col-sm-6">
        <button type="joinbtn" class="btn btn-lg btn-success" >Join</button>
        <!-- <input type="submit" value="회원가입"></input> -->
        <!-- <button type="reset" class="btn btn-lg btn-danger">Reset</button> -->
      </div>
    </div>
</form>

<!--  jquery로 Form 데이터 입력 처리 -->
<script language="javascript" type="text/javascript" src="js/joinValidation.js"></script>
<script type="text/javascript">

  $(document).ready(function(){
      // 아이디 중복인지 Ajax로 체크해주기
      joinValidate();

  });

  function vali(){
    if($(".vali_success").size() == 7){
      alert("vail_success = =7");

    }else{
        alert("Check invalid Elements!!");
        return false;
    }

  }





</script>
  </div>

</article>
<?php include 'template/footer.php'; ?>
