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
 @extends('layouts.navAuth')

  <!-- Hero Section  -->
  <section id="hero">
    <div class="hero container">
      <div>
        <h1>Hello, <span></span></h1>
        <h1>Welcome to <span></span></h1>
        <h1>EST Buvette <span></span></h1>
        <a href="#projects" type="button" class="cta">Cool Store</a>
      </div>
    </div>
  </section>
  <!-- End Hero Section  -->



  <!-- Projects Section -->
  <section id="projects">
    <div class="projects container">
      <div class="projects-header">
        <h1 class="section-title">Nous <span>Services</span></h1>
      </div>
      <div class="all-projects">
        <div class="project-item">
          <div class="project-info">
            <h1>Project 1</h1>
            <h2>Coding is Love</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad, iusto cupiditate voluptatum impedit unde
              rem ipsa distinctio illum quae mollitia ut, accusantium eius odio ducimus illo neque atque libero non sunt
              harum? Ipsum repellat animi, fugit architecto voluptatum odit et!</p>
          </div>
          <div class="project-img">
            <img src="{{asset('images/coffeImage.jpg')}}" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h1>Project 2</h1>
            <h2>Coding is Love</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad, iusto cupiditate voluptatum impedit unde
              rem ipsa distinctio illum quae mollitia ut, accusantium eius odio ducimus illo neque atque libero non sunt
              harum? Ipsum repellat animi, fugit architecto voluptatum odit et!</p>
          </div>
          <div class="project-img">
            <img src="{{asset('images/pizza.jpg')}}" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h1>Project 3</h1>
            <h2>Coding is Love</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad, iusto cupiditate voluptatum impedit unde
              rem ipsa distinctio illum quae mollitia ut, accusantium eius odio ducimus illo neque atque libero non sunt
              harum? Ipsum repellat animi, fugit architecto voluptatum odit et!</p>
          </div>
          <div class="project-img">
            <img src="{{asset('images/foodImage.jpg')}}" alt="img">
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
        <div class="project-item">
          <div class="project-info">
            <h1>Project 5</h1>
            <h2>Coding is Love</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad, iusto cupiditate voluptatum impedit unde
              rem ipsa distinctio illum quae mollitia ut, accusantium eius odio ducimus illo neque atque libero non sunt
              harum? Ipsum repellat animi, fugit architecto voluptatum odit et!</p>
          </div>
          <div class="project-img">
            <img src="{{asset('images/brakfast.jpg')}}" alt="img">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Projects Section -->

  <!-- About Section -->
  <section id="about">
    <div class="about container">
      <div class="col-left">
        <div class="about-img">
          <img src="{{asset('images/buvette.jpg')}}" alt="img">
        </div>
      </div>
      <div class="col-right">
        <h1 class="section-title">About <span>as</span></h1>
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
    <div class="contact container">
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
  <!-- Start Footer -->
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
              
          <div class="icons m-20 d-flex al-center">
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
  <!-- End Footer -->
  <!-- Scrool top -->
  
  <span id="myBtn" onclick="topFunction()"><i class="fa-solid fa-angle-up fa-2xl"></i></span>
  <!-- End Scroll Top -->
  <script src="{{asset('jsFolder/all.min.js')}}"></script>
  <script src="{{asset('jsFolder/master2.js')}}">
    
  </script>
</body>

</html>
