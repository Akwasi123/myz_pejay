<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="../css/style.css">
    <title>Login</title>
</head>
<body>
    <main>
        <section class="login">
            <div class="left">
                <!-- text content -->
                <div class="text-content">
                    <h1>Myz_Pejay <span>Collections</span></h1>
                    <p><em>An outstanding collection of quality and affordable women's clothing.</em></p>

                    <!-- socials -->
                    <div class="sc">
                        <div class="icon">
                            <img src="../assets/icons/Instagram.svg" alt="">
                        </div>
                        <span><a href="">myzpejay_collections</a></span>
                    </div>
                </div>


                <!-- swiper carousel -->
                <div class="lg_swiper">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                      <!-- Slides -->
                      <div class="swiper-slide">
                        <img src="../assets/backgrounds/pexels-godisable-jacob-794062.jpg" alt="">
                      </div>
                      <div class="swiper-slide">
                        <img src="../assets/backgrounds/katsiaryna-endruszkiewicz-BteCp6aq4GI-unsplash.jpg" alt="">
                      </div>
                      <div class="swiper-slide">
                        <img src="../assets/backgrounds/judeus-samson-0UECcInuCR4-unsplash(1).jpg" alt="">
                      </div>
                      
                    </div>
                </div>
            </div>
            <div class="right">
                <div class="content">
                    <div class="heading">
                        <h1>Login</h1>
                    </div>

                    <h3>Sign in to enjoy the best myz_pejay has to offer</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio voluptatibus ut nihil distinctio omnis explicabo?</p>

                    <form action="loginprocess.php" method="POST">
                        <div class="form-control">
                            <label for="">Email Address</label>
                            <input type="email" name="email" id="email">
                            <small></small>
                        </div>

                        <div class="form-control">
                            <label for="">Password</label>
                            <input type="password" name="password" id="password">
                            <small></small>
                        </div>

                        <span class="forgot">Forgot password? <a href="">Click here</a></span>
                        
                        <div class="form-control">
                            <button type="submit" name="loginBtn" id="loginBtn">Login</button>
                        </div>
                        <span>Don't have an account? <a href="register.php">Register</a></span>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="../js/heroCarousel.js"></script>
    <script src="../js/loginval.js"></script>
</body>
</html>