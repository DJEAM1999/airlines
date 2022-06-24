<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="author" content="templatemo">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <title>AirLines</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-snapx-photography.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<!--

TemplateMo 576 SnapX Photography

https://templatemo.com/tm-576-snapx-photography

-->
  </head>

<body>


  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <nav class="main-nav">
                      <!-- ***** Logo Start ***** -->
                      <a href="/home" class="logo">
                      <img src="assets/images/flight.jpg" width="5px" height="50px" alt="SnapX Photography Template">
                      </a>
                      <!-- ***** Logo End ***** -->
                      <!-- ***** Menu Start ***** -->
                      <ul class="nav">
                          <li><a href="/home">Home</a></li>
                          
                          <li><a href="/flights">Flights</a></li>
                          <li><a href="/gallary">Gallary</a></li>
                      </ul>   
                      @if(Auth::user())
                    <div class="border-button">
                      <a id="modal_trigger" href="{{ route('logout') }}"onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();" class="sign-in-up"><i class="fa fa-user"></i> log out</a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                     @csrf
                      </form>
                    </div>
                    @else
                    <div class="border-button">
                      <a id="modal_trigger" href="#modal" class="sign-in-up"><i class="fa fa-user"></i> Sign In/Up</a>
                    </div>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    @endif
                      <!-- ***** Menu End ***** -->
                  </nav>
              </div>
          </div>
      </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div id="modal" class="popupContainer" style="display:none;">
    <div class="popupHeader">
        <span class="header_title">Login</span>
        <span class="modal_close"><i class="fa fa-times"></i></span>
    </div>

    <section class="popupBody">
        <div class="social_login">
            <div class="centeredText">
                <span>login // signup</span>
            </div>

            <div class="action_btns">
                <div class="one_half"><a href="#" id="login_form" class="btn">Login</a></div>
                <div class="one_half last"><a href="#" id="register_form" class="btn">Sign up</a></div>
            </div>
        </div>

        <!-- Username & Password Login form -->
        <div class="user_login">
            <form action="{{ route('login') }}" method="post">
              @csrf
                <label>Email </label>
                <input name="email" type="text" id="username" />
              <br />

                <label>Password</label>
                <input name="password" type="password" id="password" />
              <br />

                <div class="action_btns">
                    <div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div>
                    <div class="one_half last"><button type="submit" class="btn btn_red">Login</button></div>
                </div>
            </form>
        </div>

        <!-- Register Form -->
        <div class="user_register">
            <form action="{{ route('register') }}" method="post">
              @csrf
                <label>Name</label>
                <input name="name" type="text" id="username" />
                <br />

                <label>Email Address</label>
                <input name="email" type="email" id="email" />
                <br />

                <label>Password</label>
                <input name="password" type="password" id="password" />
                <br />
                <label>Confirm Password</label>
                <input name="password_confirmation" type="password" id="password" />
                <br />

                <div class="action_btns">
                    <div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div>
                    <div class="one_half last"><button type="submit" class="btn btn_red">Register</button></div>
                </div>
            </form>
        </div>
        
    </section>
  </div>


  <div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2 header-text">
          <h2>See All  <em>Flights</em></h2>
          <p>You are allowed to freely use SnapX Photography Template for your commercial websites. You are not allowed to redistribute the template ZIP file on any other Free CSS websites.</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Cards -->
  <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 mt-5" >
          <div class="main-button" stayl='margin-left: 580px;'>
            @if(Auth::user())
              @if(Auth::user()->role == "admin")
                <a href="/add" style='margin-left: 1060px;'>ADD</a>
              @endif
            @endif
          </div>
        </div>
      </div>
   </div>

  @foreach($show as $x)
  <div class="container mt-5">
    <div class="card mb-3" >
        <div class="row ">
          <div class="col-lg-3">
            <img src="assets/images/w2.jpg" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-lg-9">
              <div class="card-body">
                <h5 class="card-title">{{$x->From}} TO  {{$x->To}}</h5>
                <p class="card-text">{{$x->Discreption}}</p>
                <p class="card-text"><small class="text-muted">Time:- {{$x->Time}}</small></p>
                <div class="col-lg-6">
                  <div class="main-button">
                  @if(Auth::user())
                    @if(Auth::user()->role == "user")
                      <a href="/flights">Reservation</a>
                    @endif
                  @endif
                    @if(Auth::user())
                      @if(Auth::user()->role == "admin")
                        <a href="/del/{{$x->id}}">DELETE</a>
                      @endif
                    @endif
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
   @endforeach

   <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>Copyright © 2022 </p> 
          
        </div>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/tabs.js"></script>
  <script src="assets/js/popup.js"></script>
  <script src="assets/js/custom.js"></script>

  </body>
</html>