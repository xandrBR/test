<?php
require "../login/steamauth/userInfo.php";
function echob(){
	echo "<br/>login = ". $_POST['login'];
	echo "<br/>steam_profile = ". $steamprofile['personaname'];
}
?>