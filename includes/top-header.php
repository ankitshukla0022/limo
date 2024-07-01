<?php $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
$url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>
<meta name="author" content="<?php echo isset($url) ? $url : '' ?>" />
<meta name="robots" content="index, follow" />
<meta name="rating" content="safe for kids" />
<meta name="googlebot" content=" index, follow" />
<meta name="allow-search" content="yes" />
<meta name="revisit-after" content="daily" />
<meta name="language" content="en-US" />
<meta name="distribution" content="global" />
<link rel="canonical" href="<?php echo isset($url) ? $url : '' ?>" />

  <!-- ========= style ========= -->

  <link rel="stylesheet" href="assets/css/global.css" />
  <link rel="stylesheet" href="assets/css/style.css" />
  <link rel="stylesheet" href="assets/css/responsive.css" />
  <link rel="stylesheet" href="assets/css/all.min.css" />
  <link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
  <link rel="stylesheet" href="assets/css/owl.theme.default.css" />
  <link rel="stylesheet" href="assets/css/aos.css" />

  <link rel="shortcut icon" href="assets/upload/favicon.png" type="image/x-icon">