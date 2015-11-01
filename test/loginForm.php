<?php include "template/header.php" ?>

  <div class="container">

      <form class="form-signin" method="post" action="http://192.168.0.29:8080/test/loginResult.php">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="text"  class="form-control" placeholder="ID" name="userid">
        <label for="inputPassword" class="sr-only" >Password</label>
        <input type="text"  class="form-control" placeholder="Password" name="password">
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>
    </div>
  </div>
  </body>
</html>
