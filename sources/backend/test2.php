<?php
function echob(){
	echo "<br/>login = ". $_POST['login'];
	echo "<br/>email = ". $_GET['email'];
}
if(!empty($_POST['login'])){
	echo 'sucesfull registration<br>';
	echo $_POST['login'];
}
?>