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
      <li class="active">Product Item</li>
    </ol>
  </div><!--/.row-->


  <div class="container center_div">
    <div class="col-md-8">
        <div class="panel panel-success">
            <div class="panel-heading">Product Item</div>

            @if(session('success'))
            <div class="alert alert-success">
              <h3>{{session('success')}}</h3>
            </div>
            @endif

    <div class="panel-body">
          <form action="{{ url('/product/insert') }}" method="post" enctype="multipart/form-data">
            <!-- {{ csrf_field() }} -->
              @csrf

              <div class="form-group">
                <label>Category Name</label>
                <select class="form-control" name="category_id">
                  <option value="">-Seclect One-</option>
                  @foreach($categories as $category)
                  <option value="{{$category->id}}">-{{$category->category_name}}-</option>
                  @endforeach
                </select>
              </div>

              <div class="form-group">
                <label>Product Name</label>
                <input type="text" class="form-control" placeholder="Enter Product Name" name="product_name" value="{{ old('product_name') }}">
              </div>
              <div class="form-group">
                <label>Product Details</label>
                <input type="text" class="form-control" placeholder="Enter Product Details" name="product_details" value="{{ old('product_details') }}">
              </div>
              <div class="form-group">
                <label>Product Image</label>
                <input type="file" class="form-control" name="product_image">
              </div>
              <button type="submit" class="btn btn-primary">Add</button>
          </form>

                          @if($errors->all())
                          <div class="alert alert-danger">
                              @foreach ($errors->all() as $value)
                                <h3><li>{{ $value }}</li></h3>
                              @endforeach
                          </div>
                          @endif
      </div>
    </div>
  </div>
</div>

@endsection
