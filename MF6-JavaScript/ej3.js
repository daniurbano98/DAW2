document.getElementById("taula_propietats").innerHTML =

`<table class="table table-hover">
    <tr>
        <td>texto</td>
        <td>valores</td>        
    </tr>

    <tr>
        <td scope="row">Valor maximo que puede tener un numero JS</td>
        <td>${Number.MAX_SAFE_INTEGER}</td> 
    </tr>

    <tr>
        <td scope="row">Altura total de la pantalla</td>
        <td>${screen.availHeight}</td>
    </tr>

    <tr>
        <td scope="row">Altura interna de la finestra</td>
        <td>${window.innerHeight}</td>
    </tr>

    <tr>
        <td scope="row">URL de la web</td>
        <td>${window.location}</td>
    </tr>

    <tr>
        <td scope="row">Navegador en el que s'està executant la web</td>
        <td>${navigator.userAgent}</td>
    </tr>




</table>`
