<!DOCTYPE html>
<html lang="en">
  <head>
    <style type="text/css">
        label
        {
            display:inline-block;
            width:200px;
        }
    </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Online Sport field Booking</title>
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
            <div class="container" align="center">
                <h1 style="color:white; padding-top:25px; font-size:25px;">Add subadmin</h1>

                @if(session()->has('message'))
                <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">x</button>
                {{session()->get('message')}}
                </div>
                @endif
                <form action="{{url('upload_subadmin')}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div style="padding:15px;">
                        <label for="">Name:</label>
                        <input type="text" name="name" require="" style="color:black;">
                    </div>
                    

                    <div style="padding:15px;">
                        <label for="des">CID:</label>
                        <input type="number" name="CID NO" require="" style="color:black;">
                    </div>


                    <div style="padding:15px;">
                        <label for="">Email:</label>
                        <input type="text" name="email" require="" style="color:black;">
                    </div>
                    


                    <div style="padding:15px;">
                        <label for="">Phone Number:</label>
                        <input type="number" name="phone number" require="" style="color:black;">
                    </div>

                    
                    <div style="padding:15px;">
                        <input type="Submit" name="" class="btn btn-success" >
                    </div>

                </form>




            </div>
        </div>

        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>

  </body>
</html>
