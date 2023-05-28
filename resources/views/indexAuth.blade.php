
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
    <div class="hero">
      <div>
        <h1>Hello, <span></span></h1>
        <h1>Welcome to <span></span></h1>
        <h1>EST Buvette <span></span></h1>
        <a href="#about" type="button" class="cta">LEARN MORE</a>
      </div>
    </div>
  </section>
  <!-- End Hero Section  -->

  <!-- Projects Section -->
  <section id="projects">
    <div class="projects container">

  <!-- slayder Section -->
  <center><h1 class="section-title" style="margin-top:100px">Our <span>Menu</span></h1></center>
<center><section class="fulls">
    <div id="sliders">
        <figure>
            <img src="images/slider_2.jpg" alt="">
            <img src="images/slider_1.jpg" alt="">
            <img src="images/slider_3.jpg" alt="">
            <img src="images/slider_4.jpg" alt="">
            <img src="images/slider_2.jpg" alt="">
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
  <div class="review" id="Review">
    <h1>Customer<span>Review</span></h1>

    <div class="review_box">
        <div class="review_card">

            <div class="review_profile">
                <img src="{{asset('images/review_1.png')}}">
            </div>

            <div class="review_text">
                <h2 class="name">John Deo</h2>

                <div class="review_icon">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star-half-stroke"></i>
                </div>

                <div class="review_social">
                    <i class="fa-brands fa-facebook-f"></i>
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-linkedin-in"></i>
                </div>

                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus quam facere
                    blanditiis in fugiat tempore necessitatibus aliquid. Id adipisci, rem corrupti
                    asperiores distinctio delectus quae quia tenetur totam laboriosam quam. Lorem ipsum,
                   </p>

            </div>

        </div>


        <div class="review_card">

            <div class="review_profile">
                <img src="{{asset('images/review_4.png')}}">
            </div>

            <div class="review_text">
                <h2 class="name">John Deo</h2>

                <div class="review_icon">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star-half-stroke"></i>
                </div>

                <div class="review_social">
                    <i class="fa-brands fa-facebook-f"></i>
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-linkedin-in"></i>
                </div>

                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus quam facere
                    blanditiis in fugiat tempore necessitatibus aliquid. Id adipisci, rem corrupti
                    asperiores distinctio delectus quae quia tenetur totam laboriosam quam. Lorem ipsum,
                     </p>

            </div>

        </div>

    </div>

</div>
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

  <!-- Start of Feedback -->
  <div class="main-order">
    <div class="order">
      <div class="ord-title">
        <h2> Your Feedback </h2>
        <p>You've come to the right Place</p>
      </div>
      <form action="">
        <div class="row">
          <div class="column">

            <input type="text" class="name" id="name" placeholder="Enter Your Name">
          </div>

          <div class="column ">
            <input type="email" class="name" id="name" placeholder="Email">
          </div>

          <div class="column ">
            <input type="text" class="ord subject" id="ord" placeholder="Subject">
          </div>

          <div class="column">
            <textarea name="" id="" cols="1" rows="5" width="20px" height="20px" placeholder="Enter Message"></textarea>
          </div>

        </div>
        <div class="ord-btn">
          <button>Send</button>
        </div>
      </form>
    </div>
  </div>
  <!-- End Feedback -->
  @endsection

@section('scroll')
<span class="scroll-back" onclick="topFunction()"><i class="fa-solid fa-chevron-up fa-2xl"></i></span>
@endsection
<script src="{{asset('jsFolder/all.min.js')}}"></script>
<script src="{{asset('jsFolder/master2.js')}}"></script>
