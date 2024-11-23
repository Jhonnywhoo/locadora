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
        const body = document.body;
        body.style.backgroundImage = imagens[(indice)];
        indice++;
        console.log(imagens.length)
        console.log(indice)
    }

    setInterval(trocarBackground, 3000);
});
