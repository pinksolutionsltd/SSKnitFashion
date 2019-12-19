@extends('layouts/dashboard')

@section('product-page')
  active
@endsection

@section('content')
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="{{ url('/home') }}">
        <em class="fa fa-home"></em>
      </a></li>
      <li class="active">View Product Table</li>
    </ol>
  </div><!--/.row-->

  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">View Product Table</h1>
    </div>
  </div><!--/.row-->
{{-- Alert Message After Deleted Item---------------------------------- --}}
          <div class="page-info">
            @if(session('deletesuccess'))
            <div class="alert alert-info">
              <h3>{{session('deletesuccess')}}</h3>
            </div>
            @endif
          </div>
  <!---                    Banner table                     -->
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-11">
            <div class="panel panel-success">
              <div class="panel-heading">Product List:{{ App\Product::count() }}</div>

              <div class="panel-body">
                  <table class="table table-bordered mytable">
                    <thead>
                      <th>SL.No</th>
                      <th>Category ID</th>
                      <th>Category Name</th>
                      <th>Product Name</th>
                      <th>Product Details</th>
                      <th>Product Image</th>
                      <th>Createed at</th>
                      <th>Updated at</th>
                      <th>Action</th>
                      {{-- <th>Status</th> --}}
                    </thead>
                    @php
                      $flag = 1;
                    @endphp

                    @foreach($products as $product)
                    <tr>
                      <td>{{$flag++}}</td>
                      <td>{{ $product->category_id }}</td>
                      <td>{{ $product->get_category_name->category_name }}</td>
                      {{-- <td>{{ App\Category::find($product->category_id)->category_name }}</td> --}}
                      <td>{{$product->product_name}}</td>
                      <td>{{$product->product_details}}</td>
                      <td> <a href="#"><img width="80px;" src="{{ asset($product->product_image) }}" alt="featured-product-img" class="img-responsive"></a> </td>
                      {{-- <td>{{$product->product_image}}</td> --}}
                      <td>{{$product->created_at}}</td>
                      <td>{{$product->updated_at}}</td>
                      <td>
                        <button class="delete_item btn btn-danger" value="{{ url('/product/delete') }}/{{ $product->id }}">Delete</button> </br>
                        <a style="margin-top:5px" class="btn btn-info" href="{{ url('/product/edit') }}/{{ $product->id }}">Edit</a>
                      </td>
                    </tr>
                    @endforeach
                  </table>
              </div>
            </div>
          </div>
      </div>
  </div>

{{-- {{ print_r($mainslider) }} --}}


@if ((App\Product::onlyTrashed()->count()) > 0)
  <!---                    DEleted Item table                     -->
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
            <div class="panel panel-success">
              <div class="panel-heading">Deleted Item List:{{ App\Product::onlyTrashed()->count() }}</div>

              <div class="panel-body">
                  <table class="table table-bordered mytable">
                    <thead>
                      <thead>
                        <th>SL.No</th>
                        <th>Product Name</th>
                        <th>Product Details</th>
                        <th>Product Image</th>
                        <th>Createed at</th>
                        <th>Action</th>
                        {{-- <th>Status</th> --}}
                      </thead>
                    </thead>
                    @php
                      $flag = 1;
                    @endphp

                    @foreach($product_restores as $product_restore)
                    <tr>
                      <td>{{$flag++}}</td>
                      <td>{{$product_restore->product_name}}</td>
                      <td>{{$product_restore->product_details}}</td>
                      {{-- <td>{{$product->product_image}}</td> --}}
                      <td> <a href="#"><img width="80px" src="{{ asset($product_restore->product_image) }}" alt="featured-product-img" class="img-responsive"></a> </td>
                      <td>{{$product_restore->created_at}}</td>
                      <td>
                        <a class="btn btn-info" href="{{ url('/product/restore') }}/{{ $product_restore->id }}">Restore</a>
                      </td>
                    </tr>
                    @endforeach
                  </table>
              </div>
            </div>
          </div>
    </div>
  </div>

          <!---                    DEleted Item table                     -->
@endif



@endsection
