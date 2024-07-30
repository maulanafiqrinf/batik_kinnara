<?php
session_start();
if (isset($_GET['lang'])) {
    $_SESSION['lang'] = $_GET['lang'];
}

$lang = isset($_SESSION['lang']) ? $_SESSION['lang'] : 'id';
$lang_file = "lang/{$lang}.php";
if (file_exists($lang_file)) {
    include $lang_file;
} else {
    echo "Language file not found.";
    exit;
}
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <?php include 'pages/components/head.php'; ?>
</head>

<body>
    <?php include 'pages/components/preloader.php'; ?>
    <?php include 'pages/components/navbar.php'; ?>
    <?php include 'pages/gallery/breadcumb.php'; ?>
    <?php include 'pages/gallery/hero.php'; ?>
    <?php
    $ctaType = isset($_GET['cta']) ? $_GET['cta'] : '1';
    if ($ctaType === '1') {
        include 'pages/gallery/cta1.php';
    } else if ($ctaType === '2') {
        include 'pages/gallery/cta2.php';
    } else if ($ctaType === '3') {
        include 'pages/gallery/cta3.php';
    } else if ($ctaType === '4') {
        include 'pages/gallery/cta4.php';
    } else if ($ctaType === '5') {
        include 'pages/gallery/cta5.php';
    } else if ($ctaType === '6') {
        include 'pages/gallery/cta6.php';
    } else if ($ctaType === '7') {
        include 'pages/gallery/cta7.php';
    } else if ($ctaType === '8') {
        include 'pages/gallery/cta8.php';
    } else if ($ctaType === '9') {
        include 'pages/gallery/cta9.php';
    }
    ?>
    <?php include 'pages/gallery/process.php'; ?>

    <?php include 'pages/components/footer.php'; ?>

    <div class="scroll-top"><svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
            </path>
        </svg></div>
    <script src="assets/js/vendor/jquery-3.7.1.min.js"></script>
    <script src="assets/js/app.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>