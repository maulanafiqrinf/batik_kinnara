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

// Fallback language array for gallery page
$default_lang = [
    'titlehome' => 'Batik Kinnara Kinnari',
    'home' => 'Home',
    'prof1' => 'Profile',
    'prof13' => 'Batik Kinnara Kinnari is a batik production house located in Sumberagung Village, Pesanggaran District, Banyuwangi Regency.',
    'gal1' => 'Gallery',
    'gal2' => 'Our Batik Collections',
    'gal3' => 'Traditional Motifs',
    'gal4' => 'Modern Designs',
    'gal5' => 'Custom Orders',
    'gal6' => 'Collections',
    'gal7' => 'Explore our exquisite collection of authentic Indonesian batik',
    'gal8' => 'Each piece tells a unique story of tradition and craftsmanship',
    'gal9' => 'Batik Gallery',
    'galmodel1' => 'Roda Dhamma',
    'galmodel2' => 'Daun Bodhi',
    'galmodel3' => 'Bunga Teratai',
    'galmodel4' => 'Gajah Oling',
    'galmodel5' => 'Parang',
    'galmodel6' => 'Kawung',
    'galmodel7' => 'Naga',
    'galmodel8' => 'Liris',
    'galmodel9' => 'Sidomukti',
    'galmodel10' => 'Sekar Jagad',
    'galmodel11' => 'Truntum',
    'galmodel12' => 'Ceplok',
    'galmodel13' => 'Custom',
    'caremodel' => 'Batik Care Guide',
    'caremodel1' => 'Washing',
    'caremodel2' => 'Drying',
    'caremodel3' => 'Ironing',
    'caremodel4' => 'Storage',
    'subcaremodel1' => 'Wash with cold water and mild detergent',
    'subcaremodel2' => 'Dry in shade, avoid direct sunlight',
    'subcaremodel3' => 'Iron with medium heat on reverse side',
    'subcaremodel4' => 'Store in dry place, avoid plastic bags',
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

// Gallery image arrays
$galleryImages = [
    '1' => [
        'assets/img/galeri/rodadhamma/img1.jpg',
        'assets/img/galeri/rodadhamma/img2.jpg',
        'assets/img/galeri/rodadhamma/img3.jpg',
        'assets/img/galeri/rodadhamma/img4.jpg',
        'assets/img/galeri/rodadhamma/img5.jpg',
        'assets/img/galeri/rodadhamma/img6.jpg',
        'assets/img/galeri/rodadhamma/img7.jpg',
        'assets/img/galeri/rodadhamma/img8.jpg',
        'assets/img/galeri/rodadhamma/img9.jpg'
    ],
    '2' => [
        'assets/img/galeri/daunbodhi/img1.jpg',
        'assets/img/galeri/daunbodhi/img2.jpg',
        'assets/img/galeri/daunbodhi/img3.jpg',
        'assets/img/galeri/daunbodhi/img4.jpg',
        'assets/img/galeri/daunbodhi/img5.jpg',
        'assets/img/galeri/daunbodhi/img6.jpg',
        'assets/img/galeri/daunbodhi/img7.jpg',
        'assets/img/galeri/daunbodhi/img8.jpg',
        'assets/img/galeri/daunbodhi/img9.jpg',
        'assets/img/galeri/daunbodhi/img10.jpg'
    ],
    '3' => [
        'assets/img/galeri/bungateratai/img1.jpg',
        'assets/img/galeri/bungateratai/img2.jpg',
        'assets/img/galeri/bungateratai/img3.jpg',
        'assets/img/galeri/bungateratai/img4.jpg',
        'assets/img/galeri/bungateratai/img5.jpg',
        'assets/img/galeri/bungateratai/img6.jpg',
        'assets/img/galeri/bungateratai/img7.jpg',
        'assets/img/galeri/bungateratai/img8.jpg',
        'assets/img/galeri/bungateratai/img9.jpg',
        'assets/img/galeri/bungateratai/img10.jpg',
        'assets/img/galeri/bungateratai/img11.jpg',
        'assets/img/galeri/bungateratai/img12.jpg'
    ],
    '4' => [
        'assets/img/galeri/gajaholing/img1.jpg',
        'assets/img/galeri/gajaholing/img2.jpg',
        'assets/img/galeri/gajaholing/img3.jpg',
        'assets/img/galeri/gajaholing/img4.jpg',
        'assets/img/galeri/gajaholing/img5.jpg',
        'assets/img/galeri/gajaholing/img6.jpg',
        'assets/img/galeri/gajaholing/img7.jpg'
    ],
    '5' => [
        'assets/img/galeri/parang/img1.jpg',
        'assets/img/galeri/parang/img2.jpg',
        'assets/img/galeri/parang/img3.jpg',
        'assets/img/galeri/parang/img4.jpg',
        'assets/img/galeri/parang/img5.jpg',
        'assets/img/galeri/parang/img6.jpg'
    ],
    '6' => [
        'assets/img/galeri/kawung/img1.jpg',
        'assets/img/galeri/kawung/img2.jpg',
        'assets/img/galeri/kawung/img3.jpg',
        'assets/img/galeri/kawung/img4.jpg',
        'assets/img/galeri/kawung/img5.jpg'
    ],
    '7' => [
        'assets/img/galeri/naga/img1.jpg',
        'assets/img/galeri/naga/img2.jpg',
        'assets/img/galeri/naga/img3.jpg',
        'assets/img/galeri/naga/img4.jpg',
        'assets/img/galeri/naga/img5.jpg',
        'assets/img/galeri/naga/img6.jpg'
    ],
    '8' => [
        'assets/img/galeri/liris/img1.jpg',
        'assets/img/galeri/liris/img2.jpg',
        'assets/img/galeri/liris/img3.jpg',
        'assets/img/galeri/liris/img4.jpg',
        'assets/img/galeri/liris/img5.jpg',
        'assets/img/galeri/liris/img6.jpg',
        'assets/img/galeri/liris/img7.jpg'
    ],
    '9' => [
        'assets/img/galeri/custom/img1.jpg',
        'assets/img/galeri/custom/img2.jpg',
        'assets/img/galeri/custom/img3.jpg',
        'assets/img/galeri/custom/img4.jpg',
        'assets/img/galeri/custom/img5.jpg',
        'assets/img/galeri/custom/img6.jpg',
        'assets/img/galeri/custom/img7.jpg',
        'assets/img/galeri/custom/img8.jpg',
        'assets/img/galeri/custom/img9.jpg',
        'assets/img/galeri/custom/img10.jpg',
        'assets/img/galeri/custom/img11.jpg',
        'assets/img/galeri/custom/img12.jpg',
        'assets/img/galeri/custom/img13.jpg',
        'assets/img/galeri/custom/img14.jpg',
        'assets/img/galeri/custom/img15.jpg',
        'assets/img/galeri/custom/img16.jpg',
        'assets/img/galeri/custom/img17.jpg'
    ]
];

$galleryItems = [
    ["img" => "img-1.jpg", "title" => safe($lang['galmodel1']), "designation" => safe($lang['titlehome'])],
    ["img" => "img-2.jpg", "title" => safe($lang['galmodel2']), "designation" => safe($lang['titlehome'])],
    ["img" => "img-3.jpg", "title" => safe($lang['galmodel3']), "designation" => safe($lang['titlehome'])],
    ["img" => "img-4.jpg", "title" => safe($lang['galmodel4']), "designation" => safe($lang['titlehome'])],
    ["img" => "img-5.jpg", "title" => safe($lang['galmodel5']), "designation" => safe($lang['titlehome'])],
    ["img" => "img-6.jpg", "title" => safe($lang['galmodel6']), "designation" => safe($lang['titlehome'])],
    ["img" => "img-7.jpg", "title" => safe($lang['galmodel7']), "designation" => safe($lang['titlehome'])],
    ["img" => "img-8.jpg", "title" => safe($lang['galmodel8']), "designation" => safe($lang['titlehome'])],
    ["img" => "img-9.jpg", "title" => safe($lang['galmodel9']), "designation" => safe($lang['titlehome'])],
    ["img" => "img-10.jpg", "title" => safe($lang['galmodel10']), "designation" => safe($lang['titlehome'])],
    ["img" => "img-11.jpg", "title" => safe($lang['galmodel11']), "designation" => safe($lang['titlehome'])],
    ["img" => "img-12.jpg", "title" => safe($lang['galmodel12']), "designation" => safe($lang['titlehome'])],
];
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Gallery - <?php echo safe($lang['titlehome']); ?></title>
    <meta name="description" content="Batik Gallery of Kinnara Kinnari - Traditional and modern batik collections">
    <meta name="author" content="MFNF">
    <meta name="robots" content="INDEX, FOLLOW">
    
    <!-- Fonts & Icons -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;14..32,400;14..32,500;14..32,600;14..32,700;14..32,800&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <style>
        /* ============================================
           MODERN ELEGANT CSS - Gallery Page
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

        /* ========== GALLERY SECTION ========== */
        .space {
            padding: 80px 0;
            background: linear-gradient(135deg, #fefcf8 0%, #faf6ef 100%);
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
            font-size: 16px;
            color: #8a7a6e;
            line-height: 1.6;
            max-width: 700px;
            margin: 20px auto 0;
        }

        /* Gallery Grid */
        .row {
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
        }

        .col-lg-4 {
            flex: 1 1 calc(33.333% - 30px);
            min-width: 280px;
        }

        .col-md-6 {
            flex: 1 1 calc(50% - 30px);
            min-width: 250px;
        }

        .th-team {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            transition: all 0.4s ease;
            box-shadow: 0 10px 30px rgba(59, 34, 25, 0.08);
            animation: cardFadeUp 0.6s ease-out forwards;
            opacity: 0;
        }

        .th-team:nth-child(1) { animation-delay: 0.05s; }
        .th-team:nth-child(2) { animation-delay: 0.1s; }
        .th-team:nth-child(3) { animation-delay: 0.15s; }
        .th-team:nth-child(4) { animation-delay: 0.2s; }
        .th-team:nth-child(5) { animation-delay: 0.25s; }
        .th-team:nth-child(6) { animation-delay: 0.3s; }
        .th-team:nth-child(7) { animation-delay: 0.35s; }
        .th-team:nth-child(8) { animation-delay: 0.4s; }
        .th-team:nth-child(9) { animation-delay: 0.45s; }
        .th-team:nth-child(10) { animation-delay: 0.5s; }
        .th-team:nth-child(11) { animation-delay: 0.55s; }
        .th-team:nth-child(12) { animation-delay: 0.6s; }

        @keyframes cardFadeUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .th-team:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(59, 34, 25, 0.15);
        }

        .box-img {
            position: relative;
            overflow: hidden;
            aspect-ratio: 1 / 1;
        }

        .box-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .th-team:hover .box-img img {
            transform: scale(1.05);
        }

        .box-content {
            padding: 20px;
            text-align: center;
        }

        .box-title {
            font-size: 18px;
            font-weight: 700;
            color: #3B2219;
            margin-bottom: 5px;
        }

        .box-desig {
            font-size: 13px;
            color: #D2B48C;
            font-weight: 500;
        }

        /* ========== TAB SECTION ========== */
        .tab-menu1 {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 12px;
            margin: 30px 0 40px;
        }

        .tab-btn {
            background: transparent;
            border: 2px solid #D2B48C;
            padding: 10px 24px;
            border-radius: 50px;
            font-size: 14px;
            font-weight: 600;
            color: #3B2219;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .tab-btn.active,
        .tab-btn:hover {
            background: linear-gradient(135deg, #D2B48C, #c4a265);
            color: #3B2219;
            border-color: transparent;
            transform: translateY(-2px);
        }

        .tab-content {
            margin-top: 30px;
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

        /* Gallery Cards */
        .gallery-card {
            position: relative;
            border-radius: 16px;
            overflow: hidden;
            aspect-ratio: 1 / 1;
            cursor: pointer;
        }

        .gallery-card .box-img {
            width: 100%;
            height: 100%;
        }

        .gallery-card .box-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .gallery-card:hover .box-img img {
            transform: scale(1.08);
        }

        .gallery-card .box-content {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(to top, rgba(59, 34, 25, 0.9), transparent);
            padding: 20px;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .gallery-card:hover .box-content {
            opacity: 1;
        }

        .box-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 45px;
            height: 45px;
            background: #D2B48C;
            border-radius: 50%;
            color: #3B2219;
            font-size: 20px;
            transition: all 0.3s ease;
        }

        .box-btn:hover {
            transform: scale(1.1);
            background: white;
        }

        .filter-item {
            animation: fadeScale 0.4s ease;
        }

        @keyframes fadeScale {
            from {
                opacity: 0;
                transform: scale(0.9);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        /* Process Section */
        .process-box-wrap {
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
            justify-content: center;
            margin-top: 50px;
        }

        .process-box {
            flex: 1 1 220px;
            text-align: center;
            padding: 30px 20px;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            transition: all 0.3s ease;
        }

        .process-box:hover {
            transform: translateY(-5px);
            background: rgba(255, 255, 255, 0.15);
        }

        .box-number {
            font-size: 48px;
            font-weight: 800;
            color: #D2B48C;
            margin-bottom: 15px;
        }

        .process-box .box-title {
            font-size: 18px;
            font-weight: 700;
            color: white;
            margin-bottom: 10px;
        }

        .process-box .box-text {
            font-size: 13px;
            color: rgba(255, 255, 255, 0.8);
            line-height: 1.5;
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
            .col-lg-4, .col-md-6 { flex: 1 1 calc(50% - 30px); }
            .sec-title { font-size: 32px; }
            .breadcumb-title { font-size: 36px; }
            .space { padding: 60px 0; }
            .tab-btn { padding: 8px 18px; font-size: 13px; }
            .process-box { flex: 1 1 calc(50% - 30px); }
        }

        @media (max-width: 768px) {
            .container { padding: 0 20px; }
            .col-lg-4, .col-md-6 { flex: 1 1 100%; }
            .sec-title { font-size: 28px; }
            .breadcumb-title { font-size: 28px; }
            .breadcumb-wrapper { padding: 60px 0; }
            .space { padding: 50px 0; }
            .tab-menu1 { gap: 10px; }
            .tab-btn { padding: 6px 14px; font-size: 12px; }
            .process-box { flex: 1 1 100%; }
        }

        @media (max-width: 480px) {
            .sec-title { font-size: 24px; }
            .breadcumb-title { font-size: 24px; }
            .box-number { font-size: 36px; }
        }

        /* Utility Classes */
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
        .text-center { text-align: center; }
        .text-white { color: white; }
        .gy-30 { gap: 30px; }
        .gy-4 { gap: 30px; }
        .ms-2 { margin-left: 8px; }
        .mt-n3 { margin-top: -12px; }
        .mt-lg-0 { margin-top: 0; }
        .z-index-common { position: relative; z-index: 2; }
        .overflow-hidden { overflow: hidden; }
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
                        <li><a href="profil.php?cta=1#cta"><?php echo safe($lang['prof3'] ?? 'Our Story'); ?></a></li>
                        <li><a href="profil.php?cta=2#cta"><?php echo safe($lang['prof5'] ?? 'Vision & Mission'); ?></a></li>
                        <li><a href="profil.php#testi-sec"><?php echo safe($lang['prof7'] ?? 'Testimonials'); ?></a></li>
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
                                        <li><a href="profil.php?cta=1#cta"><?php echo safe($lang['prof3'] ?? 'Our Story'); ?></a></li>
                                        <li><a href="profil.php?cta=2#cta"><?php echo safe($lang['prof5'] ?? 'Vision & Mission'); ?></a></li>
                                        <li><a href="profil.php#testi-sec"><?php echo safe($lang['prof7'] ?? 'Testimonials'); ?></a></li>
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
            <h1 class="breadcumb-title"><?php echo safe($lang['gal1']); ?></h1>
            <ul class="breadcumb-menu">
                <li><a href="index.php"><?php echo safe($lang['home']); ?></a></li>
                <li><?php echo safe($lang['gal1']); ?></li>
            </ul>
        </div>
    </div>
</div>

<!-- Gallery Collection Section -->
<section class="space">
    <div class="container">
        <div class="title-area">
            <span class="sub-title"><?php echo safe($lang['titlehome']); ?></span>
            <h2 class="sec-title"><?php echo safe($lang['gal1']); ?></h2>
            <p class="sec-text">
                <?php echo safe($lang['gal2']); ?><br>
                1. <?php echo safe($lang['gal3']); ?><br>
                2. <?php echo safe($lang['gal4']); ?><br>
                3. <?php echo safe($lang['gal5']); ?>
            </p>
        </div>
        <div class="row gy-30" style="display: flex; flex-wrap: wrap; gap: 30px; justify-content: center;">
            <?php foreach ($galleryItems as $item): ?>
            <div class="col-lg-4 col-md-6">
                <div class="th-team">
                    <div class="box-img">
                        <img src="assets/img/header-batik/<?php echo safe($item['img']); ?>" alt="<?php echo $item['title']; ?>" loading="lazy">
                    </div>
                    <div class="box-content">
                        <h3 class="box-title"><?php echo $item['title']; ?></h3>
                        <p class="box-desig"><?php echo $item['designation']; ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Detailed Gallery Section with Tabs -->
<section class="space" id="galery" style="padding-top: 0;">
    <div class="container">
        <div class="row justify-content-between align-items-center" style="display: flex; flex-wrap: wrap; align-items: center;">
            <div class="col-lg-12">
                <div class="title-area text-center">
                    <span class="sub-title"><?php echo safe($lang['titlehome']); ?></span>
                    <h2 class="sec-title"><?php echo safe($lang['gal9']); ?></h2>
                    <p class="sec-text">
                        <?php echo safe($lang['gal7']); ?><br>
                        <?php echo safe($lang['gal8']); ?>
                    </p>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="tab-menu1">
                    <button class="tab-btn <?php echo ($ctaType == '1') ? 'active' : ''; ?>" data-tab="tab1"><?php echo safe($lang['galmodel1']); ?></button>
                    <button class="tab-btn <?php echo ($ctaType == '2') ? 'active' : ''; ?>" data-tab="tab2"><?php echo safe($lang['galmodel2']); ?></button>
                    <button class="tab-btn <?php echo ($ctaType == '3') ? 'active' : ''; ?>" data-tab="tab3"><?php echo safe($lang['galmodel3']); ?></button>
                    <button class="tab-btn <?php echo ($ctaType == '4') ? 'active' : ''; ?>" data-tab="tab4"><?php echo safe($lang['galmodel4']); ?></button>
                    <button class="tab-btn <?php echo ($ctaType == '5') ? 'active' : ''; ?>" data-tab="tab5"><?php echo safe($lang['galmodel5']); ?></button>
                    <button class="tab-btn <?php echo ($ctaType == '6') ? 'active' : ''; ?>" data-tab="tab6"><?php echo safe($lang['galmodel6']); ?></button>
                    <button class="tab-btn <?php echo ($ctaType == '7') ? 'active' : ''; ?>" data-tab="tab7"><?php echo safe($lang['galmodel7']); ?></button>
                    <button class="tab-btn <?php echo ($ctaType == '8') ? 'active' : ''; ?>" data-tab="tab8"><?php echo safe($lang['galmodel8']); ?></button>
                    <button class="tab-btn <?php echo ($ctaType == '9') ? 'active' : ''; ?>" data-tab="tab9"><?php echo safe($lang['galmodel13']); ?></button>
                </div>
            </div>
        </div>
        
        <div class="tab-content">
            <?php for($i = 1; $i <= 9; $i++): ?>
            <div class="tab-pane <?php echo ($ctaType == $i) ? 'active' : ''; ?>" id="tab<?php echo $i; ?>">
                <div class="row gy-30" style="display: flex; flex-wrap: wrap; gap: 30px;">
                    <?php if(isset($galleryImages[$i])): ?>
                        <?php foreach($galleryImages[$i] as $image): ?>
                        <div class="col-lg-3 col-md-6 filter-item">
                            <div class="gallery-card">
                                <a class="box-img popup-image" href="<?php echo safe($image); ?>" target="_blank">
                                    <img src="<?php echo safe($image); ?>" alt="Gallery Image" loading="lazy">
                                    <div class="box-content">
                                        <span class="box-btn"><i class="fas fa-plus"></i></span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
            <?php endfor; ?>
        </div>
    </div>
</section>

<!-- Batik Care Guide Section -->
<section class="space" id="process-sec" style="background: linear-gradient(135deg, #3B2219 0%, #2a1a12 100%); position: relative;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8">
                <div class="title-area text-center">
                    <span class="sub-title" style="background: rgba(210, 180, 140, 0.2);"><?php echo safe($lang['titlehome']); ?></span>
                    <h2 class="sec-title text-white"><?php echo safe($lang['caremodel']); ?></h2>
                </div>
            </div>
        </div>
        <div class="process-box-wrap">
            <?php
            $processSteps = [
                ["number" => "01", "title" => safe($lang['caremodel1']), "text" => safe($lang['subcaremodel1'])],
                ["number" => "02", "title" => safe($lang['caremodel2']), "text" => safe($lang['subcaremodel2'])],
                ["number" => "03", "title" => safe($lang['caremodel3']), "text" => safe($lang['subcaremodel3'])],
                ["number" => "04", "title" => safe($lang['caremodel4']), "text" => safe($lang['subcaremodel4'])]
            ];
            foreach ($processSteps as $step):
            ?>
            <div class="process-box">
                <div class="box-number"><?php echo $step['number']; ?></div>
                <div class="box-content">
                    <h3 class="box-title"><?php echo $step['title']; ?></h3>
                    <p class="box-text"><?php echo $step['text']; ?></p>
                </div>
            </div>
            <?php endforeach; ?>
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

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Mobile Menu Toggle
    const menuWrapper = document.querySelector('.th-menu-wrapper');
    const menuToggleBtns = document.querySelectorAll('.th-menu-toggle');
    const menuOverlay = document.querySelector('.menu-overlay');
    
    function openMenu() { 
        menuWrapper.classList.add('active'); 
        menuOverlay.classList.add('active'); 
        document.body.style.overflow = 'hidden'; 
    }
    
    function closeMenu() { 
        menuWrapper.classList.remove('active'); 
        menuOverlay.classList.remove('active'); 
        document.body.style.overflow = ''; 
    }
    
    menuToggleBtns.forEach(btn => {
        btn.addEventListener('click', (e) => { 
            e.stopPropagation(); 
            menuWrapper.classList.contains('active') ? closeMenu() : openMenu(); 
        });
    });
    
    if (menuOverlay) menuOverlay.addEventListener('click', closeMenu);

    // Mobile Submenu Accordion
    document.querySelectorAll('.th-mobile-menu .menu-item-has-children > a').forEach(item => {
        item.addEventListener('click', (e) => {
            e.preventDefault();
            const parentLi = item.parentElement;
            const submenu = parentLi.querySelector('.sub-menu');
            if (submenu) { 
                submenu.classList.toggle('active'); 
                parentLi.classList.toggle('active'); 
            }
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
            const tabNumber = tabId.replace('tab', '');
            url.searchParams.set('cta', tabNumber);
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
    
    if (scrollTop) {
        scrollTop.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));
    }

    // Image popup lightbox
    const popupImages = document.querySelectorAll('.popup-image');
    popupImages.forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            const imgUrl = link.getAttribute('href');
            window.open(imgUrl, '_blank', 'noopener,noreferrer');
        });
    });
});
</script>
</body>
</html>