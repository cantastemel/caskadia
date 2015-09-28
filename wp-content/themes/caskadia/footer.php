        <footer>
            <img src="<?php bloginfo('template_url'); ?>/assets/img/triangles_top.png" class="triangle-top">
            <div class="row footer-utility">
                <div class="large-12 columns">
                    <div class="branding">
                        <a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/assets/img/caskadia_logo.png" class="logo" alt="Caskadia" width="248" height="50"></a>
                    </div>
                    <div class="socials">
                        <a href="http://www.linkedin.com/company/caskadia-technology-labs" target="_blank"><img src="<?php bloginfo('template_url'); ?>/assets/img/linkedin_icon.png" width="50" height="50" alt="Caskadia Linkedin"></a>
                        <a href="mailto:info@caskadia.com" target="_blank"><img src="<?php bloginfo('template_url'); ?>/assets/img/email_icon.png" width="50" height="50" alt="Caskadia Email"></a>
                    </div>
                </div>
            </div>
            <div class="row" class="copyright">
                <div class="large-12 columns">
                    <div>&copy; Copyright <?php echo date('Y'); ?> Caskadia Labs. All Rights Reserved.</div>
                    <div>Website created by <a href="http://www.visuallime.com" title="Visual Lime">Visual Lime</a></div>
                </div>
            </div>
        </footer>
    </div> <!-- /page-container -->
    <?php wp_footer(); ?>
    <script defer async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCiXBQRD-gwAJWnvcXIc5Fm8x4ISxha6kg&callback=initMap"></script>
    </body>
</html>