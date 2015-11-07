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

    ?>

    <?php
      // sleep(3);
      header("Location: main.php");
    ?>
  </body>
</html>
