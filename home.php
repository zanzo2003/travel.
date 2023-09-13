<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Travel.</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    <!-- This is the link for all fonts and icons-->
    <link rel="stylesheet" href="style.css">
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap"
        rel="stylesheet">
    <!-- swiper link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <!-- font awesome link -->
    <script src="https://kit.fontawesome.com/80a3084a21.js" crossorigin="anonymous"></script>
    <style>
    .home-offer {
        text-transform: center;
        text-align: center;
        padding: 6rem 0;
        background-color:#F2F1F0;
    }

    .home-offer .content-offer {
        max-width: 70rem;
        margin: 0 auto 0 auto;
    }

    .home-offer .content-offer h3 {
        font-size: 3rem;
        color: var(--black);
        text-transform: uppercase;
    }

    .home-offer .content-offer p {
        font-size: 1.2rem;
        color: var(--light-black);
        line-height: 2;
        padding: 2rem 0;
    }
    .home-offer .content-offer a{
        color: white;
    }
    </style>
</head>

<body>


    <!-- navbar section start -->
    <nav class="navbar navbar-expand-lg  bg-light fixed-top">
        <div class="container-fluid">
            <a href="home.php" class="navbar-brand">Travel.</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto me-4">
                    <li class="nav-item me-4"><a href="home.php" class="nav-link">Home</a></li>
                    <li class="nav-item me-4"><a href="about.php" class="nav-link">About</a></li>
                    <li class="nav-item me-4"><a href="package.php" class="nav-link">Packages</a></li>
                    <li class="nav-item me-4"><a href="book.php" class="nav-link">Book</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- navbar section end -->








    <!-- home section starts -->
    <section class="home">

        <div class="swiper home-slider">
            <div class="swiper-wrapper">

                <div class="swiper-slide" style="background: url(images/slide1.jpeg) no-repeat">
                    <div class="content">
                        <span>Explore, Discover, Travel</span>
                        <h3>Travel around the world</h3>
                        <a href="package.php" class="btn">Discover</a>
                    </div>
                </div>

                <div class="swiper-slide" style="background: url(images/slide2.jpeg) no-repeat">
                    <div class="content">
                        <span>Explore, Discover, Travel</span>
                        <h3>Discover new places</h3>
                        <a href="package.php" class="btn">Discover</a>
                    </div>
                </div>

                <div class="swiper-slide" style="background: url(images/slide3.jpeg) no-repeat">
                    <div class="content">
                        <span>Explore, Discover, Travel</span>
                        <h3>Make your tour worthwhile</h3>
                        <a href="package.php" class="btn">Discover</a>
                    </div>
                </div>

            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </section>

    <!-- home section ends -->


    <!-- Home about section start -->

    <section class="home-about">


        <div class="container text-center">
            <div class="row" style="padding: 5rem;">
                <div class="col-lg-6 col-sm-12 image">
                    <i class="fa-solid fa-handshake fa-7x"></i>
                </div>
                <div class="col-lg-6 col-sm-12 content" style="line-height: 1.6;">
                    <h3>About us</h3>
                    <p>Welcome to Travel - Your Passport to Adventure!<br>

                        At Travel, we believe that every journey is a story waiting to be written. Established with a
                        passion for exploration and a commitment to creating unforgettable travel experiences, we are
                        your trusted companion in discovering the world's most captivating destinations. </p>
                    <a href="about.php" class="btn bg-dark" style="color: white;">Read more</a>
                </div>
            </div>
        </div>


    </section>
    <!-- Home about section end -->


    <!-- Home packages section start -->
    <section class="home-packages">


        <div class="container text-center">
            <div class="row" style="padding: 5rem;">
                <div class="col-lg-6 col-sm-12 image">
                    <i class="fa-solid fa-plane fa-7x"></i>
                </div>
                <div class="col-lg-6 col-sm-12 content" style="line-height: 1.6">
                    <h3>Packages</h3>
                    <p>Welcome to our Packages Section!<br>

                        Explore the world with our carefully crafted travel packages that cater to every
                        wanderlust-filled heart. Whether you're seeking adventure, relaxation, or cultural immersion, we
                        have a range of options that will suit your desires. Our expertly curated packages ensure that
                        you make the most of your vacation, creating unforgettable memories to last a lifetime. </p>
                    <a href="package.php" class="btn bg-dark" style="color: white;">Read more</a>
                </div>
            </div>
        </div>


    </section>
    <!-- Home packages section end -->


    <!-- Home offer section start -->

    <section class="home-offer">
        <div class="content-offer" style="">
            <h3>Upto 30% off</h3>
            <p>Embark on an extraordinary voyage with our captivating travel offer that promises to ignite your sense of
                wanderlust and create a tapestry of unforgettable memories. Step into a world where dreams meet reality,
                where every step unveils a new chapter in the story of your journey.</p>
            <a href="book.php" class="btn bg-dark">Read more</a>
        </div>
    </section>

    <!-- Home offer section end -->





    <!-- services section start -->

    <section class="services ">
        <h2 class="heading-title">Our services</h2>

        <div class="box-container">
            <div class="box">
                <div class="box-image">
                    <i class="fa-solid fa-mountain fa-3x"></i>
                    <h4>Adventure</h4>
                </div>
            </div>

            <div class="box">
                <div class="box-image">
                    <i class="fa-solid fa-person fa-3x"></i>
                    <h4>Tour guide</h4>
                </div>
            </div>


            <div class="box">
                <div class="box-image">
                    <i class="fa-solid fa-person-walking-with-cane fa-3x"></i>
                    <h4>Treaking</h4>
                </div>
            </div>

            <div class="box">
                <div class="box-image">
                    <i class="fa-solid fa-fire fa-3x"></i>
                    <h4>Camp fire</h4>
                </div>
            </div>

            <div class="box">
                <div class="box-image">
                    <i class="fa-solid fa-truck-monster fa-3x"></i>
                    <h4>Off roading</h4>
                </div>
            </div>
        </div>


    </section>


    <!-- services section end -->







    <!-- footer section start -->

    <section class="footer">

        <div class="box-container">
            <div class="box">
                <h5>Quick links</h5>

                <a href="home.php"><i class="fas fa-angle-right"></i>home</a>
                <a href="about.php"><i class="fas fa-angle-right"></i>about</a>
                <a href="package.php"><i class="fas fa-angle-right"></i>packages</a>
                <a href="book.php"><i class="fas fa-angle-right"></i>book</a>

            </div>
            <div class="box">
                <h5>Extra links</h5>

                <a href="home.php"><i class="fas fa-angle-right"></i>Ask Questions</a>
                <a href="about.php"><i class="fas fa-angle-right"></i>About us</a>
                <a href="package.php"><i class="fas fa-angle-right"></i>Privacy policy</a>
                <a href="book.php"><i class="fas fa-angle-right"></i>Terms of use</a>

            </div>
            <div class="box">
                <h5>Contact info</h5>

                <a href="home.php"><i class="fas fa-envelope"></i>bhaskarshashwath@gmail.com</a>
                <a href="about.php"><i class="fas fa-envelope"></i>mishrayashaswi0@gmail.com</a>
                <a href="package.php"><i class="fas fa-envelope"></i>tirumalmanav4@gmail.com</a>
                <a href="book.php"><i class="fas fa-envelope"></i>abhijeetpudolkar02@gmail.com</a>

            </div>
            <div class="box">
                <h5>Follow us</h5>

                <a href="home.php"><i class="fa-brands fa-facebook-f"></i>facebook</a>
                <a href="about.php"><i class="fa-brands fa-instagram"></i>instagram</a>
                <a href="package.php"><i class="fa-brands fa-linkedin"></i>linkedIn</a>
                <a href="book.php"><i class="fa-brands fa-youtube"></i>youtube</a>

            </div>

        </div>

        <div class="credit"> Created by <span> Group 6</span> | all rights reserved!</div>
    </section>


    <!-- navbar section end -->


    <!-- javascript -->
    <script src="script.js"></script>

</body>

</html>