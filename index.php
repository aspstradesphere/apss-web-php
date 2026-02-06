<?php
/**
 * APSS TradeSphere - Main Entry Point
 * WordPress to PHP Migration
 */

// Start session for any future needs
session_start();

// Include helper functions
require_once 'includes/functions.php';

// Map URLs to page files
$page_map = [
    'home' => 'pages/home.php',
    '' => 'pages/home.php',
    'about' => 'pages/about.php',
    'about-us' => 'pages/about.php',
    'contact' => 'pages/contact.php',
    'contact-us' => 'pages/contact.php',
    'policies' => 'pages/policies.php',
    'business-policies' => 'pages/policies.php',

    // Product pages
    'turmeric' => 'pages/products/turmeric.php',
    'red-chilli' => 'pages/products/red-chilli.php',
    'black-pepper' => 'pages/products/black-pepper.php',
    'coriander' => 'pages/products/coriander.php',
    'clove' => 'pages/products/clove.php',
    'coconut-oil' => 'pages/products/coconut-oil.php',
    'chicken-masala' => 'pages/products/chicken-masala.php',
    'garam-masala' => 'pages/products/garam-masala.php',
    'sambhar-powder' => 'pages/products/sambhar-powder.php',
    'mutton-masala' => 'pages/products/mutton-masala.php',
    'makhana' => 'pages/products/makhana.php',
    'basmati-rice' => 'pages/products/basmati-rice.php',
    'areca-leaf-items' => 'pages/products/areca-leaf-items.php',
    'honey' => 'pages/products/honey.php',
    'maize' => 'pages/products/maize.php',
    'sugar-cane-items' => 'pages/products/sugar-cane-items.php',
    'virtual-shop' => 'pages/virtual-shop.php',
];

// ROBUST ROUTING LOGIC
// --------------------
// Parse the Request URI directly to avoid reliance on .htaccess parameter passing
// which can vary by server configuration (especially in subdirectories).

$request_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$script_name = $_SERVER['SCRIPT_NAME'];
$script_dir = dirname($script_name);

// Normalize paths to forward slashes (fix Windows backward slashes)
$request_uri = str_replace('\\', '/', $request_uri);
$script_dir = str_replace('\\', '/', $script_dir);

// Remove script directory from URI to get the relative path
// Example: '/apps/about-us' minus '/apps' becomes '/about-us'
$base = rtrim($script_dir, '/');
$path = '';

if (!empty($base) && strpos($request_uri, $base) === 0) {
    $path = substr($request_uri, strlen($base));
} else {
    $path = $request_uri;
}

$path = ltrim($path, '/');

// Remove index.php from the path if it exists
if (stripos($path, 'index.php') === 0) {
    $path = substr($path, 9); // length of index.php
    $path = ltrim($path, '/');
}

// Clean the path to get the page slug
// 1. Decode URL (e.g. %20 -> space)
$page = urldecode($path);
// 2. Remove file extension .php if user typed it
$page = str_ireplace('.php', '', $page);
// 3. Keep only alphanumeric and dashes for security & mapping
$page = preg_replace('/[^a-z0-9\-]/', '', strtolower($page));

// Default to home if empty
if (empty($page)) {
    $page = 'home';
}

// Special case: If the original query param 'page' was explicitly passed (e.g. from router.php or rewriting), 
// and our URI parsing failed to find a non-home page (e.g. result was empty), 
// we should respect the query param if it's different.
// This handles cases where RewriteRule ^(.*)$ index.php?page=$1 works better than URI parsing.
if ($page === 'home' && isset($_GET['page']) && !empty($_GET['page'])) {
    $param_page = preg_replace('/[^a-z0-9\-]/', '', strtolower($_GET['page']));
    // Only accept if it's not home and exists in map
    if ($param_page !== 'home' && isset($page_map[$param_page])) {
        $page = $param_page;
    }
}

// Lookup page in the map
$page_file = null;
// 1. Check for old WordPress params -> 410 Gone
// 1. Check for old WordPress / WooCommerce params -> 410 Gone
if (
    isset($_GET['p']) ||
    isset($_GET['page_id']) ||
    isset($_GET['feed']) ||
    isset($_GET['m']) ||          // archive by month/year
    isset($_GET['cat']) ||        // category archive
    isset($_GET['tag']) ||        // tag archive
    isset($_GET['wc-ajax'])       // WooCommerce AJAX endpoint
) {
    header("HTTP/1.1 410 Gone");
    $page_file = 'pages/404.php';
    $page = '404';
}
// 2. Check if valid page exists in map
elseif (isset($page_map[$page])) {
    $page_file = $page_map[$page];
}
// 3. Otherwise -> 404 Not Found
else {
    header("HTTP/1.0 404 Not Found");
    $page_file = 'pages/404.php';
    $page = '404';
}

// Set page-specific variables for SEO
$page_title = get_page_title($page);
$page_description = get_page_description($page);
$page_keywords = get_page_keywords($page);

// Generate CSRF token for forms
generate_csrf_token();

// Include header
include 'includes/header.php';

// Include the requested page content
if (file_exists($page_file)) {
    include $page_file;
} else {
    echo "<h1>Error: Page file not found ($page_file).</h1>";
}

// Include footer
include 'includes/footer.php';
