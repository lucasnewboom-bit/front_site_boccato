<!DOCTYPE html>
<html Lang="pt-br">
<head>
    <meta charset = "UTF-8">
    <meta name = "viewport" content = "width=device-witdh, initial-scale =1.0">
     <title>Boccato</title>
     <link rel="stylesheet" type="text/css" href=css/style.css>
     <link rel="icon" type="image/png" href="img/logo.png">
</head>

<body>
    <header class="cabecalho">
       <div class="logo">
        <img src= "img/logo.png" alt=Boccato>
       </div>

       <button class="menu-toggle" aria-label = "Abrir menu">&#9776;</button>
       <nav class="menu">
        <a href="#">Inicio</a>
        <a href="#">Cadastrar</a>
        <a href="#">Produtos</a>
        <a href="#">Sobre</a>
        <a href="#">Contatos</a>
        <a href="#">Ajuda</a>
       </nav>
    </header>
    <script>
        const toggleBtn = document.querySelector('.menu-toggle');
        const menu = document.querySelector('.menu');

        toggleBtn.addEventListener('click', () => {
            menu.classList.toggle('ativo');
        });
    </script>
