@extends('layouts.frontend')

@section('content')


  <!-- About Banner Start -->
     <section id="about" style="background-image:url({{ asset('frontend_assets/images/indexfooterBack.jpg') }});">
         <div class="container">
             <div class="row">
                 <div class="about-heading text-center">
                     <h2>About us</h2>
                     <p><a href="{{ url('/') }}">home</a> <i class="fa fa-chevron-right"></i><i class="fa fa-chevron-right"></i> <span>about</span></p>
                 </div>
             </div>
         </div>
     </section>
     <!-- About Banner End -->

     <!-- About Details Start -->
     <section id="about-details">
         <div class="container">
             <div class="row">
                 <div class="about-details-main">
                     <div class="col-md-7">
                         <div class="about-img">
                             <img src="{{ url('frontend_assets/images/Officeview.jpg') }}" alt="about-img" class="img-responsive">
                         </div>
                     </div>
                     <div class="col-md-5">
                         <div class="about-detail">
                           <p><strong style="font-size: 12.16px;"><span style="font-size: 15.5pt; mso-bidi-font-size: 11.0pt; line-height: 115%; font-family: 'Verdana','sans-serif'; mso-fareast-font-family: 'Times New Roman'; mso-bidi-font-family: 'Times New Roman'; color: red; mso-ansi-language: EN-US; mso-fareast-language: EN-US; mso-bidi-language: AR-SA;">S S Knit Fashion</span></strong><span style="font-family: Verdana, sans-serif; font-size: 12.16px;"> is one of the leading readymade garments buying agent &amp; trading based company in Bangladesh Since 2008. We are exporting knit, woven &amp; sweater items worldwide. We produced high quality labeled garments. We prepare our brief in collaboration with our customers, based on the market requirements of a given territory and the requirements of individual customers.</span></p>
<p class="MsoNormal"><span style="font-family: 'Verdana','sans-serif';">We have the expertise needed to fill the requirements of our customer’s considerable insight and specialist knowledge is essential, to be in a position to advice customers to ensure they get top quality at the right price. Based on the stipulations of the customer, we work out a brief together with our suppliers to achieve the optimum solution.</span></p>
<p class="MsoNormal"><span style="font-family: 'Verdana','sans-serif';"> If you have any requirement kindly feel free to contact us with your specification like fabric count, design, style, size, color and your target price. Please don’t worry about the quality and delivery period of the product. We believe that best quality and best service sales the products and that is the motto of our business. We may send you photographs &amp; samples of your desired products. Would you like to see our sample quality, kindly let us know your present demands enabling us to forward you some samples just for your checking? We will appreciate your own styles by email. Thanking you in kind anticipation, we are looking forward to establish lasting and healthy business relations with your good self. </span></p>
<p class="MsoNormal"><span style="font-family: 'Verdana','sans-serif';"> </span></p>
<p class="MsoNormal"><span style="font-family: 'Verdana','sans-serif';"><strong>Our Vision: </strong></span></p>
<p class="MsoNormal"><span style="font-family: 'Verdana','sans-serif';">Target to be the most preferred garment sourcing agency for global clients, so as to maintain our reputation for credibility and integrity with our customers, vendors, and employees.</span></p>
<p class="MsoNormal"><span style="font-family: 'Verdana','sans-serif';"><strong>Our mission:</strong> </span></p>
<p class="MsoNormal"><span style="font-family: 'Verdana','sans-serif';">• Customized solutions to global clients must be provided as per their requirements and to achieve consistent high quality levels and on-time delivery schedules, through a team of committed personnel and a proven set of vendors with world class manufacturing facilities. </span></p>
<p class="MsoNormal"><span style="font-family: 'Verdana','sans-serif';">• Only to operate without compromising on quality, delivery and profitability Our mission is to provide our clients with efficient and effective sourcing solution for their requirements. This includes taking a lead role in structuring and executing transactions that benefit our clients and help their business growth. We never compromise on efficient services such as: </span></p>
<p class="MsoNormal"><span style="font-family: 'Verdana','sans-serif';">• Immediate feed back/reply to customer’s inquiries &amp; questions.</span></p>
<p class="MsoNormal"><span style="font-family: 'Verdana','sans-serif';">• Competitive Prices in a prompt action and service . </span></p>
<p class="MsoNormal"><span style="font-family: 'Verdana','sans-serif';">• Continuous / Follow-up monitoring of each order from raw material till final packing by Quality Assurance team </span></p>
<p class="MsoNormal"><span style="font-family: 'Verdana','sans-serif';">• Customers keep on to be posted with all developments taking place at our end to avoid hassle at last stage. </span></p>
<p class="MsoNormal"><span style="font-family: 'Verdana','sans-serif';">• Final Inspection at loading for compliance of given standards.</span></p>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <!-- About Details End -->



     <!-- Designer Part Start -->
  {{-- <div class="section-full overlay-black-middle bg-img-fix content-inner" style="background-image:url({{ asset('frontend_assets/images/bg1.jpg') }});"> --}}

     <section id="designer">
         <div class="container">
             <div class="row">
                 <div class="heading6 text-center">
                     <h2>Our Management</h2>
                 </div>
                 <div class="designer-main">
                     <div class="col-md-3 col-sm-6">
                         <div class="designer-item">
                             <div class="designer-img">
                                 <img src="{{ url('frontend_assets/images/Arifin.jpg') }}" alt="designer1" class="img-responsive">
                                 <div class="overlay4 text-center">
                                     <p><a href="#"><i class="fa fa-facebook"></i></a></p>
                                     <p><a href="#"><i class="fa fa-twitter"></i></a></p>
                                     <p><a href="#"><i class="fa fa-google-plus"></i></a></p>
                                 </div>
                             </div>
                             <div class="designer-details text-center">
                                 <h3>Sakeba aney</h3>
                                 <p>Graphic designer</p>
                             </div>
                         </div>
                     </div>
                     <div class="col-md-3 col-sm-6">
                         <div class="designer-item">
                             <div class="designer-img">
                                 <img src="{{ url('frontend_assets/images/aboutaa.jpg') }}" alt="designer1" class="img-responsive">
                                 <div class="overlay4 text-center">
                                     <p><a href="#"><i class="fa fa-facebook"></i></a></p>
                                     <p><a href="#"><i class="fa fa-twitter"></i></a></p>
                                     <p><a href="#"><i class="fa fa-google-plus"></i></a></p>
                                 </div>
                             </div>
                             <div class="designer-details text-center">
                                 <h3>Tahsan Mony</h3>
                                 <p>Web designer</p>
                             </div>
                         </div>
                     </div>
                     <div class="col-md-3 col-sm-6">
                         <div class="designer-item">
                             <div class="designer-img">
                                 <img src="{{ url('frontend_assets/images/aboutbb.jpg') }}" alt="designer1" class="img-responsive">
                                 <div class="overlay4 text-center">
                                     <p><a href="#"><i class="fa fa-facebook"></i></a></p>
                                     <p><a href="#"><i class="fa fa-twitter"></i></a></p>
                                     <p><a href="#"><i class="fa fa-google-plus"></i></a></p>
                                 </div>
                             </div>
                             <div class="designer-details text-center">
                                 <h3>Anamika Jeny</h3>
                                 <p>Web developer</p>
                             </div>
                         </div>
                     </div>
                     <div class="col-md-3 col-sm-6">
                         <div class="designer-item">
                             <div class="designer-img">
                                 <img src="{{ url('frontend_assets/images/sharif.jpg') }}" alt="designer1" class="img-responsive">
                                 <div class="overlay4 text-center">
                                     <p><a href="#"><i class="fa fa-facebook"></i></a></p>
                                     <p><a href="#"><i class="fa fa-twitter"></i></a></p>
                                     <p><a href="#"><i class="fa fa-google-plus"></i></a></p>
                                 </div>
                             </div>
                             <div class="designer-details text-center">
                                 <h3>Ishtiaq Jony</h3>
                                 <p>graphic designer</p>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
{{-- </div> --}}
     <!-- Designer End -->

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
                             <div class="ratings">
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star-half"></i>
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
                             <div class="ratings">
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star-half"></i>
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
                             <div class="ratings">
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star-half"></i>
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
                             <div class="ratings">
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star-half"></i>
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
                             <div class="ratings">
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star-half"></i>
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
                             <div class="ratings">
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star"></i>
                                 <i class="fa fa-star-half"></i>
                             </div>
                         </div>

                     </div>
                 </div>
             </div>
         </div>
     </section>
     <!-- Latest Part/Client Part End -->


@endsection
