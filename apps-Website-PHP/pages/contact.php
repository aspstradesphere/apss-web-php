<!-- Contact Us Page -->
<!-- Page Banner -->
<div style="position: relative; width: 100%; height: 350px; overflow: hidden;">
    <img src="<?php echo asset('images/contact_banner.png'); ?>" alt="Contact Us Banner"
        style="width: 100%; height: 100%; object-fit: cover;">
    <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0,0,0,0.5);"></div>
    <div class="container"
        style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center;">
        <h1 style="color: white; font-size: 48px; margin-bottom: 10px;">Contact Us</h1>
        <p style="color: white; font-size: 18px; font-weight: 600; margin-bottom: 25px;">We'd Love to Hear From You</p>
    </div>
</div>

<section class="section section-cream">
    <div class="container">
        <div class="section-heading">
            <h2 class="section-title">Get In Touch</h2>
            <p class="section-description">For wholesale inquiries, export orders, and partnership opportunities</p>
        </div>

        <div class="row" style="margin-top: 40px; gap: 40px;">
            <!-- Contact Form -->
            <div class="col-50">
                <div
                    style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
                    <h2 class="text-gold" style="font-size: 24px; margin-bottom: 20px;">Send Us a Message</h2>

                    <form id="contactForm" method="POST" action="<?php echo base_url('handlers/contact.php'); ?>">
                        <!-- CSRF Token -->
                        <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token'] ?? ''; ?>">

                        <!-- Name Field -->
                        <div style="margin-bottom: 20px;">
                            <label for="name" style="display: block; font-weight: 600; margin-bottom: 8px;">
                                Full Name <span style="color: red;">*</span>
                            </label>
                            <input type="text" id="name" name="name" required
                                style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 5px; font-size: 16px;">
                        </div>

                        <!-- Email Field -->
                        <div style="margin-bottom: 20px;">
                            <label for="email" style="display: block; font-weight: 600; margin-bottom: 8px;">
                                Email Address <span style="color: red;">*</span>
                            </label>
                            <input type="email" id="email" name="email" required
                                style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 5px; font-size: 16px;">
                        </div>

                        <!-- Phone Field -->
                        <div style="margin-bottom: 20px;">
                            <label for="phone" style="display: block; font-weight: 600; margin-bottom: 8px;">
                                Phone Number <span style="color: red;">*</span>
                            </label>
                            <input type="tel" id="phone" name="phone" required
                                style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 5px; font-size: 16px;">
                        </div>

                        <!-- Subject Field -->
                        <div style="margin-bottom: 20px;">
                            <label for="subject" style="display: block; font-weight: 600; margin-bottom: 8px;">
                                Subject <span style="color: red;">*</span>
                            </label>
                            <select id="subject" name="subject" required
                                style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 5px; font-size: 16px;">
                                <option value="">Select a subject</option>
                                <option value="wholesale">Wholesale Inquiry</option>
                                <option value="export">Export Order</option>
                                <option value="partnership">Partnership Opportunity</option>
                                <option value="product">Product Information</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <!-- Message Field -->
                        <div style="margin-bottom: 20px;">
                            <label for="message" style="display: block; font-weight: 600; margin-bottom: 8px;">
                                Message <span style="color: red;">*</span>
                            </label>
                            <textarea id="message" name="message" rows="5" required
                                style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 5px; font-size: 16px; resize: vertical;"></textarea>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary" style="width: 100%;">
                            Send Message
                        </button>

                        <!-- Form Messages -->
                        <div id="formMessage"
                            style="margin-top: 20px; padding: 15px; border-radius: 5px; display: none;"></div>
                    </form>
                </div>
            </div>

            <!-- Contact Information -->
            <div class="col-50">
                <div style="margin-bottom: 30px;">
                    <h2 class="text-gold" style="font-size: 24px; margin-bottom: 20px;">Contact Information</h2>

                    <!-- Email -->
                    <div style="margin-bottom: 25px; display: flex; align-items: start; gap: 15px;">
                        <div style="font-size: 24px;">📧</div>
                        <div>
                            <h3 style="font-size: 18px; font-weight: 600; margin-bottom: 5px;">Email</h3>
                            <p style="font-weight: 600;">
                                <a href="mailto:info@apsstradesphere.com"
                                    style="color: inherit; text-decoration: none;">info@apsstradesphere.com</a>
                            </p>
                        </div>
                    </div>

                    <!-- Phone -->
                    <div style="margin-bottom: 25px; display: flex; align-items: start; gap: 15px;">
                        <div style="font-size: 24px;">📞</div>
                        <div>
                            <h3 style="font-size: 18px; font-weight: 600; margin-bottom: 5px;">Phone</h3>
                            <p style="font-weight: 600;">
                                <a href="tel:+918700072233"
                                    style="color: inherit; text-decoration: none;">+91-8700072233</a>
                            </p>
                        </div>
                    </div>

                    <!-- Address -->
                    <div style="margin-bottom: 25px; display: flex; align-items: start; gap: 15px;">
                        <div style="font-size: 24px;">📍</div>
                        <div>
                            <h3 style="font-size: 18px; font-weight: 600; margin-bottom: 5px;">Registered Office</h3>
                            <p style="font-weight: 600; line-height: 1.6;">
                                APSS TradeSphere LLP<br>
                                Katra, Muzaffarpur,<br>
                                Bihar, India
                            </p>
                        </div>
                    </div>

                    <!-- Business Hours -->
                    <div style="margin-bottom: 25px; display: flex; align-items: start; gap: 15px;">
                        <div style="font-size: 24px;">🕒</div>
                        <div>
                            <h3 style="font-size: 18px; font-weight: 600; margin-bottom: 5px;">Business Hours</h3>
                            <p style="font-weight: 600;">
                                Monday - Saturday: 9:00 AM - 6:00 PM<br>
                                Sunday: Closed
                            </p>
                        </div>
                    </div>

                    <!-- WhatsApp (New) -->
                    <div style="margin-bottom: 25px; display: flex; align-items: start; gap: 15px;">
                        <div style="font-size: 24px; color: #25D366;">💬</div>
                        <div>
                            <h3 style="font-size: 18px; font-weight: 600; margin-bottom: 5px;">Chat on WhatsApp</h3>
                            <p style="font-weight: 600;">
                                <a href="#" onclick="openWhatsAppModal(); return false;"
                                    style="display: inline-block; background-color: #25D366; color: white; padding: 10px 20px; border-radius: 5px; text-decoration: none; margin-top: 5px;">
                                    Message Us (+91-8700072233)
                                </a>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Quick Links -->
                <div style="background: var(--color-gold); padding: 25px; border-radius: 10px;">
                    <h3 style="font-size: 20px; font-weight: 600; margin-bottom: 15px;">Quick Links</h3>
                    <ul style="list-style: none; padding: 0;">
                        <li style="margin-bottom: 10px;">
                            <a href="<?php echo base_url('about-us'); ?>"
                                style="color: black; font-weight: 600; text-decoration: none;">
                                → About Us
                            </a>
                        </li>
                        <li style="margin-bottom: 10px;">
                            <a href="<?php echo base_url('business-policies'); ?>"
                                style="color: black; font-weight: 600; text-decoration: none;">
                                → Business Policies
                            </a>
                        </li>
                        <li style="margin-bottom: 10px;">
                            <a href="<?php echo base_url(); ?>"
                                style="color: black; font-weight: 600; text-decoration: none;">
                                → Our Products
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

</section>

<!-- WhatsApp Pre-Chat Modal -->
<div id="wa-modal"
    style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.7); z-index: 2000; align-items: center; justify-content: center;">
    <div
        style="background: white; width: 90%; max-width: 400px; padding: 30px; border-radius: 10px; position: relative; box-shadow: 0 5px 15px rgba(0,0,0,0.3);">
        <span onclick="closeWhatsAppModal()"
            style="position: absolute; top: 10px; right: 15px; font-size: 24px; cursor: pointer; color: #888;">&times;</span>

        <h3 class="text-gold" style="text-align: center; margin-bottom: 20px;">Start WhatsApp Chat</h3>
        <p style="text-align: center; margin-bottom: 20px; font-size: 14px; color: #555;">Please provide a few details
            so we can assist you better.</p>

        <form onsubmit="startWhatsAppChat(event)">
            <div style="margin-bottom: 15px;">
                <input type="text" id="wa-name" placeholder="Your Name" required
                    style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px;">
            </div>

            <div style="margin-bottom: 15px;">
                <input type="text" id="wa-location" placeholder="Your Location (City/Country)"
                    style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px;">
            </div>

            <div style="margin-bottom: 20px;">
                <textarea id="wa-req" placeholder="Your Requirement (e.g. 500kg Turmeric)" required
                    style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px; height: 80px; resize: none;"></textarea>
            </div>

            <button type="submit"
                style="width: 100%; background-color: #25D366; color: white; border: none; padding: 12px; border-radius: 5px; font-weight: 600; cursor: pointer; display: flex; align-items: center; justify-content: center; gap: 10px;">
                <span>Start Chat</span>
                <span style="font-size: 18px;">➤</span>
            </button>
        </form>
    </div>
</div>

<script>
    function openWhatsAppModal() {
        document.getElementById('wa-modal').style.display = 'flex';
    }

    function closeWhatsAppModal() {
        document.getElementById('wa-modal').style.display = 'none';
    }

    function startWhatsAppChat(e) {
        e.preventDefault();

        const name = document.getElementById('wa-name').value;
        const location = document.getElementById('wa-location').value;
        const req = document.getElementById('wa-req').value;

        // Construct Message
        let text = `Hello APSS TradeSphere,\n\nI am contacting you from the website.\n`;
        text += `*Name:* ${name}\n`;
        if (location) text += `*Location:* ${location}\n`;
        text += `*Requirement:* ${req}\n\n`;
        text += `Please assist me.`;

        // Encode for URL
        const encodedText = encodeURIComponent(text);
        const phone = '918700072233';

        // Open WhatsApp
        const url = `https://wa.me/${phone}?text=${encodedText}`;
        window.open(url, '_blank');

        closeWhatsAppModal();
    }

    // Close on outside click
    window.onclick = function (event) {
        const modal = document.getElementById('wa-modal');
        if (event.target == modal) {
            closeWhatsAppModal();
        }
    }
</script>