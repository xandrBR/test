<?php
include '../login/steamauth/steamauth.php';
include '../login/steamauth/userInfo.php';
?>
<h1>I want to kill the world</h1>
<?php
                            if(empty($steamprofile['personaname'])){
                                echo "nothing";
                            }else{
                             echo $steamprofile['personaname'];
                             echo "<img src='".$steamprofile['avatarmedium']."'>";
                             
                          }
?>
