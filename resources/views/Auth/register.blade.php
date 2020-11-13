<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Agrosify - Register</title>


  <link href="{{ asset('admin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="icon" href="{{ asset('admin/img/logo-small.png') }}">


  <link href="{{ asset('admin/css/sb-admin-2.css') }}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-register-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                  </div>
                  <form class="user" method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group">
                      <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="exampleInputEmail" name="fname" placeholder="First Name">
                      </div>

                      <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="exampleInputEmail" name="lname" placeholder="Last Name">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="exampleInputEmail" name="companyName" placeholder="Company Name">
                      </div>
                    </div>
                    <div class="form-group">
                      <input type="email" class="form-control form-control-user" id="exampleInputEmail" name="email" placeholder="Email Address">
                    </div>
                    <div class="form-group">
                      <div class="form-group">
                        <input type="password" class="form-control form-control-user" id="exampleInputEmail" name="password" placeholder="Password">
                      </div>
                    </div>
                    <button class="btn btn-primary btn-user btn-block" type="submit">Register Account</button>

                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="{{ __('login') }}">Already have an account? Login!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('admin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('admin/js/sb-admin-2.min.js') }}"></script>


</body>

</html>
