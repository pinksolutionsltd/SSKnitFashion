@extends('layouts.dashboard')

@section('category-page')
active
@endsection

@section('content')
<div class="row">
  <ol class="breadcrumb">
    <li><a href="{{ url('/home') }}">
      <em class="fa fa-home"></em>
    </a></li>
    <li class="active">Add Category</li>
  </ol>
</div><!--/.row-->

<div class="row">
  <div class="col-lg-12">
    <h1 class="page-header">Add Category</h1>
  </div>
</div><!--/.row-->

<!--                    Category table                     -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="panel panel-success">
            <div class="panel-heading">Category List:{{ App\Category::count() }}</div>

            <div class="panel-body">
                <table class="table table-bordered">
                  <thead>
                    <th>SL.No</th>
                    <th>Category Name</th>
                    <th>Createed at</th>
                    <th>Updated at</th>
                    <th>Status</th>
                    <th>Action</th>
                  </thead>
                  @php
                    $flag = 1;
                  @endphp
                  @foreach($categories as $category)
                  <tr>
                    <td>{{$flag++}}</td>
                    <td>{{$category->category_name}}</td>
                    <td>{{$category->created_at->format('d-m-Y h:i:s A')}} <br> {{$category->created_at->diffForHumans()}}</td>
                    <td>{{$category->updated_at ? $category->updated_at->format('d-m-Y h:i:s A'):"Not Updated"}}</td>
                    <td>
                      @if($category->status == 1)
          <span style="background:green; color:white; padding:5px; border-radius:3px;">Active</span>
                      @else
          <span style="background:red; color:white; padding:5px; border-radius:3px;">Deactive</span>
                      @endif
                    </td>
                    <td>
                      <a class="btn btn-sm btn-info" href="{{url('change/status/category')}}/{{$category->id}}"><span style="color:white">Change Status</span></a>
                  </td>

                  </tr>
                  @endforeach
                </table>
            </div>
          </div>
        </div>



    <!--              Product Add Option                       -->
            <div class="col-md-4">
                <div class="panel panel-success">
                    <div class="panel-heading">Add Category</div>

                    @if(session('success'))
                    <div class="alert alert-success">
                      {{session('success')}}
                    </div>
                    @endif

                    <div class="panel-body">
                      <form action="{{ url('/category/insert') }}" method="post">
                        <!-- {{ csrf_field() }} -->
                        @csrf
                        <div class="form-group">
                          <label>Category Name</label>
                          <input type="text" class="form-control" placeholder="Enter Category Name" name="category_name" value="{{ old('category_name') }}">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                    </div>
                        @if($errors->all())
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $category)
                            <li>{{ $category }}</li>
                            @endforeach
                        </div>
                        @endif
                </div>
            </div>
        </div>
</div>
@endsection
