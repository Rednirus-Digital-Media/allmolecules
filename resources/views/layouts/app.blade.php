<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>@yield('meta_title')</title>
	<meta name="title" content="@yield('meta_title')">
	<meta name="keywords" content="@yield('meta_keywords')">
	<meta name="description" content="@yield('meta_description')">

	<meta property="og:title" content="@yield('meta_title')" />
	<meta property="og:description" content="@yield('meta_description')" />
	<link rel="icon" type="image/x-icon" href="/assets/images/medmom.png">
	<meta property="og:url" content="{{ Request::fullUrl() }}" />

	<meta property="og:type" content="website" />
	<meta property="og:locale" content="en_GB" />
	<meta name="google-site-verification" content="nnqCRSzVzF82-n3JEq7p4APu2qrddmykGXiJq_Qc0bI" />
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:description" content="@yield('meta_description')" />
	<meta name="twitter:title" content="@yield('meta_title')" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Gentium+Book+Plus:ital@1&family=Montserrat&family=Poppins&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link
		href="https://fonts.googleapis.com/css2?family=Abhaya+Libre:wght@400;500;600;700;800&family=Montserrat:wght@300;400;500;600;700&display=swap"
		rel="stylesheet">
<!-- Stylesheets -->


<!-- Place favicon.ico in the root directory -->
<link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/favicon.png">

<!-- CSS here -->
<link rel="stylesheet" href="assets/css/bootstrap.css">
<link rel="stylesheet" href="assets/css/animate.css">
<link rel="stylesheet" href="assets/css/swiper-bundle.css">
<link rel="stylesheet" href="assets/css/slick.css">
<link rel="stylesheet" href="assets/css/magnific-popup.css">
<link rel="stylesheet" href="assets/css/flaticon_biddut.css">
<link rel="stylesheet" href="assets/css/font-awesome-pro.css">
<link rel="stylesheet" href="assets/css/spacing.css">
<link rel="stylesheet" href="assets/css/custom-animation.css">
<link rel="stylesheet" href="assets/css/main.css">



</head>


   <!-- back to top start -->
   <div class="back-to-top-wrapper">
      <button id="back_to_top" type="button" class="back-to-top-btn">
         <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M11 6L6 1L1 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
               stroke-linejoin="round" />
         </svg>
      </button>
   </div>
   <!-- back to top end -->

   <!-- search popup start -->
   <div class="search__popup">
      <div class="container">
         <div class="row">
            <div class="col-xxl-12">
               <div class="search__wrapper">
                  <div class="search__top d-flex justify-content-between align-items-center">
                     <div class="search__logo">
                        <a href="/">
                           <img src="/assets/img/am-logo-3" alt="">
                        </a>
                     </div>
                     <div class="search__close">
                        <button type="button" class="search__close-btn search-close-btn">
                           <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <path d="M17 1L1 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                 stroke-linejoin="round" />
                              <path d="M1 1L17 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                 stroke-linejoin="round" />
                           </svg>
                        </button>
                     </div>
                  </div>
                  <div class="search__form">
                     <form action="#">
                        <div class="search__input">
                           <input class="search-input-field" type="text" placeholder="Type here to search...">
                           <span class="search-focus-border"></span>
                           <button type="submit">
                              <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                 <path
                                    d="M9.55 18.1C14.272 18.1 18.1 14.272 18.1 9.55C18.1 4.82797 14.272 1 9.55 1C4.82797 1 1 4.82797 1 9.55C1 14.272 4.82797 18.1 9.55 18.1Z"
                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                 <path d="M19.0002 19.0002L17.2002 17.2002" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                              </svg>
                           </button>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- search popup end -->

   <!-- tp-offcanvus-area-start -->
   <div class="tpoffcanvas-area">
	
      <div class="tpoffcanvas">
         <div class="tpoffcanvas__close-btn">
            <button class="close-btn"><i class="fal fa-times"></i></button>
         </div>
         <div class="tpoffcanvas__logo">
            <a href="/">
                     <img src="/assets/img/am-logo-3.png" alt="">
            </a>
         </div>
         <div class="tpoffcanvas__title">
            <p>Top Injection Manufacturing Company in India Introducing "All Molecules," a distinguished name in the pharmaceutical landscape of India.</p>
         </div>
         <div class="tp-main-menu-mobile d-xl-none"></div>
         <div class="tpoffcanvas__contact-info">
            <div class="tpoffcanvas__contact-title">
               <h5>Contact us</h5>
            </div>
            <ul>
               <li>
                  <i class="fa-light fa-location-dot"></i>
                  <a href="https://www.google.com/maps/@23.8223586,90.3661283,15z" target="_blank">501, 5th Floor, Plot No. 7, Sector 22, I.T Park, Panchkula, -134109</a>
               </li>
               <li>
              
                  <a href="mailto:allmolecules1@gmail.com"><i
                              class="flaticon-mail-1"></i><span class="__cf_email__" data-cfemail="b6d4dfd2d2c3c2d5d9dbc6d7d8cff6d1dbd7dfda98d5d9db">
								allmolecules1@gmail.com</span></a>
<BR>
								<a href="mailto:purchaseallmolecules04@gmail.com"><i
									class="flaticon-mail-1"></i><span class="__cf_email__" data-cfemail="b6d4dfd2d2c3c2d5d9dbc6d7d8cff6d1dbd7dfda98d5d9db">
									  purchaseallmolecules04@gmail.com

									</span></a>
               </li>
               <li>
                  <i class="fal fa-phone-alt"></i>
                  <a href="tel:+91-9878222566"> +91-9878222566</a>
								<br>
								 <i class="fal fa-phone-alt"></i>
                                 <a href="tel:+91-98169-00331">+91-82195-63119</a>
               </li>
            </ul>
         </div>
        
        
      </div>
   </div>
   <div class="body-overlay"></div>
   <!-- tp-offcanvus-area-end -->

   <header class="tp-header-height">
      <!-- header top area start -->
      <div class="tp-header-top-area tp-header-top-space black-bg">
         <div class="container custom-container-1">
            <div class="row align-items-center">
               <div class="col-xl-6 col-lg-8 col-md-8 col-sm-6">
                  <div class="tp-header-top-left-box text-center text-md-start">
                     <ul>
                        <li>
                           <i class="flaticon-pin"></i>
                           <a href="#">501, 5th Floor, Plot No. 7, Sector 22, I.T Park, Panchkula, -134109</span></a>
                        </li>
                       
                     </ul>
                  </div>
               </div>
               <div class="col-xl-6 col-lg-4 col-md-4 col-sm-6 d-none d-sm-block">
                  <div class="tp-header-top-right-box text-end">
                     <ul>
                      
                        <li>
                           <div class="tp-header-top-right-social">
                              <a href="https://www.facebook.com/people/All-Molecules/100081895584622/?notif_id=1693627506189798&notif_t=profile_plus_admin_invite&ref=notif"target="_blank"><i class="fa-brands fa-facebook-f" ></i></a>
                              <a href="https://www.instagram.com/allmoleculespvtltd/"target="_blank"><i class="fa-brands fa-instagram" target="_blank"></i></a>
                              <a href="#"><i class="fa-brands fa-linkedin-in" target="_blank"></i></a>
                              <a href="#"><i class="fa-brands fa-twitter" target="_blank"></i></a>
                           </div>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- header top area end -->

      <!-- header area start -->
      <div id="header-sticky" class="tp-header-area">
         <div class="container custom-container-1">
            <div class="row align-items-center">
               <div class="col-xxl-2 col-xl-2 col-lg-4 col-md-4 col-6">
			   <div class="alldd">
                  <div class="tp-header-logo">
                     <a href="/">
                        <img src="/assets/img/am-logo-3.png" alt="">
                     </a>   </div>
                  </div>
               </div>
               <div class="col-xxl-5 col-xl-6 d-none d-xl-block">
                  <div class="tp-header-main-menu tp-header-menu-border text-end text-xxl-start">
                     <nav class="tp-main-menu-content">
                        <ul>
							<li>
								<a href="/">Home</a>
							 </li>
                        
                           <li class="has-dropdown"> 
                              <a href="#">About Us</a>
                              <ul class="submenu tp-submenu">
                                 <li><a href="/company-overview">Company Overview</a></li>
                                 <li><a href="/vision-mission-value">Vision / Mission / Value</a></li>
                                 <li><a href="/why-us">Why Us</a></li>
                                
                              </ul>
                           </li>
                           <li class="has-dropdown">
                              <a href="#">Service</a>
                              <ul class="submenu tp-submenu">
                                 <li><a href="/third-party-manufacturing">
								
									Third Party Manufacturing</a></li>
                          
                              </ul>
                           </li>
                       
						 
						 
						 
						 
						  <li class="has-dropdown">
                              <a href="#">Our Product</a>
                              <ul class="submenu tp-submenu">
                                        <li><a href="/injection">Injection</a> </li>
                                <li><a href="/liquid-injections">Liquid Injections</a> </li>
                                    <li><a href="/beta-lactams-injection">Beta Lactams Injections</a> </li>
                                 <li><a href="/critical-care-injections">Critical Care Injections </a> </li>
                                <li><a href="/lyophlizied-powder-injections">Lyophlizied Powder Injections</a> </li>
                              <li><a href="/nasal-drops">Nasal Drops</a> </li>
                                <li><a href="/ear-eyes-drops">Ear Eyes Drops</a> </li>
                              </ul>
                           </li>
						 <li>
                              <a href="/our-gallery">Our Gallery</a>
                           </li>
                         <li>
                              <a href="/contact-us">Contact</a>
                           </li>
						
                           
                        </ul>
                     </nav>
                  </div>
               </div>
               <div class="col-xxl-5 col-xl-4 col-lg-8 col-md-8 col-6">
                  <div class="tp-header-right-box">
                     <div class="tp-header-right-action d-flex align-items-center justify-content-end">
						<div class="tp-header-right-tel-box d-none d-xxl-block">
							<div class="tp-header-right-tel-icon d-flex align-items-center">
								<i class="flaticon-mail-1"></i>
							   <div class="tp-header-right-tel-content">
								
								  <a href="mailto:allmolecules1@gmail.com">
									allmolecules1@gmail.com</a>
									<br>
									<a href="mailto:purchaseallmolecules04@gmail.com

									">
										purchaseallmolecules04@gmail.com

									</a>
							   </div>
							</div>
						 </div>
                      
                        <div class="tp-header-right-tel-box d-none d-xxl-block">
                           <div class="tp-header-right-tel-icon d-flex align-items-center">
                              <i class="flaticon-phone-call"></i>
                              <div class="tp-header-right-tel-content">
                               
                                 <a href="tel:+91-9878222566"> +91-9878222566</a>
								<br>
                                 <a href="tel:+91-98169-00331">+91-82195-63119</a>
                              </div>
                           </div>
                        </div>
                        <div class="tp-header-bar d-xl-none">
                           <button class="tp-menu-bar"><i class="fa-sharp fa-regular fa-bars-staggered"></i></button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- header area end -->
   </header>


	@yield('content')

 <!-- footer area start -->
 <div class="tp-footer-area tp-footer-space p-relative z-index-3 black-bg">
	<div class="tpggrsas">
         <div class="tp-footer-shape-1 d-none d-lg-block">
            <img src="assets/img/footer/shape-1-1.png" alt="">
         </div>
         <div class="tp-footer-shape-2 d-none d-lg-block">
            <img src="assets/img/footer/shape-1-2.png" alt="">
         </div>
         <div class="container">
            <div class="row">
               <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-50 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
                  <div class="tp-footer-widget footer-cols-1">
                      <div data-aos="fade-down-right" data-aos-duration="3000">
                     <div class="tp-footer-logo">
                        <a href="/"><img src="/assets/img/am-logo-3.png" alt=""></a>
                     </div> </div>
                     <div class="tp-footer-text">
                        <p>Top Injection Manufacturing Company in India  Introducing "All Molecules," a distinguished name in the pharmaceutical landscape of India. </p>
                     </div>
                     <div class="tp-footer-contact">
                        <a href="mailto:allmolecules1@gmail.com"><i
                              class="flaticon-mail-1"></i><span class="__cf_email__" data-cfemail="b6d4dfd2d2c3c2d5d9dbc6d7d8cff6d1dbd7dfda98d5d9db">
								allmolecules1@gmail.com</span></a>

								<a href="mailto:purchaseallmolecules04@gmail.com"><i
									class="flaticon-mail-1"></i><span class="__cf_email__" data-cfemail="b6d4dfd2d2c3c2d5d9dbc6d7d8cff6d1dbd7dfda98d5d9db">
									  purchaseallmolecules04@gmail.com

									</span></a>
                       <i class="flaticon-location-1"></i><span style="margin-left: 18px;">501, 5th Floor, Plot No. 7, Sector 22,</span><br> <span style="margin-left:35px;">I.T Park, Panchkula, -134109</span>
                     </div>
                  </div>
				  <div class="tp-copyright-social">
					<a href="https://www.facebook.com/people/All-Molecules/100081895584622/?notif_id=1693627506189798&notif_t=profile_plus_admin_invite&ref=notif" target="_blank"><i class="fa-brands fa-facebook-f" ></i></a>
					<a href="https://www.instagram.com/allmoleculespvtltd/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
					<a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
					<a href="#"><i class="fa-brands fa-twitter" target="_blank"></i></a>
				 </div>
               </div>
               <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 mb-50 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".5s">
                  <div class="tp-footer-widget footer-cols-2">
                     <h4 class="tp-footer-title">Quick Links</h4>
                     <div class="tp-footer-list">
                        <ul>
                           <li><a href="/"><i class="fa-sharp fa-solid fa-plus"></i>Home</a></li>
                           <li><a href="#"><i class="fa-sharp fa-solid fa-plus"></i>About Us</a></li>
						   <li><a href="/company-overview">Company Overview</a></li>
                           <li><a href="/vision mission value"><i class="fa-sharp fa-solid fa-plus"></i>Vision Mission Value</a></li>
                            <li><a href="/why-us">Why Us</a></li>
                           <li><a href="#"><i class="fa-sharp fa-solid fa-plus"></i>Contact Us</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-50 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".7s">
                  <div class="tp-footer-widget footer-cols-3">
                     <h4 class="tp-footer-title">Our Products</h4>
                     <div class="tp-footer-list">
                        <ul>
                            <li><a href="/injection">Injection</a> </li>
                                <li><a href="/liquid-injections">Liquid Injections</a> </li>
                                <li><a href="/beta-lactams-injection">Beta Lactams Injections</a> </li>
                                 <li><a href="/critical-care-injections">Critical Care Injections </a> </li>
                                <li><a href="/lyophlizied-powder-injections">Lyophlizied Powder Injections</a> </li>
                              <li><a href="/nasal-drops">Nasal Drops</a> </li>
                                <li><a href="/ear-eyes-drops">Ear Eyes Drops</a> </li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 mb-50">
                   <div data-aos="fade-down-left"  data-aos-duration="3000">
                  <div class="tp-footer-widget footer-cols-4">
					<h4 class="tp-footer-title">Our Location</h4>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d439156.6257294416!2d76.26985658906253!3d30.692776200000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390f9324f142686d%3A0x15288e8b04caec27!2sAll%20Molecules!5e0!3m2!1sen!2sus!4v1698228507840!5m2!1sen!2sus" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                  </div> </div>
               </div>
            </div>
         </div>
      </div>
      <!-- footer area end -->

      <!-- copy-right area start -->
      <div class="tp-copyright-area tp-copyright-space black-bg-2">
		<div class="cojjtt">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-xl-8 col-lg-6 col-md-6 col-sm-6 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".3s">
                  <div class="tp-copyright-left text-center text-md-start">
                     <p>© Copyright 2023  All Molecules Designed &amp; Developed By <a href="https://www.rednirus.in/">Rednirus Digital Media</a></p>
                  </div>
               </div>
              
            </div>
         </div> </div>
      </div>    </div>
      <!-- copy-right area end -->

   </footer>
   
   <div class="social-icons">
     <div class="icon pt">
         <a href="https://api.whatsapp.com/send?phone=+91-9878222566&amp;text=Hello All Molecules" data-url="https://api.whatsapp.com/send?phone=+91-98169-00331&amp;text=Hello All Molecules" data-tab-setting="hover" data-mobile-behavior="disable" data-flyout="disable">
    <i class="fab fa-whatsapp" aria-hidden="true"></i></a>
  </div>
  
   <div class="icon st"><a href="tel:+91-9878222566">
  <i class="fa fa-phone" aria-hidden="true"></i></a>
  </div>
 


 </div>
 
 
   <div class="ggg">
   <div class="container mt-3">
  
  
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
   Enquiry Now
  </button>
</div></div>

<!-- The Modal -->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
          
        <h4 class="modal-title" style="font-size: 21px;">Send Enquiry (Do not post job enquiry)</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
            <div class="rgggow">
        <div class="container">
	   <div class="row">
		  <div class="col-xl-12">
			 <div class="tp-contact-form-border">
			
					
			<form action="/enquiry/store" method="POST">
                @csrf
				   <div class="row">
					  <div class="col-xl-12 col-lg-6 col-md-6 col-12 mb-20">
						 <div class="tp-contact-form-input-box">
							<input type="text" id="name" name="name" placeholder="Name">
						 </div>
					  </div>
					  <div class="col-xl-12 col-lg- col-md-6 col-12 mb-20">
						 <div class="tp-contact-form-input-box">
							<input type="text" id="email" name="email" placeholder="Email">
						 </div>
					  </div>
					  <div class="col-xl-12 col-lg-6 col-md-6 col-12 mb-20">
						 <div class="tp-contact-form-input-box">
							<input type="text"  id="phone" name="phone" placeholder="Phone">
						 </div>
					  </div>
					  <div class="col-xl-12 col-lg-6 col-md-6 col-12 mb-20">
						 <div class="tp-contact-form-input-box">
							<input type="text" id="city" name="city" placeholder="City">
						 </div>
					  </div>
					  <div class="col-12 mb-20">
						 <div class="tp-contact-form-input-box">
							<textarea  id="message" name="message" placeholder="Message"></textarea>
						 </div>
					  </div>
					   <div class="col-md-12 col-sm-12 pb-4">
                                  	<button type="submit" name="submit" class="tp-btn"><span>SEND message</span></button>
                                 </div> 
				   </div> </div>
				</form>
				   
                                  </div>
		  </div>
	   </div>
	</div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
   
   
   
   
   
   

  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
   <!-- JS here -->
   <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="/assets/js/vendor/jquery.js"></script>
   <script src="/assets/js/vendor/waypoints.js"></script>
   <script src="/assets/js/bootstrap-bundle.js"></script>
   <script src="/assets/js/swiper-bundle.js"></script>
   <script src="/assets/js/slick.js"></script>
   <script src="/assets/js/range-slider.js"></script>
   <script src="/assets/js/magnific-popup.js"></script>
   <script src="/assets/js/nice-select.js"></script>
   <script src="/assets/js/purecounter.js"></script>
   <script src="/assets/js/wow.js"></script>
   <script src="/assets/js/isotope-pkgd.js"></script>
   <script src="/assets/js/jarallax.js"></script>
   <script src="/assets/js/imagesloaded-pkgd.js"></script>
   <script src="/assets/js/ajax-form.js"></script>
   <script src="/assets/js/main.js"></script>

<script>
         jQuery(document).ready(function($){
         
           jQuery("#mini_contact_form_container").click(function(){
           jQuery("#mini_contact_form").slideToggle(1500);
           });
           jQuery("#clik_show").click(function(){
         jQuery("#mini_contact_forms").show()
         });
         
         
         jQuery('#closes').click(function(){
         jQuery("#mini_contact_forms").addClass("hide");
         });
         
         });
      </script>
      
<div class="footer-form">
    <span class="heading-look" id="mini_contact_form_container"> PLACE A QUERY</span>
    <div class="fo-form" id="mini_contact_form" style="display: none;">
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
</body>

</html>