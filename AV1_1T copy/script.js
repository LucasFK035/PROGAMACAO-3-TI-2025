document.getElementById('formulario_ifSoccer').addEventListener('submit', function(event)) {
    event.preventDefault();

    let time1 = {"Time": String, "Gols": 0};
    let time2 = {"Timne": String, "Gols": 0};

    let nomeTime1 = document.querySelector('text[name="timeNome1"]').value;
    let nomeTime2 = document.querySelector('text[name="timeNome2"]').value;
   
    let golsTime1 = 0;

    let resultadoGols1 = document.querySelector('input[name="timeGols1"]:checked');
    if (resultadoGols1) {
        resultadoGols1 = time1[resultadoGols.value];
    }

    let golsTime2 = 0;
    let resultadoGols2 = document.querySelector('input[name="timeGols2"]:checked');
    if (resultadoGols1) {
        resultadoGols1 = time1[resultadoGols.value];
    }
    resultadoGols2.forEach(function(sabor) {
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