let miDiv = document.getElementById("llista_propietats");
miDiv.style.color="green";
miDiv.style.backgroundColor="orange";
miDiv.innerText="<h1>Valor minim</h1>";
miDiv.innerHTML+="<h1>Valor minim"+Number.MIN_VALUE+"</h1>";
console.log("missatge d'exemple per consola");

let dataActual= new Date();
miDiv.innerHTML+=`<ol><li>Amplada total \` pantalla:
`+screen.availWidth+`</li>
<li>Amplada finestra ${window.innerWidth}</li>
<li>titol web ${document.title} </li>
<li id='hora'>hora actual ${dataActual.getHours()}
            :${dataActual.getMinutes()}
            :${dataActual.getSeconds()}</li>
<ol>`;

window.setInterval(actualitzaHora, 1000);

function actualitzaHora(){
    let dataActual = new Date();
    let textHora = `Hora actual ${dataActual.getHours()}
    :${dataActual.getMinutes()}
    :${dataActual.getSeconds()}`;
    document.getElementById("hora").innerHTML=textHora;
}
let resultat = "pepe"*3;
if(isNaN(resultat)){
    console.log("el resultat es nan:"+resultat);
}else{
    console.log("El resultat no es nan:"+resultat);
}