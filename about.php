<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>About us</title>
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

    <script src="https://kit.fontawesome.com/80a3084a21.js" crossorigin="anonymous"></script>

    <style>
    .heading {
        background-size: cover !important;
        background-position: center !important;
        padding-top: 7rem;
        padding-bottom: 4rem;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .heading h1 {
        color: #F2F1F0;
        font-size: 6rem;
        text-transform: uppercase;
        text-shadow: var(--light-black);
    }

    .about-reviews{
        padding: 4rem 0;
    }
    </style>
</head>

<body>
    <!-- navbar section start -->
    <nav class="navbar navbar-expand-lg  bg-light  fixed-top">
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


    <div class="heading"
        style="background-image: url('images/about_top.jpeg'); repeat: no-repeat; background-size: cover;">
        <h1>About us</h1>
    </div>

    <!-- about section start -->

    <section class="about">


        <div class="container text-center">
            <div class="row" style="padding: 3rem;">
                <div class="col-lg-6 col-sm-12">
                    <div class="image">
                        <img src="images/pack.jpeg" alt="image" style="max-width: 96%; max-height:96%; padding:3rem">
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="content">
                        <h3>Why choose us?</h3>
                        <p style="text-align: left;">Discover the world with our exceptional travel agency. With years
                            of expertise, we curate
                            personalized
                            journeys that match your unique interests and desires. From breathtaking landscapes to
                            vibrant cultures,
                            our diverse range of destinations ensures unforgettable adventures. Backed by rave reviews,
                            our 24/7
                            support and exclusive partnerships guarantee a seamless and enriching travel experience.
                            Choose us for
                            unparalleled expertise, customized trips, and a commitment to responsible and sustainable
                            travel. Start
                            your journey today!</p>
                        <p style="text-align: left;">Experience travel like never before with our renowned agency. With
                            a wealth of expertise, we
                            craft
                            tailored trips that cater to your every whim. Explore a spectrum of destinations, each with
                            its own
                            charm, guided by our local insights. Our customer-centric approach, bolstered by accolades
                            and
                            affiliations, promises a worry-free expedition. Elevate your travels with us - your gateway
                            to
                            unparalleled expertise and seamless adventures.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="icon-container text-center" style="padding-bottom: 2rem">
            <div class="row">
                <div class="col-lg-4 col-sm-12"
                    style="background-color: #F2F1F0; border: 2px solid white; padding: 1.5rem 0;">
                    <i class="fa-solid fa-map-location-dot fa-7x" style="color: var(--main-color);"></i>
                    <p style="font-size: 2rem; padding-top: 0.5rem">Top destinations</p>
                </div>
                <div class="col-lg-4 col-sm-12"
                    style="background-color: #F2F1F0; border: 2px solid white; padding: 1.5rem 0;">
                    <i class="fa-solid fa-hand-holding-dollar fa-7x" style="color: var(--main-color);"></i>
                    <p style="font-size: 2rem; padding-top: 0.5rem">Affordable</p>
                </div>
                <div class="col-lg-4 col-sm-12"
                    style="background-color: #F2F1F0; border: 2px solid white; padding: 1.5rem 0;">
                    <i class="fa-solid fa-headset fa-7x" style="color: var(--main-color);"></i>
                    <p style="font-size: 2rem; padding-top: 0.5rem">24/7 Support</p>
                </div>
            </div>
        </div>

    </section>

    <!-- about section end-->



    <!-- reviews section start -->

    <section class="about-reviews text-center">


<h1 style="padding-bottom:2rem; color:#8e44ad; text-shadow:2px black;"> CUSTOMER REVIEWS </h1>
        <div id="testimonial-slide" class="carousel slide">
            <div class="carousel-inner container">
                <div class="carousel-item active row">
                    <div class="col">
                        <img src="images/fe1.jpeg" alt="image"
                            style="max-height: 150px; max-width: 150px; margin-left:auto; margin-right:auto; display:block;">
                    </div>
                    <div class="col-lg-12 col-sm-12">
                        <h3 style="text-align: center; padding: 1rem 0;">Mike - traveller</h3>
                        <p style="text-align: center; padding: 0 10rem;">I recently had the most incredible adventure thanks to the "Travel" booking website. As a
                            passionate adventure seeker, I'm always on the lookout for unique and thrilling experiences,
                            and "Travel" truly exceeded my expectations.
                            Booking my trekking adventure was a seamless process. I appreciated being able to select my
                            preferred dates, and the online booking system made the entire process quick and convenient.
                            The transparency about inclusions, accommodations, and safety measures gave me confidence in
                            my decision.</p>
                    </div>
                </div>
                <div class="carousel-item row">
                    <div class="col-lg-12 col-sm-12">
                        <img src="images/fe3.avif" alt="image"
                            style="max-height: 150px; max-width: 150px; margin-left:auto; margin-right:auto; display:block;">
                    </div>
                    <div class="col">
                        <h3 style="text-align: center; padding: 1rem 0;">Derek - adventurist</h3>
                        <p style="text-align: center; padding: 0 10rem">The website's interface is visually appealing and easy to navigate. I was able to quickly
                            find the camping packages and explore the different options available. The pictures and
                            descriptions helped me get a good sense of what to expect, and I appreciated the variety of
                            camping locations and themes offered.

                            Booking the camping trip was straightforward. I selected the package I liked, chose our
                            preferred dates, and completed the reservation online. The booking process was smooth, but I
                            would have appreciated a bit more flexibility in terms of customizing the package to our
                            group's specific needs.</p>
                    </div>

                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#testimonial-slide"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true" style="background-color: #8e44ad"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#testimonial-slide"
                data-bs-slide="next" style="color: black">
                <span class="carousel-control-next-icon" aria-hidden="true" style="background-color: #8e44ad"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>



    </section>
    <!-- reviews section end -->














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

    <!-- swiper script -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

</body>

</html>