<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{ $page->title }}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link rel="canonical" href="{{ $page->getUrl() }}">
    <meta content="{{ $page->description }}" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Oswald:wght@600&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ mix('lib/animate/animate.min.css' , 'assets/build') }}" rel="stylesheet">
    <link href="{{ mix('lib/owlcarousel/assets/owl.carousel.min.css' , 'assets/build') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ mix('css/bootstrap.css' , 'assets/build') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ mix('css/style.css' , 'assets/build') }}" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    @yield('body')


    @include('_layouts.footer')


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ mix('lib/wow/wow.min.js' , 'assets/build') }}"></script>
    <script src="{{ mix('lib/easing/easing.min.js' , 'assets/build') }}"></script>
    <script src="{{ mix('lib/waypoints/waypoints.min.js' , 'assets/build') }}"></script>
    <script src="{{ mix('lib/owlcarousel/owl.carousel.min.js' , 'assets/build') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ mix('js/main.js' , 'assets/build') }}"></script>
</body>

</html>