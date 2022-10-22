var colors = ["red", "green", "yellow", "orange", "blue"];


let arrayDiscos1 = new Array();
let arrayDiscos2 = new Array();
let arrayDiscos3 = new Array();

let piramide1 = document.getElementById("bloque-1");
let piramide2 = document.getElementById("bloque-2");
let piramide3 = document.getElementById("bloque-3");

let piramides = [
    [],[],[]  
];

console.log(piramides);

let cantDiscos;    

function cantidadDiscos() {
    let discos = document.getElementById("numeroDiscos").value;
    discos = parseInt(discos);
    cantDiscos = discos;

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
            arrayDiscos1.push(div);
            piramides[0].push(div);
            console.log(piramides);

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


function move_to_piramide2_from_piramide1(){
    let piramide2=document.getElementById("piramide-2");
    console.log(arrayDiscos1);
    

    if(piramide2.firstElementChild==null){
        document.getElementById("piramide-2").prepend(arrayDiscos1[0]);
        arrayDiscos2.unshift(arrayDiscos1[0]); 
        arrayDiscos1.splice(0,1);
         
        
    }else if(piramide2.firstElementChild.clientWidth > arrayDiscos1[0].clientWidth){
        document.getElementById("piramide-2").prepend(arrayDiscos1[0]);
        arrayDiscos2.unshift(arrayDiscos1[0]);
        arrayDiscos1.splice(0,1); 
    }
    else{
        alert("no puedes poner una ficha más grande encima de una más pequeña");
    }
   
}

function move_to_piramide3_from_piramide1(){
    let piramide3=document.getElementById("piramide-3");
 

    if(piramide3.firstElementChild==null ){
        document.getElementById("piramide-3").prepend(arrayDiscos1[0]);
        arrayDiscos3.unshift(arrayDiscos1[0]);
        arrayDiscos1.splice(0,1); 
    }else if( piramide3.firstElementChild.clientWidth > arrayDiscos1[0].clientWidth){
        document.getElementById("piramide-3").prepend(arrayDiscos1[0]);
        arrayDiscos3.unshift(arrayDiscos1[0]);
        arrayDiscos1.splice(0,1);
    }
    else{
        alert("no puedes poner una ficha más grande encima de una más pequeña");
    }
}

function move_to_piramide1_from_piramide2(){
    let piramide1=document.getElementById("piramide-1");
   

    if(piramide1.firstElementChild==null ){
        document.getElementById("piramide-1").prepend(arrayDiscos2[0]);
        arrayDiscos1.unshift(arrayDiscos2[0]);
        arrayDiscos2.splice(0,1); 
    }else if(piramide1.firstElementChild.clientWidth > arrayDiscos2[0].clientWidth){
        document.getElementById("piramide-1").prepend(arrayDiscos2[0]);
        arrayDiscos1.unshift(arrayDiscos2[0]);
        arrayDiscos2.splice(0,1); 
    }
    else{
        alert("no puedes poner una ficha más grande encima de una más pequeña");
    }

}

function move_to_piramide3_from_piramide2(){
    let piramide3=document.getElementById("piramide-3");
 

    if(piramide3.firstElementChild==null ){
        document.getElementById("piramide-3").prepend(arrayDiscos2[0]);
        arrayDiscos3.unshift(arrayDiscos2[0]);
        arrayDiscos2.splice(0,1); 
    }else if(piramide3.firstElementChild.clientWidth > arrayDiscos2[0].clientWidth){
        document.getElementById("piramide-3").prepend(arrayDiscos2[0]);
        arrayDiscos3.unshift(arrayDiscos2[0]);
        arrayDiscos2.splice(0,1); 
    }
    else{
        alert("no puedes poner una ficha más grande encima de una más pequeña");
    }
}

function move_to_piramide1_from_piramide3(){
    let piramide1=document.getElementById("piramide-1");
    

    if(piramide1.firstElementChild==null ){
        document.getElementById("piramide-1").prepend(arrayDiscos3[0]);
        arrayDiscos1.unshift(arrayDiscos3[0]);
        arrayDiscos3.splice(0,1);
    }else if(piramide1.firstElementChild.clientWidth > arrayDiscos3[0].clientWidth){
        document.getElementById("piramide-1").prepend(arrayDiscos3[0]);
        arrayDiscos1.unshift(arrayDiscos3[0]);
        arrayDiscos3.splice(0,1);
    }
    
    
    else{
        alert("no puedes poner una ficha más grande encima de una más pequeña");
    }  
}

function move_to_piramide2_from_piramide3(){
    let piramide2=document.getElementById("piramide-2");
   

    if(piramide2.firstElementChild==null  ){
    document.getElementById("piramide-2").prepend(arrayDiscos3[0]);
    arrayDiscos2.unshift(arrayDiscos3[0]);
    arrayDiscos3.splice(0,1);
    }else if(piramide2.firstElementChild.clientWidth > arrayDiscos3[0].clientWidth){
        document.getElementById("piramide-2").prepend(arrayDiscos3[0]);
        arrayDiscos2.unshift(arrayDiscos3[0]);
        arrayDiscos3.splice(0,1);      
    }else{
        alert("no puedes poner una ficha más grande encima de una más pequeña");
    } 
}


function comprobacionVictoria(cantidad){
    switch(cantidad){
        case 2:
            if(arrayDiscos1.includes("disco0","disco1")|| arrayDiscos2.includes("disco0","disco1") || arrayDiscos3.includes("disco0","disco1")){
                alert("you win");
            }
            break;
        case 3:
            if(arrayDiscos1.includes("disco0","disco1","disco2")|| arrayDiscos2.includes("disco0","disco1","disco2") || arrayDiscos3.includes("disco0","disco1","disco2")){
                alert("you win");
            }
            break;
        case 4:
            if(arrayDiscos1.includes("disco0","disco1","disco2","disco3")|| arrayDiscos2.includes("disco0","disco1","disco2","disco3") || arrayDiscos3.includes("disco0","disco1","disco2","disco3")){
                alert("you win");
            }
            break;
        case 5:
            if(arrayDiscos1.includes("disco0","disco1","disco2","disco3","disco4")|| arrayDiscos2.includes("disco0","disco1","disco2","disco3","disco4") || arrayDiscos3.includes("disco0","disco1","disco2","disco3")){
                alert("you win");
            }
            break;
    }
    
   
}


