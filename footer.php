<footer>
    <div class="container contact" id="contact">
        <hr>
        <div class="row justify-content-between align-items-center">

            <div class="col-6">
                <h2><?php echo __('Useful Links', 'text-domain'); ?></h2>
                <div class="footer-links">
                    <div class="mb-2">
                        <a href="<?php echo esc_url($site1); ?>" target="_blank"><?php echo __('10 Best Books Every Graphic Designers Should Own', 'text-domain'); ?></a>
                    </div>
                    <div class="mb-2">
                        <a href="<?php echo esc_url($site2); ?>" target="_blank"><?php echo __('13 Must-Read Graphic Design Books', 'text-domain'); ?></a>
                    </div>
                    <div class="mb-2">
                        <a href="<?php echo esc_url($site3); ?>" target="_blank"><?php echo __('The best graphic design books on branding, logos, type and more', 'text-domain'); ?></a>
                    </div>
                </div>

                <h2><?php echo esc_html($contactfooter); ?></h2>
                <div class="contact-info">
                    <div class="phone mb-2">
                        <a href="tel:<?php echo esc_attr($phone); ?>">
                            <i class="fa-solid fa-phone"></i> <?php echo esc_html($phone); ?>
                        </a>
                    </div>
                    <div class="email mb-2">
                        <a href="mailto:<?php echo esc_attr($email); ?>">
                            <i class="fa-solid fa-envelope"></i> <?php echo esc_html($email); ?>
                        </a>
                    </div>
                    <div class="address">
                        <i class="fa-solid fa-location-dot"></i> <?php echo esc_html($adress); ?>
                    </div>
                </div>
            </div>

            <div class="col-6">
                <div class="form-container">
                    <?php echo do_shortcode('[contact-form-7 id="bfe34da" title="Contact form 1"]'); ?>
                </div>
            </div>
        </div>
        <hr>
    </div>

    <!-- Curve Divider at the Bottom -->
    <div class="custom-shape-divider-bottom-1725969563">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
        </svg>
    </div>

    <div class="copyright text-center">
        <i class="fa-regular fa-copyright"></i> <?php echo __('Avrtikl Bookshop. All rights reserved.', 'text-domain'); ?>
    </div>
</footer>

<?php wp_footer(); ?>