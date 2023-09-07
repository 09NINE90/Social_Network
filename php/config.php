<?php
  $hostname = "localhost";
  $username = "root";
  $password = "root";
  $dbname = "users";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Ошибка подключения к БД".mysqli_connect_error();
  }
?>
