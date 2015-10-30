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
              <input type="text" class="form-control" placeholder="ID" name="userid">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <a class="navbar-brand" >password</a>
        </div>
        <div class="col-sm-6">
          <div class="form-group">
              <input type="text" class="form-control" placeholder="password" name="password">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <a class="navbar-brand" >password check</a>
        </div>
        <div class="col-sm-6">
          <div class="form-group">
              <input type="text" class="form-control" placeholder="password check" name="passwordCheck">
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
        <button type="submit" class="btn btn-lg btn-success">Join</button>
        <button type="reset" class="btn btn-lg btn-danger">Reset</button>
      </div>
    </div>
</form>


  </div>

</article>
<?php include 'template/footer.php'; ?>
