/**
 * Created by comp on 14.08.2017.
 */
var x=0;
var slaids = new Array();
slaids[0]=document.getElementById("slaid1");
slaids[1]=document.getElementById("slaid2");
slaids[2]=document.getElementById("slaid3");
var swicher1=document.getElementById("prev");
var swicher2=document.getElementById("next");
var t = setInterval(slaiding, 3000);
function slaiding() {
    slaids[x].className="slaid";
    x++;
    if (x>=slaids.length){
        x=0;
    }
    slaids[x].className="slaid_active";
}
function show_sw() {
    swicher1.style.visibility="visible";
    swicher2.style.visibility="visible";
}
function hide_sw() {
    swicher1.style.visibility="hidden";
    swicher2.style.visibility="hidden";
}
function skip_next() {
    switch (x) {
        case 0:
            slaids[0].className="slaid";
            slaids[1].className="slaid_active";
            x=1;
            break;
        case 1:
            slaids[1].className="slaid";
            slaids[2].className="slaid_active";
            x=2;
            break;
        case 2:
            slaids[2].className="slaid";
            slaids[0].className="slaid_active";
            x=0;
            break;
    }
}
function skip_prev() {
    switch (x) {
        case 0:
            slaids[0].className="slaid";
            slaids[2].className="slaid_active";
            x=2;
            break;
        case 1:
            slaids[1].className="slaid";
            slaids[0].className="slaid_active";
            x=0;
            break;
        case 2:
            slaids[2].className="slaid";
            slaids[1].className="slaid_active";
            x=1;
            break;
    }
}
