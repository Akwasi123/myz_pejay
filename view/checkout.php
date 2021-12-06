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
    <title>Checkout</title>
</head>
<body>
    <main>
        <section class="checkout">
            <div class="content">
                <div class="heading">
                    <h2>Checkout</h2>
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
                    /
                    <div class="menuItem">
                        <a href="" class="current">Checkout</a>
                    </div>
                </div>

                <div class="checkoutInfo">
                    <div class="left">
                        <p class="infoHead">1. Checkout Information</p>
    
                        <form action="">
                            <div class="fields">
                                <div class="form-control">
                                    <label for="">Name</label>
                                    <input type="text" placeholder="Full Name">
                                </div>
                                
                                <div class="form-control">
                                    <label for="">Email Address</label>
                                    <input type="text" placeholder="Email Address">
                                </div>
                            </div>
                            <div class="fields">
                                <div class="form-control">
                                    <label for="">Phone Number</label>
                                    <input type="text" placeholder="Phone Number">
                                </div>
                                
                                <div class="form-control">
                                    <label for="">Address</label>
                                    <input type="text" placeholder="Address">
                                </div>
                            </div>
                        </form>

                        <p class="infoHead">2. Delivery Information</p>

                        <div class="delivery">
                            <div class="delPlq active">
                                <div class="icon">
                                    <img src="../assets/icons/delivery.png" alt="">
                                </div>
                                <p>Pickup</p>
                            </div>
                            <div class="delPlq">
                                <div class="icon">
                                    <img src="../assets/icons/carbon_delivery.svg" alt="">
                                </div>
                                <p>Delivery</p>
                            </div>
                        </div>
                    </div>

                    <div class="right">
                        <div class="content">
                            <div class="heading">
                                <h2>Summary</h2>
                            </div>

                            <div class="orderItems">
                                <div class="orItem">
                                    <div class="image">
                                        <img src="../assets/images/IMG_2866.jpg" alt="">
                                    </div>
                                    <div class="details">
                                        <p>Lorem ipsum dolor sit amet</p>
                                        <p>GHS 59.00</p>
                                    </div>
                                    <p class="quantity">x1</p>
                                </div>
                                <div class="orItem">
                                    <div class="image">
                                        <img src="../assets/images/IMG_2860.jpg" alt="">
                                    </div>
                                    <div class="details">
                                        <p>Lorem ipsum dolor sit amet</p>
                                        <p>GHS 59.00</p>
                                    </div>
                                    <p class="quantity">x1</p>
                                </div>
                                <div class="orItem">
                                    <div class="image">
                                        <img src="../assets/images/IMG_2860.jpg" alt="">
                                    </div>
                                    <div class="details">
                                        <p>Lorem ipsum dolor sit amet</p>
                                        <p>GHS 59.00</p>
                                    </div>
                                    <p class="quantity">x1</p>
                                </div>
                                <div class="orItem">
                                    <div class="image">
                                        <img src="../assets/images/IMG_2860.jpg" alt="">
                                    </div>
                                    <div class="details">
                                        <p>Lorem ipsum dolor sit amet</p>
                                        <p>GHS 59.00</p>
                                    </div>
                                    <p class="quantity">x1</p>
                                </div>
                                <div class="orItem">
                                    <div class="image">
                                        <img src="../assets/images/IMG_2860.jpg" alt="">
                                    </div>
                                    <div class="details">
                                        <p>Lorem ipsum dolor sit amet</p>
                                        <p>GHS 59.00</p>
                                    </div>
                                    <p class="quantity">x1</p>
                                </div>
                            </div>
                            <hr>

                            <div class="saleInfo">
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
                            </div>
                                
                            <button>Pay</button>
                        </div>

                    </div>
                </div>
            </div>

            <!-- absolute image background -->
            
            <img class="chkBG-img" src="../assets/backgrounds/checkbg.svg" alt="">
        </section>

    </main>
</body>
</html>