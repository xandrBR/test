function acepted(){
    //sends a inquiry to the server,if server answering return true else return false (server function)
    return true;
}

function ask(){
    //server function
    return 5;
}

function rnd(min, max) {
    return Math.floor(Math.random() * (max - min)) + min;
}
function rnd_float(min, max) {
    return Math.random() * (max - min) + min;
}
function rnd_abstract(){
    var x = rnd_float(0.1,100);
    if (x>0 && x<0.2){
        return 5;
    }
    else if(x>0.1 && x<30){
        return 2;
    }
    else if(x>67 && x<70){
        return 3;
    }
    else if(x> 77.7 && x<78){
        return 4;
    }
    else{
        return 1;
    }
}

function scroll(iCCL,b,alpha) {
    for(var s=1;s<=b;++s){
        --iCCL;
        if(iCCL<alpha){
            iCCL=alpha;
            CC.style.left=iCCL+"px";
            break;
        }else{
            CC.style.left=iCCL+"px";
        }
        
    }
    return iCCL;
}
var asd = 0;
function move(alpha,beta,alph,w) {
    asd=1;
    var t=setInterval(function () {
        CCL=scroll(CCL,10,alpha);
        if(CCL<=(beta/2)){
            clearInterval(t);
            var t2=setInterval(function () {
                CCL=scroll(CCL,6,alpha);
                if(CCL<=(beta/2)+((beta/2)/2)){
                    clearInterval(t2);
                    var t3=setInterval(function () {
                        CCL=scroll(CCL,3,alpha);
                        if(CCL<=(beta/2)+((beta/2)/2)+(((beta/2)/2)/2)){
                            clearInterval(t3);
                            var t4=setInterval(function () {
                                CCL=scroll(CCL,1,alpha);
                                if(CCL<=alpha){
                                    clearInterval(t4);
                                    asd=2;
                                    var cheker=setInterval(function(){
                                        var wnew=document.documentElement.clientWidth;
                                        if(wnew!=w){
                                            alpha=getWidth(alph);
                                            w=wnew;
                                            if(asd==2){
                                                CC.style.left=alpha+"px";
                                            }
                                        }
                                    });
                                }
                            });
                        }
                    });
                }
            });
        }
    });
}

function getWidth(alph){
    var prize =document.getElementById('img10');
    var CFL=document.getElementById('first_layer');
    var CFLW=CFL.offsetWidth;
    var pL=prize.offsetLeft;
    var RpL=-pL;
    var alpha=RpL+(CFLW/2)-alph;
    return alpha;
}

function cleaner(){
    for(var e=1;e<=400;++e){
        clearInterval(e);
    }
}

function start() {
    if(acepted()){
    if(asd==1 || asd==2){
        cleaner();
        asd=0;
    }
    var w = document.documentElement.clientWidth;
    var CFL=document.getElementById('first_layer');
    var CFLW=CFL.offsetWidth;
    CC.style.left="0px";
    CCL=0;
    var whatprize = ask();
    var prize =document.getElementById('img10');
    var Beta = document.getElementById('img3');
    var beta = Beta.offsetLeft;
    beta=-beta;
    var pL=prize.offsetLeft;
    var RpL=-pL;
    prize.src='../img/items/'+whatprize+'.png';
    var alph=rnd(2,Beta.offsetWidth);
    var alpha=RpL+(CFLW/2)-alph;
    move(alpha,beta,alph,w);
    }
    else{alert('Потерянно соединение с сервером, перезагрузите страничку')}
}

var CCL = 0;
var CC=document.getElementById('courusel_items');
var $CCF = $('#fixer');
var BGBut=document.getElementById('gb1');
for(var i=1; i<=100;++i){
    var q = rnd_abstract();
    var $item = $('<img class="carousel_item">');
    $item.attr('src','../img/items/'+q+'.png');
    $item.attr('id','img'+i);
    $item.attr('alt',"");
    $item.insertAfter($CCF);
    
}
