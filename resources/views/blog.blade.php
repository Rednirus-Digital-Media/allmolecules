@extends('layouts.app')
@section('meta_title','')

@section('meta_keywords','Pharma Company in India')


@section('meta_description','')

@section('content')
<section class="page-title" style="background-image: url(/assets/images/vetcum1.jpg)">
<div class="auto-container">
<h1>Blogs</h1>

<ul class="bread-crumb clearfix">
	<li><a href="/">Home</a></li>
	<li><a href="/blog">Blogs</a></li>
</ul>
</div>
</section>
<a href="/blog"><!-- breadcrumb end --><!-- blog begin --> </a>

<div class="blog blog-page">
<div class="container">
    <div class="blohfdf">
<div class="row">
  <?php $blog  = DB::table('blogs')->get(); ?>  
    @foreach($blog as $b)
<div class="col-xl-4 col-lg-4 col-md-6">
<div class="single-blog">
<div class="part-text">
<h3><a href="/{{$b->slug}}">{{$b->name}}</a></h3>
</div>

<div class="part-img"><a href="/{{$b->slug}}"><img alt="" src="/public/images/blog/{{$b->image}}" /></a></div>
</div>
</div>
@endforeach


</div>
</div>
</div></div>
@endsection
