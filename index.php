<?php
session_start();

// Security: Sanitize language input
if (isset($_GET['lang'])) {
    $lang_param = preg_replace('/[^a-zA-Z]/', '', $_GET['lang']); // Only letters allowed
    if (in_array($lang_param, ['id', 'en'])) {
        $_SESSION['lang'] = $lang_param;
    }
}

$lang_code = isset($_SESSION['lang']) ? $_SESSION['lang'] : 'id';
$lang_file = "lang/{$lang_code}.php";

// Fallback language array if file not found
$default_lang = [
    'titlehome' => 'Batik Kinnara Kinnari',
    'home' => 'Home',
    'prof1' => 'Profile',
    'prof3' => 'Our Story',
    'prof5' => 'Vision & Mission',
    'prof7' => 'Testimonials',
    'prof13' => 'Batik Kinnara Kinnari is a batik production house located in Sumberagung Village, Pesanggaran District, Banyuwangi Regency.',
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
    'titlehome1' => 'Welcome to',
    'titlehome2' => 'Batik',
    'titlehome3' => 'Indonesia',
    'homeshop' => 'Shop Now',
    'titlecontact2' => 'Sumberagung, Pesanggaran, Banyuwangi',
    'price' => 'Price',
    'price2' => 'Choose the best package for your needs',
    'price3' => 'Affordable prices with premium quality',
    'price4' => 'Order Now',
    'titleprice1' => 'Basic Package',
    'titleprice2' => 'Premium Package',
    'titleprice3' => 'Exclusive Package',
    'aboutprice1' => 'Perfect for beginners',
    'aboutprice2' => 'Best value for money',
    'aboutprice3' => 'For connoisseurs',
    'pricebatik1' => 'Rp 250.000',
    'pricebatik2' => 'Rp 500.000',
    'pricebatik3' => 'Rp 1.000.000'
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
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Batik Kinnara Kinnari - <?php echo safe($lang['titlehome']); ?></title>
    <meta name="description" content="Batik Kinnara Kinnari merupakan rumah produksi batik yang berlokasi di Desa Sumberagung, Kecamatan Pesanggaran, Kabupaten Banyuwangi.">
    <meta name="keywords" content="Batik, Kinnara Kinnari, Banyuwangi, Batik Indonesia">
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
           MODERN ELEGANT CSS - FRESH & CLEAN
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
            text-decoration: none;
        }

        .header-logo a:hover {
            color: #f0d89e;
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

        .main-menu .sub-menu li {
            position: relative;
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
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
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

        /* ========== HERO SECTION ========== */
        .th-hero-wrapper {
            position: relative;
            overflow: hidden;
            background: linear-gradient(135deg, #fefcf8 0%, #f5f0e8 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
        }

        .th-hero-wrapper::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(circle at 20% 30%, rgba(210, 180, 140, 0.08), transparent 70%);
            pointer-events: none;
        }

        .swiper {
            width: 100%;
            height: 100%;
        }

        .hero-inner {
            display: flex;
            align-items: center;
            min-height: 100vh;
            padding: 100px 0;
        }

        .hero-style3 {
            text-align: center;
            max-width: 800px;
            margin: 0 auto;
            position: relative;
            z-index: 2;
        }

        .sub-title {
            display: inline-flex;
            align-items: center;
            gap: 12px;
            font-size: 13px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 2px;
            color: #D2B48C;
            background: rgba(210, 180, 140, 0.1);
            padding: 8px 20px;
            border-radius: 40px;
            margin-bottom: 30px;
            animation: fadeInUp 0.6s ease-out forwards;
            opacity: 0;
        }

        .sub-title .line {
            width: 30px;
            height: 2px;
            background: #D2B48C;
            border-radius: 2px;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .hero-title {
            margin-bottom: 30px;
        }

        .title1 {
            display: block;
            font-size: 16px;
            font-weight: 500;
            color: #8a7a6e;
            letter-spacing: 3px;
            margin-bottom: 15px;
            text-transform: uppercase;
            animation: fadeInUp 0.6s ease-out 0.1s forwards;
            opacity: 0;
        }

        .title2 {
            display: block;
            font-size: 64px;
            font-weight: 800;
            color: #3B2219;
            line-height: 1.2;
            margin-bottom: 10px;
            letter-spacing: -2px;
            animation: fadeInUp 0.6s ease-out 0.2s forwards;
            opacity: 0;
        }

        .title2 .text-theme {
            color: #D2B48C;
            position: relative;
            display: inline-block;
        }

        .title2 .text-theme::after {
            content: '';
            position: absolute;
            bottom: 5px;
            left: 0;
            right: 0;
            height: 8px;
            background: rgba(210, 180, 140, 0.3);
            border-radius: 4px;
            z-index: -1;
        }

        .title3 {
            display: block;
            font-size: 18px;
            font-weight: 400;
            color: #a08e7e;
            letter-spacing: 1px;
            animation: fadeInUp 0.6s ease-out 0.3s forwards;
            opacity: 0;
        }

        .btn-group {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
            animation: fadeInUp 0.6s ease-out 0.4s forwards;
            opacity: 0;
        }

        .th-btn {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            background: linear-gradient(135deg, #3B2219, #2a1a12);
            color: white;
            padding: 14px 36px;
            border-radius: 50px;
            font-weight: 600;
            font-size: 14px;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .th-btn::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            border-radius: 50%;
            background: rgba(210, 180, 140, 0.3);
            transform: translate(-50%, -50%);
            transition: width 0.6s, height 0.6s;
        }

        .th-btn:hover::before {
            width: 300px;
            height: 300px;
        }

        .th-btn:hover {
            background: linear-gradient(135deg, #D2B48C, #c4a265);
            color: #3B2219;
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(210, 180, 140, 0.3);
        }

        .th-btn i {
            transition: transform 0.3s ease;
        }

        .th-btn:hover i {
            transform: translateX(5px);
        }

        .hero-img {
            position: absolute;
            right: 0;
            top: 50%;
            transform: translateY(-50%);
            width: 40%;
            max-width: 450px;
            z-index: 2;
            animation: fadeInRight 0.8s ease-out 0.3s forwards;
            opacity: 0;
        }

        @keyframes fadeInRight {
            from {
                opacity: 0;
                transform: translateY(-50%) translateX(50px);
            }
            to {
                opacity: 1;
                transform: translateY(-50%) translateX(0);
            }
        }

        .hero-img img {
            width: 100%;
            border-radius: 30px;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        }

        .box-badge {
            position: absolute;
            bottom: -20px;
            left: -20px;
            z-index: 3;
        }

        .spin-text {
            position: relative;
            width: 110px;
            height: 110px;
        }

        .spin-text svg {
            width: 100%;
            height: 100%;
            animation: spin 12s linear infinite;
        }

        @keyframes spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        .play-btn {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 50px;
            height: 50px;
            background: #D2B48C;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #3B2219;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .play-btn:hover {
            background: #3B2219;
            color: #D2B48C;
            transform: translate(-50%, -50%) scale(1.1);
        }

        .hero-arrow {
            position: absolute;
            bottom: -60px;
            left: 50%;
            transform: translateX(-50%);
            animation: bounceArrow 2s ease-in-out infinite;
        }

        @keyframes bounceArrow {
            0%, 100% { transform: translateX(-50%) translateY(0); }
            50% { transform: translateX(-50%) translateY(10px); }
        }

        .hero-arrow img {
            width: 35px;
            opacity: 0.5;
        }

        .slider-pagination {
            position: absolute;
            bottom: 30px;
            left: 0;
            right: 0;
            text-align: center;
            z-index: 10;
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

        .slider-arrow {
            position: absolute;
            right: 30px;
            top: 50%;
            transform: translateY(-50%);
            width: 50px;
            height: 50px;
            background: rgba(210, 180, 140, 0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #D2B48C;
            border: none;
            cursor: pointer;
            transition: all 0.3s ease;
            z-index: 10;
            font-size: 18px;
        }

        .slider-arrow:hover {
            background: #D2B48C;
            color: #3B2219;
            transform: translateY(-50%) scale(1.1);
        }

        /* ========== PRICE SECTION ========== */
        .price-section {
            padding: 100px 0;
            background: linear-gradient(135deg, #fefcf8 0%, #faf6ef 100%);
            position: relative;
        }

        .title-area {
            text-align: center;
            margin-bottom: 60px;
        }

        .price-title {
            font-size: 42px;
            font-weight: 800;
            color: #3B2219;
            margin-bottom: 20px;
            letter-spacing: -1px;
        }

        .price-title::after {
            content: '';
            display: block;
            width: 60px;
            height: 3px;
            background: linear-gradient(90deg, #D2B48C, #c4a265);
            margin: 15px auto 0;
            border-radius: 3px;
        }

        .price-desc {
            font-size: 16px;
            color: #8a7a6e;
            max-width: 600px;
            margin: 0 auto;
        }

        .price-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
            justify-content: center;
        }

        .price-card {
            flex: 1 1 320px;
            max-width: 360px;
            background: white;
            border-radius: 24px;
            padding: 40px 28px;
            text-align: center;
            transition: all 0.4s ease;
            box-shadow: 0 10px 30px rgba(59, 34, 25, 0.08);
            animation: fadeInUp 0.6s ease-out forwards;
            opacity: 0;
        }

        .price-card:nth-child(1) { animation-delay: 0.1s; }
        .price-card:nth-child(2) { animation-delay: 0.2s; }
        .price-card:nth-child(3) { animation-delay: 0.3s; }

        .price-card:hover {
            transform: translateY(-12px);
            box-shadow: 0 20px 40px rgba(59, 34, 25, 0.15);
        }

        .price-tag {
            display: inline-block;
            background: linear-gradient(135deg, #D2B48C, #c4a265);
            color: #3B2219;
            font-size: 12px;
            font-weight: 700;
            padding: 5px 16px;
            border-radius: 20px;
            margin-bottom: 20px;
        }

        .price-card-title {
            font-size: 26px;
            font-weight: 700;
            color: #3B2219;
            margin-bottom: 15px;
        }

        .price-card-about {
            font-size: 14px;
            color: #8a7a6e;
            margin-bottom: 20px;
        }

        .price-amount {
            font-size: 14px;
            font-weight: 500;
            color: #6b5a4e;
            margin: 20px 0;
        }

        .price-value {
            display: block;
            font-size: 32px;
            font-weight: 800;
            color: #D2B48C;
            margin-top: 8px;
        }

        .price-btn {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            background: #3B2219;
            color: white;
            padding: 12px 28px;
            border-radius: 40px;
            font-weight: 600;
            font-size: 14px;
            transition: all 0.3s ease;
        }

        .price-btn:hover {
            background: #D2B48C;
            color: #3B2219;
            transform: translateX(5px);
        }

        /* ========== BREADCRUMB ========== */
        .breadcumb-wrapper {
            position: relative;
            padding: 100px 0;
            background: linear-gradient(135deg, #3B2219 0%, #2a1a12 100%);
            text-align: center;
        }

        .breadcumb-wrapper::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(circle at 70% 30%, rgba(210, 180, 140, 0.1), transparent 70%);
        }

        .breadcumb-title {
            font-size: 48px;
            font-weight: 800;
            color: #D2B48C;
            margin-bottom: 20px;
            position: relative;
            display: inline-block;
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

        /* ========== FOOTER ========== */
        .footer-wrapper {
            background: linear-gradient(135deg, #2a1a12 0%, #3B2219 100%);
            color: #e8e0d5;
            position: relative;
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
            text-decoration: none;
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
            text-decoration: none;
        }

        .copyright-text a:hover {
            color: #f0d89e;
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
            transition: stroke-dashoffset 0.3s;
        }

        /* ========== RESPONSIVE ========== */
        @media (max-width: 992px) {
            .hero-inner { flex-direction: column; padding: 120px 0 80px; }
            .hero-img { position: relative; width: 70%; margin: 40px auto 0; transform: none; top: auto; right: auto; }
            @keyframes fadeInRight {
                from { opacity: 0; transform: translateX(50px); }
                to { opacity: 1; transform: translateX(0); }
            }
            .title2 { font-size: 44px; }
            .price-title { font-size: 36px; }
            .breadcumb-title { font-size: 36px; }
        }

        @media (max-width: 768px) {
            .container { padding: 0 20px; }
            .hero-inner { padding: 100px 0 60px; }
            .title2 { font-size: 32px; }
            .title3 { font-size: 16px; }
            .hero-img { width: 85%; }
            .th-btn { padding: 12px 28px; font-size: 13px; }
            .price-title { font-size: 30px; }
            .breadcumb-title { font-size: 28px; }
            .widget-area { padding: 50px 0 35px; }
            .footer-grid { gap: 35px; }
            .slider-arrow { display: none; }
            .box-badge { transform: scale(0.8); left: -15px; bottom: -15px; }
        }

        @media (max-width: 480px) {
            .title2 { font-size: 28px; letter-spacing: -1px; }
            .btn-group { flex-direction: column; align-items: center; }
            .th-btn { width: 100%; justify-content: center; }
            .hero-img { width: 95%; }
            .price-card { max-width: 100%; }
            .breadcumb-title { font-size: 24px; }
        }

        /* Utility Classes */
        .d-none { display: none; }
        .d-block { display: block; }
        .text-center { text-align: center; }
        .row {
            display: flex;
            flex-wrap: wrap;
        }
        .align-items-center {
            align-items: center;
        }
        .justify-content-between {
            justify-content: space-between;
        }
        .justify-content-center {
            justify-content: center;
        }
        .col-auto {
            flex: 0 0 auto;
        }
        .col-md-6 {
            flex: 0 0 auto;
            width: 50%;
        }
        @media (min-width: 992px) {
            .d-lg-block { display: block; }
            .d-lg-none { display: none; }
            .d-lg-inline-block { display: inline-block; }
        }
        @media (max-width: 991px) {
            .d-lg-none { display: block; }
            .d-lg-block { display: none; }
            .col-md-6 { width: 100%; }
        }
        .gy-2 { row-gap: 8px; }
        .ms-2 { margin-left: 8px; }
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
            <div class="row justify-content-center justify-content-lg-between align-items-center gy-2">
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
                <div class="row align-items-center justify-content-between">
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

<!-- Hero Section -->
<div class="th-hero-wrapper hero-3 slider-area" id="hero">
    <div class="swiper th-slider" id="heroSlide3">
        <div class="swiper-wrapper">
            <?php 
            $slides = [
                ["title" => safe($lang['titlehome']), "title1" => safe($lang['titlehome1']), "title2" => safe($lang['titlehome2']), "title3" => safe($lang['titlehome3']), "image" => "assets/img/header-batik/img-2.jpg"],
                ["title" => safe($lang['titlehome']), "title1" => safe($lang['titlehome1']), "title2" => safe($lang['titlehome2']), "title3" => safe($lang['titlehome3']), "image" => "assets/img/header-batik/img-5.jpg"],
                ["title" => safe($lang['titlehome']), "title1" => safe($lang['titlehome1']), "title2" => safe($lang['titlehome2']), "title3" => safe($lang['titlehome3']), "image" => "assets/img/header-batik/img-8.jpg"]
            ];
            foreach ($slides as $index => $slide): 
            ?>
            <div class="swiper-slide">
                <div class="hero-inner">
                    <div class="container">
                        <div class="hero-style3">
                            <div class="hero-arrow"><img src="assets/img/hero/hero_arrow2.svg" alt="Arrow" loading="lazy"></div>
                            <span class="sub-title"><span class="line"></span><?php echo $slide['title']; ?></span>
                            <h1 class="hero-title">
                                <span class="title1"><?php echo $slide['title1']; ?></span>
                                <span class="title2"><span class="text-theme"><?php echo $slide['title2']; ?></span></span>
                                <span class="title3"><?php echo $slide['title3']; ?></span>
                            </h1>
                            <div class="btn-group">
                                <a href="price.php" class="th-btn"><?php echo safe($lang['homeshop']); ?> <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="hero-img">
                        <img src="<?php echo $slide['image']; ?>" alt="Batik" loading="lazy">
                        <div class="box-badge">
                            <div class="spin-text">
                                <svg viewBox="0 0 300 300">
                                    <defs><path id="circlePath-<?php echo $index; ?>" d="M 150, 150 m -60, 0 a 60,60 0 0,1 120,0 a 60,60 0 0,1 -120,0"></path></defs>
                                    <g><use href="#circlePath-<?php echo $index; ?>" fill="none"></use><text fill="#D2B48C" font-size="14" font-weight="600"><textPath href="#circlePath-<?php echo $index; ?>"><?php echo $slide['title']; ?> • Explore •</textPath></text></g>
                                </svg>
                            </div>
                            <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="play-btn" target="_blank"><i class="fas fa-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="slider-pagination"></div>
    </div>
    <button class="slider-arrow slider-next" aria-label="Next"><i class="fas fa-arrow-right"></i></button>
</div>
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
    // Initialize Swiper
    const swiper = new Swiper('#heroSlide3', {
        effect: 'fade',
        fadeEffect: { crossFade: true },
        autoplay: { delay: 5000, disableOnInteraction: false },
        pagination: { el: '.slider-pagination', clickable: true },
        navigation: { nextEl: '.slider-next' },
        loop: true,
        speed: 1000,
    });

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