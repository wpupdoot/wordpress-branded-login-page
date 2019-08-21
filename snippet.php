<?php
/**
 * Adds custom branding to the login page
 */
function custom_login_styles() {
    echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('stylesheet_directory') . '/login.css" />';
}
add_action('login_head', 'custom_login_styles');