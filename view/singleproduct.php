<?php
include_once (dirname(__FILE__)) . '/../settings/core.php';
include_once (dirname(__FILE__)) . '/../controllers/product_controller.php';

$selected_product = select_a_product_controller($_GET['PID']);
$Allproducts = select_all_products_controller();
$varied_products = select_varied_products_controller($_GET['PID']);
$select_reviews = select_order_reviews_controller($_GET['PID']);
$count_reviews = count_order_reviews_controller($_GET['PID']);
// print_r($count_reviews);
// print_r($select_reviews);

// print_r($selected_product);
// $showReviews = select_order_reviews_controller($_GET['productID']);

if (isset($_SESSION['user_id']) && isset($_SESSION['user_role'])) {
    if ($_SESSION['user_role'] == '2') {
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
            <?php

            include_once (dirname(__FILE__)) . '/../navIncludeDark.php';
            ?>

            <main>
                <section class="singleP">
                    <div class="content">
                        <div class="prodImages">
                            <div class="content">
                                <!-- product main image -->
                                <div class="mainImg">
                                    <img src="<?php echo $selected_product['product_image']; ?>" alt="">
                                </div>

                                <!-- smaller images -->
                                <div class="sm-img">
                                    <?php
                                    foreach ($varied_products as $v_prod) {
                                    ?>
                                        <div class="sim">
                                            <img src="<?php echo $v_prod['image_val'] ?>" alt="">
                                        </div>
                                    <?php
                                    }
                                    ?>

                                </div>
                            </div>
                        </div>

                        <div class="prodDetails">
                            <div class="content">
                                <div class="breadCrumb">
                                    <div class="menuItem">
                                        <a href="../index.php">Home</a>
                                    </div>
                                    /
                                    <div class="menuItem">
                                        <a href="../view/shop.php">Products</a>
                                    </div>
                                    /
                                    <div class="menuItem current">
                                        <a class=""><?php echo $selected_product['product_title']; ?></a>
                                    </div>
                                </div>

                                <div class="prodName">
                                    <p><?php echo $selected_product['product_title']; ?></p>
                                </div>

                                <!-- reviews and ratings -->
                                <div class="randR">
                                    <img src="../assets/icons/ratings.svg" alt="">
                                    <p>(50 reviews)</p>
                                </div>

                                <!-- price -->
                                <div class="price">
                                    <p>GHS <?php echo $selected_product['product_price']; ?>.00</p>
                                </div>

                                <!-- details and reviews tabs -->
                                <div class="dandR">
                                    <!-- Tab links -->
                                    <div class="tab">
                                        <button class="tablinks" onclick="openCity(event, 'Details')" id="defaultOpen">Details</button>
                                        <button class="tablinks" onclick="openCity(event, 'Reviews')">Reviews</button>
                                    </div>
                                    <hr>

                                    <!-- Tab content -->
                                    <div id="Details" class="tabcontent">
                                        <h4>Product Description</h4>
                                        <p><?php echo $selected_product['product_desc']; ?></p>

                                        <div class="custom">
                                            <!-- size -->
                                            <div class="size">
                                                <p>SIZE</p>
                                                <div class="size_options">
                                                    <div class="size_options">
                                                        <?php
                                                        foreach ($varied_products as $v_prod) {
                                                        ?>
                                                            <div class="op1"><?php echo $v_prod['value']; ?></div>
                                                        <?php
                                                        }
                                                        ?>

                                                    </div>
                                                </div>
                                            </div>

                                            <!-- size -->
                                            <div class="size">
                                                <p>COLORS</p>
                                                <div class="size_options">
                                                    <div class="size_options">
                                                        <?php
                                                        foreach ($varied_products as $v_prod) {
                                                        ?>
                                                            <div class="op1" style="background-color: <?php echo $v_prod['color_val']; ?>;"></div>
                                                        <?php
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- stockmsg -->
                                        <!-- <p class="stock">30 items remaining</p> -->

                                        <div class="cta">
                                            <a href="../actions/add_cart.php?p_id=<?php echo $selected_product['product_id'] ?>" class="btn">
                                                Add to Cart
                                            </a>
                                        </div>

                                    </div>

                                    <div id="Reviews" class="tabcontent">

                                        <?php
                                            if($count_reviews['count'] == 0){
                                                ?>
                                                    <p><em>No reviews</em></p>
                                                <?php
                                            }
                                            else{
                                                foreach($select_reviews as $review){
                                                    // echo $review['review'];
                                                    ?>
                                                        <div>
                                                            <p><?php echo $review['user_fname']." ".$review['user_lname'];?></p>
                                                            <p><?php echo $review['review'];?></p>
                                                        </div>
                                                    <?php
                                                }
                                            }
                                        ?>
                                        
                                    </div>
                                </div>





                            </div>
                        </div>
                    </div>
                </section>

            </main>

            <script src="../js/accordion.js"></script>
            <script src="../js/pagination.js"></script>
        </body>

        </html>
    <?php
    }
} else {

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
        <?php

            include_once (dirname(__FILE__)) . '/../navIncludeDark.php';

        ?>

        <main>
            <section class="singleP">
                <div class="content">
                    <div class="prodImages">
                        <div class="content">
                            <!-- product main image -->
                            <div class="mainImg">
                                <img src="<?php echo $selected_product['product_image']; ?>" alt="">
                            </div>

                            <!-- smaller images -->
                            <div class="sm-img">
                                <?php
                                foreach ($varied_products as $v_prod) {
                                ?>
                                    <div class="sim">
                                        <img src="<?php echo $v_prod['image_val'] ?>" alt="">
                                    </div>
                                <?php
                                }
                                ?>

                            </div>
                        </div>
                    </div>

                    <div class="prodDetails">
                        <div class="content">
                            <div class="breadCrumb">
                                <div class="menuItem">
                                    <a href="../index.php">Home</a>
                                </div>
                                /
                                <div class="menuItem">
                                    <a href="../view/shop.php">Products</a>
                                </div>
                                /
                                <div class="menuItem current">
                                    <a class=""><?php echo $selected_product['product_title']; ?></a>
                                </div>
                            </div>

                            <div class="prodName">
                                <p><?php echo $selected_product['product_title']; ?></p>
                            </div>

                            <!-- reviews and ratings -->
                            <div class="randR">
                                <img src="../assets/icons/ratings.svg" alt="">
                                <p>(50 reviews)</p>
                            </div>

                            <!-- price -->
                            <div class="price">
                                <p>GHS<?php echo $selected_product['product_price']; ?>.00</p>
                            </div>

                            <!-- details and reviews tabs -->
                            <div class="dandR">
                                <!-- Tab links -->
                                <div class="tab">
                                    <button class="tablinks" onclick="openCity(event, 'Details')" id="defaultOpen">Details</button>
                                    <button class="tablinks" onclick="openCity(event, 'Reviews')">Reviews</button>
                                </div>
                                <hr>

                                <!-- Tab content -->
                                <div id="Details" class="tabcontent">
                                    <h4>Product Description</h4>
                                    <p><?php echo $selected_product['product_desc']; ?></p>

                                    <div class="custom">
                                        <!-- size -->
                                        <div class="size">
                                            <p>SIZE</p>
                                            <div class="size_options">
                                                <div class="size_options">
                                                    <?php
                                                    foreach ($varied_products as $v_prod) {
                                                    ?>
                                                        <div class="op1"><?php echo $v_prod['value']; ?></div>
                                                    <?php
                                                    }
                                                    ?>

                                                </div>
                                            </div>
                                        </div>

                                        <!-- size -->
                                        <div class="size">
                                            <p>COLORS</p>
                                            <div class="size_options">
                                                <div class="size_options">
                                                    <?php
                                                    foreach ($varied_products as $v_prod) {
                                                    ?>
                                                        <div class="op1" style="background-color: <?php echo $v_prod['color_val']; ?>;"></div>
                                                    <?php
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- stockmsg -->
                                    <!-- <p class="stock">30 items remaining</p> -->

                                    <div class="cta">
                                        <a href="../actions/add_cart.php?p_id=<?php echo $selected_product['product_id'] ?>" name="addtoCart" class="btn">
                                            Add to Cart
                                        </a>
                                    </div>

                                </div>

                                <div id="Reviews" class="tabcontent">
                                <?php
                                            if($count_reviews['count'] == 0){
                                                ?>
                                                    <p><em>No reviews</em></p>
                                                <?php
                                            }
                                            else{
                                                foreach($select_reviews as $review){
                                                    // echo $review['review'];
                                                    ?>
                                                        <div>
                                                            <p><?php echo $review['user_fname']." ".$review['user_lname'];?></p>
                                                            <p><?php echo $review['review'];?></p>
                                                        </div>
                                                    <?php
                                                }
                                            }
                                        ?>
                                </div>
                            </div>





                        </div>
                    </div>
                </div>
            </section>

        </main>

        <script src="../js/accordion.js"></script>
        <script src="../js/pagination.js"></script>
    </body>

    </html>
<?php
}
