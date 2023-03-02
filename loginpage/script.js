var botao = document.getElementById("botao");
var elemento = document.getElementById("elemento");
var estadoElemento = false;

botao.addEventListener("click", function(){
  if (estadoElemento === false) {
    elemento.style.display = "block";
    estadoElemento = true;
  } else {
    elemento.style.display = "none";
    estadoElemento = false;
  }
});


