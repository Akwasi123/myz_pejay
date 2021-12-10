<?php
include_once (dirname(__FILE__)) . '/../settings/core.php';
include_once (dirname(__FILE__)) . '/../controllers/product_controller.php';


if (isset($_SESSION['search_result'])) {
    $search_results = $_SESSION['search_result'];

    $search  = $search_results[0]['cat_name'];
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="./assets/logo.png" type="image/x-icon">
    <title>Myz_pejay’s Collections | Quality and Affordable Women's clothing</title>
</head>

<body>
    <div class="hero-container hero-2">
        <?php

        include_once (dirname(__FILE__)) . '/../navInclude.php';
        ?>

        <!-- background image -->
        <div class="bg-img">
            <img src="../assets/backgrounds/tamanna-rumee-eD1RNYzzUxc-unsplash.jpg" alt="">

            <div class="hero-text">
                <h1>Shop <span>Now</span></h1>
            </div>
        </div>
    </div>

    <main>
        <section class="shopDisplay">
            <div class="content">
                <div class="breadCrumb">
                    <div class="menuItem">
                        <a href="../index.php">Home</a>
                    </div>
                    /
                    <div class="menuItem">
                        <a href="">Products</a>
                    </div>
                    /
                    <div class="menuItem">
                        <a href="" class="current"><?php echo $search; ?></a>
                    </div>
                </div>

                <!-- products display -->
                <div class="productDisplay">
                    <div class="left">


                        <!-- categories accordion -->
                        <div class="categories">
                            <p class="light">CATEGORIES</p>

                            <div class="acc">
                                <button class="accordion">Dresses</button>
                                <div class="panel">
                                    <p>Lorem ipsum...</p>
                                </div>

                                <button class="accordion">Shoes</button>
                                <div class="panel">
                                    <p>Lorem ipsum...</p>
                                </div>

                                <button class="accordion">Accessories</button>
                                <div class="panel">
                                    <p>Lorem ipsum...</p>
                                </div>

                                <button class="accordion">Jeans</button>
                                <div class="panel">
                                    <p>Lorem ipsum...</p>
                                </div>

                                <button class="accordion">Shirts</button>
                                <div class="panel">
                                    <p>Lorem ipsum...</p>
                                </div>


                            </div>

                            <!-- price range -->
                            <p class="light">Price range</p>

                            <!-- price entry -->
                            <div class="priceEntry">
                                <div class="field">
                                    <label for="">From:</label>
                                    <input type="text">
                                </div>

                                <div class="field">
                                    <label for="">To:</label>
                                    <input type="text">
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="right">
                        <p class="resCount">Showing results for: <?php echo $search; ?></p>

                        <div class="productGrid">

                            <?php
                            if (!empty($search_results)) {
                                foreach ($search_results as $result) {
                            ?>
                                    <div class="product_card">
                                        <a href="../view/singleproduct.php?PID=<?php echo $result['product_id']; ?>" class="imgSpace">
                                            <div class="img">
                                                <img src="<?php echo $result['product_image']; ?>" alt="">
                                            </div>

                                            <!-- background circle -->
                                            <div class="bg-circle">

                                            </div>
                                        </a>
                                        <div class="p_details">
                                            <div class="dets">
                                                <div class="top">
                                                    <p class="cat"><?php echo $result['cat_name'] ?></p>
                                                    <img src="../assets/icons/ratings.svg" width="100" alt="">
                                                </div>
                                                <h3><?php echo $result['product_title'] ?></h3>
                                                <p class="price">GHS <?php echo $result['product_price'] ?></p>
                                            </div>
                                            <a href="../actions/add_cart.php?p_id=<?php echo $result['product_id'] ?>" class="cartIcon">
                                                <button>
                                                    <img src="../assets/icons/ps_shopping-cart.svg" alt="">
                                                </button>
                                            </a>
                                        </div>

                                    </div>

                            <?php
                                }
                            }
                            ?>


                        </div>

                    </div>

                </div>
            </div>
        </section>
    </main>

    <!-- footer -->
    <!-- footer -->
    <footer>
        <div class="content">
            <div class="compInf">
                <div class="brandLogo">
                    <img src="../assets/logo.png" alt="">
                    <p class="mail">codeXtechnologies@hkUK.co</p>
                    <div class="socials">
                        <a href="" class="sc">
                            <img src="../assets/icons/Instagram.svg" alt="">
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

    <script src="../js/accordion.js"></script>
</body>

</html>