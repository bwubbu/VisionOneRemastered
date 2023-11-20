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
            <a href="/" class="nav-item nav-link">Home</a>
            <a href="/about" class="nav-item nav-link active">About</a>
            <a href="/service" class="nav-item nav-link">Service</a>
            <a href="/project" class="nav-item nav-link">Project</a>
            <a href="/contact" class="nav-item nav-link">Contact</a>
        </div>
    </div>
</nav>
<!-- Navbar End -->

<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-3 text-white text-uppercase mb-3 animated slideInDown">About Us</h1>
    </div>
</div>
<!-- Page Header End -->


<!-- About Start -->
<div class="container-xxl">
    <div class="container">
        <div class="col-lg-7 wow fadeIn" data-wow-delay="0.5s" style="position: relative; left: 50%; transform: translateX(-50%); text-align: center;">
            <h1 class="text-uppercase mb-4">To be the leader, bridge the gap between conventional and innovative solutions.</h1>
            <p>Vision One Sdn. Bhd. is a company that focuses on the provision of technical solution, inspection, nondestructive testing, maintenance and repair. These provisions of services adhere to the international standards in state-of –the-art and conventional methods with the goal in delivering the work with quality and utmost integrity to meet customer satisfaction.</p>
            <p class="mb-4">The company is registered and accredited by national and international certifying bodies. The company composed of congregates of highly competent, certified and qualified personnel in specific fields of services.</p>
            <p class="mb-4">Vision One Sdn. Bhd. together with its associate companies will form collaborative arrangements to achieve its business targets. The capacity, expertise and experiences within the group provide VOSB and its associate a competitive service advantage.</p>
            <p class="mb-4">Vision One Sdn. Bhd. meticulous inclination and positioning will be to appeal to the private and public entities the value of professional services from experienced personnel who are committed to carry out projects objectively and technically in accordance with the international standards and code of practice to ensure its viability and delivery
                as per requirements to meet customers’ expectations. The utilization of state-of-the-art equipment and software solutions on every project will enhance customers’ ability to meet its operation requirements.</p>
            <div class="row g-4">
                <div class="col-md-6">
                    <h3 class="text-uppercase mb-3">Vision</h3>
                    <p class="mb-0">Vision One Sdn. Bhd.'s aspiration to be the national and international leading provider of technical solution, inspection, nondestructive testing, maintenance and repair to the respected customers in energy, power, and petrochemical industries.</p>
                </div>
                <div class="col-md-6">
                    <h3 class="text-uppercase mb-3">Mission</h3>
                    <p class="mb-0">Pursue, acquire, introduce and drive innovative, advanced solutions into the energy, power and petrochemical industries</p>
                </div>
            </div>
        </div>
        <div class="row g-5">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="d-flex flex-column">
                    <img class="img-fluid w-75 align-self-end" src="assets/build/img/About1.jpeg" alt="">
                    <div class="w-50 bg-secondary p-5" style="margin-top: -25%;">
                        <h3 class="text-uppercase text-primary mb-3">Head Office</h3>
                        <h4 class="text-uppercase mb-0">Mutiara Damansara, Petaling Jaya</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Team Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <p class="d-inline-block bg-secondary text-primary py-1 px-4">Our Barber</p>
            <h1 class="text-uppercase">Meet Our Barber</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item">
                    <div class="team-img position-relative overflow-hidden">
                        <img class="img-fluid" src="img/team-1.jpg" alt="">
                        <div class="team-social">
                            <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="bg-secondary text-center p-4">
                        <h5 class="text-uppercase">Barber Name</h5>
                        <span class="text-primary">Designation</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item">
                    <div class="team-img position-relative overflow-hidden">
                        <img class="img-fluid" src="img/team-2.jpg" alt="">
                        <div class="team-social">
                            <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="bg-secondary text-center p-4">
                        <h5 class="text-uppercase">Barber Name</h5>
                        <span class="text-primary">Designation</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="team-item">
                    <div class="team-img position-relative overflow-hidden">
                        <img class="img-fluid" src="img/team-3.jpg" alt="">
                        <div class="team-social">
                            <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="bg-secondary text-center p-4">
                        <h5 class="text-uppercase">Barber Name</h5>
                        <span class="text-primary">Designation</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="team-item">
                    <div class="team-img position-relative overflow-hidden">
                        <img class="img-fluid" src="img/team-4.jpg" alt="">
                        <div class="team-social">
                            <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="bg-secondary text-center p-4">
                        <h5 class="text-uppercase">Barber Name</h5>
                        <span class="text-primary">Designation</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->
@endsection