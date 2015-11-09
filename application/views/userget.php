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
    <div class="row">
      <div class="col-sm-3">
      </div>
      <div class="col-sm-6">
        <button type="button" class="btn btn-lg btn-success" name="edit">Edit</button>
        <!-- <input type="submit" value="회원가입"></input> -->
        <!-- <button type="reset" class="btn btn-lg btn-danger">Reset</button> -->
      </div>
    </div>
 </div>

 <script type="text/javascript">
   $("button[name='edit']").click(function(){
     $(location).attr('href',"http://192.168.0.29:8080/index.php/userlist/edit/<?=$user->id?>");
   });
 </script>
