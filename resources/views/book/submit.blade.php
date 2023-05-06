
<!DOCTYPE html>
<html lang="en">
    <base href="/public">

  <head>

  <style>

      .image {
        margin-top: -380px;
        width: 90%;
        display: flex;
        justify-content: right;
        align-items: center;
      }
      .image img {
        border-radius: 50%;
        width: 250px;
        height: 250px;
      }
    </style>

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
                <a class="nav-link" href="about.html">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact Us</a>
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
            <div class="container" align="leftside">
                <h1 style="color:white; padding-top:25px; font-size:25px;">Detail Of Fields</h1>


                <form action="{{url('submit',['$data' => $data->id])}}" method="POST" enctype="">
                    @csrf



                    <div style="padding:15px;">
                        <label for="">Name:</label>
                        <input type="text" name="submit" require="" value="" style="color:black;">
                    </div>


                    <div style="padding:15px;">
                        <label for="">Email</label>
                        <input type="email" name="email" require="" value="" style="color:black;">
                    </div>

                    <div style="padding:15px;">
                        <label for="">Phone</label>
                        <input type="text" name="number" require="" value="" style="color:black;">
                    </div>

                    <div style="padding:15px;">
                        <label for="">Date</label>
                        <input type="date" name="date" require="" value="" style="color:black;">
                    </div>

                    <div style="padding:15px;">
                        <label for="">Time</label>
                        <input type="time" name="time" require="" value="" style="color:black;">
                    </div>


                    <div style="padding:15px;">
                        <label for="">Sport</label>
                        <input type="sport" name="sport" require="" value="" style="color:black;">
                    </div>



                    <input type="hidden" name="user_id" value="{{ $data->id }}">

                    <div>
                    <input type="submit" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>

            </div>
            <div class="container">
                <div class="content">

                </div>
                <div class="image">
                    <img src="/assets/images/1.png" alt="">
                </div>
            </div><br><br><br><br>

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Copyright &copy; 2020 Sixteen Clothing Co., Ltd.

            - Design: <a rel="nofollow noopener" href="https://templatemo.com" target="_blank">TemplateMo</a></p>
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
