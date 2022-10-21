var colors = ["red", "green", "yellow", "orange", "blue"];


let arrayDiscos = new Array();



function cantidadDiscos() {
    let discos = document.getElementById("numeroDiscos").value;
    discos = parseInt(discos);


    if (discos > 5) {
        alert("Limite 5. Introduce un numero menor");
    } else if (discos <= 0) {
        alert("Introduce un numero mayor");
    } else {
        document.getElementById("start").disabled = true;
        let array1 = new Array(discos);

        for (let index = 0; index < array1.length; index++) {
            let div = document.createElement("div");
            div.setAttribute("id", "disco" + index);
            document.getElementById("piramide-1").appendChild(div);       
            color(div);
            arrayDiscos.push(div);

        }
        
    }
}


function color(div) {
    
    if (div.id == "disco0") {
        div.style.backgroundColor = "orange";
        div.innerHTML = "1";
    } else if (div.id == "disco1") {
        div.style.backgroundColor = "yellow";
        div.innerHTML = "2";
    } else if (div.id== "disco2") {
        div.style.backgroundColor = "blue";
        div.innerHTML = "3";
    } else if (div.id == "disco3") {
        div.style.backgroundColor = "red";
        div.innerHTML = "4";
    } else if (div.id== "disco4") {
        div.style.backgroundColor = "green";
        div.innerHTML = "5";
    } 
}

function mouPila1(){
    console.log(arrayDiscos[0]);
    document.getElementById("piramide-2").appendChild(arrayDiscos[0]);
}
function mouPila2(){
    
}
function mouPila3(){
    
}

