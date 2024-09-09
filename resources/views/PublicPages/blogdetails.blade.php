@extends('layouts.app')
@section('meta_title',$blog->meta_title)
@section('meta_keywords',$blog->meta_keyword)
@section('meta_description',$blog->meta_description)
@section('meta_image')
    @if($blog->image)
        content="{{ Request::root() }}/storage/{{$blog->image}}"
    @else
        content="{{ Request::root() }}/images/logo-2.png"
    @endif
@endsection
@section('content')
<style>
    .sidebar-cat ul li {
    border-bottom: 1px solid #fff;
    padding: 5px 10px;
}
    .jyuuy ul li {
    list-style: disc !important;
}
</style>

<section class="page-title" style="background-image: url(/assets/images/vetcum1.jpg)">
    <div class="autgyt">
<div class="auto-container">
<h1>{{ $blog->name }}</h1>

<ul class="bread-crumb clearfix">
		<li><a href="/">Home</a></li>
			<li><a href="/blogs">Blog</a> </li>
			<li>{{ $blog->name }}</li>
</ul>
</div></div>
</section>

<br><br><br>
   
    <div class="container ">
        
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-lg-9 col-md-12 detaihhj">
                        <div class="row">
                             <div class="jyuuy">
                            <div class="col-lg-12">
                                <img src="/public/images/blog//{{ $blog->image }}" width="100%" alt="Alna biotech | {{ $blog->name }}">
                                <?php
                                    echo html_entity_decode($blog->description);
                                ?>
                            </div>
                        </div></div>
                    </div>
                    <div class="col-lg-3 col-md-12">
                        <h2>Please Contact Us</h2><br>
                        <form action="{{ url('/enquiry/store') }}" method="post">
                            @csrf
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input id="name" type="text" class="form-control" name="name" placeholder="Name*" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input id="enquiry" type="text" class="form-control" readonly name="enquiry" placeholder="Enquiry*" value="Enquiry about {{ $blog->name }}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input id="email" type="text" class="form-control" name="email" placeholder="Email*" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input id="phone" type="text" class="form-control" name="phone" placeholder="Phone no*" required>
                                </div>
                            </div>
                           
                           
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input id="city" type="text" class="form-control" name="city" placeholder="City*" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <textarea class="form-control" name="message" placeholder="Message*" required></textarea>
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-outline-info">
                                        Submit Enquiry
                                    </button>
                                </div>
                            </div>
                        </form>
                        
            

    <div class="sidebar-cat">
                    <h4 class="catr">All Categories</h4>
                    <div class="list-group">
                     <ul class="cat-menu">
                       
                            <li><a href="/tablets">Tablets</a></li>
                                 <li><a href="/injections">Injections</a></li>
                              <li><a href="/hard-gelatin-capsules">Hard Gelatin Capsules</a></li>
                                <li><a href="/soft-gel-capsules">Soft Gel Capsules</a></li>
                                  <li><a href="/cardio-diabetic">Cardio Diabetic</a></li>
                                     <li><a href="/infusions">Infusions</a></li>
                                        <li><a href="/syrups">Syrups</a></li>
                                           <li><a href="/pediatric-syrups">Pediatric Syrups</a></li>
                                        <li><a href="/drops">Drops</a></li>
                                          
                            
                        </ul>
                        
                        
                        
                    </div>
                </div>
                


 <div class="sidebar-cat">
                    <h4 class="catr">Derma Range</h4>
                    <div class="list-group">
                        <ul class="cat-menu">
                            <li><a href="/cream-ointments-derma">Cream & Ointments</a></li>
                            <li><a href="/soaps-derma">Derma Soaps</a></li>
                              <li><a href="/lotions-spray-derma">lotions Spray</a></li>
                                <li><a href="/face-wash-derma">Face Wash</a></li>
                                  <li><a href="/oil-and-shampoo-derma">Oil and Shampoo</a></li>
                                     <li><a href="/personal-care-derma">Personal Care</a></li>
                                        <li><a href="/ayurvedic-derma">Ayurvedic</a></li>
                                           <!--<li><a href="/eye-drops">Eye Drops</a></li>
                                        <li><a href="/dental-range">Dental Range</a></li>
                                          <li><a href="/energy-drinks">Energy Drinks</a></li>
                                        <li><a href="/protein-powder">Protein Powder</a></li>
                                           <li><a href="/sachet">Sachet</a></li>
                                            <li><a href="/ortho-range">Ortho Range</a></li>-->
                            
                            
                            
                            
                            
                            
                            
                        </ul>
                    </div>
                </div>
                
                
                     <div class="sidebar-cat">
                    <h4 class="catr">Molshree Ayurveda Range</h4>
                    <div class="list-group">
                        <ul class="cat-menu">
                            <li><a href="/churan-molshree-ayurveda">Churan Molshree Ayurveda</a></li>
                            <li><a href="/syrups-molshree-ayurveda">Syrups Molshree Ayurveda</a></li>
                              <li><a href="/avleh-molshree-ayurveda">Avleh Molshree Ayurveda</a></li>
                                
                            <li><a href="/capsules-molshree-ayurveda">Capsules Molshree Ayurveda</a></li>
                            <li><a href="	/dental-range-molshree-ayurveda">Dental Range Molshree Ayurveda	</a></li>
                            <li><a href="/eye-drops-molshree-ayurveda">Eye Drops Molshree Ayurveda</a></li>
                            <li><a href="/protein-powder-molshree-ayurveda">Protein Powder Molshree Ayurveda</a></li>
                            <li><a href="/energy-drinks-molshree-ayurveda">Energy Drinks Molshree Ayurveda</a></li>
                            <li><a href="/neuro-psychiatric-molshree-ayurveda">Neuro Psychiatric Molshree Ayurveda</a></li>
                            <li><a href="/sachet-molshree-ayurveda">Sachet Molshree Ayurveda</a></li>
                            <li><a href="/ortho-range-molshree-ayurveda">Ortho Range Molshree Ayurveda</a></li>
                         
                            
                            
                        </ul>
                    </div>
                </div>





                    </div>
                    
                    
                </div>
            </div>
            
            
        </div>
    </div>
<br>
@endsection
@section('modal')
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Please Contact Us</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('/enquiry/store') }}" method="post">
                        @csrf
                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="name" type="text" class="form-control" name="name" placeholder="Name*" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="enquiry" type="text" class="form-control" readonly name="enquiry" placeholder="Enquiry*" value="Enquiry about {{ $blog->name }}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="email" type="text" class="form-control" name="email" placeholder="Email*" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="phone" type="text" class="form-control" name="phone" placeholder="Phone no*" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label text-md-right">GST*</label>
                            <label class="col-md-2 col-form-label text-md-right">
                                <input type="radio" name="gst" value="1" id=""> Yes
                            </label>
                            <label class="col-md-2 col-form-label text-md-right">
                                <input type="radio" name="gst" value="0" id="" checked> No
                            </label>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Drug Liscence*</label>
                            <label class="col-md-2 col-form-label text-md-right">
                                <input type="radio" name="drug" value="1" id=""> Yes
                            </label>
                            <label class="col-md-2 col-form-label text-md-right">
                                <input type="radio" name="drug" value="0" id="" checked> No
                            </label>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="location" type="text" class="form-control" name="location" placeholder="Location*" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <textarea class="form-control" name="message" placeholder="Message*" required></textarea>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-outline-info">
                                    Submit Enquiry
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection