<?php
$dblocation = "localhost";
$dbname = "steam_bd";
$dbuser = "root";
$dbpasswd = "";
$dbcnx = $dblocation,$dbuser,$dbpasswd;
if (!$dbcnx) 
{
echo( "<P>В настоящий момент сервер базы данных не доступен, поэтому 
корректное отображение страницы невозможно.</P>" );
exit();
}
if (!@mysql_select_db($dbname, $dbcnx)) 
{
echo( "<P>В настоящий момент база данных не доступна, поэтому
корректное отображение страницы невозможно.</P>" );
exit();
}
?>