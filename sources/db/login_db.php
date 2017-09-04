<?php
require 'db.php';
$date = date("H:i:s"); 
$query = "INSERT INTO `steam_bd`.`player_db` (`steamid`, `personaname`, `avatar`, `realname`, `date`) VALUES ({$steamid},'{$personaname}', '{$avatar}', '{$realname}', {$date})";
$result = mysqli_query($connection, $query);
?>

