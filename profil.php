<?php
session_start();

// Security: Sanitize language input
if (isset($_GET['lang'])) {
    $lang_param = preg_replace('/[^a-zA-Z]/', '', $_GET['lang']);
    if (in_array($lang_param, ['id', 'en'])) {
        $_SESSION['lang'] = $lang_param;
    }
}

$lang_code = isset($_SESSION['lang']) ? $_SESSION['lang'] : 'id';
$lang_file = "lang/{$lang_code}.php";

// Fallback language array
$default_lang = [
    'titlehome' => 'Batik Kinnara Kinnari',
    'home' => 'Home',
    'prof1' => 'Profile',
    'prof2' => 'About Us',
    'prof3' => 'Our Story',
    'prof4' => 'Our Journey',
    'prof5' => 'Vision & Mission',
    'prof6' => 'Our Values',
    'prof7' => 'Testimonials',
    'prof8' => 'Amazing quality! The batik is beautiful and the service is excellent.',
    'prof9' => 'Authentic Indonesian batik with modern designs. Highly recommended!',
    'prof10' => 'Great craftsmanship and attention to detail. Will order again.',
    'prof13' => 'Batik Kinnara Kinnari is a batik production house located in Sumberagung Village, Pesanggaran District, Banyuwangi Regency.',
    'prof14' => 'We preserve the legacy of Indonesian batik through authentic handmade crafts.',
    'prof15' => 'Each piece tells a story of tradition, culture, and artistic excellence.',
    'prof16' => 'Batik Kinnara Kinnari was founded with a passion to preserve and promote the rich heritage of Indonesian batik. Our journey began in the heart of Banyuwangi, where we work closely with local artisans to create authentic, high-quality batik pieces.',
    'prof17' => 'Our vision is to become a leading batik brand that brings Indonesian culture to the world stage. Our mission is to preserve traditional batik techniques while empowering local artisans and providing sustainable livelihoods.',
    'gal1' => 'Gallery',
    'gal6' => 'Collections',
    'galmodel1' => 'Kawung',
    'galmodel2' => 'Parang',
    'galmodel3' => 'Megamendung',
    'galmodel4' => 'Sidomukti',
    'galmodel5' => 'Truntum',
    'galmodel6' => 'Sekar Jagad',
    'galmodel7' => 'Ceplok',
    'galmodel8' => 'Tambal',
    'galmodel13' => 'Modern Batik',
    'caremodel' => 'Care Guide',
    'price1' => 'Pricing',
    'contact' => 'Contact',
    'language' => 'Language',
    'languageID' => 'Indonesia',
    'languageEG' => 'English',
    'titlecontact2' => 'Sumberagung, Pesanggaran, Banyuwangi'
];

if (file_exists($lang_file)) {
    include $lang_file;
} else {
    $lang = $default_lang;
}

// Function to safely output text
function safe($text, $default = '') {
    return htmlspecialchars($text ?? $default, ENT_QUOTES, 'UTF-8');
}

$ctaType = isset($_GET['cta']) ? $_GET['cta'] : '1';
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Profile - <?php echo safe($lang['titlehome']); ?></title>
    <meta name="description" content="Profile of Batik Kinnara Kinnari - Batik production house in Banyuwangi">
    <meta name="author" content="MFNF">
    <meta name="robots" content="INDEX, FOLLOW">
    
    <!-- Fonts & Icons -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;14..32,400;14..32,500;14..32,600;14..32,700;14..32,800&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    
    <style>
        /* ============================================
           MODERN ELEGANT CSS - Profile Page
           Colors: #D2B48C (Gold) & #3B2219 (Dark Brown)
           ============================================ */
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', 'Poppins', 'Segoe UI', sans-serif;
            background: #fefcf8;
            color: #2c1e14;
            line-height: 1.5;
            overflow-x: hidden;
        }

        a {
            text-decoration: none;
            transition: all 0.3s ease;
        }

        img {
            max-width: 100%;
            height: auto;
        }

        .container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 24px;
        }

        /* ========== HEADER & NAVIGATION ========== */
        .th-header {
            background: linear-gradient(135deg, #3B2219 0%, #2a1a12 100%);
            position: relative;
            z-index: 1000;
        }

        .header-top {
            background: rgba(0, 0, 0, 0.2);
            padding: 10px 0;
            border-bottom: 1px solid rgba(210, 180, 140, 0.15);
        }

        .header-links ul {
            list-style: none;
            display: flex;
            gap: 24px;
            flex-wrap: wrap;
            margin: 0;
            padding: 0;
        }

        .header-links ul li {
            color: #e8e0d5;
            font-size: 13px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .header-links ul li i {
            color: #D2B48C;
            font-size: 13px;
        }

        .header-links ul li a {
            color: #e8e0d5;
        }

        .header-links ul li a:hover {
            color: #D2B48C;
        }

        .sticky-wrapper {
            padding: 15px 0;
            transition: all 0.3s ease;
        }

        .sticky-wrapper.is-sticky {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            background: rgba(59, 34, 25, 0.98);
            backdrop-filter: blur(10px);
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.15);
            padding: 10px 0;
            z-index: 1001;
            animation: slideDown 0.4s ease;
        }

        @keyframes slideDown {
            from { transform: translateY(-100%); }
            to { transform: translateY(0); }
        }

        .header-logo a {
            font-weight: 800;
            color: #D2B48C;
            font-size: 24px;
            letter-spacing: -0.5px;
        }

        /* Desktop Menu */
        .main-menu ul {
            list-style: none;
            display: flex;
            gap: 6px;
            margin: 0;
            padding: 0;
        }

        .main-menu > ul > li {
            position: relative;
        }

        .main-menu > ul > li > a {
            display: block;
            padding: 10px 18px;
            color: #e8e0d5;
            font-weight: 500;
            font-size: 14px;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .main-menu > ul > li > a::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 0;
            height: 2px;
            background: #D2B48C;
            transition: width 0.3s ease;
        }

        .main-menu > ul > li:hover > a {
            color: #D2B48C;
        }

        .main-menu > ul > li:hover > a::before {
            width: 30px;
        }

        /* Submenu */
        .main-menu .sub-menu {
            position: absolute;
            top: 100%;
            left: 0;
            min-width: 220px;
            background: #3B2219;
            border-radius: 12px;
            padding: 12px 0;
            opacity: 0;
            visibility: hidden;
            transform: translateY(10px);
            transition: all 0.3s ease;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
            border: 1px solid rgba(210, 180, 140, 0.2);
            z-index: 100;
        }

        .main-menu li:hover > .sub-menu {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        .main-menu .sub-menu li a {
            display: block;
            padding: 8px 20px;
            color: #e8e0d5;
            font-size: 13px;
            transition: all 0.3s ease;
        }

        .main-menu .sub-menu li a:hover {
            color: #D2B48C;
            background: rgba(210, 180, 140, 0.1);
            padding-left: 26px;
        }

        .main-menu .sub-menu .sub-menu {
            top: 0;
            left: 100%;
            margin-left: 5px;
        }

        .main-menu .menu-item-has-children > a {
            position: relative;
            padding-right: 28px;
        }

        .main-menu .menu-item-has-children > a::after {
            content: '\f107';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            font-size: 12px;
            position: absolute;
            right: 8px;
            top: 50%;
            transform: translateY(-50%);
        }

        /* Mobile Toggle Button */
        .th-menu-toggle {
            background: #D2B48C;
            border: none;
            width: 45px;
            height: 45px;
            border-radius: 12px;
            color: #3B2219;
            font-size: 20px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .th-menu-toggle:hover {
            background: #f0d89e;
            transform: scale(1.05);
        }

        /* Mobile Menu Wrapper */
        .th-menu-wrapper {
            position: fixed;
            top: 0;
            left: -100%;
            width: 100%;
            max-width: 380px;
            height: 100%;
            background: linear-gradient(135deg, #fefcf8 0%, #f5f0e8 100%);
            z-index: 9999;
            transition: left 0.4s cubic-bezier(0.2, 0.9, 0.4, 1.1);
            box-shadow: 5px 0 30px rgba(0, 0, 0, 0.2);
            overflow-y: auto;
        }

        .th-menu-wrapper.active {
            left: 0;
        }

        .menu-overlay {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.7);
            z-index: 9998;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
        }

        .menu-overlay.active {
            opacity: 1;
            visibility: visible;
        }

        .th-menu-area {
            padding: 30px 20px;
            position: relative;
            min-height: 100%;
        }

        .th-menu-toggle.close-btn {
            position: absolute;
            top: 20px;
            right: 20px;
            background: #3B2219;
            color: #D2B48C;
            width: 40px;
            height: 40px;
        }

        .mobile-logo {
            text-align: center;
            margin-bottom: 30px;
            padding-top: 20px;
        }

        .mobile-logo a {
            font-weight: 800;
            color: #D2B48C;
            font-size: 22px;
        }

        .th-mobile-menu ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .th-mobile-menu > ul > li {
            border-bottom: 1px solid rgba(59, 34, 25, 0.1);
        }

        .th-mobile-menu li a {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 14px 0;
            color: #3B2219;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .th-mobile-menu li a:hover {
            color: #D2B48C;
            padding-left: 5px;
        }

        .th-mobile-menu .sub-menu {
            padding-left: 20px;
            display: none;
        }

        .th-mobile-menu .sub-menu.active {
            display: block;
            animation: fadeSlideDown 0.3s ease;
        }

        @keyframes fadeSlideDown {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .th-mobile-menu .menu-item-has-children > a::after {
            content: '\f067';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            font-size: 12px;
        }

        .th-mobile-menu .menu-item-has-children.active > a::after {
            content: '\f068';
        }

        /* ========== BREADCRUMB ========== */
        .breadcumb-wrapper {
            position: relative;
            padding: 100px 0;
            background: linear-gradient(135deg, #3B2219 0%, #2a1a12 100%);
            text-align: center;
            overflow: hidden;
        }

        .breadcumb-wrapper::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(circle at 70% 30%, rgba(210, 180, 140, 0.1), transparent 70%);
            pointer-events: none;
        }

        .breadcumb-title {
            font-size: 48px;
            font-weight: 800;
            color: #D2B48C;
            margin-bottom: 20px;
            position: relative;
            display: inline-block;
            animation: fadeInUp 0.6s ease-out;
        }

        .breadcumb-title::after {
            content: '';
            position: absolute;
            bottom: -12px;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 3px;
            background: #D2B48C;
            border-radius: 3px;
        }

        .breadcumb-menu {
            list-style: none;
            display: flex;
            justify-content: center;
            gap: 12px;
            margin-top: 30px;
            flex-wrap: wrap;
        }

        .breadcumb-menu li {
            color: #e8e0d5;
            font-size: 14px;
        }

        .breadcumb-menu li a {
            color: #D2B48C;
        }

        .breadcumb-menu li a:hover {
            color: #f0d89e;
        }

        .breadcumb-menu li:not(:last-child)::after {
            content: '/';
            margin-left: 12px;
            color: #D2B48C;
        }

        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* ========== ABOUT SECTION ========== */
        .space {
            padding: 80px 0;
        }

        .title-area {
            text-align: center;
            margin-bottom: 50px;
        }

        .sub-title {
            display: inline-block;
            font-size: 13px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 2px;
            color: #D2B48C;
            background: rgba(210, 180, 140, 0.1);
            padding: 6px 18px;
            border-radius: 30px;
            margin-bottom: 20px;
        }

        .sec-title {
            font-size: 38px;
            font-weight: 800;
            color: #3B2219;
            letter-spacing: -1px;
            position: relative;
            display: inline-block;
        }

        .sec-title::after {
            content: '';
            display: block;
            width: 60px;
            height: 3px;
            background: linear-gradient(90deg, #D2B48C, #c4a265);
            margin: 15px auto 0;
            border-radius: 3px;
        }

        .sec-text {
            font-size: 18px;
            line-height: 1.6;
            color: #4a3a2e;
        }

        .rounded-img1 {
            border-radius: 24px;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .rounded-img1:hover {
            transform: scale(1.02);
        }

        .row {
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
        }

        .col-xl-4 {
            flex: 1 1 calc(33.333% - 30px);
            min-width: 280px;
        }

        .col-xl-6 {
            flex: 1 1 calc(50% - 30px);
        }

        .text-center {
            text-align: center;
        }

        .my-5 {
            margin: 30px 0;
        }

        .w-100 {
            width: 100%;
        }

        /* ========== TAB SECTION ========== */
        .tab-menu2 {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin: 30px 0 40px;
            flex-wrap: wrap;
        }

        .tab-btn {
            background: transparent;
            border: 2px solid #D2B48C;
            padding: 12px 32px;
            border-radius: 50px;
            font-size: 16px;
            font-weight: 600;
            color: #3B2219;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .tab-btn.active {
            background: linear-gradient(135deg, #D2B48C, #c4a265);
            color: #3B2219;
            border-color: transparent;
        }

        .tab-btn:hover:not(.active) {
            background: rgba(210, 180, 140, 0.1);
            transform: translateY(-2px);
        }

        .tab-content {
            margin-top: 20px;
        }

        .tab-pane {
            display: none;
            animation: fadeIn 0.5s ease;
        }

        .tab-pane.active {
            display: block;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .img-box1 {
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .img-box1:hover {
            transform: translateY(-5px);
        }

        .text-justify {
            text-align: justify;
        }

        /* ========== TESTIMONIALS SECTION ========== */
        .testi-grid {
            background: white;
            border-radius: 24px;
            padding: 35px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            margin: 15px;
        }

        .testi-grid:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.12);
        }

        .box-icon svg {
            width: 60px;
            height: 60px;
        }

        .box-review {
            color: #D2B48C;
            margin: 15px 0;
            font-size: 14px;
        }

        .box-text {
            font-size: 16px;
            line-height: 1.6;
            color: #4a3a2e;
            font-style: italic;
        }

        .swiper-slide {
            height: auto;
        }

        .slider-pagination {
            text-align: center;
            margin-top: 30px;
        }

        .slider-pagination .swiper-pagination-bullet {
            width: 10px;
            height: 10px;
            background: #D2B48C;
            opacity: 0.5;
            margin: 0 6px;
        }

        .slider-pagination .swiper-pagination-bullet-active {
            width: 30px;
            border-radius: 5px;
            opacity: 1;
        }

        .slider-controller {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 20px;
            margin-top: 30px;
        }

        .slider-arrow {
            width: 45px;
            height: 45px;
            background: rgba(210, 180, 140, 0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #D2B48C;
            border: none;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 16px;
        }

        .slider-arrow:hover {
            background: #D2B48C;
            color: #3B2219;
            transform: scale(1.1);
        }

        /* ========== FOOTER ========== */
        .footer-wrapper {
            background: linear-gradient(135deg, #2a1a12 0%, #3B2219 100%);
            color: #e8e0d5;
            position: relative;
            margin-top: 80px;
        }

        .footer-wrapper::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(circle at 20% 30%, rgba(210, 180, 140, 0.05), transparent 70%);
            pointer-events: none;
        }

        .widget-area {
            padding: 70px 0 50px;
            position: relative;
            z-index: 2;
        }

        .footer-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 40px;
            justify-content: space-between;
        }

        .footer-col {
            flex: 1 1 280px;
        }

        .footer-logo a {
            font-weight: 800;
            color: #D2B48C;
            font-size: 24px;
        }

        .about-text {
            margin: 20px 0 24px;
            line-height: 1.6;
            font-size: 14px;
            opacity: 0.85;
        }

        .social-links {
            display: flex;
            gap: 12px;
        }

        .social-links a {
            width: 38px;
            height: 38px;
            background: rgba(210, 180, 140, 0.12);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #D2B48C;
            transition: all 0.3s ease;
        }

        .social-links a:hover {
            background: #D2B48C;
            color: #3B2219;
            transform: translateY(-4px);
        }

        .footer-widget-title {
            font-size: 18px;
            font-weight: 600;
            color: #D2B48C;
            margin-bottom: 25px;
            position: relative;
        }

        .footer-widget-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 40px;
            height: 2px;
            background: #D2B48C;
        }

        .footer-menu {
            list-style: none;
            padding: 0;
        }

        .footer-menu li {
            margin-bottom: 12px;
        }

        .footer-menu li a {
            color: #e8e0d5;
            font-size: 14px;
            opacity: 0.8;
            transition: all 0.25s ease;
        }

        .footer-menu li a:hover {
            color: #D2B48C;
            opacity: 1;
            padding-left: 5px;
        }

        .copyright-wrap {
            border-top: 1px solid rgba(210, 180, 140, 0.2);
            padding: 24px 0;
            text-align: center;
            font-size: 13px;
            position: relative;
            z-index: 2;
        }

        .copyright-text a {
            color: #D2B48C;
        }

        /* ========== SCROLL TOP ========== */
        .scroll-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 50px;
            height: 50px;
            cursor: pointer;
            z-index: 100;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
        }

        .scroll-top.active {
            opacity: 1;
            visibility: visible;
        }

        .progress-circle {
            transform: rotate(-90deg);
        }

        .progress-circle path {
            fill: none;
            stroke: #D2B48C;
            stroke-width: 4;
        }

        /* ========== RESPONSIVE ========== */
        @media (max-width: 992px) {
            .col-xl-4, .col-xl-6 { flex: 1 1 calc(50% - 30px); }
            .sec-title { font-size: 32px; }
            .breadcumb-title { font-size: 36px; }
            .space { padding: 60px 0; }
        }

        @media (max-width: 768px) {
            .container { padding: 0 20px; }
            .col-xl-4, .col-xl-6 { flex: 1 1 100%; }
            .sec-title { font-size: 28px; }
            .sec-text { font-size: 16px; }
            .breadcumb-title { font-size: 28px; }
            .breadcumb-wrapper { padding: 60px 0; }
            .space { padding: 50px 0; }
            .tab-btn { padding: 10px 24px; font-size: 14px; }
            .testi-grid { padding: 25px; }
        }

        @media (max-width: 480px) {
            .sec-title { font-size: 24px; }
            .breadcumb-title { font-size: 24px; }
            .tab-menu2 { gap: 12px; }
            .tab-btn { padding: 8px 18px; font-size: 13px; }
        }

        .d-none { display: none; }
        .d-block { display: block; }
        @media (min-width: 992px) {
            .d-lg-block { display: block; }
            .d-lg-none { display: none; }
            .d-lg-inline-block { display: inline-block; }
        }
        @media (max-width: 991px) {
            .d-lg-none { display: block; }
            .d-lg-block { display: none; }
        }
        .justify-content-center { justify-content: center; }
        .align-items-center { align-items: center; }
        .justify-content-between { justify-content: space-between; }
        .gy-2 { row-gap: 8px; }
        .mb-37 { margin-bottom: 37px; }
        .mb-35 { margin-bottom: 35px; }
        .my-5 { margin: 30px 0; }
        .ms-2 { margin-left: 8px; }
        .overflow-hidden { overflow: hidden; }
        .position-relative { position: relative; }
    </style>
</head>
<body>

<!-- Mobile Menu Overlay -->
<div class="menu-overlay"></div>

<!-- Mobile Menu Wrapper -->
<div class="th-menu-wrapper">
    <div class="th-menu-area text-center">
        <button class="th-menu-toggle close-btn"><i class="fas fa-times"></i></button>
        <div class="mobile-logo">
            <a href="index.php"><?php echo safe($lang['titlehome']); ?></a>
        </div>
        <div class="th-mobile-menu">
            <ul>
                <li><a href="index.php"><?php echo safe($lang['home']); ?></a></li>
                <li class="menu-item-has-children">
                    <a href="#"><?php echo safe($lang['prof1']); ?></a>
                    <ul class="sub-menu">
                        <li><a href="profil.php#about-sec"><?php echo safe($lang['prof1']); ?></a></li>
                        <li><a href="profil.php?cta=1#cta"><?php echo safe($lang['prof3']); ?></a></li>
                        <li><a href="profil.php?cta=2#cta"><?php echo safe($lang['prof5']); ?></a></li>
                        <li><a href="profil.php#testi-sec"><?php echo safe($lang['prof7']); ?></a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children">
                    <a href="#"><?php echo safe($lang['gal1']); ?></a>
                    <ul class="sub-menu">
                        <li><a href="gallery.php"><?php echo safe($lang['gal1']); ?></a></li>
                        <li class="menu-item-has-children">
                            <a href="#"><?php echo safe($lang['gal6']); ?></a>
                            <ul class="sub-menu">
                                <li><a href="gallery.php?cta=1#galery"><?php echo safe($lang['galmodel1']); ?></a></li>
                                <li><a href="gallery.php?cta=2#galery"><?php echo safe($lang['galmodel2']); ?></a></li>
                                <li><a href="gallery.php?cta=3#galery"><?php echo safe($lang['galmodel3']); ?></a></li>
                                <li><a href="gallery.php?cta=4#galery"><?php echo safe($lang['galmodel4']); ?></a></li>
                                <li><a href="gallery.php?cta=5#galery"><?php echo safe($lang['galmodel5']); ?></a></li>
                                <li><a href="gallery.php?cta=6#galery"><?php echo safe($lang['galmodel6']); ?></a></li>
                                <li><a href="gallery.php?cta=7#galery"><?php echo safe($lang['galmodel7']); ?></a></li>
                                <li><a href="gallery.php?cta=8#galery"><?php echo safe($lang['galmodel8']); ?></a></li>
                                <li><a href="gallery.php?cta=9#galery"><?php echo safe($lang['galmodel13']); ?></a></li>
                            </ul>
                        </li>
                        <li><a href="gallery.php#process-sec"><?php echo safe($lang['caremodel']); ?></a></li>
                    </ul>
                </li>
                <li><a href="price.php"><?php echo safe($lang['price1']); ?></a></li>
                <li><a href="contact.php"><?php echo safe($lang['contact']); ?></a></li>
                <li class="menu-item-has-children">
                    <a href="#"><?php echo safe($lang['language']); ?></a>
                    <ul class="sub-menu">
                        <li><a href="?lang=id"><?php echo safe($lang['languageID']); ?></a></li>
                        <li><a href="?lang=en"><?php echo safe($lang['languageEG']); ?></a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>

<!-- Header Desktop -->
<header class="th-header header-layout1">
    <div class="header-top">
        <div class="container">
            <div class="row justify-content-center justify-content-lg-between align-items-center gy-2" style="display: flex; flex-wrap: wrap;">
                <div class="col-auto d-none d-lg-block">
                    <div class="header-links">
                        <ul>
                            <li><i class="fas fa-location-dot"></i><?php echo safe($lang['titlecontact2']); ?></li>
                        </ul>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="header-links">
                        <ul>
                            <li><i class="fas fa-headset"></i><a href="contact.php"><?php echo safe($lang['contact']); ?></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sticky-wrapper">
        <div class="container">
            <div class="menu-area">
                <div class="row align-items-center justify-content-between" style="display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between;">
                    <div class="col-auto">
                        <div class="header-logo">
                            <a href="index.php"><?php echo safe($lang['titlehome']); ?></a>
                        </div>
                    </div>
                    <div class="col-auto">
                        <nav class="main-menu d-none d-lg-inline-block">
                            <ul>
                                <li><a href="index.php"><?php echo safe($lang['home']); ?></a></li>
                                <li class="menu-item-has-children">
                                    <a href="#"><?php echo safe($lang['prof1']); ?></a>
                                    <ul class="sub-menu">
                                        <li><a href="profil.php#about-sec"><?php echo safe($lang['prof1']); ?></a></li>
                                        <li><a href="profil.php?cta=1#cta"><?php echo safe($lang['prof3']); ?></a></li>
                                        <li><a href="profil.php?cta=2#cta"><?php echo safe($lang['prof5']); ?></a></li>
                                        <li><a href="profil.php#testi-sec"><?php echo safe($lang['prof7']); ?></a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#"><?php echo safe($lang['gal1']); ?></a>
                                    <ul class="sub-menu">
                                        <li><a href="gallery.php"><?php echo safe($lang['gal1']); ?></a></li>
                                        <li class="menu-item-has-children">
                                            <a href="#"><?php echo safe($lang['gal6']); ?></a>
                                            <ul class="sub-menu">
                                                <li><a href="gallery.php?cta=1#galery"><?php echo safe($lang['galmodel1']); ?></a></li>
                                                <li><a href="gallery.php?cta=2#galery"><?php echo safe($lang['galmodel2']); ?></a></li>
                                                <li><a href="gallery.php?cta=3#galery"><?php echo safe($lang['galmodel3']); ?></a></li>
                                                <li><a href="gallery.php?cta=4#galery"><?php echo safe($lang['galmodel4']); ?></a></li>
                                                <li><a href="gallery.php?cta=5#galery"><?php echo safe($lang['galmodel5']); ?></a></li>
                                                <li><a href="gallery.php?cta=6#galery"><?php echo safe($lang['galmodel6']); ?></a></li>
                                                <li><a href="gallery.php?cta=7#galery"><?php echo safe($lang['galmodel7']); ?></a></li>
                                                <li><a href="gallery.php?cta=8#galery"><?php echo safe($lang['galmodel8']); ?></a></li>
                                                <li><a href="gallery.php?cta=9#galery"><?php echo safe($lang['galmodel13']); ?></a></li>
                                            </ul>
                                        </li>
                                        <li><a href="gallery.php#process-sec"><?php echo safe($lang['caremodel']); ?></a></li>
                                    </ul>
                                </li>
                                <li><a href="price.php"><?php echo safe($lang['price1']); ?></a></li>
                                <li><a href="contact.php"><?php echo safe($lang['contact']); ?></a></li>
                                <li class="menu-item-has-children">
                                    <a href="#"><?php echo safe($lang['language']); ?></a>
                                    <ul class="sub-menu">
                                        <li><a href="?lang=id"><?php echo safe($lang['languageID']); ?></a></li>
                                        <li><a href="?lang=en"><?php echo safe($lang['languageEG']); ?></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                        <button type="button" class="th-menu-toggle d-block d-lg-none"><i class="fas fa-bars"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Breadcrumb Section -->
<div class="breadcumb-wrapper">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title"><?php echo safe($lang['prof1']); ?></h1>
            <ul class="breadcumb-menu">
                <li><a href="index.php"><?php echo safe($lang['home']); ?></a></li>
                <li><?php echo safe($lang['prof1']); ?></li>
            </ul>
        </div>
    </div>
</div>

<!-- About Section -->
<section class="space" id="about-sec">
    <div class="container">
        <div class="title-area">
            <span class="sub-title"><?php echo safe($lang['prof1']); ?></span>
            <h2 class="sec-title"><?php echo safe($lang['prof2']); ?></h2>
        </div>
        <div class="row" style="display: flex; flex-wrap: wrap; justify-content: center; align-items: center;">
            <div class="col-xl-4 text-center">
                <div class="mb-37">
                    <p class="sec-text">
                        <?php echo safe($lang['prof14']); ?>
                    </p>
                </div>
            </div>
            <div class="col-xl-4 my-5 my-xl-0">
                <div class="rounded-img1">
                    <img class="w-100" src="assets/img/profil/profil.jpg" alt="Batik Kinnara Kinnari" loading="lazy">
                </div>
            </div>
            <div class="col-xl-4 text-center">
                <div class="mb-37">
                    <p class="sec-text">
                        <?php echo safe($lang['prof15']); ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section (Our Story / Vision & Mission) -->
<section class="space" id="cta">
    <div class="container">
        <div class="title-area">
            <span class="sub-title"><?php echo safe($lang['prof1']); ?></span>
            <h2 class="sec-title"><?php echo safe($lang['prof2']); ?></h2>
        </div>
        <div class="tab-menu2">
            <button class="tab-btn <?php echo ($ctaType === '1') ? 'active' : ''; ?>" data-tab="tab1"><?php echo safe($lang['prof3']); ?></button>
            <button class="tab-btn <?php echo ($ctaType === '2') ? 'active' : ''; ?>" data-tab="tab2"><?php echo safe($lang['prof5']); ?></button>
        </div>
        <div class="tab-content">
            <div class="tab-pane <?php echo ($ctaType === '1') ? 'active' : ''; ?>" id="tab1">
                <div class="text-center">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-12">
                                <p class="sec-text" style="text-align: center;">
                                    <?php echo safe($lang['prof16']); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane <?php echo ($ctaType === '2') ? 'active' : ''; ?>" id="tab2">
                <div class="container">
                    <div class="row align-items-center" style="display: flex; flex-wrap: wrap; align-items: center;">
                        <div class="col-xl-4 mb-35 mb-xl-0">
                            <div class="img-box1">
                                <img src="assets/img/profil/profil2.jpg" alt="Vision" loading="lazy" style="width: 100%; border-radius: 20px;">
                            </div>
                        </div>
                        <div class="col-xl-4 text-center">
                            <div class="mb-37">
                                <p class="sec-text" style="text-align: justify;">
                                    <?php echo safe($lang['prof17']); ?>
                                </p>
                            </div>
                        </div>
                        <div class="col-xl-4 mb-35 mb-xl-0">
                            <div class="img-box1">
                                <img src="assets/img/profil/profil1.jpg" alt="Mission" loading="lazy" style="width: 100%; border-radius: 20px;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="space" id="testi-sec">
    <div class="container">
        <div class="title-area">
            <span class="sub-title"><?php echo safe($lang['prof7']); ?></span>
            <h2 class="sec-title"><?php echo safe($lang['prof2']); ?></h2>
        </div>
        <div class="slider-wrap text-center">
            <div class="swiper" id="testiSlider5">
                <div class="swiper-wrapper">
                    <?php 
                    $testimonials = [
                        safe($lang['prof8']),
                        safe($lang['prof9']),
                        safe($lang['prof10'])
                    ];
                    foreach ($testimonials as $testimonial): 
                    ?>
                    <div class="swiper-slide">
                        <div class="testi-grid">
                            <div class="box-icon">
                                <svg width="60" height="60" viewBox="0 0 71 70" fill="none">
                                    <rect x="70.5" y="70" width="70" height="70" rx="35" transform="rotate(180 70.5 70)" fill="#D2B48C" />
                                    <path d="M47.3629 25.975C48.9879 27.7167 49.9629 29.6167 49.9629 32.7833C49.9629 38.325 45.9004 43.2333 40.2129 45.7667L38.7504 43.7083C44.1129 40.8583 45.2504 37.2167 45.5754 34.8417C44.7629 35.3167 43.6254 35.475 42.4879 35.3167C39.5629 35 37.2879 32.7833 37.2879 29.775C37.2879 28.35 37.9379 26.925 38.9129 25.8167C40.0504 24.7083 41.3504 24.2333 42.9754 24.2333C44.7629 24.2333 46.3879 25.025 47.3629 25.975ZM31.1129 25.975C32.7379 27.7167 33.7129 29.6167 33.7129 32.7833C33.7129 38.325 29.6504 43.2333 23.9629 45.7667L22.5004 43.7083C27.8629 40.8583 29.0004 37.2167 29.3254 34.8417C28.5129 35.3167 27.3754 35.475 26.2379 35.3167C23.3129 35 21.0379 32.7833 21.0379 29.775C21.0379 28.35 21.6879 26.925 22.6629 25.8167C23.6379 24.7083 25.1004 24.2333 26.7254 24.2333C28.5129 24.2333 30.1379 25.025 31.1129 25.975Z" fill="white" />
                                </svg>
                            </div>
                            <div class="box-review">
                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            </div>
                            <p class="box-text">"<?php echo $testimonial; ?>"</p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <div class="slider-pagination"></div>
            </div>
            <div class="slider-controller">
                <button class="slider-arrow slider-prev"><i class="fas fa-arrow-left"></i></button>
                <div class="slider-pagination white-color"></div>
                <button class="slider-arrow slider-next"><i class="fas fa-arrow-right"></i></button>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="footer-wrapper">
    <div class="widget-area">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <div class="footer-logo"><a href="index.php"><?php echo safe($lang['titlehome']); ?></a></div>
                    <p class="about-text"><?php echo safe($lang['prof13']); ?></p>
                    <div class="social-links">
                        <a href="https://www.facebook.com/" target="_blank" rel="noopener"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.twitter.com/" target="_blank" rel="noopener"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.instagram.com/" target="_blank" rel="noopener"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.linkedin.com/" target="_blank" rel="noopener"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="footer-col">
                    <h3 class="footer-widget-title">Menu</h3>
                    <ul class="footer-menu">
                        <li><a href="index.php"><?php echo safe($lang['home']); ?></a></li>
                        <li><a href="profil.php"><?php echo safe($lang['prof1']); ?></a></li>
                        <li><a href="gallery.php"><?php echo safe($lang['gal1']); ?></a></li>
                        <li><a href="price.php"><?php echo safe($lang['price1']); ?></a></li>
                        <li><a href="contact.php"><?php echo safe($lang['contact']); ?></a></li>
                    </ul>
                </div>
                <div class="footer-col"></div>
            </div>
        </div>
    </div>
    <div class="copyright-wrap">
        <div class="container">
            <p class="copyright-text">Copyright <i class="far fa-copyright"></i> 2024 <a href="index.php">Muhammad Anas</a></p>
        </div>
    </div>
</footer>

<!-- Scroll Top -->
<div class="scroll-top">
    <svg class="progress-circle" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
    </svg>
</div>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Mobile Menu Toggle
    const menuWrapper = document.querySelector('.th-menu-wrapper');
    const menuToggleBtns = document.querySelectorAll('.th-menu-toggle');
    const menuOverlay = document.querySelector('.menu-overlay');
    
    function openMenu() { menuWrapper.classList.add('active'); menuOverlay.classList.add('active'); document.body.style.overflow = 'hidden'; }
    function closeMenu() { menuWrapper.classList.remove('active'); menuOverlay.classList.remove('active'); document.body.style.overflow = ''; }
    
    menuToggleBtns.forEach(btn => btn.addEventListener('click', (e) => { e.stopPropagation(); menuWrapper.classList.contains('active') ? closeMenu() : openMenu(); }));
    if (menuOverlay) menuOverlay.addEventListener('click', closeMenu);

    // Mobile Submenu Accordion
    document.querySelectorAll('.th-mobile-menu .menu-item-has-children > a').forEach(item => {
        item.addEventListener('click', (e) => {
            e.preventDefault();
            const parentLi = item.parentElement;
            const submenu = parentLi.querySelector('.sub-menu');
            if (submenu) { submenu.classList.toggle('active'); parentLi.classList.toggle('active'); }
        });
    });

    // Sticky Header
    const stickyWrapper = document.querySelector('.sticky-wrapper');
    if (stickyWrapper) {
        const stickyOffset = stickyWrapper.offsetTop;
        window.addEventListener('scroll', () => {
            stickyWrapper.classList.toggle('is-sticky', window.pageYOffset > stickyOffset);
        });
    }

    // Initialize Swiper for Testimonials
    const testiSwiper = new Swiper('#testiSlider5', {
        slidesPerView: 1,
        spaceBetween: 30,
        pagination: { el: '.slider-pagination', clickable: true },
        navigation: { prevEl: '.slider-prev', nextEl: '.slider-next' },
        breakpoints: {
            768: { slidesPerView: 2 },
            992: { slidesPerView: 2 },
            1200: { slidesPerView: 2 }
        }
    });

    // Tab functionality
    const tabBtns = document.querySelectorAll('.tab-btn');
    const tabPanes = document.querySelectorAll('.tab-pane');
    
    tabBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            const tabId = btn.getAttribute('data-tab');
            tabBtns.forEach(b => b.classList.remove('active'));
            tabPanes.forEach(pane => pane.classList.remove('active'));
            btn.classList.add('active');
            document.getElementById(tabId).classList.add('active');
            
            // Update URL without reload
            const url = new URL(window.location.href);
            if (tabId === 'tab1') url.searchParams.set('cta', '1');
            else if (tabId === 'tab2') url.searchParams.set('cta', '2');
            window.history.pushState({}, '', url);
        });
    });

    // Scroll Top
    const scrollTop = document.querySelector('.scroll-top');
    const progressPath = document.querySelector('.progress-circle path');
    const pathLength = progressPath ? progressPath.getTotalLength() : 307.919;
    if (progressPath) progressPath.style.strokeDasharray = pathLength + ',' + pathLength;
    
    window.addEventListener('scroll', () => {
        const scroll = window.pageYOffset;
        const height = document.documentElement.scrollHeight - window.innerHeight;
        const progress = pathLength - (scroll * pathLength / height);
        if (progressPath) progressPath.style.strokeDashoffset = progress;
        scrollTop.classList.toggle('active', scroll > 300);
    });
    
    scrollTop.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));
});
</script>
</body>
</html>