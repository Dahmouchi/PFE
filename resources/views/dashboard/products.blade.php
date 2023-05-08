@extends('layouts.dashboardNav')

@section('title')
Products
@endsection

@section('content')

        <!-- End Head -->
        <!-- start of search -->
        <div class="search p-relative">
          <input type="search" class="p-10 m-20" placeholder="Search">
      </div>
      <!-- end of search -->

      <!-- Start of form -->

      <div class="main-form m-10-20 p-20 bg-white rad-10">
          <h2>Product Update</h2>
          <p class="mt-0 mb-15 c-grey size-14 ">Add Our New Product Here</p>
          <form action="{{Route('products.store')}}" method="Post" enctype="multipart/form-data">
            @csrf
              <div class="row">
              <div class="column">
                  <label for="" class="size-15 c-grey d-block mb-5">Title</label>
                  <input id="" required name="title" type="text" class="no-border p-10 rad-6 d-block full-w border-ccc" placeholder="Food/Drink Name">
              </div>

              <div class=" column">
                  <label for="" class="size-15 c-grey d-block mb-5">Category</label>
                  <select name="category" id="" class="no-border p-10 rad-6 d-block full-w border-ccc" required >
                    <option value="">-- Please Select an Option --</option>
                    <option value="food">Food</option>
                    <option value="drink">Drink</option>
                  </select>
              </div>
              <div class=" column">
                  <label for="" class="size-15 c-grey d-block mb-5">Price</label>
                  <input id="" required name="price" type="number" class="no-border p-10 rad-6 d-block full-w border-ccc" placeholder="Price">
              </div>
              <div class="column">
                  <label for="" class="size-15 c-grey d-block mb-5">Image</label>
                  <input id="" required name="image_product" type="file" class="no-border p-10 rad-6 d-block full-w border-ccc" >
              </div>
              <div class="mb-15 column">
                  <label for="" class="size-15 c-grey d-block mb-5">Description</label>
                  <textarea required id="" name="description" type="text" class="no-border p-10 rad-6 d-block full-w border-ccc" placeholder="Product description"></textarea>
              </div>
              </div>
              <div class="ord-btn mt-5">
                  <button type="submit" class="rad-6 add padbtn-mbl"><i class="fa-solid fa-plus fa-lg"></i><span> New Product</span></button>
              </div>
          </form>
      </div>
      <!-- End Of form  -->
      <!-- start of table  -->
        <div class="table-section m-10-20 bg-white rad-10 txtc-mobile block-mobile p-relative p-20">
          <div class="title-btn d-flex between-flex">
            <h2 class="p-10 mb-5 title-size">Products Liste</h2>

          </div>
          <table class="p-10">
            <thead>
              <tr>
                <th>Image</th>
                <th>Product Name</th>
                <th>Category</th>
                <th>Price</th>
                <th>Description</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($products as $data)
              <tr>
                <td><img src="{{asset('images/productImage/'.$data->image)}}" width="70px" height="50px" alt=""></td>
                <td>{{$data->ProductName}}</td>
                <td>{{$data->category}}</td>
                <td>{{$data->price}}</td>
                <td>{{$data->description}}</td>
                <td>
<<<<<<< HEAD
                    <div class="d-flex " style="justify-content: center;">
                      <button class="rad-6 editProduct mr-5"><i class="fa-solid fa-pen-to-square"></i></button>
                      <form action="{{Route('products.destroy',$data->id)}}" method="POST">
                          @method('DELETE')
                          @csrf
                          <button type="submit" class="rad-6 delete"><i class="fa-solid fa-trash "></i></button>
                      </form>
                    </div>
=======
                   <div class="div" style="display: flex; justify-content:center ;">
                    <button class="rad-6 editProduct mr-5"><i class="fa-solid fa-pen-to-square"></i></button>
                    <form action="{{Route('products.destroy',$data->id)}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="rad-6 delete"><i class="fa-solid fa-trash "></i></button>
                    </form>
                   </div>
>>>>>>> 777cfef04700f91a11432e88d94aed03465ed954
                </td>
              </tr>
                  <!-- Trigger/Open The Modal -->


      <!-- The Modal -->
      <div class="modalproduct">

        <!-- Modal content -->
        <div class="modal-content main-form p-20 bg-white rad-10">

          <div class="head-close d-flex">
            <h2>Employee Update</h2>
            <div class="closeProduct">&times;</div>

          </div>
          <form action="{{Route('products.update',$data->id)}}" method="Post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
              <div class="row">
                <div class="column">
                   <center><img src="{{asset('images/productImage/'.$data->image)}}" width="100px" height="80px" alt=""></center>
                </div>
              <div class="column">
                  <label for="" class="size-14 c-grey d-block mb-5">Title</label>
                  <input required name="title" value="{{$data->ProductName}}" type="text"  class="no-border p-10 rad-6 d-block full-w border-ccc" >
              </div>


              <div class=" column">
                  <label for="" class="size-14 c-grey d-block mb-5">Category</label>
                  <select required name="category" class="no-border p-10 rad-6 d-block full-w border-ccc" >
                    <option value="">-- Please Select an Option --</option>
                    <option value="food">foods</option>
                    <option value="drink">drinks</option>
                  </select>
              </div>

              <div class=" column">
                  <label for="" class="size-14 c-grey d-block mb-5">Price</label>
                  <input required name="price" value="{{$data->price}}"  type="number" class="no-border p-10 rad-6 d-block full-w border-ccc">
              </div>

              <div class="mb-15 column">
                  <label for="" class="size-14 c-grey d-block mb-5">Description</label>
                  <input required name="description" value="{{$data->description}}"  type="text" class="no-border p-10 rad-6 d-block full-w border-ccc" placeholder="employee@gmail.com">
              </div>

            </div>
              <div class="ord-btn mt-5">
                <button type="submit" class="rad-6 add padbtn-mbl"><i class="fa-solid fa-pen-to-square"></i><span> Edit</span></button>
              </div>

          </form>
        </div>
      </div>

              @endforeach
            </tbody>
          </table>
        </div>
        <!-- end of table -->
      </div>
    @endsection
