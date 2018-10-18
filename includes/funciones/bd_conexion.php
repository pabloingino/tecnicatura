<?php
    $conn = new mysqli('localhost', 'pablo', 'samsung87', 'tecnicatura');

    if($conn->connect_error) {
      echo $error -> $conn->connect_error;
    }

    $conn->set_charset("utf8");
 ?>
