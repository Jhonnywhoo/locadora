document.addEventListener("DOMContentLoaded", function () {
    const imagens = [
        "url('img/fundo1.png')",
        "url('img/fundo3.png')",
        "url('img/fundo4.png')"
    ];

    let indice = 1;

    function trocarBackground() {
        if (indice + 1 > imagens.length){
            indice = 0;
        }
        const main = document.getElementById("main");
        main.style.backgroundImage = imagens[indice];
        indice++;
    }

    setInterval(trocarBackground, 5000);
});
