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
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

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
                        <a href="/usuario/sesion"><span class="icon_profile"></span></a>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Normal Breadcrumb Begin -->
    <section class="normal-breadcrumb set-bg" data-setbg="img/normal-breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="normal__breadcrumb__text">
                        <h2>Login</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Normal Breadcrumb End -->

    <!-- Login Section Begin -->
    <section class="login spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="login__form">
                        <h3>Login</h3>
                        <?php
                         $data = array();

                         // If so, you pressed the submit button. Let's go over the steps.
                         if (Input::post('enviar'))
                         {
                             // Check the credentials. This assumes that you have the previous table created and
                             // you have used the table definition and configuration as mentioned above.
                             echo Input::post('password');
                             
                             if (Auth::login(Input::post('username'),Input::post('password')))
                             {
                                 // Credentials ok, go right in.
                                 Response::redirect('admin/index');
                             }
                             else
                             {
                                 // Oops, no soup for you. Try to login again. Set some values to
                                 // repopulate the username field and give some error text back to the view.
                                 $data['username']    = Input::post('username');
                                 $data['login_error'] = 'Wrong username/password combo. Try again';
                             }
                         }
                        ?>
                        <form  method="post">
                            <div class="input__item">
                                <input type="text" name="username" placeholder="Nombre">
                                <span class="icon_mail"></span>
                            </div>
                            <div class="input__item">
                                <input type="password" name="password" placeholder="Password">
                                <span class="icon_lock"></span>
                            </div>
                            <button type="submit" class="site-btn" value="Login" name="enviar">Login Now</button>
                        </form>
                        <a href="#" class="forget_pass">Forgot Your Password?</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="login__register">
                        <h3>Dont’t Have An Account?</h3>
                        <a href="#" class="primary-btn">Register Now</a>
                    </div>
                </div>
            </div>
            <div class="login__social">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6">
                        <div class="login__social__links">
                            <span>or</span>
                            <ul>
                                <li><a href="#" class="facebook"><i class="fa fa-facebook"></i> Sign in With
                                Facebook</a></li>
                                <li><a href="#" class="google"><i class="fa fa-google"></i> Sign in With Google</a></li>
                                <li><a href="#" class="twitter"><i class="fa fa-twitter"></i> Sign in With Twitter</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Login Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer">
        <div class="page-up">
            <a href="#" id="scrollToTopButton"><span class="arrow_carrot-up"></span></a>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer__logo">
                        <a href="./index.html"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="footer__nav">
                        <ul>
                            <li class="active"><a href="./index.html">Homepage</a></li>
                            <li><a href="./categories.html">Categories</a></li>
                            <li><a href="./blog.html">Our Blog</a></li>
                            <li><a href="#">Contacts</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                      Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                      <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>

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