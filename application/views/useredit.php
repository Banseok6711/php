<article>

  <form action="http://localhost:8080/test/editProcess.php" method="post" >
    <div class="col-sm-9">
      <div class="row">
        <div class="col-sm-3">
          <a class="navbar-brand" >아이디</a>
        </div>
        <div class="col-sm-6">
          <div class="form-group">
              <input type="text" class="form-control" value="<?=$user->userid?>" name="userid" readonly="readonly">
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
              <input type="text" class="form-control" value="<?=$user->password?>" name="password" >
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
            <input type="text" class="form-control" value="<?=$user->fullname?>" name="fullName">
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
            <input type="text" class="form-control" value="<?=$user->phone?>" name="phone">
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
            <input type="text" class="form-control" value="<?=$user->birth?>" name="birth">
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
            <input type="text" class="form-control" value="<?=$user->email?>" name="email">
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

  </div>

</article>
