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
                <img class="img_logo" src="../ico/i1.svg"><h3>Abstract</h3>
            </a>
            <div class="second_title_text">элитная рулетка</div>
        </div>
        <nav>
            <ul class="ul_of_nav">
                <a href="classic.php" class="nav_link"><li class="li_of_nav"><p class="p_of_nav">Item #1</p><img class="material-icons" src="../ico/i3.svg"></li></a>
                <a href="item2.php" class="nav_link"><li class="li_of_nav"><p class="p_of_nav">Item #2</p><img class="material-icons" src="../ico/i3.svg"></li></a>
                <a class="nav_link"><li class="li_of_nav"><p class="p_of_nav"><strong>Item #3</strong></p><img class="material-icons" src="../ico/i3.svg"></li></a>
                <a class="nav_link"><li class="li_of_nav"><p class="p_of_nav"><strong>Item #4</strong></p><img class="material-icons" src="../ico/i3.svg"></li></a>
                <a class="nav_link"><li class="li_of_nav"><p class="p_of_nav">Item #5</p><img class="material-icons" src="../ico/i3.svg"></li></a>
                <a class="nav_link"><li class="li_of_nav"><p class="p_of_nav">Item #6</p><img class="material-icons" src="../ico/i3.svg"></li></a>
                <a class="nav_link"><li class="li_of_nav"><p class="p_of_nav">Item #7</p><img class="material-icons" src="../ico/i3.svg"></li></a>
                <a class="nav_link"><li class="li_of_nav"><p class="p_of_nav">Item #8</p><img class="material-icons" src="../ico/i3.svg"></li></a>
            </ul>
        </nav>
        <div class="subscribe">
            <p class="subscribe_title">Мы в соц. сетях</p>
            <div class="subscribe_imgs">
                <a><img src="../ico/social/u1.png" class="subscribe_img"></a>
                <a><img src="../ico/social/u2.png" class="subscribe_img"></a>
                <a><img src="../ico/social/u3.png" class="subscribe_img"></a>
                <a><img src="../ico/social/u4.png" class="subscribe_img"></a>
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
                                <li class="li_of_lang1"><img class="img_of_lang" src="../ico/flags/russia.png"></li>
                                <li class="li_of_lang"><input type="image" name="lang" value="us" class="img_of_lang" src="../ico/flags/states.png"></li>
                                <li class="li_of_lang"><input type="image" name="lang" value="us" class="img_of_lang" src="../ico/flags/ukraine.png"></li>
                                <li class="li_of_lang"><input type="image" name="lang" value="us" class="img_of_lang" src="../ico/flags/kazakhstan.png"></li>
                                <li class="li_of_lang"><input type="image" name="lang" value="us" class="img_of_lang" src="../ico/flags/germany.png"></li>
                            </ul>
                        </form>
                    </div>
                    <div class="LK">
                    <?php
                            loginbutton();
                        ?>
                    </div> <!--личный кабинет в начале кнопка-->
                </div>
            </div>
        </header>
        <div class="conteiner">
            <div class="box"> <!--внутренний бокс контейнера, который видим и имеет отступ от контейнера-->
                <div class="conteiner_of_box_content"> <!-- для отступов-->
                    <p class="title">EROR 404 page not found</p>
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
                                <a class="self_nav_link"><li class="li_of_self_nav">Личный кабинет</li></a>
                                <a class="self_nav_link"><li class="li_of_self_nav">Достижения</li></a>
                                <a class="self_nav_link"><li class="li_of_self_nav">Ранг</li></a>
                                <a class="self_nav_link"><li class="li_of_self_nav">Квест//Задачи</li></a>
                                <a class="self_nav_link"><li class="li_of_self_nav">Реферальный модуль</li></a>
                                <a class="self_nav_link"><li class="li_of_self_nav">Купить Ar</li></a>
                            </ul>
                        </div>
                    </div>
                    <div class="self_nav_content">
                        <!-- это та часть, которая зависит от пользователя (backend), остальное в self nav не трогай-->
                    </div>
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
<script src="../js/main.js?2" type="text/javascript"></script>
</body>
</html>