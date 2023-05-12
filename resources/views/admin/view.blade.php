<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<<<<<<< HEAD
    <title>Online Sport Field Booking</title>
=======
    <title>Admin</title>
>>>>>>> c79b4bafb5ea4ab874494c1d18fe0aebf3882129
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
            @if(session()->has('message'))
                <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">x</button>
                {{session()->get('message')}}
                </div>
                @endif
                <h1 style="color:white; padding-top:25px; font-size:25px;">Delete subadmin account</h1>
                <table style="width: 100%;">

                <tr style ="background-color:gray;">
                    <td style="padding: 20px;">Name</td>
                    <td style="padding: 20px;">Email</td>
                    <td style="padding: 20px;">Phone</td>
                    <td style="padding: 20px;">DOB</td>
                    <td style="padding: 20px;">Sport</td>
                    <td style="padding: 20px;">Action</td>
                </tr>

                @foreach($data as $data)

                <tr align="center" style ="background-color:black">
                    <td style="padding: 20px;">{{$data->name}}</td>
                    <td style="padding: 20px;">{{$data->email}}</td>
                    <td style="padding: 20px;">{{$data->phone}}</td>
                    <td style="padding: 20px;">{{$data->DOB}}</td>
                    <td style="padding: 20px;">{{$data->sport}}</td>


                    @if($data->usertype=="0")
                    <td style="padding: 20px;"> <a href="{{url('/deleteuser',$data->id)}}" onclick="return confirm('Are You sure?')" class="btn btn-danger">Delete</a></td>
                    @else
                    <td style="padding: 20px;">Admin</td>
                    @endif

                </tr>
                @endforeach

                </table>

        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>

  </body>
</html>
