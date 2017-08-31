<html>
<body>
<form method="POST" action="test2.php"> <!--указание метода GET-->
Login: <input type="text" name="login">
E-mail: <input type="text" name="e">
<input type="submit" value="Отправить">
</form>
<?php
require 'test2.php';
/*С помощью суперглобального массива $_GET
выводим принятые значения:*/
echob();
?>
</body>
</html>