<?php
/**
 * Script untuk memperbaiki broken links di dalam sidebar atau konten
 */

$base = 'C:/xampp/htdocs/bussines_academy';
$folders = ['artikel','berita','ebook','promo','tips','tutorial','video'];

$replacements = [
    'href="cara-daftar.php"' => 'href="<?php echo BASE_PATH; ?>tutorial/cara-daftar-digipulsapay.php"',
    'href="cara-deposit.php"' => 'href="<?php echo BASE_PATH; ?>tutorial/cara-deposit-saldo.php"',
    'href="cara-transaksi.php"' => 'href="<?php echo BASE_PATH; ?>tutorial/cara-transaksi-pulsa.php"',
    'href="cara-cek-saldo.php"' => 'href="<?php echo BASE_PATH; ?>tutorial/cara-melihat-riwayat-transaksi.php"',
    'href="promo-ulang-tahun.php"' => 'href="<?php echo BASE_PATH; ?>promo/promo-anniversary-digipulsapay.php"',
    'href="promo-referral-bonus.php"' => 'href="<?php echo BASE_PATH; ?>promo/promo-referral.php"',
    'href="promo-cashback-transaksi.php"' => 'href="<?php echo BASE_PATH; ?>promo/promo-cashback-digicoin.php"',
    'href="panduan-ppob-lengkap.php"' => 'href="<?php echo BASE_PATH; ?>ebook/panduan-lengkap-digipulsapay.php"',
    'href="strategi-marketing-digital.php"' => 'href="<?php echo BASE_PATH; ?>ebook/modul-digital-marketing.php"',
    'href="manajemen-keuangan-agen.php"' => 'href="<?php echo BASE_PATH; ?>ebook/modul-manajemen-keuangan.php"'
];

$count = 0;

foreach($folders as $folder) {
    $dir = $base . '/' . $folder;
    if (!is_dir($dir)) continue;
    
    $files = glob($dir . '/*.php');
    foreach($files as $f) {
        $content = file_get_contents($f);
        $new_content = strtr($content, $replacements);
        
        if ($content !== $new_content) {
            file_put_contents($f, $new_content);
            $count++;
            echo "Fixed links in: $folder/" . basename($f) . "\n";
        }
    }
}

echo "\nTotal files fixed: $count\n";
