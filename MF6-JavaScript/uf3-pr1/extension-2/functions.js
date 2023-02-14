let tabId;
chrome.tabs.query({ active: true, currentWindow: true },
    function (tabs) {
        let currTab = tabs[0];
        if (currTab) { tabId = currTab.id }
    }
);


let btn = document.getElementById("btn_start");
btn.addEventListener("click", click_show_menu);

function click_show_menu(evt) {
    chrome.scripting.executeScript({
        target: { "tabId": tabId },
        func: amazonExtension,
        args: []
    });
}

function amazonExtension() {
    const div = document.createElement("div");

    div.style.position = "fixed";
    div.style.right = "0";
    div.style.top = "50%";
    div.style.transform = "translateY(50%, -50%)";
    div.style.width = "400px";
    div.style.height = "300px";
    div.style.backgroundColor = "yellow";
    div.style.textAlign = "center";
    div.style.margin = "auto";
    div.style.display = 'flex';
    div.style.alignItems = 'center';
    div.style.justifyContent = 'center';
    div.setAttribute('id', 'myDiv');
    document.body.appendChild(div);
    div.innerHTML = `
  <button id="low_price">Precio mas bajo</button>
  <button id="info_img">Alt img</button>
  <button id="close_btn">Cerrar menu</button>
`;

    let cerrarMenu = document.querySelector("#close_btn");
    let precioMasBajo = document.querySelector("#low_price");
    let infoImg = document.querySelector("#info_img");

    cerrarMenu.addEventListener("click", function () {
        const div = document.querySelector('#myDiv');
        div.remove();
    });

    precioMasBajo.addEventListener("click", function () {
        const precios = document.querySelectorAll("._cDEzb_p13n-sc-price_3mJ9Z");
        let precioMasPequeno = Infinity;
        let productoMasBarato;

        for (const precio of precios) {
            //parseFloat para convertir el valor en numero y que se pueda comparar
            const valor = parseFloat(precio.textContent.replace("$", ""));
            if (valor < precioMasPequeno) {
                precioMasPequeno = valor;
                productoMasBarato = precio.parentNode; //parentNode para obtener el elemento que contiene el precio  del producto, y luego se resalta ese elemento
            }
        }
        // Resalta el producto más barato
        productoMasBarato.style.backgroundColor = "yellow";
        productoMasBarato.style.color = "black";
        //  scrollIntoView para mostrar el producto
        productoMasBarato.scrollIntoView({ behavior: "smooth", block: "center" });
        
    });

    infoImg.addEventListener("click", function () {
        // Obtenemos todas las imágenes de la página
        const imagenes = document.getElementsByTagName("img");

        // Recorremos todas las imágenes y agregamos eventos a cada una
        for (let i = 0; i < imagenes.length; i++) {
        // Creamos un elemento <span> para mostrar el texto del atributo "alt"
        const textoAlt = document.createElement("span");
        textoAlt.style.display = "none";
        textoAlt.style.position = "absolute";
        textoAlt.style.backgroundColor = "black";
        textoAlt.style.color = "white";
        textoAlt.style.padding = "5px";
        textoAlt.style.zIndex = "9999";
        textoAlt.textContent = imagenes[i].getAttribute("alt");

        // Agregamos el elemento <span> como hermano adyacente de la imagen
        imagenes[i].parentNode.insertBefore(textoAlt, imagenes[i].nextSibling);

        // Agregar el evento "mouseover" para mostrar el texto del atributo "alt"
        imagenes[i].addEventListener("mouseover", () => {
            textoAlt.style.display = "block";
        });

        // Agregar el evento "mouseout" para ocultar el texto del atributo "alt"
        imagenes[i].addEventListener("mouseout", () => {
            textoAlt.style.display = "none";
        });
        }
    });
}




