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
                    <a href="" class="menuItem bottom">
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
                   
                </div>

                <div class="stats_plaque">
                    <div class="stat_items">
                        <div class="stat_item">
                            <div class="icon ic1">
                                <img src="../../assets/icons/bx_bx-border-all.svg" alt="">
                            </div>
                            <div class="textDetails">
                                <p>Total Orders</p>
                                <h2>20</h2>
                            </div>
                        </div>
                        <div class="stat_item">
                            <div class="icon ic2">
                                <img src="../../assets/icons/mdi_package-white.svg" alt="">
                            </div>
                            <div class="textDetails">
                                <p>Saved Items</p>
                                <h2>30</h2>
                            </div>
                        </div>
                        <div class="stat_item">
                            <div class="icon ic3">
                                <img src="../../assets/icons/bi_bookmark-heart-fill-white.svg" alt="">
                            </div>
                            <div class="textDetails">
                                <p>Orders Pending</p>
                                <h2>40</h2>
                            </div>
                        </div>
                        <div class="stat_item">
                            <div class="icon ic4">
                                <img src="../../assets/icons/ic_baseline-review-white.svg" alt="">
                            </div>
                            <div class="textDetails">
                                <p>Reviews Written</p>
                                <h2>10</h2>
                            </div>
                        </div>
                    </div>

                    <!-- other items -->
                    <div class="other_plaques">
                        <div class="top_rated">
                            
                            <div class="table">
                                <table>
                                    <tr>
                                      <th>Firstname</th>
                                      <th>Lastname</th>
                                      <th>Savings</th>
                                    </tr>
                                    <tr>
                                      <td>Peter</td>
                                      <td>Griffin</td>
                                      <td>$100</td>
                                    </tr>
                                    <tr>
                                      <td>Lois</td>
                                      <td>Griffin</td>
                                      <td>$150</td>
                                    </tr>
                                    <tr>
                                      <td>Joe</td>
                                      <td>Swanson</td>
                                      <td>$300</td>
                                    </tr>
                                    <tr>
                                      <td>Cleveland</td>
                                      <td>Brown</td>
                                      <td>$250</td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <div class="right_plqs">
                            <div class="new_orders">

                            </div>

                            <div class="review_plaque">

                            </div>
                        </div>
                    </div>
                </div>

                


            </div>
        </div>
    </div>
</body>
</html>