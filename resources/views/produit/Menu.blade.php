<?php
$content="layouts.navAuth";
if(Auth::check()){
    $content="layouts.navAuth";
}else{
    $content="layouts.nav";
}
?>

@extends($content)
@section('style')
<link rel="stylesheet" href="{{asset('CssFolder/styleHome.css')}}">
  <link rel="stylesheet" href="{{asset('CssFolder/styleMenu.css')}}">
  <link rel="stylesheet" href="{{asset('CssFolder/framwork.css')}}">
  <link rel="stylesheet" href="{{asset('cssFolder/all.min.css')}}" />
@endsection
@section('content')

     <!-- Start Heading Menu -->
     <section class="menu-boxs">

        <div class="containers">
        <div class="titles">
            <h2><span>&mdash;</span> Our Menu <span>&mdash;</span></h2>
        </div>
        <p style="font-size: 14px;">Discover a world of flavors on our diverse menu.</p>
        <ul class="shuffle">
            <li><a href="#food" style="color:white;text-decoration:none;">FOODS</a></li>
            <li ><a href="#drink" style="color:white;text-decoration:none;">DRINKS</a> </li>
            <li><a href="#dessert" style="color:white;text-decoration:none;">DESSERT</a></li>
            <li><a href="#coffee" style="color:white;text-decoration:none;">COFFEE</a></li>


            <li ><a href= "<?php if(Auth::check()) echo url('/auth');else echo url('/'); ?>" style="color:white;text-decoration:none;">HOME</a> </li>
        </ul>
        </div>
    </section>


    <!-- ------------------ end cards--------------- -->

  <div class="containe">
    <div class="food-title">
        <h2 id="coffee"> Coffee </h2>
        <p> &mdash; Taste the Difference &mdash;</p>
    </div>
    </div>
   <!-- ------------------ cards drink --------------- -->
   <div class="containe">

    @foreach ($products as $data)
    @if($data->category=='coffe')


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
                    <input type="number" value="1" name="qnt" class="form-control"  min="1" id="" style=" font-size: 16px;padding: 7px; border-radius: 5px;box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;width: 70px;"><br>
                    <button type="submit" >Add To Cart</button>
                   </div>
              </form>
            </div>
          </div>
    @endif
    @endforeach
</div>
</div>

<!-- ------------------ end cards--------------- -->
    <!-- End Menu Heading -->

    <div class="containe">
        <div class="food-title">
            <h2 id="food"> Foods </h2>
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
                        <input type="number" value="1" name="qnt" style=" font-size: 16px;padding: 7px; border-radius: 5px;box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;width: 70px;"  min="1" id=""><br>
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
                        <input type="number" value="1" name="qnt" class="form-control"  min="1" id="" style=" font-size: 16px;padding: 7px; border-radius: 5px;box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;width: 70px;""><br>
                        <button type="submit" >Add To Cart</button>
                       </div>
                  </form>
                </div>
              </div>
        @endif
        @endforeach
    </div>
  </div>
  <!-- ------------------ end cards--------------- -->

  <div class="containe">
    <div class="food-title">
        <h2 id="dessert"> Dessert </h2>
        <p> &mdash; Taste the Difference &mdash;</p>
    </div>
    </div>
   <!-- ------------------ cards drink --------------- -->
   <div class="containe">

    @foreach ($products as $data)
    @if($data->category=='dessert')


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
                    <input type="number" value="1" name="qnt" class="form-control"  min="1" id=""style=" font-size: 16px;padding: 7px; border-radius: 5px;box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;width: 70px;"><br>
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
            <span><div class="quantity"><?php if(Auth::check()){echo Auth::user()->cartqnt;}else{echo "0";} ?></div></span>
        </a>
    </div>
<!-- ------------------ end cards--------------- -->


@endsection





