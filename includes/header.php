<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-17928610423"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'AW-17928610423');
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo e($page_description); ?>">
    <meta name="keywords" content="<?php echo e($page_keywords); ?>">
    <meta name="author" content="APSS TradeSphere">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="<?php echo e($page_title); ?>">
    <meta property="og:description" content="<?php echo e($page_description); ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo e(base_url($page == 'home' ? '' : $page)); ?>">
    <meta property="og:image" content="<?php echo get_page_image($page); ?>">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo e($page_title); ?>">
    <meta name="twitter:description" content="<?php echo e($page_description); ?>">
    <meta name="twitter:image" content="<?php echo get_page_image($page); ?>">

    <!-- Canonical URL -->
    <link rel="canonical" href="<?php echo e(base_url($page == 'home' ? '' : $page)); ?>">

    <!-- Structured Data (JSON-LD) -->
    <script type="application/ld+json">
    <?php echo get_schema_org($page); ?>
    </script>

    <title>
        <?php echo e($page_title); ?>
    </title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700&family=Gilda+Display&display=swap"
        rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="<?php echo asset('css/style.css'); ?>">
    <link rel="stylesheet" href="<?php echo asset('css/responsive.css'); ?>">
    <link rel="stylesheet" href="<?php echo asset('css/slider.css'); ?>">
    <link rel="stylesheet" href="<?php echo asset('css/translation.css'); ?>">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?php echo asset('images/favicon.png'); ?>">
</head>

<body>

    <!-- Header -->
    <header class="site-header">
        <div class="container">
            <div class="header-container">
                <!-- Logo -->
                <div class="site-logo">
                    <a href="<?php echo base_url(); ?>">
                        <img src="<?php echo asset('images/logo.png'); ?>" alt="APSS TradeSphere Logo">
                    </a>
                </div>

                <!-- Mobile Menu Toggle -->
                <button class="mobile-menu-toggle" id="mobileMenuToggle">
                    ☰
                </button>

                <!-- Navigation -->
                <nav class="main-nav" id="mainNav">
                    <ul>
                        <li class="nav-item">
                            <a href="<?php echo base_url(); ?>" class="<?php echo is_active('home'); ?>">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('about-us'); ?>"
                                class="<?php echo is_active('about'); ?>">About Us</a>
                        </li>
                        <li class="nav-item">
                            <?php
                            $product_pages = [
                                'makhana',
                                'turmeric',
                                'red-chilli',
                                'basmati-rice',
                                'maize',
                                'sugar-cane-items',
                                'areca-leaf-items',
                                'honey',
                                'black-pepper',
                                'coriander',
                                'clove',
                                'coconut-oil',
                                'chicken-masala',
                                'garam-masala',
                                'sambhar-powder',
                                'mutton-masala'
                            ];
                            ?>
                            <a href="#" class="<?php echo in_array($page, $product_pages) ? 'active' : ''; ?>">
                                Our Products ▾
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url('makhana'); ?>">Makhana (Fox Nuts)</a></li>
                                <li><a href="<?php echo base_url('turmeric'); ?>">Turmeric</a></li>
                                <li><a href="<?php echo base_url('red-chilli'); ?>">Red Chilli</a></li>
                                <li><a href="<?php echo base_url('basmati-rice'); ?>">Basmati Rice</a></li>
                                <li><a href="<?php echo base_url('maize'); ?>">Maize</a></li>
                                <li><a href="<?php echo base_url('sugar-cane-items'); ?>">Sugar Cane Items</a></li>
                                <li><a href="<?php echo base_url('areca-leaf-items'); ?>">Areca Leaf Items</a></li>
                                <li><a href="<?php echo base_url('honey'); ?>">Honey</a></li>
                                <li><a href="<?php echo base_url('black-pepper'); ?>">Black Pepper</a></li>
                                <li><a href="<?php echo base_url('coriander'); ?>">Coriander</a></li>
                                <li><a href="<?php echo base_url('clove'); ?>">Clove</a></li>
                                <li><a href="<?php echo base_url('coconut-oil'); ?>">Coconut Oil</a></li>
                                <li><a href="<?php echo base_url('chicken-masala'); ?>">Chicken Masala</a></li>
                                <li><a href="<?php echo base_url('garam-masala'); ?>">Garam Masala</a></li>
                                <li><a href="<?php echo base_url('sambhar-powder'); ?>">Sambhar Powder</a></li>
                                <li><a href="<?php echo base_url('mutton-masala'); ?>">Mutton Masala</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('business-policies'); ?>"
                                class="<?php echo is_active('policies'); ?>">Business Policies</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('virtual-shop'); ?>"
                                class="<?php echo is_active('virtual-shop'); ?>">Virtual Shop</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('contact-us'); ?>"
                                class="<?php echo is_active('contact'); ?>">Contact Us</a>
                        </li>
                    </ul>
                </nav>

                <!-- Google Translate Widget -->
                <div id="google_translate_element" style="margin-left: 20px;"></div>
            </div>
        </div>
    </header>

    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en',
                layout: google.translate.TranslateElement.InlineLayout.SIMPLE
            }, 'google_translate_element');
        }
    </script>
    <script type="text/javascript"
        src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

    <!-- Main Content -->
    <main class="site-content">