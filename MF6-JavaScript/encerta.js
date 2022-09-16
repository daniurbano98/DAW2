function comparaValors(){
    console.log("funciona");
    let inputCompara=document.getElementById("inputCompara");
    let valorInput  = inputCompara.value;
    let refWindowParent = window.opener;
    refWindowParent.document.getElementById("numGenerat");
    let spanNumGenerat = refWindowParent.document.getElementById("numGenerat");
    let numGenerat = spanNumGenerat.innerHTML;

    if(valorInput==numGenerat){
        document.getElementById("missatges").innerHTML="son iguales";
        refWindowParent.document.getElementById("missatges").innerHTML="son iguales";
        window.opener.tancaEncerta();
        
    }else{
        document.getElementById("missatges").innerHTML="no son iguales";
        refWindowParent.document.getElementById("missatges").innerHTML="no son iguales";
    }
    console.log(valorInput+" =? "+numGenerat);
}