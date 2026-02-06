<!-- 404 Error Page -->
<section class="section section-cream" style="min-height: 60vh; display: flex; align-items: center;">
    <div class="container">
        <div style="text-align: center; max-width: 600px; margin: 0 auto;">
            <!-- 404 Illustration -->
            <div
                style="font-size: 120px; font-weight: 700; color: var(--color-gold); line-height: 1; margin-bottom: 20px;">
                404
            </div>

            <!-- Error Message -->
            <h1 style="font-size: 36px; font-weight: 600; margin-bottom: 20px;">Page Not Found</h1>
            <p style="font-size: 18px; font-weight: 600; color: #666; margin-bottom: 40px;">
                Oops! The page you're looking for doesn't exist. It might have been moved or deleted.
            </p>

            <!-- Navigation Buttons -->
            <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                <a href="<?php echo base_url(); ?>" class="btn btn-primary">
                    Go to Homepage
                </a>
                <a href="<?php echo base_url('contact-us'); ?>" class="btn"
                    style="background: white; color: black; border: 2px solid var(--color-gold);">
                    Contact Us
                </a>
            </div>

            <!-- Quick Links -->
            <div style="margin-top: 50px; padding-top: 30px; border-top: 2px solid var(--color-gold);">
                <h3 style="font-size: 20px; font-weight: 600; margin-bottom: 20px;">Quick Links</h3>
                <div style="display: flex; gap: 30px; justify-content: center; flex-wrap: wrap;">
                    <a href="<?php echo base_url('about-us'); ?>"
                        style="color: black; font-weight: 600; text-decoration: none;">
                        About Us
                    </a>
                    <a href="<?php echo base_url('turmeric'); ?>"
                        style="color: black; font-weight: 600; text-decoration: none;">
                        Our Products
                    </a>
                    <a href="<?php echo base_url('business-policies'); ?>"
                        style="color: black; font-weight: 600; text-decoration: none;">
                        Business Policies
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>