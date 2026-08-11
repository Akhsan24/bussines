<?php
/**
 * ============================================
 * HALAMAN SITEMAP
 * ============================================
 * File ini berisi daftar semua halaman website
 * Edit untuk menambahkan halaman baru
 * ============================================
 */

$page_title = "Sitemap - DigiPulsaPay Academy";
$page_description = "Daftar semua halaman yang tersedia di DigiPulsaPay Academy.";
$page_keywords = "Sitemap, Daftar Halaman";

require_once 'config/config.php';
require_once 'includes/seo.php';

setMetaTags([
    'title' => $page_title,
    'description' => $page_description,
    'keywords' => $page_keywords,
    'image' => SITE_OG_IMAGE,
    'url' => SITE_URL . 'sitemap.php',
    'type' => 'website'
]);

require_once 'includes/header.php';

$breadcrumb_items = [
    ['name' => 'Sitemap']
];
?>

<div class="container py-4">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <?php echo getBreadcrumb($breadcrumb_items); ?>
            
            <div class="article-content">
                <h1>Sitemap</h1>
                
                <!-- ============================================ -->
                <!-- DAFTAR HALAMAN - EDIT BAGIAN INI SAJA       -->
                <!-- ============================================ -->
                
                <div class="row g-4">
                    <div class="col-md-6">
                        <h3 class="text-primary">Halaman Utama</h3>
                        <ul class="list-unstyled">
                            <li><a href="<?php echo SITE_URL; ?>">Beranda</a></li>
                            <li><a href="<?php echo SITE_URL; ?>tentang-kami.php">Tentang Kami</a></li>
                            <li><a href="<?php echo SITE_URL; ?>kontak.php">Kontak</a></li>
                        </ul>
                    </div>
                    
                    <div class="col-md-6">
                        <h3 class="text-primary">Legal</h3>
                        <ul class="list-unstyled">
                            <li><a href="<?php echo SITE_URL; ?>privacy-policy.php">Privacy Policy</a></li>
                            <li><a href="<?php echo SITE_URL; ?>disclaimer.php">Disclaimer</a></li>
                            <li><a href="<?php echo SITE_URL; ?>syarat-ketentuan.php">Syarat & Ketentuan</a></li>
                        </ul>
                    </div>
                     
                    <div class="col-md-6">
                        <h3 class="text-primary">Konten</h3>
                        <ul class="list-unstyled">
                            <li><a href="<?php echo SITE_URL; ?>artikel/">Artikel</a></li>
                            <li><a href="<?php echo SITE_URL; ?>video/">Video</a></li>
                            <li><a href="<?php echo SITE_URL; ?>ebook/">Ebook</a></li>
                            <li><a href="<?php echo SITE_URL; ?>tutorial/">Tutorial</a></li>
                            <li><a href="<?php echo SITE_URL; ?>tips/">Tips</a></li>
                            <li><a href="<?php echo SITE_URL; ?>berita/">Berita</a></li>
                            <li><a href="<?php echo SITE_URL; ?>promo/">Promo</a></li>
                        </ul>
                    </div>
                    
                    <div class="col-md-6">
                        <h3 class="text-primary">Lainnya</h3>
                        <ul class="list-unstyled">
                            <li><a href="<?php echo SITE_URL; ?>sitemap.php">Sitemap</a></li>
                        </ul>
                    </div>
                </div>
                
                <h3 class="mt-4">Statistik</h3>
                <ul>
                    <li>Total Halaman: 15+</li>
                    <li>Terakhir diperbarui: <?php echo date('d F Y'); ?></li>
                </ul>
                
                <!-- ============================================ -->
                <!-- AKHIR KONTEN                               -->
                <!-- ============================================ -->
            </div>
        </div>
    </div>
</div>

<?php
require_once 'includes/footer.php';
?>
