<!-- Hero Slider Section -->
<section class="hero-slider">
    <div class="slider-container">
        <!-- Slide 1: Spices -->
        <div class="slide active">
            <img src="<?php echo asset('images/slider1.jpg'); ?>" alt="Premium Indian Spices">
            <div class="slider-content">
                <div class="star-rating">★★★★★</div>
                <div class="slider-subtitle">PERFECTLY BALANCED, NATURALLY SOURCED</div>
                <h2 class="slider-title">Crafted with the love of Grandma's kitchen.</h2>
            </div>
        </div>

        <!-- Slide 2: Makhana -->
        <div class="slide">
            <img src="<?php echo asset('images/slider_makhana.png'); ?>" alt="Premium Makhana (Fox Nuts)">
            <div class="slider-content">
                <div class="star-rating">★★★★★</div>
                <div class="slider-subtitle">PREMIUM BIHAR MAKHANA</div>
                <h2 class="slider-title">Crunchy, Healthy, and straight from the farm.</h2>
            </div>
        </div>

        <!-- Slide 3: Areca Leaf -->
        <div class="slide">
            <img src="<?php echo asset('images/slider_areca.png'); ?>" alt="Eco-Friendly Areca Leaf Products">
            <div class="slider-content">
                <div class="star-rating">★★★★★</div>
                <div class="slider-subtitle">SUSTAINABLE & ECO-FRIENDLY</div>
                <h2 class="slider-title">Nature's finest Areca Leaf tableware for a greener planet.</h2>
            </div>
        </div>

        <!-- Slide 4: Honey -->
        <div class="slide">
            <img src="<?php echo asset('images/slider_honey.png'); ?>" alt="Pure Natural Honey">
            <div class="slider-content">
                <div class="star-rating">★★★★★</div>
                <div class="slider-subtitle">PURE & NATURAL GOODNESS</div>
                <h2 class="slider-title">Golden sweetness sourced directly from nature.</h2>
            </div>
        </div>

        <!-- Slide 5: Maize -->
        <div class="slide">
            <img src="<?php echo asset('images/slider_maize.png'); ?>" alt="Top Quality Maize">
            <div class="slider-content">
                <div class="star-rating">★★★★★</div>
                <div class="slider-subtitle">GOLDEN HARVEST</div>
                <h2 class="slider-title">Premium quality Maize directly from the fields.</h2>
            </div>
        </div>

        <!-- Slide 6: Rice -->
        <div class="slide">
            <img src="<?php echo asset('images/slider_rice.png'); ?>" alt="Premium Basmati Rice">
            <div class="slider-content">
                <div class="star-rating">★★★★★</div>
                <div class="slider-subtitle">AROMATIC EXCELLENCE</div>
                <h2 class="slider-title">Long-grain Basmati Rice for royal authentic feasts.</h2>
            </div>
        </div>

        <!-- Navigation Arrows -->
        <button class="slider-nav prev" aria-label="Previous slide">‹</button>
        <button class="slider-nav next" aria-label="Next slide">›</button>

        <!-- Dots Navigation -->
        <div class="slider-dots">
            <span class="dot active"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>
    </div>
</section>

<!-- Welcome Section -->
<section class="section section-cream">
    <div class="container">
        <div class="row">
            <!-- Left: Images -->
            <div class="col-50">
                <div style="position: relative;">
                    <img src="<?php echo asset('images/spice-bowl1.jpg'); ?>" alt="Spices"
                        style="border-radius: 50%; width: 100%;">
                    <img src="<?php echo asset('images/spice-bowl2.jpg'); ?>" alt="Spices"
                        style="border-radius: 50%; width: 73%; position: absolute; bottom: 0; left: -1px;">
                </div>
            </div>

            <!-- Right: Content -->
            <div class="col-50" style="display: flex; flex-direction: column; justify-content: center;">
                <h2 style="font-size: 19px; font-weight: 600; margin-bottom: 10px;">Welcome to APSS Tradesphere</h2>
                <h1 class="text-gold" style="font-size: 30px; margin-bottom: 20px;">Premium Indian Spices & Agricultural
                    Products – Authentic, Wholesale & Export Quality</h1>
                <div style="font-weight: 600;">
                    <p>At <strong>APSS TradeSphere</strong>, we have been dedicated to the quality trade industry for
                        the last
                        <strong>20 years</strong>. While we started with spices, we have expanded into a diverse range
                        of <strong>agricultural and eco-friendly products</strong> including <strong>Makhana (Fox Nuts),
                            Rice, Maize, Honey, Areca Leaf items, and Sugar Cane products</strong>. We are committed
                        to bringing the true essence of Indian produce to the global market.
                    </p>
                    <p>As leading <strong>manufacturers, wholesale suppliers, and exporters</strong>, we produce a wide
                        range of
                        high-quality goods that reflect India's rich agricultural heritage. With
                        <strong>state-of-the-art facilities</strong> and strict quality standards, we
                        ensure each product delivers purity and consistency. Our mission is to provide
                        <strong>authentic quality, reliability, and trust</strong>, making us a preferred partner for
                        international clients seeking premium Indian products.
                    </p>
                </div>
                <div style="margin-top: 20px;">
                    <a href="<?php echo base_url('about-us'); ?>" class="btn btn-primary">LEARN MORE</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Turmeric Specialty Section -->
<section class="section section-cream">
    <div class="container">
        <div class="row">
            <!-- Left: Content -->
            <div class="col-50" style="display: flex; flex-direction: column; justify-content: center;">
                <h2 class="text-gold" style="font-size: 30px; margin-bottom: 20px;">Trusted Turmeric Exporters &
                    Suppliers from India</h2>
                <div style="font-weight: 600;">
                    <p>APSS TradeSphere is recognized as a leading turmeric exporter in India, offering both organic and
                        conventional turmeric powder and fingers. Known for its rich flavor, vibrant color, and high
                        nutritional value, our turmeric meets the highest quality standards. With expertise in sourcing,
                        processing, and packaging, we ensure every batch delivers purity and consistency. Serving
                        clients across India and globally, we are a trusted manufacturer, supplier, and exporter,
                        dedicated to bringing premium turmeric that enhances culinary experiences while upholding
                        India's spice legacy.</p>
                </div>
                <div style="margin-top: 20px;">
                    <a href="<?php echo base_url('contact-us'); ?>" class="btn btn-primary">Get in touch</a>
                </div>
            </div>

            <!-- Right: Image -->
            <div class="col-50">
                <img src="<?php echo asset('images/turmeric.jpg'); ?>" alt="Premium Turmeric"
                    style="border-radius: 10px; width: 100%;">
            </div>
        </div>
    </div>
</section>

<!-- Products Section -->
<section class="section section-cream">
    <div class="container">
        <div class="section-heading">
            <div class="section-subtitle">OUR PRODUCTS</div>
            <h2 class="section-title">Authentic Spices & Premium Agricultural Goods</h2>
            <p class="section-description">At APSS TradeSphere, we take pride in offering a wide range of
                premium-quality spices, grains, and eco-friendly products. As one of India's leading wholesale
                suppliers, our products are crafted to add authentic taste and quality to your life.</p>
        </div>

        <div class="products-grid">
            <!-- Product 1: Makhana -->
            <div class="product-card">
                <img src="<?php echo asset('images/product-makhana.jpg'); ?>" alt="Makhana">
                <h3><a href="<?php echo base_url('makhana'); ?>">MAKHANA</a></h3>
            </div>

            <!-- Product 2: Red Chilli -->
            <div class="product-card gold">
                <img src="<?php echo asset('images/product-red-chilli.jpg'); ?>" alt="Red Chilli">
                <h3><a href="<?php echo base_url('red-chilli'); ?>">RED CHILLI</a></h3>
            </div>

            <!-- Product 3: Black Pepper -->
            <div class="product-card">
                <img src="<?php echo asset('images/product-black-pepper.jpg'); ?>" alt="Black Pepper">
                <h3><a href="<?php echo base_url('black-pepper'); ?>">BLACK PEPPER</a></h3>
            </div>

            <!-- Product 4: Coriander -->
            <div class="product-card gold">
                <img src="<?php echo asset('images/product-coriander.jpg'); ?>" alt="Coriander">
                <h3><a href="<?php echo base_url('coriander'); ?>">CORIANDER</a></h3>
            </div>

            <!-- Product 5: Basmati Rice -->
            <div class="product-card">
                <img src="<?php echo asset('images/product-basmati-rice.jpg'); ?>" alt="Basmati Rice">
                <h3><a href="<?php echo base_url('basmati-rice'); ?>">Basmati Rice</a></h3>
            </div>

            <!-- Product: Maize -->
            <div class="product-card gold">
                <img src="<?php echo asset('images/product-maize.png'); ?>" alt="Maize">
                <h3><a href="<?php echo base_url('maize'); ?>">MAIZE</a></h3>
            </div>

            <!-- Product 6: Coconut Oil -->
            <div class="product-card gold">
                <img src="<?php echo asset('images/product-coconut-oil.jpg'); ?>" alt="Coconut Oil">
                <h3><a href="<?php echo base_url('coconut-oil'); ?>">COCONUT OIL</a></h3>
            </div>





            <!-- Product 11: Areca Leaf Items -->
            <div class="product-card">
                <img src="<?php echo asset('images/product-areca-leaf.jpg'); ?>" alt="Areca Leaf Items">
                <h3><a href="<?php echo base_url('areca-leaf-items'); ?>">ARECA LEAF ITEMS</a></h3>
            </div>

            <!-- Product 12: Honey -->
            <div class="product-card gold">
                <img src="<?php echo asset('images/product-honey.png'); ?>" alt="Honey">
                <h3><a href="<?php echo base_url('honey'); ?>">HONEY</a></h3>
            </div>

            <!-- Product: Sugar Cane Items -->
            <div class="product-card">
                <img src="<?php echo asset('images/product-sugar-cane.png'); ?>" alt="Sugar Cane Items">
                <h3><a href="<?php echo base_url('sugar-cane-items'); ?>">SUGAR CANE ITEMS</a></h3>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="section section-black">
    <div class="container">
        <div class="section-heading">
            <h2 class="section-title text-white">Why Choose APSS TradeSphere? – Trusted Indian Spices Supplier</h2>
            <p class="section-description text-white">Discover what sets Apsstradesphere apart and makes us a reliable
                choice for premium spices:</p>
        </div>

        <div class="features-grid">
            <!-- Feature 1 -->
            <div class="feature-card">
                <div class="feature-icon">
                    <img src="<?php echo asset('images/icons/quality.svg'); ?>" alt="Quality">
                </div>
                <h3>Quality Assurance</h3>
                <p>Only the finest and purest spices make it to our range.</p>
            </div>

            <!-- Feature 2 -->
            <div class="feature-card">
                <div class="feature-icon">
                    <img src="<?php echo asset('images/icons/authentic.svg'); ?>" alt="Authentic">
                </div>
                <h3>Authentic Taste</h3>
                <p>Preserving India's traditional flavors in every product.</p>
            </div>

            <!-- Feature 3 -->
            <div class="feature-card">
                <div class="feature-icon">
                    <img src="<?php echo asset('images/icons/variety.svg'); ?>" alt="Variety">
                </div>
                <h3>Wide Variety</h3>
                <p>A comprehensive selection of spices to meet all culinary needs.</p>
            </div>

            <!-- Feature 4 -->
            <div class="feature-card">
                <div class="feature-icon">
                    <img src="<?php echo asset('images/icons/reliable.svg'); ?>" alt="Reliable">
                </div>
                <h3>Reliable Supply</h3>
                <p>Timely delivery for wholesale, retail, and export requirements.</p>
            </div>

            <!-- Feature 5 -->
            <div class="feature-card">
                <div class="feature-icon">
                    <img src="<?php echo asset('images/icons/expertise.svg'); ?>" alt="Expertise">
                </div>
                <h3>Trusted Expertise</h3>
                <p>Years of experience in manufacturing, sourcing, and exporting spices globally.</p>
            </div>
        </div>
    </div>
</section>

<!-- Nationwide Reach Section -->
<section class="section section-cream">
    <div class="container">
        <div class="section-heading">
            <h2 class="section-title">Nationwide Reach Across India</h2>
            <p class="section-description">At APSS TradeSphere, we cater to clients across India, ensuring seamless
                delivery and accessibility. Our extensive network allows us to serve customers efficiently while
                maintaining consistent quality and reliability in every order.</p>
        </div>

        <div class="row" style="justify-content: center; gap: 40px;">
            <!-- Partner 1 -->
            <div
                style="flex: 0 0 400px; border: 1px solid var(--color-gold); padding: 20px; text-align: center; box-shadow: -7px 7px 1px #030303;">
                <img src="<?php echo asset('images/india-icon.png'); ?>" alt="India"
                    style="width: 80px; margin: 0 auto 15px;">
                <h3 style="font-size: 22px; font-weight: 600; margin-bottom: 5px;">Bharat Spice</h3>
                <p style="font-weight: 600; margin-top: -10px;">Manufacturers and suppliers of spices and masala</p>
            </div>

            <!-- Partner 2 -->
            <div
                style="flex: 0 0 400px; border: 1px solid var(--color-gold); padding: 20px; text-align: center; box-shadow: -7px 7px 1px #030303;">
                <img src="<?php echo asset('images/building-icon.png'); ?>" alt="Building"
                    style="width: 80px; margin: 0 auto 15px;">
                <h3 style="font-size: 22px; font-weight: 600; margin-bottom: 5px;">JMD Carrier Services</h3>
                <p style="font-weight: 600; margin-top: -10px;">Manufacturers and suppliers of spices and masala</p>
            </div>
        </div>
    </div>
</section>

<!-- Company History Section -->
<section class="section section-black">
    <div class="container">
        <div class="row">
            <!-- Left: Image -->
            <div class="col-50">
                <img src="<?php echo asset('images/masala-mixture.webp'); ?>" alt="Masala Mixture"
                    style="border-radius: 10px; width: 100%;">
            </div>

            <div class="col-50" style="display: flex; flex-direction: column; justify-content: center;">
                <h2 class="text-gold" style="font-size: 30px; margin-bottom: 20px;">Passion for Quality Since 1963</h2>
                <div style="font-weight: 600; color: white;">
                    <p>APSS TradeSphere began its journey in 1963 with a small unit focused on processing and delivering
                        premium turmeric. Over the decades, we expanded our expertise and diverse product range, now
                        offering
                        high-quality turmeric, spices, grains, and eco-friendly products like Areca leaf items. With 20
                        years of dedicated
                        experience in the industry, we are now proudly expanding into exports, serving
                        international clients. Committed to excellence, we provide consistent quality and reliable
                        service, earning recognition as one of India's most trusted bulk suppliers.</p>
                </div>
                <div style="margin-top: 20px;">
                    <a href="<?php echo base_url('contact-us'); ?>" class="btn btn-primary">Get in touch</a>
                </div>
            </div>
        </div>
    </div>
</section>