<?php

include_once (dirname(__FILE__)) . '/../../settings/core.php';
include_once (dirname(__FILE__)) . '/../../controllers/product_controller.php';
include_once (dirname(__FILE__)) . '/../../controllers/cart_controller.php';
include_once (dirname(__FILE__)) . '/../../controllers/wishlist_controller.php';


if (isset($_SESSION['user_id']) && isset($_SESSION['user_role'])) {
    if ($_SESSION['user_role'] == '2') {
        $customerOrders = select_orderDetails_controller($_SESSION["user_id"]);
        $img = "../../assets/images/products/";
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
            <link rel="stylesheet" href="../../css/user.css">
            <title>User Profile | Orders</title>
        </head>

        <body>
            <!-- user profile -->
            <div class="us_container">
                <div class="sidebar">
                    <div class="content">
                        <div class="p_plaque">
                            <div class="pp">
                                <img src="../../assets/backgrounds/katsiaryna-endruszkiewicz-BteCp6aq4GI-unsplash.jpg" alt="">
                            </div>
                            <div class="details">
                                <h4>Lorem ipsum dolor sit.</h4>
                                <p class="email">lorem@ipsum.com</p>
                                <div class="status">
                                    <span></span>
                                    <p>Active</p>
                                </div>
                            </div>
                        </div>
                        <!-- menu -->
                        <p class="sm">Menu</p>

                        <div class="menuItems">

                            <a href="./user-orders.php" class="menuItem active">
                                <div class="icon">
                                    <img src="../../assets/icons/mdi_package-white.svg" alt="">
                                </div>
                                <p class="m_name">Orders</p>
                            </a>
                            <a href="./user-wishlist.php" class="menuItem">
                                <div class="icon">
                                    <img src="../../assets/icons/bi_bookmark-heart-fill-white.svg" alt="">
                                </div>
                                <p class="m_name">Saved Items</p>
                            </a>
                            <a href="./user-reviews.php" class="menuItem">
                                <div class="icon">
                                    <img src="../../assets/icons/ic_baseline-review-white.svg" alt="">
                                </div>
                                <p class="m_name">Ratings & Reviews</p>
                            </a>
                            <a href="./user-ac-settings.php" class="menuItem">
                                <div class="icon">
                                    <img src="../../assets/icons/clarity_avatar-solid-white.svg" alt="">
                                </div>
                                <p class="m_name">Account Settings</p>
                            </a>
                            <a href="./user-sc-settings.php" class="menuItem">
                                <div class="icon">
                                    <img src="../../assets/icons/simple-icons_springsecurity-white.svg" alt="">
                                </div>
                                <p class="m_name">Security Settings</p>
                            </a>
                            <a href="../../login/logout.php" class="menuItem bottom">
                                <div class="icon">
                                    <img src="../../assets/icons/ri_logout-circle-fill.svg" alt="">
                                </div>
                                <p class="m_name">Logout</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="side-content">
                    <div class="content">
                        <div class="heading">
                            <p>Orders</p>

                            <!-- usernav -->
                            <div class="breadCrumb">
                                <div class="menuItem">
                                    <div class="icon">
                                        <img src="../../assets/icons/bx_bxs-shopping-bag-alt.svg" alt="">
                                    </div>
                                    <a href="../../index.php">Back to shopping</a>
                                </div>

                            </div>
                        </div>



                        <!-- other items -->
                        <div class="other_plaques">
                            <div class="top_rated">

                                <div class="table">
                                    <table>
                                        <tr>
                                            <th>ID</th>
                                            <th>Product</th>
                                            <th>Image</th>
                                            <th>Price</th>
                                            <th>Invoice No.</th>
                                            <th>Date</th>
                                            <th>Quantity</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                        <?php
                                        foreach ($customerOrders as $order) {
                                        ?>
                                            <tr>
                                                <td><?php echo $order['order_id']; ?></td>
                                                <td><?php echo $order['product_title']; ?></td>
                                                <td class="or_img"><img src="<?php echo $img . basename($order['product_image']); ?>" alt=""></td>
                                                <td><?php echo $order['product_price']; ?></td>
                                                <td><?php echo $order['invoice_no']; ?></td>
                                                <td><?php echo $order['order_date']; ?></td>
                                                <td><?php echo $order['quantity']; ?></td>
                                                <td><?php echo $order['order_status']; ?></td>
                                                <td>
                                                    <?php
                                                    if ($order['order_status'] == 'pending') {
                                                        echo "<span><em>Waiting order approval</em></span>";
                                                    } 
                                                    else if($order['order_status'] == 'Cancelled'){
                                                        echo "<span><em>Your order has been cancelled</em></span>";

                                                    }
                                                    else {
                                                    ?>
                                                        <a href="../writeReview.php?product_id=<?php echo $order['product_id']; ?>">Write review</a>
                                                    <?php
                                                    }
                                                    ?>

                                                </td>
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>




                </div>
            </div>
            </div>
        </body>

        </html>
<?php
    } else {
    }
} else {
}
