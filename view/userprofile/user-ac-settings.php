<?php
include_once (dirname(__FILE__)) . '/../../settings/core.php';
include_once (dirname(__FILE__)) . '/../../controllers/user_controller.php';



if (isset($_SESSION['user_role']) && ($_SESSION['user_id'])) {
    if ($_SESSION['user_role'] == '2') {
        $user_id = $_SESSION['user_id'];
        $one_user = select_one_user_controller($user_id);
        $img = "../../assets/images/profile/";
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
                            <a href="./user-reviews.php" class="menuItem">
                                <div class="icon">
                                    <img src="../../assets/icons/ic_baseline-review-white.svg" alt="">
                                </div>
                                <p class="m_name">Ratings & Reviews</p>
                            </a>
                            <a href="./user-ac-settings.php" class="menuItem active">
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
                            <h2>Personal Information</h2>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem exercitationem illo repudiandae iure doloribus quidem veniam aperiam magni, neque fuga.</p>


                            <div class="form">
                                <form action="<?php
                                                if (isset($_GET['u_id'])) {
                                                    echo '../../actions/update_user_pass.php';
                                                } else {
                                                    echo '';
                                                }

                                                ?>" method="POST" enctype="multipart/form-data">
                                    <!-- change profile image -->
                                    <div class="chP">
                                        <!-- <div class="title">Change profile picture</div> -->
                                        <div class="prof_img">
                                            <img src="<?php echo $img .  basename($one_user['user_image']); ?>" alt="">
                                            <?php
                                            if (isset($_GET['u_id'])) {
                                            ?>
                                                <div class="chngImg">
                                                    <input type="file" name="image" accept="image/*" value="">
                                                </div>

                                            <?php
                                            } else {
                                            ?>
                                                <div class="chngImg">
                                                    <a href="">
                                                        <img src="../../assets/icons/bx_bxs-camera.svg" alt="">
                                                    </a>
                                                </div>
                                            <?php
                                            }
                                            ?>

                                        </div>

                                    </div>
                                    <div class="flex">

                                        <div class="form-control">
                                            <label for="">Email Address</label>
                                            <div class="tandE">

                                                <?php
                                                if (isset($_GET['u_id'])) {
                                                ?>
                                                    <input type="text" name="email" value="<?php echo $one_user['user_email'] ?>">

                                                <?php
                                                } else {
                                                ?>
                                                    <input type="text" disabled name="email" value="<?php echo $one_user['user_email'] ?>">
                                                <?php
                                                }
                                                ?>


                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex">
                                        <div class="form-control">
                                            <label for="">Phone Number</label>
                                            <div class="tandE">
                                                <?php
                                                if (isset($_GET['u_id'])) {
                                                ?>
                                                    <input type="text" name="pnum" value="<?php echo $one_user['user_contact'] ?>">

                                                <?php
                                                } else {
                                                ?>
                                                    <input type="text" name="pnum" disabled value="<?php echo $one_user['user_contact'] ?>">
                                                <?php
                                                }
                                                ?>


                                            </div>
                                        </div>
                                        <div class="form-control">
                                            <label for="">Address</label>
                                            <div class="tandE">
                                                <?php
                                                if (isset($_GET['u_id'])) {
                                                ?>
                                                    <input type="text" name="address" value="<?php echo $one_user['user_address'] ?>">

                                                <?php
                                                } else {
                                                ?>
                                                    <input type="text" name="address" disabled value="<?php echo $one_user['user_address'] ?>">
                                                <?php
                                                }
                                                ?>


                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-control editBtn">
                                        <?php
                                        if (isset($_GET['u_id'])) {
                                        ?>
                                            <button type="submit" name="updateUser">Save changes</button>

                                        <?php
                                        } else {
                                        ?>
                                            <a href="./user-ac-settings.php?u_id=<?php echo $one_user['user_id'] ?>" class="" name="updateUser">Edit Info</a>

                                        <?php
                                        }
                                        ?>
                                    </div>
                                </form>
                            </div>
                        </section>

                    </div>
                </div>
            </div>
        </body>

        </html>
<?php
    }
}
