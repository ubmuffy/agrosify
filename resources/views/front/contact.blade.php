<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="images/Contact Us-07.png" type="image/x-icon">
    <link rel="stylesheet" href="css/contact.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="icon" href="media/indexMedia/worx logo.png">
    <link rel="stylesheet" href="css/hamburger.css">

    <title>Contact Us</title>
</head>

<body>
    <header class="">
  <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#"><img src="img/Agrosify.png" alt="" style="width: 50%;"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About Us </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="#">Contact Us </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sign In</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <section class="contact-section d-flex justify-content-center align-content-center banner">
        <div class="back-div">
            <img src="" class="back w-100">
        </div>
        <div class="text">
            <h1 class="contact-heading">Contact Us</h1>
        </div>
    </section>
    <!-- contact container -->
    <div id="contact" class="form-2">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 pr-10 contact-form">
                    <!-- contact form begin -->
                    <form id="contactForm" data-toggle="validator" data-focus="false" novalidate="true">
                        <h2 class="heading">Send A Message</h2>
                        <div class="form-group">
                            <input type="text" class="form-control-input py-3 px-3 w-100" id="cname" placeholder="Name"
                                required>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control-input py-3 px-3 w-100" id="cemail"
                                placeholder="Mail" required>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control-textarea py-3 px-3 w-100" id="cmessage" required
                                placeholder="Message"></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group d-flex justify-content-end send">
                            <button type="send" class="send py-3 px-5 bg-color-dark" id="send">SEND</button>
                        </div>
                    </form>
                </div>
                <!-- contact form end -->
                <div class="col-sm-4 contact-info">
                    <div class="text-container">
                        <h2 class="heading maroon-color">Pay Us A Visit</h2>
                        <h5>Uyo</h5>
                        <p>Akees Plaza, Opp Ibom Hall, <br> IBB Avenue, Uyo.</p>
                        <h5>Port-Harcourt</h5>
                        <p>Maxxy Plaza, SARS Road by <br> Rukpokwu, <br> Big Treat, Obio Akpor, Port-Harcourt.</p>
                        <h2 class="get heading">Get In Touch</h2>
                        <h5>Mail</h5>
                        <ul class="list-unstyled li-space-lg">
                            <li><i class="mail"></i><a href="https://accounts.google.com">info@agrosify.com</a>
                            </li>
                        </ul>
                        <h5>Phone</h5>
                        <ul class="list-unstyled li-space-lg">
                            <li><i class="fas fa-phone"></i><a href="tel:08793671000">+234 701 6703 651</a></li>
                            <li><i class="fas fa-phone"></i><a href="tel:08793672000">+234 817 9490 701</a></li>
                        </ul>

                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
                    <ul class="list-inline mb-2">
                        <li class="list-inline-item">
                            <a href="#">About</a>
                        </li>
                        <li class="list-inline-item">&sdot;</li>
                        <li class="list-inline-item">
                            <a href="#">Contact</a>
                        </li>
                        <li class="list-inline-item">&sdot;</li>
                        <li class="list-inline-item">
                            <a href="#">Terms of Use</a>
                        </li>
                        <li class="list-inline-item">&sdot;</li>
                        <li class="list-inline-item">
                            <a href="#">Privacy Policy</a>
                        </li>
                    </ul>
                    <p class="text-muted small mb-4 mb-lg-0">&copy; Your Website 2020. All Rights Reserved.</p>
                </div>
                <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item mr-3">
                            <a href="#">
                                <i class="fab fa-facebook fa-2x fa-fw"></i>
                            </a>
                        </li>
                        <li class="list-inline-item mr-3">
                            <a href="#">
                                <i class="fab fa-twitter-square fa-2x fa-fw"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="fab fa-instagram fa-2x fa-fw"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
