<?php
/**
 * ============================================
 * HALAMAN SYARAT & KETENTUAN
 * ============================================
 * File ini berisi syarat dan ketentuan penggunaan
 * Edit bagian yang ditandai untuk mengubah konten
 * ============================================
 */

$page_title = "Syarat & Ketentuan - DigiPulsaPay Academy";
$page_description = "Syarat dan ketentuan penggunaan website DigiPulsaPay Academy.";
$page_keywords = "Syarat Ketentuan, Terms, Legal";

require_once 'config/config.php';
require_once 'includes/seo.php';

setMetaTags([
    'title' => $page_title,
    'description' => $page_description,
    'keywords' => $page_keywords,
    'image' => SITE_OG_IMAGE,
    'url' => SITE_URL . 'syarat-ketentuan.php',
    'type' => 'legal'
]);

require_once 'includes/header.php';

$breadcrumb_items = [
    ['name' => 'Syarat & Ketentuan']
];
?>

<div class="container py-4">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <?php echo getBreadcrumb($breadcrumb_items); ?>
            
            <div class="article-content">
                <h1>Syarat & Ketentuan</h1>
                <p><em>Terakhir diperbarui: <?php echo date('d F Y'); ?></em></p>
                
                <!-- ============================================ -->
                <!-- ISI KONTEN - EDIT BAGIAN INI SAJA           -->
                <!-- ============================================ -->
                
                <h2>Penerimaan Syarat</h2>
                <p>
                    Dengan mengakses dan menggunakan website <?php echo SITE_NAME; ?>, Anda menyetujui syarat dan ketentuan yang berlaku.
                </p>
                
                <h2>Penggunaan Website</h2>
                <p>
                    Anda setuju untuk menggunakan website ini sesuai dengan hukum yang berlaku dan tidak untuk tujuan yang merugikan.
                </p>
                
                <h2>Hak Kekayaan Intelektual</h2>
                <p>
                    Semua konten di website ini (termasuk teks, gambar, video, dan materi lainnya) dilindungi oleh hak cipta dan merupakan milik <?php echo SITE_NAME; ?>.
                </p>
                
                <h2>Konten Pengguna</h2>
                <p>
                    Anda bertanggung jawab atas konten yang Anda kirimkan ke website ini. Kami berhak untuk menghapus konten yang melanggar.
                </p>
                
                <h2>Akun Pengguna</h2>
                <p>
                    Jika Anda membuat akun di website ini, Anda bertanggung jawab untuk menjaga kerahasiaan akun Anda.
                </p>
                
                <h2>Batasan Tanggung Jawab</h2>
                <p>
                    Website ini disediakan "sebagaimana adanya". Kami tidak menjamin bahwa website akan bebas dari kesalahan atau gangguan.
                </p>
                
                <h2>Perubahan Syarat</h2>
                <p>
                    Kami berhak untuk mengubah syarat dan ketentuan ini. Perubahan akan efektif setelah diposting di halaman ini.
                </p>
                
                <h2>Kontak</h2>
                <p>
                    Pertanyaan tentang syarat dan ketentuan ini dapat dikirim ke:
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
