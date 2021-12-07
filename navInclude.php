<?php

include_once (dirname(__FILE__)) . '/./settings/core.php';
include_once (dirname(__FILE__)) . '/./controllers/product_controller.php';
include_once (dirname(__FILE__)) . '/./controllers/cart_controller.php';
include_once (dirname(__FILE__)) . '/./controllers/wishlist_controller.php';

if (isset($_SESSION['user_id'])) {
    $cart_count = count_cart_lg_controller($_SESSION['user_id']);
} else {
    $ip_Address = check_ip();
    $cart_count = count_cart_gst_controller($ip_Address);
}

if (isset($_SESSION['user_id'])) {
    $wishlist_count = count_wishlist_lg_controller($_SESSION['user_id']);
}


if (isset($_SESSION["user_id"]) && ($_SESSION["user_role"])) {
    if ($_SESSION["user_role"] === '2')
?>
    <div class="navbar">
        <!-- navigation bar -->
        <div class="nav-container">
            <div class="brand">
                <div class="logo">
                    <a href="../index.php">
                        <img src="../assets/logo.png" alt="">
                    </a>
                </div>

                <nav>
                    <ul class="nav-links dark">
                        <li><a href="shop.php" class="link">Shop</a></li>
                        <li><a href="" class="link">Dresses</a></li>
                        <li><a href="" class="link">Accessories</a></li>
                        <li><a href="" class="link">Jeans</a></li>
                        <li><a href="" class="link">Shoes</a></li>
                    </ul>
                </nav>
            </div>

            <div class="us_actions">
                <a href="./userprofile/user-wishlist.php" class="icon">
                    <img src="../assets/icons/bi_heart-1.svg" alt="" />
                    <div class="notif"><?php echo $wishlist_count['total']; ?></div>
                </a>
                <div class="searchBar">
                    <form action="">
                        <div class="form-control dark">
                            <input type="text" placeholder="Search for items..." />
                        </div>
                    </form>
                    <a href="./cart.php" class="icon">
                        <img src="../assets/icons/ic_round-shopping-basket.svg" alt="" />
                        <div class="notif"><?php echo $cart_count['total']; ?></div>
                    </a>
                </div>
                <!-- dropdown -->
                <div class="dropdown">
                    <div class="icon">
                        <img src="../assets/icons/codicon_account-1.svg" class="dropbtn" alt="" />
                    </div>
                    <div class="dropdown-content">
                        <a href="./userprofile/user-orders.php">Profile</a>
                        <a href="../login/logout.php">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
} else { //GUEST
?>
    <div class="navbar">
        <!-- navigation bar -->
        <div class="nav-container">
            <div class="brand">
                <div class="logo">
                    <a href="../index.php">
                        <img src="../assets/logo.png" alt="">
                    </a>
                </div>

                <nav>
                    <ul class="nav-links dark">
                        <li><a href="shop.php" class="link">Shop</a></li>
                        <li><a href="" class="link">Dresses</a></li>
                        <li><a href="" class="link">Accessories</a></li>
                        <li><a href="" class="link">Jeans</a></li>
                        <li><a href="" class="link">Shoes</a></li>
                    </ul>
                </nav>
            </div>

            <div class="us_actions">
                <div class="searchBar">
                    <form action="">
                        <div class="form-control dark">
                            <input type="text" placeholder="Search for items..." />
                        </div>
                    </form>
                    <a href="./view/cart.php" class="icon">
                        <img src="../assets/icons/ic_round-shopping-basket.svg" alt="" />
                        <div class="notif"><?php echo $cart_count['total']; ?></div>
                    </a>
                </div>
                <!-- dropdown -->
                <div class="dropdown">
                    <div class="icon">
                        <img src="../assets/icons/codicon_account-1.svg" class="dropbtn" alt="" />
                    </div>
                    <div class="dropdown-content">
                        <a href="../login/login.php">Login</a>
                        <a href="../login/register.php">Sign Up</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
}
