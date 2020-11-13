@extends('admin.master')

@section('title')
    Dashboard
@endsection

@section('main')
      <!-- End of Main Content -->
      <div id="wrapper">


        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

          <!-- Main Content -->
          <div id="content">



            <!-- Begin Page Content -->
            <div class="container-fluid">

              <!-- Page Heading -->
              <h1 class="h3 mb-4 text-gray-800">Loan Request</h1>
              <div class="container">
                <div class="row">
                  <form action="" class="loan-form">
                    <label for="" class="loan-head">LOAN FORM</label>
                    <input type="text" placeholder="First Name" class="loan-input">
                    <input type="text" placeholder="Last Name" class="loan-input">
                    <input type="email" placeholder="Email" class="loan-input">
                    <input type="text" placeholder="Purpose" class="loan-input">
                    <input type="text" placeholder="Address" class="loan-input">
                    <select name="" id="" class="loan-select">
                      <option value="" class="opt">Select country</option>
                      <option value=""></option>
                      <option value=""></option>
                      <option value=""></option>
                      <option value=""></option>
                      <option value=""></option>
                      <option value=""></option>
                      <option value=""></option>
                    </select>
                    <br>
                    <p class="upload">Upload your CAC document</p>
                    <input type="file" id="FILE" name="filename" class="files">
                    <br>
                    <input type="submit" class="submit-1">
                  </form>
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
        <!-- End of Content Wrapper -->

      </div>
   

  </div>
  <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

@endsection

@section('scripts')

@endsection
