<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: database/login.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: database/login.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>DonateKart</title>
        <link
            rel="shortcut icon"
            href="images/united.png"
            type="image/x-icon"
        />
        <!-- Font Family -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap"
            rel="stylesheet"
        />
        <link
            href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&display=swap"
            rel="stylesheet"
        />

        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
            crossorigin="anonymous"
        />
        <link rel="stylesheet" href="css/style.css" />
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark top-navbar">
            <div class="container">
                <a class="navbar-brand" href="#">DonateKart</a>
                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarNav"
                    aria-controls="navbarNav"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div
                    class="collapse navbar-collapse justify-content-end"
                    id="navbarNav"
                >
                    <ul class="navbar-nav gap-3">
                        <li class="nav-item">
                            <a
                                class="nav-link active text-black"
                                aria-current="page"
                                href="#"
                                >Home</a
                            >
                        </li>
                        <li class="nav-item">
                            <a
                                class="nav-link text-black"
                                href="ngo.php"
                                >NGOs</a
                            >
                        </li>
                        <li class="nav-item">
                            <a
                                class="nav-link text-black"
                                href="EVENTS.html"
                                >Events</a
                            >
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link text-black" href="#">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a
                                class="nav-link text-black"
                                href="issuealert.html"
                                >Register an issue</a
                            >
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        <section class="container-fluid">
            <div class="container u-mt-large">
                <div class="row">
                    <div class="col-md-6 col-sm-12 text-black">
                        <h3 class="u-fs-large ">
                            Do your little bit of good where you are
                        </h3>
                        <figure class="mt-4">
                            <blockquote class="blockquote">
                                <p>
                                   If you are a new user,then create a new account!
                                </p>
                            </blockquote>
                            
                        </figure>
                        <a
                            href="login.html"
                            class="mt-4 d-inline-block btn btn-primary btn-lg rounded-pill fs-5 ps-4 pe-4 u-width-small-100per"
                            >LOGIN</a
                        >
                        <a
                            href="signup.html"
                            class="mt-4 d-inline-block btn btn-primary btn-lg rounded-pill fs-5 ps-4 pe-4 u-width-small-100per"
                            >SIGN UP</a
                        >
                    </div>
                    
                    <div class="mt-sm-5 mt-md-0 col-md-6 col-sm-12 u-mt-xs-5">
                        <img
                            src="images/img1.png"
                            alt="Man helping homeless person image"
                            class="u-width-100per"
                        />
                    </div>
                </div>
            </div>
        </section>


        <section class="container-fluid u-mt-large">
            <div class="row">
                <div class="col-6 ps-0 making-difference-image"></div>
                <div class="col-6">
                    <h2 class="making-difference-heading u-fs-medium">
                        About Us
                    </h2>
                     <p class="fs-4 mt-5 text-black text-opacity-75">
                        We will act as a bridge for connecting volunteers to numerous non-governmental organizations (NGOs) that work in a variety of areas, such as assisting orphanages, illiterate people, cancer patients, and so on.
                        They may be able to provide financial assistance that will be used to assist various non-governmental organisations.

                        </p>
                    </div>
            </div>
        </section>


        
        <section class="container-fluid u-mt-large">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12 mt-sm-5 mt-md-0 text-black">
                        <div>
                            <h1
                                class="u-fs-medium fw-bold aim-heading d-inline-block"
                            >
                                Our Services
                            </h1>
                            
                        </div>

                        <p class="fs-4 mt-5 text-black text-opacity-75">
                            We want to provide a one stop solution for providing
                            a collaborative environment to everyone who want to
                            help!
                        </p>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <img
                            src="images/img2.png"
                            alt="aim"
                            class="u-width-100per"
                        />
                    </div>
                </div>
            </div>
        </section>


        

        <script src="js/indexapp.js"></script>
    </body>
</html>
