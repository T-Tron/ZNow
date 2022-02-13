<?php
    session_start();
?>
<!doctype html>
<html class="no-js" lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>ZNow - Accueil</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/animate.min.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/fontawesome-all.min.css">
        <link rel="stylesheet" href="css/odometer.css">
        <link rel="stylesheet" href="css/aos.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/meanmenu.css">
        <link rel="stylesheet" href="css/slick.css">
        <link rel="stylesheet" href="css/default.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
    </head>
    <body>

        <!-- preloader -->
        <div id="preloader">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <img src="img/icon/preloader.svg" alt="">
                </div>
            </div>
        </div>
        <!-- preloader-end -->

        <!-- header-area -->
        <header class="header-style-four">
           <!-- <div class="header-top-area s-header-top-area d-none d-lg-block">
                <div class="container custom-container-two">
                    <div class="row align-items-center">
                        <div class="col-lg-6 d-none d-lg-block">
                            <div class="header-top-offer">
                                <p>Offre exclusive Black Friday !</p>
                                <span class="coming-time" data-countdown="2022/08/03"></span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="header-social">
                                <span>Réseau Social :</span>
                                <ul>
                                    <li><a href="#"><i class="fab fa-discord"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <div id="sticky-header" class="header-four-wrap">
                <div class="container custom-container-two">
                    <div class="row">
                        <div class="col-12">
                            <div class="main-menu menu-style-two">
                                <nav>
                                    <div class="logo">
                                        <a href="index.html"><img src="img/logo/logo_two.png" alt="Logo"></a>
                                    </div>
                                    <div id="mobile-menu" class="navbar-wrap d-none d-lg-flex">
                                        <ul>
                                            <li class="show"><a href="index.html">Accueil</a></li>
                                            <li><a href="boutiques.html">Boutiques</a></li>
                                            <li><a href="forum.html">Forum</a></li>
                                            <li><a href="#">Pages</a>
                                                <ul class="submenu">
                                                    <li><a href="about-us.html">Launcheur</a></li>
                                                    <li><a href="game-single.html">Hébergeur</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact.html">Contact</a></li>
                                            <?php
                                            if(!isset($_SESSION['loggedin']) OR $_SESSION['loggedin'] == false) {
                                            ?>
                                            <li class="show"><a href="pages/signin/index.php">Connexion</a></li>
                                            <?php
                                            }
                                            ?>
                                        </ul>
                                    </div>
                                    <div class="header-action">
                                        <ul>
                                            <li class="header-shop-cart"><a href="#"><i class="fas fa-shopping-basket"></i><span>0</span></a>
                                                <ul class="minicart">
                                                    <li class="d-flex align-items-start">
                                                        <div class="cart-img">
                                                            <a href="#">
                                                                <img src="img/product/cart_p01.jpg" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="cart-content">
                                                            <h4>
                                                                <a href="#">Xbox One Controller</a>
                                                            </h4>
                                                            <div class="cart-price">
                                                                <span class="new">$229.9</span>
                                                                <span>
                                                                    <del>$229.9</del>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="del-icon">
                                                            <a href="#">
                                                                <i class="far fa-trash-alt"></i>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="total-price">
                                                            <span class="f-left">Total:</span>
                                                            <span class="f-right">$239.9</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkout-link">
                                                            <a href="cart.html">Shopping Cart</a>
                                                            <a class="red-color" href="checkout.html">Checkout</a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="header-search"><a href="#" data-toggle="modal" data-target="#search-modal"><i class="fas fa-search"></i></a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <div class="mobile-menu"></div>
                        </div>
                        <!-- Modal Search -->
                        <div class="modal fade" id="search-modal" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <form>
                                        <input type="text" placeholder="Search here...">
                                        <button><i class="fa fa-search"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header-area-end -->

        <!-- main-area -->
        <main>

            <!-- slider-area -->
            <section class="slider-area home-four-slider">
                <div class="slider-active">
                    <div class="single-slider slider-bg slider-style-two">
                        <div class="container custom-container-two">
                            <div class="row">
                                <div class="col-xl-6 col-lg-7 col-md-11">
                                    <div class="slider-content">
                                        <h6 data-animation="fadeInUp" data-delay=".4s">ZNow</h6>
                                        <h2 data-animation="fadeInUp" data-delay=".4s">Nom Du Jeu</h2>
                                        <p data-animation="fadeInUp" data-delay=".6s">Description du jeu.</p>
                                        <a href="#" class="btn btn-style-two" data-animation="fadeInUp" data-delay=".8s">ACHETER</a>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-img"><img src="img/slider/four_slider_img01.png" alt="" data-animation="slideInRightS" data-delay=".8s"></div>
                        </div>
                    </div>
                    <div class="single-slider slider-bg slider-style-two">
                        <div class="container custom-container-two">
                            <div class="row">
                                <div class="col-xl-6 col-lg-7 col-md-11">
                                    <div class="slider-content">
                                        <h6 data-animation="fadeInUp" data-delay=".4s">ZNow</h6>
                                        <h2 data-animation="fadeInUp" data-delay=".4s">Nom Du Jeu</h2>
                                        <p data-animation="fadeInUp" data-delay=".6s">Description du jeu.</p>
                                        <a href="#" class="btn btn-style-two" data-animation="fadeInUp" data-delay=".8s">ACHETER</a>
                                    </div>
                                </div>
                            </div>
                            <div class="slider-img"><img src="img/slider/four_slider_img02.png" alt="" data-animation="slideInRightS" data-delay=".8s"></div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- slider-area-end -->

            <!-- brand-area -->
            <div class="brand-area brand-bg home-four-brand">
                <div class="container">
                    <div class="row brand-active">
                        <div class="col-xl-2">
                            <div class="brand-item">
                                <img src="img/brand/brand_logo01.png" alt="">
                            </div>
                        </div>
                        <div class="col-xl-2">
                            <div class="brand-item">
                                <img src="img/brand/brand_logo02.png" alt="">
                            </div>
                        </div>
                        <div class="col-xl-2">
                            <div class="brand-item">
                                <img src="img/brand/brand_logo03.png" alt="">
                            </div>
                        </div>
                        <div class="col-xl-2">
                            <div class="brand-item">
                                <img src="img/brand/brand_logo04.png" alt="">
                            </div>
                        </div>
                        <div class="col-xl-2">
                            <div class="brand-item">
                                <img src="img/brand/brand_logo05.png" alt="">
                            </div>
                        </div>
                        <div class="col-xl-2">
                            <div class="brand-item">
                                <img src="img/brand/brand_logo06.png" alt="">
                            </div>
                        </div>
                        <div class="col-xl-2">
                            <div class="brand-item">
                                <img src="img/brand/brand_logo03.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- brand-area-end -->

            <!-- home-four-area-bg -->
            <div class="home-four-area-bg">
                <div class="bg"></div>
                <!-- latest-games-area -->
                <section class="latest-games-area home-four-latest-games pt-120">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-8">
                                <div class="section-title home-four-title mb-50">
                                    <span>Nos Dernières Mise A Jours</span>
                                    <h2>Découvrez les <span>dernières</span> mise a jours des jeux disponible sur la platforme !</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="latest-games-active owl-carousel">
                                    <div class="latest-games-items mb-30">
                                        <div class="latest-games-thumb">
                                            <a href="#"><img src="img/product/latest_games_thumb01.jpg" alt=""></a>
                                        </div>
                                        <div class="latest-games-content">
                                            <div class="lg-tag">
                                                <a href="#">Platforme</a>
                                            </div>
                                            <h4><a href="#">Titre <span>Jeux</span></a></h4>
                                            <p>Maj Du <span>(Date)</span></p>
                                        </div>
                                    </div>
                                    <div class="latest-games-items mb-30">
                                        <div class="latest-games-thumb">
                                            <a href="#"><img src="img/product/latest_games_thumb02.jpg" alt=""></a>
                                        </div>
                                        <div class="latest-games-content">
                                            <div class="lg-tag">
                                                <a href="#">Zombie</a>
                                            </div>
                                            <h4><a href="#">Titre <span>Jeux</span></a></h4>
                                            <p>Maj Du <span>(Date)</span></p>
                                        </div>
                                    </div>
                                    <div class="latest-games-items mb-30">
                                        <div class="latest-games-thumb">
                                            <a href="#"><img src="img/product/latest_games_thumb03.jpg" alt=""></a>
                                        </div>
                                        <div class="latest-games-content">
                                            <div class="lg-tag">
                                                <a href="#">FPS</a>
                                            </div>
                                            <h4><a href="#">Titre <span>Jeux</span></a></h4>
                                            <p>Maj Du <span>(Date)</span></p>
                                        </div>
                                    </div>
                                    <div class="latest-games-items mb-30">
                                        <div class="latest-games-thumb">
                                            <a href="#"><img src="img/product/latest_games_thumb01.jpg" alt=""></a>
                                        </div>
                                        <div class="latest-games-content">
                                            <div class="lg-tag">
                                                <a href="#">Survie</a>
                                            </div>
                                            <h4><a href="#">Titre <span>Jeux</span></a></h4>
                                            <p>Maj Du <span>(Date)</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- latest-games-area-end -->

                <!-- live-match-area -->
                <section class="live-match-area pt-90">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-6 col-md-8">
                                <div class="section-title home-four-title text-center mb-60">
                                    <h2>Live Officiel <span>En Direct</span> !</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-xl-8 col-lg-9">
                                <div class="live-match-wrap">
                                    <img src="img/images/live_match_img.jpg" alt="">
                                    <a href="https://www.youtube.com/watch?v=04KPiGmC7Lc" class="popup-video"><img src="img/icon/video_play_icon.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- live-match-area-end -->

                <!-- live-match-team-area -->
                <section class="live-match-area fix pt-120 pb-110">
                    <div class="container custom-container-two">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="live-match-team">
                                    <img src="img/team/live_match_logo01.png" alt="">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="live-match-time text-center">
                                    <span>upcoming live matches</span>
                                    <h2 class="time">08:30</h2>
                                    <h2 class="live-overlay-text">live</h2>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="live-match-team right">
                                    <img src="img/team/live_match_logo02.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- live-match-team-area-end -->

            </div>
            <!-- home-four-area-bg-end -->

            <!-- featured-game-area -->
            <section class="featured-game-area new-released-game-area pt-115 pb-90">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-md-8">
                            <div class="section-title home-four-title black-title text-center mb-60">
                                <h2>ALL RELEASED <span>GAMES</span></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid container-full">
                    <div class="row no-gutters new-released-game-active">
                        <div class="col-lg-3">
                            <div class="featured-game-item mb-30">
                                <div class="featured-game-thumb">
                                    <img src="img/images/s_featured_game_thumb01.jpg" alt="">
                                </div>
                                <div class="featured-game-content">
                                    <h4><a href="#">JUST FOR <span>GAMERS</span></a></h4>
                                    <div class="featured-game-meta">
                                        <i class="fas fa-bell"></i>
                                        <span>Playstation 5 , Xbox</span>
                                    </div>
                                </div>
                                <div class="featured-game-content featured-game-overlay-content">
                                    <div class="featured-game-icon"><img src="img/icon/featured_game_icon.png" alt=""></div>
                                    <h4><a href="#">JUST FOR <span>GAMERS</span></a></h4>
                                    <div class="featured-game-meta">
                                        <i class="fas fa-bell"></i>
                                        <span>Playstation 5 , Xbox</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="featured-game-item mb-30">
                                <div class="featured-game-thumb">
                                    <img src="img/images/s_featured_game_thumb02.jpg" alt="">
                                </div>
                                <div class="featured-game-content">
                                    <h4><a href="#">Need FOR <span>Speed</span></a></h4>
                                    <div class="featured-game-meta">
                                        <i class="fas fa-bell"></i>
                                        <span>Playstation 5 , Xbox</span>
                                    </div>
                                </div>
                                <div class="featured-game-content featured-game-overlay-content">
                                    <div class="featured-game-icon"><img src="img/icon/featured_game_icon.png" alt=""></div>
                                    <h4><a href="#">Need FOR <span>Speed</span></a></h4>
                                    <div class="featured-game-meta">
                                        <i class="fas fa-bell"></i>
                                        <span>Playstation 5 , Xbox</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="featured-game-item mb-30">
                                <div class="featured-game-thumb">
                                    <img src="img/images/s_featured_game_thumb03.jpg" alt="">
                                </div>
                                <div class="featured-game-content">
                                    <h4><a href="#">egypt hunting <span>GAMERS</span></a></h4>
                                    <div class="featured-game-meta">
                                        <i class="fas fa-bell"></i>
                                        <span>Playstation 5 , Xbox</span>
                                    </div>
                                </div>
                                <div class="featured-game-content featured-game-overlay-content">
                                    <div class="featured-game-icon"><img src="img/icon/featured_game_icon.png" alt=""></div>
                                    <h4><a href="#">egypt hunting <span>GAMERS</span></a></h4>
                                    <div class="featured-game-meta">
                                        <i class="fas fa-bell"></i>
                                        <span>Playstation 5 , Xbox</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="featured-game-item mb-30">
                                <div class="featured-game-thumb">
                                    <img src="img/images/s_featured_game_thumb04.jpg" alt="">
                                </div>
                                <div class="featured-game-content">
                                    <h4><a href="#">JUST FOR <span>GAMERS</span></a></h4>
                                    <div class="featured-game-meta">
                                        <i class="fas fa-bell"></i>
                                        <span>Playstation 5 , Xbox</span>
                                    </div>
                                </div>
                                <div class="featured-game-content featured-game-overlay-content">
                                    <div class="featured-game-icon"><img src="img/icon/featured_game_icon.png" alt=""></div>
                                    <h4><a href="#">JUST FOR <span>GAMERS</span></a></h4>
                                    <div class="featured-game-meta">
                                        <i class="fas fa-bell"></i>
                                        <span>Playstation 5 , Xbox</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="featured-game-item mb-30">
                                <div class="featured-game-thumb">
                                    <img src="img/images/s_featured_game_thumb02.jpg" alt="">
                                </div>
                                <div class="featured-game-content">
                                    <h4><a href="#">Need FOR <span>Speed</span></a></h4>
                                    <div class="featured-game-meta">
                                        <i class="fas fa-bell"></i>
                                        <span>Playstation 5 , Xbox</span>
                                    </div>
                                </div>
                                <div class="featured-game-content featured-game-overlay-content">
                                    <div class="featured-game-icon"><img src="img/icon/featured_game_icon.png" alt=""></div>
                                    <h4><a href="#">Need FOR <span>Speed</span></a></h4>
                                    <div class="featured-game-meta">
                                        <i class="fas fa-bell"></i>
                                        <span>Playstation 5 , Xbox</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- featured-game-area-end -->

            <!-- shop-area -->
            <section class="shop-area home-four-shop-area pt-115 pb-90">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title home-four-title text-center mb-35">
                                <h2>gaming product <span>corner</span></h2>
                                <p>Compete with 100 players on a remote island for winner takes showdown known issue where certain skin strategic</p>
                            </div>
                        </div>
                    </div>
                    <div class="row product-active">
                        <div class="col-xl-3">
                            <div class="shop-item">
                                <div class="product-thumb">
                                    <a href="#"><img src="img/product/s_product_img01.jpg" alt=""></a>
                                </div>
                                <div class="product-content">
                                    <div class="product-tag"><a href="#">t-shirt</a></div>
                                    <h4><a href="#">Women Black T-shirt</a></h4>
                                    <div class="product-meta">
                                        <div class="product-price">
                                            <h5>$29.00</h5>
                                        </div>
                                        <div class="product-cart-action">
                                            <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="shop-item">
                                <div class="product-thumb">
                                    <a href="#"><img src="img/product/s_product_img02.jpg" alt=""></a>
                                </div>
                                <div class="product-content">
                                    <div class="product-tag"><a href="#">x-box</a></div>
                                    <h4><a href="#">Gears 5 Xbox Controller</a></h4>
                                    <div class="product-meta">
                                        <div class="product-price">
                                            <h5>$29.00</h5>
                                        </div>
                                        <div class="product-cart-action">
                                            <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="shop-item">
                                <div class="product-thumb">
                                    <a href="#"><img src="img/product/s_product_img03.jpg" alt=""></a>
                                </div>
                                <div class="product-content">
                                    <div class="product-tag"><a href="#">graphics</a></div>
                                    <h4><a href="#">GeForce RTX 2070</a></h4>
                                    <div class="product-meta">
                                        <div class="product-price">
                                            <h5>$29.00</h5>
                                        </div>
                                        <div class="product-cart-action">
                                            <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="shop-item">
                                <div class="product-thumb">
                                    <a href="#"><img src="img/product/s_product_img04.jpg" alt=""></a>
                                </div>
                                <div class="product-content">
                                    <div class="product-tag"><a href="#">VR-Box</a></div>
                                    <h4><a href="#">Virtual Reality Smiled</a></h4>
                                    <div class="product-meta">
                                        <div class="product-price">
                                            <h5>$29.00</h5>
                                        </div>
                                        <div class="product-cart-action">
                                            <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="shop-item">
                                <div class="product-thumb">
                                    <a href="#"><img src="img/product/s_product_img04.jpg" alt=""></a>
                                </div>
                                <div class="product-content">
                                    <div class="product-tag"><a href="#">VR-Box</a></div>
                                    <h4><a href="#">Virtual Reality Smiled</a></h4>
                                    <div class="product-meta">
                                        <div class="product-price">
                                            <h5>$29.00</h5>
                                        </div>
                                        <div class="product-cart-action">
                                            <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- shop-area-end -->

            <!-- blog-area -->
            <section class="blog-area pt-115 pb-120">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title home-four-title black-title text-center mb-65">
                                <h2>Latest News & <span>Articles</span></h2>
                                <p>Compete with 100 players on a remote island for winner takes showdown known issue where certain skin strategic</p>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 col-sm-9">
                            <div class="blog-post home-four-blog-post mb-50">
                                <div class="blog-thumb mb-30">
                                    <a href="#"><img src="img/blog/home_four_blog_thumb01.jpg" alt=""></a>
                                </div>
                                <div class="blog-post-content">
                                    <div class="blog-meta">
                                        <ul>
                                            <li><i class="far fa-user"></i><a href="#">Admin</a></li>
                                            <li><i class="far fa-calendar-alt"></i>september 19, 2020</li>
                                        </ul>
                                    </div>
                                    <h4><a href="#">Shooter action video</a></h4>
                                    <p>Compete with 100 players on a remote island thats winner takes showdown known issue.</p>
                                    <a href="blog-details.html" class="read-more">Read More <i class="fas fa-caret-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-9">
                            <div class="blog-post home-four-blog-post mb-50">
                                <div class="blog-thumb mb-30">
                                    <a href="#"><img src="img/blog/home_four_blog_thumb02.jpg" alt=""></a>
                                </div>
                                <div class="blog-post-content">
                                    <div class="blog-meta">
                                        <ul>
                                            <li><i class="far fa-user"></i><a href="#">Admin</a></li>
                                            <li><i class="far fa-calendar-alt"></i>september 19, 2020</li>
                                        </ul>
                                    </div>
                                    <h4><a href="#">THE WALKING DEAD</a></h4>
                                    <p>Compete with 100 players on a remote island thats winner takes showdown known issue.</p>
                                    <a href="blog-details.html" class="read-more">Read More <i class="fas fa-caret-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-9">
                            <div class="blog-post home-four-blog-post mb-50">
                                <div class="blog-thumb mb-30">
                                    <a href="#"><img src="img/blog/home_four_blog_thumb03.jpg" alt=""></a>
                                </div>
                                <div class="blog-post-content">
                                    <div class="blog-meta">
                                        <ul>
                                            <li><i class="far fa-user"></i><a href="#">Admin</a></li>
                                            <li><i class="far fa-calendar-alt"></i>september 19, 2020</li>
                                        </ul>
                                    </div>
                                    <h4><a href="#">DEFENSE OF THE ANCIENTS</a></h4>
                                    <p>Compete with 100 players on a remote island thats winner takes showdown known issue.</p>
                                    <a href="blog-details.html" class="read-more">Read More <i class="fas fa-caret-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- blog-area-end -->

        </main>
        <!-- main-area-end -->

        <!-- footer-area -->
        <footer>
            <div class="footer-top footer-bg s-footer-bg">
                <!-- newsletter-area -->
                <div class="newsletter-area s-newsletter-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="newsletter-wrap">
                                    <div class="section-title newsletter-title">
                                        <h2>Nos <span>Actualités</span></h2>
                                    </div>
                                    <div class="newsletter-form">
                                        <form action="#">
                                            <div class="newsletter-form-grp">
                                                <i class="far fa-envelope"></i>
                                                <input type="email" placeholder="Entrer votre email...">
                                            </div>
                                            <button>S'ABONNER <i class="fas fa-paper-plane"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- newsletter-area-end -->
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="footer-widget mb-50">
                                <div class="footer-logo mb-35">
                                    <a href="index.html"><img src="img/logo/logo.png" alt=""></a>
                                </div>
                                <div class="footer-text">
                                    <p>Gemas marketplace the relase etras thats sheets continig passag.</p>
                                    <div class="footer-contact">
                                        <ul>
                                            <li><i class="fas fa-map-marker-alt"></i> <span>Address : </span>PO Box W75 Street
                                                lan West new queens</li>
                                            <li><i class="fas fa-headphones"></i> <span>Phone : </span>+24 1245 654 235</li>
                                            <li><i class="fas fa-envelope-open"></i><span>Email : </span>info@exemple.com</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-sm-6">
                            <div class="footer-widget mb-50">
                                <div class="fw-title mb-35">
                                    <h5>Jeux</h5>
                                </div>
                                <div class="fw-link">
                                    <ul>
                                        <li><a href="#">Jeux1</a></li>
                                        <li><a href="#">Jeux2</a></li>
                                        <li><a href="#">Jeux3</a></li>
                                        <li><a href="#">Jeux4</a></li>
                                        <li><a href="#">Jeux5</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-sm-6">
                            <div class="footer-widget mb-50">
                                <div class="fw-title mb-35">
                                    <h5>Besoin D'aide ?</h5>
                                </div>
                                <div class="fw-link">
                                    <ul>
                                        <li><a href="#">Terms & Conditions</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#">Refund Policy</a></li>
                                        <li><a href="#">Affiliate</a></li>
                                        <li><a href="#">FAQUse Cases</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="footer-widget mb-50">
                                <div class="fw-title mb-35">
                                    <h5>Réseau Social :</h5>
                                </div>
                                <div class="footer-social">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-discord"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="footer-widget mb-50">
                                <div class="fw-title mb-35">
                                    <h5>NOS ACTUALITÉS</h5>
                                </div>
                                <div class="footer-newsletter">
                                    <form action="#">
                                        <input type="text" placeholder="Entrer votre email...">
                                        <button><i class="fas fa-rocket"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-fire"><img src="img/images/footer_fire.png" alt=""></div>
                <div class="footer-fire footer-fire-right"><img src="img/images/footer_fire.png" alt=""></div>
            </div>
            <div class="copyright-wrap s-copyright-wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="copyright-text">
                                <p>Copyright © 2022 <a href="#">ZNow</a> All Rights Reserved.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 d-none d-md-block">
                            <div class="payment-method-img text-right">
                                <img src="img/images/card_img.png" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer-area-end -->





		<!-- JS here -->
        <script src="js/vendor/jquery-3.4.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/jquery.meanmenu.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/aos.js"></script>
        <script src="js/jquery.lettering.js"></script>
        <script src="js/jquery.textillate.js"></script>
        <script src="js/jquery.odometer.min.js"></script>
        <script src="js/jquery.appear.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.countdown.min.js"></script>
        <script src="js/jquery.scrollUp.min.js"></script>
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
