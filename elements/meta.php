<?php 

$picname = "picname.jpg";

$host = $_SERVER["HTTP_HOST"];
$path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
$baseUrl = $host . $path;
?>

<title><?php echo $title ?></title>
<meta name="description" content="<?php echo $message ?>">
<meta name="title" content="<?php echo $title ?>">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://<?php echo $baseUrl; ?>">
<meta property="og:title" content="<?php echo $title ?>">
<meta property="og:description" content="<?php echo $message ?>">
<meta property="og:image" content="https://<?php echo $baseUrl . $picname; ?>">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://<?php echo $baseUrl; ?>">
<meta property="twitter:title" content="<?php echo $title ?>">
<meta property="twitter:description" content="<?php echo $message ?>">
<meta property="twitter:image" content="https://<?php echo $baseUrl . $picname; ?>">
