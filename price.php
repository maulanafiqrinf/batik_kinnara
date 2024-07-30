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
<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>

</head>
<?php include 'pages/components/head.php'; ?>

<body>

    <?php include 'pages/components/preloader.php'; ?>
    <?php include 'pages/components/navbar.php'; ?>
    <?php include 'pages/price/breadcumb.php'; ?>
    <?php include 'pages/price/hero.php'; ?>
    <?php include 'pages/components/footer.php'; ?>
    <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="
            transition: stroke-dashoffset 10ms linear 0s;
            stroke-dasharray: 307.919, 307.919;
            stroke-dashoffset: 307.919;
          "></path>
        </svg>
    </div>
    <script src="assets/js/vendor/jquery-3.7.1.min.js"></script>
    <script src="assets/js/app.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
<!-- Mirrored from html.themeholy.com/rakar/demo/pricing.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 27 Jul 2024 10:06:41 GMT -->

</html>