<header id="header" class="header_areaa">
    <nav class="navbar extended">
        <div class="top-bar gray-wrapper">
            <div class="container flex-it">
                <div class="align-left moto_titlel">
                    <h5><a href="/">Nairobi, Kenya </a> JMC Consultanting LTD</h5>
                </div>
                <div class="align-right text-right">
                    <ul class="icon-list list-inline mb-0">
                        <li><i class="fa fa-phone"></i> 020 25 23 005 </li>
                        <li>
                            <i class="fa fa-envelope"></i> <a class="nocolor"
                                href="mailto:jmc@jmc-consulting.co.ke">jmc@jmc-consulting.co.ke</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="navbar-header flex-it">
                <div class="navbar-brand align-left">
                    <a href="/"><img alt="images" src="{{ asset('images/logo_consult.png') }}"></a>
                </div>
                <div class="align-right text-right">
                    <ul class="icon-list list-inline mb-0">
                        <li class="text-left">
                            <div class="feature feature-xs">
                                <span class="icon icon-color icon-s"><i
                                        class="flaticon-placeholder-outline"></i></span>
                                <h6 class="mb-0">P. O. Box 7560 – 00100 <br> Nairobi, Kenya</h6>
                            </div>
                        </li>
                        <li class="text-left">
                            <div class="feature feature-xs">
                                <span class="icon icon-color icon-s"><i class="flaticon-time"></i></span>
                                <h6 class="mb-0"> 09 am to 08 pm <br />Monday - Saturday</h6>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="nav-bars-wrapper">
                    <div class="nav-bars-inner">
                        <div class="nav-bars" data-target=".navbar-collapse" data-toggle="collapse">
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav-wrapper dark-wrapper inverse-text">
            <div class="container flex-it">
                <div class="navbar-collapse collapse align-left">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="/">Home</a>
                        </li>

                        <li><a href="{{ route('about.index') }}">About us</a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ route('about.index') }}">About JMC</a></li>
                                <li><a href="{{ route('consultancy.index') }}">Consultancy Approach</a></li>
                                <li><a href="{{ route('team.index') }}">Teams</a></li>
                                <li><a href="{{ route('associate.index') }}">Associates</a></li>
                            </ul>
                        </li>

                        <li><a href="{{ route('service.index') }}">Services</a>
                         <ul class="dropdown-menu">
                                @forelse ($services as $service)
                                      <li><a href="{{ route('service.show',$service->slug) }}">{{ $service->title }}</a></li>
                                @empty
                                       <li><a href="No service yet!"></a></li>
                                @endforelse

                            </ul>
                        </li>

                        <li><a href="{{ route('gallery.index') }}">Photo Gallery</a>
                        </li>
                        <li><a href="{{ route('contact.index') }}">Contact Us</a></li>
                    </ul>
                </div>

                <div class="navbar-other">
                    <div class="align-right text-right">
                        <ul class="social social-color social-s">
                            <li>
                                <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-instagram fa-lg"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header><!-- /header -->
