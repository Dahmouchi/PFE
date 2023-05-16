<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="">
  <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="{{asset('CssFolder/styleHome.css')}}">
  <link rel="stylesheet" href="{{asset('CssFolder/framwork.css')}}">
  <link rel="stylesheet" href="{{asset('cssFolder/all.min.css')}}" />

  <title>UniverFood</title>
</head>

<body>
 <!-- Header -->
 <section id="header">
    <div class="header container">
      <div class="nav-bar">
        <div class="brand">
          <a href="#hero">
            <h1><span>E</span>ST <span>B</span>UVETTE</h1>
          </a>
        </div>
        <div class="nav-list">
          <div class="hamburger">
            <div class="bar"></div>
          </div>
          <ul>
            <li><a href="#" data-after="Home">Home</a></li>
            <li><a href="/products/show" data-after="Menu">Menu</a></li>
            <li><a href="/products/show" data-after="Menu">Résérvation</a></li>
            <li><a href="#projects" data-after="Services">Services</a></li>
            <li><a href="#about" data-after="About">About</a></li>
            <li><a href="#contact" data-after="Contact">Contact</a></li>
            <li><a href="{{Route('dash')}}">{{ Auth::user()->name }}</a></li>
            <li><a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                LogOut</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>

            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- End Header -->

  @yield('content')


    <!--footer-->

    <footer>
        <div class="containr">
            <div class="row">
              <div class="column">
                <h1>Est Buvette</h1>
                <p><i class="fa-solid fa-location-dot"></i> Campus M'ghila, BP, 23000, Béni Mellal</p>
                <br>
                <p><i class="fa-solid fa-phone"></i>  +212 684768594</p>
                <p><i class="fa-solid fa-envelope"></i>  contact@gmail.com</p>

              </div>
              <div class="column">
                <h3>Useful Links</h4>
                <ul>
                  <li><a href="">Home</a></li>
                  <li><a href="">Menu</a></li>
                  <li><a href="">Services</a></li>
                  <li><a href="">About</a></li>
                  <li><a href="">Contact</a></li>
                </ul>
              </div>
              <div class="column">
                <h3>Our Vision</h3>
                <p>Provide constant growth
                    in terms of revenue and sales, and Develop innovative products
                    to meet future needs.</p>
                    <div class="icons m-20 d-flex">
                  <a href=""><i class="fa-brands fa-facebook fa-lg"></i></a>
                  <a href=""><i class="fa-brands fa-instagram fa-lg"></i></a>
                  <a href=""><i class="fa-brands fa-twitter fa-lg"></i></a>
                </div>
              </div>
            </div>

          </div>
          <div class="bottom-bar">
            <p>&copy; Copyight <b>Est Buvette</b>. All Rights Reserved</p>
            <p> Made with &hearts;</p>
          </div>
        </footer>

      </body>
    <!--end footer-->

</body>

  <script src="{{asset('jsFolder/all.min.js')}}"></script>
  <script src="{{asset('jsFolder/javaScript.js')}}"></script>
  </html>
