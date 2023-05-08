<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
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
        @include('sadmin.sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('sadmin.naver')
        <!-- partial -->

        <div class="container-fluid page-body-wrapper">
            <div class="container" align="center">
            @if(session()->has('message'))
                <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">x</button>
                {{session()->get('message')}}
                </div>
                @endif
                <h1 style="color:white; padding-top:25px; font-size:25px;">Client's</h1>
                <table style="width: 100%;">

                <tr style ="background-color:gray;">
                    <td style="padding: 20px;">Name</td>
                    <td style="padding: 20px;">Email</td>
                    <td style="padding: 20px;">Phone</td>
                    <td style="padding: 20px;">date</td>
                    <td style="padding: 20px;">time</td>
                    <td style="padding: 20px;">Sport</td>
                </tr>

                @foreach($data as $submit)
                @if($submit->id == $submit->serial)

                <tr align="center" style ="background-color:black">
                    <td style="padding: 20px;">{{$submit->name}}</td>
                    <td style="padding: 20px;">{{$submit->email}}</td>
                    <td style="padding: 20px;">{{$submit->phone}}</td>
                    <td style="padding: 20px;">{{$submit->date}}</td>
                    <td style="padding: 20px;">{{$submit->time}}</td>
                    <td style="padding: 20px;">{{$submit->sport}}</td>

                </tr>

                @endif
                @endforeach

                </table>



  </body>
</html>
