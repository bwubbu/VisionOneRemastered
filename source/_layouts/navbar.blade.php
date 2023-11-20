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
            <a href="/" class="nav-item nav-link {{ $page->getUrl() == $page->baseUrl ? 'active' : '' }}">Home</a>
            <a href="/about" class="nav-item nav-link {{ $page->getUrl() == $page->baseUrl.'/about' ? 'active' : '' }}">About</a>
            <a href="/service" class="nav-item nav-link {{ $page->getUrl() == $page->baseUrl.'/service' ? 'active' : '' }}">Service</a>
            <a href="/project" class="nav-item nav-link {{ $page->getUrl() == $page->baseUrl.'/project' ? 'active' : '' }}">Project</a>
            <a href="/contact" class="nav-item nav-link {{ $page->getUrl() == $page->baseUrl.'/contact' ? 'active' : '' }}">Contact</a>
        </div>
    </div>
</nav>
<!-- Navbar End -->
