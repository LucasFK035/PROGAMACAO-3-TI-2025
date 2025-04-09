document.getElementById('formulario_ifSoccer').addEventListener('submit', function(event) {
   

    let time1 = {Time: "Grêmio", "Gols": 0};
    let time2 = {Time: "Inter", "Gols": 0};

    let nomeTime1 = document.querySelector('text[name="timeNome1"]').value;
    let nomeTime2 = document.querySelector('text[name="timeNome2"]').value;
   
    let golsTime1 = 0;
    let resultadoGols1 = document.querySelector('input[name="timeGols1"]:checked');
    if (resultadoGols1 > resultadoGols2) {
        resultadoGols1 = time1[resultadoGols1.value];
    }

    let golsTime2 = 0;
    let resultadoGols2 = document.querySelector('input[name="timeGols2"]:checked');
    if (resultadoGols2 > resultadoGols1) {
        resultadoGols2 = time2[resultadoGols2.value];
    }

    const resultadoFinal = document.getElementById("Vencedor");

    if (formData.has("Grêmio")){
        resultadoFinal.textContent = `${time1['Vencedor']} é o vencedor`;
    }else if (formData.has("Inter")){
        resultadoFinal.textContent = `${time2['Vencedor']} é o vencedor`;
    }else{
        resultadoFinal.textContent = `Ninguém é o vencedor`;
    }

    document.getElementById('timeVencedor').innerText = `R$ ${timeVencedor.toFixed(2)}`;

    document.getElementById('modalTimeVencedor').innerText = `R$ ${timeVencedor.toFixed(2)}`;

    const modal = document.querySelector("dialog");
    const closeModalButton = document.getElementById("closeModal"); 

    modal.showModal();

    closeModalButton.onclick = function () {
        modal.close();
}

});