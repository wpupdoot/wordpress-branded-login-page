<?php
/**
 * Adds custom branding to the login page
 */
function custom_login_styles() {
    echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('stylesheet_directory') . '/login.css" />';
}
add_action('login_head', 'custom_login_styles');

/**
 * Changes the login page URL to the website homepage
 *
 * @return string Home Page URL
 */
function custom_login_logo_url() {
    return home_url();
}
add_filter("login_headerurl","custom_login_logo_url");

/**
 * Returns the Blog / Website name (set in Settings => General)
 *
 * @return string Website name
 */
function custom_login_logo_url_title() {
    return get_bloginfo("name");
}
add_filter("login_headertitle","custom_login_logo_url_title");