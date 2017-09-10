<?php
if (empty($_SESSION['steam_uptodate']) or empty($_SESSION['steam_personaname'])) {
	require 'SteamConfig.php';
	$url = file_get_contents("http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=".$steamauth['apikey']."&steamids=".$_SESSION['steamid']); 
	$content = json_decode($url, true);
	$_SESSION['steam_steamid'] = $content['response']['players'][0]['steamid'];
	$_SESSION['steam_communityvisibilitystate'] = $content['response']['players'][0]['communityvisibilitystate'];
	$_SESSION['steam_profilestate'] = $content['response']['players'][0]['profilestate'];
	$_SESSION['steam_personaname'] = $content['response']['players'][0]['personaname'];
	$_SESSION['steam_lastlogoff'] = $content['response']['players'][0]['lastlogoff'];
	$_SESSION['steam_profileurl'] = $content['response']['players'][0]['profileurl'];
	$_SESSION['steam_avatar'] = $content['response']['players'][0]['avatar'];
	$_SESSION['steam_avatarmedium'] = $content['response']['players'][0]['avatarmedium'];
	$_SESSION['steam_avatarfull'] = $content['response']['players'][0]['avatarfull'];
	$_SESSION['steam_personastate'] = $content['response']['players'][0]['personastate'];
	if (isset($content['response']['players'][0]['realname'])) { 
		   $_SESSION['steam_realname'] = $content['response']['players'][0]['realname'];
	   } else {
		   $_SESSION['steam_realname'] = "Real name not given";
	}
	$_SESSION['steam_primaryclanid'] = $content['response']['players'][0]['primaryclanid'];
	$_SESSION['steam_timecreated'] = $content['response']['players'][0]['timecreated'];
	$_SESSION['steam_uptodate'] = time();
//<<<<<<< 1cc55c881c1d21550104df67413333c56190a966
	//есть ли в базе данных этот человек, да ничего не делаем, нет добавляем в базу
//=======
	//		require 'db.php';
	//	$date = date("H:i:s"); 
	//	$steamid = $_SESSION['steam_steamid'];
	//	$personaname = $_SESSION['steam_personaname'];
	//	$avatar = $_SESSION['steam_avatar'];
	//	$realname = $_SESSION['steam_realname']; 
	//	$query = "INSERT INTO `steam_bd`.`player_db` (`id`,`steamid`, `personaname`, `avatar`, `realname`, `date`) VALUES ('{$id}', '{$steamid}', '{$personaname}', '{$avatar}', '{$realname}', '{$date}')";
	//	$result = mysqli_query($connection, $query);
	//	>>>>>>> 461ed3b1fcb57622c17a3bf9789cba0666d8c065
}


$steamprofile['steamid'] = $_SESSION['steam_steamid'];
$steamprofile['communityvisibilitystate'] = $_SESSION['steam_communityvisibilitystate'];
$steamprofile['profilestate'] = $_SESSION['steam_profilestate'];
$steamprofile['personaname'] = $_SESSION['steam_personaname'];
$steamprofile['lastlogoff'] = $_SESSION['steam_lastlogoff'];
$steamprofile['profileurl'] = $_SESSION['steam_profileurl'];
$steamprofile['avatar'] = $_SESSION['steam_avatar'];
$steamprofile['avatarmedium'] = $_SESSION['steam_avatarmedium'];
$steamprofile['avatarfull'] = $_SESSION['steam_avatarfull'];
$steamprofile['personastate'] = $_SESSION['steam_personastate'];
$steamprofile['realname'] = $_SESSION['steam_realname'];
$steamprofile['primaryclanid'] = $_SESSION['steam_primaryclanid'];
$steamprofile['timecreated'] = $_SESSION['steam_timecreated'];
$steamprofile['uptodate'] = $_SESSION['steam_uptodate'];
//require 'db.php';
//$date = date("H:i:s"); 
//$steamid = $steamprofile['steamid'];
//$personaname = $steamprofile['personaname'];
//$avatar = $steamprofile['avatar'];
//$realname = $steamprofile['realname']; 
//$query = "INSERT INTO `steam_bd`.`player_db` (`id`,`steamid`, `personaname`, `avatar`, `realname`, `date`) VALUES ('{$id}', '{$steamid}', '{$personaname}', '{$avatar}', '{$realname}', '{$date}')";
//$result = mysqli_query($connection, $query);
?>