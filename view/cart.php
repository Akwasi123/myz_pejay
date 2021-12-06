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
                    <div class="menuItem">
                        <a href="cart.php" class="current">Shopping Cart</a>
                    </div>
                    <!-- / -->
                    <div class="menuItem">
                        <!-- <a href="" class="current">All</a> -->
                    </div>
                </div>

                <!-- cart details -->
                <div class="cartDetails">
                    <div class="left">
                        <div class="cartItem">
                            <div class="cI-left">
                                <div class="picture">
                                    <img src="../assets/images/IMG_2865.jpg" alt="">
                                </div>
                                <div class="details">
                                    <h3>Lorem ipsum dolor sit amet</h3>
                                    <p>GHS 59.00</p>
                                    <p>x1</p>
                                </div>
                            </div>
                            <div class="remove">
                                <img src="../assets/icons/fluent_delete-24-filled.svg" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="right">
                        <div class="amount">
                            <div class="amItem">
                                <p>Subtotal</p>
                                <p>GHS 59.00</p>
                            </div>
                            <hr>
                            <div class="amItem">
                                <p>Delivery</p>
                                <p>GHS 0.00</p>
                            </div>
                            <hr>
                            <div class="amItem">
                                <h1>Total</h1>
                                <p class="total">GHS 59.00</p>
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
                                <button>Checkout</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>


    </main>
</body>
</html>