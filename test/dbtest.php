<html>
  <head>
    <meta charset='utf-8' />
    <link href="../bootstrap-3.3.5-dist/css/bootstrap.min.css" rel="stylesheet" />
  </head>
  <body>
  <?php
      $servername = "localhost";
      $username = "root";
      $password = "1111";
      $dbname = "appledb";

      // Create connection
      $conn = new mysqli($servername, $username, $password,$dbname);

      // Check connection
      if ($conn->connect_error){
            die("Connection failed: ".$conn->connect_error);
      }
      echo "<h3>Connected successfully</h3>";

      $sql = "create table users(
        id INT(6) unsigned auto_increment primary key,
        password varchar(20) not null,
        fullname varchar(30) not null,
        birth int(6) not null,
        email varchar(30),
        phone int(11),
        reg_date timestamp
        )";

        if($conn->query($sql) == TRUE){
         echo "<h3>Table user created successfully</h3>";
       }else{
         echo "<h3>Error createing table</h3>".$conn->error;
       }





$conn->close();



    ?>
  </body>
</html>
