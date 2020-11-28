<?php

/* TODO:    - on home page, add section for filtering beers (no images).
            - link DB info for each beer to individual beer pages.
*/
session_start();

// Send user to login page if they're not logged in
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ".dirname(__FILE__, 2)."index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- StyleSheet -->
    <link rel="stylesheet" href="../resources/css/home.css">

    <title>Beer Co.</title>
</head>

<body>

<!-- Header -->
<header class="header" id="header">
    <nav class="nav">
        <div class="nav__center container">
            <div class="logo">
                <h1><a href="#header" style="color: #4a1667;">Beer Co.</a></h1>
            </div>

            <div class="nav__menu">
                <ul class="nav__list">

                    <li class="nav__item">
                        <a href="#new" class="nav__link scroll-link">New</a>
                    </li>

                    <li class="nav__item">
                        <a href="#find" class="nav__link scroll-link">Find</a>
                    </li>

                    <li class="nav__item">
                        <a href="#featured" class="nav__link scroll-link">Featured</a>
                    </li>

                    <li class="nav__item">
                        <a href="#contact" class="nav__link scroll-link">Contact</a>
                    </li>

                    <li class="nav__close flex__center">
                        <svg>
                            <use xlink:href="sprite.svg#icon-cross"></use>
                        </svg>
                    </li>
                </ul>
                <div class="cart flex__center">
                    <svg>
                        <use xlink:href="sprite.svg#icon-user"></use>
                    </svg>
                </div>

                <div class="hamburger flex__center">
                    <svg>
                        <use xlink:href="sprite.svg#icon-menu"></use>
                    </svg>
                </div>
            </div>
        </div>
    </nav>

    <div class="hero">
        <div class="hero__center container">
            <div class="hero__left">
                <h1>Beer Co.</h1>
                <p>
                    We bring you the best beer brands for you to enjoy. Exclusively available at Beer Co.
                </p>
                <a href="#all" class="button hero__btn">View Products</a>
            </div>

            <div class="hero__right">
               <img src="../resources/images/media/heineken-original-bottle.png" alt="" class="home__image">
            </div>
        </div>

        <a href="#new" class="go-down flex__center">
            <svg>
                <use xlink:href="sprite.svg#icon-angle-down"></use>
            </svg>
        </a>
    </div>
</header>

<<<<<<< Updated upstream
=======
<!-- New Products -->
>>>>>>> Stashed changes
<main>
    <section class="section new" id="new">
        <div class="new__center container">
            <div class="title">
                <h1>New Products</h1>
            </div>

            <div class="product__center">
                <div class="product">
                    <div class="product__header">
                        <img src="../resources/images/media/budlight.png" alt="">
                        <span class="flex__center">
                                <svg>
                                    <use xlink:href="sprite.svg#icon-camera"></use>
                                </svg>
                            </span>
                    </div>
                    <div class="product__footer">
                        <h2>Bud Light Seltzer</h2>
                        <div class="rating">
                                <span>
                                    <svg>
                                        <use xlink:href="sprite.svg#icon-star-full"></use>
                                    </svg>
                                </span>
                            <span>
                                    <svg>
                                        <use xlink:href="sprite.svg#icon-star-full"></use>
                                    </svg>
                                </span>
                            <span>
                                    <svg>
                                        <use xlink:href="sprite.svg#icon-star-full"></use>
                                    </svg>
                                </span>
                            <span>
                                    <svg>
                                        <use xlink:href="sprite.svg#icon-star-full"></use>
                                    </svg>
                                </span>
                            <span>
                                    <svg>
                                        <use xlink:href="sprite.svg#icon-star-empty"></use>
                                    </svg>
                                </span>
                        </div>
                    </div>
                </div>
                <div class="product">
                    <div class="product__header">
                        <img src="../resources/images/media/coorslight.png" alt="">
                        <span>
                                <svg>
                                    <use xlink:href="sprite.svg#icon-camera"></use>
                                </svg>
                            </span>
                    </div>
                    <div class="product__footer">
                        <h2>Coors Light</h2>
                        <div class="rating">
                                <span>
                                    <svg>
                                        <use xlink:href="sprite.svg#icon-star-full"></use>
                                    </svg>
                                </span>
                            <span>
                                    <svg>
                                        <use xlink:href="sprite.svg#icon-star-full"></use>
                                    </svg>
                                </span>
                            <span>
                                    <svg>
                                        <use xlink:href="sprite.svg#icon-star-full"></use>
                                    </svg>
                                </span>
                            <span>
                                    <svg>
                                        <use xlink:href="sprite.svg#icon-star-full"></use>
                                    </svg>
                                </span>
                            <span>
                                    <svg>
                                        <use xlink:href="sprite.svg#icon-star-full"></use>
                                    </svg>
                                </span>
                        </div>
                    </div>
                </div>
                <div class="product">
                    <div class="product__header">
                        <img src="../resources/images/media/discount.png" alt="">
                        <span>
                                <svg>
                                    <use xlink:href="sprite.svg#icon-camera"></use>
                                </svg>
                            </span>
                    </div>
                    <div class="product__footer">
                        <h2>Corona Extra</h2>
                        <div class="rating">
                                <span>
                                    <svg>
                                        <use xlink:href="sprite.svg#icon-star-full"></use>
                                    </svg>
                                </span>
                            <span>
                                    <svg>
                                        <use xlink:href="sprite.svg#icon-star-full"></use>
                                    </svg>
                                </span>
                            <span>
                                    <svg>
                                        <use xlink:href="sprite.svg#icon-star-full"></use>
                                    </svg>
                                </span>
                            <span>
                                    <svg>
                                        <use xlink:href="sprite.svg#icon-star-full"></use>
                                    </svg>
                                </span>
                            <span>
                                    <svg>
                                        <use xlink:href="sprite.svg#icon-star-empty"></use>
                                    </svg>
                                </span>
                        </div>
                    </div>
                </div>
                <div class="product">
                    <div class="product__header">
                        <img src="../resources/images/media/heineken-beer.png" alt="">
                        <span>
                                <svg>
                                    <use xlink:href="sprite.svg#icon-camera"></use>
                                </svg>
                            </span>
                    </div>
                    <div class="product__footer">
                        <h2>Heineken Beer</h2>
                        <div class="rating">
                                <span>
                                    <svg>
                                        <use xlink:href="sprite.svg#icon-star-full"></use>
                                    </svg>
                                </span>
                            <span>
                                    <svg>
                                        <use xlink:href="sprite.svg#icon-star-full"></use>
                                    </svg>
                                </span>
                            <span>
                                    <svg>
                                        <use xlink:href="sprite.svg#icon-star-full"></use>
                                    </svg>
                                </span>
                            <span>
                                    <svg>
                                        <use xlink:href="sprite.svg#icon-star-full"></use>
                                    </svg>
                                </span>
                            <span>
                                    <svg>
                                        <use xlink:href="sprite.svg#icon-star-empty"></use>
                                    </svg>
                                </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<<<<<<< Updated upstream
    <!-- 2 Featured Beers -->
=======
<!-- 2 Featured Beers -->
>>>>>>> Stashed changes
    <section class="section category">
        <div class="category__center container">
            <div class="category__left">
                <div class="content">
                    <h2>Best Beer in Town</h2>
                    <h1>Miller</h1>
                    <a href="#all" class="button category__btn">View Products</a>
                </div>
                <img src="../resources/images/media/miller-genuine-draft.png" alt="">
            </div>

            <div class="category__right">
                <div class="content">
                    <h2>Big Save</h2>
                    <h1>Save 50%</h1>
                    <a href="#all" class="button category__btn">View Products</a>
                </div>
                <img src="../resources/images/media/tecatelight.png" alt="">
            </div>
        </div>
    </section>

<!-- Featured Products -->
    <section class="section all__products" id="all">
        <div class="all__center container">
            <div class="title">
<<<<<<< Updated upstream
                <h1>Featured Products</h1>
=======
                <h1>Featured Products Products</h1>
>>>>>>> Stashed changes
            </div>

            <div class="product__center">
                <div class="product">
                    <div class="product__header">
                        <img src="../resources/images/media/amstel.png" alt="">
                        <span>
                                <svg>
                                    <use xlink:href="sprite.svg#icon-camera"></use>
                                </svg>
                            </span>
                    </div>
                    <div class="product__footer">
                        <h2>Amstel</h2>
                        <div class="rating">
                                <span>
                                    <svg>
                                        <use xlink:href="sprite.svg#icon-star-full"></use>
                                    </svg>
                                </span>
                            <span>
                                    <svg>
                                        <use xlink:href="sprite.svg#icon-star-full"></use>
                                    </svg>
                                </span>
                            <span>
                                    <svg>
                                        <use xlink:href="sprite.svg#icon-star-full"></use>
                                    </svg>
                                </span>
                            <span>
                                    <svg>
                                        <use xlink:href="sprite.svg#icon-star-full"></use>
                                    </svg>
                                </span>
                            <span>
                                    <svg>
                                        <use xlink:href="sprite.svg#icon-star-empty"></use>
                                    </svg>
                                </span>
                        </div>
                    </div>
                </div>
                <div class="product">
                    <div class="product__header">
                        <img src="../resources/images/media/budweiser-beer-bottle.png" alt="">
                        <span>
                                <svg>
                                    <use xlink:href="sprite.svg#icon-camera"></use>
                                </svg>
                            </span>
                    </div>
                    <div class="product__footer">
                        <h2>BudWeiser Beer</h2>
                        <div class="rating">
                                <span>
                                    <svg>
                                        <use xlink:href="sprite.svg#icon-star-full"></use>
                                    </svg>
                                </span>
                            <span>
                                    <svg>
                                        <use xlink:href="sprite.svg#icon-star-full"></use>
                                    </svg>
                                </span>
                            <span>
                                    <svg>
                                        <use xlink:href="sprite.svg#icon-star-full"></use>
                                    </svg>
                                </span>
                            <span>
                                    <svg>
                                        <use xlink:href="sprite.svg#icon-star-full"></use>
                                    </svg>
                                </span>
                            <span>
                                    <svg>
                                        <use xlink:href="sprite.svg#icon-star-empty"></use>
                                    </svg>
                                </span>
                        </div>
                    </div>
                </div>
                <div class="product">
                    <div class="product__header">
                        <img src="../resources/images/media/budlight.png" alt="">
                        <span>
                                <svg>
                                    <use xlink:href="sprite.svg#icon-camera"></use>
                                </svg>
                            </span>
                    </div>
                    <div class="product__footer">
                        <h2>BudLight</h2>
                        <div class="rating">
                                <span>
                                    <svg>
                                        <use xlink:href="sprite.svg#icon-star-full"></use>
                                    </svg>
                                </span>
                            <span>
                                    <svg>
                                        <use xlink:href="sprite.svg#icon-star-full"></use>
                                    </svg>
                                </span>
                            <span>
                                    <svg>
                                        <use xlink:href="sprite.svg#icon-star-full"></use>
                                    </svg>
                                </span>
                            <span>
                                    <svg>
                                        <use xlink:href="sprite.svg#icon-star-full"></use>
                                    </svg>
                                </span>
                            <span>
                                    <svg>
                                        <use xlink:href="sprite.svg#icon-star-empty"></use>
                                    </svg>
                                </span>
                        </div>
                    </div>
                </div>
                <div class="product">
                    <div class="product__header">
                        <img src="../resources/images/media/heineken-beer.png" alt="">
                        <span>
                                <svg>
                                    <use xlink:href="sprite.svg#icon-camera"></use>
                                </svg>
                            </span>
                    </div>
                    <div class="product__footer">
                        <h2>Heineken</h2>
                        <div class="rating">
                                <span>
                                    <svg>
                                        <use xlink:href="sprite.svg#icon-star-full"></use>
                                    </svg>
                                </span>
                            <span>
                                    <svg>
                                        <use xlink:href="sprite.svg#icon-star-full"></use>
                                    </svg>
                                </span>
                            <span>
                                    <svg>
                                        <use xlink:href="sprite.svg#icon-star-full"></use>
                                    </svg>
                                </span>
                            <span>
                                    <svg>
                                        <use xlink:href="sprite.svg#icon-star-full"></use>
                                    </svg>
                                </span>
                            <span>
                                    <svg>
                                        <use xlink:href="sprite.svg#icon-star-empty"></use>
                                    </svg>
                                </span>
                        </div>
                    </div>
                </div>
                <div class="product">
                    <div class="product__header">
                        <img src="../resources/images/media/coorslight.png" alt="">
                        <span>
                                <svg>
                                    <use xlink:href="sprite.svg#icon-camera"></use>
                                </svg>
                            </span>
                    </div>
                    <div class="product__footer">
                        <h2>Coors Light</h2>
                        <div class="rating">
                                <span>
                                    <svg>
                                        <use xlink:href="sprite.svg#icon-star-full"></use>
                                    </svg>
                                </span>
                            <span>
                                    <svg>
                                        <use xlink:href="sprite.svg#icon-star-full"></use>
                                    </svg>
                                </span>
                            <span>
                                    <svg>
                                        <use xlink:href="sprite.svg#icon-star-full"></use>
                                    </svg>
                                </span>
                            <span>
                                    <svg>
                                        <use xlink:href="sprite.svg#icon-star-full"></use>
                                    </svg>
                                </span>
                            <span>
                                    <svg>
                                        <use xlink:href="sprite.svg#icon-star-full"></use>
                                    </svg>
                                </span>
                        </div>
                    </div>
                </div>
                <div class="product">
                    <div class="product__header">
                        <img src="../resources/images/media/amstel-torp.png" alt="">
                        <span>
                                <svg>
                                    <use xlink:href="sprite.svg#icon-camera"></use>
                                </svg>
                            </span>
                    </div>
                    <div class="product__footer">
                        <h2>Amstel Premium Beer</h2>
                        <div class="rating">
                                <span>
                                    <svg>
                                        <use xlink:href="sprite.svg#icon-star-full"></use>
                                    </svg>
                                </span>
                            <span>
                                    <svg>
                                        <use xlink:href="sprite.svg#icon-star-full"></use>
                                    </svg>
                                </span>
                            <span>
                                    <svg>
                                        <use xlink:href="sprite.svg#icon-star-full"></use>
                                    </svg>
                                </span>
                            <span>
                                    <svg>
                                        <use xlink:href="sprite.svg#icon-star-full"></use>
                                    </svg>
                                </span>
                            <span>
                                    <svg>
                                        <use xlink:href="sprite.svg#icon-star-full"></use>
                                    </svg>
                                </span>
                        </div>
                    </div>
                </div>
                <div class="product">
                    <div class="product__header">
                        <img src="../resources/images/media/discount.png" alt="">
                        <span>
                                <svg>
                                    <use xlink:href="sprite.svg#icon-camera"></use>
                                </svg>
                            </span>
                    </div>
                    <div class="product__footer">
                        <h2>Corona Extra</h2>
                        <div class="rating">
                                <span>
                                    <svg>
                                        <use xlink:href="sprite.svg#icon-star-full"></use>
                                    </svg>
                                </span>
                            <span>
                                    <svg>
                                        <use xlink:href="sprite.svg#icon-star-full"></use>
                                    </svg>
                                </span>
                            <span>
                                    <svg>
                                        <use xlink:href="sprite.svg#icon-star-full"></use>
                                    </svg>
                                </span>
                            <span>
                                    <svg>
                                        <use xlink:href="sprite.svg#icon-star-full"></use>
                                    </svg>
                                </span>
                            <span>
                                    <svg>
                                        <use xlink:href="sprite.svg#icon-star-empty"></use>
                                    </svg>
                                </span>
                        </div>
                    </div>
                </div>
                <div class="product">
                    <div class="product__header">
                        <img src="../resources/images/media/busch%20beer.png" alt="">
                        <span>
                                <svg>
                                    <use xlink:href="sprite.svg#icon-camera"></use>
                                </svg>
                            </span>
                    </div>
                    <div class="product__footer">
                        <h2>Busch Beer</h2>
                        <div class="rating">
                                <span>
                                    <svg>
                                        <use xlink:href="sprite.svg#icon-star-full"></use>
                                    </svg>
                                </span>
                            <span>
                                    <svg>
                                        <use xlink:href="sprite.svg#icon-star-full"></use>
                                    </svg>
                                </span>
                            <span>
                                    <svg>
                                        <use xlink:href="sprite.svg#icon-star-full"></use>
                                    </svg>
                                </span>
                            <span>
                                    <svg>
                                        <use xlink:href="sprite.svg#icon-star-empty"></use>
                                    </svg>
                                </span>
                            <span>
                                    <svg>
                                        <use xlink:href="sprite.svg#icon-star-empty"></use>
                                    </svg>
                                </span>
                        </div>
                    </div>
                </div>
<<<<<<< Updated upstream
            </div>
            <div class="product__center">
=======
>>>>>>> Stashed changes
                <div class="product">
                    <div class="product__header">
                        <img src="../resources/images/media/WildLittleThing-can-240x860.png" alt="">
                        <span>
                                <svg>
                                    <use xlink:href="sprite.svg#icon-camera"></use>
                                </svg>
                            </span>
                    </div>
                    <div class="product__footer">
                        <h2>Sierra Nevada</h2>
                        <div class="rating">
                                <span>
                                    <svg>
                                        <use xlink:href="sprite.svg#icon-star-full"></use>
                                    </svg>
                                </span>
                            <span>
                                    <svg>
                                        <use xlink:href="sprite.svg#icon-star-full"></use>
                                    </svg>
                                </span>
                            <span>
                                    <svg>
                                        <use xlink:href="sprite.svg#icon-star-full"></use>
                                    </svg>
                                </span>
                            <span>
                                    <svg>
                                        <use xlink:href="sprite.svg#icon-star-full"></use>
                                    </svg>
                                </span>
                            <span>
                                    <svg>
                                        <use xlink:href="sprite.svg#icon-star-empty"></use>
                                    </svg>
                                </span>
                        </div>
                    </div>
                </div>
                <div class="product">
                    <div class="product__header">
                        <img src="../resources/images/media/white-claw.png" alt="">
                        <span>
                                <svg>
                                    <use xlink:href="sprite.svg#icon-camera"></use>
                                </svg>
                            </span>
                    </div>
                    <div class="product__footer">
                        <h2>3-Pack - White Claw</h2>
                        <div class="rating">
                                <span>
                                    <svg>
                                        <use xlink:href="sprite.svg#icon-star-full"></use>
                                    </svg>
                                </span>
                            <span>
                                    <svg>
                                        <use xlink:href="sprite.svg#icon-star-full"></use>
                                    </svg>
                                </span>
                            <span>
                                    <svg>
                                        <use xlink:href="sprite.svg#icon-star-full"></use>
                                    </svg>
                                </span>
                            <span>
                                    <svg>
                                        <use xlink:href="sprite.svg#icon-star-full"></use>
                                    </svg>
                                </span>
                            <span>
                                    <svg>
                                        <use xlink:href="sprite.svg#icon-star-ful"></use>
                                    </svg>
                                </span>
                        </div>
                    </div>
                </div>
                <div class="product">
                    <div class="product__header">
                        <img src="../resources/images/media/12th-of-Never-Can.png" alt="">
                        <span>
                                <svg>
                                    <use xlink:href="sprite.svg#icon-camera"></use>
                                </svg>
                            </span>
                    </div>
                    <div class="product__footer">
                        <h2>Lagunitas 12th Of Never</h2>
                        <div class="rating">
                                <span>
                                    <svg>
                                        <use xlink:href="sprite.svg#icon-star-full"></use>
                                    </svg>
                                </span>
                            <span>
                                    <svg>
                                        <use xlink:href="sprite.svg#icon-star-full"></use>
                                    </svg>
                                </span>
                            <span>
                                    <svg>
                                        <use xlink:href="sprite.svg#icon-star-full"></use>
                                    </svg>
                                </span>
                            <span>
                                    <svg>
                                        <use xlink:href="sprite.svg#icon-star-full"></use>
                                    </svg>
                                </span>
                            <span>
                                    <svg>
                                        <use xlink:href="sprite.svg#icon-star-empty"></use>
                                    </svg>
                                </span>
                        </div>
                    </div>
                </div>
                <div class="product">
                    <div class="product__header">
                        <img src="../resources/images/media/lagunitas.png" alt="">
                        <span>
                                <svg>
                                    <use xlink:href="sprite.svg#icon-camera"></use>
                                </svg>
                            </span>
                    </div>
                    <div class="product__footer">
                        <h2>Lagunitas Super Ale</h2>
                        <div class="rating">
                                <span>
                                    <svg>
                                        <use xlink:href="sprite.svg#icon-star-full"></use>
                                    </svg>
                                </span>
                            <span>
                                    <svg>
                                        <use xlink:href="sprite.svg#icon-star-full"></use>
                                    </svg>
                                </span>
                            <span>
                                    <svg>
                                        <use xlink:href="sprite.svg#icon-star-full"></use>
                                    </svg>
                                </span>
                            <span>
                                    <svg>
                                        <use xlink:href="sprite.svg#icon-star-full"></use>
                                    </svg>
                                </span>
                            <span>
                                    <svg>
                                        <use xlink:href="sprite.svg#icon-star-empty"></use>
                                    </svg>
                                </span>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>

<!-- Find Beers -->
<<<<<<< Updated upstream
    <section id="find">
        <div>
            <div class="title">
                <h1>Find Beers</h1>
            </div>
        </div>
    </section>
=======
    <div class="all__center container">
                <div class="title">
                    <h1>Find Beers</h1>
                </div>
    </div>

>>>>>>> Stashed changes
    <section class="contact container" id="contact">
        <div class="contact__left">
            <h1>Join Our Mailing List</h1>
            <p>If you like our products, and want to stay tuned to all the new arrivals. Please Subscribe to get the latest offers.</p>
        </div>
        <div class="contact__right">
            <form action="<?php /* $subject='Welcome to BeerCo!';
                                $body='Thank you for subscribing to receive updates from BeerCo.';
                                mail($email, $subject, $body) */ ?>">
                <input type="email" placeholder="Enter email address"
                value="<?php /* echo $username;*/ ?>">
                <a class="button">Subscribe</a>
            </form>
        </div>
    </section>
</main>

<!-- Footer -->
<footer id="footer" class="section footer">
    <div class="container">
        <div class="footer__top">
            <div class="footer-top__box">
                <h3>Explore</h3>
                <a href="#header">Home</a>
                <a href="#new">New</a>
                <a href="#all">Shop</a>
                <a href="#featured">Featured</a>
                <a href="#contact">Contact Us</a>
            </div>
            <div class="footer-top__box">
                <h3>INFORMATION</h3>
                <a href="#">About Us</a>
                <a href="#">Privacy Policy</a>
                <a href="#">Terms & Conditions</a>
                <a href="#">Shipping</a>
                <a href="#">Site Map</a>
            </div>
            <div class="footer-top__box">
                <h3></h3>
                <a href="#"></a>
                <a href="#"></a>
                <a href="#"></a>
                <a href="#"></a>
                <a href="#"></a>
            </div>
            <div class="footer-top__box">
                <h3>CONTACT US</h3>
                <div>
                        <span>
                            <svg>
                                <use xlink:href="sprite.svg#icon-location"></use>
                            </svg>
                        </span>
                    100 Beer street, 12345 NJ, USA
                </div>
                <div>
                        <span>
                            <svg>
                                <use xlink:href="sprite.svg#icon-envelop"></use>
                            </svg>
                        </span>
                    beerco@email.com
                </div>
                <div>
                        <span>
                            <svg>
                                <use xlink:href="sprite.svg#icon-phone"></use>
                            </svg>
                        </span>
                    123-456-7890
                </div>
                <div>
                        <span>
                            <svg>
                                <use xlink:href="sprite.svg#icon-paperplane"></use>
                            </svg>
                        </span>
                    NJ City, USA
                </div>
            </div>
        </div>
    </div>
    </div>
</footer>


<script src="../resources/js/home.js"></script>
</body>

</html>