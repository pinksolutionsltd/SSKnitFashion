<link rel="stylesheet" href="{{ asset('gallaryAsset/css/lightbox.min.css') }}">

  @extends('layouts.frontend')
  @section('content')


<div class="container">
  <div class="row">
    <div class="col-md-12">

      <section>

        <div>


          <div class="gallery_product col-md-3 col-sm-4">
            <div class="featured-product">
              <a class="example-image-link product_img" href="{{ url('gallaryAsset/Latest_product_LargeSize/g.jpg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="example-image product_img" src="{{ url('gallaryAsset/Latest_product_item/g.jpg') }}" alt=""/></a>
            </div>
          </div>
          <div class="gallery_product col-md-3 col-sm-4">
            <div class="featured-product">
              <a class="example-image-link product_img" href="{{ url('gallaryAsset/Latest_product_LargeSize/h.jpg') }}" data-lightbox="example-set" data-title="Or press the right arrow on your keyboard."><img class="example-image product_img" src="{{ url('gallaryAsset/Latest_product_item/h.jpg') }}" alt="" /></a>
            </div>
          </div>
          <div class="gallery_product col-md-3 col-sm-4">
            <div class="featured-product">
              <a class="example-image-link product_img" href="{{ url('gallaryAsset/Latest_product_LargeSize/i.jpg') }}" data-lightbox="example-set" data-title="The next image in the set is preloaded as you're viewing."><img class="example-image product_img" src="{{ url('gallaryAsset/Latest_product_item/i.jpg') }}" alt="" /></a>
            </div>
          </div>
          <div class="gallery_product col-md-3 col-sm-4">
            <div class="featured-product">
              <a class="example-image-link product_img" href="{{ url('gallaryAsset/Latest_product_LargeSize/j.jpg') }}" data-lightbox="example-set" data-title="Click anywhere outside the image or the X to the right to close."><img class="example-image product_img" src="{{ url('gallaryAsset/Latest_product_item/j.jpg') }}" alt="" /></a>
            </div>
          </div>
          <div class="gallery_product col-md-3 col-sm-4">
            <div class="featured-product">
              <a class="example-image-link product_img" href="{{ url('gallaryAsset/Latest_product_LargeSize/g.jpg') }}" data-lightbox="example-set" data-title="Click the right half of the image to move forward."><img class="example-image product_img" src="{{ url('gallaryAsset/Latest_product_item/g.jpg') }}" alt=""/></a>
            </div>
          </div>
          <div class="gallery_product col-md-3 col-sm-4">
            <div class="featured-product">
              <a class="example-image-link product_img" href="{{ url('gallaryAsset/Latest_product_LargeSize/h.jpg') }}" data-lightbox="example-set" data-title="Or press the right arrow on your keyboard."><img class="example-image product_img" src="{{ url('gallaryAsset/Latest_product_item/h.jpg') }}" alt="" /></a>
            </div>
          </div>
          <div class="gallery_product col-md-3 col-sm-4">
            <div class="featured-product">
              <a class="example-image-link product_img" href="{{ url('gallaryAsset/Latest_product_LargeSize/i.jpg') }}" data-lightbox="example-set" data-title="The next image in the set is preloaded as you're viewing."><img class="example-image product_img" src="{{ url('gallaryAsset/Latest_product_item/i.jpg') }}" alt="" /></a>
            </div>
          </div>
          <div class="gallery_product col-md-3 col-sm-4">
            <div class="featured-product">
              <a class="example-image-link product_img" href="{{ url('gallaryAsset/Latest_product_LargeSize/j.jpg') }}" data-lightbox="example-set" data-title="Click anywhere outside the image or the X to the right to close."><img class="example-image product_img" src="{{ url('gallaryAsset/Latest_product_item/j.jpg') }}" alt="" /></a>
            </div>
          </div>


        </div>
      </section>

    </div>
  </div>
</div>







    <!-- Footer -->
       		{{-- <footer class="site-footer footer-overlay bg-img-fix" style="background-image: url({{ asset('gallaryAsset/images/background/bg5.jpg') }}); background-position: center bottom; background-size: cover; display: block;">

           </footer> --}}
    <!-- Footer END-->



      {{-- @endsection --}}

@endsection
