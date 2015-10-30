<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      session_start();
      session_destroy();
      echo '<script language="javascript">';
      echo 'alery(log out )';  //not showing an alert box.
      echo '</script>';
    ?>

    <?php
      // sleep(3);
      header("Location: loginForm.php");
    ?>
  </body>
</html>
