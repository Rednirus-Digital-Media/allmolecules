@extends('layouts.app')
@section('meta_title',$category->meta_title)
@section('meta_keywords',$category->meta_keyword)
@section('meta_description',$category->meta_description)

@section('content')
<style>
   .sidebar-cat {
    background: #322f6a42;
    border-radius: 5px;
    margin-bottom: 26px;
}
.kopty a:hover {
    color: white;
}
.sidebar-cat ul li {
    border-bottom: 1px solid #fff;
    padding: 5px 10px;
}
h4.catr {
    background-image: red;
    color: #fff;
    padding: 4px 10px;
    background: #393185;
    border-radius: 5px;
    margin-top: 34px;
    list-style: none;
}
.list-group ul :hover {
 
    padding: 4px;
    background: #007dc4;
}
.list-group ul li {
    list-style: none;
}
.sidebar-cat .active {
    background: #322f6a66;
    color: white;
    padding: 8px 10px;
}
.sidebar-cat a {
    color: #000;
    font-weight: bold;
    padding: 5px 10px;
 
    text-decoration: auto;
}
.form-groups {
    background: #cac9d8;
}
.form-groups form {
    padding: 20px;
}
.form-groups input {
    margin-bottom: 17px;
}

/*.harry img {
    width: 4501px;
    height: 348px;
}*/

.harry {
    background: url(images/bredcrumb.jpg);
    background-repeat: no-repeat;
  background-position: center;
  padding-left: 70px;
  background-size: cover;
  height: 100px;
  padding-bottom: 71px;
}



</style>


<div class="breadcrumb__area breadcrumb__overlay breadcrumb__height p-relative fix" data-background="assets/img/bretcum.jpg" style="background-image: url(&quot;assets/img/bretcum.jpg&quot;);">
<div class="container">
<div class="row">
<div class="col-xxl-12">
<div class="breadcrumb__content z-index d-flex justify-content-between align-items-end">
<div class="breadcrumb__section-title-box">
<h3 class="breadcrumb__title">{{$category->name}}</h3>
</div>

<div class="breadcrumb__list"><span><a href="/">Home</a></span> <span class="dvdr"><i>/</i></span> <span>{{$category->name}}</span></div>
</div>
</div>
</div>
</div>
</div>
  

   <section class=" pb-80">
   <div class="container">
          <div class="kopty">
      <div class="row">
          
         
         <div class="col-sm-12 col-md-12 col-lg-4">
            <div class="sidebar-cat">
               <h4 class="catr">Our Products</h4>
               <div class="list-group">
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
         <div class="col-lg-8 col-md-12">
         <div class="table-responsives">
               <table class="table table-bordered table-striped table-hover datatable datatable-User myTable">
                  <thead>
                  <tr>
                                       
                                         <th>Sr</th>
                                       
                                       <th>Name</th>
                                       <th>Packing</th>
                                        
                                       
                                   </tr>
                  </thead>
                  <tbody>
                  <?php $x= 1 ?>
                                     @foreach ($products as $item)
                                        <tr>
                                             <td>{{$x++ }}</td>
                                            
                                            
                                            <td>{{ $item->composition }}</td>
                                            <td>{{ $item->name }}</td>
                                            
                                            
                                        </tr>
                                    @endforeach
                  </tbody>
               </table>
            </div>
         </div>
         <div class="col-lg-12">
            <div class="description">
               <p> <?php
                  echo html_entity_decode($category->description);
                  ?></p>
            </div>
         </div>
      </div>
   </div>   </div>
</section>
    <section class="cat-description">
        <div class="container">
           <div class="row">
               <div class="col-lg-12">
                      <div class="description">
                             @if($category->description)
                   <?php
                                   $replaced = str_replace("title", "p", $category->description);
                  echo html_entity_decode($replaced);
                                    ?>
                   @endif
                      </div>
                  </div>
           </div> 
        </div>
    </section>








@endsection




