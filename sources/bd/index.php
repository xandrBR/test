<?php
include '../login/steamauth/userInfo.php';
$Connect = mysql_connect(HOST, USER, PASSWORD, DB);
if (!$Connect) exit ('Error with Database connection');
include '../../bd/setting.php';
date_default_timezone_set('UTC');
$date = date('l jS \of F Y h:i:s A');
$Connect = mysql_connect(HOST, USER, PASSWORD, DB);
if (!$Connect) exit ('Error with Database connection');

INSERT INTO
	steam_bd.player_bd(personaname, avatar, realname, date)
	values($personaname, $avatar, $realname, $date);

?>