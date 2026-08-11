<?php
/**
 * ============================================
 * PANDUAN LENGKAP MENAMBAH KONTEN
 * ============================================
 * File ini berisi panduan lengkap menambah konten
 * dengan gambar menggunakan link eksternal
 * ============================================
 */

$page_title = "Panduan Menambah Konten - DigiPulsaPay Academy";
$page_description = "Panduan lengkap cara menambah artikel, berita, video, ebook, tutorial, tips, dan promo di DigiPulsaPay Academy dengan gambar menggunakan link eksternal.";
$page_keywords = "panduan, menambah konten, tutorial, DigiPulsaPay, IMGBB";
$page_image = "https://i.ibb.co.com/DDjqCv4T/Whats-App-Image-2026-07-17-at-09-30-05.jpg";
$page_url = "https://academy.digipulsapay.com/panduan-menambah-konten.php";

require_once 'config/config.php';
require_once 'includes/seo.php';

setMetaTags([
    'title' => $page_title,
    'description' => $page_description,
    'keywords' => $page_keywords,
    'image' => $page_image,
    'url' => $page_url,
    'type' => 'article'
]);

require_once 'includes/header.php';

$breadcrumb_items = [
    ['name' => 'Panduan Menambah Konten']
];
?>

<style>
.panduan-box {
    background: #f8f9fa;
    border-left: 4px solid #0056b3;
    padding: 1rem;
    margin: 1rem 0;
    border-radius: 8px;
}
.panduan-box-success {
    background: #d4edda;
    border-left: 4px solid #28a745;
    padding: 1rem;
    margin: 1rem 0;
    border-radius: 8px;
}
.panduan-box-warning {
    background: #fff3cd;
    border-left: 4px solid #ffc107;
    padding: 1rem;
    margin: 1rem 0;
    border-radius: 8px;
}
.panduan-box-danger {
    background: #f8d7da;
    border-left: 4px solid #dc3545;
    padding: 1rem;
    margin: 1rem 0;
    border-radius: 8px;
}
.step-number {
    display: inline-block;
    background: #0056b3;
    color: white;
    width: 35px;
    height: 35px;
    text-align: center;
    line-height: 35px;
    border-radius: 50%;
    font-weight: bold;
    margin-right: 10px;
    font-size: 1.1rem;
}
.link-example {
    background: #2d2d2d;
    color: #f8f9fa;
    padding: 0.5rem 1rem;
    border-radius: 4px;
    font-family: monospace;
    font-size: 0.85rem;
    word-break: break-all;
}
.code-block {
    background: #1e1e1e;
    color: #d4d4d4;
    padding: 1rem;
    border-radius: 8px;
    font-family: 'Consolas', 'Courier New', monospace;
    font-size: 0.85rem;
    overflow-x: auto;
    margin: 1rem 0;
}
.code-block .code-keyword {
    color: #569cd6;
}
.code-block .code-string {
    color: #ce9178;
}
.code-block .code-comment {
    color: #6a9955;
}
.code-block .code-var {
    color: #9cdcfe;
}
.badge-example {
    display: inline-block;
    padding: 0.25rem 0.75rem;
    border-radius: 50px;
    font-size: 0.75rem;
    font-weight: 600;
}
.badge-primary { background: #0056b3; color: white; }
.badge-success { background: #28a745; color: white; }
.badge-warning { background: #ffc107; color: #333; }
.badge-danger { background: #dc3545; color: white; }
.badge-info { background: #17a2b8; color: white; }
.table-panduan {
    width: 100%;
    border-collapse: collapse;
    margin: 1rem 0;
}
.table-panduan th {
    background: #0056b3;
    color: white;
    padding: 0.75rem;
    text-align: left;
}
.table-panduan td {
    padding: 0.75rem;
    border-bottom: 1px solid #dee2e6;
}
.table-panduan tr:hover {
    background: #f8f9fa;
}
.icon-list {
    list-style: none;
    padding-left: 0;
}
.icon-list li {
    padding: 0.5rem 0;
    border-bottom: 1px solid #f0f0f0;
}
.icon-list li:last-child {
    border-bottom: none;
}
.icon-list i {
    margin-right: 0.75rem;
    color: #0056b3;
}
</style>

<div class="container py-4">
    <div class="row">
        <div class="col-lg-10 mx-auto">
            <?php echo getBreadcrumb($breadcrumb_items); ?>
            
            <div class="article-content">
                <!-- HEADER -->
                <div class="text-center mb-4">
                    <h1 class="display-5 fw-bold">📘 PANDUAN LENGKAP</h1>
                    <h2 class="text-primary">MENAMBAH KONTEN</h2>
                    <p class="lead">DigiPulsa Academy</p>
                    <hr>
                    <p class="text-muted">
                        <i class="bi bi-calendar3"></i> Versi 1.0 | 
                        <i class="bi bi-clock"></i> Terakhir diperbarui: <?php echo date('d F Y'); ?>
                    </p>
                </div>

                <!-- ISI -->
                <div class="panduan-box-success">
                    <i class="bi bi-check-circle-fill text-success"></i>
                    <strong>GAMBAR PAKAI LINK:</strong> Panduan ini menggunakan link eksternal (IMGBB) untuk semua gambar. 
                    Tidak perlu FTP atau akses server!
                </div>

                <!-- ============================================ -->
                <!-- BAB 1: PENDAHULUAN                          -->
                <!-- ============================================ -->
                
                <h2 class="mt-4">1. Pendahuluan</h2>
                <p>
                    Website DigiPulsa Academy memiliki 7 jenis konten yang bisa Anda tambahkan:
                </p>
                <div class="row g-3 mt-2">
                    <div class="col-md-3 col-6">
                        <div class="card text-center p-2">
                            <i class="bi bi-newspaper fs-2 text-primary"></i>
                            <small>Artikel</small>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="card text-center p-2">
                            <i class="bi bi-megaphone fs-2 text-primary"></i>
                            <small>Berita</small>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="card text-center p-2">
                            <i class="bi bi-play-circle fs-2 text-primary"></i>
                            <small>Video</small>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="card text-center p-2">
                            <i class="bi bi-book fs-2 text-primary"></i>
                            <small>Ebook</small>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="card text-center p-2">
                            <i class="bi bi-mortarboard fs-2 text-primary"></i>
                            <small>Tutorial</small>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="card text-center p-2">
                            <i class="bi bi-lightbulb fs-2 text-primary"></i>
                            <small>Tips</small>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="card text-center p-2">
                            <i class="bi bi-gift fs-2 text-primary"></i>
                            <small>Promo</small>
                        </div>
                    </div>
                </div>

                <!-- ============================================ -->
                <!-- BAB 2: ALUR DASAR                           -->
                <!-- ============================================ -->
                
                <h2 class="mt-5">2. Alur Dasar Menambah Konten</h2>
                
                <div class="panduan-box">
                    <p class="mb-0">
                        <strong>Setiap kali menambah konten, ada 2 langkah utama:</strong>
                    </p>
                    <ol class="mt-2 mb-0">
                        <li><strong>Buat file konten baru</strong> (copy template → rename → isi konten)</li>
                        <li><strong>Daftarkan di halaman index</strong> (agar muncul di daftar)</li>
                    </ol>
                </div>

                <div class="row g-3 mt-3">
                    <div class="col-md-6">
                        <div class="card p-3 text-center h-100">
                            <i class="bi bi-file-earmark-plus fs-1 text-primary"></i>
                            <h6 class="mt-2">1. Buat File</h6>
                            <p class="small text-muted">Copy template.php → Rename → Isi konten</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card p-3 text-center h-100">
                            <i class="bi bi-list-ul fs-1 text-primary"></i>
                            <h6 class="mt-2">2. Daftarkan</h6>
                            <p class="small text-muted">Tambahkan di index.php agar muncul</p>
                        </div>
                    </div>
                </div>

                <!-- ============================================ -->
                <!-- BAB 3: CARA DAPAT LINK GAMBAR               -->
                <!-- ============================================ -->
                
                <h2 class="mt-5">3. Cara Dapat Link Gambar (IMGBB)</h2>
                
                <div class="panduan-box-warning">
                    <i class="bi bi-info-circle"></i>
                    <strong>Gunakan IMGBB</strong> untuk upload gambar dan dapatkan link langsung tanpa FTP!
                </div>

                <h4 class="mt-3">Langkah-langkah:</h4>

                <div class="row g-3 mt-2">
                    <div class="col-md-6">
                        <div class="card p-3 h-100">
                            <h5><span class="step-number">1</span> Buka IMGBB</h5>
                            <p class="small">Kunjungi <a href="https://imgbb.com/" target="_blank">imgbb.com</a></p>
                            <div class="link-example">https://imgbb.com/</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card p-3 h-100">
                            <h5><span class="step-number">2</span> Upload Gambar</h5>
                            <p class="small">Klik "Start Uploading" dan pilih gambar</p>
                            <div class="panduan-box">
                                <i class="bi bi-image"></i> Format: JPG, PNG, GIF, WebP
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card p-3 h-100">
                            <h5><span class="step-number">3</span> Atur Opsi</h5>
                            <p class="small">Pilih "No Expiration" agar gambar permanen</p>
                            <div class="panduan-box-success">
                                <i class="bi bi-check-circle"></i> No Expiration = gambar tidak akan hilang
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card p-3 h-100">
                            <h5><span class="step-number">4</span> Copy Link</h5>
                            <p class="small">Pilih <strong>"Direct URL"</strong> dan copy linknya</p>
                            <div class="link-example">https://i.ibb.co/xxxxx/nama-gambar.jpg</div>
                        </div>
                    </div>
                </div>

                <div class="panduan-box-success mt-3">
                    <i class="bi bi-check-circle-fill text-success"></i>
                    <strong>Link yang benar:</strong> https://i.ibb.co/xxxxx/nama-gambar.jpg
                    <br>
                    <i class="bi bi-x-circle text-danger"></i>
                    <strong>Link yang salah:</strong> https://ibb.co/xxxxx (ini link halaman, bukan gambar)
                </div>

                <!-- ============================================ -->
                <!-- BAB 4: CARA MENAMBAH ARTIKEL                -->
                <!-- ============================================ -->
                
                <h2 class="mt-5">4. Cara Menambah Artikel</h2>

                <h4 class="mt-3">Langkah 1: Buat File Artikel</h4>
                <div class="code-block">
                    <span class="code-comment">// Buka folder artikel/</span>
                    <span class="code-comment">// Copy file template.php</span>
                    <span class="code-comment">// Rename menjadi:</span>
                    <span class="code-string">cara-topup-pulsa.php</span>
                </div>

                <h4 class="mt-3">Langkah 2: Edit Konfigurasi</h4>
                <p>Cari tulisan <strong>"EDIT BAGIAN INI SAJA"</strong> dan ubah:</p>

                <div class="code-block">
<span class="code-comment">// ============================================</span>
<span class="code-comment">// EDIT BAGIAN INI SAJA</span>
<span class="code-comment">// ============================================</span>

<span class="code-var">$page_title</span> = <span class="code-string">"Cara Topup Pulsa di DigiPulsaPay"</span>;
<span class="code-var">$page_description</span> = <span class="code-string">"Panduan lengkap topup pulsa dengan mudah dan cepat."</span>;
<span class="code-var">$page_keywords</span> = <span class="code-string">"topup pulsa, cara topup, DigiPulsaPay"</span>;

<span class="code-comment">// === PAKAI LINK DARI IMGBB ===</span>
<span class="code-var">$page_image</span> = <span class="code-string">"https://i.ibb.co/xxxxx/topup.jpg"</span>;

<span class="code-var">$page_url</span> = <span class="code-string">"https://academy.digipulsapay.com/artikel/cara-topup-pulsa.php"</span>;

<span class="code-var">$article_data</span> = [
    <span class="code-string">'title'</span> => <span class="code-string">'Cara Topup Pulsa di DigiPulsaPay'</span>,
    <span class="code-string">'author'</span> => <span class="code-string">'Tim DigiPulsaPay'</span>,
    <span class="code-string">'date'</span> => <span class="code-string">'2026-07-21'</span>,
    <span class="code-string">'category'</span> => <span class="code-string">'Tutorial'</span>,
    <span class="code-string">'tags'</span> => [<span class="code-string">'topup'</span>, <span class="code-string">'pulsa'</span>, <span class="code-string">'DigiPulsaPay'</span>],
    <span class="code-string">'image'</span> => <span class="code-string">'topup.jpg'</span>,
    <span class="code-string">'image_alt'</span> => <span class="code-string">'Cara Topup Pulsa'</span>
];
</div>

                <h4 class="mt-3">Langkah 3: Isi Konten</h4>
                <div class="code-block">
<span class="code-comment">&lt;!-- ============================================ --&gt;</span>
<span class="code-comment">&lt;!-- ISI ARTIKEL - EDIT DI SINI                  --&gt;</span>
<span class="code-comment">&lt;!-- ============================================ --&gt;</span>

<span class="code-string">&lt;h2&gt;</span>Apa itu Topup Pulsa?<span class="code-string">&lt;/h2&gt;</span>
<span class="code-string">&lt;p&gt;</span>
    Tulis paragraf pembuka di sini...
<span class="code-string">&lt;/p&gt;</span>

<span class="code-string">&lt;h2&gt;</span>Cara Topup di DigiPulsaPay<span class="code-string">&lt;/h2&gt;</span>
<span class="code-string">&lt;ol&gt;</span>
    <span class="code-string">&lt;li&gt;</span>Langkah pertama...<span class="code-string">&lt;/li&gt;</span>
    <span class="code-string">&lt;li&gt;</span>Langkah kedua...<span class="code-string">&lt;/li&gt;</span>
    <span class="code-string">&lt;li&gt;</span>Langkah ketiga...<span class="code-string">&lt;/li&gt;</span>
<span class="code-string">&lt;/ol&gt;</span>

<span class="code-string">&lt;h2&gt;</span>Kesimpulan<span class="code-string">&lt;/h2&gt;</span>
<span class="code-string">&lt;p&gt;</span>
    Tulis kesimpulan di sini...
<span class="code-string">&lt;/p&gt;</span>
</div>

                <h4 class="mt-3">Langkah 4: Daftarkan di Index</h4>
                <p>Buka <code>artikel/index.php</code> dan tambahkan card baru:</p>
                <div class="code-block">
<span class="code-comment">&lt;!-- Artikel Baru --&gt;</span>
<span class="code-string">&lt;div class="col-md-6"&gt;</span>
    <span class="code-string">&lt;div class="card fade-in-up"&gt;</span>
        <span class="code-string">&lt;img src="</span><span class="code-string">https://i.ibb.co/xxxxx/topup.jpg</span><span class="code-string">"</span>
             <span class="code-string">class="card-img-top"</span>
             <span class="code-string">alt="Cara Topup Pulsa"&gt;</span>
        <span class="code-string">&lt;div class="card-body"&gt;</span>
            <span class="code-string">&lt;span class="badge bg-primary"&gt;</span>Tutorial<span class="code-string">&lt;/span&gt;</span>
            <span class="code-string">&lt;h5 class="card-title mt-2"&gt;</span>
                <span class="code-string">&lt;a href="cara-topup-pulsa.php" class="text-decoration-none"&gt;</span>
                    Cara Topup Pulsa di DigiPulsaPay
                <span class="code-string">&lt;/a&gt;</span>
            <span class="code-string">&lt;/h5&gt;</span>
            <span class="code-string">&lt;p class="card-text"&gt;</span>Panduan lengkap topup pulsa dengan mudah dan cepat.<span class="code-string">&lt;/p&gt;</span>
            <span class="code-string">&lt;a href="cara-topup-pulsa.php" class="btn btn-primary btn-sm"&gt;</span>
                Baca <span class="code-string">&lt;i class="bi bi-arrow-right"&gt;&lt;/i&gt;</span>
            <span class="code-string">&lt;/a&gt;</span>
        <span class="code-string">&lt;/div&gt;</span>
    <span class="code-string">&lt;/div&gt;</span>
<span class="code-string">&lt;/div&gt;</span>
</div>

                <!-- ============================================ -->
                <!-- BAB 5: CARA MENAMBAH BERITA                 -->
                <!-- ============================================ -->
                
                <h2 class="mt-5">5. Cara Menambah Berita</h2>

                <div class="panduan-box-warning">
                    <i class="bi bi-info-circle"></i>
                    <strong>Berita berbeda dengan artikel!</strong> Berita menggunakan array di index.php, lebih mudah.
                </div>

                <h4 class="mt-3">Langkah 1: Buat File Berita</h4>
                <div class="code-block">
<span class="code-comment">// Buka folder berita/</span>
<span class="code-comment">// Copy template.php → Rename menjadi:</span>
<span class="code-string">peluncuran-fitur.php</span>
</div>

                <h4 class="mt-3">Langkah 2: Edit Konfigurasi</h4>
                <div class="code-block">
<span class="code-comment">// ============================================</span>
<span class="code-comment">// EDIT BAGIAN INI SAJA</span>
<span class="code-comment">// ============================================</span>

<span class="code-var">$page_title</span> = <span class="code-string">"DigiPulsaPay Luncurkan Fitur Baru"</span>;
<span class="code-var">$page_description</span> = <span class="code-string">"Fitur terbaru memudahkan transaksi dan pengelolaan bisnis."</span>;
<span class="code-var">$page_keywords</span> = <span class="code-string">"fitur baru, DigiPulsaPay, update"</span>;

<span class="code-comment">// === PAKAI LINK DARI IMGBB ===</span>
<span class="code-var">$page_image</span> = <span class="code-string">"https://i.ibb.co/xxxxx/fitur-baru.jpg"</span>;

<span class="code-var">$page_url</span> = <span class="code-string">"https://academy.digipulsapay.com/berita/peluncuran-fitur.php"</span>;

<span class="code-var">$berita_data</span> = [
    <span class="code-string">'title'</span> => <span class="code-string">'DigiPulsaPay Luncurkan Fitur Baru'</span>,
    <span class="code-string">'subtitle'</span> => <span class="code-string">'Fitur terbaru memudahkan transaksi dan pengelolaan bisnis.'</span>,
    <span class="code-string">'date'</span> => <span class="code-string">'2026-07-21'</span>,
    <span class="code-string">'author'</span> => <span class="code-string">'Tim DigiPulsaPay'</span>,
    <span class="code-string">'category'</span> => <span class="code-string">'Perusahaan'</span>,
    <span class="code-string">'tags'</span> => [<span class="code-string">'fitur'</span>, <span class="code-string">'update'</span>, <span class="code-string">'DigiPulsaPay'</span>]
];
</div>

                <h4 class="mt-3">Langkah 3: Daftarkan di Index Berita</h4>
                <p>Buka <code>berita/index.php</code> dan tambahkan di array <code>$berita_list</code>:</p>
                <div class="code-block">
<span class="code-var">$berita_list</span> = [
    <span class="code-comment">// Berita yang sudah ada...</span>
    
    <span class="code-comment">// TAMBAHKAN BERITA BARU DI SINI</span>
    [
        <span class="code-string">'judul'</span> => <span class="code-string">'DigiPulsaPay Luncurkan Fitur Baru'</span>,
        <span class="code-string">'deskripsi'</span> => <span class="code-string">'Fitur terbaru memudahkan transaksi dan pengelolaan bisnis.'</span>,
        <span class="code-string">'gambar'</span> => <span class="code-string">'https://i.ibb.co/xxxxx/fitur-baru.jpg'</span>,
        <span class="code-string">'kategori'</span> => <span class="code-string">'Perusahaan'</span>,
        <span class="code-string">'badge_color'</span> => <span class="code-string">'bg-primary'</span>,
        <span class="code-string">'link'</span> => <span class="code-string">'peluncuran-fitur.php'</span>,
        <span class="code-string">'tanggal'</span> => <span class="code-string">'21 Jul 2026'</span>
    ]
];
</div>

                <!-- ============================================ -->
                <!-- BAB 6: CARA MENAMBAH VIDEO                 -->
                <!-- ============================================ -->
                
                <h2 class="mt-5">6. Cara Menambah Video</h2>

                <div class="panduan-box">
                    <i class="bi bi-tiktok text-danger"></i>
                    <strong>Video menggunakan TikTok embed.</strong> Cukup copy ID TikTok-nya.
                </div>

                <h4 class="mt-3">Langkah 1: Buat File Video</h4>
                <div class="code-block">
<span class="code-comment">// Buka folder video/</span>
<span class="code-comment">// Copy template.php → Rename menjadi:</span>
<span class="code-string">tutorial-bisnis-pulsa.php</span>
</div>

                <h4 class="mt-3">Langkah 2: Edit Konfigurasi</h4>
                <div class="code-block">
<span class="code-comment">// ============================================</span>
<span class="code-comment">// EDIT BAGIAN INI SAJA</span>
<span class="code-comment">// ============================================</span>

<span class="code-var">$page_title</span> = <span class="code-string">"Tutorial Bisnis Pulsa untuk Pemula"</span>;
<span class="code-var">$page_description</span> = <span class="code-string">"Panduan dasar memulai bisnis pulsa dengan DigiPulsaPay."</span>;
<span class="code-var">$page_keywords</span> = <span class="code-string">"tutorial bisnis pulsa, pemula, DigiPulsaPay"</span>;

<span class="code-comment">// === THUMBNAIL VIDEO PAKAI LINK ===</span>
<span class="code-var">$page_image</span> = <span class="code-string">"https://i.ibb.co/xxxxx/tutorial.jpg"</span>;

<span class="code-var">$page_url</span> = <span class="code-string">"https://academy.digipulsapay.com/video/tutorial-bisnis-pulsa.php"</span>;

<span class="code-var">$video_data</span> = [
    <span class="code-string">'title'</span> => <span class="code-string">'Tutorial Bisnis Pulsa untuk Pemula'</span>,
    <span class="code-string">'description'</span> => <span class="code-string">'Panduan dasar memulai bisnis pulsa dengan DigiPulsaPay.'</span>,
    <span class="code-string">'tiktok_id'</span> => <span class="code-string">'7154245450821553434'</span>,  <span class="code-comment">// ← GANTI ID TikTok</span>
    <span class="code-string">'duration'</span> => <span class="code-string">'15:20'</span>,
    <span class="code-string">'category'</span> => <span class="code-string">'Tutorial'</span>,
    <span class="code-string">'date'</span> => <span class="code-string">'2026-07-21'</span>,
    <span class="code-string">'views'</span> => 1250,
    <span class="code-string">'tags'</span> => [<span class="code-string">'tutorial'</span>, <span class="code-string">'bisnis pulsa'</span>, <span class="code-string">'pemula'</span>]
];
</div>

                <h4 class="mt-3">Langkah 3: Cara Dapat ID TikTok</h4>
                <div class="panduan-box">
                    <p class="mb-0">
                        <strong>Contoh URL TikTok:</strong> https://youtu.be/<strong>7154245450821553434</strong>
                        <br>
                        <strong>ID:</strong> 7154245450821553434 (copy yang setelah / atau ?v=)
                    </p>
                </div>

                <!-- ============================================ -->
                <!-- BAB 7: CARA MENAMBAH EBOOK                  -->
                <!-- ============================================ -->
                
                <h2 class="mt-5">7. Cara Menambah Ebook</h2>

                <h4 class="mt-3">Langkah 1: Buat File Ebook</h4>
                <div class="code-block">
<span class="code-comment">// Buka folder ebook/</span>
<span class="code-comment">// Copy template.php → Rename menjadi:</span>
<span class="code-string">panduan-bisnis-pulsa.php</span>
</div>

                <h4 class="mt-3">Langkah 2: Edit Konfigurasi</h4>
                <div class="code-block">
<span class="code-comment">// ============================================</span>
<span class="code-comment">// EDIT BAGIAN INI SAJA</span>
<span class="code-comment">// ============================================</span>

<span class="code-var">$page_title</span> = <span class="code-string">"Panduan Bisnis Pulsa"</span>;
<span class="code-var">$page_description</span> = <span class="code-string">"Ebook lengkap tentang bisnis pulsa dan PPOB untuk pemula."</span>;
<span class="code-var">$page_keywords</span> = <span class="code-string">"ebook bisnis pulsa, panduan PPOB"</span>;

<span class="code-comment">// === COVER EBOOK PAKAI LINK ===</span>
<span class="code-var">$page_image</span> = <span class="code-string">"https://i.ibb.co/xxxxx/panduan.jpg"</span>;

<span class="code-var">$page_url</span> = <span class="code-string">"https://academy.digipulsapay.com/ebook/panduan-bisnis-pulsa.php"</span>;

<span class="code-var">$ebook_data</span> = [
    <span class="code-string">'title'</span> => <span class="code-string">'Panduan Bisnis Pulsa'</span>,
    <span class="code-string">'subtitle'</span> => <span class="code-string">'Ebook lengkap untuk memulai bisnis pulsa'</span>,
    <span class="code-string">'author'</span> => <span class="code-string">'Tim DigiPulsaPay'</span>,
    <span class="code-string">'description'</span> => <span class="code-string">'Ebook ini berisi panduan lengkap tentang bisnis pulsa dan PPOB.'</span>,
    <span class="code-string">'file_name'</span> => <span class="code-string">'panduan-bisnis-pulsa.pdf'</span>,  <span class="code-comment">// ← NAMA FILE PDF</span>
    <span class="code-string">'file_size'</span> => <span class="code-string">'2.5 MB'</span>,
    <span class="code-string">'pages'</span> => <span class="code-string">'45'</span>,
    <span class="code-string">'category'</span> => <span class="code-string">'Bisnis'</span>,
    <span class="code-string">'date'</span> => <span class="code-string">'2026-07-21'</span>,
    <span class="code-string">'downloads'</span> => 325,
    <span class="code-string">'tags'</span> => [<span class="code-string">'bisnis pulsa'</span>, <span class="code-string">'PPOB'</span>, <span class="code-string">'panduan'</span>]
];
</div>

                <div class="panduan-box-warning">
                    <i class="bi bi-file-pdf"></i>
                    <strong>Untuk Ebook:</strong> Upload file PDF ke folder <code>assets/pdf/</code> atau bisa pakai link eksternal juga.
                </div>

                <!-- ============================================ -->
                <!-- BAB 8: RINGKASAN CEPAT                      -->
                <!-- ============================================ -->
                
                <h2 class="mt-5">8. Ringkasan Cepat</h2>

                <table class="table-panduan">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Bagian</th>
                            <th>File</th>
                            <th>Yang Diubah</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Judul Halaman</td>
                            <td><code>$page_title</code></td>
                            <td>Judul konten</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Deskripsi SEO</td>
                            <td><code>$page_description</code></td>
                            <td>Deskripsi singkat</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Keywords</td>
                            <td><code>$page_keywords</code></td>
                            <td>Kata kunci</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Gambar</td>
                            <td><code>$page_image</code></td>
                            <td><strong>Link IMGBB</strong></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>URL</td>
                            <td><code>$page_url</code></td>
                            <td>URL lengkap</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Data Konten</td>
                            <td><code>$xxx_data</code></td>
                            <td>Judul, tanggal, kategori, tags</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Isi Konten</td>
                            <td><code>&lt;!-- ISI KONTEN --&gt;</code></td>
                            <td>Paragraf, gambar, video</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>Daftar Index</td>
                            <td><code>index.php</code></td>
                            <td>Tambahkan di daftar konten</td>
                        </tr>
                    </tbody>
                </table>

                <!-- ============================================ -->
                <!-- BAB 9: PANDUAN WARNA BADGE                  -->
                <!-- ============================================ -->
                
                <h2 class="mt-5">9. Warna Badge untuk Kategori</h2>

                <div class="row g-3">
                    <div class="col-md-3 col-6">
                        <div class="card text-center p-3">
                            <span class="badge-example badge-primary">bg-primary</span>
                            <small class="mt-1">Berita Umum</small>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="card text-center p-3">
                            <span class="badge-example badge-success">bg-success</span>
                            <small class="mt-1">Berita Positif</small>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="card text-center p-3">
                            <span class="badge-example badge-warning">bg-warning</span>
                            <small class="mt-1">Produk Baru</small>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="card text-center p-3">
                            <span class="badge-example badge-danger">bg-danger</span>
                            <small class="mt-1">Promo</small>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="card text-center p-3">
                            <span class="badge-example badge-info">bg-info</span>
                            <small class="mt-1">Tips/Tutorial</small>
                        </div>
                    </div>
                </div>

                <!-- ============================================ -->
                <!-- BAB 10: CEKLIST                             -->
                <!-- ============================================ -->
                
                <h2 class="mt-5">10. CEKLIST Sebelum Publish</h2>

                <ul class="icon-list">
                    <li><i class="bi bi-check-circle text-success"></i> File sudah direname dengan benar (huruf kecil, pakai <code>-</code>)</li>
                    <li><i class="bi bi-check-circle text-success"></i> Judul, deskripsi, keywords sudah diisi</li>
                    <li><i class="bi bi-check-circle text-success"></i> <strong>Gambar sudah pakai link IMGBB</strong></li>
                    <li><i class="bi bi-check-circle text-success"></i> Isi konten sudah lengkap</li>
                    <li><i class="bi bi-check-circle text-success"></i> Sudah didaftarkan di <code>index.php</code></li>
                    <li><i class="bi bi-check-circle text-success"></i> Semua link sudah diuji coba</li>
                </ul>

                <!-- ============================================ -->
                <!-- BAB 11: PENUTUP                            -->
                <!-- ============================================ -->
                
                <h2 class="mt-5">11. Penutup</h2>

                <div class="panduan-box-success">
                    <i class="bi bi-check-circle-fill text-success fs-4"></i>
                    <strong class="fs-5">SELESAI! 🎉</strong>
                    <p class="mb-0 mt-1">
                        Sekarang Anda sudah bisa menambah konten sendiri. <br>
                        <strong>Ingat:</strong> Semua gambar pakai link IMGBB, tidak perlu FTP!
                    </p>
                </div>

                <div class="panduan-box mt-3">
                    <i class="bi bi-question-circle text-primary"></i>
                    <strong>Ada pertanyaan?</strong>
                    <br>
                    Hubungi tim DigiPulsaPay atau buka halaman <a href="<?php echo BASE_PATH; ?>kontak.php">Kontak</a>.
                </div>

                <hr class="my-5">

                <p class="text-center text-muted small">
                    <i class="bi bi-c-circle"></i> <?php echo date('Y'); ?> DigiPulsa Academy - Panduan Menambah Konten v1.0
                </p>

            </div>
        </div>
    </div>
</div>

<?php
require_once 'includes/footer.php';
?>
