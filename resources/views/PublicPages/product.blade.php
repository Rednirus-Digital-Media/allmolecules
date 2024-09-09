@extends('layouts.app')
@section('meta_title',$product->meta_title)
@section('meta_keywords',$product->meta_keyword)
@section('meta_description',$product->meta_description)

@section('content')

<style>
.styiuui {
    text-align: center;
}
.content h2 {
     font-size: 14px;
    font-family: 'Poppins';
    font-weight: 500;
    border-bottom: 2px solid #fff;
    padding-left: 3px;
    padding-bottom: 12px;
    margin-bottom: 12px;
    line-height: 27px;
        color: white;
    
}
.content h5 {
     font-size: 14px;
    font-family: 'Poppins';
    font-weight: 500;
    border-bottom: 2px solid #fff;
    padding-left: 3px;
    padding-bottom: 12px;
    margin-bottom: 12px;
    line-height: 27px;
     color: white;
    
}



.content p {
    font-size: 14px;
    font-family: 'Poppins';
    font-weight: 500;
    border-bottom: 2px solid #fff;
    padding-left: 3px;
    padding-bottom: 12px;
    margin-bottom: 12px;
    line-height: 27px;
    text-transform: lowercase;
}


.row.justify-content-center {
    margin-top: 95px;
}

h4.catr {
    margin-right: 67px;
}


.list-group {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    padding-left: 0px;
    margin-bottom: 0;
    margin-right: 68px;
    margin-top: -7px;
}

.product-image {
    border: 1px solid #fff;
    /* box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset; */
    box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 10px 10px;
    margin-right: 42px;
  
}

.content {

    padding: 12px;
   
    background: #ae4a84 !important;
}








/*.content p {
    color: #202124;
    font-size: 18px;
}.content li {
    display: inline-block !important;
}
.content li {
    margin-top: 10px;
}

.row.justify-content-center {
    margin-top: 133px;
}
.sidebar-cat ul li {
    color: black;
}
.sidebar-cat {
    background: #322f6a42;
    border-radius: 5px;
    margin-bottom: 26px;
}
.sidebar-cat a {
    color: #000;
    font-weight: bold;
    padding: 5px 10px;
    border-bottom: 1px solid #fff;
    text-decoration: auto;
}
.list-group ul :hover {
    background-image: -webkit-linear-gradient(bottom, #94ca36, #05afec);
    padding: 4px;
}
*/
</style>


    


<div class="breadcrumb__area breadcrumb__overlay breadcrumb__height p-relative fix" data-background="assets/img/bretcum.jpg" style="background-image: url(&quot;assets/img/bretcum.jpg&quot;);">
<div class="container">
<div class="row">
<div class="col-xxl-12">
<div class="breadcrumb__content z-index d-flex justify-content-between align-items-end">
<div class="breadcrumb__section-title-box">
<h1 class="breadcrumb__title">{{$product->composition}}</h1>
</div>

<div class="breadcrumb__list"><span><a href="/">Home</a></span> <span class="dvdr"><i>/</i></span> <span>{{$product->composition}}</span></div>
</div>
</div>
</div>
</div>
</div>

      

<div class="container">
   <div class="row justify-content-center">
       
      <div class="col-md-12">
         <div class="row">
            
            
            <div class="col-lg-8 col-md-12">
               <div class="row">
                 <div class="col-lg-6">
                  <div class="product-image">
                   @if($product->image)
                     <img src="/{{$product->image}}" alt="{{$product->name}}">
                        @else<img src="/assets/img/Untitled design - 2023-08-04T162528.635.png" alt="{{$product->name}}">@endif
                   </div>
                  </div>
                 <div class="col-lg-6">
                   <div class="content">
                  <h2><b>Brand Name : </b>{{$product->composition}}</h2>
                     <h5><b>Packing : </b>{{$product->name}}</h5>
                 
                  
                   <!--<h4>Related Products:</h4>-->
                   
                   <div class="styiuui">
                         
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
   Enquiry Now
  </button>
</div>
                   <?php 
                   $pro = \DB::table('products')->limit(10)->get();?>
                   <!--<ul>-->
                   <!--    @foreach($pro as $p)-->
                   <!--    <li><a href="{{$p->slug}}">{{$p->name}}</a></li>-->
                   <!--    @endforeach-->
                   <!--</ul>-->
                   </div>
                 </div>
                 
                 <div class="col-lg-12">
                     <div class="des">
                     <?php $replaced = str_replace("title", "p", $product->description);
                  echo html_entity_decode($replaced);
                  ?>
                     </div>
                 </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>


<br>
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
			
				<form action="#">
				   <div class="row">
					  <div class="col-xl-12 col-lg-6 col-md-6 col-12 mb-20">
						 <div class="tp-contact-form-input-box">
							<input type="text" placeholder="Name">
						 </div>
					  </div>
					  <div class="col-xl-12 col-lg- col-md-6 col-12 mb-20">
						 <div class="tp-contact-form-input-box">
							<input type="text" placeholder="Email">
						 </div>
					  </div>
					  <div class="col-xl-12 col-lg-6 col-md-6 col-12 mb-20">
						 <div class="tp-contact-form-input-box">
							<input type="text" placeholder="Phone">
						 </div>
					  </div>
					  <div class="col-xl-12 col-lg-6 col-md-6 col-12 mb-20">
						 <div class="tp-contact-form-input-box">
							<input type="text" placeholder="City">
						 </div>
					  </div>
					  <div class="col-12 mb-20">
						 <div class="tp-contact-form-input-box">
							<textarea placeholder="Message"></textarea>
						 </div>
					  </div>
				   </div> </div>
				</form>
				  <div class="col-12 mb-20">
				       <div class="cofgf">
				<button type="submit" class="tp-btn"><span>SEND message</span></button>
			 </div> </div> </div>
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
@endsection
