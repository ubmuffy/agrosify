<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Agrosify</title>

  <!-- Bootstrap core CSS -->
  <link href="{{ asset('front/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="{{ asset('front/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
  <link href="{{ asset('front/vendor/simple-line-icons/css/simple-line-icons.css') }}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
  {{-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> --}}

  <!-- Custom styles for this template -->
  <link href="{{ asset('front/css/landing-page.css') }}" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-light bg-light static-top">
    <div class="container py-2">
      <a class="" href="#"><img src="{{ asset('front/img/Agrosify.png') }}" alt="" width="120px"></a>
      <a href="{{ route('login') }}" class="btn btn-primary ml-auto">Sign In</a>
      <a href="{{ route('register') }}" class="btn btn-primary ml-2">Sign Up</a>
      {{-- <a class="btn btn-primary" href="#">Sign In</a> --}}
    </div>
  </nav>


<!-- Masthead -->
<header class="masthead text-white text-center">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <h1 class="mb-5">Agro-Business you can trust! </h1>
          <h6 style="margin-top: -30px; font-size: 20px;margin-bottom: 20px;">Agrosify helps locate verified Agro-Businesses in no time</h6>
        </div>
        <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
          <form>
            <div class="form-row">
              <div class="col-12 col-md-9 mb-2 mb-md-0">
                <input type="email" class="form-control form-control-lg" placeholder="Enter Business name...">
              </div>
              <div class="col-12 col-md-3">
                <button type="submit" class="btn btn-block btn-lg btn-success">Locate</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </header>

  <!-- Icons Grid -->
  <section class="features-icons bg-light text-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class= "access mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <div class="recognize mx-auto mb-2"><img src="{{ asset('front/img/facial recognition.svg') }}" alt="" style="width: 80px; "></div>
            </div>
            <h3>Verify Business Identities</h3>
            <p class="lead mb-0">You can check out the nearest Agro-Business around your location!</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class= "access mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex pb-4">
              <div class="recognize mx-auto"><img src="{{ asset('front/img/shake hands.svg') }}" alt="" style="width: 120px;"></div>
            </div>
            <h3> Clients Exposure</h3>
            <p class="lead mb-0">Have People check up the authenticity of your business!</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class= "access mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <div class="recognize mx-auto mb-2"><img src="{{ asset('front/img/verify.svg') }}" alt="" style="width: 80px; "></div>
            </div>
            <h3>Easy to Use</h3>
            <p class="lead mb-0">This platform is created to be able to navigate easily!</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonials -->
  <section class="text-center bg-light">
    <div class="jumbotron">
        <div class="row w-100">
                <div class="col-md-3">
                    <div class="card border-info mx-sm-1 p-3">
                        <div class="card border-info shadow text-info p-3 my-card" ><span class="fa fa-car" aria-hidden="true"></span></div>
                        <div class="text-info text-center mt-3"><h4>Registered Business</h4></div>
                        <div class="text-info text-center mt-2"><h1>334</h1></div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card border-success mx-sm-1 p-3">
                        <div class="card border-success shadow text-success p-3 my-card"><span class="fa fa-eye" aria-hidden="true"></span></div>
                        <div class="text-success text-center mt-3"><h4>Verified Businesss</h4></div>
                        <div class="text-success text-center mt-2"><h1>232</h1></div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card border-danger mx-sm-1 p-3">
                        <div class="card border-danger shadow text-danger p-3 my-card" ><span class="fa fa-heart" aria-hidden="true"></span></div>
                        <div class="text-danger text-center mt-3"><h4>Countries</h4></div>
                        <div class="text-danger text-center mt-2"><h1>56</h1></div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card border-warning mx-sm-1 p-3">
                        <div class="card border-warning shadow text-warning p-3 my-card" ><span class="fa fa-inbox" aria-hidden="true"></span></div>
                        <div class="text-warning text-center mt-3"><h4>Success Stories</h4></div>
                        <div class="text-warning text-center mt-2"><h1>146</h1></div>
                    </div>
                </div>
             </div>
        </div>
  </section>


  <!-- Testimonials -->
  <section class="testimonials text-center ">
    <div class="container">
      <h1 class="mb-5">Testimonials</h1>
      <div class="row">
        <div class="col-lg-4">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="{{ asset('front/img/testimonials-1.jpg') }}" alt="">
            <h5>Margaret E.</h5>
            <h6>Rice Farmer</h6>
            <p class="font-weight-light mb-0">"Agrosify helped give my business more exposure and now i have more clients! Thanks so much guys!"</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="{{ asset('front/img/testimonials-2.jpg') }}" alt="">
            <h5>Fred S.</h5>
            <h6>Rice Farmer</h6>
            <p class="font-weight-light mb-0">"I have made legit investments through businesses i verified on this platform"</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="{{ asset('front/img/testimonials-3.jpg') }}" alt="">
            <h5>Sarah W.</h5>
            <h6>Rice Farmer</h6>
            <p class="font-weight-light mb-0">"Thanks so much for making this platform available, now I just use my account here to access grants."</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Testimonials -->


  <!-- Call to Action -->
  <section class="call-to-action text-white text-center">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <h2 class="mb-4">Subscribe for Newsletter</h2>
        </div>
        <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
          <form>
            <div class="form-row">
              <div class="col-12 col-md-9 mb-2 mb-md-0">
                <input type="email" class="form-control form-control-lg" placeholder="Enter your email...">
              </div>
              <div class="col-12 col-md-3">
                <button type="submit" class="btn btn-block btn-lg btn-primary">Subscribe</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>



  <!-- Footer -->
  <footer class="footer bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
          <ul class="list-inline mb-2">
            <li class="list-inline-item">
              <a href="#">About</a>
            </li>
            {{-- <li class="list-inline-item">&sdot;</li> --}}
            <li class="list-inline-item">
              <a href="#">Contact</a>
            </li>
            {{-- <li class="list-inline-item">&sdot;</li> --}}
            <li class="list-inline-item">
              <a href="#">Terms of Use</a>
            </li>
            {{-- <li class="list-inline-item">&sdot;</li> --}}
            <li class="list-inline-item">
              <a href="#">Privacy Policy</a>
            </li>
          </ul>
          <p class="text-muted small mb-4 mb-lg-0"> copywrite  &copy; afrosify 2020. All Rights Reserved.</p>
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

  <!-- Bootstrap core JavaScript -->
  {{-- <script src="{{ asset('front/vendor/jquery/jquery.min.js') }}"></script> --}}
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="{{ asset('front/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
{{-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script> --}}

<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>

<script>
    $(document).ready(function(){
    $('.customer-logos').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 3
            }
        }]
    });
});
</script>
</body>

</html>
