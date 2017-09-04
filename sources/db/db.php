<?php
  $connection = mysqli_connect('127.0.0.1', 'root', '', 'steam_bd');

  if ($connection == false)
  {
  		echo 'Error with connection';
  		echo mysqli_connect_error();
  		exit();
  }
?>