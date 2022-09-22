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
    }

    setInterval(alarma,1000);

}