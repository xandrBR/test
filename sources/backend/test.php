<html>
<body>
<form method="POST" action="?start"> <!--указание метода GET-->
Login: <input type="text" name="login">
E-mail: <input type="text" name="e">
<input type="submit" value="Отправить">
</form>
<?php
if(isset($_GET['start'])){
	require "test2.php";
	echob();
}
/*С помощью суперглобального массива $_GET
выводим принятые значения:*/
?>
</body>
</html>