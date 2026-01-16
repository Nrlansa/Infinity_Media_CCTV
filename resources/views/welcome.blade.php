<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Infinity Media - CCTV Camera</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('CSS/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('CSS/style.css') }}" rel="stylesheet">
</head>

<body>
<!-- Spinner Start -->
   @include('components.LandingPage.Spinner')
<!-- Spinner End -->

<!-- Topbar Start -->
    @include('components.LandingPage.Topbar')
<!-- Topbar End -->

<!-- Navbar Start -->
    @include('components.LandingPage.Navbar')
<!-- Navbar End -->
    
<!-- Carousel Start -->
    @include('components.LandingPage.Carousel')
<!-- Carousel End -->

<!-- Facts Start -->
    @include('components.LandingPage.Facts')
<!-- Facts End -->

<!-- About Start -->
    @include('components.LandingPage.About')
<!-- About End -->

<!-- Service Start -->
    @include('components.LandingPage.Service')
<!-- Service End -->

<!-- Feature Start -->
    @include('components.LandingPage.Feature')
<!-- Feature End -->

<!-- Projects Start -->
    @include('components.LandingPage.Projects')
<!-- Projects End -->

<!-- Quote Start -->
    @include('components.LandingPage.Quote')
<!-- Quote End -->

<!-- Team Start -->
   {{--@include('components.LandingPage.Team')--}}
<!-- Team End -->

<!-- Testimonial Start -->
   {{-- @include('components.LandingPage.Testimonial') --}} 
<!-- Testimonial End -->

<!-- Footer Start -->
    @include('components.LandingPage.Footer')
<!-- Footer End -->

<!-- Copyright Start -->
    <div class="container-fluid py-4" style="background: #000000;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <span id="displayYear"></span> <a class="border-bottom" href="#">CV. Infinity Media</a>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a><br>Distributed By <a class="border-bottom" href="https://themewagon.com/" >Themewagon</a>
                </div>
            </div>
        </div>
    </div>
<!-- Copyright End -->


<!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('lib/isotope/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('lib/lightbox/js/lightbox.min.js') }}"></script>
   
    <script>
        const COMPANY_WHATSAPP = "{{ env('COMPANY_WHATSAPP') }}";
    </script>
    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>
    <!------js tambahan----->
    <script src="{{ asset('js/form-handler.js') }}"></script>
</body>

</html>