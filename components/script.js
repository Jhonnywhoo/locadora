document.addEventListener("DOMContentLoaded", function() {

    const imagens = [
        "url('../locadora/img/fundo1-new.png')",
        "url('../locadora/img/fundo3-new.png')",
        "url('../locadora/img/fundo4-new.png')"
    ];

    let indice = 0;
    const fundo = document.body;

    fundo.style.backgroundImage = imagens[indice];
    fundo.style.opacity = 1;

    function trocarBackground() {
        setTimeout(() => {
            indice = (indice + 1) % imagens.length; 
            fundo.style.backgroundImage = imagens[indice];
            fundo.style.opacity = 1;
        }, 300);  
    }
    setInterval(trocarBackground, 3000);
});
