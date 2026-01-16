<div class="container-fluid bg-dark text-secondary footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-6 col-md-6">
                <h5 class="text-light mb-4">Address</h5>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>{{ env('COMPANY_ADDRESS') }}</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+{{ env('COMPANY_WHATSAPP') }}</p>
                @if (env('COMPANY_EMAIL'))
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>{{ env('COMPANY_EMAIL') }}</p>
                @endif
                <div class="d-flex pt-2">

                    <a class="btn btn-square btn-outline-secondary rounded-circle me-2" href=""><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square btn-outline-secondary rounded-circle me-2" href=""><i
                            class="fab fa-instagram"></i></a>
                    <a class="btn btn-square btn-outline-secondary rounded-circle me-2" href=""><i
                            class="fas fa-link"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-light mb-4">Layanan Kami</h5>
                <a class="btn btn-link" href="#service">Instalasi CCTV & Jaringan</a>
                <a class="btn btn-link" href="#service">Setting Online Mobile</a>
                <a class="btn btn-link" href="#service">Maintenance & Perbaikan</a>
                <a class="btn btn-link" href="#projects">Paket Keamanan Rumah</a>
                <a class="btn btn-link" href="#projects">Solusi Bisnis & Kantor</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-light mb-4">Quick Links</h5>
                <a class="btn btn-link" href="#about">About Us</a>
                <a class="btn btn-link" href="https://wa.me/{{ env('COMPANY_WHATSAPP') }}" target="_blank">Contact
                    Us</a>
            </div>
        </div>
    </div>
</div>
