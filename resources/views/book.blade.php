
<!DOCTYPE html>
<html lang="en">
    <base href="/public">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Online Sport Field Booking</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!--

TemplateMo 546 Sixteen Clothing

https://templatemo.com/tm-546-sixteen-clothing

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="{{ route('welcome') }}"><h2>OS<em>FB</em>-Deatil</h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">

              <li class="nav-item">
                <a class="nav-link" href="{{url('sport')}}">Sports</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="{{url('about')}}">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('contact')}}">Contact Us</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">Register</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header><br><br><br>

     <div class="container-fluid page-body-wrapper">

                <h1 style="color:white; padding-top:25px; font-size:25px;">Detail Of Fields</h1>


                <form action="{{url('update',$data->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <table style="flod:right;">
                    <tr style ="background-color:gray;">
                    <td style="padding: 20px;">Serial No:</td>
                    <td style="padding: 20px;">Owner Name</td>
                    <td style="padding: 20px;">Location</td>
                    <td style="padding: 20px;">Email</td>
                    <td style="padding: 20px;">Phone</td>
                    <td style="padding: 20px;">Sport</td>
                    <td style="padding: 20px;">Price Nu:</td>
                    <td style="padding: 20px;">Opening</td>
                    <td style="padding: 20px;">Closing</td>
                    <td style="padding: 20px;">Description</td>
                    <td style="padding: 20px;">Action</td>
                </tr>

                <tr align="center" style ="background-color:black">
                    <td style="padding: 20px; color:white">{{$data->id}}</td>
                    <td style="padding: 20px; color:white">{{$data->name}}</td>
                    <td style="padding: 20px; color:white">{{$data->address}}</td>
                    <td style="padding: 20px; color:white">{{$data->email}}</td>
                    <td style="padding: 20px; color:white">{{$data->phone}}</td>
                    <td style="padding: 20px; color:white">{{$data->sport}}</td>
                    <td style="padding: 20px; color:white">{{$data->price}}/-</td>
                    <td style="padding: 20px; color:white">{{$data->time}}</td>
                    <td style="padding: 20px; color:white">{{$data->time}}</td>
                    <td style="padding: 20px; color:white">{{$data->description}}</td>
                    <td style="padding: 20px;"> <a href="{{url('submit',$data->id)}}" class="btn btn-primary">Book</a></td>
                </tr>

            </table><br><br>

           <h2>Time</h2>
            <form action="{{url('update',$data->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <table>
                    <tr style ="background-color:gray;">
                    <td style="padding: 20px;">8-9 am</td>
                    <td style="padding: 20px;">9-10 am</td>
                    <td style="padding: 20px;">10-11 am</td>
                    <td style="padding: 20px;">11 am - 12 pm</td>
                    <td style="padding: 20px;">12-1 pm</td>
                    <td style="padding: 20px;">2-3 pm</td>
                    <td style="padding: 20px;">3-4 pm</td>
                    <td style="padding: 20px;">4-5 pm</td>
                    <td style="padding: 20px;">5-6 pm</td>
                    <td style="padding: 20px;">6-7 pm</td>
                    <td style="padding: 20px;">7-8 pm</td>
                    <td style="padding: 20px;">9-10 pm</td>
                    <td style="padding: 20px;">10-11 pm</td>

                </tr>

                <tr align="center" style ="background-color:black">
                    <td style="padding: 20px; color:white">{{$data->time1}}</td>
                    <td style="padding: 20px; color:white">{{$data->time2}}</td>
                    <td style="padding: 20px; color:white">{{$data->time3}}</td>
                    <td style="padding: 20px; color:white">{{$data->time4}}</td>
                    <td style="padding: 20px; color:white">{{$data->time5}}</td>
                    <td style="padding: 20px; color:white">{{$data->time6}}</td>
                    <td style="padding: 20px; color:white">{{$data->time7}}</td>
                    <td style="padding: 20px; color:white">{{$data->time8}}</td>
                    <td style="padding: 20px; color:white">{{$data->time9}}</td>
                    <td style="padding: 20px; color:white">{{$data->times}}</td>
                    <td style="padding: 20px; color:white">{{$data->times1}}</td>
                    <td style="padding: 20px; color:white">{{$data->times2}}</td>
                    <td style="padding: 20px; color:white">{{$data->times3}}</td>

                </tr>

            </table><br>

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Have Fun Life; Jigme Namgyel Engineering College.


            </div>
          </div>
        </div>
      </div>
    </footer>



    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>


    <script language = "text/Javascript">
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>


  </body>

</html>
