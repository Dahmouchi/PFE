
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
            <li><a href="#projects" data-after="Services">Services</a></li>
            <li><a href="#about" data-after="About">About</a></li>
            <li><a href="#contact" data-after="Contact">Contact</a></li>
            <li><a href="{{url('admin/dashboard')}}">{{ Auth::user()->name }}</a></li>
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

  <script src="{{asset('jsFolder/javaScript.js')}}"></script>
