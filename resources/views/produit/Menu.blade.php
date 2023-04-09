<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Buvette ESTBM</title>

  <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('CssFolder/styleMenu.css')}}">
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
             <p class="card-text">{{$data->price}} DH</p>
             <form action="{{url('addCart',$data->id)}}" method="POST">
              @csrf

              <input type="number" value="1" name="qnt" class="form-control" style="width: 70px;" min="1" id=""><br>
                <input type="submit" name="" value="Add Cart" id="" class="btn btn-warning ">
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

<<div class="container">
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
         <div class="card" style="width: 18rem;">
         <img src="{{asset('images/productImage/'.$data->image)}}" class="card-img-top" alt="...">
           <div class="card-body">
             <h5 class="card-title">{{$data->ProductName}}</h5>
             <p class="card-text">{{$data->description}}</p>
             <p class="card-text">{{$data->price}} DH</p>
              <form action="">
                <input type="submit" name="" value="Add Cart" id="" class="btn btn-warning">
             </form>

           </div>
         </div>
       </div>
    </div>
    @endif
    @endforeach




<!-- ------------------ end cards--------------- -->


























  <!-- <div class="container">
    <form action="" class="form" method="POST">
      @csrf
     <div class="form-groupe">
      <label for="">Name</label>
      <input type="text" class="form-control" name="nom" id="">
     </div>
     <div class="form-groupe">
      <label for="">lastName</label>
      <input type="text" class="form-control" name="prenom" id="">
     </div>
     <div class="form-groupe">
      <label for="">email</label>
      <input type="text" class="form-control" name="email" id="">
     </div>
      <button type="submit" class="btn btn-primary">Clicker ici</button>
    </form>
  </div>-->

</body>


</html>
