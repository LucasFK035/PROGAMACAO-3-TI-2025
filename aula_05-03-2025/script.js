console.log("Olá mundo!");

/* String
let nome1 = "João";
let nome2 = "Maria";
let mensagem = `Olá, ${nome}`;
console.log(mensagem); */

/* Date
let hoje = new Date();
console.log(hoje); */

const botao = document.getElementById("botao");
botao.style.backgroundColor = "green";
/*const nome = document.getElementById("nome");
nome.value = "Lucas";*/

const formulario = document.getElementById("formulario");
formulario.addEventListener("submit", function(event){
    event.preventDefault();
    alert("Você submeteu o formulário!");
})