<?php
include_once (dirname(__FILE__)) . '/../settings/core.php';
include_once (dirname(__FILE__)) . '/../controllers/cart_controller.php';
if (isset($_SESSION['user_id'])) { //gets session of customer(logged in)
    $user_id = $_SESSION['user_id'];  //user_id is now session
    $all_cart_items = select_all_cart_lg_controller($_SESSION['user_id']);
    $cart_amount_lg = sum_cart_lg_controller($user_id);
} else {
    $ipAddress = check_ip();
    $all_cart_items = select_all_cart_lg_controller($_SESSION['user_id']);
    $cart_amount_gst = sum_cart_gst_controller($ipAddress);
}

if (isset($_SESSION['user_id']) && isset($_SESSION['user_role'])) {
    if ($_SESSION['user_role'] == '2') {

?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="../css/style.css">
            <title>Cart</title>
        </head>

        <body>
            <main>
                <section class="cart">
                    <div class="content">
                        <div class="heading">
                            <h2>Shopping Cart</h2>
                        </div>

                        <!-- bread crumb menu -->
                        <div class="breadCrumb">
                            <div class="menuItem">
                                <a href="../index.php">Home</a>
                            </div>
                            /
                            <div class="menuItem current">
                                <a href="cart.php" class="">Shopping Cart</a>
                            </div>
                            <!-- / -->
                            <div class="menuItem">
                                <!-- <a href="" class="current">All</a> -->
                            </div>
                        </div>

                        <!-- cart details -->
                        <div class="cartDetails">
                            <div class="left">
                                <?php
                                foreach ($all_cart_items as $item) {
                                ?>
                                    <div class="cartItem">
                                        <div class="cI-left">
                                            <div class="picture">
                                                <img src="<?php echo $item['product_image'] ?>" alt="">
                                            </div>
                                            <div class="details">
                                                <h3><?php echo $item['product_title'] ?></h3>
                                                <p>GHS <?php echo $item['product_price'] ?>.00</p>
                                            </div>
                                        </div>
                                        <div class="quantity">
                                            <a href="../actions/manage_quantity.php?decID=<?php echo $item['product_id'] ?>"><img src="../assets/icons/akar-icons_minus.svg" alt=""></a>
                                            <p><?php echo $item['quantity'] ?></p>
                                            <a href="../actions/manage_quantity.php?incID=<?php echo $item['product_id'] ?>"><img src="../assets/icons/akar-icons_plus.svg" alt=""></a>
                                        </div>
                                        <div class="remove">
                                            <a href="../actions/manage_quantity.php?deleteID=<?php echo $item['product_id'] ?>"><img src="../assets/icons/fluent_delete-24-filled.svg" alt=""></a>
                                        </div>
                                    </div>
                                <?php
                                }

                                ?>
                            </div>

                            <div class="right">
                                <div class="amount">
                                    <div class="amItem">
                                        <p>Subtotal</p>
                                        <p>GHS <?php echo $cart_amount_lg['result'] ?>.00</p>
                                    </div>
                                    <hr>
                                    <div class="amItem">
                                        <p>Delivery</p>
                                        <p>GHS 0.00</p>
                                    </div>
                                    <hr>
                                    <div class="amItem">
                                        <h1>Total</h1>
                                        <p class="total">GHS <?php echo $cart_amount_lg['result'] ?>.00</p>
                                    </div>
                                </div>
                                <div class="check">
                                    <p>Accepted Payment Methods</p>
                                    <div class="pMeth">
                                        <div class="m1">
                                            <img src="../assets/icons/cib_cc-visa.svg" alt="">
                                        </div>
                                        <div class="m1">
                                            <img src="../assets/icons/cib_cc-mastercard.svg" alt="">
                                        </div>
                                        <div class="m1">
                                            <img src="../assets/icons/mobile-payment.png" alt="">
                                        </div>
                                    </div>
                                    <div class="btn">
                                        <a href="checkout.php?">Checkout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </section>


            </main>
        </body>

        </html>
    <?php
    }
} else {
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../css/style.css">
        <title>Cart</title>
    </head>

    <body>
        <main>
            <section class="cart">
                <div class="content">
                    <div class="heading">
                        <h2>Shopping Cart</h2>
                    </div>

                    <!-- bread crumb menu -->
                    <div class="breadCrumb">
                        <div class="menuItem">
                            <a href="../index.php">Home</a>
                        </div>
                        /
                        <div class="menuItem current">
                            <a href="cart.php" class="">Shopping Cart</a>
                        </div>
                        <!-- / -->
                        <div class="menuItem">
                            <!-- <a href="" class="current">All</a> -->
                        </div>
                    </div>

                    <!-- cart details -->
                    <div class="cartDetails">
                        <div class="left">
                            <?php
                            foreach ($all_cart_items as $item) {
                            ?>
                                <div class="cartItem">
                                    <div class="cI-left">
                                        <div class="picture">
                                            <img src="<?php echo $item['product_image'] ?>" alt="">
                                        </div>
                                        <div class="details">
                                            <h3><?php echo $item['product_title'] ?></h3>
                                            <p>GHS <?php echo $item['product_price'] ?>.00</p>
                                        </div>
                                    </div>
                                    <div class="quantity">
                                        <a href="../actions/manage_quantity.php?decID=<?php echo $item['product_id'] ?>"><img src="../assets/icons/akar-icons_minus.svg" alt=""></a>
                                        <p><?php echo $item['quantity'] ?></p>
                                        <a href="../actions/manage_quantity.php?incID=<?php echo $item['product_id'] ?>"><img src="../assets/icons/akar-icons_plus.svg" alt=""></a>
                                    </div>
                                    <div class="remove">
                                        <a href="../actions/manage_quantity.php?deleteID=<?php echo $item['product_id'] ?>"><img src="../assets/icons/fluent_delete-24-filled.svg" alt=""></a>
                                    </div>
                                </div>
                            <?php
                            }

                            ?>
                        </div>

                        <div class="right">
                            <div class="amount">
                                <div class="amItem">
                                    <p>Subtotal</p>
                                    <p>GHS<?php echo $cart_amount_gst['result'] ?>.00</p>
                                </div>
                                <hr>
                                <div class="amItem">
                                    <p>Delivery</p>
                                    <p>GHS 0.00</p>
                                </div>
                                <hr>
                                <div class="amItem">
                                    <h1>Total</h1>
                                    <p class="total">GHS<?php echo $cart_amount_gst['result'] ?>.00</p>
                                </div>
                            </div>
                            <div class="check">
                                <p>Accepted Payment Methods</p>
                                <div class="pMeth">
                                    <div class="m1">
                                        <img src="../assets/icons/cib_cc-visa.svg" alt="">
                                    </div>
                                    <div class="m1">
                                        <img src="../assets/icons/cib_cc-mastercard.svg" alt="">
                                    </div>
                                    <div class="m1">
                                        <img src="../assets/icons/mobile-payment.png" alt="">
                                    </div>
                                </div>
                                <div class="btn">
                                    <a href="checkout.php">Checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>


        </main>
    </body>

    </html>
<?php

}
