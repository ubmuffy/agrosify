@extends('admin.master')

@section('title')
    Dashboard
@endsection

@section('main')

<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

    
      <!-- Begin Page Content -->
      <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Verify identities</h1>
        <div class="container">
          <div class="div row">
            <div>
               <form action="" class="activate-gen">
                <label for="" class="activite-head">Signup Form</label>
                <br>
                <input type="text" placeholder="first Name" class="place2">
                <input type="text" placeholder="Last Name" class="place2"><br>
                <input type="text" placeholder="Email" class="place1">
                <input type="text" placeholder="Company Name" class="place1">
                <!-- <input type="text" placeholder="Agro sector" class="place1"> -->
                <select name="" id="" class="select-1">
                  <option value="">Agro selector</option>
                  <option value="">Fishery</option>
                  <option value="">Crops and Seeds</option>
                  <option value="">Poultry</option>
                  <option value="">Forestry</option>
                  <option value="">Aquaculture</option>
                  <option value="">Agro Feeds</option>
                  <option value="">Fertilizer Services</option>
                  <option value="">Vegetable Oils</option>
                  v
                </select>
                <input type="password" placeholder="Password" class="place1">
                <input type="submit" class="submit">
                <br>
                <a href="login-verify.html" class="linking">Login Form</a>
                <a href="#" class="linking">forgot-password</a>
               </form>
               a
            </div>
          </div>
        </div>

      </div>
      <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <!-- Footer -->
    <footer class="sticky-footer bg-white">
      <div class="container my-auto">
        <div class="copyright text-center my-auto">
          <span>Copyright &copy; Your Website 2020</span>
        </div>
      </div>
    </footer>
    <!-- End of Footer -->

  </div>

      <!-- Footer -->
    <footer class="sticky-footer bg-white">
      <div class="container my-auto">
        <div class="copyright text-center my-auto">
          <span>Copyright &copy; Your Website 2020</span>
        </div>
      </div>
    </footer>
    <!-- End of Footer -->



@endsection

@section('scripts')

@endsection
