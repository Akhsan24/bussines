<?php
/**
 * HALAMAN BERANDA (SUPER APP DASHBOARD) - VERSI PREMIUM
 */

$page_title = "Platform Edukasi Resmi DigiPulsaPay";
$page_description = "Temukan artikel, video tutorial, ebook, dan tips bisnis terbaik dari DigiPulsaPay. Platform edukasi untuk sukses berbisnis pulsa dan PPOB.";
$page_keywords = "DigiPulsaPay, Edukasi, Tutorial, Bisnis, Pulsa, PPOB, Super App";

require_once 'config/config.php';
require_once 'includes/seo.php';

setMetaTags([
    'title' => $page_title,
    'description' => $page_description,
    'keywords' => $page_keywords,
    'image' => SITE_OG_IMAGE,
    'url' => SITE_URL,
    'type' => 'website'
]);

require_once 'includes/header.php';

// Artikel unggulan dengan foto asli
$artikel_unggulan = [
    [
        'judul' => 'Apa Itu Server Pulsa?',
        'badge' => 'Panduan',
        'badge_color' => 'bg-info text-white',
        'link' => 'artikel/apa-itu-server-pulsa.php',
        'gambar' => 'https://i.ibb.co.com/qLZY7XVx/bd112dbf-febc-4e94-9d48-37e066d4599e.png',
        'waktu' => '3 min'
    ],
    [
        'judul' => 'Cara Kerja Agen Pulsa',
        'badge' => 'Panduan',
        'badge_color' => 'bg-primary text-white',
        'link' => 'artikel/cara-kerja-agen-pulsa.php',
        'gambar' => 'https://i.ibb.co.com/27TdsMRz/fecbdcd5-fd01-41aa-9316-6ec384775bca.png',
        'waktu' => '5 min'
    ],
    [
        'judul' => 'Apa Itu PPOB?',
        'badge' => 'Panduan',
        'badge_color' => 'bg-success text-white',
        'link' => 'artikel/apa-itu-ppob.php',
        'gambar' => 'https://i.ibb.co.com/4nwTXMf8/9b18e0ab-cdb7-41b3-90a4-0e2b57cf0710.png',
        'waktu' => '4 min'
    ],
    [
        'judul' => 'Keuntungan Menjadi Agen PPOB',
        'badge' => 'Panduan',
        'badge_color' => 'bg-warning text-dark',
        'link' => 'artikel/keuntungan-agen-ppob.php',
        'gambar' => 'https://i.ibb.co.com/sd3bDtbn/3d3e83b2-2e90-4bba-a075-6e042bec3b7c.png',
        'waktu' => '6 min'
    ],
    [
        'judul' => 'Cara Memulai Bisnis Pulsa dari Nol',
        'badge' => 'Panduan',
        'badge_color' => 'bg-danger text-white',
        'link' => 'artikel/cara-memulai-bisnis-pulsa.php',
        'gambar' => 'https://i.ibb.co.com/zhfdrS1m/0045e713-46c4-44c4-9892-ce5957064401.png',
        'waktu' => '7 min'
    ],
    [
        'judul' => 'Apa Itu Token Listrik PLN?',
        'badge' => 'Panduan',
        'badge_color' => 'bg-info text-white',
        'link' => 'artikel/apa-itu-token-listrik-pln.php',
        'gambar' => 'https://i.ibb.co.com/27RNQzYy/a9a958be-e222-483c-bf2c-edeef9dc44c3.png',
        'waktu' => '4 min'
    ],
];
?>

<style>
    body { background-color: #f0f2f5; font-family: 'Inter', sans-serif; }

    .superapp-hero {
        background: linear-gradient(135deg, #0d6efd 0%, #0a58ca 50%, #084298 100%);
        padding: 36px 0 64px;
        border-bottom-left-radius: 36px;
        border-bottom-right-radius: 36px;
        margin-bottom: -40px;
        position: relative; z-index: 1;
        overflow: hidden;
    }
    .superapp-hero::after {
        content: '';
        position: absolute; top: -60%; right: -5%;
        width: 350px; height: 350px;
        background: rgba(255,255,255,0.07);
        border-radius: 50%;
    }
    .superapp-hero::before {
        content: '';
        position: absolute; bottom: -30%; left: -5%;
        width: 250px; height: 250px;
        background: rgba(255,255,255,0.05);
        border-radius: 50%;
    }

    .dashboard-container { position: relative; z-index: 2; }

    .grid-menu-card {
        background: rgba(255,255,255,0.98);
        border-radius: 24px;
        padding: 24px;
        box-shadow: 0 8px 40px rgba(0,0,0,0.07);
        margin-bottom: 20px;
    }

    .menu-icon-btn {
        display: flex; flex-direction: column;
        align-items: center; justify-content: center;
        text-decoration: none; color: #333;
        transition: all 0.25s ease;
        padding: 10px 5px; border-radius: 16px;
    }
    .menu-icon-btn:hover { background: rgba(13,110,253,0.06); transform: translateY(-4px); }

    .icon-circle {
        width: 52px; height: 52px; border-radius: 16px;
        display: flex; align-items: center; justify-content: center;
        font-size: 1.5rem; margin-bottom: 8px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.08);
    }
    .menu-title { font-size: 0.72rem; font-weight: 600; text-align: center; line-height: 1.2; }

    /* Artikel Unggulan Cards */
    .featured-card {
        background: #fff; border-radius: 20px; overflow: hidden;
        border: none; box-shadow: 0 4px 20px rgba(0,0,0,0.04);
        transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
        height: 100%;
    }
    .featured-card:hover { transform: translateY(-5px); box-shadow: 0 12px 30px rgba(0,0,0,0.1); }
    .featured-card img { width: 100%; height: 130px; object-fit: cover; }
    .featured-card .card-body { padding: 14px; }
    .featured-card h6 {
        font-size: 0.88rem; font-weight: 700; line-height: 1.4; margin: 6px 0 4px;
        display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;
    }

    .section-header {
        display: flex; align-items: center; justify-content: space-between;
        margin-bottom: 16px; margin-top: 8px;
    }
    .section-header h2 { font-size: 1.05rem; font-weight: 700; margin: 0; }

    .promo-banner {
        background: linear-gradient(135deg, #ff6b6b 0%, #ee5a24 100%);
        border-radius: 20px; padding: 20px 24px;
        color: white; position: relative; overflow: hidden;
        box-shadow: 0 8px 24px rgba(238,90,36,0.25);
    }
    .promo-banner::after {
        content: '🎁'; position: absolute;
        right: 20px; top: 50%; transform: translateY(-50%);
        font-size: 3.5rem; opacity: 0.3;
    }

    .adsense-slot {
        background: #f8f9fa; border: 2px dashed #dee2e6;
        border-radius: 16px; text-align: center; padding: 20px;
        color: #adb5bd; font-size: 0.8rem; margin: 16px 0;
        min-height: 90px; display: flex; flex-direction: column;
        align-items: center; justify-content: center;
    }

    /* Quick Access Links */
    .quick-link-item {
        display: flex; align-items: center; gap: 12px;
        padding: 12px 16px; background: #f8f9fa; border-radius: 14px;
        text-decoration: none; color: #333; margin-bottom: 10px;
        transition: all 0.2s; font-weight: 500; font-size: 0.9rem;
    }
    .quick-link-item:hover { background: #e9ecef; transform: translateX(4px); color: #0d6efd; }
    .quick-link-icon { width: 36px; height: 36px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1rem; flex-shrink: 0; }

    @media (max-width: 576px) {
        .icon-circle { width: 44px; height: 44px; font-size: 1.25rem; }
        .menu-title { font-size: 0.62rem; }
        .grid-menu-card { padding: 16px; }
        .superapp-hero { padding: 28px 0 56px; }
    }
</style>

<!-- ===== HERO HEADER ===== -->
<section class="superapp-hero text-white">
    <div class="container position-relative" style="z-index:2;">
        <div class="d-flex align-items-center gap-3 mb-2">
            <div class="bg-white bg-opacity-25 rounded-circle d-flex align-items-center justify-content-center" style="width:48px;height:48px;font-size:1.5rem;">👋</div>
            <div>
                <h1 class="fw-bold fs-4 mb-0">hallo, Selamat Datang!</h1>
                <p class="opacity-75 fs-6 mb-0 small">Apa yang ingin kamu pelajari hari ini?</p>
            </div>
        </div>
    </div>
</section>

<!-- ===== DASHBOARD GRID ===== -->
<div class="container dashboard-container py-2">
    <div class="row justify-content-center">
        <div class="col-xl-10">

            <!-- MENU UTAMA (8 ICON) -->
            <div class="grid-menu-card">
                <div class="row g-1 text-center">
                    <div class="col-3 col-md-2"><a href="<?php echo BASE_PATH; ?>artikel/" class="menu-icon-btn"><div class="icon-circle bg-primary bg-opacity-10 text-primary"><i class="bi bi-journal-text"></i></div><span class="menu-title">Artikel</span></a></div>
                    <div class="col-3 col-md-2"><a href="<?php echo BASE_PATH; ?>tutorial/" class="menu-icon-btn"><div class="icon-circle bg-success bg-opacity-10 text-success"><i class="bi bi-laptop"></i></div><span class="menu-title">Tutorial</span></a></div>
                    <div class="col-3 col-md-2"><a href="<?php echo BASE_PATH; ?>video/" class="menu-icon-btn"><div class="icon-circle bg-danger bg-opacity-10 text-danger"><i class="bi bi-play-btn"></i></div><span class="menu-title">Video</span></a></div>
                    <div class="col-3 col-md-2"><a href="<?php echo BASE_PATH; ?>ebook/" class="menu-icon-btn"><div class="icon-circle bg-info bg-opacity-10 text-info"><i class="bi bi-book"></i></div><span class="menu-title">Ebook</span></a></div>
                    <div class="col-3 col-md-2"><a href="<?php echo BASE_PATH; ?>tips/" class="menu-icon-btn"><div class="icon-circle bg-warning bg-opacity-10 text-warning"><i class="bi bi-lightbulb"></i></div><span class="menu-title">Tips</span></a></div>
                    <div class="col-3 col-md-2"><a href="<?php echo BASE_PATH; ?>promo/" class="menu-icon-btn"><div class="icon-circle bg-danger bg-opacity-10 text-danger"><i class="bi bi-gift"></i></div><span class="menu-title">Promo</span></a></div>
                    <div class="col-3 col-md-2"><a href="<?php echo BASE_PATH; ?>berita/" class="menu-icon-btn"><div class="icon-circle bg-secondary bg-opacity-10 text-secondary"><i class="bi bi-megaphone"></i></div><span class="menu-title">Berita</span></a></div>
                    <div class="col-3 col-md-2"><a href="<?php echo BASE_PATH; ?>tools/" class="menu-icon-btn"><div class="icon-circle" style="background:#ede9fe;"><i class="bi bi-calculator" style="color:#6f42c1;"></i></div><span class="menu-title">Tools</span></a></div>
                </div>

                <hr class="my-3 opacity-15">

                <div class="row g-1 text-center">
                    <div class="col-3"><a href="<?php echo BASE_PATH; ?>faq/" class="menu-icon-btn py-1"><i class="bi bi-question-circle text-muted fs-4 mb-1 d-block"></i><span class="menu-title text-muted">FAQ</span></a></div>
                    <div class="col-3"><a href="<?php echo BASE_PATH; ?>kamus/" class="menu-icon-btn py-1"><i class="bi bi-translate text-muted fs-4 mb-1 d-block"></i><span class="menu-title text-muted">Kamus</span></a></div>
                    <div class="col-3"><a href="<?php echo BASE_PATH; ?>komunitas/" class="menu-icon-btn py-1"><i class="bi bi-people text-muted fs-4 mb-1 d-block"></i><span class="menu-title text-muted">Komunitas</span></a></div>
                    <div class="col-3"><a href="<?php echo BASE_PATH; ?>ai/" class="menu-icon-btn py-1"><i class="bi bi-robot fs-4 mb-1 d-block" style="color:#6f42c1;"></i><span class="menu-title fw-bold" style="color:#6f42c1;">Digi AI</span></a></div>
                </div>
            </div>

            <!-- SLOT ADSENSE 1 -->
            <div class="adsense-slot">
                <i class="bi bi-image mb-1 fs-4 opacity-25"></i>
                <span class="fw-semibold">Advertisement — Responsive Banner</span>
                <?php if (file_exists('includes/ads.php')) { include 'includes/ads.php'; } ?>
            </div>

            <!-- BANNER PROMO -->
            <div class="promo-banner mb-4">
                <h5 class="fw-bold mb-1" style="position:relative;z-index:1;">🎉 Promo Khusus Agen Baru!</h5>
                <p class="small mb-2 opacity-80" style="position:relative;z-index:1;">Cashback deposit hingga Rp50.000 untuk member baru.</p>
                <a href="<?php echo BASE_PATH; ?>promo/" class="btn btn-light btn-sm rounded-pill fw-bold text-danger px-4 shadow-sm" style="position:relative;z-index:1;">Klaim Sekarang →</a>
            </div>

            <!-- ARTIKEL UNGGULAN -->
            <div class="section-header">
                <h2><i class="bi bi-lightning-charge-fill text-warning me-2"></i>Artikel Unggulan</h2>
                <a href="<?php echo BASE_PATH; ?>artikel/" class="text-decoration-none small text-primary fw-medium">Lihat Semua <i class="bi bi-chevron-right"></i></a>
            </div>

            <div class="row g-3 mb-4">
                <?php foreach ($artikel_unggulan as $art): ?>
                <div class="col-6 col-md-4">
                    <a href="<?php echo BASE_PATH . $art['link']; ?>" class="text-decoration-none text-dark">
                        <div class="featured-card">
                            <img src="<?php echo $art['gambar']; ?>" alt="<?php echo $art['judul']; ?>" loading="lazy">
                            <div class="card-body">
                                <span class="badge <?php echo $art['badge_color']; ?> rounded-pill" style="font-size:0.65rem;"><?php echo $art['badge']; ?></span>
                                <h6><?php echo $art['judul']; ?></h6>
                                <small class="text-muted"><i class="bi bi-clock me-1"></i><?php echo $art['waktu']; ?> baca</small>
                            </div>
                        </div>
                    </a>
                </div>
                <?php endforeach; ?>
            </div>

            <!-- QUICK ACCESS -->
            <div class="section-header mt-2">
                <h2><i class="bi bi-grid-3x3-gap-fill text-primary me-2"></i>Akses Cepat</h2>
            </div>

            <div class="row g-2 mb-4">
                <div class="col-md-6">
                    <a href="<?php echo BASE_PATH; ?>tutorial/cara-daftar-digipulsapay.php" class="quick-link-item">
                        <div class="quick-link-icon bg-success bg-opacity-10 text-success"><i class="bi bi-person-plus"></i></div>
                        <span>Cara Daftar DigiPulsaPay</span>
                        <i class="bi bi-chevron-right ms-auto text-muted small"></i>
                    </a>
                    <a href="<?php echo BASE_PATH; ?>tutorial/cara-deposit-saldo.php" class="quick-link-item">
                        <div class="quick-link-icon bg-primary bg-opacity-10 text-primary"><i class="bi bi-wallet2"></i></div>
                        <span>Cara Deposit Saldo</span>
                        <i class="bi bi-chevron-right ms-auto text-muted small"></i>
                    </a>
                    <a href="<?php echo BASE_PATH; ?>tutorial/cara-transaksi-pulsa.php" class="quick-link-item">
                        <div class="quick-link-icon bg-info bg-opacity-10 text-info"><i class="bi bi-phone"></i></div>
                        <span>Cara Transaksi Pulsa</span>
                        <i class="bi bi-chevron-right ms-auto text-muted small"></i>
                    </a>
                </div>
                <div class="col-md-6">
                    <a href="<?php echo BASE_PATH; ?>tips/tips-memulai-bisnis-ppob.php" class="quick-link-item">
                        <div class="quick-link-icon bg-warning bg-opacity-10 text-warning"><i class="bi bi-lightbulb"></i></div>
                        <span>Tips Memulai Bisnis PPOB</span>
                        <i class="bi bi-chevron-right ms-auto text-muted small"></i>
                    </a>
                    <a href="<?php echo BASE_PATH; ?>ebook/panduan-lengkap-digipulsapay.php" class="quick-link-item">
                        <div class="quick-link-icon bg-danger bg-opacity-10 text-danger"><i class="bi bi-book"></i></div>
                        <span>Panduan Lengkap Agen</span>
                        <i class="bi bi-chevron-right ms-auto text-muted small"></i>
                    </a>
                    <a href="https://play.google.com/store/apps/details?id=com.digipulsapay" target="_blank" class="quick-link-item">
                        <div class="quick-link-icon" style="background:#ede9fe;color:#6f42c1;"><i class="bi bi-google-play"></i></div>
                        <span>Download Aplikasi</span>
                        <i class="bi bi-chevron-right ms-auto text-muted small"></i>
                    </a>
                </div>
            </div>

            <!-- SLOT ADSENSE 2 -->
            <div class="adsense-slot mb-5">
                <i class="bi bi-image mb-1 fs-4 opacity-25"></i>
                <span class="fw-semibold">Advertisement — Native / In-Feed Ads</span>
                <?php if (file_exists('includes/ads.php')) { include 'includes/ads.php'; } ?>
            </div>

        </div>
    </div>
</div>

<?php require_once 'includes/footer.php'; ?>
