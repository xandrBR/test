var height_of_self_nav=0;
var counter_of_self_navs_hides = 0;
var counter_of_chat_hides = 0;
var height_of_chat=0;
var self_nav=document.getElementById("self_nav_id");
var self_nav_title=document.getElementById("self_nav_title_id");
var chat=document.getElementById("chat");
var chat_title=document.getElementById("chat_title");

function show_and_hide_self_nav() {
    if (counter_of_self_navs_hides==0){
        self_nav_title.style.opacity="1"
        var i=0;
        var show_self_nav=setInterval(function () {
            height_of_self_nav--;
            self_nav.style.top=height_of_self_nav+"vh";
            i++;
            if (i==57){
                clearInterval(show_self_nav);
            }
        }, 10);
        counter_of_self_navs_hides=1;
    }
    else {
        var i=0
        var hide_self_nav=setInterval(function () {
            height_of_self_nav++;
            self_nav.style.top=height_of_self_nav+"vh";
            i++
            if (i==57){
                clearInterval(hide_self_nav);
            }
        }, 10);
        counter_of_self_navs_hides=0;
        self_nav_title.style.opacity="0.9"
    }
}
function show_and_hide_chat() {
    if (counter_of_chat_hides==0){
        chat_title.style.opacity="1"
        var i=0;
        var show_chat=setInterval(function () {
            height_of_chat--;
            chat.style.top=height_of_chat+"vh";
            i++;
            if (i==57){
                clearInterval(show_chat);
            }
        },10);
        counter_of_chat_hides=1;
    }
    else {
        var i=0
        var hide_chat=setInterval(function () {
            height_of_chat++;
            chat.style.top=height_of_chat+"vh";
            i++
            if (i==57){
                clearInterval(hide_chat);
            }
        }, 10);
        counter_of_chat_hides=0;
        chat_title.style.opacity="0.9"
    }
}
var nav_bar=document.getElementsByClassName("li_of_lang")
var cnb=0;
function nav_lang(){
    if(cnb==0){
        for(var e=0;e<nav_bar.length;++e){
            nav_bar[e].style.display="flex"
        }
        cnb=1;
    }else{
        for(var e=0;e<nav_bar.length;++e){
            nav_bar[e].style.display="none";
        }
        cnb=0;
    }
}
var Q=setInterval(function(){
    var alts=document.getElementsByTagName("img");
    for(var e=0; e<alts.length;++e){
        alts[e].alt="";
    }
}, 10000);

/*
function new_lang(id,page){
    //request new page numbered id 
    var oldlang=document.getElementById("selectedlang");
    var newlang=nav_bar[id];
    var parlang=document.getElementById('langs');
    parlang.replaceChild(newlang,oldlang);
    oldlang.id='';
    oldlang.class="li_of_lang";
    newlang.id="selectedlang";
    newlang.class="li_of_lang1";
}
*/