<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('CssFolder/commands.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <title>Commandes</title>
</head>
<body>
@foreach ($commands as $data)
    <?php
    $name = $data->name;
    $date=$data->created_at;

    ?>
@endforeach
@foreach ($order as $data)
    <?php
    $eta=$data->etablissement;
    $id=$data->id;
    $email=$data->email;
    $phone = $data->phone;
    $adress=$data->adress;
    $totale=$data->price;
    ?>
@endforeach
    <div class="col-md-12">
        <div class="row">

               <div class="receipt-main col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
                   <div class="row">
                       <div class="receipt-header">
                           <div class="col-xs-6 col-sm-6 col-md-6">
                               <div class="receipt-left">
                                   <img class="img-responsive" alt="iamgurdeeposahan" src="{{asset('images/logo.png')}}" width="180px" height="180px">
                               </div>
                           </div>
                           <div class="col-xs-6 col-sm-6 col-md-9 text-left">
                               <div class="receipt-right">
                                   <h5>Est Beni Mellal.</h5>
                                   <p>+212 0000-0000 <i class="fa fa-phone"></i></p>
                                   <p>estbm@gmail.com <i class="fa fa-envelope-o"></i></p>
                                   <p>Morocco <i class="fa fa-location-arrow"></i></p>
                               </div>
                           </div>
                       </div>
                   </div>

                   <div class="row">
                       <div class="receipt-header receipt-header-mid">
                           <div class="col-xs-8 col-sm-8 col-md-12 text-left">
                               <div class="receipt-right">
                                   <h5><?php echo $name;?></h5>
                                   <p><b>Phone :</b><?php echo $phone;?></p>
                                   <p><b>Email :</b><?php echo $email;?></p>
                                   <p><b>Address :</b><?php echo $adress;?></p>
                                   <p><b>Etablissement :</b><?php echo $eta;?></p>
                               </div>
                           </div><br>
                           <div class="col-xs-4 col-sm-4 col-md-9">
                               <div class="receipt-left">
                                   <h3>INVOICE #<?php echo $id;?></h3>
                               </div>
                           </div>
                       </div>
                   </div>

                   <div>
                       <table class="table table-bordered">
                           <thead>
                               <tr>
                                   <th>Product Name</th>
                                   <th>Quantity</th>
                                   <th>Amount</th>
                               </tr>
                           </thead>
                           <tbody>
                               @foreach ($commands as $data)
                               <tr>
                                <td>{{$data->product_title}}</td>
                                <td>{{$data->quantity}}</td>
                                <td>{{$data->price*$data->quantity}} DH</td>
                               </tr>
                               @endforeach
                               <tr>
                                   <td class="text-right" colspan="2"><center><h2><strong>Total: </strong></h2></center></td>
                                   <td class="text-left text-danger"><h2><strong><i class="fa fa-inr"></i> <?php echo $totale?> DH</strong></h2></td>
                               </tr>
                           </tbody>
                       </table>
                   </div>

                   <div class="row">
                       <div class="receipt-header receipt-header-mid receipt-footer">
                           <div class="col-xs-8 col-sm-8 col-md-8 text-left">
                               <div class="receipt-right">
                                   <p><b>Date :</b><?php echo $date;?></p>
                                   <h5 style="color: rgb(140, 140, 140);">Thanks for shopping.!</h5>
                               </div>
                           </div>

                               <center><h1 >Buvette de l'Ecol Superieure de Technologie Beni Mellal</h1></center>



                       </div>
                   </div>

               </div>
           </div>
       </div>
    <div class="butt">
        <button id="print" class="btn btn-warning">
            print this page
        </button>
    </div>





    </body>
<script>
   const btnprint= document.getElementById('print');

    btnprint.addEventListener('click',function(){
    print();
    })
</script>
</html>
