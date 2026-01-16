function sendToWhatsApp() {
    // Ambil nomor dari atribut data-phone yang ada di tombol
    const btn = document.getElementById('sendWaBtn');
    const targetNumber = COMPANY_WHATSAPP;


    // Ambil data inputan form 
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const phone = document.getElementById('phone').value; 
    const service_layanan = document.getElementById('service_layanan').value;
    const message = document.getElementById('message').value; 

    // 3. Validasi Nama
    if (name === "") {
        alert("Mohon isi nama Anda!");
        return;
    }

    //Susun pesan & Buka WhatsApp
    const text = `Halo Infinity Media,%0A%0A` +
                 `Saya ingin konsultasi gratis:%0A` +
                 `*Nama:* ${name}%0A` +
                 `*Email:* ${email}%0A` +
                 `*WhatsApp:* ${phone}%0A` +
                 `*Layanan:* ${service_layanan}%0A` +
                 `*Pesan:* ${message}`;

    const waUrl = `https://wa.me/${targetNumber}?text=${text}`;
    window.open(waUrl, '_blank');
}

window.onload = function () {
    const yearElement = document.getElementById("displayYear");
    if (yearElement) {
        yearElement.innerHTML = new Date().getFullYear();
    }
}

