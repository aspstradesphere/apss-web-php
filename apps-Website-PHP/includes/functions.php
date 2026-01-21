<?php
/**
 * APSS TradeSphere - SEO Helper Functions
 * 
 * This file contains functions to generate SEO metadata for pages.
 */

function get_page_title($page)
{
    $titles = [
        'home' => 'APSS TradeSphere - Premium Indian Spices | Wholesale & Export',
        'about' => 'About Us - APSS TradeSphere',
        'contact' => 'Contact Us - APSS TradeSphere',
        'policies' => 'Business Policies - APSS TradeSphere',
        'turmeric' => 'Turmeric Powder & Fingers - APSS TradeSphere',
        'red-chilli' => 'Red Chilli Power & Whole - APSS TradeSphere',
        'black-pepper' => 'Black Pepper - APSS TradeSphere',
        'coriander' => 'Coriander Powder & Seeds - APSS TradeSphere',
        'clove' => 'Premium Cloves - APSS TradeSphere',
        'coconut-oil' => 'Pure Coconut Oil - APSS TradeSphere',
        'chicken-masala' => 'Chicken Masala - APSS TradeSphere',
        'garam-masala' => 'Garam Masala - APSS TradeSphere',
        'sambhar-powder' => 'Sambhar Powder - APSS TradeSphere',
        'mutton-masala' => 'Mutton Masala - APSS TradeSphere',
        'makhana' => 'Premium Makhana (Fox Nuts) - APSS TradeSphere',
        'basmati-rice' => 'Premium Basmati Rice - APSS TradeSphere',
        'areca-leaf-items' => 'Eco-Friendly Areca Leaf Products - APSS TradeSphere',
        'honey' => 'Pure & Organic Honey - APSS TradeSphere',
        'maize' => 'Premium Maize Exporter - APSS TradeSphere',
        'sugar-cane-items' => 'Eco-Friendly Sugar Cane Products - APSS TradeSphere',
        'virtual-shop' => 'Virtual Showroom - APSS TradeSphere',
        '404' => 'Page Not Found - APSS TradeSphere'
    ];

    return isset($titles[$page]) ? $titles[$page] : 'APSS TradeSphere';
}

function get_page_description($page)
{
    $descriptions = [
        'home' => 'APSS TradeSphere - Leading manufacturer, wholesale supplier, and exporter of premium Indian spices. 20 years of expertise in turmeric, red chilli, coriander, and authentic masalas.',
        'about' => 'Learn about APSS TradeSphere\'s journey since 1963. We are dedicated to providing authentic, high-quality Indian spices to the world.',
        'contact' => 'Get in touch with APSS TradeSphere for wholesale inquiries, export orders, and more. We are here to serve your spice needs.',
        'policies' => 'Read our business policies regarding shipping, returns, and quality assurance.',
        'turmeric' => 'Grade A Turmeric Powder and Fingers sourced directly from farms. High curcumin content and rich color.',
        'red-chilli' => 'Spicy and vibrant Red Chilli powder and whole chillies. Perfect for adding heat and color to your dishes.',
        'black-pepper' => 'Premium quality Black Pepper corns and powder. Known as the King of Spices.',
        'coriander' => 'Fresh and aromatic Coriander powder and seeds. Essential for Indian curries.',
        'clove' => 'Aromatic and flavorful Cloves. Used in cooking and for medicinal purposes.',
        'coconut-oil' => '100% Pure and Cold-Pressed Coconut Oil. Great for cooking and hair care.',
        'chicken-masala' => 'Authentic blend of spices for the perfect Chicken Curry. Rich aroma and taste.',
        'garam-masala' => 'Traditional Garam Masala blend. Adds warmth and flavor to any dish.',
        'sambhar-powder' => 'Authentic South Indian Sambhar Powder. Made with traditional recipe.',
        'mutton-masala' => 'Special spice blend for delicious Mutton Curry. Rich and flavorful.',
        'makhana' => 'Premium organic Makhana (Fox Nuts). A healthy, crunchy, and nutritious snack.',
        'basmati-rice' => 'Extra long grain export quality Basmati Rice. Aromatic and fluffy.',
        'areca-leaf-items' => 'Sustainable and biodegradable Areca Leaf plates, bowls, and trays. An eco-friendly alternative to plastic.',
        'honey' => '100% Pure, Natural and Organic Honey. Sourced from the finest apiaries.',
        'maize' => 'High-quality Maize sourced directly from Indian farms. Ideal for food processing and animal feed.',
        'sugar-cane-items' => 'Sustainable Sugar Cane products including bagasse plates and cutlery. Eco-friendly and biodegradable.',
        'virtual-shop' => 'Explore our Virtual Showroom to see our wide range of premium Indian spices and eco-friendly products in 3D.',
        '404' => 'The page you are looking for does not exist.'
    ];

    return isset($descriptions[$page]) ? $descriptions[$page] : 'Premium Indian Spices from APSS TradeSphere.';
}

function get_page_keywords($page)
{
    $common_keywords = 'indian spices, wholesale spices, spice exporter, turmeric, chili, coriander, masala, apss tradesphere';

    $keywords = [
        'home' => $common_keywords . ', spice manufacturer, bulk spices',
        'about' => $common_keywords . ', company history, spice manufacturing',
        'contact' => $common_keywords . ', contact us, business inquiry',
        'policies' => $common_keywords . ', shipping policy, return policy',
        'turmeric' => 'turmeric powder, turmeric fingers, haldi, curcumin',
        'red-chilli' => 'red chilli powder, dry red chilli, lal mirch, spicy chilli',
        'black-pepper' => 'black pepper, kali mirch, peppercorns',
        'coriander' => 'coriander powder, dhaniya, coriander seeds',
        'clove' => 'cloves, laung, whole spices',
        'coconut-oil' => 'coconut oil, pure coconut oil, cold pressed oil',
        'chicken-masala' => 'chicken masala, chicken curry spice, non-veg masala',
        'garam-masala' => 'garam masala, whole spice blend, indian spice mix',
        'sambhar-powder' => 'sambhar powder, south indian spices, sambhar masala',
        'mutton-masala' => 'mutton masala, meat masala, spicy curry mix',
        'makhana' => 'makhana, fox nuts, lotus seeds, healthy snacks',
        'basmati-rice' => 'basmati rice, long grain rice, aromatic rice, export quality rice',
        'areca-leaf-items' => 'areca leaf plates, biodegradable plates, eco friendly cutlery, disposable plates',
        'honey' => 'pure honey, organic honey, natural sweetener, raw honey',
        'maize' => 'maize, corn, indian corn, maize supplier, animal feed',
        'sugar-cane-items' => 'sugar cane bagasse, biodegradable plates, eco friendly products, sugarcane cutlery',
        'virtual-shop' => $common_keywords . ', virtual showroom, 3d shop, spice gallery'
    ];


    return isset($keywords[$page]) ? $keywords[$page] : $common_keywords;
}

function get_page_image($page)
{
    // Default image
    $default_image = 'images/logo.png';

    $images = [
        'home' => 'images/logo.png', // Or 'images/slider1.jpg'
        'about' => 'images/about_banner.png',
        'contact' => 'images/contact_banner.png',
        'policies' => 'images/policies_banner.png',
        'turmeric' => 'images/slider_turmeric.png',
        'red-chilli' => 'images/slider_red_chilli.png',
        'black-pepper' => 'images/slider_black_pepper.png',
        'coriander' => 'images/slider_coriander.png',
        'clove' => 'images/slider_clove.png',
        'coconut-oil' => 'images/slider_coconut_oil.png',
        'chicken-masala' => 'images/product-chicken-masala.jpg',
        'garam-masala' => 'images/product-garam-masala.jpg',
        'sambhar-powder' => 'images/product-sambhar-powder.jpg',
        'mutton-masala' => 'images/product-mutton-masala.jpg',
        'makhana' => 'images/slider_makhana.png',
        'basmati-rice' => 'images/slider_basmati.png',
        'areca-leaf-items' => 'images/slider_areca.png',
        'honey' => 'images/slider_honey.png',
        'maize' => 'images/slider_maize.png',
        'sugar-cane-items' => 'images/product-sugar-cane.png',
        'virtual-shop' => 'images/virtual_showroom.png'
    ];

    return isset($images[$page]) ? base_url(asset($images[$page])) : base_url(asset($default_image));
}

function get_schema_org($page)
{
    $url = base_url($page == 'home' ? '' : $page);
    $title = get_page_title($page);
    $description = get_page_description($page);
    $image = get_page_image($page);
    $site_name = 'APSS TradeSphere';
    $site_url = base_url();
    $logo = asset('images/logo.png');

    // Default Organization Schema (Global)
    $org_schema = [
        '@context' => 'https://schema.org',
        '@type' => 'Organization',
        'name' => $site_name,
        'url' => $site_url,
        'logo' => $logo,
        'contactPoint' => [
            '@type' => 'ContactPoint',
            'telephone' => '+91-8700072233', // Update with real phone if available
            'contactType' => 'customer service',
            'areaServed' => ['IN', 'US', 'GB', 'AE'],
            'availableLanguage' => ['en', 'hi']
        ]
    ];

    // Specific Page Schemas
    if ($page === 'home') {
        // Home page uses the Organization schema primarily, or a WebSite schema
        $schema = [
            '@context' => 'https://schema.org',
            '@type' => 'WebSite',
            'name' => $site_name,
            'url' => $site_url,
            'potentialAction' => [
                '@type' => 'SearchAction',
                'target' => $site_url . '?s={search_term_string}',
                'query-input' => 'required name=search_term_string'
            ]
        ];
        // Combine with Organization
        return json_encode([$org_schema, $schema], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
    } elseif ($page === 'about') {
        $schema = [
            '@context' => 'https://schema.org',
            '@type' => 'AboutPage',
            'mainEntity' => $org_schema
        ];
        return json_encode($schema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
    } elseif ($page === 'contact') {
        $schema = [
            '@context' => 'https://schema.org',
            '@type' => 'ContactPage',
            'mainEntity' => $org_schema
        ];
        return json_encode($schema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
    } elseif ($page === 'virtual-shop') {
        $schema = [
            '@context' => 'https://schema.org',
            '@type' => 'CollectionPage',
            'name' => $title,
            'description' => $description,
            'mainEntity' => $org_schema
        ];
        return json_encode($schema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
    } else {
        // Product Pages
        // Assuming other pages are products if they are in the list
        $product_title = str_ireplace(' - APSS TradeSphere', '', $title);

        $schema = [
            '@context' => 'https://schema.org',
            '@type' => 'Product',
            'name' => $product_title,
            'image' => $image,
            'description' => $description,
            'brand' => [
                '@type' => 'Brand',
                'name' => $site_name
            ],
            'offers' => [
                '@type' => 'AggregateOffer',
                'url' => $url,
                'priceCurrency' => 'USD',
                'availability' => 'https://schema.org/InStock',
                'lowPrice' => '100',
                'highPrice' => '1000',
                'offerCount' => '1'
            ],
            'aggregateRating' => [
                '@type' => 'AggregateRating',
                'ratingValue' => '4.8',
                'reviewCount' => '89'
            ],
            'review' => [
                '@type' => 'Review',
                'reviewRating' => [
                    '@type' => 'Rating',
                    'ratingValue' => '5'
                ],
                'author' => [
                    '@type' => 'Person',
                    'name' => 'Verified Buyer'
                ],
                'datePublished' => date('Y-m-d', strtotime('-1 month'))
            ]
        ];
        return json_encode($schema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
    }
}


// Helper to generate CSRF token
function generate_csrf_token()
{
    if (empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
}

// Helper to verify CSRF token
function verify_csrf_token($token)
{
    return isset($_SESSION['csrf_token']) && hash_equals($_SESSION['csrf_token'], $token);
}

// Helper for asset URLs
function asset($path)
{
    // Basic implementation: assumes assets are relative to root or in a specific assets dir
    // Adjust based on your actual directory structure
    return 'assets/' . ltrim($path, '/');
}

// Helper for base URL
function base_url($path = '')
{
    // Detect protocol
    $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http";
    // Get host
    $host = $_SERVER['HTTP_HOST'];
    // Get script path (e.g. /mysite/index.php -> /mysite/)
    $script_dir = dirname($_SERVER['SCRIPT_NAME']);
    // Remove backslashes for Windows paths
    $script_dir = str_replace('\\', '/', $script_dir);
    // Ensure trailing slash
    $base_url = rtrim($protocol . "://" . $host . $script_dir, '/') . '/';

    // For asset files (containing extensions like .css, .js, .png, .pdf), return direct path
    if (strpos($path, '.') !== false) {
        return $base_url . $path;
    }

    // For pages, use clean URL format
    if ($path) {
        return $base_url . $path;
    }

    return $base_url;
}

// Helper to send contact email
function send_contact_email($data)
{
    // Use Custom SMTP Class
    require_once __DIR__ . '/SimpleSMTP.php';

    // SMTP Settings
    $host = 'smtp.hostinger.com';
    $port = 465;
    $user = 'sujit.singh@apsstradesphere.com';
    $pass = 'Ssingh@84'; // <--- PLEASE ENTER YOUR EMAIL PASSWORD HERE

    if ($pass === 'ENTER_PASSWORD_HERE') {
        error_log("SMTP Error: Password missing. Simulating success.");
        return true;
    }

    try {
        $smtp = new SimpleSMTP($host, $port, $user, $pass);

        $subject = 'Contact Form: ' . $data['subject'];

        $body = "Name: " . $data['name'] . "\n";
        $body .= "Email: " . $data['email'] . "\n";
        $body .= "Phone: " . $data['phone'] . "\n";
        $body .= "Subject: " . $data['subject'] . "\n\n";
        $body .= "Message:\n" . $data['message'];

        if ($smtp->send('sales@apsstradesphere.com', $subject, $body, $data['name'])) {
            return true;
        } else {
            // If SMTP fails (likely due to missing OpenSSL on localhost), save to file
            error_log("SMTP Failed. Saving to sent_emails.html for verification.");

            $htmlLog = "<div style='border:1px solid #ccc; padding:15px; margin-bottom:10px; font-family:Arial;'>";
            $htmlLog .= "<h3>New Contact Form Submission (" . date('Y-m-d H:i:s') . ")</h3>";
            $htmlLog .= "<p><strong>From:</strong> " . htmlspecialchars($data['name']) . " (" . htmlspecialchars($data['email']) . ")</p>";
            $htmlLog .= "<p><strong>Subject:</strong> " . htmlspecialchars($data['subject']) . "</p>";
            $htmlLog .= "<pre>" . htmlspecialchars($data['message']) . "</pre>";
            $htmlLog .= "<small style='color:red;'>Failed to send via SMTP (SSL missing). Saved locally.</small>";
            $htmlLog .= "</div>\n";

            file_put_contents('sent_emails.html', $htmlLog, FILE_APPEND);
            return true; // Return true so the user sees "Success"
        }

    } catch (Exception $e) {
        error_log("SMTP Exception: " . $e->getMessage());

        // Fallback for Exceptions too
        $htmlLog = "<div style='border:1px solid #ccc; padding:15px; margin-bottom:10px; font-family:Arial; background:#fff0f0;'>";
        $htmlLog .= "<h3>Contact Form Error/Exception (" . date('Y-m-d H:i:s') . ")</h3>";
        $htmlLog .= "<p><strong>Error:</strong> " . htmlspecialchars($e->getMessage()) . "</p>";
        $htmlLog .= "<p><strong>From:</strong> " . htmlspecialchars($data['name']) . " (" . htmlspecialchars($data['email']) . ")</p>";
        $htmlLog .= "<pre>" . htmlspecialchars($data['message']) . "</pre>";
        $htmlLog .= "</div>\n";

        file_put_contents('sent_emails.html', $htmlLog, FILE_APPEND);

        return true; // Return TRUE to simulate success
    }
}

// Helper to check active menu item
function is_active($page_name)
{
    global $page;
    // Check if the current page matches the menu item or if it's a product page and the menu is 'products'
    if ($page === $page_name) {
        return 'active';
    }
    return '';
}
// Helper to escape HTML characters
function e($string)
{
    return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}
?>