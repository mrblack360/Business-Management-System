//instance variables declaration and initialization
var jina, cjina, password, cpassword, siku;
cjina="Admin"
cpassword="MMMM";

function blank() {
    window.alert("This space is intentionally left blank");
}
function coming() {
    window.alert("Ukurasa huu bado unaandaliwa!");
}
function toka() {
    document.writeln("<h1>Umefanikiwa Kutoka ipasavyo</h1>");
}
function nonempty() {
    if (loginfomu.jina.value.length<1) {
        document.getElementById("kosajina").innerHTML="Hauna Jina?";
    }
}
function passnonempty() {
    if (loginfomu.password.value.length<1){
        document.getElementById("kosapass").innerHTML="lazima ujaze password";
    }
}
function ccjina() {
    if (loginfomu.jina.value!=cjina) {
        document.getElementById("kosajina").innerHTML="Jina si sahihi";
    }
}
function ccpassword() {
    if (cpassword!=loginfomu.password.value) {
        document.getElementById("kosapass").innerHTML="Password si sahihi";
    }
}
function redirect() {
    if ((cjina==jina)&&(cpassword==password)){
        document.writeln("Ati nini");
    }
}
function check() {
    ccjina();
    ccpassword();
    redirect();
}

