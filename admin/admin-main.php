<?php
include_once (dirname(__FILE__)) . '/../settings/core.php';


if (isset($_SESSION['user_role']) == '1') {

    // page if admin logs in

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
        <link rel="stylesheet" href="../css/admin.css">
        <title>Admin | Dashboard</title>
    </head>

    <body>
        <!-- user profile -->
        <div class="us_container">
            <div class="sidebar">
                <div class="content">

                    <div class="logo">
                        <img src="../assets/logo.png" alt="">
                    </div>

                    <!-- menu -->
                    <p class="sm">Menu</p>


                    <div class="menuItems">
                        <a href="./admin-main.php" class="menuItem active">
                            <div class="icon">
                                <img src="../assets/icons/bx_bxs-dashboard-white.svg" alt="">
                            </div>
                            <p class="m_name">Dashboard</p>
                        </a>
                        <a href="./admin-orders.php" class="menuItem">
                            <div class="icon">
                                <img src="../assets/icons/mdi_package-white.svg" alt="">
                            </div>
                            <p class="m_name">Orders</p>
                        </a>

                        <button class="accordion"> <img src="../assets/icons/dashicons_products.svg" alt=""> Products</button>
                        <div class="panel">
                            <a href="./admin-productView.php" class="menuItem">
                                <div class="icon">
                                    <img src="../assets/icons/eye.svg" alt="">
                                </div>
                                <p class="m_name">View Product</p>
                            </a>
                            <a href="./admin-addproducts.php" class="menuItem">
                                <div class="icon">
                                    <img src="../assets/icons/akar-icons_plus-white.svg" alt="">
                                </div>
                                <p class="m_name">Add Product</p>
                            </a>
                            <a href="./admin-variations.php" class="menuItem">
                                <div class="icon">
                                    <img src="../assets/icons/gis_difference.svg" alt="">
                                </div>
                                <p class="m_name">Variations</p>
                            </a>
                            <a href="./admin-brands.php" class="menuItem">
                                <div class="icon">
                                    <img src="../assets/icons/ic_baseline-review-white.svg" alt="">
                                </div>
                                <p class="m_name">Brands</p>
                            </a>
                            <a href="./admin-categories.php" class="menuItem">
                                <div class="icon">
                                    <img src="../assets/icons/bx_bxs-category-alt.svg" alt="">
                                </div>
                                <p class="m_name">Categories</p>
                            </a>
                        </div>

                        <a href="./admin-customers.php" class="menuItem">
                            <div class="icon">
                                <img src="../assets/icons/bi_people-fill.svg" alt="">
                            </div>
                            <p class="m_name">Customers</p>
                        </a>
                        <a href="./admin-payments.php" class="menuItem">
                            <div class="icon">
                                <img src="../assets/icons/fluent_payment-24-filled-white.svg" alt="">
                            </div>
                            <p class="m_name">Payments</p>
                        </a>
                        <a href="./admin-ac-settings.php" class="menuItem">
                            <div class="icon">
                                <img src="../assets/icons/clarity_settings-solid-white.svg" alt="">
                            </div>
                            <p class="m_name">Settings</p>
                        </a>
                        <a href="../login/logout.php" class="menuItem">
                            <div class="icon">
                                <img src="../assets/icons/ri_logout-circle-fill.svg" alt="">
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
                                    <img src="../assets/icons/fluent_select-all-off-24-filled.svg" alt="">
                                </div>
                                <div class="textDetails">
                                    <p>All Products</p>
                                    <h2>20</h2>
                                </div>
                            </div>
                            <div class="stat_item">
                                <div class="icon ic2">
                                    <img src="../assets/icons/mdi_package-white.svg" alt="">
                                </div>
                                <div class="textDetails">
                                    <p>Total Orders</p>
                                    <h2>30</h2>
                                </div>
                            </div>
                            <div class="stat_item">
                                <div class="icon ic3">
                                    <img src="../assets/icons/ic_round-publish.svg" alt="">
                                </div>
                                <div class="textDetails">
                                    <p>Orders Approved</p>
                                    <h2>40</h2>
                                </div>
                            </div>
                            <div class="stat_item">
                                <div class="icon ic4">
                                    <img src="../assets/icons/fa-solid_hourglass-end.svg" alt="">
                                </div>
                                <div class="textDetails">
                                    <p>Orders Pending</p>
                                    <h2>10</h2>
                                </div>
                            </div>
                        </div>

                        <!-- other items -->
                        <div class="other_plaques">
                            <div class="top_rated">
                                <div class="heading">
                                    <h3>New orders</h3>
                                </div>
                                <div class="table">
                                    <table>
                                        <tr>
                                            <th>Order ID</th>
                                            <th>Customer</th>
                                            <th>Invoice No</th>
                                            <th>Order Date</th>
                                            <th>Order Status</th>
                                            <th>Actions</th>
                                        </tr>
                                        <tr>
                                            <td>Peter</td>
                                            <td>Griffin</td>
                                            <td>$100</td>
                                            <td>$100</td>
                                            <td>$100</td>
                                            <td>$100</td>
                                        </tr>
                                        <tr>
                                            <td>Lois</td>
                                            <td>Griffin</td>
                                            <td>$150</td>
                                            <td>$150</td>
                                            <td>$150</td>
                                            <td>$150</td>
                                        </tr>
                                        <tr>
                                            <td>Joe</td>
                                            <td>Swanson</td>
                                            <td>$300</td>
                                            <td>$300</td>
                                            <td>$300</td>
                                            <td>$300</td>
                                        </tr>
                                        <tr>
                                            <td>Cleveland</td>
                                            <td>Brown</td>
                                            <td>$250</td>
                                            <td>$250</td>
                                            <td>$250</td>
                                            <td>$250</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>

                            <div class="right_plqs">
                                <div class="new_orders">
                                    <div class="content">
                                        <div class="heading">
                                            <h3>Product Stock</h3>
                                        </div>

                                        <div class="table">
                                            <table>
                                                <tr>
                                                    <th>Order ID</th>
                                                    <th>Customer</th>
                                                    <th>Stock</th>
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
                                </div>
                            </div>
                        </div>
                    </div>




                </div>
            </div>
        </div>

        <script src="../js/accordion.js"></script>
    </body>

    </html>
<?php

} else {
    echo "<script type='text/javascript'> alert('Admin not logged in');
        document.location.href = '../index.php';
        </script>";
}