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
                <a href="/about" class="nav-item nav-link">About</a>
                <a href="/service" class="nav-item nav-link active">Service</a>
                <a href="/project" class="nav-item nav-link">Project</a>
                <a href="/contact" class="nav-item nav-link">Contact</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->
<div class="container my-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Jigsaw &amp; Bootstrap &hearts;</h3>
                </div>
                <div class="card-body">
                    <p><b>Hello World!</b> What a combination ey? Jigsaw, the Static Site generator with Bootstrap included by default. Sometimes it's good to be lazy!</p>
                </div>
                <div class="card-footer">
                    <p>This starter package was made by <a href="https://jaetoole.dev">@jaetooledev</a>.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection