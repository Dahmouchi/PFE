
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('CssFolder/styleMenu.css')}}">
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
            <li class="active">FOODS</li>
            <li><a href="#drink" style="color:white;text-decoration:none;">DRINKS</a> </li>
            <li><a href= "<?php if(Auth::check()) echo url('/auth');else echo url('/'); ?>" style="color:white;text-decoration:none;">HOME</a> </li>
        </ul>
        </div>
    </section>
    <div class="fixed-bottom ic">
        <a href="{{url('/cart/show')}}">
            <img src="{{asset('images/basket.png')}}" class="" alt="" width="80px" height="80px">
            <span><div class="quantity">{{Auth::user()->cartqnt}}</div></span>
        </a>
    </div>

    <!-- End Menu Heading -->

    <div class="container">
        <div class="food-title">
        <h2> Foods </h2>
        <p> &mdash; Taste the Difference &mdash;</p>
        </div>
    </div>

    <!-- ------------------ cards food --------------- -->
    <div class="container px-4 text-center">
    <div class="row gx-5">
        @foreach ($products as $data)
        @if($data->category=='food')
        <div class="col ">
            <div class="p-3">
            <div class="card" style="width: 18rem;">
            <img src="{{asset('images/productImage/'.$data->image)}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$data->ProductName}}</h5>
                <p class="card-text">{{$data->description}}</p>
                <p class="fnt">{{$data->price}} DH</p>


                <form action="{{url('addCart',$data->id)}}" method="POST" class="" >
                @csrf

                <input type="number" value="1" name="qnt" style="box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;width: 70px;" class="form-control"  min="1" id=""><br>
                <div class="row" >

                    <input type="submit" name="" value="Add Cart" id="" class="btn btn-warning col">
                    <a href="@@"  style="height: 40px; margin-left:10px;" id="" class="btn btn-primary col">by now</a>
                </div>
            </form>
            </div>
            </div>
        </div>
        </div>
        @endif
        @endforeach
    </div>
    </div>

    <!-- ------------------ end cards--------------- -->

    <div class="container">
    <div class="food-title">
        <h2 id="drink"> Drinks </h2>
        <p> &mdash; Taste the Difference &mdash;</p>
    </div>
    </div>
    <!-- ------------------ cards drink --------------- -->
    <div class="container px-4 text-center">
    <div class="row gx-5">
        @foreach ($products as $data)
        @if($data->category=='drink')
        <div class="col">
            <div class="p-3">
            <div class="card " style="width: 18rem;">
            <img src="{{asset('images/productImage/'.$data->image)}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$data->ProductName}}</h5>
                <p class="card-text">{{$data->description}}</p>
                <p class="fnt">{{$data->price}} DH</p>
                <form action="{{url('addCart',$data->id)}}" method="POST" class="" >
                    @csrf

                    <input type="number" value="1" name="qnt" class="form-control" style="width: 70px; box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;" min="1" id=""><br>
                    <div class="row" >
                        <input type="submit" name="" value="Add Cart" id="" class="btn btn-warning col">
                        <a href="@@"  style="height: 40px; margin-left:10px;" id="" class=" btn btn-primary col">by now</a>
                    </div>
                </form>
            </div>
            </div>
        </div>
        </div>
        @endif
        @endforeach
    </div>
    </div>





<!-- ------------------ end cards--------------- -->





</body>
</html>




