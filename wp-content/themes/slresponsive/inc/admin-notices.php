<?php 
function sample_admin_notice__success() {
    ?>
    <div class="notice notice-success is-dismissible">
        <p><?php _e( 'Need help with theme customization? Vizit our <a target="_blank" href="http://awodev.pro/services/wordpress-theme-customization-service/?utm_source=slresponsive">WordPress Theme Customization Service</a> website', 'slresponsive' ); ?></p>
    </div>
    <?php
}
add_action( 'admin_notices', 'sample_admin_notice__success' );
