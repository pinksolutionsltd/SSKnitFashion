@extends('layouts/dashboard')

@section('indexslider-page')
  active
@endsection

@section('content')
  <div class="row">
    <ol class="breadcrumb">
      <li><a href="{{ url('/home') }}">
        <em class="fa fa-home"></em>
      </a></li>
      <li class="active">Index Slider</li>
    </ol>
  </div><!--/.row-->


          <div class="container center_div">
              <div class="col-md-8">
                  <div class="panel panel-success">
                      <div class="panel-heading">Add Item</div>

                      @if(session('success'))
                      <div class="alert alert-success">
                        <h3>{{session('success')}}</h3>
                      </div>
                      @endif

                      <div class="panel-body">
                        <form action="{{ url('/indexslider/insert') }}" method="post" enctype="multipart/form-data">
                          <!-- {{ csrf_field() }} -->
                          @csrf
                          <div class="form-group">
                            <label>Slider Heading</label>
                            <input type="text" class="form-control" placeholder="Enter Slider Heading" name="indexslider_heading" value="{{ old('indexslider_heading') }}">
                          </div>
                          <div class="form-group">
                            <label>Slider Sub Heading</label>
                            <input type="text" class="form-control" placeholder="Enter Slider Sub Heading" name="indexslider_sub_heading" value="{{ old('indexslider_sub_heading') }}">
                          </div>
                          <div class="form-group">
                            <label>Slider Details</label>
                            <textarea name="indexslider_details" class="form-control"></textarea>
                          </div>
                          <div class="form-group">
                            <label>Slider Image</label>
                            <input type="file" class="form-control" name="indexslider_image">
                          </div>

                          <button type="submit" class="btn btn-primary">Add</button>
                        </form>
                      </div>
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

@endsection
