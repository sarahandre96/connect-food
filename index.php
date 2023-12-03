<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SassoueCooking</title>
    <link  rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"  />
</head>
<body>
    <header class="max-width bg" id="home">
        <div class="container">
            <div class='menu'>
            <div class="logo"></div>
            <div class="desktop-menu">
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">Sobre</a></li>
                    <li><a href="#service">Serviços</a></li>
                    <li><a href="#menu">Menu</a></li>
                    <li><a href="#contact">Contato</a></li>
                </ul>
            </div>
        </div>
        <div class="call">
            <div class="left">
                <img src="../imagens/img2.png" alt="">
            </div>
            <div class="right">
                <h1 class="color-laranja text-gd">SassoueCooking pizzaria</h1>
                <h2 class="color-cinza-1 text-md">Experimente a melhor pizza da regão</h2>
                <p class="text-pq">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                     Cum, optio commodi, iure iusto a architecto provident vitae veritatis blanditiis dolores accusantium omnis nostrum 
                    sit eum inventore eligendi quisquam ea atque?</P>

                    <button>ver menu</button>
            </div>
        </div>
    </div>
    <button id="back-to-top">^</button>
</header>

    <section class="max-width bg" id="about">
      <div class="container">
        <div class="left">
            <span class="text-title color-laranja">Sobre Nós</span>
            <h2 class="text-md color-cinza-1"> Nós cozinhamos a comida mais saborosa</h2>
            <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ea dolorum assumenda eaque, beatae voluptatum harum. Iusto maxime ullam accusantium eum dolorem sint,
                 cupiditate doloremque veritatis! Atque porro iure dolor nisi.</p>
                 <button>Saiba mais</button>
        </div>
        <div class="right">
            <img src="../imagens/img2.png" alt="">
        </div>

         </div>
    </section>

    <! --Aqui começa o service >

 <section class="max-widht bg" id="service">
    <div class="container">
        <div class="content">
             <div class="titulo">
                 <span class="text-title color-laranja">Ofertas</span>
                 <h2 class="text-md color-cinza-1">Nossos serviços</h2>
            </div>
            <div class="down">
            <div class="box">
            <i class="fa fa-cutlery text-gd color-laranja"></i>
            <h2 class="text-md color-cinza-1"> A melhor pizza</h2>
            <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ea dolorum assumenda eaque, beatae voluptatum harum. Iusto maxime ullam accusantium eum dolorem sint,
                 cupiditate doloremque veritatis! Atque porro iure dolor nisi.</p>
            </div>
            <div class="box">
            <i class="fa-solid fa-pizza-slice text-gd color-laranja"></i>
            <h2 class="text-md color-cinza-1"> Comida rápida</h2>
            <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ea dolorum assumenda eaque, beatae voluptatum harum. Iusto maxime ullam accusantium eum dolorem sint,
                 cupiditate doloremque veritatis! Atque porro iure dolor nisi.</p>
           </div>
            <div class="box">
            <i class="fa fa-motorcycle text-gd color-laranja"></i>
            <h2 class="text-md color-cinza-1"> Entrega</h2>
            <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ea dolorum assumenda eaque, beatae voluptatum harum. Iusto maxime ullam accusantium eum dolorem sint,
                 cupiditate doloremque veritatis! Atque porro iure dolor nisi.</p>
            </div>
            </div>

        </div>
    </div>
</section>

<! --Aqui começa o menu >

<section class="max-widht bg" id="menu" >
    <div class="container">
        <div class="content">
            <div class="titulo">
              <span class="text-title color-laranja">Promoções do dia</span>
                 <h2 class="text-md color-cinza-1">cardápio</h2>
           </div>
           <div class="down">
            <div class="box">
             <img src="../imagens/img1.jpg" alt="">
             <h2 class="color-laranja"> portuguesa</h2>
             <p class="text-md">muito saborosa</p>
             <p>R$ 45</p>

            </div>
            <div class="box">
            <img src="../imagens/img1.jpg" alt="">
             <h2 class="color-laranja"> portuguesa</h2>
             <p class="text-md">muito saborosa</p>
             <p>R$ 45</p>
           </div>

         
            <div class="box">
            <img src="../imagens/img1.jpg" alt="">
             <h2 class="color-laranja">   portuguesa</h2>
             <p class="text-md">muito saborosa</p>
             <p>R$ 45</p>

            </div>
            </div>
      </div>
   </div>
</section>




<section class="max-widht bg" id="contact" >
    <div class="container">
        <div class="call">
            <div class="left">
                
                <span class="text-title color-laranja">App</span>
                    <h2 class="text-md color-cinza-1">o aplicativo está disponivel</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti recusandae quas nulla iure corporis ut omnis sit, dolores vero,
                        tempore quam libero quos voluptates error rem dolorum quis quia laudantium.</p>
                <div class="info">
                    <img src="../imagens/logo.png" alt="">
                    <img src="../imagens/logo.png" alt="">
                </div>

            </div>
           <div class="right">
              <img src="../imagens/img2.png" alt="">
           </div> 
            
        </div>
   </div>
</section>






<script>
        // botão back-to-top

        var btn = document.querySelector("#back-to-top");

        btn.addEventListener("click",function(){
            window.scrollTo(0,0);
        })
    </script>
</body>
</html>

