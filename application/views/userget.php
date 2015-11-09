<h1>사용자 정보 </h1>
    <div class="col-sm-9">
      <div class="row">
        <div class="col-sm-3">
          <a class="navbar-brand" >아이디</a>
        </div>
        <div class="col-sm-6">
          <div class="form-group">
               <?= $user->userid?>
          </div>
        </div>
      </div>
    <div class="row">
      <div class="col-sm-3">
        <a class="navbar-brand" >fullName</a>
      </div>
      <div class="col-sm-6">
        <div class="form-group">
              <?= $user->fullname?>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-3">
        <a class="navbar-brand" >phone</a>
      </div>
      <div class="col-sm-6">
        <div class="form-group">
              <?= $user->phone?>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-3">
        <a class="navbar-brand" >birth</a>
      </div>
      <div class="col-sm-6">
        <div class="form-group">
              <?= $user->birth?>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-3">
        <a class="navbar-brand" >email</a>
      </div>
      <div class="col-sm-6">
        <div class="form-group">
              <?= $user->email?>
        </div>
      </div>
    </div>
 </div>
