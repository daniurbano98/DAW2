function playEncerta(){
    let aleatorio =Math.floor((Math.random() * 10) ) ;
    let span = document.getElementById("numGenerat");
    span.innerHTML=aleatorio;
    if(aleatorio<5){
        span.style.backgroundColor="red";
    }else{
        span.style.backgroundColor="green";
    }

    refOpenWindow=window.open("encerta.html"," ","height=500,width=500");
    window.setTimeout(tancaEncerta,7000);
}
let refOpenWindow;

function tancaEncerta(){
    refOpenWindow.close();
}