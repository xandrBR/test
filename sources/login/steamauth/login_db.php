<?php 
require 'db.php';
$date = date("H:i:s"); 
$steamid = $steamprofile['steamid'];
$personaname = $steamprofile['personaname'];
$avatar = $steamprofile['avatar'];
$realname = $steamprofile['realname']; 
$query = "INSERT INTO `steam_bd`.`player_db` (`id`,`steamid`, `personaname`, `avatar`, `realname`, `date`) VALUES ('{$id}', '{$steamid}', '{$personaname}', '{$avatar}', '{$realname}', '{$date}')";
$result = mysqli_query($connection, $query);
?>