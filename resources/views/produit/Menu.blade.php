
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('CssFolder/styleMenu.css')}}">
    <link rel="stylesheet" href="{{asset('CssFolder/framwork.css')}}">


    <title>Menu</title>
    <script src="{{asset('jsFolder/javaScript.js')}}"></script>
</head>
<body>



     <!-- Start Heading Menu -->
     <section class="menu-boxs">

        <div class="container">
        <div class="titles">
            <h2><span>&mdash;</span> Our Menu <span>&mdash;</span></h2>
        </div>
        <p>Discover a world of flavors on our diverse menu.</p>
        <ul class="shuffle">
            <li><a href="#food" style="color:white;text-decoration:none;">FOODS</a></li>
            <li ><a href="#drink" style="color:white;text-decoration:none;">DRINKS</a> </li>
            <li ><a href= "<?php if(Auth::check()) echo url('/auth');else echo url('/'); ?>" style="color:white;text-decoration:none;">HOME</a> </li>
        </ul>
        </div>
    </section>


    <!-- End Menu Heading -->

    <div class="main-containe">
    <div class="container">
        <div class="food-title">
        <h2> Foods </h2>
        <p> &mdash; Taste the Difference &mdash;</p>
        </div>
    </div>

    <!-- ------------------ cards food --------------- -->
    <div class="containe">

            @foreach ($products as $data)
            @if($data->category=='food')


                  <div class="product">
                    <div class="img-holder">
                      <img src="{{asset('images/productImage/'.$data->image)}}" alt="">
                    </div>
                    <div class="details">

                        <div class="name-price">
                        <h5> &mdash; {{$data->ProductName}}</h5>
                        <h5 class="price">{{$data->price}}DH </h5>
                      </div>

                      <p>{{$data->description}}.</p>
                      <form action="{{url('addCart',$data->id)}}" method="POST" class="" >
                        @csrf
                       <div class="aa">
                        <input type="number" value="1" name="qnt" style="box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;width: 70px;" class="form-control"  min="1" id=""><br>
                        <button type="submit" >Add To Cart</button>
                       </div>
                      </form>
                    </div>
                  </div>


            @endif
            @endforeach


    </div>


    <!-- ------------------ end cards--------------- -->

    <div class="containe">
    <div class="food-title">
        <h2 id="drink"> Drinks </h2>
        <p> &mdash; Taste the Difference &mdash;</p>
    </div>
    </div>
    <!-- ------------------ cards drink --------------- -->
    <div class="containe">

        @foreach ($products as $data)
        @if($data->category=='drink')


              <div class="product">
                <div class="img-holder">
                  <img src="{{asset('images/productImage/'.$data->image)}}" alt="">
                </div>
                <div class="details">

                    <div class="name-price">
                    <h5> &mdash; {{$data->ProductName}}</h5>
                    <h5 class="price">{{$data->price}}DH </h5>
                  </div>

                  <p>{{$data->description}}.</p>
                  <form action="{{url('addCart',$data->id)}}" method="POST" class="" >
                    @csrf
                    <div class="aa">
                        <input type="number" value="1" name="qnt" class="form-control"  min="1" id="" style="box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;width: 70px;"><br>
                        <button type="submit" >Add To Cart</button>
                       </div>
                  </form>
                </div>
              </div>
        @endif
        @endforeach
    </div>
  </div>
    <div class="fixed-bottom ic">
        <a href="{{url('/cart/show')}}">

            <img src="{{asset('images/basket.png')}}" class="" alt="" width="70px" height="70px">
            <span><div class="quantity">{{Auth::user()->cartqnt}}</div></span>
        </a>
    </div>
<!-- ------------------ end cards--------------- -->
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
<script src="{{asset('jsFolder/all.min.js')}}"></script>
    <script src="{{asset('jsFolder/master2.js')}}"></script>
</html>




