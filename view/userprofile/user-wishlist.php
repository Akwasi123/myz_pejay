<?php
include_once (dirname(__FILE__)) . '/../../settings/core.php';
include_once (dirname(__FILE__)) . '/../../controllers/wishlist_controller.php';
include_once (dirname(__FILE__)) . '/../../controllers/user_controller.php';

if (isset($_SESSION['user_id'])) { //gets session of customer(logged in)
    $user_id = $_SESSION['user_id'];  //user_id is now session
    $product_wishlist = select_all_wishlist_lg_controller($user_id);
    $count_wishlist = count_wishlist_lg_controller($user_id);
}

if (isset($_SESSION["user_id"]) && ($_SESSION["user_role"])) {
    if ($_SESSION["user_role"] == '2') {
        $user_id = $_SESSION['user_id'];
        $current_customer = select_one_user_controller($user_id);
        $profileimg = "../../assets/images/profile/";
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
            <title>User Profile | Saved Items</title>
        </head>

        <body>
            <!-- user profile -->
            <div class="us_container">
                <div class="sidebar">
                    <div class="content">
                        <div class="p_plaque">
                            <div class="pp">
                                <img src="<?php echo $profileimg . basename($current_customer['user_image']) ?>" alt="">
                            </div>
                            <div class="details">
                                <h4><?php echo $current_customer['user_fname']. " ". $current_customer['user_lname'] ?></h4>
                                <p class="email"><?php echo $current_customer['user_email'] ?></p>
                                <div class="status">
                                    <span></span>
                                    <p>Active</p>
                                </div>
                            </div>
                        </div>
                        <!-- menu -->
                        <p class="sm">Menu</p>

                        <div class="menuItems">

                            <a href="./user-orders.php" class="menuItem">
                                <div class="icon">
                                    <img src="../../assets/icons/mdi_package-white.svg" alt="">
                                </div>
                                <p class="m_name">Orders</p>
                            </a>
                            <a href="./user-wishlist.php" class="menuItem active">
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
                            <p>Saved Items</p>
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

                        <div class="wishlistItems">
                            <?php
                            if($count_wishlist['total'] == 0){
                                ?>
                                <p style="margin-top: 20px; color: #000005;"><em>Nothing to show</em></p>
                                <?php
                            }else{

                                foreach ($product_wishlist as $item) {
                                ?>
                                    <div class="cartItem">
                                        <div class="cI-left">
                                            <div class="picture">
                                                <img src="<?php echo $img . basename($item['product_image']); ?>" alt="">
                                            </div>
                                            <div class="details">
                                                <h3><?php echo $item['product_title'] ?></h3>
                                                <p>GHS <?php echo $item['product_price'] ?>.00</p>
                                            </div>
                                        </div>
    
                                        <div class="remove">
                                            <a href="../../actions/add_wishlist.php?deleteID=<?php echo $item['product_id'] ?>"><img src="../../assets/icons/fluent_delete-24-filled.svg" alt=""></a>
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
        </body>

        </html>
<?php
    }else {
        echo "<script type='text/javascript'> alert('User not logged in');
            document.location.href = '../../index.php';
            </script>";
    }
} else {
    echo "<script type='text/javascript'> alert('User not logged in');
        document.location.href = '../../index.php';
        </script>";
}