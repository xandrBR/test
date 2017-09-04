<?php
  $connection = mysqli_connect('127.0.0.1', 'root', '', 'steam_bd');

  if ($connection == false)
  {
  		echo 'Error with connection';
  		echo mysqli_connect_error();
  		exit();
  }else
  {
  echo 'WE CONNECT WITH DB';
  }
  $id = 11;
  $personaname = superqwert;
  $realname = Bezrukov;
  $query = "INSERT INTO `steam_bd`.`player_bd` (`id`, `personaname`,`realname`) VALUES ({$id},'{$personaname}', '{$realname}')";
  $result1 = mysqli_query($connection, $query);
 echo 'done'; 
 ?>


 