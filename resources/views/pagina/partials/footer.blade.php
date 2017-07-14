<div class="section secondary-section " id="portfolio">
    <div class="triangle"></div>
    <div class="container">
        <div class=" title">
            @foreach($tittlesslides2 as $tittle2)
            <h1>{{ $tittle2->tittle }}</h1>
            <p>{{ $tittle2->paragraph }}</p>
        </div>
        @endforeach
        <ul class="nav nav-pills">

            <li class="filter" data-filter="all">
                <a href="#noAction">All</a>
            </li>
            @foreach($categories as $categoria)
            <li class="filter" data-filter="{{ $categoria->id }}">
                <a href="#noAction">{{ $categoria->name }}</a>
            </li>
            @endforeach
<!--<li class="filter" data-filter="web">
<a href="#noAction">Web</a>
</li>
<li class="filter" data-filter="photo">
<a href="#noAction">Photo</a>
</li>
<li class="filter" data-filter="identity">
<a href="#noAction">Identity</a>
</li>-->
</ul>
<!-- Start details for portfolio project 1 -->
@include('pagina.partials.thumbails')
<!-- Portfolio section end -->
<!-- About us section start -->
<div class="section primary-section" id="about">
    <div class="triangle"></div>
    <div class="container">
        @foreach($tittlesslides3 as $tittle3)

        <div class="title">
            <h1>{{ $tittle3->tittle }}</h1>
            <p>{{ $tittle3->paragraph }}</p>
        </div>

        @endforeach
        <div class="row-fluid team">
            <div class="span4" id="first-person">
                <div class="thumbnail">
                    <img src="{{ url('pagina/images/Team1.png') }}" alt="team 1">
                    <h3>John Doe</h3>
                    <ul class="social">
                        <li>
                            <a href="">
                                <span class="icon-facebook-circled"></span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <span class="icon-twitter-circled"></span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <span class="icon-linkedin-circled"></span>
                            </a>
                        </li>
                    </ul>
                    <div class="mask">
                        <h2>Copywriter</h2>
                        <p>When you stop expecting people to be perfect, you can like them for who they are.</p>
                    </div>
                </div>
            </div>
            <div class="span4" id="second-person">
                <div class="thumbnail">
                    <img src="{{ url('pagina/images/Team2.png') }}" alt="team 1">
                    <h3>John Doe</h3>
                    <ul class="social">
                        <li>
                            <a href="">
                                <span class="icon-facebook-circled"></span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <span class="icon-twitter-circled"></span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <span class="icon-linkedin-circled"></span>
                            </a>
                        </li>
                    </ul>
                    <div class="mask">
                        <h2>Designer</h2>
                        <p>When you stop expecting people to be perfect, you can like them for who they are.</p>
                    </div>
                </div>
            </div>
            <div class="span4" id="third-person">
                <div class="thumbnail">
                    <img src="{{ url('pagina/images/Team3.png') }}" alt="team 1">
                    <h3>John Doe</h3>
                    <ul class="social">
                        <li>
                            <a href="">
                                <span class="icon-facebook-circled"></span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <span class="icon-twitter-circled"></span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <span class="icon-linkedin-circled"></span>
                            </a>
                        </li>
                    </ul>
                    <div class="mask">
                        <h2>Photographer</h2>
                        <p>When you stop expecting people to be perfect, you can like them for who they are.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="about-text centered">
            <h3>About Us</h3>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
        </div>
        <h3>Skills</h3>
        <div class="row-fluid">
            <div class="span6">
                <ul class="skills">
                    <li>
                        <span class="bar" data-width="80%"></span>
                        <h3>Graphic Design</h3>
                    </li>
                    <li>
                        <span class="bar" data-width="95%"></span>
                        <h3>Html & Css</h3>
                    </li>
                    <li>
                        <span class="bar" data-width="68%"></span>
                        <h3>jQuery</h3>
                    </li>
                    <li>
                        <span class="bar" data-width="70%"></span>
                        <h3>Wordpress</h3>
                    </li>
                </ul>
            </div>
            <div class="span6">
                <div class="highlighted-box center">
                    <h1>We're Hiring</h1>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, ullamcorper suscipit lobortis nisl ut aliquip consequat. I learned that we can do anything, but we can't do everything...</p>
                    <button class="button button-sp">Join Us</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About us section end -->
<div class="section secondary-section">
    <div class="triangle"></div>
    <div class="container centered">
        <p class="large-text">Elegance is not the abundance of simplicity. It is the absence of complexity.</p>
        <a href="#" class="button">Purshase now</a>
    </div>
</div>
<!-- Client section start -->
<!-- Client section start -->
<div id="clients">
    <div class="section primary-section">
        <div class="triangle"></div>
        <div class="container">
            @foreach($tittlesslides4 as $tittle4)
            <div class="title">
                <h1>{{ $tittle4->tittle }}</h1>
                <p>{{ $tittle4->paragraph }}</p>
            </div>
            @endforeach
            <div class="row">
                <div class="span4">
                    <div class="testimonial">
                        <p>"I've worked too hard and too long to let anything stand in the way of my goals. I will not let my teammates down and I will not let myself down."</p>
                        <div class="whopic">
                            <div class="arrow"></div>
                            <img src="{{ url('pagina/images/Client1.png') }}" class="centered" alt="client 1">
                            <strong>John Doe
                                <small>Client</small>
                            </strong>
                        </div>
                    </div>
                </div>
                <div class="span4">
                    <div class="testimonial">
                        <p>"In motivating people, you've got to engage their minds and their hearts. I motivate people, I hope, by example - and perhaps by excitement, by having productive ideas to make others feel involved."</p>
                        <div class="whopic">
                            <div class="arrow"></div>
                            <img src="{{ url('pagina/images/Client2.png') }}" class="centered" alt="client 2">
                            <strong>John Doe
                                <small>Client</small>
                            </strong>
                        </div>
                    </div>
                </div>
                <div class="span4">
                    <div class="testimonial">
                        <p>"Determine never to be idle. No person will have occasion to complain of the want of time who never loses any. It is wonderful how much may be done if we are always doing."</p>
                        <div class="whopic">
                            <div class="arrow"></div>
                            <img src="{{ url('pagina/images/Client3.png') }}" class="centered" alt="client 3">
                            <strong>John Doe
                                <small>Client</small>
                            </strong>
                        </div>
                    </div>
                </div>
            </div>
            <p class="testimonial-text">
                "Perfection is Achieved Not When There Is Nothing More to Add, But When There Is Nothing Left to Take Away"
            </p>
        </div>
    </div>
</div>
<div class="section third-section">
    <div class="container centered">
        <div class="sub-section">
            <div class="title clearfix">
                <div class="pull-left">
                    <h3>Our Clients</h3>
                </div>
                <ul class="client-nav pull-right">
                    <li id="client-prev"></li>
                    <li id="client-next"></li>
                </ul>
            </div>
            <ul class="row client-slider" id="clint-slider">
                <li>
                    <a href="">
                        <img src="{{ url('pagina/images/clients/ClientLogo01.png') }}" alt="client logo 1">
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="{{ url('pagina/images/clients/ClientLogo02.png') }}" alt="client logo 2">
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="{{ url('pagina/images/clients/ClientLogo03.png') }}" alt="client logo 3">
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="{{ url('pagina/images/clients/ClientLogo04.png') }}" alt="client logo 4">
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="{{ url('pagina/images/clients/ClientLogo05.png') }}" alt="client logo 5">
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="{{ url('pagina/images/clients/ClientLogo02.png') }}" alt="client logo 6">
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="{{ url('pagina/images/clients/ClientLogo04.png') }}" alt="client logo 7">
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- Price section start -->
<div id="price" class="section secondary-section">
    <div class="container">
        <div class="title">
            <h1>Price</h1>
            <p>Duis mollis placerat quam, eget laoreet tellus tempor eu. Quisque dapibus in purus in dignissim.</p>
        </div>
        <div class="price-table row-fluid">
            <div class="span4 price-column">
                <h3>Basic</h3>
                <ul class="list">
                    <li class="price">$19,99</li>
                    <li><strong>Free</strong> Setup</li>
                    <li><strong>24/7</strong> Support</li>
                    <li><strong>5 GB</strong> File Storage</li>
                </ul>
                <a href="#" class="button button-ps">BUY</a>
            </div>
            <div class="span4 price-column">
                <h3>Pro</h3>
                <ul class="list">
                    <li class="price">$39,99</li>
                    <li><strong>Free</strong> Setup</li>
                    <li><strong>24/7</strong> Support</li>
                    <li><strong>25 GB</strong> File Storage</li>
                </ul>
                <a href="#" class="button button-ps">BUY</a>
            </div>
            <div class="span4 price-column">
                <h3>Premium</h3>
                <ul class="list">
                    <li class="price">$79,99</li>
                    <li><strong>Free</strong> Setup</li>
                    <li><strong>24/7</strong> Support</li>
                    <li><strong>50 GB</strong> File Storage</li>
                </ul>
                <a href="#" class="button button-ps">BUY</a>
            </div>
        </div>
        <div class="centered">
            <p class="price-text">We Offer Custom Plans. Contact Us For More Info.</p>
            <a href="#contact" class="button">Contact Us</a>
        </div>
    </div>
</div>
<!-- Price section end -->
<!-- Newsletter section start -->
<div class="section third-section">
    <div class="container newsletter">
        <div class="sub-section">
            <div class="title clearfix">
                <div class="pull-left">
                    <h3>Newsletter</h3>
                </div>
            </div>
        </div>
        <div id="success-subscribe" class="alert alert-success invisible">
            <strong>Well done!</strong>You successfully subscribet to our newsletter.</div>
            <div class="row-fluid">
                <div class="span5">
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                </div>
                <div class="span7">
                    <form class="inline-form">
                        <input type="email" name="email" id="nlmail" class="span8" placeholder="Enter your email" required />
                        <button id="subscribe" class="button button-sp">Subscribe</button>
                    </form>
                    <div id="err-subscribe" class="error centered">Please provide valid email address.</div>
                </div>
            </div>
        </div>
    </div>
    <!-- Newsletter section end -->
    <!-- Contact section start -->
    <div id="contact" class="contact">
        <div class="section secondary-section">
            <div class="container">
                @foreach($tittlesslides5 as $tittle5)
                <div class="title">
                    <h1>{{ $tittle5->tittle }}</h1>
                    <p>{{ $tittle5->paragraph }}</p>
                </div>
                @endforeach
            </div>
            <div class="map-wrapper">
                <div class="map-canvas" id="map-canvas">Loading map...</div>
                <div class="container">
                    <div class="row-fluid">
                        <div class="span5 contact-form centered">
                            <h3>Say Hello</h3>
                            <div id="successSend" class="alert alert-success invisible">
                                <strong>Well done!</strong>Your message has been sent.</div>
                                <div id="errorSend" class="alert alert-error invisible">There was an error.</div>
                                <form id="contact-form" action="php/mail.php">
                                    <div class="control-group">
                                        <div class="controls">
                                            <input class="span12" type="text" id="name" name="name" placeholder="* Your name..." />
                                            <div class="error left-align" id="err-name">Please enter name.</div>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <div class="controls">
                                            <input class="span12" type="email" name="email" id="email" placeholder="* Your email..." />
                                            <div class="error left-align" id="err-email">Please enter valid email adress.</div>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <div class="controls">
                                            <textarea class="span12" name="comment" id="comment" placeholder="* Comments..."></textarea>
                                            <div class="error left-align" id="err-comment">Please enter your comment.</div>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <div class="controls">
                                            <button id="send-mail" class="message-btn">Send message</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="span9 center contact-info">
                        <p>123 Fifth Avenue, 12th,Belgrade,SRB 11000</p>
                        <p class="info-mail">ourstudio@somemail.com</p>
                        <p>+11 234 567 890</p>
                        <p>+11 286 543 850</p>
                        <div class="title">
                            <h3>We Are Social</h3>
                        </div>
                    </div>
                    <div class="row-fluid centered">
                        <ul class="social">
                            <li>
                                <a href="">
                                    <span class="icon-facebook-circled"></span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="icon-twitter-circled"></span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="icon-linkedin-circled"></span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="icon-pinterest-circled"></span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="icon-dribbble-circled"></span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="icon-gplus-circled"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact section edn -->
        <!-- Footer section start -->
        <div class="footer">
            <p>&copy; 2013 Theme by <a href="http://www.graphberry.com">GraphBerry</a>, <a href="http://goo.gl/NM84K2">Documentation</a></p>
        </div>
        <!-- Footer section end -->
        <!-- ScrollUp button start -->
        <div class="scrollup">
            <a href="#">
                <i class="icon-up-open"></i>
            </a>
        </div>
        <!-- ScrollUp button end -->
        <!-- Include javascript -->
        <script src="{{ url ('pagina/js/jquery.js') }}"></script>
        <script type="text/javascript" src="{{ url ('pagina/js/jquery.mixitup.js') }}"></script>
        <script type="text/javascript" src="{{ url ('pagina/js/bootstrap.js') }}"></script>
        <script type="text/javascript" src="{{ url ('pagina/js/modernizr.custom.js') }}"></script>
        <script type="text/javascript" src="{{ url ('pagina/js/jquery.bxslider.js') }}"></script>
        <script type="text/javascript" src="{{ url ('pagina/js/jquery.cslider.js') }}"></script>
        <script type="text/javascript" src="{{ url ('pagina/js/jquery.placeholder.js') }}"></script>
        <script type="text/javascript" src="{{ url ('pagina/js/jquery.inview.js') }}"></script>
        <!-- Load google maps api and call initializeMap function defined in app.js -->
        <script async="" defer="" type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&callback=initializeMap"></script>
        <!-- css3-mediaqueries.js for IE8 or older -->
        