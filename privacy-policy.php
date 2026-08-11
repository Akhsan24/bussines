<?php
/**
 * ============================================
 * HALAMAN PRIVACY POLICY
 * ============================================
 * File ini berisi kebijakan privasi website
 * Edit bagian yang ditandai untuk mengubah konten
 * ============================================
 */

$page_title = "Privacy Policy - DigiPulsaPay Academy";
$page_description = "Kebijakan privasi DigiPulsaPay Academy - bagaimana kami melindungi data Anda.";
$page_keywords = "Privacy Policy, Kebijakan Privasi, Data Protection";

require_once 'config/config.php';
require_once 'includes/seo.php';

setMetaTags([
    'title' => $page_title,
    'description' => $page_description,
    'keywords' => $page_keywords,
    'image' => SITE_OG_IMAGE,
    'url' => SITE_URL . 'privacy-policy.php',
    'type' => 'legal'
]);

require_once 'includes/header.php';

$breadcrumb_items = [
    ['name' => 'Privacy Policy']
];
?>

<div class="container py-4">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <?php echo getBreadcrumb($breadcrumb_items); ?>
            
            <div class="article-content">
                <h1>Privacy Policy</h1>
                <p><em>Terakhir diperbarui: <?php echo date('d F Y'); ?></em></p>
                
                <!-- ============================================ -->
                <!-- ISI KONTEN - EDIT BAGIAN INI SAJA           -->
                <!-- ============================================ -->
                
                <h2>Informasi yang Kami Kumpulkan</h2>
                <p>
                    <?php echo SITE_NAME; ?> mengumpulkan informasi berikut:
                </p>
                <ul>
                    <li>Informasi yang Anda berikan secara langsung (nama, email, dll.)</li>
                    <li>Informasi penggunaan website (cookies, analytics)</li>
                    <li>Informasi teknis (IP address, browser, device)</li>
                </ul>
                
                <h2>Bagaimana Kami Menggunakan Informasi Anda</h2>
                <p>Informasi yang kami kumpulkan digunakan untuk:</p>
                <ul>
                    <li>Menyediakan dan meningkatkan layanan kami</li>
                    <li>Mengirimkan komunikasi yang relevan</li>
                    <li>Menganalisis penggunaan website</li>
                    <li>Memenuhi kewajiban hukum</li>
                </ul>
                
                <h2>Cookies</h2>
                <p>
                    Kami menggunakan cookies untuk meningkatkan pengalaman Anda di website kami. Anda dapat mengatur browser Anda untuk menolak cookies jika diinginkan.
                </p>
                
                <h2>Keamanan Data</h2>
                <p>
                    Kami menerapkan langkah-langkah keamanan yang sesuai untuk melindungi informasi Anda dari akses yang tidak sah.
                </p>
                
                <h2>Hak Anda</h2>
                <p>
                    Anda memiliki hak untuk mengakses, memperbaiki, atau menghapus data pribadi Anda. Untuk melakukan ini, silakan hubungi kami melalui halaman <a href="kontak.php">Kontak</a>.
                </p>
                
                <h2>Perubahan Privacy Policy</h2>
                <p>
                    Kami dapat memperbarui kebijakan ini dari waktu ke waktu. Kami akan memberitahu Anda tentang perubahan dengan memposting kebijakan baru di halaman ini.
                </p>
                
                <h2>Hubungi Kami</h2>
                <p>
                    Jika Anda memiliki pertanyaan tentang Privacy Policy ini, silakan hubungi kami di:
                </p>
                <p>
                    <strong><?php echo SITE_NAME; ?></strong><br>
                    Email: <a href="mailto:<?php echo SITE_EMAIL; ?>"><?php echo SITE_EMAIL; ?></a><br>
                    Telepon: <?php echo SITE_PHONE; ?>
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
