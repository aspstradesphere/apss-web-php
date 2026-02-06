<?php
// router.php for PHP built-in server

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Serve static files directly
$file_path = __DIR__ . urldecode($uri);
if (file_exists($file_path) && !is_dir($file_path)) {
    return false;
}

// Redirect URL handling for index.php
// Equivalent to .htaccess: RewriteRule ^(.+)$ index.php?page=$1 [QSA,L]
// But also respect ?page=query_param if present on root

$path_page = ltrim($uri, '/');

if ($path_page !== '') {
    // If we have a path (e.g. /about), use that as the page
    $_GET['page'] = $path_page;
} else {
    // If we are at root (/), check if a page query param exists
    // If not, default to 'home'
    if (empty($_GET['page'])) {
        $_GET['page'] = 'home';
    }
}

require_once 'index.php';
