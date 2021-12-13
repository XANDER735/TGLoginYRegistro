<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mundo Andino - Inicio</title>

    <!-- Styles -->
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/mobile.css">
    <link rel="stylesheet" href="css/tablet.css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&family=Fuzzy+Bubbles:wght@400;700&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>
<body style="font-family: 'Nanum Pen Script', cursive">

    <header id="header">

     <!-- Navegation Menu -->
     <nav class="menu" style="background-color: rgba(178, 187, 30, 1)">
         <div class="logobox">
             <h1 class="logo"><a href="#">
                <i class="fas fa-tree"></i>
                MundoAndino
             </a></h1>

             <span class="btn-menu"><i class="fas fa-bars"></i></span>
         </div>

         <div class="list-container" >
             <ul class="lists">
                 <li><a href="#" class="active">Inicio</a></li>
                 <li><a href="#">Blog</a></li>
                 <li><a href="#">Zoologicos</a></li>
                 <li><a href="#">Tienda</a></li>
                 <li><a href="#">Contacto</a></li>
             </ul>
         </div>
     </nav>

     <!-- Img Header -->
     <figure class="img-header">
         <div class="welcome" style="">
            <h4 style="font-family: 'Fuzzy Bubbles', cursive;">"Los ojos de un animal tienen el poder de hablar un gran lenguaje"</h4>
            <h2><a href="#" style="font-family: 'Fuzzy Bubbles', cursive;">
               <i class="fas fa-tree"></i>
               zoologico Mundo Andino
            </a></h2>
         </div>
     </figure>

    </header>

<main>
    
    <!-- About Us -->
    <section class="about-us">
        <div class="info">
            <h3>Acerca de nosotros</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Architecto voluptatem possimus, cum nostrum quibusdam, tempore odit recusandae delectus eos debitis ducimus quisquam similique porro animi ut quos, eum fuga perferendis. Quibusdam, dignissimos repudiandae possimus amet deserunt doloribus eius vero consectetur exercitationem impedit? Obcaecati asperiores repellat deserunt ullam necessitatibus repudiandae ut.</p>
            <hr>
        </div>

        <div class="free-content">
            <h4>Contenido 100% gratis!</h4>
            <div class="icons">
                <div>
                   <div class="span-icon"><span><i class="fas fa-file-pdf"></i></span></div>
                   <h6>PDF</h6>
                   <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis nesciunt sed mollitia ea ut itaque.</p>
                </div>

                <div class="container borde">
                    <!-- <div class="span-icon"><span><i class="fas fa-images"></i></span></div>
                    <h6>Awesome Photos</h6>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis nesciunt sed mollitia ea ut itaque.</p> -->
                    <img src="img/yape.png" class="img-fluid d-block mx-auto" width="300" height="auto" alt="yp">
                 </div>

                 <div>
                    <div class="span-icon"><span><i class="fab fa-youtube"></i></span></div>
                    <h6>Youtube</h6>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis nesciunt sed mollitia ea ut itaque.</p>
                 </div>
                
            </div>
        </div>
    </section>
    <br>
    <br>
    <!-- Gallery -->
    <section class="gallery-section">
        <div class="animal-icon">
            <i class="fas fa-paw"></i><br><br>            
        </div>
       

        <div class="gallery-content">
            <div class="img-card"><img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/15/01/5d/42/photo0jpg.jpg?w=1200&h=-1&s=1" alt="animal"></div>
            <div class="img-card"><img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/11/7f/6c/34/the-pumas-huge-cats.jpg?w=800&h=-1&s=1" alt="animal"></div>
            <div class="img-card"><img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/18/6a/5c/ac/photo0jpg.jpg?w=1100&h=-1&s=1" alt="animal"></div>
            <div class="img-card"><img src=https://dynamic-media-cdn.tripadvisor.com/media/photo-o/18/6a/5c/af/photo3jpg.jpg?w=1100&h=-1&s=1" alt="animal"></div>
            <div class="img-card"><img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/18/6a/5c/b2/photo6jpg.jpg?w=1100&h=-1&s=1" alt="animal"></div>
            <div class="img-card"><img src="img/img-6.jpg" alt="animal"></div>
            <div class="img-card"><img src="img/img-7.jpg" alt="animal"></div>
            <div class="img-card"><img src="img/img-8.jpg" alt="animal"></div>
            <div class="img-card"><img src="img/img-9.jpg" alt="animal"></div>
            <div class="img-card"><img src="img/img-10.jpg" alt="animal"></div>
            <div class="img-card"><img src="img/img-11.jpg" alt="animal"></div>
            <div class="img-card"><img src="img/img-12.jpg" alt="animal"></div>
            
        </div>
        

        <!-- Modal -->
         <div class="modal">
             <span id="closeModal"><i class="fas fa-times"></i></span>
             <img id="imgModal">
             <p id="caption"></p>
         </div>

    </section>

    <!-- Footer -->
    <footer>
       <p>&copy; Todos los derechos reservados - 2021 | MundoAndino</p>
    </footer>

</main>
    
<!-- Scripts -->
<script src="https://kit.fontawesome.com/35db202371.js" crossorigin="anonymous"></script>
<script src="js/ap.js"></script>

</body>
</html>
