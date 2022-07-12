<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="author" content="templatemo">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <title>AirLines</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/templatemo-snapx-photography.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
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
                      <img src="{{asset('assets/images/flight.jpg')}}" width="5px" height="50px" alt="SnapX Photography Template">
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
        <!-- Social Login -->
        <div class="social_login">
            <div class="">
                <a href="#" class="social_box fb">
                    <span class="icon"><i class="fab fa-facebook"></i></span>
                    <span class="icon_title">Connect with Facebook</span>

                </a>

                <a href="#" class="social_box google">
                    <span class="icon"><i class="fab fa-google-plus"></i></span>
                    <span class="icon_title">Connect with Google</span>
                </a>
            </div>

            <div class="centeredText">
                <span>Or use your Email address</span>
            </div>

            <div class="action_btns">
                <div class="one_half"><a href="#" id="login_form" class="btn">Login</a></div>
                <div class="one_half last"><a href="#" id="register_form" class="btn">Sign up</a></div>
            </div>
        </div>

        <!-- Username & Password Login form -->
        <div class="user_login">
            <form action="" method="post">
                <label>Email / Username</label>
                <input name="username" type="text" id="username" />
              <br />

                <label>Password</label>
                <input name="password" type="password" id="password" />
              <br />

                <div class="checkbox">
                    <input id="remember" type="checkbox" />
                    <label for="remember">Remember me on this computer</label>
                </div>

                <div class="action_btns">
                    <div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div>
                    <div class="one_half last"><button type="submit" class="btn btn_red">Login</button></div>
                </div>
            </form>

            <a href="#" class="forgot_password">Forgot password?</a>
        </div>

        <!-- Register Form -->
        <div class="user_register">
            <form action="" method="post">
                <label>Username</label>
                <input name="username" type="text" id="username" />
                <br />

                <label>Email Address</label>
                <input name="email" type="email" id="email" />
                <br />

                <label>Password</label>
                <input name="password" type="password" id="password" />
                <br />

                <div class="checkbox">
                    <input id="send_updates" type="checkbox" />
                    <label for="send_updates">Send me occasional email updates</label>
                </div>

                <div class="action_btns">
                    <div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div>
                    <div class="one_half last"><button type="submit" class="btn btn_red">Register</button></div>
                </div>
            </form>
        </div>
        
    </section>
  </div>
    <section class="contact-us">
    <div class="container">
        @if(session()->has('message'))
        <div class="alert alert-success">
         {{ session()->get('message') }}
        </div>
        @endif
    
        <div class="col-lg-12">
          <form id="contact" action="{{url('/updateflight/'.$flight->id)}}" method="post">
              @csrf
            <div class="row">
              <div class="col-lg-6">
                <fieldset>
                  <input type="text" name="Fnum" id="name" placeholder="Number Of Floight" value="{{$flight->Num_flight}}" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <input type="text" name="From" value="{{$flight->From}}" id="telephone" placeholder="From..." autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <input type="text" name="To" value="{{$flight->To}}" id="email" placeholder="To..." required>
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <input type="date" name="Date" id="email" value="{{$flight->Date}}" placeholder="Date..." required>
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <input type="time" name="Time" id="email" value="{{$flight->Time}}" placeholder="Time..." required>
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                <input typ="float" name="Price" id="email" value="{{$flight->Price}}" placeholder="Price..." required>
                </fieldset>
             </div>
            <div class="col-lg-6">
                <fieldset>
                  <select name="Part" class="form-control mb-3">
                      <option value="{{$flight->partnerid->id}}">{{$flight->partnerid->name}}</option>
                    @foreach ($pr as $p)
                    <option value="{{$p->id}}">
                      {{$p->name}}
                    </option>
                    @endforeach
                  </select>
                </fieldset>
              </div>
              
              <div class="col-lg-12 ">
                <fieldset>
                  <textarea name="DIC" id="message" placeholder="Discreption...">{{$flight->Discreption}}</textarea>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <button type="submit" id="form-submit" class="orange-button">Edit Flight</button>
                </fieldset>
              </div>
              <div class="col-lg-12 mt-4">
                <fieldset>
                  <a href="/home"><button type="button" id="form-submit" class="orange-button">Back</button></a>
                </fieldset>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <footer class="">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>Copyright © 2022 
        </div>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>

  <script src="{{asset('assets/js/isotope.min.js')}}"></script>
  <script src="{{asset('assets/js/owl-carousel.js')}}"></script>
  <script src="{{asset('assets/js/tabs.js')}}"></script>
  <script src="{{asset('assets/js/popup.js')}}"></script>
  <script src="{{asset('assets/js/custom.js')}}"></script>

  </body>
</html>