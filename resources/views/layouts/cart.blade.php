<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="@yield('css')">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</head>
<body>
    <div class="row rr ">
        <div class="col">
            <div class="tt">
                <h3 class="text">Your Shopping Cart</h3>
            </div>
        </div>
        <div class="col postion-relative x">
            <div class="ic position-absolute end-0">
                <a href="{{url('/cart/show')}}">
                    <img src="{{asset('images/carts.png')}}" alt="" width="40px" height="40px">
                    <span><div class="quantity">{{Auth::user()->cartqnt}}</div></span>
                </a>
            </div>
        </div>
        
      </div>

  @yield('content')
</body>
</html>
