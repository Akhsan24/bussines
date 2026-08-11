<?php
/**
 * GENERATE SITEMAP OTOMATIS
 * Script ini membaca semua file PHP di folder project
 * dan menghasilkan sitemap.xml yang lengkap dan akurat.
 */

$base_url = 'https://academy.digipulsapay.com/';
$base_dir = __DIR__;
$today = date('Y-m-d');
$urls = [];

// ============================================
// HELPER: tambah URL ke daftar
// ============================================
function addUrl(&$urls, $loc, $lastmod, $changefreq, $priority) {
    $urls[] = [
        'loc'        => $loc,
        'lastmod'    => $lastmod,
        'changefreq' => $changefreq,
        'priority'   => $priority,
    ];
}

// ============================================
// 1. HALAMAN UTAMA & STATIS
// ============================================
$static_pages = [
    ['', 'daily', '1.0'],
    ['tentang-kami.php', 'monthly', '0.8'],
    ['kontak.php', 'monthly', '0.8'],
    ['sitemap.php', 'monthly', '0.5'],
    ['privacy-policy.php', 'yearly', '0.5'],
    ['disclaimer.php', 'yearly', '0.5'],
    ['syarat-ketentuan.php', 'yearly', '0.5'],
];
foreach ($static_pages as $p) {
    addUrl($urls, $base_url . $p[0], $today, $p[1], $p[2]);
}

// ============================================
// 2. HALAMAN INDEX KATEGORI (dengan halaman khusus)
// ============================================
$category_pages = [
    ['artikel/', 'weekly', '0.9'],
    ['berita/', 'weekly', '0.9'],
    ['ebook/', 'weekly', '0.8'],
    ['promo/', 'weekly', '0.8'],
    ['tips/', 'weekly', '0.8'],
    ['tutorial/', 'weekly', '0.9'],
    ['video/', 'weekly', '0.8'],
    ['faq/', 'monthly', '0.8'],
    ['kamus/', 'monthly', '0.7'],
    ['komunitas/', 'monthly', '0.7'],
    ['tools/', 'monthly', '0.7'],
    ['download-center/', 'monthly', '0.7'],
    ['glosarium/', 'monthly', '0.7'],
];
foreach ($category_pages as $p) {
    addUrl($urls, $base_url . $p[0], $today, $p[1], $p[2]);
}

// ============================================
// 3. SCAN OTOMATIS SEMUA FILE PHP DI TIAP FOLDER
// ============================================
$scan_folders = [
    'artikel'         => ['changefreq' => 'monthly', 'priority' => '0.7'],
    'berita'          => ['changefreq' => 'weekly',  'priority' => '0.7'],
    'ebook'           => ['changefreq' => 'monthly', 'priority' => '0.6'],
    'promo'           => ['changefreq' => 'weekly',  'priority' => '0.7'],
    'tips'            => ['changefreq' => 'monthly', 'priority' => '0.7'],
    'tutorial'        => ['changefreq' => 'monthly', 'priority' => '0.7'],
    'video'           => ['changefreq' => 'monthly', 'priority' => '0.6'],
];

foreach ($scan_folders as $folder => $config) {
    $dir_path = $base_dir . '/' . $folder;
    if (!is_dir($dir_path)) continue;

    $files = glob($dir_path . '/*.php');
    sort($files);

    foreach ($files as $file) {
        $filename = basename($file);
        // Skip index.php — sudah ditambahkan di atas
        if ($filename === 'index.php') continue;

        $loc = $base_url . $folder . '/' . $filename;
        $lastmod = date('Y-m-d', filemtime($file));
        addUrl($urls, $loc, $lastmod, $config['changefreq'], $config['priority']);
    }
}

// ============================================
// 4. GENERATE XML
// ============================================
$total = count($urls);
$xml  = '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;
$xml .= '<!--' . PHP_EOL;
$xml .= '============================================' . PHP_EOL;
$xml .= 'SITEMAP.XML - DigiPulsaPay Academy' . PHP_EOL;
$xml .= '============================================' . PHP_EOL;
$xml .= 'DIBUAT OTOMATIS oleh generate-sitemap.php' . PHP_EOL;
$xml .= 'Tanggal: ' . date('Y-m-d H:i:s') . PHP_EOL;
$xml .= 'Total URL: ' . $total . PHP_EOL;
$xml .= '============================================' . PHP_EOL;
$xml .= '-->' . PHP_EOL;
$xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"' . PHP_EOL;
$xml .= '        xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"' . PHP_EOL;
$xml .= '        xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9' . PHP_EOL;
$xml .= '        http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">' . PHP_EOL;

foreach ($urls as $url) {
    $xml .= PHP_EOL . '    <url>' . PHP_EOL;
    $xml .= '        <loc>' . htmlspecialchars($url['loc']) . '</loc>' . PHP_EOL;
    $xml .= '        <lastmod>' . $url['lastmod'] . '</lastmod>' . PHP_EOL;
    $xml .= '        <changefreq>' . $url['changefreq'] . '</changefreq>' . PHP_EOL;
    $xml .= '        <priority>' . $url['priority'] . '</priority>' . PHP_EOL;
    $xml .= '    </url>' . PHP_EOL;
}

$xml .= PHP_EOL . '</urlset>' . PHP_EOL;

file_put_contents($base_dir . '/sitemap.xml', $xml);

echo "Sitemap berhasil dibuat!" . PHP_EOL;
echo "Total URL: $total" . PHP_EOL;
echo "File disimpan ke: sitemap.xml" . PHP_EOL;
