document.getElementById('formulario_panqueca').addEventListener('submit', function(event) {
    event.preventDefault();  

    let precosTamanho = {"Pequeno": 10.00, "Médio": 15.00, "Grande": 20.00};

    let precosSabor = {"Queijo": 4.00, "Calabresa": 3.50,"Morango": 8.00};

    let precoEntrega = 5.00; 
    let entregaBusca = document.querySelector('select[name="entrega_busca"]').value; 
    let quantidade = parseInt(document.querySelector('input[name="quant_p"]').value); 

    let precoTamanho = 0;
    let tamanhoSelecionado = document.querySelector('input[name="tamanho"]:checked');
    if (tamanhoSelecionado) {
        precoTamanho = precosTamanho[tamanhoSelecionado.value];
    }

    let precoSabor = 0;
    let saboresSelecionados = document.querySelectorAll('input[name="sabor"]:checked');
    saboresSelecionados.forEach(function(sabor) {
        precoSabor += precosSabor[sabor.value];
    });

    let precoTotalEntrega = 0;
    if (entregaBusca === "ent") {
        precoTotalEntrega = precoEntrega;
    }

    let valorTotal = (precoTamanho + precoSabor + precoTotalEntrega) * quantidade;

    document.getElementById('valorTotal').innerText = `R$ ${valorTotal.toFixed(2)}`;

    document.getElementById('modalValorTotal').innerText = `R$ ${valorTotal.toFixed(2)}`;

    const modal = document.querySelector("dialog");
    const closeModalButton = document.getElementById("closeModal"); 

    modal.showModal();

    closeModalButton.onclick = function () {
        modal.close();
    }
});
