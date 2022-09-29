function showTime(){
    var date = new Date();
    var h = date.getHours(); 
    var m = date.getMinutes(); 
    var s = date.getSeconds();
    
    
    var time = h + ":" + m + ":" + s;   
    document.getElementById("MyClockDisplay").innerText = time;
    document.getElementById("MyClockDisplay").textContent = time;
    
    setTimeout(showTime, 1000);
    
}

showTime();



function alarma(){
    var date = new Date();
    var h = date.getHours(); 
    var m = date.getMinutes(); 
    var s = date.getSeconds(); 

    var hora =  document.getElementById("hora").value;
    var minutos = document.getElementById("minutos").value;
    var segundos = document.getElementById("segundos").value;

    if(hora == h && minutos == m && segundos == s){
       document.getElementById("mensaje").innerText = "lol";
       var snd = new Audio("./musica/alarma.mp3");
       snd.play(); 
    }

    setInterval(alarma,1000);

}



function cuentaAtras(){
   var minutos = document.getElementById("minuto").value;
   var segundos = document.getElementById("segundo").value;

   
    var time = minutos + ":" + segundos;
    document.getElementById("time").innerText = time;
    
    -


   setInterval(cuentaAtras,1000);
 
}



function pausar(){

}