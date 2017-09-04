<?php
 include '../login/steamauth/steamauth.php'
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Abstract</title>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/main.css?1">
    <link rel="stylesheet" href="../css/classic.css">
    <script src="../lib/jquery-3.2.1.min.js"></script>
</head>
<body>
<wrapper>
    <asside>
        <div class="logo">
            <a href="../../index.php" class="title">
                <img alt="" class="img_logo" src="../ico/i1.svg"><h3>Abstract</h3>
            </a>
            <div class="second_title_text">элитная рулетка</div>
        </div>
        <nav>
            <ul class="ul_of_nav">
                <a href="item1.php" class="nav_link"><li class="li_of_nav"><p class="p_of_nav">Item #1</p><img  alt="" class="material-icons" src="../ico/i3.svg"></li></a>
                <a href="item2.php" class="nav_link"><li class="li_of_nav"><p class="p_of_nav">Item #2</p><img  alt="" class="material-icons" src="../ico/i3.svg"></li></a>
                <a class="nav_link"><li class="li_of_nav"><p class="p_of_nav"><strong>Item #3</strong></p><img alt="" class="material-icons" src="../ico/i3.svg"></li></a>
                <a class="nav_link"><li class="li_of_nav"><p class="p_of_nav"><strong>Item #4</strong></p><img alt="" class="material-icons" src="../ico/i3.svg"></li></a>
                <a class="nav_link"><li class="li_of_nav"><p class="p_of_nav">Item #5</p><img alt="" class="material-icons" src="../ico/i3.svg"></li></a>
                <a class="nav_link"><li class="li_of_nav"><p class="p_of_nav">Item #6</p><img alt="" class="material-icons" src="../ico/i3.svg"></li></a>
                <a class="nav_link"><li class="li_of_nav"><p class="p_of_nav">Item #7</p><img alt="" class="material-icons" src="../ico/i3.svg"></li></a>
                <a class="nav_link"><li class="li_of_nav"><p class="p_of_nav">Item #8</p><img alt="" class="material-icons" src="../ico/i3.svg"></li></a>
            </ul>
        </nav>
        <div class="subscribe">
            <p class="subscribe_title">Мы в соц. сетях</p>
            <div class="subscribe_imgs">
                <a><img alt="" src="../ico/social/u1.png" class="subscribe_img"></a>
                <a><img alt="" src="../ico/social/u2.png" class="subscribe_img"></a>
                <a><img alt="" src="../ico/social/u3.png" class="subscribe_img"></a>
                <a><img alt="" src="../ico/social/u4.png" class="subscribe_img"></a>
            </div>
        </div>
    </asside>
    <main>
        <header>
            <div class="news"><p class="p_of_news">Some strage text that no one<br>can underatand</p></div>
            <div class="header_left">
                <div class="settings">
                    <div class="lang" onclick="nav_lang();">
                        <form action="404_page.php" method="POST" target="_blank">
                            <ul class="ul_of_lang" id='langs'>
                                <li class="li_of_lang1"><img alt="" class="img_of_lang" src="../ico/flags/russia.png"></li>
                                <li class="li_of_lang"><input alt="" type="image" name="lang" value="us" class="img_of_lang" src="../ico/flags/states.png"></li>
                                <li class="li_of_lang"><input alt="" type="image" name="lang" value="us" class="img_of_lang" src="../ico/flags/ukraine.png"></li>
                                <li class="li_of_lang"><input alt="" type="image" name="lang" value="us" class="img_of_lang" src="../ico/flags/kazakhstan.png"></li>
                                <li class="li_of_lang"><input alt="" type="image" name="lang" value="us" class="img_of_lang" src="../ico/flags/germany.png"></li>
                            </ul>
                        </form>
                    </div>
                    <div class="LK">
                    <?php
                            include '../login/steamauth/userInfo.php';
                            if(empty($steamprofile['personaname'])){
                                loginbutton();
                            }else{
                             echo $steamprofile['personaname'];
                             echo "<img src='".$steamprofile['avatarmedium']."'>";
                            }
                        ?>
                            
                        </div> <!--личный кабинет в начале кнопка-->
                </div>
            </div>
        </header>
        <div class="conteiner">
            <div class="box"> <!--внутренний бокс контейнера, который видим и имеет отступ от контейнера-->
                <div class="conteiner_of_box_content"> <!-- для отступов-->
                    <div class="game">
                    <div class="carousel">
                        <div class="center_of_carousel">
                            <div class="first_layer" id="first_layer">

                            </div>
                            <div class="main_of_carousel">
                                <div class="carousel_items" id="courusel_items">
                                    <div id="fixer"></div>
                                </div>
                            </div>
                            <div class="second_layer">

                            </div>
                        </div>
                    </div>
                    <div class="center_for_button">
                        <div class="green_button" onclick='start_game()' id="gb1"><p class="click_me">Click Me!</p></div>
                    </div>
                    </div>
                    <div class="about_game" id="id_about_game">
                    <div id="fixer_ag"></div>
                    <?php
                    if($_GET['kit']="1"){
                        echo "<script src='../js/test.js'></script><script>fulling(101);</script>";
                    }else{
                        echo "<script src='../js/test.js'></script><script>fulling(1);</script>";
                    }
                    ?>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <div class="self_nav" id="self_nav_id">
                <div class="self_nav_title" onclick="show_and_hide_self_nav();" id="self_nav_title_id">Личное меню</div>
                <div class="main_of_self_nav">
                    <div class="asside_af_self_nav">
                        <div class="self_nav_container">
                            <ul class="ul_of_self_nav">
                                <a class="self_nav_link" onclick='sncf2(1);'><li class="li_of_self_nav">Self information</li></a>
                                <a class="self_nav_link" onclick='sncf2(2);'><li class="li_of_self_nav">Achivments</li></a>
                                <a class="self_nav_link" onclick='sncf2(3);'><li class="li_of_self_nav">Rang</li></a>
                                <a class="self_nav_link" onclick='sncf2(4);'><li class="li_of_self_nav">Kvest//Tasks</li></a>
                                <a class="self_nav_link" onclick='sncf2(5);'><li class="li_of_self_nav">Referal model</li></a>
                                <a class="self_nav_link" onclick='sncf2(6);'><li class="li_of_self_nav">By Ar</li></a>
                            </ul>
                        </div>
                    </div>
                    <iframe src='../self_menu/1.php' class="self_nav_content" id="snc">
                        <!-- это та часть, которая зависит от пользователя (backend), остальное в self nav не трогай-->
                    </iframe>
                </div>
            </div>
            <div class="chat" id="chat">
                <div class="chat_title" onclick="show_and_hide_chat()" id="chat_title">Чат</div>
                <div class="main_of_chat">
                    <!--чат здесь, и только здесь, остальное относящееся к чату не трогай-->
                </div>
            </div>
        </footer>
    </main>
</wrapper>
<script src="../js/main.js?3" type="text/javascript"></script>
<script type="text/javascript" src="../js/game_classic.js?24"></script>
<script type="text/javascript" src="../js/test.js"></script>
</body>
</html>