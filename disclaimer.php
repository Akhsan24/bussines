<?php
/**
 * ============================================
 * HALAMAN DISCLAIMER
 * ============================================
 * File ini berisi disclaimer website
 * Edit bagian yang ditandai untuk mengubah konten
 * ============================================
 */

$page_title = "Disclaimer - DigiPulsaPay Academy";
$page_description = "Disclaimer resmi DigiPulsaPay Academy.";
$page_keywords = "Disclaimer, Kebijakan, Legal";

require_once 'config/config.php';
require_once 'includes/seo.php';

setMetaTags([
    'title' => $page_title,
    'description' => $page_description,
    'keywords' => $page_keywords,
    'image' => SITE_OG_IMAGE,
    'url' => SITE_URL . 'disclaimer.php',
    'type' => 'legal'
]);

require_once 'includes/header.php';

$breadcrumb_items = [
    ['name' => 'Disclaimer']
];
?>

<div class="container py-4">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <?php echo getBreadcrumb($breadcrumb_items); ?>
            
            <div class="article-content">
                <h1>Disclaimer</h1>
                <p><em>Terakhir diperbarui: <?php echo date('d F Y'); ?></em></p>
                
                <!-- ============================================ -->
                <!-- ISI KONTEN - EDIT BAGIAN INI SAJA           -->
                <!-- ============================================ -->
                
                <h2>Informasi Umum</h2>
                <p>
                    Website <?php echo SITE_NAME; ?> ("kami") menyediakan informasi untuk tujuan edukasi dan informasi umum.
                </p>
                
                <h2>Keterbatasan Tanggung Jawab</h2>
                <p>
                    Informasi yang disediakan di website ini adalah untuk tujuan pendidikan dan tidak dimaksudkan sebagai nasihat profesional. Kami tidak bertanggung jawab atas:
                </p>
                <ul>
                    <li>Keputusan atau tindakan yang diambil berdasarkan informasi di website ini</li>
                    <li>Kerugian atau kerusakan yang timbul dari penggunaan website ini</li>
                    <li>Akurasi, kelengkapan, atau ketepatan waktu informasi</li>
                </ul>
                
                <h2>Konten Pihak Ketiga</h2>
                <p>
                    Website ini mungkin berisi link ke situs pihak ketiga. Kami tidak bertanggung jawab atas konten atau kebijakan privasi situs-situs tersebut.
                </p>
                
                <h2>Perubahan</h2>
                <p>
                    Kami berhak untuk mengubah atau memperbarui disclaimer ini tanpa pemberitahuan sebelumnya.
                </p>
                
                <h2>Kontak</h2>
                <p>
                    Jika Anda memiliki pertanyaan tentang disclaimer ini, silakan hubungi kami:
                </p>
                <p>
                    <strong><?php echo SITE_NAME; ?></strong><br>
                    Email: <a href="mailto:<?php echo SITE_EMAIL; ?>"><?php echo SITE_EMAIL; ?></a>
                </p>
                
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
