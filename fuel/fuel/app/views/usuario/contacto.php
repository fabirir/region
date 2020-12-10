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
        label {
            color: white;
        }

        #form table {
            width: 90%;
        }

        #form table tr {
            width: 90%;
        }


        #form table tr td {
            width: 50%
        }

        #form input[type=text],
        select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        #form input[type=submit] {
            width: 100%;
            background-color: #3c3c3c;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        #form div {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
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
                            <img src="/assets/img/logo3.jpg" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li class="active"><a href="./index.html">Indice</a></li>
                                <li><a href="/usuario/platos">Platos </a>

                                </li>
                                <li><a href="/usuario/museos">Museos</a>

                                </li>
                                <li><a href="/usuario/lugares">Lugares</span></a>

                                </li>
                                <li><a href="/usuario/valor">Valor Agr</a>
                                </li>
                                <li><a href="/usuario/contacto">Contacts</a></li>
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


        <!-- Login Section Begin -->
        <section class="login spad">
            <div class="container">
                <div class="login__form">
                    <h3>Contacto</h3>
                    <?php
                    $message = "";
                    if (Input::post("contacto")) {
                        $sid = "AC1d2d62803c71fc157350be091f05648d"; // Your Account SID from www.twilio.com/console
                        $token = "93d0498b93472bd33c58369d227cab52"; // Your Auth Token from www.twilio.com/console
                        $cliente = new \Twilio\Rest\Client($sid, $token);
                        $message = $cliente->messages->create(
                            '+57' . Input::post('celular'), // Text this number
                            [
                                'from' => '+12513366517', // From a valid Twilio number
                                'body' => '#CaucaRegion Recibio tu mensaje con exito'
                            ]
                        );
                        // echo "la prueba es:".$message->sid;
                    }
                    //echo "no sirvio we";
                    ?>
                    <form action="/usuario/contacto" method="post">
                        <div class="input__item">
                            <input type="text" id="name" name="user_name">
                        </div>
                        <div class="input__item">
                            <input type="text" id="mail" name="celular">
                        </div>
                        <div class="input__item">
                            <input type="text" id="mail" name="user_mail">
                        </div>
                        <div class="input__item">
                            <textarea id="msg" name="mensaje"></textarea>
                        </div>
                        <button type="submit" name="contacto" class="site-btn" value="enviar mensaje">Enviar Mensaje</button>
                    </form>

                </div>
            </div>
        </section>
        <!-- Login Section End -->

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