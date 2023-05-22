
@extends('layouts.navAuth')
@section('style')
<link rel="stylesheet" href="{{asset('CssFolder/styleHome.css')}}">
<link rel="stylesheet" href="{{asset('CssFolder/styleMenu.css')}}">
<link rel="stylesheet" href="{{asset('CssFolder/cart.css')}}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
@endsection
@section('content')
<?php
$totale = 0;
?>

         <!-- Start Heading Menu -->
         <section class="menu-boxs">

            <div class="containers">
            <div class="titles">
                <h2><span>&mdash;</span> Your Cart <span>&mdash;</span></h2>
            </div>
            <p style="font-size: 14px;">Discover a world of flavors on our diverse menu.</p>
            </div>
        </section>



        <!-- End Menu Heading -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container padding-bottom-3x mb-1" style="padding-bottom: 200px;">
    <!-- Alert-->
    @if (session('message'))
            <div class="alert alert-success alert-dismissible fade show text-center" style="margin-bottom: 30px;"><span class="alert-close" data-dismiss="alert"></span><img class="d-inline align-center" src="{{asset('images/valide.png')}}"  width="18" height="18" alt="Medal icon">&nbsp;&nbsp;Votre Commande est Valider</div>
    @endif
    <!-- Shopping Cart-->
    <div class="table-responsive shopping-cart">
        <table class="table">
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th class="text-center">Quantity</th>
                    <th class="text-center">Subtotal</th>
                    <th class="text-center">Price</th>
                    <th class="text-center">
                        <form action="{{url('destroyall',Auth::user()->name)}}" method="POST">

                            @csrf
                            <button class="btn btn-sm btn-outline-danger" type="submit" style="font-size: 15;">Clear Cart</button>
                        </form>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($carts as $data)
                @if ($data->name==Auth::user()->name)

                <?php
                    $totale += $data->quantity*$data->price ;
                ?>
                <tr>
                    <td>
                        <div class="product-item">
                            <a class="product-thumb" href="#"><img src="{{asset('images/productImage/'.$data->image)}}" alt="Product"></a>
                            <div class="product-info">
                                <h4 class="product-title"><a href="#">{{$data->product_title}}</a></h4><span><em>Product Id</em> {{$data->id}}</span><span><em>Client:</em>  {{$data->name}}</span>
                            </div>
                        </div>
                    </td>
                    <td class="text-center" >
                        <div class="count-input">
                            <select class="form-control" style="font-size: 15px; ">
                                <option>{{$data->quantity}}</option>
                            </select>
                        </div>
                    </td>
                    <td class="text-center text-lg text-medium">{{$data->quantity*$data->price}} DH</td>
                    <td class="text-center text-lg text-medium">{{$data->price}} DH</td>
                    <td class="text-center">
                        <form action="{{url('destroy',$data->id)}}" method="POST">
                            @csrf
                            <button class="remove-from-cart" type="submit"><i class="fa fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
                @endif
                @endforeach

            </tbody>
        </table>
    </div>
    <div class="shopping-cart-footer">
        <div class="column">
            <form class="coupon-form" method="post">
                <input class="form-control form-control-sm" type="text" placeholder="Coupon code" required="" style="font-size: 15;">
                <button class="btn btn-outline-primary btn-sm" type="submit" style="font-size: 15;">Apply Coupon</button>
            </form>
        </div>
        <div class="column text-lg" style="font-size: 15;">Subtotal: <span class="text-medium"><?php echo $totale;?> DH</span></div>
    </div>
    <div class="shopping-cart-footer">
        <div class="column"><a class="btn btn-outline-secondary" style="font-size: 15;" href="{{url('/auth')}}"><i class="icon-arrow-left"></i>&nbsp;Back to Home</a></div>
        <div class="column"><a class="btn btn-outline-secondary" style="font-size: 15;" href="{{url('/products/show')}}"><i class="icon-arrow-left"></i>&nbsp;Back to Shopping</a></div>
        <div class="column">
            <a class="btn btn-primary" style="font-size: 15;" data-bs-toggle="modal" data-bs-target="#data" href="#">Paiement when recieving</a>
            <a class="btn btn-success" style="font-size: 15;" data-bs-toggle="modal" data-bs-target="#data1" href="#">Checkout</a>
        </div>
    </div>
</div>




  <!-- Modal -->
  <div id="data" class="modal fade" >
    <div class="modal-dialog modal-dialog-centered" >
        <div class="modal-content">
            <div class="modal-body">
                    <center><img src="{{asset('images/avatar.svg')}}" alt="" style="width: 70px; heigth:70px"></center><br>
                <form action="{{Route('orders.store')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <input type="text" style="font-size: 15;" required name="name" id="name" value="{{Auth::user()->name}}" readonly class="form-control" placeholder="Name">
                        </div>
                        <div class="col">
                            <input type="text" style="font-size: 15;" required name="email" id="name" value="{{Auth::user()->email}}" class="form-control" placeholder="Email"><br>
                        </div>
                    </div>
                    <input type="text " style="font-size: 15;" required name="phone" class="form-control" placeholder="Phone" id=""><br>
                    <select style="font-size: 15;" class="custom-select my-1 mr-sm-2 form-control" name="etablissement" id="inlineFormCustomSelectPref" style="box-shadow: rgba(6, 24, 44, 0.4) 0px 0px 0px 2px, rgba(6, 24, 44, 0.65) 0px 4px 6px -1px, rgba(255, 255, 255, 0.08) 0px 1px 0px inset;">
                        <option selected>EST BM</option>
                        <option value="FST">FST BM</option>
                        <option value="FP">FP BM</option>
                        <option value="ENCG">ENCG MB</option>
                        <option value="ENSA">ENSA BM</option>
                        <option value="Other">Other</option>

                      </select><br>
                      <input type="text" style="font-size: 15;" required name="adress" id="adress" class="form-control" placeholder="Adress"><br>

                      @foreach ($carts as $data)
                      @if ($data->name==Auth::user()->name)
                        <label for="" style="font-size: 15;">- {{$data->product_title}} : {{$data->price}}</label><br>
                      @endif
                      @endforeach
                      <label style="font-size: 15;" for="price">Totale :</label>
                      <input style="font-size: 15;" type="text" name="price" id="" value="<?php echo $totale ?>" class="price text-center text-lg text-medium" readonly><span style="font-size: 15;">HD</span>
                    @if (Auth::user()->cartqnt==0)
                    <center><div class="alert alert-danger" name="" id="" style="font-size: 15;" > Cart is empty</div></center>
                    @else
                    <center><input style="font-size: 15;" type="submit" class="btn btn-warning" name="" id="" value="Commander"></center>
                    @endif
                </form>
            </div>
        </div>
    </div>
  </div>

 <!-- Modal -->
 <div id="data1" class="modal fade" >
    <div class="modal-dialog modal-dialog-centered" >
        <div class="modal-content">
            <div class="modal-body">
                    <center><img src="{{asset('images/avatar.svg')}}" alt="" style="width: 70px; heigth:70px"></center><br>
                <form action="{{Route('orders.store')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <input style="font-size: 15;" type="text" required name="name" id="name" value="{{Auth::user()->name}}" readonly class="form-control" placeholder="Name">
                        </div>
                        <div class="col">
                            <input style="font-size: 15;" type="text" required name="email" id="name" value="{{Auth::user()->email}}" class="form-control" placeholder="Email"><br>
                        </div>
                    </div>
                    <input type="text " style="font-size: 15;" required name="phone" class="form-control" placeholder="Phone" id=""><br>
                    <select style="font-size: 15;" class=" custom-select my-1 mr-sm-2 form-control" name="etablissement" id="inlineFormCustomSelectPref" style="box-shadow: rgba(6, 24, 44, 0.4) 0px 0px 0px 2px, rgba(6, 24, 44, 0.65) 0px 4px 6px -1px, rgba(255, 255, 255, 0.08) 0px 1px 0px inset;">
                        <option selected>EST BM</option>
                        <option value="FST">FST BM</option>
                        <option value="FP">FP BM</option>
                        <option value="ENCG">ENCG MB</option>
                        <option value="ENSA">ENSA BM</option>
                        <option value="Other">Other</option>

                      </select>
                      <input type="text" style="font-size: 15;" required name="adress" id="adress" class="form-control" placeholder="Adress">
                      <br><br>
                      <div class="row">
                        <div class="col">
                            <input style="font-size: 15;" type="text" required name="name" id="name" readonly class="form-control" placeholder="VCC">
                        </div>
                        <div class="col">
                            <input style="font-size: 15;" type="text" required name="email" id="name"  class="form-control" placeholder="Date">
                        </div>
                    </div><br>
                    <input style="font-size: 15;" type="text" required name="adress" id="adress" class="form-control" placeholder="Carte number"><br>

                      @foreach ($carts as $data)
                      @if ($data->name==Auth::user()->name)
                        <label style="font-size: 15;" for="">- {{$data->product_title}} : {{$data->price}}</label><br>
                      @endif
                      @endforeach
                      <label style="font-size: 15;" for="price">Totale :</label>
                      <input style="font-size: 15;" type="text" name="price" id="" value="<?php echo $totale ?>" class="price text-center text-lg text-medium" readonly><span style="font-size: 15;">HD</span>


                      @if (Auth::user()->cartqnt==0)
                    <center><div style="font-size: 15;" class="alert alert-danger" name="" id="" > Cart is empty</div></center>
                    @else
                    <center><input style="font-size: 15;" type="submit" class="btn btn-warning" name="" id="" value="Commander"></center>
                    @endif
                </form>
            </div>
        </div>
    </div>
  </div>




  <script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>

</html>



