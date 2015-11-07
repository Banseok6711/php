<?php include "template/header.php" ?>

  <div class="container">

      <form class="form-signin" method="post" action="http://192.168.0.29:8080/test/loginResult.php" onsubmit="return vali();">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="text"  class="form-control" placeholder="ID" name="userid">
        <div id="login_check"></div>
        <label for="inputPassword" class="sr-only" >Password</label>
        <input type="text"  class="form-control" placeholder="Password" name="password">
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>
    </div>

    <script language="javascript" type="text/javascript" src="js/loginValidation.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            loginValidation();
        });

        function vali(){
          // loginValidation();

          if($("#login_check").hasClass("vali_success")){
              alert("로그인 성공!");
          }else{
            return false;
          }
        }
    </script>
<?php include "template/footer.php" ?>
