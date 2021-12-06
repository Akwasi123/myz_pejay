<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="../css/style.css" />
        <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet"> 
        <link rel="shortcut icon" href="./assets/logo.png" type="image/x-icon">
        <title>Myz_pejay’s Collections | Quality and Affordable Women's clothing</title>
    </head>
    <body>
        <div class="navbar">
            <!-- navigation bar -->
            <div class="nav-container">
                <div class="brand">
                    <div class="logo">
                        <a href="../index.php">
                            <img src="../assets/logo.png" alt="">
                        </a>
                    </div>
        
                    <nav>
                    <ul class="nav-links dark">
                        <li><a href="shop.php" class="link">Shop</a></li>
                        <li><a href="" class="link">Dresses</a></li>
                        <li><a href="" class="link">Accessories</a></li>
                        <li><a href="" class="link">Jeans</a></li>
                        <li><a href="" class="link">Shoes</a></li>
                    </ul>
                    </nav>
                </div>
        
                <!-- wishlist, search, account, cart -->
                <div class="us_actions">
                    <div class="icon">
                        <img src="../assets/icons/bi_heart-1.svg" alt="" />
                    </div>
                    <div class="searchBar">
                        <form action="">
                            <div class="form-control dark">
                                <input type="text" placeholder="Search for items..." />
                            </div>
                        </form>
                    </div>
                    <div class="icon">
                        <img src="../assets/icons/ic_round-shopping-basket.svg" alt=""/>
                    </div>
                    <div class="icon">
                        <img src="../assets/icons/codicon_account-1.svg" alt="" />
                    </div>
                </div>
            </div>
        </div>
    

        <main>
            <section class="singleP">
                <div class="content">
                    <div class="prodImages">
                        <div class="content">
                            <!-- product main image -->
                            <div class="mainImg">
                                <img src="../assets/images/IMG_2865.jpg" alt="">
                            </div>

                            <!-- smaller images -->
                            <div class="sm-img">
                                <div class="sim">
                                    <img src="../assets/images/IMG_2865.jpg" alt="">
                                    
                                </div>
                                <div class="sim">
                                    <img src="../assets/images/IMG_2865.jpg" alt="">
                                </div>
                                <div class="sim">
                                    <img src="../assets/images/IMG_2865.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="prodDetails">
                        <div class="content">
                            <div class="breadCrumb">
                                <div class="menuItem">
                                    <a href="../index.php">Home</a>
                                </div>
                                /
                                <div class="menuItem">
                                    <a href="">Products</a>
                                </div>
                                /
                                <div class="menuItem">
                                    <a href="" class="current">All</a>
                                </div>
                            </div>

                            <div class="prodName">
                                <p>Lorem Ipsum Dolor sit amet</p>
                            </div>

                            <!-- reviews and ratings -->
                            <div class="randR">
                                <img src="../assets/icons/ratings.svg" alt="">
                                <p>(50 reviews)</p>
                            </div>

                            <!-- price -->
                            <div class="price">
                                <p>GHS 59.00</p>
                            </div>

                            <!-- details and reviews tabs -->
                            <div class="dandR">
                                <!-- Tab links -->
                                <div class="tab">
                                    <button class="tablinks" onclick="openCity(event, 'Details')" id="defaultOpen">Details</button>
                                    <button class="tablinks" onclick="openCity(event, 'Reviews')">Reviews</button>
                                </div>
                                <hr>
                                
                                <!-- Tab content -->
                                <div id="Details" class="tabcontent">
                                    <h4>Product Description</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In aliquam diam egestas dignissim urna pharetra amet id odio. Pellentesque condimentum etiam risus porta. Amet metus erat nulla a molestie orci sem tellus. Sit congue eu augue consectetur. Netus duis hac vulputate felis bibendum tincidunt. </p>

                                    <div class="custom">
                                        <!-- size -->
                                        <div class="size">
                                            <p>SIZE</p>
                                            <div class="size_options">
                                                <div class="size_options">
                                                        <div class="op1">S</div>
                                                        <div class="op1">M</div>
                                                        <div class="op1">L</div>
                                                        <div class="op1">XL</div>
                                                    
                                                </div> 
                                            </div> 
                                        </div>
                                        
                                        <!-- size -->
                                        <div class="size">
                                            <p>COLORS</p>
                                            <div class="size_options">
                                                <div class="size_options">
                                                        <div class="op1"></div>
                                                        <div class="op1"></div>
                                                        <div class="op1"></div>
                                                        <div class="op1"></div>
                                                    
                                                </div> 
                                            </div> 
                                        </div>
                                    </div>

                                    <!-- stockmsg -->
                                    <!-- <p class="stock">30 items remaining</p> -->

                                    <div class="cta">
                                        <div class="quantity">
                                            <p>+</p>
                                            <p>1</p>
                                            <p>-</p>
                                        </div>
                                        <div class="btn">
                                            <button>Add to Cart</button>
                                        </div>
                                    </div>
        
                                </div>
                                
                                <div id="Reviews" class="tabcontent">
                                    
                                    <p><em>No reviews</em></p>
                                </div>
                            </div>

                            
                            

                            
                        </div>
                    </div>
                </div>
            </section>
                    
        </main>

        <script src="../js/accordion.js"></script>
        <script src="../js/pagination.js"></script>
    </body>
</html>

