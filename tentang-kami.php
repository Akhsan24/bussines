<?php
/**
 * ============================================
 * HALAMAN TENTANG KAMI
 * ============================================
 * File ini berisi informasi tentang DigiPulsaPay
 * Edit bagian yang ditandai untuk mengubah konten
 * ============================================
 */

// ============================================
// KONFIGURASI HALAMAN - EDIT BAGIAN INI SAJA
// ============================================

$page_title = "Tentang Kami - DigiPulsaPay Academy";
$page_description = "Kenali lebih dekat DigiPulsaPay Academy - platform edukasi resmi untuk bisnis pulsa dan PPOB.";
$page_keywords = "Tentang DigiPulsaPay, Edukasi Bisnis, Pulsa, PPOB";

// ============================================
// JANGAN UBAH KODE DI BAWAH INI
// ============================================

require_once 'config/config.php';
require_once 'includes/seo.php';

setMetaTags([
    'title' => $page_title,
    'description' => $page_description,
    'keywords' => $page_keywords,
    'image' => SITE_OG_IMAGE,
    'url' => SITE_URL . 'tentang-kami.php',
    'type' => 'about'
]);

require_once 'includes/header.php';

$breadcrumb_items = [
    ['name' => 'Tentang Kami']
];
?>

<style>
    /* ===== STYLE KHUSUS HALAMAN TENTANG KAMI ===== */
    
    /* Hero mini untuk halaman tentang */
    .page-hero {
        background: linear-gradient(135deg, #0d6efd 0%, #0a58ca 50%, #084298 100%);
        padding: 50px 0 40px;
        color: white;
        margin-bottom: 40px;
        position: relative;
        overflow: hidden;
    }
    
    .page-hero::before {
        content: '';
        position: absolute;
        top: -50%;
        right: -10%;
        width: 400px;
        height: 400px;
        background: rgba(255,255,255,0.05);
        border-radius: 50%;
        pointer-events: none;
    }
    
    .page-hero h1 {
        font-size: 2.5rem;
        font-weight: 700;
        text-shadow: 0 2px 10px rgba(0,0,0,0.2);
    }
    
    .page-hero .breadcrumb {
        background: transparent;
        padding: 0;
        margin: 0;
    }
    
    .page-hero .breadcrumb-item a {
        color: rgba(255,255,255,0.8);
        text-decoration: none;
    }
    
    .page-hero .breadcrumb-item a:hover {
        color: white;
        text-decoration: underline;
    }
    
    .page-hero .breadcrumb-item.active {
        color: white;
    }
    
    .page-hero .breadcrumb-item + .breadcrumb-item::before {
        color: rgba(255,255,255,0.6);
    }
    
    /* Content wrapper */
    .about-content {
        max-width: 900px;
        margin: 0 auto;
    }
    
    .about-content h2 {
        font-size: 1.8rem;
        font-weight: 700;
        color: #1a1a2e;
        margin-top: 2rem;
        margin-bottom: 1rem;
    }
    
    .about-content h3 {
        font-size: 1.4rem;
        font-weight: 600;
        color: #1a1a2e;
        margin-top: 1.8rem;
        margin-bottom: 0.8rem;
    }
    
    .about-content p {
        font-size: 1.05rem;
        line-height: 1.8;
        color: #4a4a6a;
        margin-bottom: 1.2rem;
    }
    
    .about-content ul {
        padding-left: 1.5rem;
        margin-bottom: 1.5rem;
    }
    
    .about-content ul li {
        font-size: 1.05rem;
        line-height: 1.8;
        color: #4a4a6a;
        margin-bottom: 0.5rem;
        list-style-type: none;
        padding-left: 1.8rem;
        position: relative;
    }
    
    .about-content ul li::before {
        content: '▸';
        position: absolute;
        left: 0;
        color: #0d6efd;
        font-weight: bold;
    }
    
    /* About image */
    .about-image-wrapper {
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 8px 30px rgba(0,0,0,0.1);
        margin-bottom: 2rem;
    }
    
    .about-image-wrapper img {
        width: 100%;
        height: auto;
        display: block;
        transition: transform 0.5s ease;
    }
    
    .about-image-wrapper:hover img {
        transform: scale(1.02);
    }
    
    /* Value cards */
    .value-card {
        background: white;
        border: 2px solid #e9ecef;
        border-radius: 16px;
        padding: 28px 20px;
        text-align: center;
        transition: all 0.3s ease;
        height: 100%;
    }
    
    .value-card:hover {
        border-color: #0d6efd;
        transform: translateY(-6px);
        box-shadow: 0 12px 40px rgba(13,110,253,0.10);
    }
    
    .value-card .icon-wrapper {
        width: 70px;
        height: 70px;
        background: linear-gradient(135deg, #e7f1ff, #cfe2ff);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 16px;
        transition: all 0.3s ease;
    }
    
    .value-card:hover .icon-wrapper {
        background: linear-gradient(135deg, #0d6efd, #0a58ca);
    }
    
    .value-card .icon-wrapper i {
        font-size: 2.2rem;
        color: #0d6efd;
        transition: all 0.3s ease;
    }
    
    .value-card:hover .icon-wrapper i {
        color: white;
    }
    
    .value-card h6 {
        font-weight: 700;
        color: #1a1a2e;
        margin-bottom: 4px;
    }
    
    .value-card p {
        font-size: 0.9rem;
        color: #6c757d;
        margin-bottom: 0;
        line-height: 1.5;
    }
    
    /* Stats section */
    .stats-section {
        background: linear-gradient(135deg, #f8f9fa, #e9ecef);
        border-radius: 16px;
        padding: 40px 30px;
        margin: 2.5rem 0;
    }
    
    .stats-section .stat-item {
        text-align: center;
        padding: 0 10px;
    }
    
    .stats-section .stat-item h3 {
        font-size: 2.2rem;
        font-weight: 700;
        color: #0d6efd;
        margin-bottom: 2px;
    }
    
    .stats-section .stat-item p {
        font-size: 0.95rem;
        color: #6c757d;
        margin-bottom: 0;
    }
    
    /* CTA mini */
    .cta-mini {
        background: linear-gradient(135deg, #0d6efd, #0a58ca);
        border-radius: 16px;
        padding: 35px 30px;
        color: white;
        text-align: center;
        margin-top: 2.5rem;
    }
    
    .cta-mini h3 {
        font-weight: 700;
        margin-bottom: 8px;
    }
    
    .cta-mini p {
        opacity: 0.9;
        margin-bottom: 20px;
    }
    
    .cta-mini .btn-light {
        padding: 10px 35px;
        border-radius: 50px;
        font-weight: 600;
        transition: all 0.3s ease;
    }
    
    .cta-mini .btn-light:hover {
        transform: scale(1.05);
        box-shadow: 0 8px 30px rgba(0,0,0,0.2);
    }
    
    /* ===== RESPONSIVE ===== */
    
    @media (max-width: 991px) {
        .page-hero h1 {
            font-size: 2rem;
        }
        
        .about-content h2 {
            font-size: 1.6rem;
        }
        
        .about-content h3 {
            font-size: 1.3rem;
        }
        
        .stats-section .stat-item h3 {
            font-size: 1.8rem;
        }
    }
    
    @media (max-width: 767px) {
        .page-hero {
            padding: 35px 0 25px;
            text-align: center;
        }
        
        .page-hero h1 {
            font-size: 1.7rem;
        }
        
        .page-hero .breadcrumb {
            justify-content: center;
        }
        
        .about-content h2 {
            font-size: 1.4rem;
        }
        
        .about-content h3 {
            font-size: 1.2rem;
        }
        
        .about-content p,
        .about-content ul li {
            font-size: 0.98rem;
        }
        
        .value-card {
            padding: 20px 15px;
        }
        
        .value-card .icon-wrapper {
            width: 60px;
            height: 60px;
        }
        
        .value-card .icon-wrapper i {
            font-size: 1.8rem;
        }
        
        .stats-section {
            padding: 25px 15px;
        }
        
        .stats-section .stat-item h3 {
            font-size: 1.5rem;
        }
        
        .stats-section .stat-item p {
            font-size: 0.85rem;
        }
        
        .cta-mini {
            padding: 25px 18px;
        }
        
        .cta-mini h3 {
            font-size: 1.2rem;
        }
        
        .cta-mini .btn-light {
            width: 100%;
            padding: 10px 20px;
        }
    }
    
    @media (max-width: 480px) {
        .page-hero h1 {
            font-size: 1.4rem;
        }
        
        .about-content h2 {
            font-size: 1.2rem;
        }
        
        .about-content h3 {
            font-size: 1.1rem;
        }
        
        .about-content p,
        .about-content ul li {
            font-size: 0.92rem;
        }
        
        .stats-section .stat-item h3 {
            font-size: 1.3rem;
        }
    }
</style>

<!-- ===== PAGE HERO ===== -->
<section class="page-hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h1>
                    <i class="bi bi-building me-3"></i> Tentang Kami
                </h1>
                <p class="lead opacity-75 mb-0">
                    Kenali lebih dekat platform edukasi resmi DigiPulsaPay
                </p>
            </div>
            <div class="col-lg-4 text-lg-end mt-3 mt-lg-0">
                <?php echo getBreadcrumb($breadcrumb_items); ?>
            </div>
        </div>
    </div>
</section>

<!-- ===== KONTEN UTAMA ===== -->
<div class="container pb-5">
    <div class="about-content">
        
        <!-- Image -->
        <div class="about-image-wrapper">
            <img src="<?php echo BASE_PATH; ?>assets/img/about.jpg" alt="Tentang DigiPulsaPay Academy" class="img-fluid">
        </div>
        
        <!-- ============================================ -->
        <!-- ISI KONTEN - EDIT BAGIAN INI SAJA           -->
        <!-- ============================================ -->
        
        <h2>Mengenal <?php echo SITE_NAME; ?></h2>
        
        <p>
            <strong><?php echo SITE_NAME; ?></strong> adalah platform edukasi resmi dari DigiPulsaPay yang didedikasikan untuk memberikan pengetahuan dan keterampilan kepada para pengusaha pulsa dan PPOB di Indonesia.
        </p>
        
        <p>
            Kami percaya bahwa pendidikan adalah kunci sukses dalam berbisnis. Oleh karena itu, kami menyediakan berbagai konten edukasi berkualitas mulai dari artikel, video tutorial, ebook, hingga tips bisnis yang praktis dan aplikatif.
        </p>
        
        <!-- Stats -->
        <div class="stats-section">
            <div class="row">
                <div class="col-4">
                    <div class="stat-item">
                        <h3>12K+</h3>
                        <p>Peserta Bergabung</p>
                    </div>
                </div>
                <div class="col-4">
                    <div class="stat-item">
                        <h3>150+</h3>
                        <p>Konten Edukasi</p>
                    </div>
                </div>
                <div class="col-4">
                    <div class="stat-item">
                        <h3>4.9/5</h3>
                        <p>Rating Peserta</p>
                    </div>
                </div>
            </div>
        </div>
        
        <h2>Visi Kami</h2>
        <p>
            Menjadi platform edukasi terdepan yang memberdayakan pengusaha pulsa dan PPOB di Indonesia untuk mencapai kesuksesan finansial.
        </p>
        
        <h2>Misi Kami</h2>
        <ul>
            <li>Menyediakan konten edukasi yang berkualitas dan mudah dipahami</li>
            <li>Membantu pengusaha pulsa mengembangkan bisnis mereka</li>
            <li>Menciptakan komunitas bisnis yang saling mendukung</li>
            <li>Mendorong inovasi dalam industri pulsa dan PPOB</li>
        </ul>
        
        <h2>Nilai-Nilai Kami</h2>
        <p class="text-muted mb-3">Empat pilar yang menjadi landasan kami dalam memberikan layanan terbaik.</p>
        
        <div class="row g-3">
            <div class="col-md-6">
                <div class="value-card">
                    <div class="icon-wrapper">
                        <i class="bi bi-shield-check"></i>
                    </div>
                    <h6>Integritas</h6>
                    <p>Berkomitmen pada kejujuran dan transparansi</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="value-card">
                    <div class="icon-wrapper">
                        <i class="bi bi-star"></i>
                    </div>
                    <h6>Kualitas</h6>
                    <p>Menyajikan konten terbaik untuk peserta</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="value-card">
                    <div class="icon-wrapper">
                        <i class="bi bi-people"></i>
                    </div>
                    <h6>Kolaborasi</h6>
                    <p>Bekerja sama untuk kesuksesan bersama</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="value-card">
                    <div class="icon-wrapper">
                        <i class="bi bi-rocket"></i>
                    </div>
                    <h6>Inovasi</h6>
                    <p>Selalu berinovasi untuk perkembangan bisnis</p>
                </div>
            </div>
        </div>
        
        <h2 class="mt-4">Hubungi Kami</h2>
        <p>
            Jika Anda memiliki pertanyaan atau ingin bekerja sama dengan kami, jangan ragu untuk menghubungi kami melalui halaman <a href="<?php echo BASE_PATH; ?>kontak.php" class="text-primary fw-semibold">Kontak</a> atau langsung mengirim email ke <a href="mailto:<?php echo SITE_EMAIL; ?>" class="text-primary fw-semibold"><?php echo SITE_EMAIL; ?></a>.
        </p>
        
        <!-- CTA Mini -->
        <div class="cta-mini">
            <h3>🚀 Siap Bergabung?</h3>
            <p>Mulai perjalanan bisnis pulsa Anda bersama ribuan pengusaha lainnya.</p>
            <a href="<?php echo BASE_PATH; ?>kontak.php" class="btn btn-light">
                Hubungi Kami <i class="bi bi-arrow-right ms-2"></i>
            </a>
        </div>
        
        <!-- ============================================ -->
        <!-- AKHIR KONTEN                               -->
        <!-- ============================================ -->
        
    </div>
</div>

<?php
require_once 'includes/footer.php';
?>
