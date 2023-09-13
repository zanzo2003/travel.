<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Booking</title>
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
        padding-bottom: 2rem;
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

    .booking{
        padding: 3rem 10rem;
    }

    .booking .book-form{
        padding: 2rem;
        background-color: #eee;
        margin:1rem 1rem 1rem 3rem;
    }

    .booking .book-form .flex{
        display: flex;
        flex-wrap: wrap;
        gap: 2rem;
    }
    .booking .book-form .flex .input-box{
        flex: 1 1 30rem;
    }
    .booking .book-form .flex .input-box input{
        width: 100%;
        padding:1rem 1rem;
        font-size: 0.75rem;
        color: #777;
        text-transform: none;
        margin-top: 1.5rem;
        border: .1rem solid var(--black);
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


    <div class="heading" style="background-image: url('images/pck1.jpeg'); repeat: no-repeat; background-size: cover">
        <h1>Booking</h1>
    </div>



    <!-- booking section start -->

    <section class="booking">


        <h1 class="heading-title">BOOK YOUR TRIP!</h1>

        <form class="book-form" method="post" action="book_form.php">

            <div class="flex">

                <div class="input-box">
                    <span>Name : </span>
                    <input type="text" placeholder="Enter your name" name="name">
                </div>

                <div class="input-box">
                    <span>Email: </span>
                    <input type="email" placeholder="Enter your email" name="email">
                </div>

                <div class="input-box">
                    <span>Ph.No : </span>
                    <input type="number" placeholder="Phone number" name="phone">
                </div>

                <div class="input-box">
                    <span>Address : </span>
                    <input type="text" placeholder="Enter your address" name="address">
                </div>

                <div class="input-box">
                    <span>Where to : </span>
                    <input type="text" placeholder="Enter your destination" name="location">
                </div>

                <div class="input-box">
                    <span>No of guests : </span>
                    <input type="number" placeholder="No of guests" name="guests">
                </div>

                <div class="input-box">
                    <span>Arrival date: </span>
                    <input type="date" placeholder="Date of arrival" name="arrivals">
                </div>

                <div class="input-box">
                    <span>Departure date : </span>
                    <input type="date" placeholder="Date of departure" name="departure">
                </div>
                <br>

                <input type="submit" value="submit" class="btn bg-dark" name="send" style="color: white; margin-left:auto; margin-right: auto;">

            </div>

        </form>


    </section>
    <!-- booking section end -->

















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