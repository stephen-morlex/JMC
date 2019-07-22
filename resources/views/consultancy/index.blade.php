
@extends('layouts.app')
@section('content')
@include('layouts.header')
<div class="page_title_banner not_found_title_bg">
    <div class="page_title_banner_overlay"></div>
    <div class="container">
        <div class="page_title_banner_text text-center">
            <h2>Consultancy Approach</h2>
            <ul class="breadcrumb">
                <li><a href="/">Home</a></li>
                <li class="active">Consultancy Approach</li>
            </ul>
        </div>
    </div><!--container-->
</div><!--page_title_banner-->


    <div class="service_details_Area">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="service_details_left">
                        <div class="service_item_single_widget">
                            <h4 class="service_list_title">Our Services</h4>
                            <div class="services_list">
                                <ul>
                                    @forelse ($services as $service)
                                        <li><a href="{{ route('service.show',$service->slug) }}"><i class="fa fa-play"></i> {{ $service->title }}</a></li>
                                    @empty
                                       <li><a href="service-details-page-07.html"><i class="fa fa-play"></i> No Service yet !</a></li>
                                    @endforelse

                                </ul>
                            </div>
                        </div><!-- service_item_single_widget -->

                        <div class="service_item_single_widget">
                            <div class="services_list services_help">
                                <i class="fa fa-user"></i>
                                <h3>Lets help you!</h3>
                                <p>Nairobi, Kenya</p>
                                <p>Call us:  020 25 23 005</p>
                                <a href="{{ route('contact.index') }}">Or Fill Our Form</a>
                            </div>
                        </div><!-- service_item_single_widget -->
                    </div><!-- service_details_left -->
                </div><!-- col-md-3 -->

                <div class="col-md-9">
                    <div class="service_details_right">
                        <div class="service_details_content para_default">
                            <h3>{{ $service->title }}</h3>
                         <p>{!! $service->content !!}</p>
                        </div><!-- service_details_content -->
                    </div><!-- service_details_right -->
                </div><!-- col-md-3 -->
            </div><!-- row -->
        </div><!-- container -->
    </div><!-- service_details_Area -->
@include('layouts.footer')
@endsection
