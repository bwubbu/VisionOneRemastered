@extends('_layouts.main')

@section('body')

<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-3 text-white text-uppercase mb-3 animated slideInDown">Contact Us</h1>
    </div>
</div>
<!-- Page Header End -->

<div class="container-xxl">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeIn" data-wow-delay="0.5s">
            <h2 class="text-uppercase">While subscribing to the mission statement, Vision One derives a set of business objectives, namely:</h2>
        </div>
        <div class="text-center mx-auto mb-2 wow fadeInLeft" data-wow-delay="0.9s" style="font-size: 15px">
            <a>Identify and establish a network of reputable Malaysian entrepreneurs, companies and operators for mutually benefiting business arrangements.</a>
        </div>
        <div class="text-center mx-auto mb-2 wow fadeInLeft" data-wow-delay="1.3s" style="font-size: 15px">
            <a>Provide a conducive working partnership among business stakeholders through continuously improving business ethics and integrity.</a>
        </div>
        <div class="text-center mx-auto mb-2 wow fadeInLeft" data-wow-delay="1.7s" style="font-size: 15px">
            <a>Provide a conducing working environment for all staff to excel in their productivity and be successful in their career and personal life.</a>
        </div>
        <div class="text-center mx-auto mb-2 wow fadeInLeft" data-wow-delay="2.1s" style="font-size: 15px">
            <a>Establish a reputation as an excellent local Malaysian solution provider.</a>
        </div>
        <div class="text-center mx-auto mb-2 wow fadeInLeft" data-wow-delay="2.5s" style="font-size: 15px">
            <a>Identify and provide immediate solutions to customer needs.</a>
        </div>
    </div>
</div>

<!-- Contact Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-0">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="bg-secondary p-5">
                    <h1 class="text-uppercase mb-4">Have Any Query? Please Contact Us!</h1>
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control bg-transparent" id="name" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control bg-transparent" id="email" placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control bg-transparent" id="subject" placeholder="Subject">
                                    <label for="subject">Subject</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control bg-transparent" placeholder="Leave a message here" id="message" style="height: 100px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <div class="h-100" style="min-height: 400px;">
                    <iframe class="google-map w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.754948269409!2d101.5982938409907!3d3.1591714449327806!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc4fd9fec08e19%3A0x50a0cc95bef0540a!2sVision%20One%20Sdn%20Bhd!5e0!3m2!1sen!2smy!4v1700389253422!5m2!1sen!2smy" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0" style="filter: grayscale(100%) invert(92%) contrast(83%); border: 0;"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->
@endsection