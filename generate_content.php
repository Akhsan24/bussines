<?php
/**
 * Script untuk membuat ratusan file dummy secara otomatis berdasarkan roadmap.
 * Menambahkan tombol Sebelumnya dan Selanjutnya.
 */

$base_dir = __DIR__;

// Struktur menu super app
$folders = [
    'artikel', 'berita', 'ebook', 'promo', 'tips', 'tutorial', 'video',
    'faq', 'kamus', 'glosarium', 'webinar', 'sertifikasi', 'komunitas', 'forum', 'ai', 'event', 'download-center', 'tools'
];

foreach ($folders as $folder) {
    $dir_path = $base_dir . '/' . $folder;
    if (!is_dir($dir_path)) {
        mkdir($dir_path, 0777, true);
    }
}

// Data Konten
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

foreach ($contents as $folder => $titles) {
    $total_items = count($titles);
    
    for ($i = 0; $i < $total_items; $i++) {
        $title = $titles[$i];
        $slug = createSlug($title);
        $file_path = $base_dir . '/' . $folder . '/' . $slug . '.php';
        
        // Navigation Logic
        $prev_html = '';
        $next_html = '';
        
        if ($i > 0) {
            $prev_title = $titles[$i-1];
            $prev_slug = createSlug($prev_title);
            $prev_html = '<a href="'. $prev_slug .'.php" class="btn btn-outline-primary btn-sm rounded-pill"><i class="bi bi-arrow-left me-1"></i> Sebelumnya</a>';
        } else {
            $prev_html = '<button class="btn btn-outline-secondary btn-sm rounded-pill" disabled><i class="bi bi-arrow-left me-1"></i> Sebelumnya</button>';
        }
        
        if ($i < $total_items - 1) {
            $next_title = $titles[$i+1];
            $next_slug = createSlug($next_title);
            $next_html = '<a href="'. $next_slug .'.php" class="btn btn-outline-primary btn-sm rounded-pill">Selanjutnya <i class="bi bi-arrow-right ms-1"></i></a>';
        } else {
            $next_html = '<button class="btn btn-outline-secondary btn-sm rounded-pill" disabled>Selanjutnya <i class="bi bi-arrow-right ms-1"></i></button>';
        }

        $content = <<<PHP
<?php
/**
 * Halaman Dummy untuk: $title
 */
\$page_title = "$title";
\$page_description = "Informasi lengkap tentang $title di DigiPulsaPay Academy.";
\$page_keywords = "$folder, $title, DigiPulsaPay";

require_once '../config/config.php';
require_once '../includes/seo.php';
require_once '../includes/header.php';
?>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10">
            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb" class="mb-4">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo BASE_PATH; ?>" class="text-decoration-none">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo BASE_PATH; ?>$folder/" class="text-decoration-none text-capitalize">$folder</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?php echo \$page_title; ?></li>
                </ol>
            </nav>

            <div class="card shadow-sm border-0 rounded-4 mb-4">
                <div class="card-body p-4 p-md-5">
                    <h1 class="fw-bold mb-3 h2"><?php echo \$page_title; ?></h1>
                    
                    <div class="d-flex align-items-center text-muted mb-4 pb-3 border-bottom" style="font-size: 0.9rem;">
                        <span class="me-3"><i class="bi bi-calendar3 me-1"></i> <?php echo date('d M Y'); ?></span>
                        <span class="me-3"><i class="bi bi-person me-1"></i> Tim DigiPulsaPay</span>
                        <span class="badge bg-primary bg-opacity-10 text-primary px-2 py-1 rounded-pill text-capitalize">$folder</span>
                    </div>
                    
                    <div class="content-body" style="font-size: 1.05rem; line-height: 1.8; color: #4a5568;">
                        <p class="lead mb-4">Selamat datang di halaman <strong><?php echo \$page_title; ?></strong>. Halaman ini berisi informasi lengkap yang Anda butuhkan untuk mengembangkan bisnis Anda bersama DigiPulsaPay.</p>
                        
                        <!-- Slot AdSense 1 (Mobile Friendly) -->
                        <div class="adsense-slot-content my-4 text-center bg-light rounded-3 p-3 border border-dashed border-secondary">
                            <span class="text-muted small d-block mb-1">Advertisement</span>
                            <?php if (file_exists('../includes/ads.php')) { include '../includes/ads.php'; } ?>
                        </div>

                        <p>Saat ini, konten untuk <em><?php echo \$page_title; ?></em> sedang dalam tahap penyusunan dan akan segera diperbarui secara bertahap oleh tim DigiPulsa Academy. Pastikan Anda terus memantau halaman ini untuk mendapatkan panduan terbaik terkait bisnis PPOB Anda.</p>
                        
                        <!-- Navigasi Prev/Next Artikel -->
                        <div class="d-flex justify-content-between align-items-center mt-5 pt-3 border-top">
                            <div>
                                $prev_html
                            </div>
                            <div>
                                <a href="<?php echo BASE_PATH; ?>$folder/" class="btn btn-light btn-sm rounded-pill px-3 shadow-sm text-dark"><i class="bi bi-grid-3x3-gap-fill me-1"></i> Indeks</a>
                            </div>
                            <div>
                                $next_html
                            </div>
                        </div>

                        <!-- Inter-linking Tambahan -->
                        <div class="p-4 bg-primary bg-opacity-10 rounded-3 mt-5 border-start border-4 border-primary">
                            <h5 class="fw-bold text-primary mb-2">Ingin tahu lebih banyak?</h5>
                            <p class="mb-0">Jelajahi <a href="<?php echo BASE_PATH; ?>$folder/" class="fw-bold text-decoration-none">$folder</a> lainnya atau bergabung dengan <a href="<?php echo BASE_PATH; ?>komunitas/" class="fw-bold text-decoration-none">Komunitas Agen</a> kami!</p>
                        </div>
                        
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>

<?php require_once '../includes/footer.php'; ?>
PHP;
        // Overwrite file
        file_put_contents($file_path, $content);
        $file_count++;
    }
}

echo "\nSelesai! $file_count file berhasil diperbarui dengan navigasi Sebelum/Selanjutnya.\n";
