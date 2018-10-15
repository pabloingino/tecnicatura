<?php
    $conn = new mysqli('localhost', 'user_prueba', 'admin1234', 'tecnicatura');

    if($conn->connect_error) {
      echo $error -> $conn->connect_error;
    }

    $conn->set_charset("utf8");
 ?>
