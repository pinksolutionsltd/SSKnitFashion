@extends('layouts.frontend')

@section('content')



    <!-- Banner Part Start -->
    <section id="banner">
        <i class="fa fa-chevron-left prv-arrow"></i>
        <i class="fa fa-chevron-right nxt-arrow"></i>
        <div class="banner-slider">
          @foreach ($indexsliders as $indexslider)

            <div class="banner-img" style="background: url({{ $indexslider->indexslider_image }}) no-repeat center; background-size: cover">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="banner-content">
                                <h1>{{ $indexslider->indexslider_heading }}</h1>
                                <h2>{{ $indexslider->indexslider_sub_heading }}</h2>
                                <p>{{ $indexslider->indexslider_details }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

          @endforeach
    </section>
    <!-- Banner Part End -->

    <!-- Service Part Start -->
    {{-- <section id="service">
        <div class="container">
            <div class="row">
                <div class="service-main">
                    <div class="col-md-4">
                        <div class="service-item text-center">
                            <h3><i class="fa fa-truck rotat"></i> Free Shipping</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                    </div>
                    <div class="col-md-4 service-mid">
                        <div class="service-item text-center">
                            <h3><i class="fa fa-support"></i> 24/7 Support</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service-item text-center">
                            <h3><i class="fa fa-money"></i> Cashback</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Service Part End -->
{{-- What we are --}}

<div class="container" style="background-color:#E62929; margin-top:50px;">
  <div class="page-header">
    <h1 style="color:white; text-align: center; text-shadow: 2px 2px 5px blue;">Example Page Header</h1>
  </div>
<div style="font-family: verdana; font-size: 20px;">
    <p ><blockquote style="color:white;">S S Knit Fashion is one of the Reputed Professional Apparel Manufacturer & Supplier from Bangladesh. We are also Sourcing factories and fashion accessories for our valued customer across the world.

  We selected factories based on our clients product quality and price range. Our Concerns are specialized in Knitwear, Sweater and Woven items. All of our associated factories are with all modern facilities and some of are internationally certified like BSCI, OEKO-TEX etc.

  We have experienced and highly technical Management team to execute the production exactly as per the buyer requirements. Our management concentrates fully for buyer satisfaction. Quality is our main motto that is why we believe in long term relationship. We have the flexibility to meet the trend in all aspects of design, quality and Price which are most desired by today’s fashion competitive market.
<br/>
<br/>

      -OUR STRENGTH<br/>
      -TO SATISFY BUYERS WITH ON TIME DELIVERY AND WITH BEST QUALITY.<br/>
      -PROFESSIONALISM IS OUR SPIRIT.<br/>
      -QUALIFIED MANPOWER AND GOOD RELATIONSHIP WITH THE FACTORIES.<br/>
      -GOOD QUALITY AND COMMITMENT IS THE KEY OF OUR SURVIVAL.<br/>



  </blockquote></p>
</div>

</div>

</div>

{{-- What we are --}}





    <!-- Newest Part Start -->

        <section id="newest">
              <div class="heading2 text-center">
                  <h2>Latest Products</h2>
              </div>
            <div class="container">
            <div class="row">
                <div class="newest-main">
                    <div class="col-md-4 col-sm-4">
                        <div class="">
                            <img src="{{ url('frontend_assets/images/x.jpg') }}" alt="newest1" class="img-responsive">
                            <div class="text-center">
                                <h2>new</h2>
                                <h3>jeans shirt</h3>
                                <a href="#">Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="">
                            <img src="{{ url('frontend_assets/images/y.jpg') }}" alt="newest1" class="img-responsive">
                            <div class="text-center">
                                <h2>2017</h2>
                                <h3>women's glass</h3>
                                <a href="#">Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="">
                            <img src="{{ url('frontend_assets/images/z.jpg') }}" alt="newest1" class="img-responsive">
                            <div class="text-center">
                                <h2>best</h2>
                                <h3>mens Shirt</h3>
                                <a href="#">Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Newest Part End -->

    <!-- Featured Part Start -->
  <section id="featured">
      <div class="container">
          <div class="row">
              <div class="featured-main">
                  <div class="heading text-center">
                      <h2>featured Products</h2>
                  </div>
                  <div class="featured-filter">
                      <div class="text-center">

              <button class="btn btn-default active filter-button" data-filter="all">All</button>
            @foreach ($categories as $category)
                <button class="btn btn-default filter-button" data-filter="{{$category->id}}">{{ $category->category_name }}</button>

            @endforeach

                      </div>
            @foreach ($products as $product)

                    <div class="gallery_product col-md-3 col-sm-4 filter all {{ $product->category_id}}">
                          <div class="featured-product">
                              <!-- {{-- <a href="product-details.html"><img src="{{ asset($product->product_image) }}" alt="featured-product-img" class="img-responsive"></a> --}} -->
                              <a class="example-image-link product_img" href="{{ asset($product->product_image) }}"
                                data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
                                <img class="example-image product_img" src="{{ asset($product->product_image) }}" alt=""/></a>
                              <!-- {{-- <div class="overlay2 text-center">
                                  <a href="{{ url('add/cart') }}/{{ $product->id }}"><i class="fa fa-shopping-basket"></i></a>
                              </div> --}} -->
                          </div>
                          <div class="feat-details">
                              <p>{{ $product->product_name }}</p><span>{{ $product->product_details }}</span>
                              <div class="clearfix"></div>
                          </div>

                    </div>

            @endforeach

                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- Featured Part End -->

    <!-- Latest Part Start / CLient Part-->
    <section id="latest">
        <i class="fa fa-chevron-left prv-arrow2"></i>
        <i class="fa fa-chevron-right nxt-arrow2"></i>
        <div class="container">
            <div class="row">
                <div class="latest-main">
                    <div class="heading2 text-center">
                        <h2>Our Clients</h2>
                    </div>
                    <div class="latest-item">

                        <div class="gallery_product col-md-4">
                            <div class="featured-product">
                                <a href="product-details.html"><img src="{{ url('frontend_assets/Clients_Logo/adeepi.jpg') }}" alt="featured-product-img" class="img-responsive"></a>
                                <div class="overlay2 text-center">
                                    <a href="#"><i class="fa fa-random"></i></a>
                                </div>
                            </div>
                            <div class="feat-details">
                                <p>         </p><span>      </span>
                                <div class="clearfix"></div>
                            </div>
                        </div>

                        <div class="gallery_product col-md-4">
                            <div class="featured-product">
                                <a href="product-details.html"><img src="{{ url('frontend_assets/Clients_Logo/alpidex.jpg') }}" alt="featured-product-img" class="img-responsive"></a>
                                <div class="overlay2 text-center">
                                    <a href="#"><i class="fa fa-random"></i></a>
                                </div>
                            </div>
                            <div class="feat-details">
                                <p>        </p><span>      </span>
                                <div class="clearfix"></div>
                            </div>
                        </div>

                        <div class="gallery_product col-md-4">
                            <div class="featured-product">
                                <a href="product-details.html"><img src="{{ url('frontend_assets/Clients_Logo/applebees.jpg') }}" alt="featured-product-img" class="img-responsive"></a>
                                <div class="overlay2 text-center">
                                    <a href="#"><i class="fa fa-random"></i></a>
                                </div>
                            </div>
                            <div class="feat-details">
                                <p>    </p><span>     </span>
                                <div class="clearfix"></div>
                            </div>
                        </div>

                        <div class="gallery_product col-md-4">
                            <div class="featured-product">
                                <a href="product-details.html"><img src="{{ url('frontend_assets/Clients_Logo/colopman.jpg') }}" alt="featured-product-img" class="img-responsive"></a>
                                <div class="overlay2 text-center">
                                    <a href="#"><i class="fa fa-random"></i></a>
                                </div>
                            </div>
                            <div class="feat-details">
                                <p>      </p><span>     </span>
                                <div class="clearfix"></div>
                            </div>
                        </div>

                        <div class="gallery_product col-md-4">
                            <div class="featured-product">
                                <a href="product-details.html"><img src="{{ url('frontend_assets/Clients_Logo/ernestro.jpg') }}" alt="featured-product-img" class="img-responsive"></a>
                                <div class="overlay2 text-center">
                                    <a href="#"><i class="fa fa-random"></i></a>
                                </div>
                            </div>
                            <div class="feat-details">
                                <p>     </p><span>    </span>
                                <div class="clearfix"></div>
                            </div>
                        </div>

                        <div class="gallery_product col-md-4">
                            <div class="featured-product">
                                <a href="product-details.html"><img src="{{ url('frontend_assets/Clients_Logo/force.jpg') }}" alt="featured-product-img" class="img-responsive"></a>
                                <div class="overlay2 text-center">
                                    <a href="#"><i class="fa fa-random"></i></a>
                                </div>
                            </div>
                            <div class="feat-details">
                                <p>  </p><span> </span>
                                <div class="clearfix"></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Part/Client Part End -->

    <!-- Testimonial Part Start -->

<div class="container">
  <div class="row">
    <div class="col-md-12">


          <section id="testimonial" style="background-image:url({{ asset('frontend_assets/images/mybg.jpg') }});">
            {{-- <div class="section-full overlay-black-middle bg-img-fix content-inner" style="background-image:url({{ asset('frontend_assets/images/bg1.jpg') }});"> --}}
              <div class="heading3 text-center">
                  <h2>testimonial</h2>
              </div>
              <div class="testimonial-bg">
                  <i class="fa fa-chevron-left prv-arrow3"></i>
                  <i class="fa fa-chevron-right nxt-arrow3"></i>
                  <div class="container">
                      <div class="row">
                          <div class="testimonial-main">
                              <div class="col-md-6">
                                  <div class="testimonial-item">
                                      <div class="col-md-3 test-img">
                                          <img src="{{ url('frontend_assets/images/CIT03.jpg') }}" alt="testimonial-img" class="img-responsive">
                                      </div>
                                      <div class="col-md-9 test-details">
                                          <h2>Shahin Alom</h2>
                                          <h3>Sketch Artist</h3>
                                          <p>Lorem Ipsum is simply dummy text of the printing and stry. Lorem sum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a ive centuries, but also the leap into electronic.</p>
                                          <h4>Shahin Alom</h4>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="testimonial-item">
                                      <div class="col-md-3 test-img">
                                          <img src="{{ url('frontend_assets/images/CIT04.jpg') }}" alt="testimonial-img" class="img-responsive">
                                      </div>
                                      <div class="col-md-9 test-details">
                                          <h2>Mahadi Tahsan</h2>
                                          <h3>Software Developer</h3>
                                          <p>Lorem Ipsum is simply dummy text of the printing and stry. Lorem sum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a ive centuries, but also the leap into electronic.</p>
                                          <h4>mahadi tahsan</h4>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="testimonial-item">
                                      <div class="col-md-3 test-img">
                                          <img src="images/testimonial1.png" alt="testimonial-img" class="img-responsive">
                                      </div>
                                      <div class="col-md-9 test-details">
                                          <h2>Shohan Hossain</h2>
                                          <h3>Software Developer</h3>
                                          <p>Lorem Ipsum is simply dummy text of the printing and stry. Lorem sum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a ive centuries, but also the leap into electronic.</p>
                                          <h4>Shohan Hossain</h4>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="testimonial-item">
                                      <div class="col-md-3 test-img">
                                          <img src="images/testimonial2.png" alt="testimonial-img" class="img-responsive">
                                      </div>
                                      <div class="col-md-9 test-details">
                                          <h2>Sujon Saha</h2>
                                          <h3>Graphic Designer</h3>
                                          <p>Lorem Ipsum is simply dummy text of the printing and stry. Lorem sum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a ive centuries, but also the leap into electronic.</p>
                                          <h4>Aminul Islam</h4>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </section>
          <!-- Testimonial Part End -->

    </div>
  </div>
</div>



  @endsection
