
@extends('layouts.app')
@section('content')
@include('layouts.header')
<div class="page_title_banner service_title_bg">
        <div class="page_title_banner_overlay"></div>
        <div class="container">
            <div class="page_title_banner_text text-center">
                <h2>Services</h2>
                <ul class="breadcrumb">
                    <li><a href="/">Home</a></li>
                    <li class="active">Services</li>
                </ul>
            </div>
        </div><!--container-->
    </div><!-- page_title_banner -->
     <div class="blog_page_area blog_page_area_respon">
        <div class="container">
            <div class="row">
                @forelse ($services as $service)
                <div class="col-md-6 col-sm-6">
                    <div class="single_blog_item_area blog_grid_item para_default image_fulwidth text-center">
                        <a href="{{ route('service.show',$service->slug) }}"><img src="{{Voyager::image($service->image)}}" alt="{{ $service->title }}"></a>
                        <h3><a href="{{ route('service.show',$service->slug) }}">{{ $service->title }}</a></h3>
                    </div>
                </div><!-- col-md-4-->
                @empty

                @endforelse

            </div><!-- row -->
        </div><!-- container -->
    </div><!-- blog_page_area -->
@include('layouts.footer')
@endsection
