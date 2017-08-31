<?php
/* Перенаправление броузера на другую страницу в той же директории, что и
изначально запрошенная */
$host  = $_SERVER['HTTP_HOST'];
$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$extra = 'mypage.php';
header("Location: http://$host$uri/$extra");
exit;
?>