<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--main CSS-->
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" href="images/lo.png" type="image/x-icon">
    <title>Burj Al-Noor</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg shadow ">
        <div class="container-fluid justify-content-center ">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                    <a class="navbar-brand " href=""> <img src="images/lo.png" alt="" height="130px"
                            width="160px"></a><br>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
                    <ul class="navbar-nav text-center">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="services.html">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="About Us.html">About Us</a>
                        </li>

                        
                        <li class="nav-item">
                            <a class="nav-link" href="testimonial.html">Testimonial</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="gallery.html">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact Us</a>
                        </li>
<!--
                        <li class="nav-item dropdown">
                            <a class="nav-link " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class="fas fa-user"></i>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="signup.html">Sign Up</a></li>
                                <li><a class="dropdown-item" href="login.html">Log In</a></li>

                            </ul>
                        </li>

-->

                    </ul>
                </div>
            </div>
        </div>
    </nav>




    <!--Signup-->

    <div class="container">

        <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-12">

            </div>
            <div class="col-lg-4 col-md-12 col-sm-12  text-center"
                style="background-color: #f3f3f3; border-top: 4px solid #061415; border-bottom: 4px solid #061415;  border-radius: 40px 0px 40px 0px; margin: 40px 0px 40px 0px;">
                <div class="col-lg-12">
                    <h2 class=" display-6 text-center mt-5">Service Want to Avail</h2>
                    <hr>
                </div>

                <div class="col-lg-12">


                    <form id="contact-form" method="POST" action = "subscribemail.php">
                        <div class="row">
      
                            <div class="col-md-6 ">
                                <input type="text" class="form-control" name="name" placeholder="Name" required="">
                            </div>
                            <div class="col-md-6 ">
                                <input type="phone" class="form-control" name="phone" placeholder="Ph#" required="">
                            </div>
                        </div>
                        <div class="col-md-12 ">
                            <input type="email" class="form-control" name="email" placeholder="Email" required="">
                        </div>
                        <div class="col-md-12 ">
                            <input type="address" class="form-control" name="address" placeholder="Address" required="">
                        </div>
                        <div class="col-md-12 ">
                            <textarea type="Issue" class="form-control" rows="5" name="Issue"
                                placeholder="Issue to resolve" required=""></textarea>
                        </div>


                        <div class="col-md-12 mb-5">
                            <button id="submit" type="submit" class="form-control" name="submit">Submit</button>
                            

                        </div>


                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12">

            </div>
        </div>
    </div>


    <div class="container-fluid management">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mt-5 text-center   ">
                    <h2 id="managementheading">
                        Management Message
                    </h2>
                    <p class=" mt-3">
                    Burj Al-Noor is the best service provider organization in UAE. We intend to give altered services to homes, offices, and production lines with a total maintenance service. We urge our clients to talk about their activities, get a fair idea, and drop input on their encounters with our Burj Al-Noor team. We're one of the confided in companies in Deira Dubai with skill. 
<br><br>
                        Our home maintenance services are spread all across the UAE. All of our handymen are individual businessmen and are confirmed by police, Certified by Work Health Safety, enlisted with public liability insurance, and convey personal ID to furnish you with security and significant serenity. 

                    </p>
                    <ul class="social-icon">
                        <li><a href="" class="fab fa-facebook-f"></a></li>
                        <li><a href="" class="fab fa-twitter"></a></li>
                        <li><a href="" class="fab fa-instagram"></a></li>
                        <li><a href="" class="fab fa-youtube"></a></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
    <div class="whatsapp">
        <a href="https://wa.link/rcptge"><i class="fab fa-whatsapp"></i></a>
    </div>


    <div class="container-fluid management">
        <div class="container">
            <div class="row">
                <div class=" col-lg-12 mt-5">
                    <p>Copyright 2021 All Right Reserved. Design and Developed by Centre of Technological Excellence.
                    </p>
                </div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>


</body>

</html>
<?php