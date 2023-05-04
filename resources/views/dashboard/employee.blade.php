@extends('layouts.dashboardNav')

@section('title')
Employees
@endsection

@section('content')
        <!-- start of search -->
        <div class="search p-relative">
            <input type="search" class="p-10 m-20" placeholder="Search">
        </div>
        <!-- end of search -->

        <!-- Start of form -->
        <div class="main-form m-10-20 p-20 bg-white rad-10">
          <h2>Employee Update</h2>
          <p class="mt-0 mb-15 c-grey size-14 ">Add New Employee Here</p>
          <form action="{{Route('empStore')}}" method="Post" enctype="multipart/form-data">
            @csrf
              <div class="row">
              <div class="column">
                  <label for="" class="size-14 c-grey d-block mb-5">Date of entry </label>
                  <input required id="joind" name="joind" type="date" class="no-border p-10 rad-6 d-block full-w border-ccc" >
              </div>

              <div class="column">
                <label for="" class="size-14 c-grey d-block mb-5">Full Name</label>
                <input required id="" type="text" name="fullname" class="no-border p-10 rad-6 d-block full-w border-ccc" placeholder="First/Second Name">
            </div>

              <div class=" column">
                  <label for="" class="size-14 c-grey d-block mb-5">Gender</label>
                  <select required name="gender" id="" class="no-border p-10 rad-6 d-block full-w border-ccc" >
                    <option value="">-- Please Select an Option --</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                  </select>
              </div>

              <div class=" column">
                  <label for="" class="size-14 c-grey d-block mb-5">Date Of Birth</label>
                  <input required id="" name="date" type="date" class="no-border p-10 rad-6 d-block full-w border-ccc">
              </div>

              <div class="mb-15 column">
                  <label for="" class="size-14 c-grey d-block mb-5">Email</label>
                  <input required id="" name="email" type="email" class="no-border p-10 rad-6 d-block full-w border-ccc" placeholder="employee@gmail.com">
              </div>
              <div class="column">
                <label for="" class="size-15 c-grey d-block mb-5">Image</label>
                <input required id="" name="image" type="file" class="no-border p-10 rad-6 d-block full-w border-ccc" >
              </div>
            </div>
              <div class="ord-btn mt-5">
                <button type="submit" class="rad-6 add padbtn-mbl"><i class="fa-solid fa-plus fa-lg"></i><span> New Employee</span></button>
              </div>

          </form>
        </div>
        <!-- End Of Form -->

        <!-- Start Employees Table -->
        <div
          class="table-section bg-white rad-10 txtc-mobile block-mobile p-relative p-20"
        >
          <div class="title-btn d-flex between-flex">
            <h2 class="p-10 mb-5 title-size">Employees Liste</h2>
            <div>

            </div>
          </div>
          <table class="p-10">
            <thead>
              <tr>
                <th>Id</th>
                <th>Full Name</th>
                <th>Date Of Birth</th>
                <th>Email</th>
                <th>Gender</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($emp as $data)
              <tr>
                <td>{{$data->id}}</td>
                <td>{{$data->fullName}}</td>
                <td>{{$data->date}}</td>
                <td>{{$data->email}}</td>
                <td>{{$data->gender}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <!-- End employes Table -->

        <div class="employes-page di-grid m-20 gap-20">
            @foreach ($emp as $data)
            <div class="employe bg-white rad-6 p-20 p-relative">
                <div class="contact">
                    <a href=""><i class="fa-solid fa-phone"></i></a>
                    <a href=""><i class="fa-solid fa-envelope"></i></a>
                </div>
                <div class="txt-c m-20">
                    <img class="half-rad w-100 h-100" src="{{asset('images/EmployeeImage/'.$data->image)}}" alt="">
                    <h4 class="m-0">{{$data->fullName}}</h4>
                    <p class="c-grey size-14 mb-0">ID : {{$data->id}}</p>
                </div>
                <div class="emp-info between-flex">
                    <span class="">Joined {{$data->joind}}</span>
                    <div class="d-flex">
                        <button class="rad-6" id="edit-show"><i class="fa-solid fa-pen-to-square"></i></button>
                        <form action="{{Route('empdestroy',$data->id)}}" method="Post">
                            @csrf
                            <button type="submit" class="rad-6 delete"><i class="fa-solid fa-trash "></i></button>
                        </form>
                    </div>
                </div>
            </div>

        @endforeach

    </div>
      </div>

    </section>

      <!-- Trigger/Open The Modal -->
      

      <!-- The Modal -->
      <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content main-form p-20 bg-white rad-10">
          
          <div class="head-close d-flex">
            <h2>Employee Update</h2>
            <div class="close">&times;</div>
            
          </div>
          <form action="{{Route('empStore')}}" method="Post" enctype="multipart/form-data">
            @csrf
              <div class="row">
              <div class="column">
                  <label for="" class="size-14 c-grey d-block mb-5">Date of entry </label>
                  <input required id="joind" name="joind" type="date" class="no-border p-10 rad-6 d-block full-w border-ccc" >
              </div>

              <div class="column">
                <label for="" class="size-14 c-grey d-block mb-5">Full Name</label>
                <input required id="" type="text" name="fullname" class="no-border p-10 rad-6 d-block full-w border-ccc" placeholder="First/Second Name">
            </div>

              <div class=" column">
                  <label for="" class="size-14 c-grey d-block mb-5">Gender</label>
                  <select required name="gender" id="" class="no-border p-10 rad-6 d-block full-w border-ccc" >
                    <option value="">-- Please Select an Option --</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                  </select>
              </div>

              <div class=" column">
                  <label for="" class="size-14 c-grey d-block mb-5">Date Of Birth</label>
                  <input required id="" name="date" type="date" class="no-border p-10 rad-6 d-block full-w border-ccc">
              </div>

              <div class="mb-15 column">
                  <label for="" class="size-14 c-grey d-block mb-5">Email</label>
                  <input required id="" name="email" type="email" class="no-border p-10 rad-6 d-block full-w border-ccc" placeholder="employee@gmail.com">
              </div>
              <div class="column">
                <label for="" class="size-15 c-grey d-block mb-5">Image</label>
                <input required id="" name="image" type="file" class="no-border p-10 rad-6 d-block full-w border-ccc" >
              </div>
            </div>
              <div class="ord-btn mt-5">
                <button type="submit" class="rad-6 add padbtn-mbl"><i class="fa-solid fa-pen-to-square"></i><span> Edit</span></button>
              </div>

          </form>
        </div>  
      </div>
      <script src="{{asset('jsFolder/all.min.js')}}"></script>
      <script src="{{asset('jsFolder/master2.js')}}"></script>
    @endsection
</body>
</html>
