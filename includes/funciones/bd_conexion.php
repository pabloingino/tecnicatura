<?php
    $servidor = 'localhost';
    $userdb = 'campus_user';
    $passdb = 'admin1234';
    $dbname = 'tecnicatura';
    $conn = new mysqli($servidor, $userdb, $passdb, $dbname);

    if($conn->connect_error) {
      echo $error -> $conn->connect_error;
    }

    $conn->set_charset("utf8");
    //mysqli_close($conn);
 ?>
