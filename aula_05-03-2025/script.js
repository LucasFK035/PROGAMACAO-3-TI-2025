console.log("Olá mundo!");

/* String
let nome1 = "João";
let nome2 = "Maria";
let mensagem = `Olá, ${nome}`;
console.log(mensagem); */

/* Date
let hoje = new Date();
console.log(hoje); */

//const botao = document.getElementById("botao");
// botao.style.backgroundColor = "blue";
/*const nome = document.getElementById("nome");
nome.value = "Lucas";*/

const formulario = document.getElementById("formulario");
formulario.addEventListener("submit", function(event){
    event.preventDefault();
    alert("Você submeteu o formulário!");
})

const formulario1 = document.getElementById("formulario");
formulario.addEventListener("submit", function(event){
    event.preventDefault();
    const formData = new FormData(this);
    let dados =Object.fromEntries(formData.entries());
   // console.log(`${dados['nome']} tem ${dados['idade']} anos.`);
})

let texto = document.getElementById("texto");
if(formData.has("publico") && formData.has("privado")){
    texto.textContent = `${dados['nome']} vem das duas formas.`;
} else if (formData.has("publico")) {
    texto.textContent = `${dados['nome']} vem de transporte público.`;
} else if(formData.has("privado")){
    texto.textContent = `${dados['nome']} vem de transporte própio.`;
} else {
    texto.textContent = `${dados['nome']} não vem com nenhum transporte.`;
}