
 @extends('layouts.nav')
 @section('style')
 <link rel="stylesheet" href="{{asset('CssFolder/styleHome.css')}}">
 <link rel="stylesheet" href="{{asset('CssFolder/styleMenu.css')}}">
 <link rel="stylesheet" href="{{asset('CssFolder/framwork.css')}}">
 <link rel="stylesheet" href="{{asset('cssFolder/all.min.css')}}" />
@endsection
@section('content')
 <!-- Hero Section  -->
 <section id="hero">
<<<<<<< HEAD
    <div class="hero containernav">
=======
    <div class="hero">
>>>>>>> b1ab8ca21f0de1e1782f14c0f56102dd3606b380
      <div>
        <h1>Hello, <span></span></h1>
        <h1>Welcome to <span></span></h1>
        <h1>EST Buvette <span></span></h1>
        <a href="#projects" type="button" class="cta">Cool Store</a>
      </div>
    </div>
  </section>
  <!-- End Hero Section  -->
  <!-- slayder Section -->
  <center><h1 class="section-title" style="margin-top:100px">Our <span>Menu</span></h1></center>
<center><section class="full">
    <div id="slider">
        <figure>
<<<<<<< HEAD
            <img src="images/gallary_1.jpg" alt="">
            <img src="images/gallary_2.jpg" alt="">
            <img src="images/gallary_3.jpg" alt="">
            <img src="images/gallary_4.jpg" alt="">
            <img src="images/gallary_1.jpg" alt="">
=======
            <img src="images/slider_2.jpg" alt="">
            <img src="images/slider_1.jpg" alt="">
            <img src="images/slider_3.jpg" alt="">
            <img src="images/slider_4.jpg" alt="">
            <img src="images/slider_2.jpg" alt="">
>>>>>>> b1ab8ca21f0de1e1782f14c0f56102dd3606b380
        </figure>
    </div>
</section></center>
  <!-- slayder Section -->
<!-- Projects Section -->
<section id="projects">
    <div class="projects containernav">
      <div class="projects-header">
        <h1 class="section-title">Our <span>Gallary</span></h1>
      </div>
      <div class="all-projects">
        <div class="project-item">
            <div class="project-info">
                <h1>Project 4</h1>
                <h2>Coding is Love</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad, iusto cupiditate voluptatum impedit unde
                  rem ipsa distinctio illum quae mollitia ut, accusantium eius odio ducimus illo neque atque libero non sunt
                  harum? Ipsum repellat animi, fugit architecto voluptatum odit et!</p>
              </div>
          <div class="project-img">
            <img src="{{asset('images/gallary_2.jpg')}}" alt="img">
          </div>
        </div>
        <div class="project-item">
            <div class="project-info">
                <h1>Project 4</h1>
                <h2>Coding is Love</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad, iusto cupiditate voluptatum impedit unde
                  rem ipsa distinctio illum quae mollitia ut, accusantium eius odio ducimus illo neque atque libero non sunt
                  harum? Ipsum repellat animi, fugit architecto voluptatum odit et!</p>
              </div>
          <div class="project-img">
            <img src="{{asset('images/gallary_4.jpg')}}" alt="img">
          </div>
        </div>
        <div class="project-item">
            <div class="project-info">
                <h1>Project 4</h1>
                <h2>Coding is Love</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad, iusto cupiditate voluptatum impedit unde
                  rem ipsa distinctio illum quae mollitia ut, accusantium eius odio ducimus illo neque atque libero non sunt
                  harum? Ipsum repellat animi, fugit architecto voluptatum odit et!</p>
              </div>
          <div class="project-img">
            <img src="{{asset('images/gallary_6.jpg')}}" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h1>Project 4</h1>
            <h2>Coding is Love</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad, iusto cupiditate voluptatum impedit unde
              rem ipsa distinctio illum quae mollitia ut, accusantium eius odio ducimus illo neque atque libero non sunt
              harum? Ipsum repellat animi, fugit architecto voluptatum odit et!</p>
          </div>
          <div class="project-img">
            <img src="{{asset('images/senduitch.jpg')}}" alt="img">
          </div>
        </div>

        </div>
      </div>
    </div>
  </section>
  <!-- End Projects Section -->





  <!-- About Section -->
  <section id="about">
    <div class="about containernav">
      <div class="col-left">
        <div class="about-img">
          <img src="{{asset('images/buvette.jpg')}}" alt="img">
        </div>
      </div>
      <div class="col-right">
        <h1 class="section-title"><span>About </span>as</h1>
        <h2>Est Buvette</h2>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad, iusto cupiditate voluptatum impedit unde
          rem ipsa distinctio illum quae mollitia ut, accusantium eius odio ducimus illo neque atque libero non sunt
          harum? Ipsum repellat animi, fugit architecto voluptatum odit et!</p>
        <a href="#" class="cta">Download Resume</a>
      </div>
    </div>
  </section>
  <!-- End About Section -->

  <!-- Contact Section -->
  <section id="contact">
    <div class="contact containernav">
      <div>
        <h1 class="section-title">Contact <span>info</span></h1>
      </div>
      <div class="contact-items">
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/phone.png" /></div>
          <div class="contact-info">
            <h1>Phone</h1>
            <h2>+212 766 012 103</h2>
            <h2>+212 714 603 892</h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/new-post.png" /></div>
          <div class="contact-info">
            <h1>Email</h1>
            <h2>EstBuvette@gmail.com</h2>
            <h2>EstBuvette@gmail.com</h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/map-marker.png" /></div>
          <div class="contact-info">
            <h1>Address</h1>
            <h2>ECOLE SUPERIEURE DE TECHNOLOGIE</h2>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact Section -->
@section('scroll')
<span class="scroll-back" onclick="topFunction()"><i class="fa-solid fa-chevron-up fa-2xl"></i></span>
@endsection
<script src="{{asset('jsFolder/all.min.js')}}"></script>
<script src="{{asset('jsFolder/master2.js')}}"></script>
