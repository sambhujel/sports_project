<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
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
                <h1 style="color:white; padding-top:25px; font-size:25px;">Add Ad</h1>

                @if(session()->has('message'))
                <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">x</button>
                {{session()->get('message')}}
                </div>
                @endif
                <form action="{{url('update',$data->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div style="padding:15px;">
                        <label for="">Field Name:</label>
                        <input type="text" name="name" require="" value="{{$data->field}}" style="color:black;">
                    </div>

                    <div style="padding:15px;">
                        <label for="">Price Nu:</label>
                        <input type="number" step="0.01" name="price" require="" value="{{$data->price}}" style="color:black;">
                    </div>

                    <div style="padding:15px;">
                        <label for="des">Description</label>
                        <textarea id="des" name="des" required="" style="color:black;" value="{{$data->description}}"></textarea>
                    </div>

                    <div style="padding:15px;">
                        <label for="">Old Image</label>
                        <img hight="500" width="350" src="/adimage/{{$data->image}}" alt="">
                    </div>
                    <div style="padding:15px;">
                        <label for="">Change the Image</label>
                        <input type="file" name="file" require="" >
                    </div>

                    <div style="padding:15px;">
                        <input type="Submit" name="" onclick="return confirm('Are You sure?')" class="btn btn-success" >
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
