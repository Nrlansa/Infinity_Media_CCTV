<div id="quote" class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
    <div class="container quote px-lg-0">
        <div class="row g-0 mx-lg-0">
            <div class="col-lg-6 ps-lg-0" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="position-absolute img-fluid w-100 h-100" src="{{ asset('img/quote.jpg') }}"
                        style="object-fit: cover;" alt="">
                </div>
            </div>
            <div class="col-lg-6 quote-text py-5 wow fadeIn" data-wow-delay="0.5s">
                <div class="p-lg-5 pe-lg-0">
                    <div class="bg-primary mb-3" style="width: 60px; height: 2px;"></div>
                    <h1 class="display-5 mb-5">Konsultasi & Cek Lokasi Gratis</h1>
                    <p class="mb-4 pb-2">Bingung pilih paket yang pas? Hubungi kami sekarang untuk konsultasi kebutuhan
                        keamanan Anda. Tim kami siap melakukan survei lokasi tanpa dipungut biaya sepeser pun!</p>
                    <form>
                        <div class="row g-3">
                            <div class="col-12 col-sm-6">
                                <input type="text" class="form-control border-0" id="name"
                                    placeholder="Nama Lengkap" style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="email" class="form-control border-0" id="email"
                                    placeholder="Alamat Email" style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="text" class="form-control border-0" id="phone"
                                    placeholder="Nomor WhatsApp (Aktif)" style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-6">
                                <select class="form-select border-0" id="service_layanan" style="height: 55px;">
                                    <option value="" selected disabled>Pilih Kategori</option>
                                    <option value="Paket Rumah">Paket Rumah</option>
                                    <option value="Paket Kantor / Ruko">Paket Kantor / Ruko</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <textarea class="form-control border-0" id="message"
                                    placeholder="Detail Kebutuhan Anda (Contoh: Mau pasang 4 kamera di ruko)"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="button" onclick="sendToWhatsApp()">
                                    <i class="fab fa-whatsapp m-2"></i>Kirim via WhatsApp
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
