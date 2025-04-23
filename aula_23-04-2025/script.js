window.addEventListener('load', function(){
    if(this.localStorage.getItem("nome")){
        this.document.getElementById("formulario").style.display="none";
        this.document.getElementById("poke_enviado").textContent = this.localStorage.getItem("nome");
        this.document.getElementById("texto").style.display='';
    } else {
        this.document.getElementById("formulario").style.display='';
        this.document.getElementById("texto_poke").style.display='none';
    }
})

    const formulario = document.getElementById("formulario")
    formulario.addEventListener("submit", function(event){
        const formData = new FormData(this);
        let dadosPoke = Object.fromEntries(formData.entries());
        localStorage.setItem.("pokePlanta", dadosPoke['pokePlanta']);
        localStorage.setItem.("pokeAgua", dadosPoke['pokeAgua']);
        localStorage.setItem.("pokeFogo", dadosPoke['pokeFogo']);

    })

    const excluir = document.getElementById("excluir")
    excluir.addEventListener("click", function(){
        localStorage.removeItem("pokePlanta")
        window.location.reload()
        localStorage.removeItem("pokeAgua")
        window.location.reload()
        localStorage.removeItem("pokeFogo")
        window.location.reload()
    })















})