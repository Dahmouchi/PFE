@extends('layouts.dashboardNav')

@section('title')
Settings
@endsection

@section('content')
        <!-- start of search -->
        <div class="search p-relative">
          <input type="search" class="p-10 m-20 bg-white" placeholder="Search">
        </div>
        <!-- end of search -->

        <!-- Profile -->
        <div class="profile-page m-20">
          <div class="overview bg-white rad-10 d-flex al-center txt-c-mobile">
            <div class="avatar-box p-20 txt-c ">
              <img class="mb-5 half-rad" src="{{asset('images/avatar.svg')}}" alt="">
              <h3 class="m-0">{{Auth::user()->name}}</h3>
              <div class="brdr rad-6">
              </div>
              <p class="ptb-10 c-grey">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
            </div>
            <div class="info-box">
              <!-- start Information -->
              <div class="box p-20 d-flex al-center">

                <h4 class="c-grey m-0 full-w ">General Information</h4>
                <div class="size-14">
                  <span class="c-grey">Full Name : </span>
                  <span>{{Auth::user()->name}}</span>
                </div>
                <div class="size-14">
                  <span class="c-grey">Gendar :</span>
                  <span>Male</span>
                </div>
                <div class="size-14">
                  <span class=" c-grey">Country :</span>
                  <span>Morocco</span>
                </div><div class="full-w">

                </div>
              </div>
              <div class="box p-20 d-flex al-center">
                <h4 class="c-grey m-0 full-w">Pesonal Information :</h4>
                <div class="size-14">
                  <span class="c-grey">Email :</span>
                  <span>{{Auth::user()->email}}</span>
                </div>
                <div class="size-14">
                  <span class="c-grey">Phone :</span>
                  <span>0689028393</span>
                </div>
                <div class="size-14">
                  <span class="c-grey">Full Name</span>
                  <span>Admin Name</span>
                </div>
              </div>
              <div class="box p-20 d-flex al-center">
                <h4 class="c-grey m-0 full-w">Billing Information</h4>
                <div class="size-14">
                  <span class="c-grey">Payment Method : </span>
                  <span>Cash on delivery</span>
                </div>
                <div class="size-14">
                  <span class="c-grey">Email :</span>
                  <span>est@usms.ma </span>
                </div>
                <div class="size-14">
                  <span class="c-grey">Subscription :</span>
                  <span>Monthly</span>
                </div>
              </div>
              <!-- End Information -->
            </div>
          </div>
        </div>
        <!-- Start of Settings Page -->
        <div class="settings-page p-relative m-10-20 di-grid gap-20">
          <div class="part1 p-20 bg-white rad-10">
            <h2>Site Control </h2>
            <p class="mt-0 mb-15 c-grey size-14">Control The website IF There Is Maintenance</p>
            <div class="mb-15 between-flex">
              <div>
                <span class="">Website Control</span>
                <p class="size-14 c-grey">Open Or Close Website And Type The Reason</p>
              </div>
              <div>
                <label class="switch">
                  <input type="checkbox">
                  <span class="slider round"></span>
                </label>
              </div>
            </div>
            <textarea class="close-message d-block full-w p-10 rad-6" placeholder="Close Message Content" id=""></textarea>
          </div>
          <!-- Part 2 -->
          <div class="part2 p-20 bg-white rad-10">
            <h2>General Control</h2>
            <p class="c-grey mb-15 size-14">General Information About Your Account</p>
            <div class="mb-15">
              <label for="" class="size-14 c-grey d-block mb-5">Full Name</label>
              <input id="" type="text" class="no-border p-10 rad-6 d-block full-w border-ccc" placeholder="Full Name">
            </div>
            <div class="mb-15">
              <label for="" class="size-14 c-grey d-block mb-5">Email</label>
              <input id="" type="email" class="no-border p-10 rad-6 d-block full-w border-ccc" placeholder="admin@gmail.com">
            </div>
            <div class="mb-15">
              <label for="" class="size-14 c-grey d-block mb-5">Phone</label>
              <input id="" type="tel" class="no-border p-10 rad-6 d-block full-w border-ccc" placeholder="Phone Number">
            </div>
            <div class="mb-15">
              <label for="" class="size-14 c-grey d-block mb-5">Gender</label>
              <select name="" id="" class="no-border p-10 rad-6 d-block full-w border-ccc" >
                <option value="">-- Please Select an Option --</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
              </select>
              <button class=" change rad-6 add padbtn-mbl">Change</button>
            </div>
          <!-- Part3 -->
          </div>
          <div class="part3 p-20 bg-white rad-10">
            <h2>Security Info</h2>
            <p class="mt-0 mb-15 c-grey size-14 ">Security Information About Your Account</p>
            <div class="mb-15 between-flex">
              <div>
                <span class="">Password</span>
                <p class="size-14 c-grey">Last change </p>
              </div>
              <div>
                <button class="change rad-6 add padbtn-mbl">Change</button>
              </div>
            </div>
          </div>
        </div>
        <!-- End Of Settings Page -->
      </div>
  @endsection
