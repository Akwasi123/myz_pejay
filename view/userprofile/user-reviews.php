<?php
include_once (dirname(__FILE__)) . '/../../settings/core.php';

$get_user = $_SESSION['user_id'];
$get_product = $_GET['product_id'];
$p_date = date("Y/m/d");
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
    <title>User Profile | Ratings and Reviews</title>
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
                    <!-- <a href="./user-main.php" class="menuItem">
                        <div class="icon">
                            <img src="../../assets/icons/bx_bxs-dashboard-white.svg" alt="">
                        </div>
                        <p class="m_name">Dashboard</p>
                    </a> -->
                    <a href="./user-orders.php" class="menuItem">
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
                    <a href="./user-reviews.php" class="menuItem active">
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
                    <p>Reviews</p>

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

                <form action="../../actions/add_review.php" method="GET" id="form">

                    <div class="form-element">
                        <input type="hidden" name="user_id" value="<?php echo $get_user ?>">
                        <input type="hidden" name="product_id" value="<?php echo $get_product ?>">
                        <input type="hidden" name="post_date" value="<?php echo $p_date ?>">
                        <label for="">Review</label>
                        <textarea id="desc" name="desc" cols="50" placeholder="Review Message" rows="10" style="resize: none"></textarea>
                        <br>
                    </div>

                    <div>
                        <button type="submit" id="add" name="submitReview">Submit Review</button>
                    </div>
                    <br>

                    <a href=""></a>
                </form>
            </div>
        </div>
    </div>
</body>

</html>