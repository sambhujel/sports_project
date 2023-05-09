
<!DOCTYPE html>
<html lang="en">

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
          <a class="navbar-brand" href="{{ route('welcome') }}"><h2>OS<em>FB</em>-Sports</h2></a>
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
    </header>

    <div class="container-fluid page-body-wrapper">
            <div class="container" align="center">
            @if(session()->has('message'))
                <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">x</button>
                {{session()->get('message')}}
                </div>
                @endif
                <h1 style="color:white; padding-top:25px; font-size:25px;">Delete Add</h1><br><br><br>

                <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search" action="{{url('search')}}" method="get">
                    @csrf
                  <input type="search" class="form-control" placeholder="Search products" name="search">
                  <input type="submit" value="search" class="btn btn-success" >
                </form>
                <table style="width: 100%;">

                <tr style ="background-color:gray;">
                    <td style="padding: 20px;">Serial No:</td>
                    <td style="padding: 20px;">Name</td>
                    <td style="padding: 20px;">Email</td>
                    <td style="padding: 20px;">Phone</td>
                    <td style="padding: 20px;">Sport</td>
                    <td style="padding: 20px;">Action</td>
                </tr>


                <?php
                // Convert collection to array
                $data_array = $data->toArray();

                // Define the condition for filtering
                $condition = function($item) {
                return $item['usertype'] === "0"; // Only include items where usertype is "0"
                };

                // Filter the data array
                $data_filtered = array_filter($data_array, $condition);
                ?>

                @foreach($data_filtered as $data)
                <tr align="center" style ="background-color:black">
                    <td style="padding: 20px; color:white">{{$data['id']}}</td>
                    <td style="padding: 20px; color:white">{{$data['name']}}</td>
                    <td style="padding: 20px; color:white">{{$data['email']}}</td>
                    <td style="padding: 20px; color:white">{{$data['phone']}}</td>
                    <td style="padding: 20px; color:white">{{$data['sport']}}</td>
                    <td style="padding: 20px;">
                    <a href="{{url('book',$data['id'])}}" class="btn btn-primary">View</a>
                    </td>
                </tr>
                @endforeach

                </table>






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
