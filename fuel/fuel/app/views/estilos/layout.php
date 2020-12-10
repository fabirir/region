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


    <script src="/assets/plantilla2/js/jquery-3.3.1.min.js"></script>
   <script src="/assets/plantilla2/js/bootstrap.min.js"></script>
   <script src="/assets/plantilla2/js/player.js"></script>
   <script src="/assets/plantilla2/js/jquery.nice-select.min.js"></script>
   <script src="/assets/plantilla2/js/mixitup.min.js"></script>
   <script src="/assets/plantilla2/js/jquery.slicknav.js"></script>
   <script src="/assets/plantilla2/js/owl.carousel.min.js"></script>
   <script src="/assets/plantilla2/js/main.js"></script>
</head>

<body>
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
                        <li><a href="/platos/index">Platos <span class="arrow_carrot-down"></span></a>
                           <ul class="dropdown">
                              <li><a href="/platos/add">Agregar</a></li>
                           </ul>
                        </li>
                        <li><a href="/museos/index">Museos<span class="arrow_carrot-down"></span></a>
                           <ul class="dropdown">
                              <li><a href="/museos/add">Agregar</a></li>
                           </ul>
                        </li>
                        <li><a href="/lugares/index">Lugares<span class="arrow_carrot-down"></span></a>
                           <ul class="dropdown">
                              <li><a href="/lugares/add">Agregar</a>
                           </ul>
                        </li>
                  </nav>
               </div>
            </div>
            <div class="col-lg-2">
               <div class="header__right">
                  <a href="#" class="search-switch"><span class="icon_search"></span></a>
                  <a href="/usuario/index">Logout<span class="icon_profile"></span></a>
               </div>
            </div>
         </div>
         <div id="mobile-menu-wrap"></div>
      </div>
   </header>
   <!-- Header End -->
    <div class="container">
        <div class="starter-template" style="padding: 50px 0 0 0;">
            <?php echo $content; ?>
        </div>

    </div><!-- /.container -->
</body>

</html>