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

    // Fallback language array for contact page
    $default_lang = [
    'titlehome'     => 'Batik Kinnara Kinnari',
    'home'          => 'Home',
    'prof1'         => 'Profile',
    'prof13'        => 'Batik Kinnara Kinnari is a batik production house located in Sumberagung Village, Pesanggaran District, Banyuwangi Regency.',
    'gal1'          => 'Gallery',
    'price1'        => 'Pricing',
    'contact'       => 'Contact',
    'language'      => 'Language',
    'languageID'    => 'Indonesia',
    'languageEG'    => 'English',
    'titlecontact'  => 'Contact Us',
    'titlecontact1' => 'Our Address',
    'titlecontact2' => 'Sumberagung, Pesanggaran, Banyuwangi',
    'con1'          => '+62 852 3421 8387',
    'con2'          => '@kinnarakinnari',
    'con3'          => 'Kinnara Kinnari Batik',
    'con4'          => 'Shopee Store',
    'con5'          => 'Open Google Maps',
    'con6'          => 'WhatsApp',
    'con7'          => 'Instagram',
    'con8'          => 'Facebook',
    'con9'          => 'Online Store',
    ];

    if (file_exists($lang_file)) {
    include $lang_file;
    } else {
    $lang = $default_lang;
    }

    // Function to safely output text
    function safe($text, $default = '')
    {
    return htmlspecialchars($text ?? $default, ENT_QUOTES, 'UTF-8');
    }
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Contact - <?php echo safe($lang['titlehome']); ?></title>
    <meta name="description" content="Contact Batik Kinnara Kinnari - Batik production house in Banyuwangi">
    <meta name="author" content="MFNF">
    <meta name="robots" content="INDEX, FOLLOW">

    <!-- Fonts & Icons -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;14..32,400;14..32,500;14..32,600;14..32,700;14..32,800&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        /* ============================================
           MODERN ELEGANT CSS - Contact Page
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

        /* ========== CONTACT SECTION ========== */
        .space {
            padding: 80px 0;
            position: relative;
            background: linear-gradient(135deg, #fefcf8 0%, #faf6ef 100%);
        }

        .title-area {
            text-align: center;
            margin-bottom: 50px;
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

        /* Contact Cards Grid */
        .row {
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
        }

        .col-xl-4 {
            flex: 1 1 calc(33.333% - 30px);
            min-width: 280px;
        }

        .col-md-6 {
            flex: 1 1 calc(50% - 30px);
            min-width: 250px;
        }

        .team-contact {
            background: white;
            border-radius: 20px;
            padding: 35px 25px;
            text-align: center;
            transition: all 0.4s cubic-bezier(0.2, 0.9, 0.4, 1.1);
            box-shadow: 0 10px 30px rgba(59, 34, 25, 0.08);
            animation: fadeInUp 0.6s ease-out forwards;
            opacity: 0;
            height: 100%;
        }

        .team-contact:nth-child(1) { animation-delay: 0.1s; }
        .team-contact:nth-child(2) { animation-delay: 0.15s; }
        .team-contact:nth-child(3) { animation-delay: 0.2s; }
        .team-contact:nth-child(4) { animation-delay: 0.25s; }
        .team-contact:nth-child(5) { animation-delay: 0.3s; }

        .team-contact:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(59, 34, 25, 0.15);
        }

        .icon-btn {
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, #D2B48C, #c4a265);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            transition: all 0.3s ease;
        }

        .team-contact:hover .icon-btn {
            transform: scale(1.1);
        }

        .icon-btn i {
            font-size: 32px;
            color: #3B2219;
        }

        .box-title {
            font-size: 18px;
            font-weight: 700;
            color: #3B2219;
            margin-bottom: 8px;
        }

        .box-text {
            font-size: 14px;
            color: #8a7a6e;
            margin-bottom: 5px;
        }

        .team-contact .box-text a,
        .team-contact .box-title a {
            color: #3B2219;
            transition: color 0.3s ease;
        }

        .team-contact .box-text a:hover,
        .team-contact .box-title a:hover {
            color: #D2B48C;
        }

        .gy-4 {
            gap: 30px;
        }

        /* Map Button */
        .map-btn-wrapper {
            text-align: center;
            margin-top: 40px;
        }

        .map-btn {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            background: linear-gradient(135deg, #3B2219, #2a1a12);
            color: white;
            padding: 14px 32px;
            border-radius: 50px;
            font-weight: 600;
            font-size: 15px;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .map-btn::before {
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

        .map-btn:hover::before {
            width: 300px;
            height: 300px;
        }

        .map-btn:hover {
            background: linear-gradient(135deg, #D2B48C, #c4a265);
            color: #3B2219;
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(210, 180, 140, 0.3);
        }

        .map-btn i {
            transition: transform 0.3s ease;
        }

        .map-btn:hover i {
            transform: translateX(5px);
        }

        /* Google Map */
        .contact-map {
            width: 100%;
            height: 450px;
            overflow: hidden;
        }

        .contact-map iframe {
            width: 100%;
            height: 100%;
            border: 0;
            filter: grayscale(0.1) contrast(1.05);
            transition: filter 0.3s ease;
        }

        .contact-map iframe:hover {
            filter: grayscale(0) contrast(1);
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
            .col-xl-4, .col-md-6 { flex: 1 1 calc(50% - 30px); }
            .sec-title { font-size: 32px; }
            .breadcumb-title { font-size: 36px; }
            .space { padding: 60px 0; }
        }

        @media (max-width: 768px) {
            .container { padding: 0 20px; }
            .col-xl-4, .col-md-6 { flex: 1 1 100%; }
            .sec-title { font-size: 28px; }
            .breadcumb-title { font-size: 28px; }
            .breadcumb-wrapper { padding: 60px 0; }
            .space { padding: 50px 0; }
            .team-contact { padding: 25px 20px; }
            .contact-map { height: 350px; }
        }

        @media (max-width: 480px) {
            .sec-title { font-size: 24px; }
            .breadcumb-title { font-size: 24px; }
            .icon-btn { width: 55px; height: 55px; }
            .icon-btn i { font-size: 24px; }
            .map-btn { padding: 12px 24px; font-size: 14px; }
            .contact-map { height: 280px; }
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
        .gy-2 { row-gap: 8px; }
        .ms-2 { margin-left: 8px; }
        .mt-4 { margin-top: 20px; }
        .w-100 { width: 100%; }
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
                            <a href="#"><?php echo safe($lang['gal6'] ?? 'Collections'); ?></a>
                            <ul class="sub-menu">
                                <li><a href="gallery.php?cta=1#galery"><?php echo safe($lang['galmodel1'] ?? 'Kawung'); ?></a></li>
                                <li><a href="gallery.php?cta=2#galery"><?php echo safe($lang['galmodel2'] ?? 'Parang'); ?></a></li>
                                <li><a href="gallery.php?cta=3#galery"><?php echo safe($lang['galmodel3'] ?? 'Megamendung'); ?></a></li>
                                <li><a href="gallery.php?cta=4#galery"><?php echo safe($lang['galmodel4'] ?? 'Sidomukti'); ?></a></li>
                                <li><a href="gallery.php?cta=5#galery"><?php echo safe($lang['galmodel5'] ?? 'Truntum'); ?></a></li>
                                <li><a href="gallery.php?cta=6#galery"><?php echo safe($lang['galmodel6'] ?? 'Sekar Jagad'); ?></a></li>
                                <li><a href="gallery.php?cta=7#galery"><?php echo safe($lang['galmodel7'] ?? 'Ceplok'); ?></a></li>
                                <li><a href="gallery.php?cta=8#galery"><?php echo safe($lang['galmodel8'] ?? 'Tambal'); ?></a></li>
                                <li><a href="gallery.php?cta=9#galery"><?php echo safe($lang['galmodel13'] ?? 'Modern Batik'); ?></a></li>
                            </ul>
                        </li>
                        <li><a href="gallery.php#process-sec"><?php echo safe($lang['caremodel'] ?? 'Care Guide'); ?></a></li>
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
                                            <a href="#"><?php echo safe($lang['gal6'] ?? 'Collections'); ?></a>
                                            <ul class="sub-menu">
                                                <li><a href="gallery.php?cta=1#galery"><?php echo safe($lang['galmodel1'] ?? 'Kawung'); ?></a></li>
                                                <li><a href="gallery.php?cta=2#galery"><?php echo safe($lang['galmodel2'] ?? 'Parang'); ?></a></li>
                                                <li><a href="gallery.php?cta=3#galery"><?php echo safe($lang['galmodel3'] ?? 'Megamendung'); ?></a></li>
                                                <li><a href="gallery.php?cta=4#galery"><?php echo safe($lang['galmodel4'] ?? 'Sidomukti'); ?></a></li>
                                                <li><a href="gallery.php?cta=5#galery"><?php echo safe($lang['galmodel5'] ?? 'Truntum'); ?></a></li>
                                                <li><a href="gallery.php?cta=6#galery"><?php echo safe($lang['galmodel6'] ?? 'Sekar Jagad'); ?></a></li>
                                                <li><a href="gallery.php?cta=7#galery"><?php echo safe($lang['galmodel7'] ?? 'Ceplok'); ?></a></li>
                                                <li><a href="gallery.php?cta=8#galery"><?php echo safe($lang['galmodel8'] ?? 'Tambal'); ?></a></li>
                                                <li><a href="gallery.php?cta=9#galery"><?php echo safe($lang['galmodel13'] ?? 'Modern Batik'); ?></a></li>
                                            </ul>
                                        </li>
                                        <li><a href="gallery.php#process-sec"><?php echo safe($lang['caremodel'] ?? 'Care Guide'); ?></a></li>
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
            <h1 class="breadcumb-title"><?php echo safe($lang['titlecontact']); ?></h1>
            <ul class="breadcumb-menu">
                <li><a href="index.php"><?php echo safe($lang['home']); ?></a></li>
                <li><?php echo safe($lang['titlecontact']); ?></li>
            </ul>
        </div>
    </div>
</div>

<!-- Contact Section -->
<section class="space">
    <div class="container">
        <div class="title-area">
            <h2 class="sec-title"><?php echo safe($lang['titlecontact']); ?></h2>
        </div>

        <div class="row gy-4" style="display: flex; flex-wrap: wrap; gap: 30px;">
            <!-- WhatsApp -->
            <div class="col-xl-4 col-md-6">
                <div class="team-contact">
                    <div class="icon-btn"><i class="fab fa-whatsapp"></i></div>
                    <div class="media-body">
                        <p class="box-text"><?php echo safe($lang['con6'] ?? 'WhatsApp'); ?></p>
                        <h5 class="box-title"><a href="https://wa.me/6285234218387" target="_blank" rel="noopener"><?php echo safe($lang['con1'] ?? '+62 852 3421 8387'); ?></a></h5>
                    </div>
                </div>
            </div>

            <!-- Instagram -->
            <div class="col-xl-4 col-md-6">
                <div class="team-contact">
                    <div class="icon-btn"><i class="fab fa-instagram"></i></div>
                    <div class="media-body">
                        <p class="box-text"><?php echo safe($lang['con7'] ?? 'Instagram'); ?></p>
                        <h5 class="box-title"><a href="https://www.instagram.com/" target="_blank" rel="noopener"><?php echo safe($lang['con2'] ?? '@kinnarakinnari'); ?></a></h5>
                    </div>
                </div>
            </div>

            <!-- Facebook -->
            <div class="col-xl-4 col-md-6">
                <div class="team-contact">
                    <div class="icon-btn"><i class="fab fa-facebook-f"></i></div>
                    <div class="media-body">
                        <p class="box-text"><?php echo safe($lang['con8'] ?? 'Facebook'); ?></p>
                        <h5 class="box-title"><a href="https://www.facebook.com/" target="_blank" rel="noopener"><?php echo safe($lang['con3'] ?? 'Kinnara Kinnari Batik'); ?></a></h5>
                    </div>
                </div>
            </div>

            <!-- Online Store -->
            <div class="col-xl-4 col-md-6">
                <div class="team-contact">
                    <div class="icon-btn"><i class="fas fa-store"></i></div>
                    <div class="media-body">
                        <p class="box-text"><?php echo safe($lang['con9'] ?? 'Online Store'); ?></p>
                        <h5 class="box-title"><a href="#" target="_blank" rel="noopener"><?php echo safe($lang['con4'] ?? 'Shopee Store'); ?></a></h5>
                    </div>
                </div>
            </div>

            <!-- Address -->
            <div class="col-xl-4 col-md-6">
                <div class="team-contact">
                    <div class="icon-btn"><i class="fas fa-location-dot"></i></div>
                    <div class="media-body">
                        <p class="box-text"><?php echo safe($lang['titlecontact1'] ?? 'Our Address'); ?></p>
                        <h5 class="box-text"><?php echo safe($lang['titlecontact2']); ?></h5>
                    </div>
                </div>
            </div>
        </div>

        <!-- Google Maps Button -->
        <div class="map-btn-wrapper">
            <a href="https://maps.app.goo.gl/zRPtnU5Bh8cbRNXh9" target="_blank" rel="noopener" class="map-btn">
                <i class="fas fa-map-marker-alt"></i> <?php echo safe($lang['con5'] ?? 'Open Google Maps'); ?>
                <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </div>
</section>

<!-- Google Map -->
<div class="contact-map">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3945.4286184447014!2d114.05176019999999!3d-8.5547173!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd407000525cbb3%3A0x4ff70005d1ed8090!2sKinnara%20Kinnari%20Batik%20Banyuwangi!5e0!3m2!1sid!2sid!4v1720069380121!5m2!1sid!2sid"
        width="100%"
        height="100%"
        style="border:0;"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade">
    </iframe>
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
});
</script>
</body>
</html>