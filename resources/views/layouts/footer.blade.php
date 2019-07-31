
    <footer class="footer_area">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="footer_widget">
                        <h4 class="widget_title">Our Contacts</h4>
                        <div class="footer_widget_content para_default">
                            <ul class="contact_info">
                                <li><span class="icon flaticon-phone-call"></span>  020 25 23 005</li>
                                <li><span class="icon flaticon-contact"></span>jmc@jmc-consulting.co.ke</li>
                                <li><span class="icon flaticon-placeholder-outline"></span>P. O. Box 7560 – 00100
                                     Nairobi, Kenya</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="footer_widget">
                        <h4 class="widget_title">About JMC</h4>
                        <div class="footer_widget_content para_default">
                            <ul>
                                <li>
                                    <a href="{{ route('consultancy.index') }}">Consultancy Approach</a>
                                </li>
                                <li>
                                    <a href="{{ route('team.index') }}">Our Teams </a>
                                </li>
                                <li>
                                    <a href="{{ route('associate.index') }}">Our Associates</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="footer_widget">
                        <h4 class="widget_title">Our Services</h4>
                        <div class="footer_widget_content para_default">
                            <ul>
                              @forelse ($services as $service)

                                <li>
                                    <a href="{{ route('service.show',$service->slug) }}">{{ $service->title }}</a>
                                </li>
                              @empty

                              @endforelse
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="footer_widget">
                        <h4 class="widget_title">Newsletter</h4>
                        <div class="footer_widget_content para_default">
                            <p>Subcribes to get our weekly newsletter</p>
                            <div class="Newsletter_mail_search">
                                <form action="#" method="post">
                                    <div class="icon-addon addon-md">
                                        <i class="fa fa-paper-plane"></i> <input class="form-control" id="email"
                                            placeholder="Email Address" type="text">
                                    </div>
                                </form>
                            </div>
                            <ul class="footer_social_icon">
                                <li>
                                    <a href="#"><i class="fa fa-facebook fa-2x"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-twitter fa-2x"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-instagram fa-2x"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_bottom text-center">
            <div class="container">
                <p>&copy; 2017-<?php echo date("Y"); ?> <span>|</span> <a href="/">JMC Consulting LTD</a> <span>|</span> All Rights
                    Reserved</p>
            </div>
        </div>
    </footer>
