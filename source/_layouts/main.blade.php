<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="en"> <!--<![endif]-->

<head>

    <!--- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <link rel="canonical" href="{{ $page->getUrl() }}">
    <title>{{ $page->title }}</title>
    <meta name="description" content="{{ $page->description }}">

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{ mix('css/base.css', 'assets/build') }}">
    <link rel="stylesheet" href="{{ mix('css/puremedia10.css', 'assets/build') }}">
    <link rel="stylesheet" href="{{ mix('css/media-queries.css', 'assets/build') }}">

    <!-- Script
    =================================================== -->
    <script defer src="{{ mix('js/modernizr.js', 'assets/build') }}"></script>

</head>

<body class="homepage">

    <div id="preloader">
        <div id="status">
            <img src="images/loader.gif" height="60" width="60" alt="">
            <div class="loader">Loading...</div>
        </div>
    </div>

    @include('_layouts.navbar')

    <!-- Hero
=================================================== -->
    <section id="hero">

        <div class="row hero-content">

            <div class="twelve columns flex-container">

                <div id="hero-slider" class="flexslider">

                    <ul class="slides">

                        <!-- Slide -->
                        <li>
                            <div class="flex-caption">
                                <h1>Hello, we are puremedia. We make awesome and stunning digital stuff.</h1>
                                <p><a class="button stroke smoothscroll" href="#about">More About Us</a></p>
                            </div>
                        </li>

                        <!-- Slide -->
                        <li>
                            <div class="flex-caption">
                                <h1>We imagine, craft and manage your brand in this new digital world.</h1>
                                <p><a class="button stroke smoothscroll" href="#portfolio">See Our Works</a></p>
                            </div>
                        </li>

                        <!-- Slide -->
                        <li>
                            <div class="flex-caption">
                                <h1>Take a look at some of <a class="smoothscroll" href="#portfolio" title="">our works</a> or <a class="smoothscroll" href="#contact" title="">contact us</a> to discuss how we can help you.</h1>
                                <p><a class="button stroke smoothscroll" href="#contact">Get In Touch</a></p>
                            </div>
                        </li>

                    </ul>

                </div> <!-- .flexslider -->

            </div> <!-- .flex-container -->

        </div> <!-- .hero-content -->

    </section> <!-- #hero -->

    <!-- About Section
================================================== -->
    <section id="about">

        <div class="row section-head">

            <div class="twelve columns">

                <h1>Who Are We<span>.</span></h1>

                <hr />

                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
                    eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
                    voluptatem quia voluptas sit aspernatur aut odit aut fugit.
                </p>

            </div>

        </div>

        <div class="row about-content">

            <div class="mob-whole six columns left">

                <h3>Our Process.</h3>

                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
                    eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
                    voluptatem quia voluptas sit aspernatur aut odit aut fugit.
                </p>

            </div> <!-- /left -->

            <div class="mob-whole six columns right">

                <h3>Our Approach.</h3>

                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
                    eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
                    voluptatem quia voluptas sit aspernatur aut odit aut fugit.
                </p>

            </div> <!-- /right -->

        </div> <!-- /row -->

        <div class="row about-content">

            <div class="mob-whole six columns left">

                <h3>Our Goal.</h3>

                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
                    eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
                    voluptatem quia voluptas sit aspernatur aut odit aut fugit.
                </p>

            </div> <!-- /left -->

            <div class="mob-whole six columns right">

                <h3>Our Mission.</h3>

                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
                    eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
                    voluptatem quia voluptas sit aspernatur aut odit aut fugit.
                </p>

            </div> <!-- /right -->

        </div> <!-- /row -->


        <!-- team
=================================================== -->
        <div id='team'>

            <div class="row team section-head">

                <div class="twelve columns">

                    <h1>Our Rockstar Team<span>.</span></h1>

                    <hr />

                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
                        eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
                        voluptatem quia voluptas sit aspernatur aut odit aut fugit.
                    </p>

                </div>

            </div>

            <div class="row about-content">

                <div class="twelve columns">

                    <div id="team-wrapper" class="bgrid-half mob-bgrid-whole group">

                        <div class="bgrid member">

                            <div class="member-header">

                                <div class="member-pic">
                                    <img src="images/team/member01-k.jpg" alt="" />
                                </div>

                                <div class="member-name">
                                    <h3>Naruto Uzumaki</h3>
                                    <span>Creative Director</span>
                                </div>

                            </div>

                            <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor,
                                nisi elit consequat ipsum, nec sagittis sem nibh id elit. </p>

                            <ul class="member-social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            </ul>

                        </div> <!-- /member -->

                        <div class="bgrid member">

                            <div class="member-header">

                                <div class="member-pic">
                                    <img src="images/team/member02-k.jpg" alt="" />
                                </div>

                                <div class="member-name">
                                    <h3>Sasuke Uchiha</h3>
                                    <span>Lead Designer</span>
                                </div>

                            </div>

                            <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor,
                                nisi elit consequat ipsum, nec sagittis sem nibh id elit. </p>

                            <ul class="member-social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            </ul>

                        </div> <!-- /member -->

                        <div class="bgrid member first">

                            <div class="member-header">

                                <div class="member-pic">
                                    <img src="images/team/member03-k.jpg" alt="" />
                                </div>

                                <div class="member-name">
                                    <h3>Sakura Haruno</h3>
                                    <span>Web Designer</span>
                                </div>

                            </div>

                            <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor,
                                nisi elit consequat ipsum, nec sagittis sem nibh id elit. </p>

                            <ul class="member-social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            </ul>

                        </div> <!-- /member -->

                        <div class="bgrid member">

                            <div class="member-header">

                                <div class="member-pic">
                                    <img src="images/team/member04-k.jpg" alt="" />
                                </div>

                                <div class="member-name">
                                    <h3>Shikamaru Nara</h3>
                                    <span>Web Designer</span>
                                </div>

                            </div>

                            <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor,
                                nisi elit consequat ipsum, nec sagittis sem nibh id elit. </p>

                            <ul class="member-social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            </ul>

                        </div> <!-- /member -->

                    </div> <!-- /twelve -->

                </div> <!-- /team-wrapper -->

            </div> <!-- /row -->

        </div> <!-- /team -->

    </section> <!-- /about -->

    <!-- Services Section
================================================== -->
    <section id="services">

        <div class="row section-head">

            <div class="twelve columns">

                <h1>Our Awesome Services<span>.</span></h1>

                <hr />

                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
                    eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
                    voluptatem quia voluptas sit aspernatur aut odit aut fugit.
                </p>

            </div>

        </div>

        <div class="row">

            <div class="twelve columns">

                <div class="service-list bgrid-third s-bgrid-half mob-bgrid-whole">

                    <div class="bgrid">

                        <div class="icon-part">
                            <span class="icon-graph"></span>
                        </div>

                        <h3>Marketing.</h3>

                        <div class="service-content">
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                            </p>
                        </div>

                    </div> <!-- /bgrid -->

                    <div class="bgrid">

                        <div class="icon-part">
                            <i class="icon-film"></i>
                        </div>

                        <h3>Videography.</h3>

                        <div class="service-content">
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventoveritatis et quasi architecto beatae vitae dicta sunt explicabo.
                            </p>
                        </div>

                    </div> <!-- /bgrid -->

                    <div class="bgrid">

                        <div class="icon-part">
                            <i class="icon-camera"></i>
                        </div>

                        <h3>Photography.</h3>

                        <div class="service-content">
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                            </p>
                        </div>

                    </div> <!-- /bgrid -->

                    <div class="bgrid first">

                        <div class="icon-part">
                            <i class="icon-eye"></i>
                        </div>

                        <h3>Branding.</h3>

                        <div class="service-content">
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                            </p>
                        </div>

                    </div> <!-- /bgrid -->

                    <div class="bgrid">

                        <div class="icon-part">
                            <i class="icon-screen-desktop"></i>
                        </div>

                        <h3>Web Design.</h3>

                        <div class="service-content">
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                            </p>
                        </div>

                    </div> <!-- /bgrid -->

                    <div class="bgrid">

                        <div class="icon-part">
                            <i class="icon-eyeglasses"></i>
                        </div>

                        <h3>Web Development.</h3>

                        <div class="service-content">
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                            </p>
                        </div>

                    </div> <!-- /bgrid -->

                </div> <!-- /service-list -->

            </div> <!-- /twelve -->

        </div> <!-- /row -->

    </section> <!-- /services -->

    <!-- Portfolio
================================================== -->
    <section id="portfolio">

        <div class="row section-head">

            <div class="twelve columns">

                <h1>Our Latest Works<span>.</span></h1>

                <hr />

                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
                    eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
                    voluptatem quia voluptas sit aspernatur aut odit aut fugit.
                </p>

            </div>

        </div>

        <div class="row items">

            <div class="twelve columns">

                <div id="portfolio-wrapper" class="bgrid-fourth s-bgrid-third mob-bgrid-half group">

                    <div class="bgrid item">
                        <div class="item-wrap">

                            <a href="portfolio.html">
                                <img src="{{ url('assets/build/images/portfolio/grizzly.jpg') }}" alt="Grizzly">
                                <div class="overlay"></div>
                                <div class="portfolio-item-meta">
                                    <h5>Grizzly</h5>
                                    <p>Photography</p>
                                </div>
                            </a>

                        </div>
                    </div> <!-- /item -->

                    <div class="bgrid item">
                        <div class="item-wrap">

                            <a href="portfolio.html">
                                <img src="{{ url('assets/build/images/portfolio/hotel.jpg') }}" alt="Hotel Sign">
                                <div class="overlay">
                                    <div class="portfolio-item-meta">
                                        <h5>Hotel Sign</h5>
                                        <p>Webdesign</p>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div> <!-- /item -->

                    <div class="bgrid stack item">
                        <div class="item-wrap">

                            <a href="portfolio.html">
                                <img src="{{ url('assets/build/images/portfolio/beetle.jpg')}}" alt="Beetle">
                                <div class="overlay">
                                    <div class="portfolio-item-meta">
                                        <h5>Beetle</h5>
                                        <p>Branding</p>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div> <!-- /item -->

                    <div class="bgrid item">
                        <div class="item-wrap">

                            <a href="portfolio.html">
                                <img src="{{ url('assets/build/images/portfolio/banjo-player.jpg') }}" alt="Banjo Player">
                                <div class="overlay">
                                    <div class="portfolio-item-meta">
                                        <h5>Banjo Player</h5>
                                        <p>Videography</p>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div> <!-- /item -->

                    <div class="bgrid item">
                        <div class="item-wrap">

                            <a href="portfolio.html">
                                <img src="images/portfolio/coffee.jpg" alt="Coffee Cup">
                                <div class="overlay">
                                    <div class="portfolio-item-meta">
                                        <h5>Coffee Cup</h5>
                                        <p>Photography</p>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div> <!-- /item -->

                    <div class="bgrid item">
                        <div class="item-wrap">

                            <a href="portfolio.html">
                                <img src="images/portfolio/farmerboy.jpg" alt="Farmerboy">
                                <div class="overlay">
                                    <div class="portfolio-item-meta">
                                        <h5>Farmerboy</h5>
                                        <p>Branding</p>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div> <!-- /item -->

                    <div class="bgrid item">
                        <div class="item-wrap">

                            <a href="portfolio.html">
                                <img src="images/portfolio/judah.jpg" alt="Judah">
                                <div class="overlay">
                                    <div class="portfolio-item-meta">
                                        <h5>Judah</h5>
                                        <p>Web Design</p>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div> <!-- /item -->

                    <div class="bgrid item">
                        <div class="item-wrap">

                            <a href="portfolio.html">
                                <img src="images/portfolio/embossed-paper.jpg" alt="Embossed Paper">
                                <div class="overlay">
                                    <div class="portfolio-item-meta">
                                        <h5>Embossed Paper</h5>
                                        <p>Branding</p>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div> <!-- item end -->

                </div> <!-- /portfolio-wrapper -->

            </div> <!-- /twelve -->

        </div> <!-- /row -->

    </section> <!-- /Portfolio -->


    <!-- Contact Section
================================================== -->
    <section id="contact">

        <div class="row section-head">

            <div class="twelve columns">

                <h1>Get In Touch With Us<span>.</span></h1>

                <hr />

                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
                    eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
                    voluptatem quia voluptas sit aspernatur aut odit aut fugit.
                </p>

            </div>

        </div>

        <div class="row form-section">

            <div id="contact-form" class="twelve columns">

                <form name="contactForm" id="contactForm" method="post" action="">

                    <fieldset>

                        <div class="row">

                            <div class="six columns mob-whole">
                                <label for="contactFname">First Name <span class="required">*</span></label>
                                <input name="contactFname" type="text" id="contactFname" placeholder="First Name" value="" />
                            </div>

                            <div class="six columns mob-whole">
                                <label for="contactLname">Last Name <span class="required">*</span></label>
                                <input name="contactLname" type="text" id="contactLname" placeholder="Last Name" value="" />
                            </div>

                        </div>

                        <div class="row">

                            <div class="six columns mob-whole">
                                <label for="contactEmail">Email <span class="required">*</span></label>
                                <input name="contactEmail" type="text" id="contactEmail" placeholder="Email" value="" />
                            </div>

                            <div class="six columns mob-whole">
                                <label for="contactSubject">Subject</label>
                                <input name="contactSubject" type="text" id="contactSubject" placeholder="Subject" value="" />
                            </div>

                        </div>

                        <div class="row">

                            <div class="twelve columns">
                                <label for="contactMessage">Message <span class="required">*</span></label>
                                <textarea name="contactMessage" id="contactMessage" placeholder="Your Message" rows="10" cols="50"></textarea>
                            </div>

                        </div>

                        <div>
                            <button class="submit full-width">Send Message</button>
                            <div id="image-loader">
                                <img src="images/loader.gif" alt="" />
                            </div>
                        </div>

                    </fieldset>

                </form> <!-- /contactForm -->

                <!-- message box -->
                <div id="message-warning"></div>
                <div id="message-success">
                    <i class="fa fa-check"></i>Your message was sent, thank you!<br />
                </div>

            </div> <!-- /contact-form -->

        </div> <!-- /form-section -->

    </section> <!-- /contact-->


    <!-- Footer
================================================== -->
    @include('_layouts.footer')

    <!-- Java Script
================================================== -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script defer src="{{ mix('js/jquery-1.10.2.min.js', 'assets/build') }}"></script>
    <script defer src="{{ mix('js/jquery-migrate-1.2.1.min.js', 'assets/build') }}"></script>
    <script defer src="{{ mix('js/jquery.flexslider.js', 'assets/build') }}"></script>
    <script defer src="{{ mix('js/jquery.fittext.js', 'assets/build') }}"></script>
    <script defer src="{{ mix('js/backstretch.js', 'assets/build') }}"></script>
    <script defer src="{{ mix('js/waypoints.js', 'assets/build') }}"></script>
    <script defer src="{{ mix('js/puremedia10.js', 'assets/build') }}"></script>

</body>

</html>