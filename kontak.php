<?php
/**
 * ============================================
 * HALAMAN KONTAK
 * ============================================
 * File ini berisi form dan informasi kontak
 * Edit bagian yang ditandai untuk mengubah konten
 * ============================================
 */

// ============================================
// KONFIGURASI HALAMAN - EDIT BAGIAN INI SAJA
// ============================================

$page_title = "Kontak Kami - DigiPulsaPay Academy";
$page_description = "Hubungi tim DigiPulsaPay Academy untuk pertanyaan, saran, atau kerja sama.";
$page_keywords = "Kontak DigiPulsaPay, Bantuan, Support";

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
    'url' => SITE_URL . 'kontak.php',
    'type' => 'contact'
]);

require_once 'includes/header.php';

$breadcrumb_items = [
    ['name' => 'Kontak Kami']
];

// Proses form jika dikirim
$form_submitted = false;
$form_error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $subject = trim($_POST['subject'] ?? '');
    $message = trim($_POST['message'] ?? '');
    
    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        $form_error = 'Semua field harus diisi!';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $form_error = 'Format email tidak valid!';
    } else {
        // Kirim email (ini hanya contoh, sebaiknya gunakan library email)
        $to = SITE_EMAIL;
        $headers = "From: " . $email . "\r\n";
        $headers .= "Reply-To: " . $email . "\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
        
        $email_body = "
            <h3>Pesan dari Kontak Form</h3>
            <p><strong>Nama:</strong> {$name}</p>
            <p><strong>Email:</strong> {$email}</p>
            <p><strong>Subjek:</strong> {$subject}</p>
            <p><strong>Pesan:</strong></p>
            <p>{$message}</p>
        ";
        
        if (mail($to, "Pesan Kontak: " . $subject, $email_body, $headers)) {
            $form_submitted = true;
        } else {
            $form_error = 'Gagal mengirim pesan. Silakan coba lagi atau hubungi kami langsung di ' . SITE_EMAIL;
        }
    }
}
?>

<style>
    /* ===== STYLE KHUSUS HALAMAN KONTAK ===== */
    
    /* Hero mini untuk halaman kontak */
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
    
    /* Card info kontak */
    .contact-info-card {
        background: white;
        border-radius: 16px;
        padding: 30px;
        box-shadow: 0 4px 20px rgba(0,0,0,0.06);
        border: 1px solid #e9ecef;
        transition: all 0.3s ease;
        height: 100%;
    }
    
    .contact-info-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 40px rgba(13,110,253,0.10);
        border-color: #0d6efd;
    }
    
    .contact-info-card .icon-wrapper {
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, #0d6efd, #0a58ca);
        border-radius: 14px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 16px;
        flex-shrink: 0;
    }
    
    .contact-info-card .icon-wrapper i {
        font-size: 1.8rem;
        color: white;
    }
    
    .contact-info-card h5 {
        font-weight: 600;
        color: #1a1a2e;
        margin-bottom: 6px;
    }
    
    .contact-info-card p, 
    .contact-info-card a {
        color: #6c757d;
        text-decoration: none;
        margin-bottom: 0;
    }
    
    .contact-info-card a:hover {
        color: #0d6efd;
    }
    
    /* Social media buttons */
    .social-btn {
        width: 44px;
        height: 44px;
        border-radius: 12px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        background: #f8f9fa;
        color: #1a1a2e;
        font-size: 1.2rem;
        transition: all 0.3s ease;
        border: 1px solid #e9ecef;
        text-decoration: none;
    }
    
    .social-btn:hover {
        background: #0d6efd;
        color: white;
        border-color: #0d6efd;
        transform: translateY(-3px);
        box-shadow: 0 8px 25px rgba(13,110,253,0.2);
    }
    
    /* Form styling */
    .contact-form-wrapper {
        background: white;
        border-radius: 16px;
        padding: 35px;
        box-shadow: 0 4px 20px rgba(0,0,0,0.06);
        border: 1px solid #e9ecef;
    }
    
    .contact-form-wrapper h2 {
        font-weight: 700;
        color: #1a1a2e;
        margin-bottom: 24px;
    }
    
    .contact-form-wrapper .form-control,
    .contact-form-wrapper .form-select {
        border-radius: 10px;
        padding: 12px 16px;
        border: 2px solid #e9ecef;
        transition: all 0.3s ease;
        font-size: 0.95rem;
    }
    
    .contact-form-wrapper .form-control:focus,
    .contact-form-wrapper .form-select:focus {
        border-color: #0d6efd;
        box-shadow: 0 0 0 4px rgba(13,110,253,0.1);
    }
    
    .contact-form-wrapper .form-control::placeholder {
        color: #adb5bd;
    }
    
    .contact-form-wrapper .btn-submit {
        padding: 12px 40px;
        border-radius: 10px;
        font-weight: 600;
        background: linear-gradient(135deg, #0d6efd, #0a58ca);
        border: none;
        transition: all 0.3s ease;
    }
    
    .contact-form-wrapper .btn-submit:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 30px rgba(13,110,253,0.3);
        background: linear-gradient(135deg, #0b5ed7, #084298);
    }
    
    .contact-form-wrapper .btn-submit i {
        margin-right: 8px;
    }
    
    /* Alert styling */
    .alert {
        border-radius: 12px;
        border: none;
        padding: 16px 20px;
    }
    
    .alert-success {
        background: #d1e7dd;
        color: #0a3622;
    }
    
    .alert-danger {
        background: #f8d7da;
        color: #58151c;
    }
    
    /* ===== RESPONSIVE ===== */
    
    @media (max-width: 991px) {
        .page-hero h1 {
            font-size: 2rem;
        }
        
        .contact-info-card {
            padding: 24px;
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
        
        .contact-form-wrapper {
            padding: 24px 18px;
            margin-top: 20px;
        }
        
        .contact-form-wrapper h2 {
            font-size: 1.4rem;
        }
        
        .contact-info-card {
            padding: 20px;
            text-align: center;
        }
        
        .contact-info-card .icon-wrapper {
            margin: 0 auto 14px;
        }
        
        .social-buttons {
            justify-content: center !important;
        }
        
        .contact-form-wrapper .btn-submit {
            width: 100%;
            justify-content: center;
        }
    }
    
    @media (max-width: 480px) {
        .page-hero h1 {
            font-size: 1.4rem;
        }
        
        .contact-form-wrapper {
            padding: 18px 14px;
        }
        
        .contact-form-wrapper .form-control,
        .contact-form-wrapper .form-select {
            padding: 10px 14px;
            font-size: 0.9rem;
        }
        
        .contact-info-card .icon-wrapper {
            width: 50px;
            height: 50px;
        }
        
        .contact-info-card .icon-wrapper i {
            font-size: 1.4rem;
        }
    }
</style>

<!-- ===== PAGE HERO ===== -->
<section class="page-hero">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h1>
                    <i class="bi bi-headset me-3"></i> Kontak Kami
                </h1>
                <p class="lead opacity-75 mb-0">
                    Kami siap membantu Anda. Hubungi tim kami untuk pertanyaan, saran, atau kerja sama.
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
    
    <!-- Info Kontak - Grid 3 Kolom -->
    <div class="row g-4 mb-5">
        <div class="col-md-4">
            <div class="contact-info-card d-flex flex-column">
                <div class="icon-wrapper">
                    <i class="bi bi-envelope"></i>
                </div>
                <h5>Email</h5>
                <a href="mailto:<?php echo SITE_EMAIL; ?>"><?php echo SITE_EMAIL; ?></a>
                <small class="text-muted mt-1">Balas dalam 1x24 jam</small>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="contact-info-card d-flex flex-column">
                <div class="icon-wrapper">
                    <i class="bi bi-whatsapp"></i>
                </div>
                <h5>WhatsApp</h5>
                <a href="https://wa.me/<?php echo preg_replace('/[^0-9]/', '', SITE_PHONE); ?>" target="_blank">
                    <?php echo SITE_PHONE; ?>
                </a>
                <small class="text-muted mt-1">Respons cepat</small>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="contact-info-card d-flex flex-column">
                <div class="icon-wrapper">
                    <i class="bi bi-geo-alt"></i>
                </div>
                <h5>Alamat</h5>
                <p><?php echo SITE_ADDRESS; ?></p>
                <small class="text-muted mt-1">Senin - Jumat, 09:00 - 17:00</small>
            </div>
        </div>
    </div>
    
    <!-- Form & Social Media -->
    <div class="row g-4">
        <!-- Form -->
        <div class="col-lg-7">
            <div class="contact-form-wrapper">
                <h2>
                    <i class="bi bi-chat-dots text-primary me-2"></i> Kirim Pesan
                </h2>
                
                <?php if ($form_submitted): ?>
                    <div class="alert alert-success">
                        <i class="bi bi-check-circle-fill me-2"></i> 
                        Pesan Anda berhasil dikirim! Kami akan segera menghubungi Anda.
                    </div>
                <?php endif; ?>
                
                <?php if (!empty($form_error)): ?>
                    <div class="alert alert-danger">
                        <i class="bi bi-exclamation-triangle-fill me-2"></i> 
                        <?php echo $form_error; ?>
                    </div>
                <?php endif; ?>
                
                <form method="POST" action="" novalidate>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="name" class="form-label fw-semibold">
                                Nama Lengkap <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control" id="name" name="name" 
                                   placeholder="Masukkan nama lengkap" required>
                        </div>
                        
                        <div class="col-md-6">
                            <label for="email" class="form-label fw-semibold">
                                Email <span class="text-danger">*</span>
                            </label>
                            <input type="email" class="form-control" id="email" name="email" 
                                   placeholder="Masukkan email Anda" required>
                        </div>
                        
                        <div class="col-12">
                            <label for="subject" class="form-label fw-semibold">
                                Subjek <span class="text-danger">*</span>
                            </label>
                            <select class="form-select" id="subject" name="subject" required>
                                <option value="">Pilih subjek...</option>
                                <option value="Pertanyaan Umum">Pertanyaan Umum</option>
                                <option value="Kerja Sama">Kerja Sama</option>
                                <option value="Saran & Masukan">Saran & Masukan</option>
                                <option value="Laporan Masalah">Laporan Masalah</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </div>
                        
                        <div class="col-12">
                            <label for="message" class="form-label fw-semibold">
                                Pesan <span class="text-danger">*</span>
                            </label>
                            <textarea class="form-control" id="message" name="message" rows="5" 
                                      placeholder="Tulis pesan Anda di sini..." required></textarea>
                        </div>
                        
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-submit">
                                <i class="bi bi-send"></i> Kirim Pesan
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        
        <!-- Social Media & Info -->
        <div class="col-lg-5">
            <div class="contact-form-wrapper" style="height: 100%;">
                <h2>
                    <i class="bi bi-share text-primary me-2"></i> Ikuti Kami
                </h2>
                <p class="text-muted">Terhubung dengan kami melalui media sosial untuk update terbaru.</p>
                
                <div class="social-buttons d-flex flex-wrap gap-2 mt-4">
                    <a href="<?php echo SOCIAL_FACEBOOK; ?>" target="_blank" class="social-btn" title="Facebook">
                        <i class="bi bi-facebook"></i>
                    </a>
                    <a href="<?php echo SOCIAL_INSTAGRAM; ?>" target="_blank" class="social-btn" title="Instagram">
                        <i class="bi bi-instagram"></i>
                    </a>
                    <a href="<?php echo SOCIAL_TIKTOK; ?>" target="_blank" class="social-btn" title="TikTok">
                        <i class="bi bi-tiktok"></i>
                    </a>
                    <a href="<?php echo SOCIAL_TWITTER; ?>" target="_blank" class="social-btn" title="Twitter / X">
                        <i class="bi bi-twitter-x"></i>
                    </a>
                    <a href="https://wa.me/<?php echo preg_replace('/[^0-9]/', '', SITE_PHONE); ?>" target="_blank" class="social-btn" title="WhatsApp" style="color: #25D366;">
                        <i class="bi bi-whatsapp"></i>
                    </a>
                </div>
                
                <hr class="my-4">
                
                <div class="mt-3">
                    <h6 class="fw-semibold">
                        <i class="bi bi-clock text-primary me-2"></i> Jam Operasional
                    </h6>
                    <p class="text-muted mb-0">Senin - Jumat: 09.00 - 17.00 WIB</p>
                    <p class="text-muted">Sabtu - Minggu: Libur</p>
                </div>
                
                <div class="mt-3">
                    <h6 class="fw-semibold">
                        <i class="bi bi-question-circle text-primary me-2"></i> Butuh Bantuan Cepat?
                    </h6>
                    <p class="text-muted mb-0">Kunjungi halaman <a href="<?php echo BASE_PATH; ?>faq.php" class="text-primary">FAQ</a> atau hubungi WhatsApp kami.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require_once 'includes/footer.php';
?>
