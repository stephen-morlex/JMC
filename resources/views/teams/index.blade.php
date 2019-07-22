
@extends('layouts.app')
@section('content')
@include('layouts.header')
<div class="page_title_banner not_found_title_bg">
    <div class="page_title_banner_overlay"></div>
    <div class="container">
        <div class="page_title_banner_text text-center">
            <h2>JMC Teams</h2>
            <ul class="breadcrumb">
                <li><a href="/">Home</a></li>
                <li class="active">JMC Teams</li>
            </ul>
        </div>
    </div><!--container-->
</div><!--page_title_banner-->

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
