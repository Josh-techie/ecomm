<?php 

    include 'config/config.php';  
    include 'fcart.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecom</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
    />
</head>
<body>
    <div id="page" class="site page-home">

        <aside class="site-off desktop-hide">
            <div class="off-canvas">
                <div class="canvas-head flexitem">
                    <div class="logo"><a href="index.php"><img src="assets/Newlogo.png" alt=""></a></div>
                    <a href="#" class="t-close flexcenter"><i class="ri-close-line"></i></a>
                </div>
                <div class="departments"></div>
                <nav></nav>
                <div class="thetop-nav"></div>
            </div>
        </aside>



        <header>
            <div class="header-top mobile-hide">
                <div class="container">
                    <div class="wrapper flexitem">
                        <div class="left">
                            <ul class="flexitem main-links">
                                    <li><a href="index.php">Wishlist</a></li>
                                    <li><a href="Categorie.php">Featured Products</a></li>
                                    <li></li>
                                    <li></li>

                                    <span> </span>
                                    <span> </span>
                                    <span> </span>
                                    <span></span>
                                    <!-- here include the session for the client -->
                                    <li><b> <?php include 'session.php' ?> </b></li>
                            </ul>
                        </div>
                        <div class="right">
                            <ul class="flexitem main-links">
                                <li class="main-links">
                                    <li><a href="login.php">Login</a></li>
                                    <li><a href="login.php">Mon Compte</a></li>
                                    <li><a href="#">Tracking</a></li>
                                    <li><a href="#">MAD <span class="icon-small"><i class="ri-arrow-down-s-line"></i></span></a>
                                    <ul>
                                        <li class="current"><a href="">MAD</a></li>
                                        <li><a href="#">Euro</a></li>
                                        <li><a href="#">USD</a></li>
                                        <li><a href="#">GPB</a></li>
                                    </ul>

                                    </li>
                                    <li><a href="#">Français <span class="icon-small"><i class="ri-arrow-down-s-line"></i></span></a>
                                        <ul>
                                            <li class="current"><a href="#">Français</a></li>
                                            <li><a href="#">English</a></li>
                                            
                                        </ul>
                                    </li>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--TOP-Header-->
            <div class="header-nav">
                <div class="container">
                    <div class="wrapper flexitem">
                        <a href="#" class="trigger desktop-hide"><span class="i ri-menu-2-line "></span></a>
                        <div class="left flexitem">
                            <div class="logo"><a href="index.php"><img src="assets/Newlogo.png" alt=""></a></div>
                            <nav class="mobile-hide">
                                <ul class="flexitem second-links">
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="Categorie.php">Shop</a></li>
                                    <li class="has-child"><a href="categorie">Women <div class="icon-small"><i class="ri-arrow-down-s-line"></i></div></a>
                                    <div class="mega">
                                        <div class="container">
                                            <div class="wrapper">
                                                <div class="flexcol">
                                                    <div class="row">
                                                        <h4></h4>
                                                        <ul>
                                                            <li><a href=""></a></li>
                                                            <li><a href=""></a></li>
                                                            <li><a href=""></a></li>
                                                            <li><a href=""></a></li>
                                                            <li><a href=""></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="flexcol">
                                                    <div class="row">
                                                        <h4>Women's Clothings</h4>
                                                        <ul>
                                                            <li><a href="">Jackets</a></li>
                                                            <li><a href="">SweetShirts</a></li>
                                                            <li><a href="">Pajamas</a></li>
                                                            <li><a href="">Shorts</a></li>
                                                            <li><a href="">CHI7AJA</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="flexcol">
                                                    <div class="row">
                                                        <h4>Jewelry</h4>
                                                        <ul>
                                                            <li><a href="">Bags & Purses</a></li>
                                                            <li><a href="">Necklaces</a></li>
                                                            <li><a href="">Rings</a></li>
                                                            <li><a href="">Bracelets</a></li>
                                                            <li><a href="">Earrings</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="flexcol">
                                                    <div class="row">
                                                        <h4>Beauty</h4>
                                                        <ul>
                                                            <li><a href="">Bath accessories</a></li>
                                                            <li><a href="">Makeup & Cosmetics</a></li>
                                                            <li><a href="">Skin Care</a></li>
                                                            <li><a href="">Hair Care</a></li>
                                                            <li><a href="">Face Masks</a></li>
                                                        </ul>
                                                        
                                                    </div>
                                                </div>
                                                    <div class="flexcol">
                                                        <div class="row">
                                                            <h4>Top Brands</h4>
                                                            <ul class="women-brands">
                                                                <li><a href="">Zara</a></li>
                                                                <li><a href="">H&M</a></li>
                                                                <li><a href="">Victoria Secret</a></li>
                                                                <li><a href="">Lacoste</a></li>
                                                                <li><a href="">Adidas</a></li>
                                                            </ul>
                                                            <a href="categorie.php" class="view-all">View All Brands <i class="ri-arrow-right-line"></i></a>
                                                        </div>
                                                </div>
                                                <div class="flexcol products">
                                                    <div class="row">
                                                        <div class="media">
                                                            <div class="thumbnail object-cover">
                                                                <a href="categorie.php">
                                                                <img src="assets/products/apparel4.jpg" alt="">
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="text-content">
                                                            <h4>Most Wanted!</h4>
                                                            <a href="categorie.php" class="primary-button">Order Now</a>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    </li>
                                    <li><a href="categorie.php">Men</a></li>
                                    <li><a href="categorie.php">Sports 
                                        <div class="fly-item"><span>New!</span></div></a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="right">
                            <ul class="flexitem second-links">
                                <li class="mobile-hide"><a href="">
                                    <div class="icon-large"><i class="ri-heart-line"></i></div>
                                    <div class="fly-item"><span class="item-number">0</span></div>
                                </a></li>
                                <li><a href="cart.php" class="iscart">
                                    <div class="icon-large">
                                        <i class="ri-shopping-cart-line"></i>
                                        <div class="fly-item"><span class="item-number" id="item-count"></span></div>
                                    </div>
                                    <div class="icon-text">
                                        <div class="mini-text">Total</div>
                                        <div class="cart-total"><?php echo get_total_cost(); ?> Dhs</div>
                                    </div>
                                </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--HEADER MAIN-->
            <div class="header-main mobile-hide">
                <div class="container">
                    <div class="wrapper flexitem">
                        <div class="left">
                            <div class="dpt-cat">
                                <div class="dpt-head">
                                    <div class="main-text">All Departments</div>
                                    <div class="mini-text mobile-hide">Total 1059 Products</div>
                                    <a href="" class="dpt-trigger mobile-hide">
                                        <i class="ri-menu-3-line ri-xl"></i>
                                        
                                    </a>
                                </div>
                                <div class="dpt-menu">
                                    <ul class="second-links">

                                        <li class="has-child electronic">
                                            <a href="Categorie.php">
                                                <div class="icon-large"><i class="ri-drop-line"></i></div>
                                                ScubaDiving
                                                <div class="icon-small"><i class="ri-arrow-right-s-line"></i></div>
                                            </a>
                                            <ul>
                                                <li><a href="">Masks</a></li>
                                                <li><a href="">Scuba-Regulator's</a></li>
                                                <li><a href="">Tanks</a></li>
                                                <li><a href="">Fins</a></li>
                                                <li><a href="">WetSuit</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-child fashion">
                                            <a href="Categorie.php">
                                                <div class="icon-large"><i class="ri-shape-line"></i></div>
                                                Surf
                                                <div class="icon-small"><i class="ri-arrow-right-s-line"></i></div>
                                            </a>
                                            <ul>
                                                <li><a href="">SurfBoard</a></li>
                                                <li><a href="">Leash</a></li>
                                                <li><a href="">Wax</a></li>
                                                <li><a href="">Fins</a></li>
                                                <li><a href="">WetSuit</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-child fashion">
                                            <a href="Categorie.php">
                                                <div class="icon-large"><i class="ri-shirt-line"></i></div>
                                                Swimming
                                                <div class="icon-small"><i class="ri-arrow-right-s-line"></i></div>
                                            </a>
                                        </li>
                                        <li >
                                            <a href="Categorie.php">
                                                <div class="icon-large"><i class="ri-gift-line"></i></div>
                                                Gift-card
                                                <div class="icon-small"><i class="ri-arrow-right-s-line"></i></div>
                                            </a>
                                        </li>

                                        <li class="has-child Homekit">
                                            <a href="">
                                                <div class="icon-large"><i class="ri-home-8-line"></i></div>
                                                Store & Services
                                                <div class="icon-small"><i class="ri-arrow-right-s-line"></i></div>
                                            </a>
                                            <div class="mega">
                                                <div class="flexcol ">
                                                    <div class="row">
                                                        <h4><a href="">Kitchen & Dining</a></h4>
                                                        <ul>
                                                            <li><a href="">Kitchen</a></li>
                                                            <li><a href="">Dining Room</a></li>
                                                            <li><a href="">Pantry</a></li>
                                                            <li><a href="">Great Room</a></li>
                                                            <li><a href="">Breakfast Nook</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="row">
                                                        <h4><a href="">Living</a></h4>
                                                        <ul>
                                                            <li><a href="">Living-Room</a></li>
                                                            <li><a href="">Family Room</a></li>
                                                            <li><a href="">SunRoom</a></li>
                                                            
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="flexcol ">
                                                    <div class="row">
                                                        <h4><a href="">Bed-Bath</a></h4>
                                                        <ul>
                                                            <li><a href="">Kitchen</a></li>
                                                            <li><a href="">Dining Room</a></li>
                                                            <li><a href="">Pantry</a></li>
                                                            <li><a href="">Great Room</a></li>
                                                            <li><a href="">Breakfast Nook</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="row">
                                                        <h4><a href="">Utility</a></h4>
                                                        <ul>
                                                            <li><a href="">Living-Room</a></li>
                                                            <li><a href="">Family Room</a></li>
                                                            <li><a href="">SunRoom</a></li>
                                                            
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li >
                                            <a href="">
                                                <div class="icon-large"><i class="ri-shirt-line"></i></div>
                                                Best-Seller
                                                <div class="icon-small"><i class="ri-arrow-right-s-line"></i></div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="right">
                            <div class="search-box">
                                <form action="" class="search">
                                    <span class="icon-large"><i class="ri-search-line"></i></span>
                                    <input type="search" placeholder="Search for Products">
                                    <button type="submit">Search</button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--header-->
        <main>
            <div class="slider">
                    <div class="container">
                        <div class="wrapper">
                            <div class="myslider swiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="item">
                                            <div class="image object-cover">
                                                <img src="assets/slider/slider0.jpg" alt="">
                                            </div>
                                            <div class="text-content flexcol">
                                                <h4>New Fashion</h4>
                                                <h2><span>Come and Get It!</span><br><span>Brand New</span></h2>
                                                <a href="Categorie.php" class="primary-button">Shop Now!</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="item">
                                            <div class="image object-cover">
                                                <img src="assets/slider/slider1.jpg" alt="">
                                            </div>
                                            <div class="text-content flexcol">
                                                <h4>New Fashion</h4>
                                                <h2><span>Come and Get It!</span><br><span>Brand New</span></h2>
                                                <a href="Categorie.php" class="primary-button">Shop Now!</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="item">
                                            <div class="image object-cover">
                                                <img src="assets/slider/slider2.jpg" alt="">
                                            </div>
                                            <div class="text-content flexcol">
                                                <h4>New Fashion</h4>
                                                <h2><span>Come and Get It!</span><br><span>Brand New</span></h2>
                                                <a href="Categorie.php" class="primary-button">Shop Now!</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="item">
                                            <div class="image object-cover">
                                                <img src="assets/slider/slider3.jpg" alt="">
                                            </div>
                                            <div class="text-content flexcol">
                                                <h4>New Fashion</h4>
                                                <h2><span>Come and Get It!</span><br><span>Brand New</span></h2>
                                                <a href="Categorie.php" class="primary-button">Shop Now!</a>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
            </div>
             <!--Slider-->

            <div class="brands">
                <div class="container">
                    <div class="wrapper flexitem">
                        <div class="item">
                            <a href="">
                                <img src="assets/brands/zara.png" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="">
                                <img src="assets/brands/asus.png" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="">
                                <img src="assets/brands/dng.png" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="">
                                <img src="assets/brands/hurley.png" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="">
                                <img src="assets/brands/oppo.png" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="">
                                <img src="assets/brands/samsung.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!--BRANDS-->
            

            <div class="trending">
                <div class="container">
                    <div class="wrapper">
                        <div class="sectop flexitem">
                            <h2>Top Des Ventes !</h2>
                        </div>
                        <div class="column">
                            <div class="flexwrap">
                                <div class="row products big">
                                    <div class="item">
                                       <div class="offer">
                                        <p>l'offre se termine dans </p>
                                        <ul class="flexcenter">
                                            <li>1</li>
                                            <li>15</li>
                                            <li>27</li>
                                            <li>60</li>
                                            
                                        </ul>
                                       </div>
                                        <div class="media">
                                            <div class="thumbnail">
                                                <a href="Categorie.php">
                                                    <img src="assets/products/surf1.png" alt="">
                                                </a>
                                            </div>
                                            <div class="hoverable">
                                                <ul>
                                                    <li class="active"><a href=""><i class="ri-heart-line"></i></a></li>
                                                    <li><a href=""><i class="ri-eye-line"></i></a></li>
                                                    <li><a href=""><i class="ri-shuffle-line"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="discount circle flexcenter"><span>20%</span></div>
                                        </div>
                                        <div class="content">
                                            <div class="rating">
                                                <div class="stars"></div>
                                                <span class="mini-text">(69)</span>
                                            </div>
                                            <h3 class="main-links"><a href="category.php"><center> Boards  <center> </a></h3>
                                            <div class="price">
                                                <span class="current">159.99 Dhs</span>
                                                <span class="normal mini-text">199.99 Dhs</span>
                                            </div>
                                            <div class="stock mini-text">
                                                <div class="qty">
                                                    <span>Stock: <strong class="qty-available">107</strong></span>
                                                    <span>Sold: <strong class="qty-sold">3,459</strong></span>
                                                </div>
                                                <div class="bar">
                                                    <div class="available"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row products mini">
                                    <div class="item">
                                       
                                        <div class="media">
                                            <div class="thumbnail object-cover">
                                                <a href="Categorie.php">
                                                    <img src="assets/products/electronic1.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="hoverable">
                                                <ul>
                                                    <li class="active"><a href=""><i class="ri-heart-line"></i></a></li>
                                                    <li><a href=""><i class="ri-eye-line"></i></a></li>
                                                    <li><a href=""><i class="ri-shuffle-line"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="discount circle flexcenter"><span>20%</span></div>
                                        </div>
                                        <div class="content">
                                            
                                            <h3 class="main-links"><a href="Categorie.php">Diving suits</a></h3>
                                            <div class="price">
                                                <span class="current">159.99 Dhs</span>
                                                <span class="normal mini-text">199.99 Dhs</span>
                                            </div>
                                            <div class="mini-text">
                                                <p>69 Vendu</p>
                                                <p>Livraison Gratuite</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!------------------------------------------------------------------->
                                    <div class="item">
                                       
                                        <div class="media">
                                            <div class="thumbnail object-cover">
                                                <a href="Categorie.php">
                                                    <img src="assets/products/apparel3.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="hoverable">
                                                <ul>
                                                    <li class="active"><a href=""><i class="ri-heart-line"></i></a></li>
                                                    <li><a href=""><i class="ri-eye-line"></i></a></li>
                                                    <li><a href=""><i class="ri-shuffle-line"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="discount circle flexcenter"><span>20%</span></div>
                                        </div>
                                        <div class="content">
                                            
                                            <h3 class="main-links"><a href="category.php">Women Gear </a></h3>
                                            <div class="price">
                                                <span class="current">189.99 Dhs</span>
                                                <span class="normal mini-text">219.99 Dhs</span>
                                            </div>
                                            <div class="mini-text">
                                                <p>120 Vendu</p>
                                                <p>Livraison Gratuite</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!------------------------------------------------------------------->
                                    <div class="item">
                                       
                                        <div class="media">
                                            <div class="thumbnail object-cover">
                                                <a href="Categorie.php">
                                                    <img src="assets/products/apparel2.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="hoverable">
                                                <ul>
                                                    <li class="active"><a href=""><i class="ri-heart-line"></i></a></li>
                                                    <li><a href=""><i class="ri-eye-line"></i></a></li>
                                                    <li><a href=""><i class="ri-shuffle-line"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="discount circle flexcenter"><span>20%</span></div>
                                        </div>
                                        <div class="content">
                                            
                                            <h3 class="main-links"><a href="Categorie.php">Men Gear</a></h3>
                                            <div class="price">
                                                <span class="current">256.99 Dhs</span>
                                                <span class="normal mini-text">319.99 Dhs</span>
                                            </div>
                                            <div class="mini-text">
                                                <p>326 Vendu</p>
                                                <p>Livraison Gratuite</p>
                                                <p class="stock-danger">Il ne reste que 3 en stock</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!------------------------------------------------------------------->
                                    <div class="item">
                                       
                                        <div class="media">
                                            <div class="thumbnail object-cover">
                                                <a href="Categorie.php">
                                                    <img src="assets/products/apparel1.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="hoverable">
                                                <ul>
                                                    <li class="active"><a href=""><i class="ri-heart-line"></i></a></li>
                                                    <li><a href=""><i class="ri-eye-line"></i></a></li>
                                                    <li><a href=""><i class="ri-shuffle-line"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="discount circle flexcenter"><span>20%</span></div>
                                        </div>
                                        <div class="content">
                                            
                                            <h3 class="main-links"><a href="category.php"> Summer Suits</a></h3>
                                            <div class="price">
                                                <span class="current">230.99 Dhs</span>
                                                <span class="normal mini-text">320.99 Dhs</span>
                                            </div>
                                            <div class="mini-text">
                                                <p>89 Vendu</p>
                                                <p>Livraison Gratuite</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!------------------------------------------------------------------->
                                <div class="row products mini">
                                    <div class="item">
                                       
                                        <div class="media">
                                            <div class="thumbnail object-cover">
                                                <a href="Categorie.php">
                                                    <img src="assets/products/shoe1.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="hoverable">
                                                <ul>
                                                    <li class="active"><a href=""><i class="ri-heart-line"></i></a></li>
                                                    <li><a href=""><i class="ri-eye-line"></i></a></li>
                                                    <li><a href=""><i class="ri-shuffle-line"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="discount circle flexcenter"><span>20%</span></div>
                                        </div>
                                        <div class="content">
                                            
                                            <h3 class="main-links"><a href="category.php">Palms</a></h3>
                                            <div class="price">
                                                <span class="current">199.99 Dhs</span>
                                                <span class="normal mini-text">259.99 Dhs</span>
                                            </div>
                                            <div class="mini-text">
                                                <p>860 Vendu</p>
                                                <p>Livraison Gratuite</p>
                                            </div>
                                        </div>
                                    </div>
                                        <!------------------------------------------------------------------->
                                    <div class="item">
                                       
                                        <div class="media">
                                            <div class="thumbnail object-cover">
                                                <a href="Categorie.php">
                                                    <img src="assets/products/electronic3.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="hoverable">
                                                <ul>
                                                    <li class="active"><a href=""><i class="ri-heart-line"></i></a></li>
                                                    <li><a href=""><i class="ri-eye-line"></i></a></li>
                                                    <li><a href=""><i class="ri-shuffle-line"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="discount circle flexcenter"><span>20%</span></div>
                                        </div>
                                        <div class="content">
                                            
                                            <h3 class="main-links"><a href="category.php">Respiratory Gear</a></h3>
                                            <div class="price">
                                                <span class="current">369.99 Dhs</span>
                                                <span class="normal mini-text">420.99 Dhs</span>
                                            </div>
                                            <div class="mini-text">
                                                <p>53 Vendu</p>
                                                <p>Livraison Gratuite</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!------------------------------------------------------------------->
                                    <div class="item">
                                       
                                        <div class="media">
                                            <div class="thumbnail object-cover">
                                                <a href="Categorie.php">
                                                    <img src="assets/products/electronic2.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="hoverable">
                                                <ul>
                                                    <li class="active"><a href=""><i class="ri-heart-line"></i></a></li>
                                                    <li><a href=""><i class="ri-eye-line"></i></a></li>
                                                    <li><a href=""><i class="ri-shuffle-line"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="discount circle flexcenter"><span>20%</span></div>
                                        </div>
                                        <div class="content">
                                            
                                            <h3 class="main-links"><a href="category.php">Full Gear</a></h3>
                                            <div class="price">
                                                <span class="current">1120.99 Dhs</span>
                                                <span class="normal mini-text">1999.99 Dhs</span>
                                            </div>
                                            <div class="mini-text">
                                                <p>23 Vendu</p>
                                                <p>Livraison Gratuite</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!------------------------------------------------------------------->
                                    <div class="item">
                                       
                                        <div class="media">
                                            <div class="thumbnail object-cover">
                                                <a href="Categorie.php">
                                                    <img src="assets/products/electronic4.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="hoverable">
                                                <ul>
                                                    <li class="active"><a href=""><i class="ri-heart-line"></i></a></li>
                                                    <li><a href=""><i class="ri-eye-line"></i></a></li>
                                                    <li><a href=""><i class="ri-shuffle-line"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="discount circle flexcenter"><span>20%</span></div>
                                        </div>
                                        <div class="content">
                                            
                                            <h3 class="main-links"><a href="category.php">Snorkeling</a></h3>
                                            <div class="price">
                                                <span class="current">230 Dhs</span>
                                                <span class="normal mini-text">320 Dhs</span>
                                            </div>
                                            <div class="mini-text">
                                                <p>1203 Vendu</p>
                                                <p>Livraison Gratuite</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--TOP VENTE-->
            
                                  
               
            <div class="features">
                <div class="container">
                    <div class="wrapper">
                        <div class="column">
                            <div class="sectop flexitem">
                                <h2>Nos Meilleurs Offres</h2>
                                <div class="second-link">Voir Tout Les Produits<a href="Categorie.php" class="view-all"><i class="ri-arrow-right-line"></i></a></div>
                            </div>
                            
                            <div class="products main flexwrap">

                                    <?php include ('config/get_product.php'); ?> 
                                    <?php  while($row= $featured_products->fetch_assoc()){ ?>
                                <div class="item">
                                    
                                     <div class="media">
                                         <div class="thumbnail object-cover">
                                             <a href="page-produit.php?id_prod=<?php echo $row['id_prod']; ?>">
                                                 <img src="assets/products/<?php echo $row['img1'];?>" alt="">
                                             </a>
                                         </div>
                                         <div class="hoverable">
                                             <ul>
                                                 <li class="active"><a href=""><i class="ri-heart-line"></i></a></li>
                                                 <li><a href=""><i class="ri-eye-line"></i></a></li>
                                                 <li><a href=""><i class="ri-shuffle-line"></i></a></li>
                                             </ul>
                                         </div>
                                         <div class="discount circle flexcenter"><span>60%</span></div>
                                     </div>
                                     <div class="content">
                                        <div class="rating">
                                            <div class="stars"></div>
                                            <span class="mini-text">(69)</span>
                                        </div>
                                        <h3 class="main-links"><a href="page-produit.php?id_prod=<?php echo $row['id_prod']; ?>"><?php echo $row['nom_prod']; ?></a></h3>
                                        <div class="price">
                                            <span class="current"><?php echo $row['p_nprice']; ?> Dhs</span>
                                            <span class="normal mini-text"><?php echo $row['p_oprice']; ?> Dhs</span>
                                        </div>
                                        
                                    </div>
                                    
                                    <!--FOOTER-->
                                    
                                </div>
                                <?php }?>
                                 <!------------------------------------------------------>
                                 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--MEILLEURS OFFRE-->

            <div class="banners">
                <div class="container">
                    <div class="wrapper">
                        <div class="column">
                            <div class="banner flexwrap">
                                <div class="row">
                                    <div class="item">
                                        <div class="image">
                                            <img src="assets/banner/banner1.jpg" alt="">
                                        </div>
                                        
                                    </div>
                                </div>
                                <!--------------------------------------------------------------------------->
                                <div class="row">
                                    <div class="item get-gray">
                                        <div class="image">
                                            <img src="assets/banner/banner2.jpg" alt="">
                                        </div>
                                        
                                    </div>
                                </div>
                                <!--------------------------------------------------------------------------->
                                
                            </div>
                            <div class="product-categories flexwrap ">
                                <div class="row">
                                    <div class="item">
                                        <div class="image">
                                            <img src="assets/banner/Planche1.jpg" alt="">
                                        </div>
                                        <div class="content mini-links">
                                            <h4>Surfboard</h4>
                                            <ul class="flexcol">
                                                <li><a href="Categorie.php">shortboard</a></li>
                                                <li><a href="Categorie.php">Fish</a></li>
                                                <li><a href="Categorie.php">hybride</a></li>
                                                <li><a href="Categorie.php">longboard</a></li>
                                                <li><a href="Categorie.php">Funboard</a></li>
                                            </ul>
                                            <div class="second-links">
                                            <a href="Categorie.php" class="view-all">Voir Tout<i class="ri-arrow-right-line"></i></a>
                                        </div>
                                        </div>
                                        
                                    </div>
                                </div> 
                                <!--------------------------------------------------------------------------->
                                <div class="row">
                                    <div class="item">
                                        <div class="image">
                                            <img height="82%" src="assets/products/dive.jpg" alt="">
                                        </div>
                                        <div class="content mini-links">
                                            <h4>Gear</h4>
                                            <ul class="flexcol">
                                                <li><a href="Categorie.php">Watches</a></li>
                                                <li><a href="Categorie.php">Regulators</a></li>
                                                <li><a href="Categorie.php">Fins</a></li>
                                                <li><a href="Categorie.php">Scuba Masks</a></li>
                                                <li><a href="Categorie.php">Scuba Tech Gear</a></li>
                                            </ul>
                                            <div class="second-links">
                                                <a href="Categorie.php" class="view-all">Voir Tout<i class="ri-arrow-right-line"></i></a>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>   
                                <!--------------------------------------------------------------------------->
                                <div class="row">
                                    <div class="item">
                                        <div class="image">
                                            <img style="padding-right:40px;"  width="80%" height="80%" src="assets/products/tech2.jpg" alt="">
                                        </div>
                                        <div class="content mini-links">
                                            <h4>Respiratory Gear </h4>
                                            <ul class="flexcol">
                                                <li><a href="Categorie.php">shortboard</a></li>
                                                <li><a href="Categorie.php">Fish</a></li>
                                                <li><a href="Categorie.php">hybride</a></li>
                                                <li><a href="Categorie.php">longboard</a></li>
                                                <li><a href="Categorie.php">Funboard</a></li>
                                            </ul>
                                            <div class="second-links">
                                                <a href="Categorie.php" class="view-all">Voir Tout<i class="ri-arrow-right-line"></i></a>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>  
                                <!--------------------------------------------------------------------------->              
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!----------Banners--------------->

            
        </main>

       
       

        <!--main-->
        <footer>
                <div class="newsletter">
                    <div class="container">
                        <div class="wrapper">
                            <div class="box">
                                <div class="content">
                                    <h3>Rejoignez notre NewsLetter</h3>
                                    <p>Recevez Des Informations Sur <strong>Nos Prochain Produits</strong> </p>
                                </div>
                                <form class="search" action="">
                                    <span class="icon-large"><i class="ri-mail-line"></i></span>
                                    <input type="mail" placeholder="Votre Adresse Mail" required>
                                    <button type="submit">Envoyer</button>
                                </form>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <!--FOOTER NEWSLETTER-->
                <div class="widgets">
                    <div class="container">
                        <div class="wrapper">
                            <div class="flexwrap">
                                <div class="row">
                                    <div class="item mini-links">
                                        <h4>Nous Contacter</h4>
                                        <ul class="flexcol">
                                            <li><a href="">Mon Compte</a></li>
                                            <li><a href="">Mes Commandes</a></li>
                                            <li><a href="">Retour et Remboursement</a></li>
                                            <li><a href="">Aide</a></li>
                                            <li><a href="">Nous Contacter</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="item mini-links">
                                        <h4>Catégorie de Produits</h4>
                                        <ul class="flexcol">
                                            <li><a href="">Surf</a></li>
                                            <li><a href="">Plongée Sous-Marine</a></li>
                                            <li><a href="">Materiel de Nage</a></li>
                                            <li><a href="">Carte-Cadeau</a></li>
                                            
                                        </ul>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="item mini-links">
                                        <h4>Type de Paiement</h4>
                                        <ul class="flexcol">
                                            <li><a href="">Paiement à la livraison</a></li>
                                            <li><a href="">CMI</a></li>
                                            <li><a href="">Visa</a></li>
                                            <li><a href="">MasterCard</a></li>
                                            <li><a href="">Paypal</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="item mini-links">
                                        <h4>Information Complémentaire</h4>
                                        <ul class="flexcol">
                                            <li><a href="">A propos de nous</a></li>
                                            <li><a href="">Terme d'utilisation</a></li>
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--FOOTER Widgets-->
                
                <div class="footer-info">
                    <div class="container">
                        <div class="wrapper">
                            <div class="flexcol">
                                <div class="logo">
                                    <a href=""><img src="assets/Newlogo.png" alt=""></a>
                                </div>
                                <div class="socials">
                                    <ul class="flexitem">
                                        <li><a href=""><i class="ri-twitter-line"></i></a></li>
                                        <li><a href=""><i class="ri-facebook-line"></i></a></li>
                                        <li><a href=""><i class="ri-instagram-line"></i></a></li>
                                        <li><a href=""><i class="ri-youtube-line"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <p class="mini-text">Copyright 2022 &#169. All right reserverd </p>
                        </div>
                    </div>
                </div>
        </footer>
        <!--footer-->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    <script src="Script.js"></script>

    <script>
        function updateItemCount() {
        var count = <?php echo get_item_count(); ?>;
        document.getElementById("item-count").innerHTML = count;}
         updateItemCount();

    </script>
    
</body>
</html>