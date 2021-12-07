<?php
include_once (dirname(__FILE__)) . '/../settings/core.php';
include_once (dirname(__FILE__)) . '/../controllers/product_controller.php';
$all_products = select_all_products_controller();
$all_sizes = select_all_sizes_controller();
$all_images = select_all_images_controller();
$all_colors = select_all_colors_controller();

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
                        <form action="../actions/processProducts.php" method="POST" enctype="multipart/form-data" id="myForm">
                            <div class="form-control">
                                <label for="">Select Product</label>
                                <select name="product" id="product">
                                    <option value="--Select product--" selected>--Select product--</option>
                                    <?php
                                        foreach($all_products as $product){
                                            echo '<option value="'.$product['product_id'].'">'.$product['product_title'].'</option>';
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
                                        foreach($all_sizes as $size){
                                            echo '<option value="'.$size['size_id'].'">'.$size['value'].'</option>';
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
                                        foreach($all_colors as $color){
                                            echo '<option value="'.$color['color_id'].'">'.$color['color_val'].'</option>';

                                        }

                                    ?>

                                </select>
                                <small></small>
                            </div>
                            <div class="form-control">
                                <label for="">Image</label>
                                <select name="image" id="image">
                                    <option value="--Select image--" disabled selected>--Select image--</option>
                                    <!-- <input type="file" name="image" id="image" accept="image/*"> -->
                                    <?php
                                        foreach($all_images as $image){
                                            echo '<option value="'.$image['image_id'].'" id="option-image">'.$image['image_val'].'</option>';
            
                                        }

                                    ?>
                                    
                                </select>
                                <div class="mini-img">
                                    <img src="" alt="" name='varImg' id="img">
                                </div>
                                <script type="text/javascript">
                                    window.onload = () =>{
                                        // document.getElementById("myForm").reset();
                                    }
                                    const select = document.querySelector('#image');
                                    const imgVal = document.getElementById('img');
                                    // const imgVal = document.createElement('img');
                                    imgVal.style.display = 'none';
                                    select.addEventListener('change', (e)=>{
                                        imgVal.src = select.options[select.selectedIndex].text;
                                        imgVal.style.display = 'block';

                                    })
                                </script>
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    </body>

    </html>
<?php

} else {
    echo "<script type='text/javascript'> alert('Admin not logged in');
            document.location.href = '../index.php';
            </script>";
}
