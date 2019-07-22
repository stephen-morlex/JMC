
@extends('layouts.app')
@section('content')
@include('layouts.header')
<div class="page_title_banner not_found_title_bg">
    <div class="page_title_banner_overlay"></div>
    <div class="container">
        <div class="page_title_banner_text text-center">
            <h2>Associates</h2>
            <ul class="breadcrumb">
                <li><a href="/">Home</a></li>
                <li class="active">Associates</li>
            </ul>
        </div>
    </div><!--container-->
</div><!--page_title_banner-->


  <div class="service_details_Area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                           <div class="associate_single_widget">
                            <h4 class="associate_list_title">Our Associates</h4>
                            <div class="associate_list">
                                <ul>
                                    @forelse ($associates as $associate)
                                    <?php $file = (json_decode($associate->file))[0]->download_link; ?>
                                        <li><a href="{{ Voyager::image( $file ) }}">{{ $associate->title }} <span class="badge">CV</span></a></li>
                                    @empty
                                       <li><a href="service-details-page-07.html"><i class="fa fa-play"></i> No Service yet !</a></li>
                                    @endforelse

                                </ul>
                            </div>

                    </div><!-- service_details_right -->
                </div><!-- col-md-3 -->
            </div><!-- row -->
        </div><!-- container -->
    </div><!-- service_details_Area -->
@include('layouts.footer')
@endsection
