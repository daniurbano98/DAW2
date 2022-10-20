


function cantidadDiscos(){
    let discos = document.getElementById("numeroDiscos").value;
    discos = parseInt(discos);
    
    
    if(discos>8){
        alert("Limite 8. Introduce un numero menor");
    }else if(discos<=0){
        alert("Introduce un numero mayor");
    }else{
        let array1 = new Array(discos);
        console.log(array1);

        for (let index = 0; index < array1.length; index++) {
            let div = document.createElement("div");
            div.setAttribute("id", "disco");
            div.classList.add("disco");
            document.getElementById("piramide-1").appendChild(div);
            div.style.backgroundColor="blue";
            div.innerHTML="1"; 
            console.log("lol");
        
        }
    }

}