let slides = document.querySelectorAll(".slideshow img");

let slideAtual = 0;

function mostrarSlide() {

    slides.forEach(function(slide) {
        slide.classList.remove("ativo");
    });

    slides[slideAtual].classList.add("ativo");
}

function proximoSlide() {

    slideAtual++;

    if (slideAtual >= slides.length) {
        slideAtual = 0;
    }

    mostrarSlide();
}


// Quando a página carregar
mostrarSlide();


// Quando clicar na imagem
slides.forEach(function(slide) {

    slide.addEventListener("click", function() {
        proximoSlide();
    });

});


// Troca automaticamente a cada 5 segundos
setInterval(proximoSlide, 5000);
