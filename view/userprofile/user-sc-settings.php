<?php
include_once (dirname(__FILE__)) . '/../../settings/core.php';
include_once (dirname(__FILE__)) . '/../../controllers/user_controller.php';



if (isset($_SESSION['user_role']) && ($_SESSION['user_id'])) {
    if ($_SESSION['user_role'] == '2') {
        $user_id = $_SESSION['user_id'];
        $current_customer = select_one_user_controller($user_id);
        $profileimg = "../../assets/images/profile/";
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
            <title>User Profile | Account Settings</title>
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
                            <a href="./user-sc-settings.php" class="menuItem active">
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
                            <p>Account Settings</p>

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

                        <section class="pInfo">
                            <h2>Security Information</h2>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem exercitationem illo repudiandae iure doloribus quidem veniam aperiam magni, neque fuga.</p>

                            <div class="form">
                                <form action="../../actions/update_password.php" method="POST">
                                    <div class="flex">
                                        <div class="form-control">
                                            <label for="">New Password</label>
                                            <div class="tandE">
                                                <input type="password" name="n_pass" id="pass">
                                            </div>
                                            
                                            <small id="passwordError"></small>
                                        </div>
                                        <div class="form-control">
                                            <label for="">Confirm new password</label>
                                            <div class="tandE">
                                                <input type="password" name="c_pass" id="cpass">
                                            </div>
                                            <small id="cpasswordError"></small>
                                        </div>
                                    </div>

                                    <div class="form-control">
                                        <button type="submit" id="updatePass" name="updatePassword">Update Password</button>
                                    </div>
                                </form>
                            </div>
                        </section>

                    </div>
                </div>
            </div>

            <script src="../../js/userval.js"></script>
        </body>

        </html>
<?php
    } else {
        echo "<script type='text/javascript'> alert('User not logged in');
            document.location.href = '../../index.php';
            </script>";
    }
}else {
    echo "<script type='text/javascript'> alert('User not logged in');
        document.location.href = '../../index.php';
        </script>";
}
