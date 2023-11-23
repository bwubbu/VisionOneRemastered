@extends('_layouts.main')

@section('body')
<!-- Carousel Start -->
<div class="container-fluid p-0 wow fadeIn" data-wow-delay="0.1s">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="{{ url('assets/build/img/Oil-and-Gas.jpg') }}" alt="Image">
                <div class="carousel-caption d-flex align-items-center justify-content-center text-start">
                    <div class="mx-sm-5 px-5" style="max-width: 900px;">
                        <h1 class="display-2 text-white text-uppercase mb-4 animated slideInDown" style="text-align: center;">To be the leader, bridge the gap between conventional and innovative solutions</h1>
                        <p class="text-white mb-4 animated slideInDown" style="text-align: center; font-size: 20px">A dynamic and enthusiastic team with various backgrounds in engineering, finance and management drives Vision One. We aim to progress further in the Global Energy build our hard-earned reputation as a reliable contractor with integrity.</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="{{ url('assets/build/img/anamo.jpg') }}" alt="Image">
                <div class="carousel-caption d-flex align-items-center justify-content-center text-start">
                    <div class="mx-sm-5 px-5" style="max-width: 900px;">
                        <h1 class="display-2 text-white text-uppercase mb-4 animated slideInDown" style="text-align: center;">Solutions Provider</h1>
                        <p class="text-white mb-4 animated slideInDown" style="text-align: center; font-size: 20px;">Vision One utilizes the skills of its management employees and associates to support and consultation in the oil and gas industry, petrochemical and marine operation</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="{{ url('assets/build/img/oil-gas-banner.jpg') }}" alt="Image">
                <div class="carousel-caption d-flex align-items-center justify-content-center text-start">
                    <div class="mx-sm-5 px-5" style="max-width: 900px;">
                        <h1 class="display-2 text-white text-uppercase mb-4 animated slideInDown" style="text-align: center;">Our Mission</h1>
                        <p class="text-white mb-4 animated slideInDown" style="text-align: center; font-size: 20px;">Committed to the mission of upholding the value of customer convictions and services proficiency detailed with precision.</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="{{ url('assets/build/img/img3.jpg') }}" alt="Image">
                <div class="carousel-caption d-flex align-items-center justify-content-center text-start">
                    <div class="mx-sm-5 px-5" style="max-width: 900px;">
                        <h1 class="display-2 text-white text-uppercase mb-4 animated slideInDown" style="text-align: center;">Browse More From Us!</h1>
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

<main>
    <section class="featured-places">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="featured-item">
                        <div class="thumb">
                            <img src="{{ url('assets/build/img/FirstIndex.jpg') }}" alt="">
                        </div>
                        <div class="down-content">
                            <h4>Who Are We?</h4>
                            <p>Vision One Sdn. Bhd. is a company that focuses on the provision of technical solution, inspection...</p>
                            <div class="col-12">
                                <button class="btn btn-primary w-40 py-3" type="submit">Read More</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="featured-item">
                        <div class="thumb">
                            <img src="{{ url('assets/build/img/SecondIndex.jpg') }}" alt="">
                        </div>
                        <div class="down-content">
                            <h4>What does Our Company Offer?</h4>
                            <p>Vision One Sdn Bhd will offer services specialized and integrated technical solutions 
                                especially in oil and gas...</p>
                            <div class="col-12">
                                <button class="btn btn-primary w-40 py-3" type="submit">Read More</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="featured-item">
                        <div class="thumb">
                            <img src="{{ url('assets/build/img/AboutUsIndex.jpg') }}" alt="">
                        </div>
                        <div class="down-content">
                            <h4>Who Have We Worked With?</h4>
                            <p>Vision One Sdn. Bhd. have worked with various organizations ranging from local to international...</p>
                            <div class="col-12">
                                <button class="btn btn-primary w-40 py-3" type="submit">Read More</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<div class="container-fluid p-0 wow fadeIn" data-wow-delay="0.1s">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="{{ url('assets/build/img/Oil-and-Gas.jpg') }}" alt="Image">
                <div class="carousel-caption d-flex align-items-center justify-content-center text-start">
                    <div class="mx-sm-5 px-5" style="max-width: 900px;">
                        <h1 class="display-2 text-white text-uppercase mb-4 animated slideInDown" style="text-align: center;">Have Any Enquiries?</h1>
                        <div class="text-center"> <!-- Add text-center class here -->
                            <button class="btn btn-primary w-20 py-3" type="submit">Contact Us</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection