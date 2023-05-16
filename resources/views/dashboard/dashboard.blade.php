@extends('layouts.dashboardNav')

@section('title')
Dashboard
@endsection

@section('content')
<?php
$prix=0;
$ord=0;
$prod=0;
$client=0;
?>
        <!-- End Head -->
        <!-- start search -->
        <div class="search p-relative">
            <input type="search" class="p-10 m-20 bg-white" placeholder="Search">
          </div>
          <!-- end of search -->
          @foreach ($orders as $data)
          <?php $ord++;
          $prix=$prix+$data->price;
          ?>
          @endforeach
          @foreach ($product as $data)
          <?php $prod++;?>
          @endforeach
          @foreach ($user as $data)
          <?php $client++;?>
          @endforeach
          <div class="wrapper di-grid gap-20 p- m-10-20">
            <div class="details bg-white rad-10 txtc-mobile block-mobile p-relative">
              <div class="intro p-20 d-flex between-flex bg-e gap-20 full-w">
                <div class="description">
                  <h4 class="m-0"><?php echo $prod  ?></h4>
                  <p class="c-rey mt-5">
                    Total menus
                  </p>
                </div>
                <i class="fa-solid fa-utensils fa-fade fa-2xl"></i>
              </div>
            </div>
            <div class="details  rad-10 txtc-mobile block-mobile">
              <div class="intro p-20 d-flex between-flex bg-e gap-20 full-w">
                <div class="description">
                  <h4 class="m-0"><?php echo $ord  ?></h4>
                  <p class="c-rey mt-5 size-15">
                    Total Orders Today
                  </p>
                </div>
                <i class="fa-solid fa-cart-shopping fa-fade fa-2xl"></i>
              </div>
            </div>
            <div class="details  rad-10 txtc-mobile block-mobile">
              <div class="intro p-20 d-flex between-flex bg-e gap-20 full-w">
                <div class="description">
                  <h4 class="m-0"><?php echo $client-1;  ?></h4>
                  <p class="c-rey mt-5 size-15">
                    Total Cliens
                  </p>

                </div>
                <i class="fa-solid fa-user fa-fade fa-2xl"></i>
              </div>
            </div>
            <div class="details rad-10 txtc-mobile block-mobile">
              <div class="intro p-20 d-flex between-flex bg-e gap-20 full-w">
                <div class="description">
                  <h4 class="m-0"><?php echo $prix  ?></h4>
                  <p class="c-rey mt-5 size-15">
                    Revenue Day
                  </p>
                </div>
                <i class="fa-solid fa-hand-holding-dollar fa-fade fa-2xl"></i>
              </div>
            </div>
        </div>
        <!-- Order Table -->
        <div class="table-section bg-white rad-10 txtc-mobile block-mobile p-relative p-20 ">
          <h2 class="p-10 mb-5"> Order Liste</h2>
          <table class="p-10">
            <thead>
              <tr>
                <th>No</th>
                <th>Date</th>
                <th>Customer Name</th>
                <th>Subtotal</th>
                <th>Action</th>
            </thead>

            <tbody>
            @foreach ($orders as $data)
            <?php $ord++;?>
            <tr>
                <td>{{$data->id}}</td>
                <td>{{$data->created_at}}</td>
                <td>{{$data->client}}</td>
                <td>{{$data->price}}</td>
                <td >
                    <div class="d-flex al-center">

                      @if ($data->confirmation==1)
                      <div class="al-center"> <h4 style="color:green; margin-left:10px;">already confirmer</h4></div>
                      @else
                      <div class="al-center">
                        <form action="{{Route('serch',$data->client)}}" class="mr-5" method="POST">
                                @csrf
                                <button class="rad-6 " style="width: 70px;"><i class="fa-solid fa-eye"></i></button>
                        </form>
                        </div>
                      <div class="al-center">
                      <form  class="mr-5" method="POST" action="{{Route('orders.update',$data->id)}}">
                        @method('PATCH')
                        @csrf
                      <button class="rad-6 eye" style="margin-left: 20px; width:70px; background-color: #38c870;"><i class="fa-solid fa-check" ></i></button>
                      </form>
                      @endif
                      </div>
                    </div>
                </td>

              </tr>
            @endforeach


            </tbody>
          </table>
        </div>

@endsection
