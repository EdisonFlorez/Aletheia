let element;
/*elemento = document.querySelector(".bm-color-blue").querySelector(".bm-text").childNodes[1].innerText
*/
element = document.querySelectorAll(".bm-color-blue")

var arrayelement = Array.from(element);
var arraywords = new Array();
function putValues(){
    for(let i=0;i<arrayelement.length;i++){
        let unknow_word = arrayelement[i].querySelector(".bm-text").innerText
        
        arraywords[i] = unknow_word;
        let storageKeys = "keys"+ i;
        localStorage.setItem(storageKeys, unknow_word);
    }
}
putValues(); 



console.log(arraywords);
