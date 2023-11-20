@extends('_layouts.main')

@section('body')
<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-secondary navbar-dark sticky-top py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s" style="height:4rem">
    <a href="/" class="navbar-brand ms-4 ms-lg-0">
        <img width="300" height="67" src="https://visionone.com.my/wp-content/uploads/2015/07/logo-300x67.png" alt="Logo" />
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="/" class="nav-item nav-link active">Home</a>
            <a href="/about" class="nav-item nav-link">About</a>
            <a href="/service" class="nav-item nav-link">Service</a>
            <a href="/project" class="nav-item nav-link">Project</a>
            <a href="/contact" class="nav-item nav-link">Contact</a>
        </div>
    </div>
</nav>
<!-- Navbar End -->

<!-- Carousel Start -->
<div class="container-fluid p-0 wow fadeIn" data-wow-delay="0.1s">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="{{ url('assets/build/img/Oil-and-Gas.jpg') }}" alt="Image">
                <div class="carousel-caption d-flex align-items-center justify-content-center text-start">
                    <div class="mx-sm-5 px-5" style="max-width: 900px;">
                        <h1 class="display-2 text-white text-uppercase mb-4 animated slideInDown" style="text-align: center;">To be the leader, bridge the gap between conventional and innovative solutions</h1>
                        <p class="text-white mb-4 animated slideInDown" style="text-align: center;">A dynamic and enthusiastic team with various backgrounds in engineering, finance and management drives Vision One. We aim to progress further in the Global Energy build our hard-earned reputation as a reliable contractor with integrity.</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
    <img class="w-100" src="{{ url('assets/build/img/anamo.jpg')}}" alt="Image">
    <div class="carousel-caption d-flex align-items-center justify-content-center text-start">
        <div class="mx-sm-5 px-5" style="max-width: 900px;">
            <h1 class="display-2 text-white text-uppercase mb-4 animated slideInDown" style="text-align: center;">About Us</h1>
                <p class="text-white mb-4 animated slideInDown" style="text-align: center;">Vision One Sdn. Bhd. is a company that focuses on the provision of technical solution, inspection, nondestructive testing, maintenance and repair.</p>
                    <div class="col-12 text-center"> <!-- Add text-center class here -->
                        <button class="btn btn-primary w-40 py-3 animated slideInDown" type="submit">READ MORE</button>
                    </div>
                </div>
            </div>
        </div>
            <div class="carousel-item">
                <img class="w-100" src="{{ url('assets/build/img/oil-gas-banner.jpg') }}" alt="Image">
                <div class="carousel-caption d-flex align-items-center justify-content-center text-start">
                    <div class="mx-sm-5 px-5" style="max-width: 900px;">
                        <h1 class="display-2 text-white text-uppercase mb-4 animated slideInDown">Get </h1>
                        <h4 class="text-white text-uppercase mb-4 animated slideInDown"><i class="fa fa-map-marker-alt text-primary me-3"></i>123 Street, New York, USA</h4>
                        <h4 class="text-white text-uppercase mb-4 animated slideInDown"><i class="fa fa-phone-alt text-primary me-3"></i>+012 345 67890</h4>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="{{ url('assets/build/img/img3.jpg') }}" alt="Image">
                <div class="carousel-caption d-flex align-items-center justify-content-center text-start">
                    <div class="mx-sm-5 px-5" style="max-width: 900px;">
                    <h1 class="display-2 text-white text-uppercase mb-4 animated slideInDown" style="text-align: center;">Get In Touch With Us!</h1>
                        <div class="col-12 text-center"> <!-- Add text-center class here -->
                            <button class="btn btn-primary w-40 py-3 animated slideInDown" type="submit">READ MORE</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- Carousel End -->
@endsection