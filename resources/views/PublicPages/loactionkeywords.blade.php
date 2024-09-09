@extends('layouts.app')
@section('meta_title','')
@section('meta_keywords','')
@section('meta_description','')
@section('content')
<div class="rs-breadcrumbs img3">
   <div class="breadcrumbs-inner text-center">
      <h1 class="page-title">{{$keywords->name}}</h1>
      <ul>
         <li title="{{$keywords->name}}">
            <a class="active" href="/">Home</a>
         </li>
         <li title="Go To Services">
            <a class="active" href="#"> {{$keywords->name}}</a>
         </li>
         <li>{{$keywords->name}}</li>
      </ul>
   </div>
   <p></p>
</div>
<section class=" pb-80">
   <div class="container">
   <div class="row">
      <div class="col-lg-12">
         <div class="entry">
            <ul>
               @foreach($category as $loc)
               <li><a href="/{{$loc->slug}}/{{$keywords->slug}}">{{$loc->name}}</a></li>
               @endforeach
            </ul>
         </div>
      </div>
      <div class="col-sm-12 col-md-12 col-lg-3">
         <div class="sidebar-cat">
            <h4 class="catr">All Categories</h4>
            <div class="list-group">
               @foreach ($categories as $item)
               <a href="/{{ $item->slug }}" class="">
               {{ $item->name }}
               </a>
               @endforeach
            </div>
         </div>
         <div class="form-groups">
            <h4 class="catr">Enquiry Now</h4>
            <form  class="row" method="post" action="/enquiry/store">
               @csrf
               <div id="formmessage"></div>
               <div class="form-group col-md-12">
                  <input id="form_name" type="text" name="name" class="form-control" placeholder="Name" required="required">
               </div>
               <div class="form-group col-md-12">
                  <input id="form_email" type="email" name="email" class="form-control" placeholder="Email" required="required">
               </div>
               <div class="form-group col-md-12">
                  <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Phone" required="required">
               </div>
               <div class="form-group col-md-12">
                  <select name="about" class="form-select form-control">
                     <option>Choose Service</option>
                     <option>Digital Marketing</option>
                     <option>Seo Service</option>
                  </select>
               </div>
               <div class="form-group col-md-12">
                  <textarea id="form_message" name="message" class="form-control" placeholder="Message" rows="3" required="required"></textarea>
               </div>
               <div class="col-md-12 text-center mt-4">
                  <button class="btn btn-theme" type><span>Send Messages</span>
                  </button>
               </div>
            </form>
         </div>
      </div>
      <div class="col-lg-9 col-lmd-12">
         <div class="row">
            @if(count($product)>0)
            @foreach($product as $pro)
            <div class="col-lg-4">
               <div class="content-type">
                  <img src="/{{$pro->image}}">
                  <div class="bcont">
                     <h4><a href="/{{$pro->slug}}">{{$pro->name}} in {{$location->name}} </a></h4>
                     <p>{{ Str::limit($pro->composition, 50) }}</p>
                  </div>
               </div>
            </div>
            @endforeach
            @else
            <h1>No results found..</h1>
            @endif
         </div>
      </div>
   </div>
</section>
@endsection