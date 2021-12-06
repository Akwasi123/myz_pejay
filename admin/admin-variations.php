<?php
include_once (dirname(__FILE__)) . '/../settings/core.php';
include_once (dirname(__FILE__)) . '/../controllers/product_controller.php';
$all_products = select_all_products_controller();

// page if admin logs in
if (isset($_SESSION['user_role']) == '1') {
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
        <title>Admin | Add Products</title>
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
                        <a href="./admin-main.php" class="menuItem">
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
                                <p class="m_name">AddProduct</p>
                            </a>
                            <a href="./admin-variations.php" class="menuItem active">
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
                        <p>Add Product Variation</p>
                    </div>

                    <!-- add-product variation form -->
                    <div class="addProduct extend">

                        <div class="flex ">
                            <form action="../actions/processProducts.php" method="POST">
                                <div class="form-control spec">
                                    <label for="">Size</label>
                                    <input type="text" name="size" id="sizee">
                                    <small></small>
                                    <button type="submit" name="addSize" onclick="return valSize()" class="brand">Add Size</button>
                                </div>
                            </form>

                            <form action="../actions/processProducts.php" method="POST">
                                <div class="form-control spec">
                                    <label for="">Color</label>
                                    <input type="text" name="color" id="colorr">
                                    <small></small>
                                    <button type="submit" name="addColor" onclick="return valColor()" class="brand">Add Color</button>
                                </div>
                            </form>

                            <form action="../actions/processProducts.php" method="POST" enctype="multipart/form-data">
                                <div class="form-control spec">
                                    <label for="">Image</label>
                                    <input type="file" name="image" id="imagee" accept="image/*">
                                    <button type="submit" name="addImage" onclick="return valImage()" class="brand">Upload Image</button>
                                    <small></small>
                                </div>
                            </form>
                        </div>
                                
                                

                        <!-- add varied product -->
                        <form action="../actions/processProducts.php" method="POST" enctype="multipart/form-data">
                            <div class="form-control">
                                <label for="">Select Product</label>
                                <select name="product" id="product">
                                    <option value="--Select product--" selected>--Select product--</option>
                                    <?php
                                        foreach($all_products as $product){
                                            echo '<option value="'.$product['product_id'].'">'.$product['product_title'].'</option>';
                                            echo '<input type="hidden" name="p_id" value="'.$product['product_id'].'">';

                                        }

                                    ?>

                                </select>
                                <small></small>
                            </div>
                            <div class="form-control">
                                <label for="">Select Size</label>
                                <select name="size" id="size">
                                    <option value="--Select size--" selected>--Select size--</option>
                                    <?php
                                        foreach($all_products as $product){
                                            echo '<option value="'.$product['product_id'].'">'.$product['product_title'].'</option>';
                                            echo '<input type="hidden" name="p_id" value="'.$product['product_id'].'">';

                                        }

                                    ?>

                                </select>
                                <small></small>
                            </div>
                            <div class="form-control">
                                <label for="">Color</label>
                                <select name="color" id="color">
                                    <option value="--Select color--" selected>--Select color--</option>
                                    <?php
                                        foreach($all_products as $product){
                                            echo '<option value="'.$product['product_id'].'">'.$product['product_title'].'</option>';
                                            echo '<input type="hidden" name="p_id" value="'.$product['product_id'].'">';

                                        }

                                    ?>

                                </select>
                                <small></small>
                            </div>
                            <div class="form-control">
                                <label for="">Image</label>
                                <select name="image" id="image">
                                    <option value="--Select image--" selected>--Select image--</option>
                                    <?php
                                        foreach($all_products as $product){
                                            echo '<option value="'.$product['product_id'].'">'.$product['product_title'].'</option>';
                                            echo '<input type="hidden" name="p_id" value="'.$product['product_id'].'">';

                                        }

                                    ?>

                                </select>
                                <!-- <input type="file" name="image" id="image" accept="image/*"> -->
                                <small></small>
                            </div>
                            
                            <div class="form-control">
                                <button type="submit" name="addVar" id="addVar" class="variation">Add Variation</button>
                            </div>



                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script src="../js/accordion.js"></script>
        <script src="../js/variationVal.js"></script>

    </body>

    </html>
<?php

} else {
    echo "<script type='text/javascript'> alert('Admin not logged in');
            document.location.href = '../index.php';
            </script>";
}
