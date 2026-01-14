<?php
require_once 'includes/config.php';
$page_title = 'Contact Us';
require_once 'includes/header.php';
?>

<section class="hero-section" style="min-height: 50vh;">
    <div class="container">
        <div class="hero-content">
            <h1 class="hero-title">Contact Us</h1>
            <p class="hero-subtitle">We're Here to Help</p>
        </div>
    </div>
</section>

<section class="section" style="padding: 60px 0;">
    <div class="container">
        <div class="content-wrapper" style="max-width: 1000px; margin: 0 auto;">
            
            <!-- Contact Information -->
            <div class="content-section" style="margin-bottom: 60px;">
                <h2 class="section-title" style="text-align: left; margin-bottom: 30px;">Get In Touch</h2>
                <p style="font-size: 18px; line-height: 1.8; margin-bottom: 40px;">
                    Have questions, feedback, or need assistance? We're here to help! Reach out to us through any of the following channels, and our team will get back to you as soon as possible.
                </p>
                
                <div class="contact-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
                    <div class="contact-card" style="background: var(--glass-bg); backdrop-filter: blur(20px); border: 1px solid var(--glass-border); border-radius: 16px; padding: 40px; text-align: center;">
                        <div style="font-size: 48px; margin-bottom: 20px;">📧</div>
                        <h3 style="color: var(--gold); font-size: 22px; margin-bottom: 15px;">Email Support</h3>
                        <p style="font-size: 16px; margin-bottom: 15px;">For general inquiries and support</p>
                        <a href="mailto:support@coustommatch.com" style="color: var(--gold); font-size: 18px; font-weight: 600;">support@coustommatch.com</a>
                    </div>
                    
                    <div class="contact-card" style="background: var(--glass-bg); backdrop-filter: blur(20px); border: 1px solid var(--glass-border); border-radius: 16px; padding: 40px; text-align: center;">
                        <div style="font-size: 48px; margin-bottom: 20px;">🏢</div>
                        <h3 style="color: var(--gold); font-size: 22px; margin-bottom: 15px;">Registered Office</h3>
                        <p style="font-size: 16px; line-height: 1.6;">
                            C/O LAXMAN DASS, KHANDAK,<br>
                            PANTHAL KATRA, Panthal,<br>
                            Udhampur, Jammu and Kashmir<br>
                            PIN: 182320, India
                        </p>
                    </div>
                    
                    <div class="contact-card" style="background: var(--glass-bg); backdrop-filter: blur(20px); border: 1px solid var(--glass-border); border-radius: 16px; padding: 40px; text-align: center;">
                        <div style="font-size: 48px; margin-bottom: 20px;">⏰</div>
                        <h3 style="color: var(--gold); font-size: 22px; margin-bottom: 15px;">Response Time</h3>
                        <p style="font-size: 16px; margin-bottom: 10px;">We typically respond within:</p>
                        <p style="color: var(--gold); font-size: 20px; font-weight: 700;">24-48 Hours</p>
                    </div>
                </div>
            </div>

            <!-- Company Details -->
            <div class="content-section" style="margin-bottom: 60px;">
                <h2 class="section-title" style="text-align: left; margin-bottom: 30px;">Company Details</h2>
                <div style="background: var(--glass-bg); backdrop-filter: blur(20px); border: 1px solid var(--glass-border); border-radius: 16px; padding: 40px;">
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 30px;">
                        <div>
                            <h4 style="color: var(--gold); font-size: 18px; margin-bottom: 10px;">Legal Name</h4>
                            <p style="font-size: 16px;">AQUASTRUCT CONSTRUCTION PRIVATE LIMITED</p>
                        </div>
                        <div>
                            <h4 style="color: var(--gold); font-size: 18px; margin-bottom: 10px;">CIN</h4>
                            <p style="font-size: 16px;">U41001JK2023PTC014834</p>
                        </div>
                        <div>
                            <h4 style="color: var(--gold); font-size: 18px; margin-bottom: 10px;">PAN</h4>
                            <p style="font-size: 16px;">AAZCA0661R</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- FAQ Section -->
            <div class="content-section" style="margin-bottom: 60px;">
                <h2 class="section-title" style="text-align: left; margin-bottom: 30px;">Frequently Asked Questions</h2>
                <div class="faq-list" style="background: var(--glass-bg); backdrop-filter: blur(20px); border: 1px solid var(--glass-border); border-radius: 16px; padding: 40px;">
                    <div style="margin-bottom: 30px;">
                        <h3 style="color: var(--gold); font-size: 20px; margin-bottom: 10px;">Is AQUASTRUCT really free?</h3>
                        <p style="font-size: 16px; line-height: 1.7;">Yes! AQUASTRUCT is 100% free. We never ask for deposits, purchases, or any form of payment. All games and features are completely free forever.</p>
                    </div>
                    <div style="margin-bottom: 30px;">
                        <h3 style="color: var(--gold); font-size: 20px; margin-bottom: 10px;">Can I win real money?</h3>
                        <p style="font-size: 16px; line-height: 1.7;">No. AQUASTRUCT is a free entertainment platform. All credits are virtual and have no monetary value. You cannot win or lose real money on our platform.</p>
                    </div>
                    <div style="margin-bottom: 30px;">
                        <h3 style="color: var(--gold); font-size: 20px; margin-bottom: 10px;">How do I report a technical issue?</h3>
                        <p style="font-size: 16px; line-height: 1.7;">Please email us at support@coustommatch.com with details about the issue, including your device type, browser, and what happened. We'll investigate and respond within 24-48 hours.</p>
                    </div>
                    <div>
                        <h3 style="color: var(--gold); font-size: 20px; margin-bottom: 10px;">Do you have a mobile app?</h3>
                        <p style="font-size: 16px; line-height: 1.7;">Currently, AQUASTRUCT is available as a web platform that works on all devices. You can access it from any mobile browser without downloading an app.</p>
                    </div>
                </div>
            </div>

            <!-- Business Inquiries -->
            <div class="content-section" style="margin-bottom: 60px;">
                <h2 class="section-title" style="text-align: left; margin-bottom: 30px;">Business & Partnership Inquiries</h2>
                <div style="background: var(--glass-bg); backdrop-filter: blur(20px); border: 1px solid var(--glass-border); border-radius: 16px; padding: 40px; text-align: center;">
                    <p style="font-size: 18px; line-height: 1.8; margin-bottom: 20px;">
                        Interested in partnering with AQUASTRUCT or have a business proposal? We'd love to hear from you!
                    </p>
                    <p style="font-size: 16px; margin-bottom: 30px;">
                        Please send detailed information about your inquiry to our business email:
                    </p>
                    <a href="mailto:support@coustommatch.com" class="btn btn-primary">Email Us</a>
                </div>
            </div>

        </div>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>
