
@extends('layouts.navAuth')
@section('style')
<link rel="stylesheet" href="{{asset('CssFolder/styleHome.css')}}">
  <link rel="stylesheet" href="{{asset('CssFolder/styleMenu.css')}}">
  <link rel="stylesheet" href="{{asset('CssFolder/framwork.css')}}">
  <link rel="stylesheet" href="{{asset('cssFolder/all.min.css')}}" />
@endsection
@section('content')
  <!-- Hero Section  -->
  <section id="hero">
    <div class="hero containernav">
      <div>
        <h1>Hello, <span></span></h1>
        <h1>Welcome to <span></span></h1>
        <h1>EST Buvette <span></span></h1>
        <a href="#projects" type="button" class="cta">Cool Store</a>
      </div>
    </div>
  </section>
  <!-- End Hero Section  -->
<<<<<<< HEAD


<!-- Start Slider Images -->
<!-- <section id="slider">
    <div class="container">
        <div class="sub-container">
            <div class="slider-wrapper">
                <div>
                    <h2>text</h2>
                </div>
                <br>
                <div class="my-slider">
                    <div>
                        <div class="slide">
                            <div class="slide-img img-1">
                                <a href="">Learn More</a>
                            </div>
                            <div>
                                <h3>Moroccan Tea</h3>
                                <p>The Perfect Tea in The world</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="slide">
                            <div class="slide-img img-2">
                                <a href="">Learn More</a>
                            </div>
                            <div>
                                <h3>Moroccan Tea</h3>
                                <p>The Perfect Tea in The world</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="slide">
                            <div class="slide-img img-3">
                                <a href="">Learn More</a>
                            </div>
                            <div>
                                <h3>Moroccan Tea</h3>
                                <p>The Perfect Tea in The world</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="slide">
                            <div class="slide-img img-4">
                                <a href="">Learn More</a>
                            </div>
                            <div>
                                <h3>Moroccan Tea</h3>
                                <p>The Perfect Tea in The world</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- End  Slider Images -->
  <!-- Projects Section -->
  <section id="projects">
    <div class="projects container">
=======
  <!-- slayder Section -->
  <center><h1 class="section-title" style="margin-top:100px">Our <span>Menu</span></h1></center>
<center><section class="full">
    <div id="slider">
        <figure>
            <img src="images/gallary_1.jpg" alt="">
            <img src="images/gallary_2.jpg" alt="">
            <img src="images/gallary_3.jpg" alt="">
            <img src="images/gallary_4.jpg" alt="">
            <img src="images/gallary_1.jpg" alt="">
        </figure>
    </div>
</section></center>
  <!-- slayder Section -->
<!-- Projects Section -->
<section id="projects">
    <div class="projects containernav">
>>>>>>> 945644cf05acb5a682834b63af02de0a30d16b6e
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



<<<<<<< HEAD
=======


>>>>>>> 945644cf05acb5a682834b63af02de0a30d16b6e
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
<<<<<<< HEAD
  <script src="{{asset('jsFolder/master2.js')}}"></script>
    <script type="module">
        import { tns } from "./node_modules/tiny-slider/src/tiny-slider"

        let slider = tns({
    container: ".my-slider",
    slideBy: 1,
    speed: 400,
    nav: false,
    autoplay: true,
    controls: false,
    autoplayButtonOutput: false,
    responsive: {
        1600:{
            items : 4,
            gutter : 20
        },
        1024:{
            items: 3,
            gutter: 20,
        },
        768:{
            items: 2,
            gutter: 20,
        },
        480:{
            items: 1,
            gutter: 20,
        }
    }
});
    </script>
  @endsection
=======
@section('scroll')
<span class="scroll-back" onclick="topFunction()"><i class="fa-solid fa-chevron-up fa-2xl"></i></span>
@endsection
<script src="{{asset('jsFolder/all.min.js')}}"></script>
<script src="{{asset('jsFolder/master2.js')}}"></script>

>>>>>>> 945644cf05acb5a682834b63af02de0a30d16b6e
