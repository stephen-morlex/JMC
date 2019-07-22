
@extends('layouts.app')
@section('content')
@include('layouts.header')
<div class="page_title_banner service_title_bg">
        <div class="page_title_banner_overlay"></div>
        <div class="container">
            <div class="page_title_banner_text text-center">
                <h2>Gallery</h2>
                <ul class="breadcrumb">
                    <li><a href="/">Home</a></li>
                    <li class="active">Gallery</li>
                </ul>
            </div>
        </div><!--container-->
    </div><!-- page_title_banner -->


    <div class="portfolio_section_area">
        <div class="container">
            <div class="row">
                <div class="mix-active portfolio_column_div" id="MixItUpC78700">
                   @forelse ($galleries as $photo)
                        <div class="col-md-6 col-sm-6 mix BRANDING" style="display: inline-block;" data-bound="">
                        <div class="portfolio_column image_fulwidth">
                            <a href="{{Voyager::image($photo->image)}}" data-fancybox="gallery">
                                <img src="{{Voyager::image($photo->image)}}" alt="images">
                            </a>
                        </div>
                    </div><!-- col-md-3 -->
                   @empty
                    <p>Sorry no images yet!</p>
                   @endforelse
                </div><!-- mix-active -->
            </div><!-- row -->
        </div><!-- container -->
    </div>
@include('layouts.footer')
@endsection
