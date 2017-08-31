<?php
 include 'sources/login/steamauth/steamauth.php'
?>
<!DOCTYPE html>
<html lang="ru">
<head>                 
    <meta charset="UTF-8">
    <title>Abstract</title>
    <link rel="stylesheet" href="sources/css/reset.css">
    <link rel="stylesheet" href="sources/css/main.css?1">
    <link rel="stylesheet" href="sources/css/index.css">
    
</head>
<body>
<wrapper>
    <asside>
        <div class="logo">
            <a href="../../index.php" class="title">
                <img alt="" class="img_logo" src="sources/ico/i1.svg"><h3>Abstract</h3>
            </a>
            <div class="second_title_text">Sait</div>
        </div>
        <nav>
            <ul class="ul_of_nav">
                <a href="sources/second/item1.php" class="nav_link"><li class="li_of_nav"><p class="p_of_nav">Item #1</p><img alt="" class="material-icons" src="sources/ico/i3.svg"></li></a>
                <a href="sources/second/item2.php" class="nav_link"><li class="li_of_nav"><p class="p_of_nav">Item #2</p><img alt="" class="material-icons" src="sources/ico/i3.svg"></li></a>
                <a class="nav_link"><li class="li_of_nav"><p class="p_of_nav"><strong>Item #3</strong></p><img alt="" class="material-icons" src="sources/ico/i3.svg"></li></a>
                <a class="nav_link"><li class="li_of_nav"><p class="p_of_nav"><strong>Item #4</strong></p><img alt="" class="material-icons" src="sources/ico/i3.svg"></li></a>
                <a class="nav_link"><li class="li_of_nav"><p class="p_of_nav">Item #5</p><img alt="" class="material-icons" src="sources/ico/i3.svg"></li></a>
                <a class="nav_link"><li class="li_of_nav"><p class="p_of_nav">Item #6</p><img alt="" class="material-icons" src="sources/ico/i3.svg"></li></a>
                <a class="nav_link"><li class="li_of_nav"><p class="p_of_nav">Item #7</p><img alt="" class="material-icons" src="sources/ico/i3.svg"></li></a>
                <a class="nav_link"><li class="li_of_nav"><p class="p_of_nav">Item #8</p><img alt="" class="material-icons" src="sources/ico/i3.svg"></li></a>
            </ul>
        </nav>
        <div class="subscribe">
            <p class="subscribe_title">We are in socials</p>
            <div class="subscribe_imgs">
                <a><img alt="" src="sources/ico/social/u1.png" class="subscribe_img"></a>
                <a><img alt="" src="sources/ico/social/u2.png" class="subscribe_img"></a>
                <a href="https://vk.com/abstractteam"><img alt="" src="sources/ico/social/u3.png" class="subscribe_img"></a>
                <a href="https://plus.google.com/u/0/b/108463637394606322564/108463637394606322564"><img alt="" src="sources/ico/social/u4.png" class="subscribe_img"></a>
            </div>
        </div>
    </asside>
    <main>
        <header>
            <div class="news"><p class="p_of_news">Some strage text that no one<br>can understand</p></div>
            <div class="header_left">
                <div class="settings">
                    <div class="lang" onclick="nav_lang();">
                        <form action="sources/second/404_page.php" method="POST" target="_blank">
                            <ul class="ul_of_lang" id='langs'>
                                <li class="li_of_lang1"><img alt="" class="img_of_lang" src="sources/ico/flags/russia.png"></li>
                                <li class="li_of_lang"><input type="image" alt="" name="lang" value="us" class="img_of_lang" src="sources/ico/flags/states.png"></li>
                                <li class="li_of_lang"><input type="image" alt="" name="lang" value="us" class="img_of_lang" src="sources/ico/flags/ukraine.png"></li>
                                <li class="li_of_lang"><input type="image" alt="" name="lang" value="us" class="img_of_lang" src="sources/ico/flags/kazakhstan.png"></li>
                                <li class="li_of_lang"><input type="image" alt="" name="lang" value="us" class="img_of_lang" src="sources/ico/flags/germany.png"></li>
                            </ul>
                        </form>
                    </div>
                    <div class="LK">
                        <?php
                         include 'sources/login/steamauth/userInfo.php';
                            if(empty($steamprofile['personaname'])){
                                loginbutton();
                            }else{
                             echo $steamprofile['personaname'];
                             echo "<img src='".$steamprofile['avatarmedium']."'>";
                             
                            }
                        ?>
                    </div> <!--личный кабинет в начале кнопка-->
                    <div class='buttons'>
                        <?php
                    if(!empty($steamprofile['personaname'])){
                        logoutbutton();
                        echo "<form method='POST'><button>Buy Ar</button></form>";
                    }
                    ?>
                    </div>
                </div>
            </div>
        </header>
        <div class="conteiner">
            <div class="box"> <!--внутренний бокс контейнера, который видим и имеет отступ от контейнера-->
                <div class="conteiner_of_box_content"> <!-- для отступов--> 
                    <div class="top_box">
                        <div class="slaider"> <!--слайдер-->
                            <a class="slaider_link"><img alt="" class="slaid_active"  id="slaid1" src="sources/background/w3.jpg"></a>
                            <a class="slaider_link"><img alt="" class="slaid" id="slaid2" src="sources/background/w4.jpg"></a>
                            <a class="slaider_link"><img alt="" class="slaid" id="slaid3" src="sources/background/w2.jpg"></a>
                            <div id="slaid_switchers" class="switchers">
                                <div id="switch_conteiner#1" onmouseover="show_sw();" onmouseout="hide_sw();" onclick="skip_prev();" class="switcher_conteiner"><div class="switcher" id="prev"><img alt="" src="sources/ico/i8%20(skip%20prev).svg"></div></div>
                                <div id="switch_conteiner#2" onmouseover="show_sw();" onmouseout="hide_sw();" onclick="skip_next();" class="switcher_conteiner"><div class="switcher" id="next"><img alt="" src="sources/ico/i7%20(skip%20next).svg"></div></div>
                            </div>
                        </div>
                        <div class="counter_of_wins">
                            <p class="p1">Victiries</p>
                            <div class="wins">
                                1000
                            </div>
                            <p class="p1">Looses</p>
                            <div class="wins">0</div> 
                        </div> <!--блок кол-во побед и поражений-->
                        <div class="VK_social">VK</div> <!--VK-->
                    </div>
                    <div class="bottom_box">
                        <div class="week_top">
                            <div class=title>Top</div>
                            <div class=top>players</div>
                        </div> <!--Топ недели-->
                        <div class="center_of_bottom_box">
                            <div class="counter_of_plays">
                                <table class=table1>
                                    <tr>
                                    <td class="td_of_players"><img alt="" src="sources/ico/i7%20(skip%20next).svg"></td>
                                    <td class="td_of_players" id="#onlinebar-text"><p>online:
                                    <?php
                                        require 'sources/backend/online.php';
                                     ?>
                                    </p></td>
                                    <td class="td_of_players"><img alt="" src="sources/ico/i8%20(skip%20prev).svg"></td>
                                    </tr>
                                </table>
                            </div> <!--Онлайн-->
                            <div class="fast_game"><form>fast game</form></div><!--быстрая игра//лотерея//classic-->
                        </div>
                        <div class="history_of_games">history</div><!--история игр, в которой показывается только победы-->
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <div class="self_nav" id="self_nav_id">
                <div class="self_nav_title" onclick="show_and_hide_self_nav();" id="self_nav_title_id">Self menu</div>
                <div class="main_of_self_nav">
                    <div class="asside_af_self_nav">
                        <div class="self_nav_container">
                            <ul class="ul_of_self_nav">
                                <a class="self_nav_link"><li class="li_of_self_nav">Self information</li></a>
                                <a class="self_nav_link"><li class="li_of_self_nav">Achivments</li></a>
                                <a class="self_nav_link"><li class="li_of_self_nav">Rang</li></a>
                                <a class="self_nav_link"><li class="li_of_self_nav">Kvest//Tasks</li></a>
                                <a class="self_nav_link"><li class="li_of_self_nav">Referal model</li></a>
                                <a class="self_nav_link"><li class="li_of_self_nav">By Ar</li></a>
                            </ul>
                        </div>
                    </div>
                    <div class="self_nav_content">
                        <!-- это та часть, которая зависит от пользователя (backend), остальное в self nav не трогай-->
                    </div>
                </div>
            </div>
            <div class="chat" id="chat">
                <div class="chat_title" onclick="show_and_hide_chat()" id="chat_title">Chat</div>
                <div class="main_of_chat">
                    <!--чат здесь, и только здесь, остальное относящееся к чату не трогай-->
                </div>
            </div>
        </footer>
    </main>
</wrapper>

<script src="sources/js/index.js?1"></script>
<script src="sources/js/main.js?12"></script>
</body>
</html>