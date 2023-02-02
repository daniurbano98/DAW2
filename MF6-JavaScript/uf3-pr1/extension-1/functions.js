
//PRIMER BOTON
let tabId;
chrome.tabs.query({ active: true, currentWindow: true } ,
    function (tabs) {
        let currTab = tabs[0];
        if (currTab) { tabId = currTab.id }
    }
);

let btn = document.getElementById("btn_change_background");
btn.addEventListener("click", click_change_background);

function click_change_background(evt) {
    evt.target.style.backgroundColor = "cyan";
    console.log("Clicado!");

    chrome.scripting.executeScript({
        target:{"tabId":tabId},
        func:exec_change_background,
        args:["red"]
    });
}

function exec_change_background(valor){
    document.body.style.backgroundColor=valor;
}

//SEGUNDO BOTON
let bt2 = document.getElementById("btn_change_color_links");
bt2.addEventListener("click", click_change_color_links);

function click_change_color_links(evt){
    evt.target.style.color = "red";

    chrome.scripting.executeScript({
        target:{"tabId":tabId},
        func:exec_change_color_links,
        args:["red"]
    });

}

function exec_change_color_links(valor){
    var links = document.getElementsByTagName("a");
    for (var i = 0; i < links.length; i++) {
        links[i].style.color = valor;
    }

}

//TERCER BOTON

let bt3 = document.getElementById("btn_delete_img");
bt3.addEventListener("click",click_delete_img);

function click_delete_img(evt){
    evt.target.style.backgroundColor = "grey";

    chrome.scripting.executeScript({
        target:{"tabId":tabId},
        func:exec_delete_img,
        args:[]
    });
}

function exec_delete_img(){
    var images = document.getElementsByTagName("img");
    while (images.length > 0) {
    images[0].parentNode.removeChild(images[0]);
    }
}

//CUARTO BOTON


let bt4 = document.getElementById("btn_show_ocult_password");
bt4.addEventListener("click",click_show_password);let show = true;
let arrayInputPassword = [];
arrayInputPassword = document.querySelectorAll('input[type="password"]')
console.log(arrayInputPassword);


function click_show_password(evt){
    evt.target.style.color = "red";

    chrome.scripting.executeScript({
        target:{"tabId":tabId},
        func:exec_show_ocult_password,
        args:[arrayInputPassword,show]
    });
}



function exec_show_ocult_password(arrayInputPassword, show){
    for (var i = 0; i < arrayInputPassword.length; i++) {
        var input = arrayInputPassword[i];
        if (show) {
          // Show password
          input.type = "text";
          input.setAttribute("is_pass", "true");
        } else {
          // Hide password
          input.type = "password";
          input.setAttribute("is_pass", "false");
        }
      }
      show = !show;
    }

    
    






