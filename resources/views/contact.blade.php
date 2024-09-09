 
@extends('layouts.app')
@section('meta_title',)
@section('meta_keywords',)
@section('meta_description',)

   
@section('content')

<div class="breadcrumb__area breadcrumb__overlay breadcrumb__height p-relative fix" data-background="assets/img/bretcum.jpg" style="background-image: url(&quot;assets/img/bretcum.jpg&quot;);">
<div class="container">
<div class="row">
<div class="col-xxl-12">
<div class="breadcrumb__content z-index d-flex justify-content-between align-items-end">
<div class="breadcrumb__section-title-box">
<h1 class="breadcrumb__title">Contact Us</h1>
</div>

<div class="breadcrumb__list"><span><a href="/">Home</a></span> <span class="dvdr"><i>/</i></span> <span>Contact Us</span></div>
</div>
</div>
</div>
</div>
</div>
   
	 

 <!-- contact area start -->
 <div class="tp-contact-3-area pt-120 pb-90">
	<div class="container">
	   <div class="row">
		  <div class="col-xl-4 col-lg-4 col-md-6 mb-30 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
			 <div class="tp-contact-3-item text-center">
				<div class="tp-contact-3-icon">
				   <span><img class="z-index" src="assets/img/contact/icon-1.png" alt=""></span>
				</div>
				<div class="tp-contact-3-text">
				   <h5 class="tp-contact-3-title">Visit our place</h5>
				  501, 5th Floor,plot No. 7, Sector 22,i.t Park, Panchkula, -134109
				</div>
			 </div>
		  </div>
		  <div class="col-xl-4 col-lg-4 col-md-6 mb-30 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".5s">
			 <div class="tp-contact-3-item text-center">
				<div class="tp-contact-3-icon">
				   <span><img class="z-index" src="assets/img/contact/icon-2.png" alt=""></span>
				</div>
				<div class="tp-contact-3-text">
				   <h5 class="tp-contact-3-title">Email Us</h5>
				   <a href="mailto:allmolecules1@gmail.com">
									allmolecules1@gmail.com</a>
									<br>
									<a href="mailto:purchaseallmolecules04@gmail.com">
										purchaseallmolecules04@gmail.com</a></div>
			 </div>
		  </div>
		  <div class="col-xl-4 col-lg-4 col-md-6 mb-30 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".7s">
			 <div class="tp-contact-3-item text-center">
				<div class="tp-contact-3-icon">
				   <span><img class="z-index" src="assets/img/contact/icon-3.png" alt=""></span>
				</div>
				<div class="tp-contact-3-text">
				   <h5 class="tp-contact-3-title">Contact Us</h5>
				 
				   <a href="tel:+91-9878222566"> +91-9878222566</a>
				   <br>
					<a href="tel:+91-98169-00331">+91-82195-63119</a>	
				</div>
			 </div>
		  </div>
	   </div>
	</div>
 </div>
 <!-- contact area end -->

 <!-- form area start -->
 <div class="tp-contact-form-area pb-130">
	<div class="container">
	   <div class="row">
		  <div class="col-xl-12">
			 <div class="tp-contact-form-border">
				<h4 class="tp-contact-form-title">Send your message</h4>
				<form action="/enquiry/store" method="POST">
                @csrf
                <div class="row">
                                 <div class="col-md-6 col-sm-12">
                                    <div class="contact-form-section">
                                       <input type="text" class="form-control" placeholder="Name" id="name" name="name">
                                    </div>
                                 </div>
                                 <div class="col-md-6 col-sm-12">
                                    <div class="contact-form-section">
                                       <input type="email" class="form-control" placeholder="Email" id="email" name="email">
                                    </div>
                                 </div>
                                 <div class="col-md-6 col-sm-12">
                                    <div class="contact-form-section">
                                       <input type="text" class="form-control" placeholder="Phone" id="phone" name="phone">
                                    </div>
                                 </div>
                                 <div class="col-md-6 col-sm-12 mb-20">
                                    <div class="contact-form-section">
                                       <input type="text" class="form-control" placeholder="city" id="city" name="city">
                                    </div>
                                 </div>
                                 <div class="col-12 mb-20">
						      <div class="tp-contact-form-input-box">
							<textarea id="message" name="message" placeholder="Write your message" required></textarea>
						 </div>
					  </div>
                                 
                                   <div class="col-md-12 col-sm-12 pb-4">
                                  	<button type="submit" name="submit" class="tp-btn"><span>SEND message</span></button>
                                 </div>
                                
                              </div>
                           </form>
				
			
			 </div>
		  </div>
	   </div>
	</div>
 </div>
 <!-- form area end -->

 <!-- map area end -->
 <div class="tp-map-area">
	<div class="tp-map__item">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d439156.6257294416!2d76.26985658906253!3d30.692776200000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390f9324f142686d%3A0x15288e8b04caec27!2sAll%20Molecules!5e0!3m2!1sen!2sus!4v1698228507840!5m2!1sen!2sus" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
   </div>
 </div>
 <!-- map area start -->
     @endsection       