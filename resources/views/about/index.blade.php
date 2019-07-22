
@extends('layouts.app')
@section('content')
@include('layouts.header')
<div class="page_title_banner not_found_title_bg">
    <div class="page_title_banner_overlay"></div>
    <div class="container">
        <div class="page_title_banner_text text-center">
            <h2>About Us</h2>
            <ul class="breadcrumb">
                <li><a href="/">Home</a></li>
                <li class="active">About Us</li>
            </ul>
        </div>
    </div><!--container-->
</div><!--page_title_banner-->

<div class="about_page_tab_section_area">
        <div class="container">
            <div class="row">
                <div class="about_us_tab_area">
                    <div class="tab_menu_s_p_two">
                        <div class="col-md-12">
                            <ul class="tab_button_service">
                                @forelse ($abouts as $key => $about)
                                 <li role="presentation" class="ta_button_Bg2  {{ $key==0 ? 'active' : ''}}">
                                    <a href="#{{ $about->title }}" aria-controls="Freelancer" role="tab" data-toggle="tab">
                                     {{ $about->title }}</a>
                                </li>
                                @empty

                                @endforelse

                            </ul>
                        </div>

                        <div class="tab-content">
                            @forelse ($abouts as $key => $about)
                            <div role="tabpanel" class="tab-pane fade in  {{ $key==0 ? 'active' : ''}}" id="{{ $about->title }}">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="col-md-6">
                                            <div class="image_fulwidth">
                                                <img src="{{Voyager::image($about->image)}}" alt="{{ $about->title }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="tab_text_ser para_default">
                                                <h3>{{ $about->title }}</h3>
                                               <p>{!! $about->content !!}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @empty

                            @endforelse

                        </div>
                    </div>
                </div><!--about_us_tab_area-->
            </div><!-- row -->
        </div><!-- container -->
    </div><!-- about_page_tab_section_area -->


<div class="Free_Consultation">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="Free_Consultation_text uppc">
                    <h2>Get Our Consultation Today</h2>
                </div>
            </div>
            <div class="col-md-3 col-md-offset-1">
                <div class="Free_Consultation_text">
                    <a class="Free_Consultation_btn" href="{{ route('contact.index') }}">Get our Consultation</a>
                </div>
            </div>
        </div><!-- row End -->
    </div><!-- container End -->
</div><!-- Free_Consultation End -->


<div class="team_page_section_area">
    <div class="container">
            <div class="section_title text-center">
                <h2>Our Consultants</h2>
            </div>
        <div class="team_page_section_list">
            <div class="row">
              @forelse ($teams as $team)
                   <div class="col-md-4 col-sm-6">
                    <div class="single_team_Consultants text-center">
                        <img src="{{Voyager::image($team->image)}}" alt="{{ $team->title }}">
                        <div class="team_consult_overlay">
                            <div class="top_consult_content">
                                <h4><a href="team-details.html">{{ $team->title }}</a></h4>
                                <p>{!! $team->content !!}</p>
                            </div>
                            {{--  <ul class="bottom_consult_content">
                                <li><a href="#" class="fa fa-twitter"></a></li>
                                <li><a href="#" class="fa fa-facebook"></a></li>
                                <li><a href="#" class="fa fa-instagram"></a></li>
                            </ul>  --}}
                        </div>
                    </div>
                </div><!-- col-md-4 -->
              @empty

              @endforelse




            </div><!-- row -->
        </div><!-- team_page_section_list -->
    </div><!-- container -->
</div><!-- team_page_section_area -->
@include('layouts.footer')
@endsection
