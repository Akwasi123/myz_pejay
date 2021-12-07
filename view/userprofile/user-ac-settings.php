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
                            <span></span><p>Active</p>
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
                </div>

                <section class="pInfo">
                    <h2>Personal Information</h2>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem exercitationem illo repudiandae iure doloribus quidem veniam aperiam magni, neque fuga.</p>

                    <!-- change profile image -->
                    <div class="chP">
                        <!-- <div class="title">Change profile picture</div> -->
                        <div class="prof_img">
                            <img src="../../assets/backgrounds/katsiaryna-endruszkiewicz-BteCp6aq4GI-unsplash.jpg" alt="">

                            <div class="chngImg">
                                <a href="">
                                    <img src="../../assets/icons/bx_bxs-camera.svg" alt="">
                                </a>
                            </div>
                        </div>

                    </div>

                    <div class="form">
                        <form action="">
                            <div class="flex">
                                <div class="form-control">
                                    <label for="">Full Name</label>
                                    <div class="tandE">
                                        <input type="text">
                                        <button>Edit</button>
                                    </div>
                                </div>
                                <div class="form-control">
                                    <label for="">Email Address</label>
                                    <div class="tandE">
                                        <input type="text">
                                        <button>Edit</button>
                                    </div>
                                </div>
                            </div>
                            <div class="flex">
                                <div class="form-control">
                                    <label for="">Phone Number</label>
                                    <div class="tandE">
                                        <input type="text">
                                        <button>Edit</button>
                                    </div>
                                </div>
                                <div class="form-control">
                                    <label for="">Address</label>
                                    <div class="tandE">
                                        <input type="text">
                                        <button>Edit</button>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="form-control">
                                <button>Save Changes</button>
                            </div> -->
                        </form>
                    </div>
                </section>

            </div>
        </div>
    </div>
</body>
</html>