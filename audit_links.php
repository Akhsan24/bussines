<?php
/**
 * Script audit semua link internal website
 * Cek mana yang ada filenya dan mana yang 404
 */

$base = 'C:/xampp/htdocs/bussines_academy';

// Semua folder konten yang perlu dicek
$folders = ['artikel','berita','ebook','promo','tips','tutorial','video'];

// Semua halaman index yang pakai BASE_PATH untuk link ke item
// Cek apakah file yang dituju ada
$broken = [];
$ok = [];
$total = 0;

// Mapping: link yang ada di navbar -> file yang harus ada
$navbar_links = [
    'artikel/index.php',
    'berita/index.php', 
    'ebook/index.php',
    'promo/index.php',
    'tips/index.php',
    'tutorial/index.php',
    'video/index.php',
    'faq/index.php',
    'kamus/index.php',
    'komunitas/index.php',
    'tools/index.php',
    'download-center/index.php',
    'glosarium/index.php',
    'tentang-kami.php',
    'kontak.php',
    'privacy-policy.php',
    'syarat-ketentuan.php',
    'disclaimer.php',
    'sitemap.php',
];

echo "=== CEK HALAMAN UTAMA ===\n";
foreach($navbar_links as $link) {
    $full = $base . '/' . $link;
    if (file_exists($full)) {
        echo "OK   : $link\n";
    } else {
        echo "MISS : $link\n";
        $broken[] = $link;
    }
    $total++;
}

echo "\n=== CEK FILE KONTEN (prev/next links) ===\n";
foreach($folders as $folder) {
    $dir = $base . '/' . $folder;
    if (!is_dir($dir)) { echo "MISS DIR: $folder/\n"; continue; }
    
    $files = glob($dir . '/*.php');
    sort($files);
    
    foreach($files as $f) {
        $fname = basename($f);
        if ($fname === 'index.php') continue;
        
        $content = file_get_contents($f);
        
        // Cari semua link .php yang relative
        preg_match_all('/href="([^"]+\.php)"/', $content, $matches);
        foreach($matches[1] as $link) {
            // Skip link eksternal dan yang pakai variabel PHP
            if (strpos($link, 'http') === 0) continue;
            if (strpos($link, 'BASE_PATH') !== false) continue;
            if (strpos($link, '<?') !== false) continue;
            if (strpos($link, '#') === 0) continue;
            
            // Link relatif di dalam folder yang sama
            $target = dirname($f) . '/' . $link;
            $target = str_replace('/', DIRECTORY_SEPARATOR, $target);
            $total++;
            
            if (!file_exists($target)) {
                echo "MISS : $folder/$fname -> $link\n";
                $broken[] = "$folder/$fname -> $link";
            }
        }
    }
}

// Cek quick access links di index.php
echo "\n=== CEK QUICK ACCESS di INDEX.PHP ===\n";
$quick_links = [
    'tutorial/cara-deposit-saldo.php',
    'tutorial/cara-transaksi-pulsa.php',
    'tutorial/cara-daftar-digipulsapay.php',
    'tips/tips-memulai-bisnis-ppob.php',
    'ebook/panduan-lengkap-digipulsapay.php',
    'artikel/apa-itu-server-pulsa.php',
    'artikel/cara-kerja-agen-pulsa.php',
    'artikel/apa-itu-ppob.php',
    'artikel/keuntungan-agen-ppob.php',
    'artikel/cara-memulai-bisnis-pulsa.php',
    'artikel/apa-itu-token-listrik-pln.php',
    'berita/digipulsa-academy-resmi-diluncurkan.php',
];

foreach($quick_links as $link) {
    $full = $base . '/' . $link;
    $total++;
    if (file_exists($full)) {
        echo "OK   : $link\n";
        $ok[] = $link;
    } else {
        echo "MISS : $link\n";
        $broken[] = $link;
    }
}

echo "\n=================================\n";
echo "Total dicek : $total\n";
echo "Broken/Miss : " . count($broken) . "\n";
if (count($broken) > 0) {
    echo "\nDaftar yang perlu diperbaiki:\n";
    foreach(array_unique($broken) as $b) {
        echo "  - $b\n";
    }
}
