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

      <div class="main-form m-10-20 bg-white rad-10">
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
                    <button class="rad-6"><i class="fa-solid fa-pen-to-square"></i></button>
                    <form action="{{Route('products.destroy',$data->id)}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="rad-6 delete"><i class="fa-solid fa-trash "></i></button>
                    </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <!-- end of table -->
      </div>
    @endsection
