let elemento;
/*elemento = document.querySelector(".bm-color-blue").querySelector(".bm-text").childNodes[1].innerText
*/
elemento = document.querySelectorAll(".bm-color-blue")

var arrayelement = Array.from(elemento);
var arraywords = new Array();
function putValues(){
    for(let i=0;i<arrayelement.length;i++){
        let palabra = arrayelement[i].querySelector(".bm-text").innerText
        
        arraywords[i] = palabra;
        let llave = "llave"+ i;
        localStorage.setItem(llave, palabra)
    }
}
putValues();



console.log(arraywords);
