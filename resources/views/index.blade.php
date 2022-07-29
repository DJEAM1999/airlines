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
                        <li><a href="/home" class="active">Home</a></li>
                        <li><a href="/flights">flights</a></li>
                        <li><a href="/partners">partners</a></li>
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

  <!-- ***** Main Banner Area Start ***** -->
  <div class="main-banner">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 offset-lg-1">
          <div class="header-text">
            @if(Auth::user())
            <h2>welcome<em> {{Auth::user()->name}}</em> To <em>AirLines</em> <br> For The Bast Flighing Expience</h2>
            @else
            <h2>welcome To <em>AirLines</em> <br> For The Bast Flighing Expience</h2>
            @endif
            <div class="buttons">
              <div class="big-border-button">
                <a href="/categories">Explore Our Flights</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ***** Main Banner Area End ***** -->


  <section class="featured-items" id="featured-items">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="owl-features owl-carousel" style="position: relative; z-index: 5;">
            <div class="item">
              <div class="thumb">
                <img src="assets/images/w4.jpg" alt="">
                
              </div>
            </div>
            <div class="item">
              <div class="thumb">
                <img src="assets/images/w5.jpg" alt="">
                
              </div>
            </div>
            <div class="item">
              <div class="thumb">
                <img src="assets/images/w12.jpg" alt="">
                
              </div>
            </div>
            <div class="item">
              <div class="thumb">
              <img src="assets/images/im11.jpeg" alt="">
                
              </div>
            </div>
            <div class="item">
              <div class="thumb">
                <img src="assets/images/w41.jpg" alt="">
                
              </div>
            </div>
            <div class="item">
              <div class="thumb">
               <img src="assets/images/im12.jpeg" alt="">
               
              </div>
            </div>
            <div class="item">
              <div class="thumb">
              <img src="assets/images/w51.jpg" alt="">
                
              </div>
            </div>
            <div class="item">
              <div class="thumb">
               <img src="assets/images/w13.jpg" alt="">
               
              </div>
            </div>
            <div class="item">
              <div class="thumb">
                <img src="assets/images/im10.jpeg" alt="">
               
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="popular-categories">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4">
          <div class="section-heading">
            <h6>Recent Flights</h6>
            
          </div>
        </div>
        <div class="col-lg-8">
          <div class="main-button">
            <a href="/flights">View All</a>
            @if(Auth::user())
              @if(Auth::user()->role == "admin")
                <a href="/add">ADD Flight</a>
                <a href="/addpartner">ADD Partner</a>
                <a href="/req">Reservations Requests</a>
              @endif
            @endif
          </div>
        </div>

        

        @foreach($show as $x)
        <div class="col-lg-3 col-sm-6">
          <div class="popular-item">
            <div class="top-content">
              <div class="icon">
                <img src="assets/images/t1.png" alt="">
              </div>
              <div class="right">
                <h4>{{$x->From}} To {{$x->To}}</h4>
                <span><em>{{$x->Num_flight}}</em></span>
              </div>
            </div>
            <div class="thumb">
              <img src="{{asset(Storage::url($x->partnerid->pic))}}" alt="">
            </div>
            <div class="border-button">
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>

  <section class="closed-contests">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading text-center">
            <h4><em>Our Partners</em></h4>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="owl-features owl-carousel" style="position: relative; z-index: 5;">
            <div class="item">
              <div class="closed-item">
                <div class="thumb">
                  <img src="assets/images/Arican.jpg" alt="">
                </div>
                <div class="down-content">
                  <div class="row">
                    <div class="col-7">
                      <h4>88 Participants <br><span>Number Of Artists</span></h4>
                    </div>
                    <div class="col-5">
                      <h4 class="pics">320 Pictures <br><span>Submited Pics</span></h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="closed-item">
                <div class="thumb">
                  <img src="assets/images/UA.jpg" alt="">
                </div>
                <div class="down-content">
                  <div class="row">
                    <div class="col-7">
                      <h4>96 Participants <br><span>Number Of Artists</span></h4>
                    </div>
                    <div class="col-5">
                      <h4 class="pics">410 Pictures <br><span>Submited Pics</span></h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="closed-item">
                <div class="thumb">
                  <img src="assets/images/libyan.png" alt="">
                </div>
                <div class="down-content">
                  <div class="row">
                    <div class="col-7">
                      <h4>96 Participants <br><span>Number Of Artists</span></h4>
                    </div>
                    <div class="col-5">
                      <h4 class="pics">410 Pictures <br><span>Submited Pics</span></h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="closed-item">
                <div class="thumb">
                  <img src="assets/images/wings.png" alt="">
                </div>
                <div class="down-content">
                  <div class="row">
                    <div class="col-7">
                      <h4>74 Participants <br><span>Number Of Artists</span></h4>
                    </div>
                    <div class="col-5">
                      <h4 class="pics">284 Pictures <br><span>Submited Pics</span></h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </section>
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
  <script src="assets/js/wow.js"></script>
  <script src="assets/js/tabs.js"></script>
  <script src="assets/js/popup.js"></script>
  <script src="assets/js/custom.js"></script>

  </body>
</html>