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
       var sonido = new Audio("./musica/alarma.mp3");
       sonido.play(); 
    }

    setInterval(alarma,1000);

}

let valorCuentaAtras;

function cuentaAtras(){
    var minutos = document.getElementById("minuto").value;
    var segundos = document.getElementById("segundo").value;
    

    
        if(minutos<=0 && segundos <= 0 ){
            alert("Por favor introduce un contador positivo")
        }else if(segundos>59){
            alert("Por favor no introduzcas un valor mas allá de los 59 segundos")
        }else if(minutos<0 || segundos<0){
            alert("Por favor no intruzcas numero negativos")
        }else{
    
         valorCuentaAtras = setInterval(function(){
    
            if(segundos==0 && minutos==0){
                clearInterval(valorCuentaAtras);
                
                notificacion.textContent = "Fin de la cuenta atrás";
                var musica = new Audio("./musica/danzaKuduro.mp3");
                musica.play();
                var button = document.createElement('button'); 
                button.type = 'button'; 
                button.setAttribute('id','pauseButton');
                button.innerText = 'pausar cancion'; 
                document.body.appendChild(button);
                // TODO: no funciona lo de parar la musica preguntar
                button.addEventListener('click',alert("fckdjfd"),false);
                  
                // button.onclick= musica.pause();
                
    
            }
            else if(segundos>0){
                segundos--;
                document.getElementById("contador-minutos").textContent = minutos;
                document.getElementById("contador-segundos").textContent = segundos;
            }else if(segundos==0 && minutos>=0){
                minutos--;
                segundos=59;
                document.getElementById("contador-minutos").textContent = minutos;
                document.getElementById("contador-segundos").textContent = segundos;
            }
            
            
    
    
        },1000);
        }
    }



    
 


function restart(){
    document.getElementById("contador-minutos").textContent = 0;
    document.getElementById("contador-segundos").textContent = 0;
    clearInterval(valorCuentaAtras);
}

//TODO: COMPLETAR METODO PAUSAR, NO FUNCIONA

function pausar(){
    clearInterval(valorCuentaAtras);
    
   
     // var minutos = document.getElementById("contador-minutos").value;
    // var segundos = document.getElementById("contador-segundos").value;

    // document.getElementById("minuto").innerText = minutos;
    // document.getElementById("segundo").innerText = segundos;

    // document.getElementById("contador-minutos").textContent = minutos;
    // document.getElementById("contador-segundos").textContent = segundos;
    // clearInterval(valorCuentaAtras);
    }
   


