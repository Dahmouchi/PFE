
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="{{asset('CssFolder/cart.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap-grid.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap-grid.css.map')}}">
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap-grid.min.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap-grid.min.css.map')}}">
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap-reboot.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap-reboot.css.map')}}">
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap-reboot.min.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap-reboot.min.css.map')}}">
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.css.map')}}">
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css.map')}}">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<style>
    /* Footer */
@import url('http://fonts.googleapis.com/css?family=Open+Sans:400,700');

/* The footer is fixed to the bottom of the page */

footer {
    margin-top: 300px;
	background-color: #1a1927;
	color: white;
}
footer .containr{
	max-width: 75%;
	margin: auto;
	font-size: 16px;
}

footer .containr .row{
	display: flex;
	flex-wrap: wrap;

}
footer .containr .row .column{
	width: 31%;
	margin: 10px;
	padding: 25px;
}
footer .containr .row{
	display: flex;
	flex-wrap: wrap;
	padding: 10px 15px;

}
footer p{
	color: white;
}
ul{
	list-style: none;
}
footer .containr .row .column h1{
	margin-bottom: 30px;
	position: relative;
}
footer .containr .row .column h1::before{
	content: '';
	position: absolute;
	left: 0px;
	bottom: -9px;
	background-color:#D7C37A;
	width: 50px;
	height: 2px;
}
footer .containr .row .column h3
{
	margin-bottom: 30px;
	position: relative;
	font-weight: 600;
}
footer .containr .row .column h3::before{
	content: '';
	position: absolute;
	left: -10px;
	top: -2px;
	background-color:#D7C37A;
	width: 3px;
	height: 25px;
}
footer .containr .row .column .icons{
	padding: 10px;

}
footer .containr .row .column .icons a{
	background-color: #ccc;
	padding: 10px;
	margin: 0 5px;
	color:#1a1927;
	border-radius: 50%;
	transition:.5s ease;
}
footer .containr .row .column .icons a:hover{
	background-color: #D7C37A;
}
footer .containr .row .column ul li:not(:last-child){
	margin-bottom: 10px;
}
footer .containr .row .column ul li a{
	color: #ddd;
	transition: .5s ease;

}
footer .containr .row .column ul li a:hover{
	color: white;
	padding-left: 10px;
}
.bottom-bar{
	background-color: #0e0e1a;
	height: 80px;
	width: 100%;
	text-align: center;
	padding: 10px 0;
}
@media (max-width: 767px){
	footer .containr .row .column{
		margin-bottom: 30px;
	}
}
@media (max-width: 574px){
	footer .containr .row .column{
		width: 100%;
		margin-bottom: 30px;
	}
	footer .containr .row .column h1{
		font-size: 25px;
	}
	footer .containr .row .column .icons a{
		background-color: #ccc;
		padding: 10px;
		margin: 0 7px;
		color: var(#1a1927);
		border-radius: 50%;
		transition: .5s ease;
	}
}
/* Footer Right */
</style>
</head>
<?php
$totale = 0;
?>
<body>
         <!-- Start Heading Menu -->
         <section class="menu-boxs">

            <div class="container">
            <div class="titles">
                <h2><span>&mdash;</span> Your Cart <span>&mdash;</span></h2>
            </div>
            <p>Discover a world of flavors on our diverse Cart.</p>

            </div>
        </section>


        <!-- End Menu Heading -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container padding-bottom-3x mb-1">
    <!-- Alert-->
                <div class="alert alert-primary alert-dismissible fade show text-center" style="margin-bottom: 30px; width:100%"><span class="alert-close" data-dismiss="alert"></span><img class="d-inline align-center" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCA1MTIuMDAzIDUxMi4wMDMiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMi4wMDMgNTEyLjAwMzsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHdpZHRoPSIxNnB4IiBoZWlnaHQ9IjE2cHgiPgo8Zz4KCTxnPgoJCTxnPgoJCQk8cGF0aCBkPSJNMjU2LjAwMSw2NGMtNzAuNTkyLDAtMTI4LDU3LjQwOC0xMjgsMTI4czU3LjQwOCwxMjgsMTI4LDEyOHMxMjgtNTcuNDA4LDEyOC0xMjhTMzI2LjU5Myw2NCwyNTYuMDAxLDY0eiAgICAgIE0yNTYuMDAxLDI5OC42NjdjLTU4LjgxNiwwLTEwNi42NjctNDcuODUxLTEwNi42NjctMTA2LjY2N1MxOTcuMTg1LDg1LjMzMywyNTYuMDAxLDg1LjMzM1MzNjIuNjY4LDEzMy4xODQsMzYyLjY2OCwxOTIgICAgIFMzMTQuODE3LDI5OC42NjcsMjU2LjAwMSwyOTguNjY3eiIgZmlsbD0iIzUwYzZlOSIvPgoJCQk8cGF0aCBkPSJNMzg1LjY0NCwzMzMuMjA1YzM4LjIyOS0zNS4xMzYsNjIuMzU3LTg1LjMzMyw2Mi4zNTctMTQxLjIwNWMwLTEwNS44NTYtODYuMTIzLTE5Mi0xOTItMTkycy0xOTIsODYuMTQ0LTE5MiwxOTIgICAgIGMwLDU1Ljg1MSwyNC4xMjgsMTA2LjA2OSw2Mi4zMzYsMTQxLjE4NEw2NC42ODQsNDk3LjZjLTEuNTM2LDQuMTE3LTAuNDA1LDguNzI1LDIuODM3LDExLjY2OSAgICAgYzIuMDI3LDEuNzkyLDQuNTY1LDIuNzMxLDcuMTQ3LDIuNzMxYzEuNjIxLDAsMy4yNDMtMC4zNjMsNC43NzktMS4xMDlsNzkuNzg3LTM5Ljg5M2w1OC44NTksMzkuMjMyICAgICBjMi42ODgsMS43OTIsNi4xMDEsMi4yNCw5LjE5NSwxLjI4YzMuMDkzLTEuMDAzLDUuNTY4LTMuMzQ5LDYuNjk5LTYuNGwyMy4yOTYtNjIuMTQ0bDIwLjU4Nyw2MS43MzkgICAgIGMxLjA2NywzLjE1NywzLjU0MSw1LjYzMiw2LjY3Nyw2LjcyYzMuMTM2LDEuMDY3LDYuNTkyLDAuNjQsOS4zNjUtMS4yMTZsNTguODU5LTM5LjIzMmw3OS43ODcsMzkuODkzICAgICBjMS41MzYsMC43NjgsMy4xNTcsMS4xMzEsNC43NzksMS4xMzFjMi41ODEsMCw1LjEyLTAuOTM5LDcuMTI1LTIuNzUyYzMuMjY0LTIuOTIzLDQuMzczLTcuNTUyLDIuODM3LTExLjY2OUwzODUuNjQ0LDMzMy4yMDV6ICAgICAgTTI0Ni4wMTcsNDEyLjI2N2wtMjcuMjg1LDcyLjc0N2wtNTIuODIxLTM1LjJjLTMuMi0yLjExMi03LjMxNy0yLjM4OS0xMC42ODgtMC42NjFMOTQuMTg4LDQ3OS42OGw0OS41NzktMTMyLjIyNCAgICAgYzI2Ljg1OSwxOS40MzUsNTguNzk1LDMyLjIxMyw5My41NDcsMzUuNjA1TDI0Ni43LDQxMS4yQzI0Ni40ODcsNDExLjU2MywyNDYuMTY3LDQxMS44NCwyNDYuMDE3LDQxMi4yNjd6IE0yNTYuMDAxLDM2Mi42NjcgICAgIEMxNjEuOSwzNjIuNjY3LDg1LjMzNSwyODYuMTAxLDg1LjMzNSwxOTJTMTYxLjksMjEuMzMzLDI1Ni4wMDEsMjEuMzMzUzQyNi42NjgsOTcuODk5LDQyNi42NjgsMTkyICAgICBTMzUwLjEwMywzNjIuNjY3LDI1Ni4wMDEsMzYyLjY2N3ogTTM1Ni43NTksNDQ5LjEzMWMtMy40MTMtMS43MjgtNy41MDktMS40NzItMTAuNjg4LDAuNjYxbC01Mi4zNzMsMzQuOTIzbC0zMy42NDMtMTAwLjkyOCAgICAgYzQwLjM0MS0wLjg1Myw3Ny41ODktMTQuMTg3LDEwOC4xNi0zNi4zMzFsNDkuNTc5LDEzMi4yMDNMMzU2Ljc1OSw0NDkuMTMxeiIgZmlsbD0iIzUwYzZlOSIvPgoJCTwvZz4KCTwvZz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K" width="18" height="18" alt="Medal icon">&nbsp;&nbsp;Welcome to <strong>UniverFood </strong>EST Béni Mellal</div>
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
                            <button class="btn btn-sm btn-outline-danger" type="submit">Clear Cart</button>
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
                    <td class="text-center">
                        <div class="count-input">
                            <select class="form-control">
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
                <input class="form-control form-control-sm" type="text" placeholder="Coupon code" required="">
                <button class="btn btn-outline-primary btn-sm" type="submit">Apply Coupon</button>
            </form>
        </div>
        <div class="column text-lg">Subtotal: <span class="text-medium"><?php echo $totale;?> DH</span></div>
    </div>
    <div class="shopping-cart-footer">
        <div class="column"><a class="btn btn-outline-secondary" href="{{url('/auth')}}"><i class="icon-arrow-left"></i>&nbsp;Back to Home</a></div>
        <div class="column"><a class="btn btn-outline-secondary" href="{{url('/products/show')}}"><i class="icon-arrow-left"></i>&nbsp;Back to Shopping</a></div>
        <div class="column">
            <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#data" href="#">Paiement when recieving</a>
            <a class="btn btn-success" data-bs-toggle="modal" data-bs-target="#data1" href="#">Checkout</a>
        </div>
    </div>
</div>




  <!-- Modal -->
  <div id="data" class="modal fade" >
    <div class="modal-dialog modal-dialog-centered" >
        <div class="modal-content">
            <div class="modal-body">
                    <center><img src="{{asset('images/avatar.svg')}}" alt="" width="60px" height="60px"></center><br>
                <form action="{{Route('orders.store')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <input type="text" required name="name" id="name" value="{{Auth::user()->name}}" readonly class="form-control" placeholder="Name">
                        </div>
                        <div class="col">
                            <input type="text" required name="email" id="name" value="{{Auth::user()->email}}" class="form-control" placeholder="Email"><br>
                        </div>
                    </div>
                    <input type="text" required name="adress" id="adress" class="form-control" placeholder="Adress"><br>
                    <input type="text " required name="phone" class="form-control" placeholder="Phone" id=""><br>
                    <select class="custom-select my-1 mr-sm-2 form-control" name="etablissement" id="inlineFormCustomSelectPref" style="box-shadow: rgba(6, 24, 44, 0.4) 0px 0px 0px 2px, rgba(6, 24, 44, 0.65) 0px 4px 6px -1px, rgba(255, 255, 255, 0.08) 0px 1px 0px inset;">
                        <option selected>EST BM</option>
                        <option value="FST">FST BM</option>
                        <option value="FP">FP BM</option>
                        <option value="ENCG">ENCG MB</option>
                        <option value="ENSA">ENSA BM</option>
                        <option value="Other">Other</option>

                      </select><br>
                      @foreach ($carts as $data)
                      @if ($data->name==Auth::user()->name)
                        <label for="">- {{$data->product_title}} : {{$data->price}}</label><br>
                      @endif
                      @endforeach
                      <label for="price">Totale :</label>
                      <input type="text" name="price" id="" value="<?php echo $totale ?>" class="price text-center text-lg text-medium" readonly><span>HD</span>
                    @if (Auth::user()->cartqnt==0)
                    <center><div class="alert alert-danger" name="" id="" > Cart is empty</div></center>
                    @else
                    <center><input type="submit" class="btn btn-warning" name="" id="" value="Commander"></center>
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
                    <center><img src="{{asset('images/avatar.svg')}}" alt="" width="60px" height="60px"></center><br>
                <form action="{{Route('orders.store')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <input type="text" required name="name" id="name" value="{{Auth::user()->name}}" readonly class="form-control" placeholder="Name">
                        </div>
                        <div class="col">
                            <input type="text" required name="email" id="name" value="{{Auth::user()->email}}" class="form-control" placeholder="Email"><br>
                        </div>
                    </div>
                    <input type="text" required name="adress" id="adress" class="form-control" placeholder="Adress"><br>
                    <input type="text " required name="phone" class="form-control" placeholder="Phone" id=""><br>
                    <select class="custom-select my-1 mr-sm-2 form-control" name="etablissement" id="inlineFormCustomSelectPref" style="box-shadow: rgba(6, 24, 44, 0.4) 0px 0px 0px 2px, rgba(6, 24, 44, 0.65) 0px 4px 6px -1px, rgba(255, 255, 255, 0.08) 0px 1px 0px inset;">
                        <option selected>EST BM</option>
                        <option value="FST">FST BM</option>
                        <option value="FP">FP BM</option>
                        <option value="ENCG">ENCG MB</option>
                        <option value="ENSA">ENSA BM</option>
                        <option value="Other">Other</option>

                      </select><br><br>
                      <div class="row">
                        <div class="col">
                            <input type="text" required name="name" id="name" readonly class="form-control" placeholder="VCC">
                        </div>
                        <div class="col">
                            <input type="text" required name="email" id="name"  class="form-control" placeholder="Date">
                        </div>
                    </div><br>
                    <input type="text" required name="adress" id="adress" class="form-control" placeholder="Carte number"><br>

                      @foreach ($carts as $data)
                      @if ($data->name==Auth::user()->name)
                        <label for="">- {{$data->product_title}} : {{$data->price}}</label><br>
                      @endif
                      @endforeach
                      <label for="price">Totale :</label>
                      <input type="text" name="price" id="" value="<?php echo $totale ?>" class="price text-center text-lg text-medium" readonly><span>HD</span>


                      @if (Auth::user()->cartqnt==0)
                    <center><div class="alert alert-danger" name="" id="" > Cart is empty</div></center>
                    @else
                    <center><input type="submit" class="btn btn-warning" name="" id="" value="Commander"></center>
                    @endif
                </form>
            </div>
        </div>
    </div>
  </div>

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



  <script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>



