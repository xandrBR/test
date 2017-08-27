<?php 
require 'openid.php'; 
$STEAMAPI = "EFD43C071D1D24344693D58B7382DD93"; 
try 
{ 
$openid = new LightOpenID('https://steam-tests2.hol.es/register.php'); 
if(!$openid->mode) 
{ 
if(isset($_GET['login'])) 
{ 
$openid->identity = 'https://steamcommunity.com/openid/?l=english'; 
header('Location: ' . $openid->authUrl()); 
} 
?> 
<form action="?login" method="post"> 
<input type="image" src="https://cdn.steamcommunity.com/public/images/signinthr.."> 
</form> 
<?php 
} 
elseif($openid->mode == 'cancel') 
{ 
echo 'User has canceled authentication!'; 
} 
else 
{ 
if($openid->validate()) 
{ 
$id = $openid->identity; 
// identity is something like: http://steamcommunity.com/openid/id/76561197960435530 
// we only care about the unique account ID at the end of the URL. 
$ptn = "/^https:\/\/steamcommunity\.com\/openid\/id\/(7[0-9]{15,25}+)$/"; 
preg_match($ptn, $id, $matches); 
echo "User is logged in (steamID: $matches[1])\n"; 
$url = file_get_contents("https://api.steampowered.com/ISteamUser/GetPlayerSumma.."); 
$data = (array) json_decode($url)->response->player[0]; 

print_r($data); 
} 
else 
{ 
echo "User is not logged in.\n"; 
} 
} 
} 
catch(ErrorException $e) 
{ 
echo $e->getMessage(); 
} 
?>
<?php 
require 'openid.php'; 
$STEAMAPI = "EFD43C071D1D24344693D58B7382DD93"; 
try 
{ 
$openid = new LightOpenID('https://steam-tests2.hol.es/register.php'); 
if(!$openid->mode) 
{ 
if(isset($_GET['login'])) 
{ 
$openid->identity = 'https://steamcommunity.com/openid/?l=english'; 
header('Location: ' . $openid->authUrl()); 
} 
?> 
<form action="?login" method="post"> 
<input type="image" src="https://cdn.steamcommunity.com/public/images/signinthr.."> 
</form> 
<?php 
} 
elseif($openid->mode == 'cancel') 
{ 
echo 'User has canceled authentication!'; 
} 
else 
{ 
if($openid->validate()) 
{ 
$id = $openid->identity; 
// identity is something like: http://steamcommunity.com/openid/id/76561197960435530 
// we only care about the unique account ID at the end of the URL. 
$ptn = "/^https:\/\/steamcommunity\.com\/openid\/id\/(7[0-9]{15,25}+)$/"; 
preg_match($ptn, $id, $matches); 
echo "User is logged in (steamID: $matches[1])\n"; 
$url = file_get_contents("https://api.steampowered.com/ISteamUser/GetPlayerSumma.."); 
$data = (array) json_decode($url)->response->player[0]; 

print_r($data); 
} 
else 
{ 
echo "User is not logged in.\n"; 
} 
} 
} 
catch(ErrorException $e) 
{ 
echo $e->getMessage(); 
} 
?>
