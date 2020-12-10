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
   <style>
             

        table {
            width: 750px;
            border-collapse: collapse;
            margin: 50px auto;
        }


        /* Zebra striping */

        tr:nth-of-type(odd) {
            background: #eee;
        }

        th {
            background: #3498db;
            color: white;
            font-weight: bold;
        }

        td,
        th {
            padding: 10px;
            border: 1px solid #ccc;
            text-align: center;
            font-size: 18px;
        }

        td{
           background-color: white;
        }


        /* 
Max width before this PARTICULAR table gets nasty
This query will take effect for any screen smaller than 760px
and also iPads specifically.
*/

        @media only screen and (max-width: 760px),
        (min-device-width: 768px) and (max-device-width: 1024px) {
            table {
                width: 100%;
            }

            /* Force table to not be like tables anymore */
            table,
            thead,
            tbody,
            th,
            td,
            tr {
                display: block;
                background-color: white;
            }

            /* Hide table headers (but not display: none;, for accessibility) */
            thead tr {
                position: absolute;
                top: -9999px;
                left: -9999px;
            }

            tr {
                border: 1px solid #ccc;
            }

            td {
                /* Behave  like a "row" */
                border: none;
                border-bottom: 1px solid #eee;
                position: relative;
                padding-left: 50%;
                background-color: white;
            }

            td:before {
                /* Now like a table header */
                position: absolute;
                /* Top/left values mimic padding */
                top: 6px;
                left: 6px;
                width: 45%;
                padding-right: 10px;
                white-space: nowrap;
                /* Label the data */
                content: attr(data-column);
                color: #000;
                font-weight: bold;
            }
        }
    </style>
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
                        <li class="active"><a href="/admin/index">Indice</a></li>
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
                     </ul>
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

   <!-- Hero Section Begin -->
   <section class="hero">
      <table>
         <thead>
            <tr>
               <th>Nombre</th>
               <th>Imagen</th>
               <th>Direccion</th>
               <th>Entrada</th>
               <th>Acciones</th>
            </tr>
         </thead>
         <tbody>
            <tr>
               <?php 
               foreach ($museos as $museo) {
               ?>
            <tr>
               <td data-column="Nombre"><?php echo $museo['nombre']; ?></td>
               <td data-column="Imagen"><img width="150px" src="<?php echo $museo['imagen']; ?>"></td>
               <td data-column="Ingredientes"><?php echo $museo['direccion']; ?></td>
               <td data-column="Precio"><?php echo $museo['entrada']; ?></td>
               <td data-column="Acciones">
                  <a href="/museos/edit/<?php echo $museo['id']; ?>">Edit</a>
                  <a href="/museos/delete/<?php echo $museo['id']; ?>">Delete</a>
               </td>
            </tr>

         <?php
               }
         ?>
         </tr>
         </tbody>
      </table>
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