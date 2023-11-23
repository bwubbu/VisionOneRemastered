@extends('_layouts.main')

@section('body')

<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 wow swingIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-3 text-white text-uppercase mb-3 animated slideInDown">About Us</h1>
    </div>
</div>
<!-- Page Header End -->


<!-- About Start -->
<div class="container">
    <div class="col-lg-12" style="position: relative; left: 50%; transform: translateX(-50%); text-align: center;">
        <h1 class="text-uppercase mb-4 text-center wow pulse" data-wow-delay="1.0s">To be the leader, bridge the gap between conventional and innovative solutions.</h1>
        <div class="row g-4">
            <div class="col-md-6 wow bounce pt-5 pb-5" style="text-align: center;" data-wow-delay="0.5s">
                <h3 class="text-uppercase mb-3">Vision</h3>
                <h4>To be the leader, bridge the gap between conventional and innovative solutions.</h4>
            </div>
            <div class="col-md-6 wow bounce pt-5 pb-5" style="text-align: center;" data-wow-delay="0.5s">
                <h3 class="text-uppercase mb-3">Mission</h3>
                <h4>Pursue, acquire, introduce and drive innovative, advanced solutions into the energy, power and petrochemical industries.</h4>
            </div>
        </div>
        <div class="row" style="padding-top: 20px; padding-bottom: 30px;">
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.5s">
                <img class="img-fluid" src="assets/build/img/MaintenancePic.jpg" alt="Image">
            </div>
            <div class="col-lg-6 wow fadeInRight d-flex align-items-center" data-wow-delay="0.5s">
                <p class="mb-4" style="font-size:20px">Vision One Sdn. Bhd. is a company that focuses on the provision of technical solution, inspection, nondestructive testing, maintenance and repair.
                    These provisions of services adhere to the international standards in state-of-the-art and conventional methods with the goal of delivering the work with quality
                    and utmost integrity to meet customer satisfaction.</p>
            </div>
        </div>
        <div class="row justify-content-center" style="padding-top: 20px; padding-bottom: 50px;">
            <div class="col-lg-6 wow fadeInLeft d-flex align-items-center" data-wow-delay="0.5s">
                <p class="mb-4" style="font-size:20px">The company is registered and accredited by national and international certifying bodies. The company composed of congregates
                    of highly competent, certified and qualified personnel in specific fields of services.</p>
            </div>
            <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.5s">
                <img class="img-fluid" src="assets/build/img/Accreditation.jpg" alt="Image">
            </div>
        </div>
        <div class="row" style="padding-top: 20px; padding-bottom: 100px;">
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.5s">
                <img class="img-fluid" src="assets/build/img/Collaboration.jpg" alt="Image">
            </div>
            <div class="col-lg-6 wow fadeInRight d-flex align-items-center" data-wow-delay="0.5s">
                <p class="mb-4" style="font-size:20px">Vision One Sdn. Bhd. together with its associate companies will form collaborative
                    arrangements to achieve its business targets. The capacity, expertise and experiences within the
                    group provide VOSB and its associate a competitive service advantage.</p>
            </div>
        </div>
    </div>
</div>

<!-- Office Start -->
<div class="container-xxl">
    <div class="container">
        <div class="text-center mx-auto mb-3 wow bounceIn" data-wow-delay="0.3s" style="max-width: 1000px;">
            <h1 class="text-uppercase">Our Offices</h1>
        </div>
        <div class="row">
            <div class="col-lg-6 py-3">
                <div class="row g-0" style="height: 100%;">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="bg-secondary d-flex flex-column justify-content-center p-5" style="height: 100%;">
                            <h1 class="text-uppercase mb-4">Head Office</h1>
                            <p style="color: white;">Mutiara Damansara, Petaling Jaya</p>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <div style="width: 100%; height: 100%;">
                            <img class="img-fluid" style="object-fit: cover; width: 100%; height: 100%;" src="assets/build/img/About1.jpeg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 py-3">
                <div class="row g-0" style="height: 100%;">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="bg-secondary d-flex flex-column justify-content-center p-5" style="height: 100%;">
                            <h4 class="text-uppercase mb-4">Kuantan Branch Office and Yard Facility</h4>
                            <p style="color: white;">Gebeng, Kuantan</p>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <div style="width: 100%; height: 100%;">
                            <img class="img-fluid" style="object-fit: cover; width: 100%; height: 100%;" src="assets/build/img/kuantan_branch.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Office End -->

<div class="container-xxl">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center">Our Valued Customers</h2>
                <p class="mb-4 text-center" style="font-size:20px">Our Company is Registered With :</p>
                <div class="status-container px-4 py-2">
                    <div class="status-list justify-content-center">
                        <div class="status-group justify-content-center" id="status-group">
                            <a href="#">
                                <img class="status-image" src="{{ url('assets/build/img/CompanyStatus/240px-Logo_AELB.png') }}" alt="Image"> </a>
                            <a href="#">
                                <img class="status-image" src="{{ url('assets/build/img/CompanyStatus/5183.KL_BIG.D-a824ccc5.png') }}" alt="Image"> </a>
                            <a href="#">
                                <img class="status-image" src="{{ url('assets/build/img/CompanyStatus/CIDB-HQ-DarkBackground-Logo.png') }}" alt="Image"> </a>
                            <a href="#">
                                <img class="status-image" src="{{ url('assets/build/img/CompanyStatus/ministry-of-finance-malaysia-logo-E9D4C94BFD-seeklogo.com.png') }}" alt="Image"> </a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>

<!-- Team End -->
@endsection