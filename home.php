<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!-- swiper css link -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Custom css file link -->
    <link rel="stylesheet" href="style.css">

</head>
<body>
    
    <!-- header section start -->
        <section class="header">
            <a href="home.php" class="logo">travel.</a>

            <nav class="navbar">
                <a href="home.php">home</a>
                <a href="about.php">about</a>
                <a href="package.php">package</a>
                <a href="book.php">book</a>

                
            </nav>

            <div id="menu-btn" class="fas fa-bars"></div>

        </section>
    <!-- header section end -->


    <!-- home section start -->
    <section class="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">

                <div class="swiper-slide slide" style="background:url(images/home-slide-1.jpg) no-repeat">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>travel around the world</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background:url(images/home-slide-2.jpg) no-repeat">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>discover new places</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background: url(images/home-slide-3.jpg) no-repeat">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>make your tour worthwhile</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>

            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

        </div>
    </section>
    

    <!-- Include Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script>
        // Initialize Swiper
        var swiper = new Swiper(".home-slider", {
            loop: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            autoplay: {
                delay: 10000, // milliseconds
            },
        });
    </script>

    <!-- home section end -->




    <!-- services section start -->
        <section class="services">
            <h1 class="heading-title"> Our Services</h1>

            <div class="box-container">
                <div class="box">
                    <img src="images/icon-1.png" alt="">
                    <h3>adventure</h3>
                </div>
            
                <div class="box">
                    <img src="images/icon-1.png" alt="">
                    <h3>tour guid</h3>
                </div>
            
                <div class="box">
                    <img src="images/icon-1.png" alt="">
                    <h3>trekking</h3>
                </div>

                <div class="box">
                    <img src="images/icon-1.png" alt="">
                    <h3>camp fire</h3>
                </div>

                <div class="box">
                    <img src="images/icon-1.png" alt="">
                    <h3>off road</h3>
                </div>

                <div class="box">
                    <img src="images/icon-1.png" alt="">
                    <h3>camping</h3>
                </div>

            </div>

        </section>

    <!-- services section end -->


    <!-- home about section start -->
        <section class="home-about">
            <div class="image">
                <img src="images/about-img.jpg" alt="">
            </div>

            <div class="content">
                <h3>About Us</h3>
                <P>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptate eos impedit repudiandae quasi dolorem iste, 
                maiores illo modi odit atque voluptas in explicabo corporis accusamus sequi assumenda expedita dolores corrupti.</P>
                
                <a href="about.php" class="btn">read more</a>
            </div>

            

        </section>
    
    <!-- home about section end -->


    <!-- home packages section start -->
    
        <section class="home-packages">
            <h1 class="heading-title"> our packages </h1>

            <div class="box-container">

                <div class="box">
                    <div class="image">
                        <img src="images/img-1.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>adventure & tour</h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptas, quam.</p>
                        <a href="book.php" class="btn">book now</a>
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="images/img-1.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>adventure & tour</h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptas, quam.</p>
                        <a href="book.php" class="btn">book now</a>
                    </div>
                </div>

                <div class="box">
                    <div class="image">
                        <img src="images/img-1.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>adventure & tour</h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptas, quam.</p>
                        <a href="book.php" class="btn">book now</a>
                    </div>
                </div>

            </div>

            <div class="load-more"> <a href="package.php" class="btn"> load more </a> </div>
            
        </section>


    <!-- home packages section end -->
    



    <!-- home offer section start -->
        <section class="home-offer">
            <div class="content">
                <h3>upto 50% off </h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                 Non, suscipit culpa? Dicta officiis minima quod placeat porro voluptas beatae unde!</p>
                <a href="book.php" class="btn">book now</a>
            </div>

        </section>
    
    <!-- home offer section end -->
    



    <!-- Footer section start -->
        <section class="footer">
            <div class="box-container">
                <div class="box">
                    <h3>quick links</h3>
                    <a href="home.php"> <i class="fas fa-angle-right"> </i> home </a>
                    <a href="about.php"> <i class="fas fa-angle-right"> </i> about </a>
                    <a href="package.php"> <i class="fas fa-angle-right"> </i> package </a>
                    <a href="book.php"> <i class="fas fa-angle-right"> </i> book </a>

                </div>

                <div class="box">
                    <h3>extra links</h3>
                    <a href="#"> <i class="fas fa-angle-right"> </i> ask questions </a>
                    <a href="#"> <i class="fas fa-angle-right"> </i> about us </a>
                    <a href="#"> <i class="fas fa-angle-right"> </i> privacy policy </a>
                    <a href="#"> <i class="fas fa-angle-right"> </i> terms of use </a>

                </div>

                <div class="box">
                    <h3>contact info</h3>
                    <a href="#"> <i class="fas fa-phone"> </i> +94-77-8121-761 </a>
                    <a href="#"> <i class="fas fa-phone"> </i> +94-75-4544-208 </a>
                    <a href="#"> <i class="fas fa-envelope"> </i> heshanramitha@gmail.com </a>
                    <a href="#"> <i class="fas fa-map"> </i> Colombo 07, Sri Lanka </a>

                </div>

                <div class="box">
                    <h3>follow us</h3>
                    <a href="#"> <i class="fab fa-facebook-f"> </i>  facebook </a>
                    <a href="#"> <i class="fab fa-twitter"> </i> twitter </a>
                    <a href="#"> <i class="fab fa-instagram"> </i> instagram </a>
                    <a href="#"> <i class="fab fa-linkedin"> </i> linkedin </a>

                </div>
            </div>

            <div class="credit"> Created by <span> Ramitha Heshan </span> | all rights reserved! </div>
        </section>

    <!-- Footer section end -->


    <!-- swiper js link -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.css"></script>

    <!-- custom js file link -->
    <script src="script.js"></script>

</body>
</html>