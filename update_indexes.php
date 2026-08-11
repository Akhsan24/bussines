<?php
/**
 * Script untuk membuat index.php di masing-masing kategori dengan UI Premium/Wow!
 * Menjaga data artikel asli yang sudah memiliki gambar thumbnail.
 */

$base_dir = __DIR__;

$original_artikel = [
    [
        'judul' => 'Apa Itu Server Pulsa? Panduan Lengkap',
        'deskripsi' => 'Server pulsa adalah sistem yang menghubungkan agen dengan provider untuk transaksi pulsa dan PPOB. Pelajari cara kerja dan tips memilih server terbaik.',
        'gambar' => 'https://i.ibb.co.com/qLZY7XVx/bd112dbf-febc-4e94-9d48-37e066d4599e.png',
        'kategori' => 'Panduan',
        'badge_color' => 'bg-info text-white',
        'link' => 'apa-itu-server-pulsa.php',
        'tanggal' => '23 Jul 2026'
    ],
    [
        'judul' => 'Apa Itu PPOB? Solusi Pembayaran Digital',
        'deskripsi' => 'PPOB adalah solusi pembayaran digital untuk kebutuhan sehari-hari. Layanan seperti listrik, pulsa, PDAM, BPJS, dan lainnya dalam satu aplikasi.',
        'gambar' => 'https://i.ibb.co.com/4nwTXMf8/9b18e0ab-cdb7-41b3-90a4-0e2b57cf0710.png',
        'kategori' => 'Panduan',
        'badge_color' => 'bg-success',
        'link' => 'apa-itu-ppob.php',
        'tanggal' => '23 Jul 2026'
    ],
    [
        'judul' => 'Cara Kerja Agen Pulsa - Panduan Lengkap',
        'deskripsi' => 'Pelajari cara kerja agen pulsa dari A sampai Z. Panduan lengkap menjadi agen pulsa sukses dengan sistem deposit, transaksi, dan keuntungan bisnis pulsa.',
        'gambar' => 'https://i.ibb.co.com/27TdsMRz/fecbdcd5-fd01-41aa-9316-6ec384775bca.png',
        'kategori' => 'Panduan',
        'badge_color' => 'bg-info text-white',
        'link' => 'cara-kerja-agen-pulsa.php',
        'tanggal' => '23 Jul 2026'
    ],
    [
        'judul' => 'Keuntungan Menjadi Agen PPOB',
        'deskripsi' => 'Temukan berbagai keuntungan menjadi agen PPOB. Peluang bisnis dengan modal kecil, keuntungan harian, dan produk lengkap.',
        'gambar' => 'https://i.ibb.co.com/sd3bDtbn/3d3e83b2-2e90-4bba-a075-6e042bec3b7c.png',
        'kategori' => 'Panduan',
        'badge_color' => 'bg-info text-white',
        'link' => 'keuntungan-agen-ppob.php',
        'tanggal' => '23 Jul 2026'
    ],
    [
        'judul' => 'Cara Memulai Bisnis Pulsa dari Nol',
        'deskripsi' => 'Panduan lengkap cara memulai bisnis pulsa dari nol untuk pemula. Modal kecil, keuntungan harian, dan tips sukses menjadi agen pulsa.',
        'gambar' => 'https://i.ibb.co.com/zhfdrS1m/0045e713-46c4-44c4-9892-ce5957064401.png',
        'kategori' => 'Panduan',
        'badge_color' => 'bg-info text-white',
        'link' => 'cara-memulai-bisnis-pulsa.php',
        'tanggal' => '23 Jul 2026'
    ],
    [
        'judul' => 'Istilah-istilah dalam Dunia PPOB',
        'deskripsi' => 'Panduan lengkap istilah-istilah dalam dunia PPOB. Pelajari arti deposit, saldo, server pulsa, markup, dan istilah penting lainnya.',
        'gambar' => 'https://i.ibb.co.com/tw1DJTsy/44f98820-40a0-46ee-9990-75396aeac69e.png',
        'kategori' => 'Panduan',
        'badge_color' => 'bg-info text-white',
        'link' => 'istilah-ppob.php',
        'tanggal' => '23 Jul 2026'
    ],
    [
        'judul' => 'Apa Itu Pulsa Elektrik? Panduan Lengkap',
        'deskripsi' => 'Pulsa elektrik adalah pulsa digital yang dikirim secara otomatis ke nomor tujuan. Pelajari cara kerja, keuntungan, dan bedanya dengan pulsa fisik.',
        'gambar' => 'https://i.ibb.co.com/jkQk980W/32266094-ccc8-4cd4-8f28-43f93d3d4f6e.png',
        'kategori' => 'Panduan',
        'badge_color' => 'bg-info text-white',
        'link' => 'apa-itu-pulsa-elektrik.php',
        'tanggal' => '23 Jul 2026'
    ],
    [
        'judul' => 'Apa Itu Paket Data Internet? Panduan Lengkap',
        'deskripsi' => 'Paket data internet adalah kuota untuk mengakses internet. Pelajari jenis-jenis paket data, cara kerja, dan tips memilih paket data yang tepat.',
        'gambar' => 'https://i.ibb.co.com/v45WGqjn/6dfc6059-55d2-493d-8170-00cd9d814d25.png',
        'kategori' => 'Panduan',
        'badge_color' => 'bg-info text-white',
        'link' => 'apa-itu-paket-data-internet.php',
        'tanggal' => '23 Jul 2026'
    ],
    [
        'judul' => 'Apa Itu Token Listrik PLN? Panduan Lengkap',
        'deskripsi' => 'Token listrik PLN adalah kode untuk mengisi pulsa listrik prabayar. Pelajari cara kerja, cara membeli, dan cara memasukkan token listrik.',
        'gambar' => 'https://i.ibb.co.com/27RNQzYy/a9a958be-e222-483c-bf2c-edeef9dc44c3.png',
        'kategori' => 'Panduan',
        'badge_color' => 'bg-info text-white',
        'link' => 'apa-itu-token-listrik-pln.php',
        'tanggal' => '23 Jul 2026'
    ],
    [
        'judul' => 'Apa Itu PPOB dan Manfaatnya?',
        'deskripsi' => 'PPOB adalah solusi pembayaran digital dalam satu aplikasi. Pelajari pengertian, manfaat, dan peluang bisnis PPOB untuk kehidupan sehari-hari.',
        'gambar' => 'https://i.ibb.co.com/sp2wgjn3/84291cf1-ff17-4db4-9132-69e4de9505fa.png',
        'kategori' => 'Panduan',
        'badge_color' => 'bg-info text-white',
        'link' => 'apa-itu-ppob-dan-manfaatnya.php',
        'tanggal' => '23 Jul 2026'
    ],
    [
        'judul' => 'Perbedaan PPOB dan Payment Gateway',
        'deskripsi' => 'Apa beda PPOB dan Payment Gateway? Pelajari pengertian, fungsi, dan perbedaan kedua sistem pembayaran digital ini untuk bisnis Anda.',
        'gambar' => 'https://i.ibb.co.com/DDjqCv4T/Whats-App-Image-2026-07-17-at-09-30-05.jpg',
        'kategori' => 'Panduan',
        'badge_color' => 'bg-info text-white',
        'link' => 'perbedaan-ppob-dan-payment-gateway.php',
        'tanggal' => '23 Jul 2026'
    ],
    [
        'judul' => 'Mengenal Produk Digital yang Paling Laris',
        'deskripsi' => 'Kenali produk digital paling laris untuk bisnis PPOB Anda. Dari pulsa, token listrik, paket data, hingga voucher game yang paling banyak dicari.',
        'gambar' => 'https://i.ibb.co.com/DDjqCv4T/Whats-App-Image-2026-07-17-at-09-30-05.jpg',
        'kategori' => 'Panduan',
        'badge_color' => 'bg-info text-white',
        'link' => 'produk-digital-paling-laris.php',
        'tanggal' => '23 Jul 2026'
    ],
    [
        'judul' => 'Mengapa Bisnis Pulsa Tidak Pernah Sepi',
        'deskripsi' => 'Bisnis pulsa tidak pernah sepi karena pulsa adalah kebutuhan pokok digital. Pelajari 10 alasan mengapa bisnis pulsa selalu ramai dan menguntungkan.',
        'gambar' => 'https://i.ibb.co.com/DDjqCv4T/Whats-App-Image-2026-07-17-at-09-30-05.jpg',
        'kategori' => 'Panduan',
        'badge_color' => 'bg-info text-white',
        'link' => 'mengapa-bisnis-pulsa-tidak-pernah-sepi.php',
        'tanggal' => '23 Jul 2026'
    ],
    [
        'judul' => 'Peluang Bisnis PPOB di Indonesia',
        'deskripsi' => 'Peluang bisnis PPOB di Indonesia sangat besar! Analisis pasar, potensi keuntungan, dan prospek bisnis PPOB di tengah era digitalisasi.',
        'gambar' => 'https://i.ibb.co.com/DDjqCv4T/Whats-App-Image-2026-07-17-at-09-30-05.jpg',
        'kategori' => 'Panduan',
        'badge_color' => 'bg-info text-white',
        'link' => 'peluang-bisnis-ppob-di-indonesia.php',
        'tanggal' => '23 Jul 2026'
    ],
    [
        'judul' => 'Perbedaan Pulsa Reguler dan Transfer Pulsa',
        'deskripsi' => 'Apa beda pulsa reguler dan transfer pulsa? Pelajari pengertian, cara kerja, keuntungan, dan perbedaan kedua jenis pulsa ini untuk bisnis Anda.',
        'gambar' => 'https://i.ibb.co.com/DDjqCv4T/Whats-App-Image-2026-07-17-at-09-30-05.jpg',
        'kategori' => 'Panduan',
        'badge_color' => 'bg-info text-white',
        'link' => 'perbedaan-pulsa-reguler-dan-transfer-pulsa.php',
        'tanggal' => '23 Jul 2026'
    ],
    [
        'judul' => 'Mengenal Voucher Fisik dan Voucher Digital',
        'deskripsi' => 'Apa beda voucher fisik dan voucher digital? Pelajari pengertian, keuntungan, dan perbedaan kedua jenis voucher ini untuk bisnis PPOB Anda.',
        'gambar' => 'https://i.ibb.co.com/DDjqCv4T/Whats-App-Image-2026-07-17-at-09-30-05.jpg',
        'kategori' => 'Panduan',
        'badge_color' => 'bg-info text-white',
        'link' => 'mengenal-voucher-fisik-dan-digital.php',
        'tanggal' => '23 Jul 2026'
    ],
    [
        'judul' => 'Apa Itu Saldo Deposit? Panduan Lengkap',
        'deskripsi' => 'Saldo deposit adalah modal utama untuk menjalankan bisnis PPOB. Pelajari pengertian, cara mengisi, dan tips mengelola saldo deposit dengan baik.',
        'gambar' => 'https://i.ibb.co.com/DDjqCv4T/Whats-App-Image-2026-07-17-at-09-30-05.jpg',
        'kategori' => 'Panduan',
        'badge_color' => 'bg-info text-white',
        'link' => 'apa-itu-saldo-deposit.php',
        'tanggal' => '23 Jul 2026'
    ],
    [
        'judul' => 'Mengapa Agen Membutuhkan Saldo Deposit?',
        'deskripsi' => 'Saldo deposit adalah modal utama agen PPOB. Pelajari 7 alasan penting mengapa agen membutuhkan saldo deposit untuk menjalankan bisnis.',
        'gambar' => 'https://i.ibb.co.com/DDjqCv4T/Whats-App-Image-2026-07-17-at-09-30-05.jpg',
        'kategori' => 'Panduan',
        'badge_color' => 'bg-info text-white',
        'link' => 'mengapa-agen-membutuhkan-saldo-deposit.php',
        'tanggal' => '23 Jul 2026'
    ],
    [
        'judul' => 'Cara Kerja Transaksi PPOB',
        'deskripsi' => 'Pelajari cara kerja transaksi PPOB dari awal hingga akhir. Panduan lengkap alur transaksi pulsa, token listrik, dan produk PPOB lainnya.',
        'gambar' => 'https://i.ibb.co.com/DDjqCv4T/Whats-App-Image-2026-07-17-at-09-30-05.jpg',
        'kategori' => 'Panduan',
        'badge_color' => 'bg-info text-white',
        'link' => 'cara-kerja-transaksi-ppob.php',
        'tanggal' => '23 Jul 2026'
    ],
    [
        'judul' => 'Mengenal Margin dan Komisi Agen',
        'deskripsi' => 'Pelajari apa itu margin dan komisi agen PPOB. Panduan lengkap cara menghitung keuntungan, strategi meningkatkan margin, dan tips sukses sebagai agen.',
        'gambar' => 'https://i.ibb.co.com/DDjqCv4T/Whats-App-Image-2026-07-17-at-09-30-05.jpg',
        'kategori' => 'Panduan',
        'badge_color' => 'bg-info text-white',
        'link' => 'mengenal-margin-dan-komisi-agen.php',
        'tanggal' => '23 Jul 2026'
    ]
];

$contents = [
    'artikel' => [
        'Mengenal Cashback dalam PPOB', 'Apa Itu Downline?', 'Manfaat Memiliki Downline',
        'Apa Itu DigiPartner?', 'Mengenal DigiCoin', 'Mengenal Mini ATM', 'Apa Itu QRIS Merchant?',
        'Mengenal Virtual Account', 'Mengenal E-Wallet di Indonesia', 'Mengenal Top Up Digital',
        'Mengapa UMKM Membutuhkan PPOB', 'Peluang Bisnis Digital Payment', 'Produk PPOB yang Paling Diminati',
        'Mengenal Layanan Pascabayar', 'Mengenal Layanan Prabayar', 'Peran Agen PPOB di Era Digital',
        'Tren Pembayaran Digital di Indonesia', 'Manfaat Aplikasi PPOB untuk Konter', 'Mengenal Sistem Transaksi Online',
        'Pentingnya Pelayanan bagi Agen PPOB', 'Cara Membangun Kepercayaan Pelanggan', 'Pentingnya Reputasi dalam Bisnis PPOB',
        'Kesalahan Umum Agen Baru', 'Strategi Mengembangkan Bisnis PPOB', 'Cara Mengelola Keuangan Agen',
        'Cara Menentukan Harga Jual', 'Cara Meningkatkan Omzet Agen', 'Peluang Menjadi DigiPartner EDC',
        'Masa Depan Bisnis PPOB', 'Ekosistem Layanan DigiPulsaPay'
    ],
    'berita' => [
        'DigiPulsa Academy Resmi Diluncurkan', 'DigiPartner EDC Resmi Dibuka', 'Program DigiCoin Segera Hadir',
        'Update Aplikasi DigiPulsaPay Versi Terbaru', 'Penambahan Produk Baru', 'Penambahan Provider Baru',
        'Penambahan Metode Deposit', 'Penambahan Bank Deposit', 'Jadwal Maintenance Sistem',
        'Informasi Gangguan Layanan', 'Update Harga Produk', 'Promo Bulan Januari', 'Promo Bulan Februari',
        'Promo Bulan Maret', 'Promo Ramadhan', 'Promo Idul Fitri', 'Promo Hari Kemerdekaan',
        'Promo Akhir Tahun', 'Webinar DigiPulsaPay', 'Seminar Mini ATM', 'Pelatihan DigiPartner',
        'Live Edukasi DigiPulsaPay', 'Pengumuman Pemenang Giveaway', 'Pengumuman Balapan Transaksi',
        'Pengumuman Undian Ulasan', 'Perbaikan Bug Sistem', 'Penambahan Fitur Baru', 'Perubahan Kebijakan Layanan',
        'Penyesuaian Harga Produk', 'Kerja Sama DigiPulsaPay dengan Mitra', 'DigiPulsaPay Hadir di Kota Baru',
        'Top Agen Bulan Ini', 'Testimoni Agen Terbaik', 'Jadwal Libur Operasional', 'Jadwal Layanan Customer Service',
        'Informasi Gangguan Bank', 'Informasi Gangguan Provider', 'Update Sistem Deposit', 'Update Sistem QRIS',
        'Peresmian DigiPartner Batch Baru', 'Event Offline DigiPulsaPay', 'Event Online DigiPulsaPay',
        'Program CSR DigiPulsaPay', 'Pengumuman Sertifikasi DigiPartner', 'Rekap Kegiatan DigiPulsaPay',
        'Kilas Balik DigiPulsaPay', 'Agenda DigiPulsaPay Bulan Ini', 'Pengumuman Penting untuk Agen',
        'Statistik Pertumbuhan DigiPulsaPay', 'Roadmap Pengembangan DigiPulsaPay'
    ],
    'ebook' => [
        'Panduan Lengkap DigiPulsaPay', 'Buku Panduan Agen Pemula', 'Modul Bisnis PPOB',
        'Modul Digital Payment', 'Panduan Deposit', 'Panduan Transaksi', 'Panduan Produk PPOB',
        'Panduan QRIS Merchant', 'Panduan Mini ATM', 'Panduan DigiPartner', 'Panduan DigiCoin',
        'Panduan Customer Service', 'SOP Agen DigiPulsaPay', 'SOP Penanganan Komplain', 'SOP Deposit',
        'SOP Transaksi', 'Modul Digital Marketing', 'Modul Copywriting', 'Modul Closing Penjualan',
        'Modul Manajemen Keuangan', 'Template Banner Konter', 'Template Brosur', 'Template Spanduk',
        'Template Feed Instagram', 'Template Story WhatsApp', 'Template Caption Promosi',
        'Template Broadcast WhatsApp', 'Template Balasan Customer Service', 'Modul Loyalitas Pelanggan',
        'Modul Pengembangan Downline', 'Modul Bisnis Mini ATM', 'Modul QRIS Merchant', 'Modul Anti Penipuan',
        'Modul Keamanan Akun', 'Modul Pelayanan Pelanggan', 'Modul Pengembangan Usaha', 'Modul UMKM Digital',
        'Modul Produk Digital', 'Modul Bisnis Rumahan', 'Kumpulan FAQ DigiPulsaPay', 'Panduan Menjadi DigiPartner',
        'Panduan Menjadi Agen Premium', 'Panduan Referral', 'Panduan DigiCoin Rewards', 'Panduan Event DigiPulsaPay',
        'Panduan Promosi Online', 'Panduan Promosi Offline', 'Panduan Bisnis Konter', 'Panduan Mengembangkan Omzet',
        'Katalog Produk DigiPulsaPay'
    ],
    'promo' => [
        'Promo Agen Baru', 'Bonus Deposit', 'Cashback Deposit', 'Promo Pulsa Murah', 'Promo Paket Data',
        'Promo Token PLN', 'Promo Top Up Game', 'Promo E-Wallet', 'Promo Transfer Bank', 'Promo QRIS Merchant',
        'Promo Mini ATM', 'Promo DigiPartner', 'Promo Upgrade Premium', 'Promo Referral', 'Promo DigiCoin',
        'Promo Ramadhan', 'Promo Idul Fitri', 'Promo Tahun Baru', 'Promo Hari Kemerdekaan', 'Promo Akhir Tahun',
        'Promo Anniversary DigiPulsaPay', 'Promo Payday', 'Promo Weekend', 'Flash Sale Produk Digital',
        'Promo Spesial Member', 'Promo Pelanggan Setia', 'Promo UMKM', 'Promo Konter Pulsa', 'Promo Voucher Game',
        'Promo Internet Rumah', 'Promo BPJS', 'Promo PDAM', 'Promo TV Kabel', 'Promo Multifinance', 'Promo Pulsa Telkomsel',
        'Promo XL', 'Promo Axis', 'Promo Indosat', 'Promo Tri', 'Promo Smartfren', 'Promo Biznet', 'Promo MyRepublic',
        'Promo First Media', 'Promo Cashback DigiCoin', 'Promo Event Webinar', 'Promo Seminar', 'Promo Merchandise',
        'Promo Giveaway', 'Promo Balapan Transaksi', 'Promo Ulasan Aplikasi'
    ],
    'tips' => [
        'Tips Memulai Bisnis PPOB', 'Tips Mendapat Pelanggan Pertama', 'Tips Menambah Omzet',
        'Tips Menjaga Pelanggan Tetap Loyal', 'Tips Mengatur Keuangan Konter', 'Tips Menghindari Penipuan',
        'Tips Membuat Password Aman', 'Tips Deposit Aman', 'Tips Memilih Produk Terlaris',
        'Tips Menentukan Harga Jual', 'Tips Promosi di WhatsApp', 'Tips Promosi di Facebook',
        'Tips Promosi di Instagram', 'Tips Promosi di TikTok', 'Tips Membuat Banner Menarik',
        'Tips Melayani Pelanggan', 'Tips Menghadapi Komplain', 'Tips Meningkatkan Rating Aplikasi',
        'Tips Memanfaatkan DigiCoin', 'Tips Mengembangkan Downline'
    ],
    'tutorial' => [
        'Cara Daftar DigiPulsaPay', 'Cara Login', 'Cara Deposit Saldo', 'Cara Transaksi Pulsa',
        'Cara Transaksi Paket Data', 'Cara Beli Token PLN', 'Cara Top Up E-Wallet', 'Cara Bayar BPJS',
        'Cara Bayar PDAM', 'Cara Bayar TV Kabel', 'Cara Mengubah PIN', 'Cara Mengganti Password',
        'Cara Mengubah Nomor HP', 'Cara Menghubungi Customer Service', 'Cara Membuat Tiket Bantuan',
        'Cara Upgrade Premium', 'Cara Mengajak Downline', 'Cara Menjadi DigiPartner', 'Cara Menggunakan DigiCoin',
        'Cara Menukarkan DigiCoin', 'Cara Daftar QRIS Merchant', 'Cara Menjual Mini ATM', 'Cara Cetak Struk',
        'Cara Melihat Riwayat Transaksi', 'Cara Download Laporan'
    ],
    'video' => [
        'Video Perkenalan DigiPulsaPay', 'Cara Daftar DigiPulsaPay', 'Cara Deposit Saldo', 'Cara Transaksi Pulsa',
        'Cara Transaksi Paket Data', 'Cara Bayar PPOB', 'Cara Menjadi DigiPartner', 'Cara Menjual Mini ATM',
        'Cara Daftar QRIS Merchant', 'Cara Mendapat DigiCoin', 'Webinar Bisnis PPOB', 'Webinar Digital Payment',
        'Pelatihan Customer Service', 'Pelatihan Promosi Online', 'Testimoni Agen Sukses', 'Kisah Sukses DigiPartner',
        'Demo Fitur Terbaru', 'Live Tanya Jawab', 'Rekaman Seminar', 'Video Tips Bisnis'
    ]
];

function createSlug($string) {
    $string = strtolower(trim($string));
    $string = preg_replace('/[^a-z0-9-]/', '-', $string);
    $string = preg_replace('/-+/', "-", $string);
    return trim($string, '-');
}

$file_count = 0;

$ui_config = [
    'artikel' => ['icon' => 'bi-journal-text', 'gradient' => 'linear-gradient(135deg, #0d6efd 0%, #0a58ca 100%)', 'badge' => 'bg-primary text-white'],
    'berita' => ['icon' => 'bi-megaphone', 'gradient' => 'linear-gradient(135deg, #dc3545 0%, #a71d2a 100%)', 'badge' => 'bg-danger text-white'],
    'ebook' => ['icon' => 'bi-book', 'gradient' => 'linear-gradient(135deg, #6f42c1 0%, #4a2b82 100%)', 'badge' => 'bg-purple text-white'],
    'promo' => ['icon' => 'bi-gift', 'gradient' => 'linear-gradient(135deg, #fd7e14 0%, #c45a08 100%)', 'badge' => 'bg-warning text-dark'],
    'tips' => ['icon' => 'bi-lightbulb', 'gradient' => 'linear-gradient(135deg, #ffc107 0%, #d39e00 100%)', 'badge' => 'bg-warning text-dark'],
    'tutorial' => ['icon' => 'bi-laptop', 'gradient' => 'linear-gradient(135deg, #198754 0%, #115c38 100%)', 'badge' => 'bg-success text-white'],
    'video' => ['icon' => 'bi-play-circle', 'gradient' => 'linear-gradient(135deg, #e83e8c 0%, #ad2966 100%)', 'badge' => 'bg-pink text-white']
];

foreach ($contents as $folder => $titles) {
    $file_path = $base_dir . '/' . $folder . '/index.php';
    $conf = $ui_config[$folder];
    
    // Generate array string
    $array_string = "[\n";
    
    // KHUSUS UNTUK FOLDER ARTIKEL: Tambahkan data original terlebih dahulu
    if ($folder === 'artikel') {
        foreach ($original_artikel as $item) {
            $array_string .= "    [\n";
            $array_string .= "        'judul' => '" . addslashes($item['judul']) . "',\n";
            $array_string .= "        'deskripsi' => '" . addslashes($item['deskripsi']) . "',\n";
            $array_string .= "        'kategori' => '" . addslashes($item['kategori']) . "',\n";
            $array_string .= "        'badge_color' => '" . $item['badge_color'] . "',\n";
            $array_string .= "        'link' => '" . $item['link'] . "',\n";
            $array_string .= "        'tanggal' => '" . $item['tanggal'] . "',\n";
            $array_string .= "        'gambar' => '" . $item['gambar'] . "'\n";
            $array_string .= "    ],\n";
        }
    }
    
    // Tambahkan data dummy yang baru
    foreach ($titles as $title) {
        $slug = createSlug($title);
        $array_string .= "    [\n";
        $array_string .= "        'judul' => '" . addslashes($title) . "',\n";
        $array_string .= "        'deskripsi' => 'Pelajari selengkapnya tentang " . addslashes($title) . " di panduan resmi DigiPulsaPay Academy.',\n";
        $array_string .= "        'kategori' => '" . ucfirst($folder) . "',\n";
        $array_string .= "        'badge_color' => '" . $conf['badge'] . "',\n";
        $array_string .= "        'link' => '" . $slug . ".php',\n";
        $array_string .= "        'tanggal' => '" . date('d M Y') . "'\n";
        $array_string .= "    ],\n";
    }
    $array_string .= "];\n";
    
    $ucfolder = ucfirst($folder);

    $content = <<<PHP
<?php
/**
 * HALAMAN DAFTAR $ucfolder (PREMIUM DESIGN + DATA ASLI)
 */

\$page_title = "$ucfolder - DigiPulsaPay Academy";
\$page_description = "Kumpulan $folder edukasi tentang bisnis pulsa, PPOB, dan tips sukses dari DigiPulsaPay.";
\$page_keywords = "$folder, Edukasi, Bisnis Pulsa, PPOB, Tips Sukses";

// DATA KONTEN
\$list_konten = $array_string

// PAGINATION
\$item_per_halaman = 12;
\$total_item = count(\$list_konten);
\$total_halaman = ceil(\$total_item / \$item_per_halaman);

\$halaman_aktif = isset(\$_GET['page']) ? (int)\$_GET['page'] : 1;
if (\$halaman_aktif < 1) \$halaman_aktif = 1;
if (\$halaman_aktif > \$total_halaman) \$halaman_aktif = max(1, \$total_halaman);

\$offset = (\$halaman_aktif - 1) * \$item_per_halaman;
\$konten_halaman = array_slice(\$list_konten, \$offset, \$item_per_halaman);

require_once '../config/config.php';
require_once '../includes/seo.php';

setMetaTags([
    'title' => \$page_title,
    'description' => \$page_description,
    'keywords' => \$page_keywords,
    'url' => SITE_URL . '$folder/',
    'type' => 'website'
]);

require_once '../includes/header.php';
?>

<!-- STYLE KHUSUS HALAMAN INI -->
<style>
    .category-hero {
        background: {$conf['gradient']};
        padding: 80px 0 100px;
        position: relative;
        overflow: hidden;
        border-bottom-left-radius: 40px;
        border-bottom-right-radius: 40px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        margin-bottom: -50px;
        z-index: 1;
    }
    .category-hero::after {
        content: '';
        position: absolute;
        top: -50%;
        right: -10%;
        width: 400px;
        height: 400px;
        background: rgba(255,255,255,0.1);
        border-radius: 50%;
        filter: blur(40px);
    }
    .card-premium {
        border: none;
        border-radius: 24px;
        background: #ffffff;
        box-shadow: 0 10px 40px rgba(0,0,0,0.04);
        transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
        overflow: hidden;
        z-index: 2;
        position: relative;
    }
    .card-premium:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 40px rgba(0,0,0,0.1);
    }
    .card-img-gradient {
        height: 180px;
        background: {$conf['gradient']};
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
    }
    .card-img-gradient::before {
        content: '';
        position: absolute;
        top: 0; left: 0; right: 0; bottom: 0;
        background: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI0IiBoZWlnaHQ9IjQiPgo8cmVjdCB3aWR0aD0iNCIgaGVpZ2h0PSI0IiBmaWxsPSIjZmZmIiBmaWxsLW9wYWNpdHk9IjAuMDUiLz4KPC9zdmc+');
        opacity: 0.5;
    }
    .card-icon-float {
        position: absolute;
        bottom: -20px;
        right: 20px;
        width: 50px;
        height: 50px;
        background: white;
        border-radius: 16px;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 8px 20px rgba(0,0,0,0.1);
        font-size: 1.5rem;
        color: #333;
        z-index: 3;
    }
    .image-cover {
        width: 100%;
        height: 180px;
        object-fit: cover;
    }
    
    /* Animasi Staggered */
    .stagger-item {
        opacity: 0;
        transform: translateY(30px);
        animation: fadeUp 0.6s cubic-bezier(0.16, 1, 0.3, 1) forwards;
    }
    @keyframes fadeUp {
        to { opacity: 1; transform: translateY(0); }
    }
    <?php 
    for (\$i = 1; \$i <= 12; \$i++) {
        echo ".stagger-item:nth-child({\$i}) { animation-delay: " . (\$i * 0.1) . "s; }\\n";
    }
    ?>
    
    /* Pagination Premium */
    .pagination-premium .page-link {
        width: 45px;
        height: 45px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        margin: 0 5px;
        border: none;
        color: #555;
        font-weight: 600;
        box-shadow: 0 4px 10px rgba(0,0,0,0.05);
        transition: all 0.3s;
    }
    .pagination-premium .page-item.active .page-link {
        background: {$conf['gradient']};
        color: white;
        box-shadow: 0 8px 20px rgba(0,0,0,0.15);
        transform: scale(1.1);
    }
    .pagination-premium .page-link:hover {
        transform: translateY(-3px);
    }
</style>

<!-- HEADER KATEGORI -->
<div class="category-hero text-center text-white">
    <div class="container position-relative" style="z-index: 2;">
        <div class="d-inline-flex align-items-center bg-white bg-opacity-25 rounded-pill px-4 py-2 mb-3 backdrop-blur border border-white border-opacity-25">
            <i class="bi {$conf['icon']} me-2 fs-5"></i>
            <span class="fw-bold tracking-wide text-uppercase" style="letter-spacing: 1px;">Kategori Pilihan</span>
        </div>
        <h1 class="display-4 fw-bolder mb-3" style="text-shadow: 0 4px 15px rgba(0,0,0,0.1);">$ucfolder Edukasi</h1>
        <p class="lead fw-normal opacity-75 max-w-2xl mx-auto mb-0">Temukan panduan, tips, dan trik terbaru seputar bisnis PPOB untuk meningkatkan omzet dan kesuksesan Anda di era digital.</p>
    </div>
</div>

<div class="container position-relative" style="z-index: 3;">
    <!-- DAFTAR KONTEN (GRID) -->
    <div class="row g-4 g-lg-5 mb-5">
        <?php if (empty(\$konten_halaman)): ?>
            <div class="col-12 text-center py-5 bg-white rounded-4 shadow-sm mt-5">
                <div class="p-5">
                    <i class="bi bi-folder-x text-muted opacity-25" style="font-size: 5rem;"></i>
                    <h4 class="fw-bold text-muted mt-3">Belum Ada Konten</h4>
                    <p class="text-muted">Nantikan $folder terbaru dari DigiPulsaPay Academy!</p>
                </div>
            </div>
        <?php else: ?>
            <?php foreach (\$konten_halaman as \$item): ?>
            <div class="col-lg-4 col-md-6 stagger-item">
                <a href="<?php echo BASE_PATH; ?>$folder/<?php echo \$item['link']; ?>" class="text-decoration-none">
                    <div class="card card-premium h-100">
                        <?php if(isset(\$item['gambar']) && !empty(\$item['gambar'])): ?>
                            <!-- Pakai Gambar Asli Jika Ada -->
                            <div style="position: relative;">
                                <img src="<?php echo \$item['gambar']; ?>" class="image-cover" alt="<?php echo \$item['judul']; ?>">
                                <div class="card-icon-float" style="bottom: -20px; right: 20px;">
                                    <i class="bi bi-arrow-up-right"></i>
                                </div>
                            </div>
                        <?php else: ?>
                            <!-- Gradient Icon Placeholder -->
                            <div class="card-img-gradient">
                                <i class="bi {$conf['icon']} text-white opacity-50" style="font-size: 5rem;"></i>
                                <div class="card-icon-float">
                                    <i class="bi bi-arrow-up-right"></i>
                                </div>
                            </div>
                        <?php endif; ?>
                        
                        <div class="card-body p-4 pt-4">
                            <span class="badge <?php echo \$item['badge_color']; ?> mb-3 px-3 py-2 rounded-pill fw-medium">
                                <i class="bi {$conf['icon']} me-1"></i> <?php echo \$item['kategori']; ?>
                            </span>
                            <h5 class="card-title fw-bold text-dark mb-3" style="font-size: 1.25rem; line-height: 1.4;">
                                <?php echo \$item['judul']; ?>
                            </h5>
                            <p class="card-text text-muted mb-0" style="display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden; font-size: 0.95rem;">
                                <?php echo \$item['deskripsi']; ?>
                            </p>
                        </div>
                        <div class="card-footer bg-transparent border-0 px-4 pb-4 pt-0">
                            <div class="d-flex align-items-center justify-content-between border-top pt-3 mt-2">
                                <div class="d-flex align-items-center text-muted small">
                                    <i class="bi bi-calendar3 me-2"></i> <?php echo \$item['tanggal']; ?>
                                </div>
                                <span class="text-primary fw-bold" style="font-size: 0.9rem;">BACA <i class="bi bi-chevron-right ms-1 small"></i></span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
    
    <!-- SLOT ADSENSE (Banner Bawah) -->
    <div class="bg-white rounded-4 shadow-sm border border-dashed border-secondary border-opacity-25 p-4 mb-5 text-center">
        <span class="text-muted small fw-bold text-uppercase tracking-wider mb-2 d-block">Advertisement</span>
        <?php if (file_exists('../includes/ads.php')) { include '../includes/ads.php'; } ?>
    </div>
    
    <!-- PAGINATION PREMIUM -->
    <?php if (\$total_halaman > 1): ?>
    <nav aria-label="Navigasi halaman" class="mb-5 pb-4">
        <ul class="pagination pagination-premium justify-content-center align-items-center gap-1">
            <?php if (\$halaman_aktif > 1): ?>
                <li class="page-item">
                    <a class="page-link" href="?page=<?php echo \$halaman_aktif - 1; ?>"><i class="bi bi-chevron-left"></i></a>
                </li>
            <?php endif; ?>
            
            <?php
            \$range = 2;
            \$start = max(1, \$halaman_aktif - \$range);
            \$end = min(\$total_halaman, \$halaman_aktif + \$range);
            
            for (\$i = \$start; \$i <= \$end; \$i++) {
                \$active = (\$i == \$halaman_aktif) ? 'active' : '';
                echo '<li class="page-item '.\$active.'"><a class="page-link" href="?page='.\$i.'">'.\$i.'</a></li>';
            }
            ?>
            
            <?php if (\$halaman_aktif < \$total_halaman): ?>
                <li class="page-item">
                    <a class="page-link" href="?page=<?php echo \$halaman_aktif + 1; ?>"><i class="bi bi-chevron-right"></i></a>
                </li>
            <?php endif; ?>
        </ul>
        <div class="text-center text-muted small mt-3 fw-medium">
            Halaman <?php echo \$halaman_aktif; ?> dari <?php echo \$total_halaman; ?>
        </div>
    </nav>
    <?php endif; ?>

</div>

<?php require_once '../includes/footer.php'; ?>
PHP;
    
    file_put_contents($file_path, $content);
    echo "Dibuat ulang index premium + gambar asli: $folder/index.php\n";
    $file_count++;
}

echo "Selesai! $file_count file index.php berhasil di-upgrade dan 20 artikel asli telah dikembalikan.\n";
