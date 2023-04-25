<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{asset('cssFolder/all.min.css')}}" />
    <link rel="stylesheet" href="{{asset('cssFolder/master2.css')}}" />
    <link rel="stylesheet" href="{{asset('cssFolder/framwork.css')}}" />
    <title>@yield('title')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    
  </head>
  <body>
    <div class="top-bar p-relative">
    </div>
    <section class="main-page d-flex p-relative">
      <!-- start SideBar -->
      <div class="sidebar bg-white p-10 p-relative">
        <br>
        <br>
        <ul>
          <li>
            <a class="active d-flex al-center rad-6 p-10" href="{{Route('dash')}}">
                <i class="fa-solid fa-chart-simple fa-lg"></i>
              <span>Dashboard</span>
            </a>
          </li>
          <li>
            <a href="{{Route('emp')}}" class="d-flex al-center rad-6 p-10">
                <i class="fa-solid fa-user-pen fa-lg"></i>
              <span>Employees</span>
            </a>
          </li>
          <li>
            <a href="{{Route('prod')}}" class="d-flex al-center rad-6 p-10">
              <i class="fa-solid fa-utensils fa-lg"></i>
              <span>Products</span>
            </a>
          </li>
          <li>
            <a href="{{Route('sett')}}" class="d-flex al-center rad-6 p-10">
              <i class="fa-solid fa-gear fa-lg"></i>
              <span>Settings</span>
            </a>
          </li>
        </ul>
      </div>
      <!-- End SideBar -->
      <div class="content full-w">
        <!-- Start Head -->
        <div class="head bg-white p-15 d-flex p-relative between-flex">
          <div class="head-title between-flex">
            <i class="toggle fa-solid fa-bars-staggered fa-lg"></i>
            <h2 class="p-10 mb-5">Dashboard</h2>
          </div>

          <div class="icons between-flex">
            <span class="dark-mode p-relatice fa-lg">
              <i class="fa-solid fa-moon "></i>
            </span>
            <span class="notification p-relative p-10 ml-10" >
              <i class="fa-regular fa-bell fa-lg"></i>
            </span>
            <p class="ml-10">{{Auth::user()->name}}</p>
            <ul>
              <li  class="p-relative">
                <img src="{{asset('images/avatar.svg')}}" alt="" class="p-relative" />
                <ul>
                  <li><a href="settings.html" class="d-flex al-center rad-6 p-10">

                    <span>Settings</span>
                  </a></li>
                  <li><a href=""  class="d-flex al-center rad-6 p-10"><span> Log Out</span></a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>

@yield('content')



    </section>
    <script src="{{asset('jsFolder/all.min.js')}}"></script>
  </body>
</html>
