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
      <li class="active">View Index Slider Table</li>
    </ol>
  </div><!--/.row-->

  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Index Slider Table</h1>
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
          <div class="col-md-8">
            <div class="panel panel-success">
              <div class="panel-heading">Main Slider List:{{ App\Indexslider::count() }}</div>

              <div class="panel-body">
                  <table class="table table-bordered mytable">
                    <thead>
                      <th>SL.No</th>
                      <th>Slider Heading</th>
                      <th>Slider Sub heading</th>
                      <th>Slider Details</th>
                      <th>Createed at</th>
                      <th>Action</th>
                      <th>Slider Image</th>
                      {{-- <th>Status</th> --}}
                    </thead>
                    @php
                      $flag = 1;
                    @endphp

                    @foreach($indexsliders as $indexslider)
                    <tr>
                      <td>{{$flag++}}</td>
                      <td>{{$indexslider->indexslider_heading}}</td>
                      <td>{{$indexslider->indexslider_sub_heading}}</td>
                      <td>{{$indexslider->indexslider_details}}</td>
                      <td>{{$indexslider->created_at}}</td>
                      <td>
                        <button class="delete_item btn btn-danger" value="{{ url('/indexslider/delete') }}/{{ $indexslider->id }}">Delete</button> </br>
                        <a style="margin-top:5px" class="btn btn-info" href="{{ url('/indexslider/edit') }}/{{ $indexslider->id }}">Edit</a>
                      </td>
                      <td> <a href="#"><img width="80px" src="{{ asset($indexslider->indexslider_image) }}" alt="featured-product-img" class="img-responsive"></a> </td>

                    </tr>
                    @endforeach
                  </table>
              </div>
            </div>
          </div>
      </div>
  </div>

{{-- {{ print_r($mainslider) }} --}}


@if ((App\Indexslider::onlyTrashed()->count()) > 0)
  <!---                    DEleted Item table                     -->
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
            <div class="panel panel-success">
              <div class="panel-heading">Deleted Item List:{{ App\Indexslider::onlyTrashed()->count() }}</div>

              <div class="panel-body">
                  <table class="table table-bordered mytable">
                    <thead>
                      <th>SL.No</th>
                      <th>Slider Heading</th>
                      <th>Slider Sub heading</th>
                      <th>Slider Details</th>
                      <th>Createed at</th>
                      <th>Action</th>
                      <th>Slider Image</th>
                    </thead>
                    @php
                      $flag = 1;
                    @endphp

                    @foreach($indexslider_restores as $indexslider_restore)
                    <tr>
                      <td>{{$flag++}}</td>
                      <td>{{$indexslider_restore->indexslider_heading}}</td>
                      <td>{{$indexslider_restore->indexslider_sub_heading}}</td>
                      <td>{{$indexslider_restore->indexslider_details}}</td>
                      <td>{{$indexslider_restore->created_at}}</td>
                      <td>
                        <a class="btn btn-danger" href="{{ url('/indexslider/restore') }}/{{ $indexslider_restore->id }}">Restore</a>
                      </td>
                      <td> <a href="#"><img width="80px" src="{{ asset($indexslider_restore->indexslider_image) }}" alt="featured-product-img" class="img-responsive"></a> </td>
                      {{-- <td> <a href="#"><img width="80px" src="{{ asset($mainslider->slider_image) }}" alt="featured-product-img" class="img-responsive"></a> </td> --}}
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
