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

  <form action="joinResult.php" method="post">
    <div class="col-sm-9">
      <div class="row">
        <div class="col-sm-3">
          <a class="navbar-brand" >아이디</a>
        </div>
        <div class="col-sm-6">
          <div class="form-group">
              <input type="text" class="form-control" placeholder="ID" name="userid"  >
              <div id="id_check"></div>
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
              <div id="passwordCheck_check">not equal password</div>
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
            <div>number must be below 11 number</div>
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
            <div>birth number 6 </div>
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
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-3">
      </div>
      <div class="col-sm-6">
        <button type="submit" class="btn btn-lg btn-success" >Join</button>
        <button type="reset" class="btn btn-lg btn-danger">Reset</button>
      </div>
    </div>
</form>

<!--  jquery로 Form 데이터 입력 처리 -->
<script type="text/javascript">

  $(document).ready(function(){

      // 아이디 중복인지 Ajax로 체크해주기
      $("input[name='userid']").focusout(function(){
          $("#id_check").append("ID is duplicated").css("color","red");
      });
      $("input[name='userid']").focusin(function(){
          $("#id_check").empty();
      });

      //비밀번호 자릿수 체크
      $("input[name='password']").focusout(function(){
        if($("input[name='password']").val().length <7 ){
            $("#password_check").append("비밀번호 6자리 이상입력하세요.").css("color", "red");
        }
      });
      $("input[name='password']").focusin(function(){
          $("#password_check").empty();
      });

      //비밀번호 확인
      $("input[name='passwordCheck']").focusout(function(){
          if($("input[name='password']").val() == $("input[name='passwordCheck']").val() ){
              $("#passwordCheck_check").append("비밀번호 일치합니다.").css("color","blue");
          }else{
            $("#passwordCheck_check").append("비밀번호가 틀립니다.").css("color","red");
          }
      });

      $("input[name='passwordCheck']").focusin(function(){
        $("#passwordCheck_check").empty();
      });

  });




</script>



  </div>

</article>
<?php include 'template/footer.php'; ?>
