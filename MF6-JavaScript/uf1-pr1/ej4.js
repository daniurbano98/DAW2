function showTime() {
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


let sonido = new Audio("./musica/alarma.mp3");

function alarma() {
    var date = new Date();
    var h = date.getHours();
    var m = date.getMinutes();
    var s = date.getSeconds();

    var hora = document.getElementById("hora").value;
    var minutos = document.getElementById("minutos").value;
    var segundos = document.getElementById("segundos").value;
    document.getElementById("alarmaFijada").innerHTML = "¡ALARMA FIJADA!"

    if (hora == h && minutos == m && segundos == s) {
        document.getElementById("mensaje").innerText = "BON DIA";    
        sonido.play();
    }

    setInterval(alarma, 1000);

}

function stopAlarma(){
    sonido.pause();
}

let valorCuentaAtras;
var musica = new Audio("./musica/danzaKuduro.mp3");


function cuentaAtras() {
    document.getElementById("pausar").disabled=false;
    var minutos = document.getElementById("minuto").value;
    var segundos = document.getElementById("segundo").value;

    document.getElementById("contador-minutos").textContent = minutos;
    document.getElementById("contador-segundos").textContent = segundos;

    
    if (minutos <= 0 && segundos <= 0) {
        alert("Por favor introduce un contador positivo")
    } else if (segundos > 59) {
        alert("Por favor no introduzcas un valor mas allá de los 59 segundos")
    } else if (minutos < 0 || segundos < 0) {
        alert("Por favor no intruzcas numero negativos")
    } else {

        valorCuentaAtras = setInterval(function () {

            if (segundos == 0 && minutos == 0) {
                clearInterval(valorCuentaAtras);
                notificacion.textContent = "Fin de la cuenta atrás";
                musica.play();
            }
            else if (segundos > 0) {
                segundos--;
                document.getElementById("contador-minutos").textContent = minutos;
                document.getElementById("contador-segundos").textContent = segundos;
            } else if (segundos == 0 && minutos >= 0) {
                minutos--;
                segundos = 59;
                document.getElementById("contador-minutos").textContent = minutos;
                document.getElementById("contador-segundos").textContent = segundos;
            }

        }, 1000);
    }
}



function restart() {
    document.getElementById("contador-minutos").textContent = 0;
    document.getElementById("contador-segundos").textContent = 0;
    clearInterval(valorCuentaAtras);
}



function pausar() {
        document.getElementById("pausar").disabled=true;
        clearInterval(valorCuentaAtras);
    
}

function stopMusic(){
    musica.pause()
}



