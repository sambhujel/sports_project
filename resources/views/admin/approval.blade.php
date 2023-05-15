<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Online Sport Field Booking<</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="admin/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="admin/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="admin/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="admin/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="admin/assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">

      </div>
      <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('admin.naver')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('admin.naver')
        <!-- partial -->
        <div class="">
            <div class="container" align="center">
            @if(session()->has('message'))
                <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">x</button>
                {{session()->get('message')}}
                </div>
                @endif
                <h1 style="color:white; padding-top:20px; font-size:20px;">Approval subadmin</h1>
                <table style="width: 70%; height: 70%">

                <tr style ="background-color:green;">
                    <td style="padding: 10px;">name</td>
                  
                    <td style="padding: 10px;">email</td>
                    <td style="padding: 10px;">phone</td>
                    <td style="padding: 10px;">sport</td>
                    <td style="padding: 10px;">status</td>
                    <td style="padding: 10px;">Approved</td>
                    <td style="padding: 10px;">Cancel</td>
                    <td style="padding: 10px;">Send Mail</td>

                </tr>
                
                @foreach($data as $data)
                <tr align="left" style ="background-color:black">
                    <td style="padding: 10px;">{{$data->name}}</td>
                    
                    <td style="padding: 10px;">{{$data->email}}</td>
                    <td style="padding: 10px;">{{$data->phone}}</td>
                    <td style="padding: 10px;">{{$data->sport}}</td>
                    <td style="padding: 10px;">{{$data->status}}</td>

                    <td style="padding: 10px;"> <a href="{{url('approved',$data->id)}}" onclick="return confirm('Are You sure,you want to approved?')" class="btn btn-success">approved</a></td>
                    <td style="padding: 10px;"> <a href="{{url('canceled',$data->id)}}" onclick="return confirm('Are You sure,you want to cancled?')" class="btn btn-danger">canceled</a></td>
                    <td style="padding: 10px;"> <a href="{{url('email',$data->id)}}" onclick="return confirm('Are You sure,you want to send mail?')" class="btn btn-primary">SendMail</a></td>
                </tr>
             @endforeach
                </table>



            </div>
        </div>

        <!-- main-panel ends -->
      </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>
