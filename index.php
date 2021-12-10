<?php

include_once (dirname(__FILE__)) . '/./settings/core.php';
include_once (dirname(__FILE__)) . '/./controllers/product_controller.php';
include_once (dirname(__FILE__)) . '/./controllers/cart_controller.php';
include_once (dirname(__FILE__)) . '/./controllers/wishlist_controller.php';

$best_sellers = get_best_controller();
$featured_products = featured_products_controller();
$img = "./assets/images/products/";

if (isset($_SESSION['user_id']) && isset($_SESSION['user_role'])) {

    // page if admin logs in
    if ($_SESSION['user_role'] == '1') {
        header('location: ./admin/admin-main.php');
    }

    // if normal user logs in

    else if ($_SESSION['user_role'] == '2') {

        $cart_items = count_cart_lg_controller($_SESSION['user_id']);
        $saved_items = count_wishlist_lg_controller($_SESSION['user_id']);
?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <link rel="stylesheet" href="./css/style.css" />
            <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">
            <link rel="shortcut icon" href="./assets/logo.png" type="image/x-icon">
            <title>Myz_pejay’s Collections | Quality and Affordable Women's clothing</title>
        </head>

        <body>
            <div class="hero-container">
                <div class="navbar">
                    <!-- navigation bar -->
                    <div class="nav-container">
                        <div class="brand">
                            <div class="logo">
                                <a href="index.php">
                                    <img src="./assets/logo.png" alt="">
                                </a>
                            </div>

                            <nav>
                                <ul class="nav-links">
                                    <li><a href="./view/shop.php" class="link">Shop</a></li>
                                    <li><a href="./actions/searchFunction.php?searchTerm=Dresses" class="link">Dresses</a></li>
                                    <li><a href="./actions/searchFunction.php?searchTerm=Accessories" class="link">Accessories</a></li>
                                    <li><a href="./actions/searchFunction.php?searchTerm=Jeans" class="link">Jeans</a></li>
                                    <li><a href="./actions/searchFunction.php?searchTerm=Shoes" class="link">Shoes</a></li>
                                </ul>
                            </nav>
                        </div>

                        <!-- wishlist, search, account, cart -->
                        <div class="us_actions">
                            <a href="./view/userprofile/user-wishlist.php" class="icon">
                                <img src="./assets/icons/bi_heart.svg" alt="" />
                                <div class="notif"><?php echo $saved_items['total']; ?></div>
                            </a>
                            <div class="searchBar">
                                <form action="./actions/searchFunction.php" method="GET">
                                    <div class="form-control">
                                        <input type="text" name="searchTerm" placeholder="Search for items..." />
                                    </div>
                                </form>
                                <a href="./view/cart.php" class="icon">
                                    <img src="./assets/icons/ic_baseline-shopping-basket.svg" alt="" />
                                    <div class="notif"><?php echo $cart_items['total']; ?></div>
                                </a>
                            </div>
                            <!-- dropdown -->
                            <div class="dropdown">
                                <div class="icon">
                                    <img src="./assets/icons/codicon_account.svg" class="dropbtn" alt="" />
                                </div>
                                <div class="dropdown-content">
                                    <a href="./view/userprofile/user-orders.php">Profile</a>
                                    <a href="./login/logout.php">Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- intro section -->
                <section class="hero">
                    <!-- Slider main container -->
                    <div class="swiper">
                        <!-- Swiper Text -->
                        <div class="intro-text">
                            <p>Myz_pejay’s collections</p>
                            <h1>Top notch women’s <span>clothing</span></h1>
                            <p>My dresses are very reasonably priced, for dresses that are cut on the body. I have an obsession with details and pattern. I have an obsession with details and pattern. Fashion is made to become unfashionable. I love my beauty. It's not my fault.</p>
                            <button onclick="document.location.href='./view/shop.php'">Shop Now</button>
                        </div>
                        <!-- Additional required wrapper -->
                        <!-- hellow -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide">
                                <img src="./assets/backgrounds/seth-doyle-unxNhCRr8iU-unsplash.jpg" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="./assets/backgrounds/alyssa-strohmann-TS--uNw-JqE-unsplash.jpg" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="./assets/backgrounds/s-o-c-i-a-l-c-u-t-aXJdmnxauwY-unsplash.jpg" alt="">

                            </div>
                        </div>
                    </div>

                </section>
            </div>

            <main>
                <!-- value proposition section -->
                <section class="vfb">
                    <div class="content">
                        <div class="WYS">
                            <div class="left">
                                <h1>Why you should shop with us?</h1>
                            </div>
                            <div class="right">
                                <div class="vf_plaq">
                                    <div class="icon">
                                        <img src="./assets/icons/carbon_delivery-parcel.svg" alt="">
                                    </div>
                                    <strong>Free Delivery</strong>
                                    <p>We deliver all products on time and in the best quality with no delivery cost.</p>
                                </div>
                                <div class="vf_plaq">
                                    <div class="icon">
                                        <img src="./assets/icons/bi_cloud-download-fill.svg" alt="">
                                    </div>
                                    <strong>24/7 Hour Support</strong>
                                    <p>In a situation where you have an issue with our service or product, our customer service is active 24/7.</p>
                                </div>
                                <div class="vf_plaq">
                                    <div class="icon">
                                        <img src="./assets/icons/fluent_money-hand-20-filled.svg" alt="">
                                    </div>
                                    <strong>100% Money back</strong>
                                    <p>Should you receive a wrong product or should there be any issue with a product, we issue a 100% money back guarantee.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- best sellers -->
                <section class="bestSellers">
                    <div class="content">
                        <div class="heading">
                            <h1>Best Sellers</h1>
                            <button>
                                <img src="./assets/icons/eva_arrow-down-outline.svg" alt="">
                            </button>
                        </div>

                        <!-- product cards -->
                        <div class="productGrid">
                            <?php

                            foreach ($best_sellers as $product) {
                            ?>
                                <div class="product_card">
                                    <a href="./view/singleproduct.php?PID=<?php echo $product['product_id']; ?>" class="imgSpace">
                                        <div class="img">
                                            <img src="<?php echo $img . basename($product['product_image']); ?>" alt="">
                                        </div>

                                        <!-- background circle -->
                                        <div class="bg-circle">

                                        </div>
                                    </a>
                                    <div class="p_details">
                                        <div class="dets">
                                            <div class="top">
                                                <p class="cat"><?php echo $product['cat_name'] ?></p>
                                                <img src="./assets/icons/ratings.svg" width="100" alt="">
                                            </div>
                                            <h3><?php echo $product['product_title'] ?></h3>
                                            <p class="price">GHS <?php echo $product['product_price'] ?></p>
                                        </div>
                                        <a href="./actions/add_cart.php?p_id=<?php echo $product['product_id'] ?>" class="cartIcon">
                                            <button>
                                                <img src="./assets/icons/ps_shopping-cart.svg" alt="">
                                            </button>
                                        </a>
                                    </div>

                                    <!-- favorites -->
                                    <a href="./actions/add_wishlist.php?p_id=<?php echo $product['product_id'] ?>" class="wish">
                                        <img src="./assets/icons/bi_heart-1.svg" alt="">
                                    </a>

                                </div>
                            <?php
                            }

                            ?>

                        </div>
                    </div>
                </section>


                <!-- featured -->
                <section class="bestSellers featured">
                    <div class="content">
                        <div class="heading">
                            <h1>Featured Products</h1>
                            <button>
                                <img src="./assets/icons/eva_arrow-down-outline.svg" alt="">
                            </button>
                        </div>

                        <!-- product cards -->
                        <div class="productGrid">
                            <?php
                            foreach ($featured_products as $featured) {
                            ?>
                                <div class="product_card">
                                    <a href="./view/singleproduct.php?PID=<?php echo $featured['product_id']; ?>" class="imgSpace">
                                        <div class="img">
                                            <img src="<?php echo $img . basename($featured['product_image']); ?>" alt="">
                                        </div>

                                        <!-- background circle -->
                                        <div class="bg-circle">

                                        </div>
                                    </a>
                                    <div class="p_details">
                                        <div class="dets">
                                            <div class="top">
                                                <p class="cat"><?php echo $featured['cat_name'] ?></p>
                                                <img src="./assets/icons/ratings.svg" width="100" alt="">
                                            </div>
                                            <h3><?php echo $featured['product_title'] ?></h3>
                                            <p class="price">GHS <?php echo $featured['product_price'] ?></p>
                                        </div>
                                        <div class="cartIcon">
                                            <button>
                                                <img src="./assets/icons/ps_shopping-cart.svg" alt="">
                                            </button>
                                        </div>
                                    </div>

                                    <!-- favorites -->
                                    <a href="./actions/add_wishlist.php?p_id=<?php echo $product['product_id'] ?>" class="wish">
                                        <img src="./assets/icons/bi_heart-1.svg" alt="">
                                    </a>


                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </section>


            </main>

            <!-- footer -->
            <footer>
                <div class="content">
                    <div class="compInf">
                        <div class="brandLogo">
                            <img src="./assets/logo.png" alt="">
                            <p class="mail">codeXtechnologies@hkUK.co</p>
                            <div class="socials">
                                <a href="" class="sc">
                                    <img src="./assets/icons/Instagram.svg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="f_links">
                        <div class="link_item">
                            <p class="head">ACCOUNT</p>
                            <div class="links">
                                <a href="http://">Orders & Returns</a>
                                <a href="http://">Feedback</a>
                                <a href="http://"></a>
                                <a href="http://">Account Settings</a>
                            </div>
                        </div>

                        <div class="link_item">
                            <p class="head">HELP</p>
                            <div class="links">
                                <a href="http://">Help Center</a>
                                <a href="http://">Contact Customer Care</a>
                                <a href="http://">Shipping Information</a>
                                <a href="http://">Return Policy</a>
                            </div>
                        </div>

                        <div class="link_item">
                            <p class="head">COMPANY INFORMATION</p>
                            <div class="links">
                                <a href="http://">About CodeX</a>
                                <a href="http://">Affiliate Program</a>
                                <a href="http://">Influencer Program</a>
                                <a href="http://">Advertisement Program</a>
                            </div>
                        </div>
                    </div>
                </div>

            </footer>
            <!-- copyright -->
            <div class="cp_container">
                <hr>
                <div class="cp">
                    &copy;
                    <p>Copyright 2021 CodeX All rights reserved</p>
                </div>
            </div>


            <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
            <script src="./js/heroCarousel.js"></script>
        </body>

        </html>
    <?php
    }

    // if user is not logged in
} else {
    $ip_add = check_ip();
    $cart_items_gst = count_cart_gst_controller($ip_add);

    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="./css/style.css" />
        <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">
        <link rel="shortcut icon" href="./assets/logo.png" type="image/x-icon">
        <title>Myz_pejay’s Collections | Quality and Affordable Women's clothing</title>
    </head>

    <body>
        <div class="hero-container">
            <div class="navbar">
                <!-- navigation bar -->
                <div class="nav-container">
                    <div class="brand">
                        <div class="logo">
                            <a href="index.php">
                                <img src="./assets/logo.png" alt="">
                            </a>
                        </div>

                        <nav>
                            <ul class="nav-links">
                                <li><a href="./view/shop.php" class="link">Shop</a></li>
                                <li><a href="./actions/searchFunction.php?searchTerm=Dresses" class="link">Dresses</a></li>
                                <li><a href="./actions/searchFunction.php?searchTerm=Accessories" class="link">Accessories</a></li>
                                <li><a href="./actions/searchFunction.php?searchTerm=Jeans" class="link">Jeans</a></li>
                                <li><a href="./actions/searchFunction.php?searchTerm=Shoes" class="link">Shoes</a></li>
                            </ul>
                        </nav>
                    </div>

                    <!-- wishlist, search, account, cart -->
                    <div class="us_actions">

                        <div class="searchBar">
                            <form action="./actions/searchFunction.php" method="GET">
                                <div class="form-control">
                                    <input type="text" name="searchTerm" placeholder="Search for items..." />
                                </div>
                            </form>
                            <a href="./view/cart.php" class="icon">
                                <img src="./assets/icons/ic_baseline-shopping-basket.svg" alt="" />
                                <div class="notif"><?php echo $cart_items_gst['total']; ?></div>
                            </a>
                        </div>
                        <!-- dropdown -->
                        <div class="dropdown">
                            <div class="icon">
                                <img src="./assets/icons/codicon_account.svg" class="dropbtn" alt="" />
                            </div>
                            <div class="dropdown-content">
                                <a href="./login/login.php">Login</a>
                                <a href="./login/register.php">Sign Up</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- intro section -->
            <section class="hero">
                <!-- Slider main container -->
                <div class="swiper">
                    <!-- Swiper Text -->
                    <div class="intro-text">
                        <p>Myz_pejay’s collections</p>
                        <h1>Top notch women’s <span>clothing</span></h1>
                        <p>My dresses are very reasonably priced, for dresses that are cut on the body. I have an obsession with details and pattern. I have an obsession with details and pattern. Fashion is made to become unfashionable. I love my beauty. It's not my fault.</p>
                        <button onclick="document.location.href='./view/shop.php'">Shop Now</button>
                    </div>
                    <!-- Additional required wrapper -->
                    <!-- hellow -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <img src="./assets/backgrounds/seth-doyle-unxNhCRr8iU-unsplash.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="./assets/backgrounds/alyssa-strohmann-TS--uNw-JqE-unsplash.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="./assets/backgrounds/s-o-c-i-a-l-c-u-t-aXJdmnxauwY-unsplash.jpg" alt="">

                        </div>
                    </div>
                </div>

            </section>
        </div>

        <main>
            <!-- value proposition section -->
            <!-- value proposition section -->
            <section class="vfb">
                <div class="content">
                    <div class="WYS">
                        <div class="left">
                            <h1>Why you should shop with us?</h1>
                        </div>
                        <div class="right">
                            <div class="vf_plaq">
                                <div class="icon">
                                    <img src="./assets/icons/carbon_delivery-parcel.svg" alt="">
                                </div>
                                <strong>Free Delivery</strong>
                                <p>We deliver all products on time and in the best quality with no delivery cost.</p>
                            </div>
                            <div class="vf_plaq">
                                <div class="icon">
                                    <img src="./assets/icons/bi_cloud-download-fill.svg" alt="">
                                </div>
                                <strong>24/7 Hour Support</strong>
                                <p>In a situation where you have an issue with our service or product, our customer service is active 24/7.</p>
                            </div>
                            <div class="vf_plaq">
                                <div class="icon">
                                    <img src="./assets/icons/fluent_money-hand-20-filled.svg" alt="">
                                </div>
                                <strong>100% Money back</strong>
                                <p>Should you receive a wrong product or should there be any issue with a product, we issue a 100% money back guarantee.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- best sellers -->
            <section class="bestSellers">
                <div class="content">
                    <div class="heading">
                        <h1>Best Sellers</h1>
                        <button>
                            <img src="./assets/icons/eva_arrow-down-outline.svg" alt="">
                        </button>
                    </div>

                    <!-- product cards -->
                    <div class="productGrid">
                        <?php

                        foreach ($best_sellers as $product) {
                        ?>
                            <div class="product_card">
                                <a href="./view/singleproduct.php?PID=<?php echo $product['product_id']; ?>" class="imgSpace">
                                    <div class="img">
                                        <img src="<?php echo $img . basename($product['product_image']); ?>" alt="">
                                    </div>

                                    <!-- background circle -->
                                    <div class="bg-circle">

                                    </div>
                                </a>
                                <div class="p_details">
                                    <div class="dets">
                                        <div class="top">
                                            <p class="cat"><?php echo $product['cat_name'] ?></p>
                                            <img src="./assets/icons/ratings.svg" width="100" alt="">
                                        </div>
                                        <h3><?php echo $product['product_title'] ?></h3>
                                        <p class="price">GHS <?php echo $product['product_price'] ?></p>
                                    </div>
                                    <a href="./actions/add_cart.php?p_id=<?php echo $product['product_id'] ?>" class="cartIcon">
                                        <button>
                                            <img src="./assets/icons/ps_shopping-cart.svg" alt="">
                                        </button>
                                    </a>
                                </div>

                            </div>
                        <?php
                        }

                        ?>

                    </div>
                </div>
            </section>


            <!-- featured -->
            <section class="bestSellers featured">
                <div class="content">
                    <div class="heading">
                        <h1>Featured Products</h1>
                        <button>
                            <img src="./assets/icons/eva_arrow-down-outline.svg" alt="">
                        </button>
                    </div>

                    <!-- product cards -->
                    <div class="productGrid">
                        <?php
                        foreach ($featured_products as $featured) {
                        ?>
                            <div class="product_card">
                                <a href="./view/singleproduct.php?PID=<?php echo $featured['product_id']; ?>" class="imgSpace">
                                    <div class="img">
                                        <img src="<?php echo $img . basename($featured['product_image']); ?>" alt="">
                                    </div>

                                    <!-- background circle -->
                                    <div class="bg-circle">

                                    </div>
                                </a>
                                <div class="p_details">
                                    <div class="dets">
                                        <div class="top">
                                            <p class="cat"><?php echo $featured['cat_name'] ?></p>
                                            <img src="./assets/icons/ratings.svg" width="100" alt="">
                                        </div>
                                        <h3><?php echo $featured['product_title'] ?></h3>
                                        <p class="price">GHS <?php echo $featured['product_price'] ?></p>
                                    </div>
                                    <a href="./actions/add_cart.php?p_id=<?php echo $product['product_id'] ?>" class="cartIcon">
                                        <button>
                                            <img src="./assets/icons/ps_shopping-cart.svg" alt="">
                                        </button>
                                    </a>
                                </div>




                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </section>



        </main>

        <!-- footer -->
        <footer>
            <div class="content">
                <div class="compInf">
                    <div class="brandLogo">
                        <img src="./assets/logo.png" alt="">
                        <p class="mail">codeXtechnologies@hkUK.co</p>
                        <div class="socials">
                            <a href="" class="sc">
                                <img src="./assets/icons/Instagram.svg" alt="">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="f_links">
                    <div class="link_item">
                        <p class="head">ACCOUNT</p>
                        <div class="links">
                            <a href="http://">Orders & Returns</a>
                            <a href="http://">Feedback</a>
                            <a href="http://"></a>
                            <a href="http://">Account Settings</a>
                        </div>
                    </div>

                    <div class="link_item">
                        <p class="head">HELP</p>
                        <div class="links">
                            <a href="http://">Help Center</a>
                            <a href="http://">Contact Customer Care</a>
                            <a href="http://">Shipping Information</a>
                            <a href="http://">Return Policy</a>
                        </div>
                    </div>

                    <div class="link_item">
                        <p class="head">COMPANY INFORMATION</p>
                        <div class="links">
                            <a href="http://">About CodeX</a>
                            <a href="http://">Affiliate Program</a>
                            <a href="http://">Influencer Program</a>
                            <a href="http://">Advertisement Program</a>
                        </div>
                    </div>
                </div>
            </div>

        </footer>
        <!-- copyright -->
        <div class="cp_container">
            <hr>
            <div class="cp">
                &copy;
                <p>Copyright 2021 CodeX All rights reserved</p>
            </div>
        </div>


        <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
        <script src="./js/heroCarousel.js"></script>
    </body>

    </html>
<?php
}
