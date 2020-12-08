<!DOCTYPE html>
<html lang="zxx">

<head>
   <meta charset="UTF-8">
   <meta name="description" content="Anime Template">
   <meta name="keywords" content="Anime, unica, creative, html">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Anime | Template</title>

   <!-- Google Font -->
   <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

   <!-- Css Styles -->
   <link rel="stylesheet" href="/assets/plantilla2/css/bootstrap.min.css" type="text/css">
   <link rel="stylesheet" href="/assets/plantilla2/css/font-awesome.min.css" type="text/css">
   <link rel="stylesheet" href="/assets/plantilla2/css/elegant-icons.css" type="text/css">
   <link rel="stylesheet" href="/assets/plantilla2/css/plyr.css" type="text/css">
   <link rel="stylesheet" href="/assets/plantilla2/css/nice-select.css" type="text/css">
   <link rel="stylesheet" href="/assets/plantilla2/css/owl.carousel.min.css" type="text/css">
   <link rel="stylesheet" href="/assets/plantilla2/css/slicknav.min.css" type="text/css">
   <link rel="stylesheet" href="/assets/plantilla2/css/style.css" type="text/css">
</head>

<body>
   <!-- Page Preloder -->
   <div id="preloder">
      <div class="loader"></div>
   </div>

   <!-- Header Section Begin -->
   <header class="header">
      <div class="container">
         <div class="row">
            <div class="col-lg-2">
               <div class="header__logo">
                  <a href="./index.html">
                     <img src="img/logo3.jpg" alt="">
                  </a>
               </div>
            </div>
            <div class="col-lg-8">
               <div class="header__nav">
                  <nav class="header__menu mobile-menu">
                     <ul>
                        <li class="active"><a href="./index.html">Indice</a></li>
                        <li><a href="/usuario/platos">Platos <span class="arrow_carrot-down"></span></a>
                           <ul class="dropdown">
                              <li><a href="./categories.html">Agregar</a></li>
                           </ul>
                        </li>
                        <li><a href="/usuario/museos">Museos<span class="arrow_carrot-down"></span></a>
                           <ul class="dropdown">
                              <li><a href="./categories.html">Agregar</a></li>
                           </ul>
                        </li>
                        <li><a href="/usuario/lugares">Lugares<span class="arrow_carrot-down"></span></a>
                           <ul class="dropdown">
                              <li><a href="./categories.html">Agregar</a>
                           </ul>
                        </li>
                        <li><a href="./categories.html">Valor Agr</a>
                        </li>




                        <li><a href="#">Contacts</a></li>
                     </ul>
                  </nav>
               </div>
            </div>
            <div class="col-lg-2">
               <div class="header__right">
                  <a href="#" class="search-switch"><span class="icon_search"></span></a>
                  <a href="./login.html"><span class="icon_profile"></span></a>
               </div>
            </div>
         </div>
         <div id="mobile-menu-wrap"></div>
      </div>
   </header>
   <!-- Header End -->

   <!-- Hero Section Begin -->
   <section class="hero">
      <div class="container">
         <div class="hero__slider owl-carousel">
            <?php
            foreach ($platos as $plato) {
            ?>
               <div class="hero__items set-bg" data-setbg="<?php echo $plato['imagen']; ?>">
                  <div class="row">
                     <div class="col-lg-6">
                        <div class="hero__text">
                           <h2><?php echo $plato['nombre']; ?></h2>
                           <p><?php echo $plato['ingredientes']; ?></p>
                           <p><?php echo $plato['precio']; ?></p>
                           <a href="#"><span>Watch Now</span> <i class="fa fa-angle-right"></i></a>
                        </div>
                     </div>
                  </div>
               </div>
            <?php
            }
            ?>
         </div>
      </div>
   </section>
   <!-- Hero Section End -->

   <!-- Product Section Begin -->
   <!-- Footer Section Begin -->
   <footer class="footer">
      <div class="container">
         <div class="row">
            <div class="col-lg-6">

            </div>
            <div class="col-lg-3">
               <p>
                  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                  Santiago Ramirez | Arlex Galindez Copyright &copy;<script>
                     document.write(new Date().getFullYear());
                  </script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
               </p>

            </div>
         </div>
      </div>
   </footer>
   <!-- Footer Section End -->

   <!-- Search model Begin -->
   <div class="search-model">
      <div class="h-100 d-flex align-items-center justify-content-center">
         <div class="search-close-switch"><i class="icon_close"></i></div>
         <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Search here.....">
         </form>
      </div>
   </div>
   <!-- Search model end -->

   <!-- Js Plugins -->
   <script src="/assets/plantilla2/js/jquery-3.3.1.min.js"></script>
   <script src="/assets/plantilla2/js/bootstrap.min.js"></script>
   <script src="/assets/plantilla2/js/player.js"></script>
   <script src="/assets/plantilla2/js/jquery.nice-select.min.js"></script>
   <script src="/assets/plantilla2/js/mixitup.min.js"></script>
   <script src="/assets/plantilla2/js/jquery.slicknav.js"></script>
   <script src="/assets/plantilla2/js/owl.carousel.min.js"></script>
   <script src="/assets/plantilla2/js/main.js"></script>


</body>

</html>