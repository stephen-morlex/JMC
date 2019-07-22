
@extends('layouts.app')
@section('content')
@include('layouts.header')

<div class="page_title_banner contact_page_title_bg">
        <div class="page_title_banner_overlay"></div>
        <div class="container">
            <div class="page_title_banner_text text-center">
                <h2>Contact</h2>
                <ul class="breadcrumb">
                    <li>
                        <a href="/">Home</a>
                    </li>
                    <li class="active">Contact</li>
                </ul>
            </div>
        </div><!--container-->
</div>


<div class="contact_page_get_start_area" style="margin-top:100px">
    <div class="container">
        <div class="row">
                    <div class="make_an_appoinment_area get_start_areA">
                    <div class="col-md-12">
                        <h3 class="title_get_start text-center">Contact Us</h3>
                    </div>
                <div class="col-md-12">
                     @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if (session('warning'))
                        <div class="alert alert-warning">
                            {{ session('warning') }}
                        </div>
                    @endif
               </div>
            <form method="post" action="{{ route('contact.store') }}">
			    {{ csrf_field() }}

                    <div class="col-md-6">
                        <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                            <input type="text" name="name" class="form-control" placeholder="Your Name *"  required />
				 @if ($errors->has('name'))
										<span class="help-block">
											<strong>{{ $errors->first('name') }}</strong>
										</span>
				 @endif
                        </div>
                    </div>
                     <div class="col-md-6">
                        <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                            <input type="email" name="email" class="form-control" placeholder="Your Email *"  required />
							 @if ($errors->has('email'))
										<span class="help-block">
											<strong>{{ $errors->first('email') }}</strong>
										</span>
							 @endif
                        </div>
                     </div>
                      <div class="col-md-12">
                        <div class="form-group {{ $errors->has('subject') ? ' has-error' : '' }}">
                            <input type="text" name="subject" class="form-control" placeholder="Subject *"  />
							@if ($errors->has('subject'))
										<span class="help-block">
											<strong>{{ $errors->first('subject') }}</strong>
										</span>
							 @endif
                        </div>
                      </div>

                    <div class="col-md-12">
                        <div class="form-group {{ $errors->has('message') ? ' has-error' : '' }}">
                            <textarea name="message" class="form-control" placeholder="Your Message *"  required></textarea>
			                 @if ($errors->has('message'))
				            <span class="help-block">
				            <strong>{{ $errors->first('message') }}</strong>
				           </span>
			                  @endif
                        </div>
                    </div>
                    <div class="col-md-12">
                            <div class="form-group">
                                <div class="send_me_ph text-center">
                                    <button class="submit_btn_quick_contact pull-left" type="submit">Send Message</button>
                                </div>
                            </div>
                        </div>
                </div>
            </form>
                    </div>
    </div>
       </div>
</div>
@include('layouts.footer')
@endsection
