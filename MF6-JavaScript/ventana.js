let padre = window.opener;
let contadorClicks = 0;



function randomColor() {
    let index = Math.floor(Math.random() * 3);
    colors[index];
    console.log(colors[index]);
    return colors[index];
}

var colors = ["red", "green", "pink", "orange"];

function backgroundColor() {
    let colorWindow = window.document.body.style.backgroundColor = randomColor();
    let color = window.document.body.style.backgroundColor;
    window.document.getElementById("colorName").innerHTML = color;

}

function clicked(){
    padre.addWindow(window);
    padre.comprobacionPantallas();
    
}






