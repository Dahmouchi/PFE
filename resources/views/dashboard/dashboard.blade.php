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
            <input type="search" class="p-10 m-20" placeholder="Search">
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
                <td>
                    <form action="{{Route('serch',$data->client)}}" method="POST">
                        @csrf
                        <button class="rad-6"><i class="fa-solid fa-check fa-lg"></i></button>
                  </form>
                </td>

              </tr>
            @endforeach


            </tbody>
          </table>
        </div>

@endsection
