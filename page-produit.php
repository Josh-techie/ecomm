<?php
session_start();


include ('config/get_product.php');

    if(isset($_GET['id_prod'])){

        $product_id= $_GET['id_prod'];
        $stmt=$conn->prepare("SELECT * FROM produit WHERE id_prod= ? ");
        $stmt->bind_param("i",$product_id);

        $stmt->execute();

        $product =$stmt->get_result();

        //if no product id is given
    }else{
        header('location: index.php');
    }

    include 'fcart.php';

    


    if(isset($_POST["add_product"])){
        $id_prod = $_POST['id'];
        $name_prod = $_POST['name'];
        $image = $_POST['image'];
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];
        $size = $_POST['size'];
    
        add_to_cart($id_prod, $name_prod, $image, $price, $quantity, $size);
    }

    
        

 


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
    href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    
    

</head>
<body>
    
    <div id="page" class="site page-single ">

        <aside class="site-off desktop-hide">
            <div class="off-canvas">
                <div class="canvas-head flexitem">
                    <div class="logo"><a href=""><img src="assets/Newlogo.png" alt=""></a></div>
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
                                    <li><a href="">Wishlist</a></li>
                                    <li><a href="">Featured Products</a></li>
                            </ul>
                        </div>
                        <div class="right">
                            <ul class="flexitem main-links">
                                <li class="main-links">
                                    <li><a href="login.php">Login</a></li>
                                    <li><a href="">Mon Compte</a></li>
                                    <li><a href="">Tracking</a></li>
                                    <li><a href="">MAD <span class="icon-small"><i class="ri-arrow-down-s-line"></i></span></a>
                                    <ul>
                                        <li class="current"><a href="">MAD</a></li>
                                        <li><a href="">Euro</a></li>
                                        <li><a href="">USD</a></li>
                                        <li><a href="">GPB</a></li>
                                    </ul>

                                    </li>
                                    <li><a href="">Français <span class="icon-small"><i class="ri-arrow-down-s-line"></i></span></a>
                                        <ul>
                                            <li class="current"><a href="">Français</a></li>
                                            <li><a href="">English</a></li>
                                            
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
                                    <li><a href="">Shop</a></li>
                                    <li class="has-child"><a href="">Women <div class="icon-small"><i class="ri-arrow-down-s-line"></i></div></a>
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
                                                            <a href="" class="view-all">View All Brands <i class="ri-arrow-right-line"></i></a>
                                                        </div>
                                                </div>
                                                <div class="flexcol products">
                                                    <div class="row">
                                                        <div class="media">
                                                            <div class="thumbnail object-cover">
                                                                <a href="">
                                                                <img src="assets/products/apparel4.jpg" alt="">
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="text-content">
                                                            <h4>Most Wanted!</h4>
                                                            <a href="" class="primary-button">Order Now</a>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    </li>
                                    <li><a href="">Men</a></li>
                                    <li><a href="">Sports 
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
                                    <a href="#" class="dpt-trigger mobile-hide">
                                        <i class="ri-menu-3-line ri-xl"></i>
                                        <i class="ri-close-line ri xl"></i>
                                    </a>
                                </div>
                                <div class="dpt-menu">
                                    <ul class="second-links">
                                        <li class="has-child beauty">
                                            <a href="">
                                                <div class="icon-large"><i class="ri-bear-smile-line"></i></div>
                                                Beauty
                                                <div class="icon-small"><i class="ri-arrow-right-s-line"></i></div>
                                            </a>
                                            <ul>
                                                <li><a href="">Makeup</a></li>
                                                <li><a href="">Skin Care</a></li>
                                                <li><a href="">Hair Care</a></li>
                                                <li><a href="">Accessories</a></li>
                                                <li><a href="">Personal Care</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-child electronic">
                                            <a href="">
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
                                            <a href="">
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
                                            <a href="">
                                                <div class="icon-large"><i class="ri-shirt-line"></i></div>
                                                Swimming
                                                <div class="icon-small"><i class="ri-arrow-right-s-line"></i></div>
                                            </a>
                                        </li>
                                        <li >
                                            <a href="">
                                                <div class="icon-large"><i class="ri-gift-line"></i></div>
                                                Gift-card
                                                <div class="icon-small"><i class="ri-arrow-right-s-line"></i></div>
                                            </a>
                                        </li>
                                        <li >
                                            <a href="">
                                                <div class="icon-large"><i class="ri-android-line"></i></div>
                                                Pet-supply
                                                <div class="icon-small"><i class="ri-arrow-right-s-line"></i></div>
                                            </a>
                                        </li>
                                        <li class="has-child Homekit">
                                            <a href="">
                                                <div class="icon-large"><i class="ri-home-8-line"></i></div>
                                                Home & Kitchen
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
            <div class="single-product">
                <div class="container">
                    <div class="wrapper">
                        <div class="column">
                            <div class="products one">


                                <?php while($row=$product->fetch_assoc()){
                                ?>
                                
                                <div class="flexwrap">
                                    <div class="row">
                                        <div class="item">
                                            <div class="price">
                                                <span class="discount">32% <br>OFF</span>
                                            </div>
                                            <div class="big-image">
                                                <div class="big-image-wrapper swiper-wrapper">
                                                    <div class="image-show swiper-slide">
                                                        <a data-fslightbox href="assets/products/<?php echo $row['img1']; ?>">
                                                            <img src="assets/products/<?php echo $row['img1']; ?>" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="image-show swiper-slide">
                                                        <a data-fslightbox href="assets/products/<?php echo $row['img2']; ?>">
                                                            <img src="assets/products/<?php echo $row['img2']; ?>" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="image-show swiper-slide">
                                                        <a data-fslightbox href="assets/products/<?php echo $row['img3']; ?>">
                                                            <img src="assets/products/<?php echo $row['img3']; ?>" alt="">
                                                        </a>
                                                    </div>
                                                    
                                                    
                                                </div>
                                                <div class="swiper-button-next"></div>
                                                    <div class="swiper-button-prev"></div>
                                            </div>
                                            <div thumbSlider="" class=" small-image">
                                                <ul class="small-image-wrapper flexitem swiper-wrapper">
                                                    <li class="thumbnail-show swiper-slide">
                                                        <img src="assets/products/<?php echo $row['img1']; ?>" alt="">
                                                    </li>
                                                    <li class="thumbnail-show swiper-slide">
                                                        <img src="assets/products/<?php echo $row['img2']; ?>" alt="">
                                                    </li>
                                                    <li class="thumbnail-show swiper-slide">
                                                        <img src="assets/products/<?php echo $row['img3']; ?>" alt="">
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="item">
                                            <h1><?php echo $row['nom_prod']; ?></h1>
                                            <div class="content">
                                                <div class="rating">
                                                    <div class="stars"></div>
                                                    <a href="#" class="mini-text">420 Reviews</a>
                                                    <a href="#" class="add-review mini-text">Ajouter Votre Propre Avis</a>
                                                    
                                                </div>
                                                <div class="stock-sku">
                                                    <span class="available">En Stock</span>
                                                    <span class="sku mini-text">SKU-881</span>
                                                </div>
                                                <div class="price">
                                                    <span class="current"><?php echo $row['p_nprice']; ?> dhs</span>
                                                    <span class="normal"><?php echo $row['p_oprice']; ?> dhs</span>
                                                </div>
                                                <div class="colors">
                                                    <p>Couleurs Disponible</p>
                                                    <div class="variant">
                                                        <!--Form pour le choix facile des couleurs pendant le PHP-->
                                                        <form action="">
                                                            <P><input type="radio" name="color" id="Color1">
                                                                <label for="Color1" class="circle"></label>
                                                            </P>
                                                            <P><input type="radio" name="color" id="Color2">
                                                                <label for="Color2" class="circle"></label>
                                                            </P>
                                                            <P><input type="radio" name="color" id="Color3">
                                                                <label for="Color3" class="circle"></label>
                                                            </P>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="sizes">
                                                    <p>Taille Disponible</p>
                                                    <div class="variant">
                                                        <!--Form pour le choix facile des couleurs pendant le PHP-->
                                                        <form action="" method="post">
                                                            <P><input type="radio" name="size" id="size1" value="XS" checked onchange="updateSelectedSize(this.value)">
                                                                <label for="size1" class="circle"><span>XS</span></label>
                                                            </P>
                                                            <P><input type="radio" name="size" id="size2" value="S" onchange="updateSelectedSize(this.value)">
                                                                <label for="size2" class="circle"><span>S</span></label>
                                                            </P>
                                                            <P><input type="radio" name="size" id="size3" value="M" onchange="updateSelectedSize(this.value)">
                                                                <label for="size3" class="circle"><span>M</span></label>
                                                            </P>
                                                            <P><input type="radio" name="size" id="size4" value="L" onchange="updateSelectedSize(this.value)">
                                                                <label for="size4" class="circle"><span>L</span></label>
                                                            </P>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="actions">
                                                    <form action="" method="post">
                                                        <div class="qty-control flexitem">
                                                            <button class="minus circle">-</button>
                                                            <input type="number" name="quantity" value="1">
                                                            <button class="plus circle">+</button>
                                                        </div>
                                                    
                                                        <div class="button-cart">
                                                            
                                                            <input type='hidden' name='id' value="<?php echo $row['id_prod'] ?>" />
                                                            <input type="hidden" id="selected-size" name="size">
                                                            <input type='hidden' name='image' value="<?php echo $row['img1']; ?>" />
                                                            <input type='hidden' name='name' value="<?php echo $row['nom_prod']; ?>" />
                                                            <input type='hidden' name='price' value="<?php echo $row['p_nprice']; ?>" />
                                                            
                                                            <button type="submit" name="add_product" class="primary-button">Ajouter Au Panier</button>
                                                    </form>
                                                        
                                                    </div>
                                                    <div class="wish-share">
                                                        <ul class="flexitem second-links">
                                                        <li><a href="#">
                                                            <span class="icon-large"><i class="ri-heart-line"></i></span>
                                                            <span>WishList</span>
                                                        </a></li>
                                                        <li><a href="#">
                                                            <span class="icon-large"><i class="ri-share-line"></i></span>
                                                            <span>Partager</span>
                                                        </a></li>
                                                        </ul>
                                                    </div>
                                               </div>
                                                <div class="description collapse">
                                                    <ul>
                                                        <li class="has-child expand">
                                                            <a href="#" class="icon-small">Information sur le produit</a>
                                                            <div class="content">
                                                                <ul>
                                                                <li><span>Marque : </span> <span>Quicksilver</span></li>
                                                                <li><span>Activité : </span><span>Plongée Sous-marine</span></li>
                                                                <li><span>Materieau : </span><span>Latex</span></li>
                                                                <li><span>Sexe : </span><span>Feminin</span></li>
                                                            </ul>
                                                            </div>
                                                            
                                                        </li>
                                                        <li class="has-child">
                                                            <a href="#" class="icon-small">Détail</a>
                                                            <div class="content">
                                                                <p><?php echo $row['p_desc']; ?></p>

                                                            </div>
                                                        </li>
                                                        <li class="has-child">
                                                        <a href="#" class="icon-small">Table des Tailles</a>
                                                        <div class="content">
                                                            <table>
                                                                <thead>
                                                                    <tr>
                                                                        <th>Tailles</th>
                                                                        <th>Hanches<span class="mini-text">(cm)</span></th>
                                                                        <th>Poitrine<span class="mini-text">(cm)</span></th>
                                                                        <th>Ceinture<span class="mini-text">(cm)</span></th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>XS</td>
                                                                        <td>82,5</td>
                                                                        <td>62</td>
                                                                        <td>87,5</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>S</td>
                                                                        <td>85</td>
                                                                        <td>63?5</td>
                                                                        <td>89</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>M</td>
                                                                        <td>87,5</td>
                                                                        <td>67,5</td>
                                                                        <td>93</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>L</td>
                                                                        <td>90</td>
                                                                        <td>72,5</td>
                                                                        <td>98</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>XL</td>
                                                                        <td>93</td>
                                                                        <td>77,5</td>
                                                                        <td>103</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>

                                                    </li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php }?>
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
                                            <h4>surfboard</h4>
                                            <ul class="flexcol">
                                                <li><a href="">shortboard</a></li>
                                                <li><a href="">Fish</a></li>
                                                <li><a href="">hybride</a></li>
                                                <li><a href="">longboard</a></li>
                                                <li><a href="">Funboard</a></li>
                                            </ul>
                                            <div class="second-links">
                                            <a href="" class="view-all">Voir Tout<i class="ri-arrow-right-line"></i></a>
                                        </div>
                                        </div>
                                        
                                    </div>
                                </div> 
                                <!--------------------------------------------------------------------------->
                                <div class="row">
                                    <div class="item">
                                        <div class="image">
                                            <img src="assets/banner/Planche1.jpg" alt="">
                                        </div>
                                        <div class="content mini-links">
                                            <h4>surfboard</h4>
                                            <ul class="flexcol">
                                                <li><a href="">shortboard</a></li>
                                                <li><a href="">Fish</a></li>
                                                <li><a href="">hybride</a></li>
                                                <li><a href="">longboard</a></li>
                                                <li><a href="">Funboard</a></li>
                                            </ul>
                                            <div class="second-links">
                                                <a href="" class="view-all">Voir Tout<i class="ri-arrow-right-line"></i></a>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>   
                                <!--------------------------------------------------------------------------->
                                <div class="row">
                                    <div class="item">
                                        <div class="image">
                                            <img src="assets/banner/Planche1.jpg" alt="">
                                        </div>
                                        <div class="content mini-links">
                                            <h4>surfboard</h4>
                                            <ul class="flexcol">
                                                <li><a href="">shortboard</a></li>
                                                <li><a href="">Fish</a></li>
                                                <li><a href="">hybride</a></li>
                                                <li><a href="">longboard</a></li>
                                                <li><a href="">Funboard</a></li>
                                            </ul>
                                            <div class="second-links">
                                                <a href="" class="view-all">Voir Tout<i class="ri-arrow-right-line"></i></a>
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
                                    <a href="index.php"><img src="assets/Newlogo.png" alt=""></a>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fslightbox/3.3.1/index.js"></script>
    <script src="Script.js"></script>
    <script>
        function updateItemCount() {
        var count = <?php echo get_item_count(); ?>;
        document.getElementById("item-count").innerHTML = count;}
         updateItemCount();

    </script>
</body>
</html>
