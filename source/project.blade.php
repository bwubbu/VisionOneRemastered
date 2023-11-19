@extends('_layouts.main')

@section('body')
<!-- Page Title
   ================================================== -->
<section id="page-title">

    <div class="row">

        <div class="twelve columns">

            <h1>Portfolio<span>.</span></h1>
            <p>Aenean condimentum lacus sit amet luctus lobortis.</p>

        </div>

    </div> <!-- /row -->

</section> <!-- /page-title -->


<!-- Content
   ================================================== -->
<section id="content">

    <div class="row portfolio-content">

        <div class="entry tab-whole nine columns centered">

            <header class="entry-header">

                <h1 class="entry-title">
                    Coffee Cup
                </h1>

                <div class="entry-meta">
                    <ul>
                        <li>July 12, 2014</li>
                        <span class="meta-sep">•</span>
                        <li>
                            <a rel="skills tag" title="" href="#">Branding</a>,
                            <a rel="skills tag" title="" href="#">Photography</a>
                        </li>
                        <span class="meta-sep">•</span>
                        <li><a rel="client" title="" href="#">styleshout</a></li>
                    </ul>
                </div>

            </header>

            <div class="entry-content">
                <h2 class="lead">Lorem ipsum Nisi enim est proident est magna occaecat dolore proident eu ex sunt consectetur consectetur dolore enim nisi exercitation adipisicing magna culpa commodo deserunt ut do Ut occaecat.</h2>

                <p>Lorem ipsum Nisi enim est proident est magna occaecat dolore proident eu ex sunt consectetur consectetur dolore enim nisi exercitation adipisicing magna culpa commodo deserunt ut do Ut occaecat. Lorem ipsum Veniam consequat quis aliquip dolore minim ex labore dolor Excepteur Duis velit in officia Excepteur officia officia officia cillum ut elit in fugiat incididunt ea ad Ut ut ea ea dolor ex dolor eu magna voluptate irure consectetur.</p>
            </div>

            <div class="entry-content-media">
                <div class="post-thumb">
                    <img src="images/portfolio/b-coffee-02.jpg">
                    <img src="images/portfolio/b-coffee-01.jpg">
                </div>
            </div>

            <div class="pagenav group">
                <span class="prev"><a href="#" rel="prev">Previous</a></span>
                <span class="next"><a href="#" rel="next">Next</a></span>
            </div>

        </div> <!-- /entry -->

    </div> <!-- /portfolio-content -->


    <div class="row more-projects">

        <h1>More Projects.</h1>

        <div class="tab-whole nine columns centered">

            <div id="portfolio-wrapper" class="bgrid-half tab-bgrid-halfgroup">

                <div class="bgrid item">
                    <div class="item-wrap">

                        <a href="portfolio.html">
                            <img src="images/portfolio/beetle.jpg" alt="Beetle">
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
                            <img src="images/portfolio/banjo-player.jpg" alt="Banjo Player">
                            <div class="overlay">
                                <div class="portfolio-item-meta">
                                    <h5>Banjo Player</h5>
                                    <p>Videography</p>
                                </div>
                            </div>
                        </a>

                    </div>
                </div> <!-- item end -->

                <div class="bgrid stack item">
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
                </div> <!-- item end -->

                <div class="bgrid item">
                    <div class="item-wrap">

                        <a href="portfolio.html">
                            <img src="images/portfolio/grizzly.jpg" alt="Grizzly">
                            <div class="overlay"></div>
                            <div class="portfolio-item-meta">
                                <h5>Grizzly</h5>
                                <p>Photography</p>
                            </div>
                        </a>

                    </div>
                </div> <!-- item end -->

            </div> <!-- /portfolio-wrapper -->

        </div> <!-- /nine -->

    </div> <!-- /more-projects -->

</section> <!-- /content -->

@endsection