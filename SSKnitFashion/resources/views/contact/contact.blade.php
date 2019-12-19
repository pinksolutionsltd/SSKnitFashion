@extends('layouts/frontend')
@section('content')



  <!-- Content -->
  <div class="page-content">
      <!-- inner page banner -->
      <section id="about" style="background-image:url({{ asset('frontend_assets/images/indexfooterBack.jpg') }});">
          <div class="container">
              <div class="row">
                  <div class="about-heading text-center">
                      <h2>Contact Us</h2>
                      <p><a href="{{ url('/') }}">home</a> <i class="fa fa-chevron-right"></i><i class="fa fa-chevron-right"></i> <span>Contact</span></p>
                  </div>
              </div>
          </div>
      </section>
      <!-- inner page banner END -->

 <!-- Contact Details Part start -->


<div class="container" style="margin-top:20px;">
  <div class="row">

    <div class="col-md-4" style="background-color:#E62929;">
      <h3>Column 1</h3>
      <div class="contanier">
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-8">
            <img src="{{url('gallaryAsset/Contact_img/Arifin.jpg')}}" class="img-responsive mx-auto d-block img-thumbnail" alt="Paris" width="270" height="350">
          </div>
          <div class="col-md-2"></div>
        </div>
      </div>
      <div class="">
        <h3 style="color:white; text-align: center;">Md. Shariful Arafin</h3>
        <h4 style="color:white; text-align: center;">arafin@ssknitfashion.com</h4>
        <h4 style="color:white; text-align: center;">ssknitfashion@gmail.com</h4>
        <h4 style="color:white; text-align: center;">Cell:  +88-01911 421 621</h4>
      </div>
    </div>

    <div class="col-md-4">
      <h3>Column 2</h3>
      <div class="contanier">
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-8">
            <img src="{{url('gallaryAsset/Contact_img/contact02.jpg')}}" class="img-responsive mx-auto d-block img-thumbnail"  width="270" height="350">
          </div>
          <div class="col-md-2"></div>
        </div>
      </div>
      <div class="jumbotr">
          <h1 style="color:red; text-align: center;">Contact Details</h1>
          <h4 style="color:red; text-align: center;">info@ssknitfashion.com</h4>
          <h4 style="color:red; text-align: center;">www.ssknitfashion.com</h4>
          <h4 style="color:red; text-align: center;"></h4>
          <p class="text-dark"></p>
      </div>
    </div>

    <div class="col-md-4" style="background-color:#E62929;">
      <h3>Column 3</h3>
      <div class="contanier">
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-8">
            <img src="{{url('gallaryAsset/Contact_img/sharif.jpg')}}" class="img-responsive mx-auto d-block img-thumbnail"  width="270" height="350">
          </div>
          <div class="col-md-2"></div>
        </div>
      </div>
      <div class="">
        <h3 style="color:white; text-align: center;">Mr.Sarif Jamal</h3>
        <h4 style="color:white; text-align: center;">sharif@ssknitfashion.com</h4>
        <h4 style="color:white; text-align: center;">Cell: +88-01819 463 537</h4>
        <h4 style="color:#E62929; text-align: center;">Cell: +88-01819 463 537</h4>
      </div>
    </div>

  </div>
</div>


  <!-- Contact Details Part End  -->


<!-- contact area -->
 <div class="content-area">
     <div class="container">
         <div class="row">
             <!-- Map part start -->
             <div class="col-md-12">
                 <h4>Our Location</h4>
                 {{-- <iframe src="{{ url('https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3655.348499495092!2d90.49096741429443!3d23.62768729937141!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b1047195987d%3A0x25063ff334709ccd!2sOsmani+Powro+Stadium!5e0!3m2!1sen!2sbd!4v1555484288460!5m2!1sen!2sbd') }}" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe> --}}
                 {{-- <iframe src="https://www.google.com/maps/embed?pb=" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe> --}}
                 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1827.7146229074224!2d90.49370594585217!3d23.62479396594293!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b10663d7bce1%3A0xc9deba4b476e58c!2sHira+Community+Center!5e0!3m2!1sen!2sbd!4v1556774274709!5m2!1sen!2sbd" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
             </div>
             <!-- Map part END -->
         </div>
         <div class="row p-t50">
             <!-- Left part start -->
             <div class="col-md-9">
                 <h4>Contact form</h4>
             <div class="dzFormMsg"></div>

                 <!-- Contact Section -->
                 @if(session('success'))
                 <div class="alert alert-success">
                   <h3>{{session('success')}}</h3>
                 </div>
                 @endif
                 <div class="p-a30 bg-white clearfix m-b30">
                                             <form method="post" action="{{ url('/contact/insert') }}">
                                                 @csrf
                                                 <div class="row">
                                                     <div class="col-md-6">
                                                         <div class="form-group">
                                                             <div class="input-group"> <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                                                 <input id="contact_name" name="contact_name" type="text" required class="form-control ">
                                                             </div>
                                                         </div>
                                                     </div>
                                                     <div class="col-md-6">
                                                         <div class="form-group">
                                                             <div class="input-group"> <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                                                 <input id="contact_email" name="contact_email" type="email" class="form-control" required >
                                                             </div>
                                                         </div>
                                                     </div>
                                                     <div class="col-md-12">
                                                         <div class="form-group">
                                                             <div class="input-group"> <span class="input-group-addon v-align-t"><i class="fa fa-pencil"></i></span>
                                                                 <textarea id="contact_text" name="contact_message" rows="4" class="form-control" required ></textarea>
                                                             </div>
                                                         </div>
                                                     </div>
                                                     <div class="col-md-12">
                                                         <button name="submit" type="submit" value="Submit" class="site-button "> <span>Submit</span> </button>
                                                         <button name="Resat" type="reset" value="Reset"  class="site-button  m-l30"> <span>Reset</span> </button>
                                                     </div>
                                                 </div>
                                             </form>
                                         </div>
                                     </div>
                                     <!-- Left part END -->


         </div>
     </div>
 </div>
 <!-- contact area  END -->
</div>
<!-- Content END-->

@endsection
