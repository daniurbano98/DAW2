


function randomColor() {
    let index = Math.floor(Math.random() * 4);
    colors[index];
    console.log(colors[index]);
    return colors[index];
}

var colors = ["red", "green", "pink", "orange", "yellow"];

function backgroundColor() {
    let colorWindow = window.document.body.style.backgroundColor = randomColor();
    let color = window.document.body.style.backgroundColor;
    window.document.getElementById("colorName").innerHTML = color;

}

function select() {
    arrayVentanas.push(window);
    console.log(arrayVentanas);
    
    for (let index = 0; index < arrayVentanas.length; index++) {
        console.log(index);
        
    }


}
