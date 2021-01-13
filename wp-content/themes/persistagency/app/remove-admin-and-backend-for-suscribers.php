<?php

/**
 * Disable Admin Bar for suscribers 
 */

add_action('after_setup_theme', 'remove_admin_bar_for_suscribers');

function remove_admin_bar_for_suscribers()
{
    //the following lines will only display the admin bar for users with administrative privileges.
    if (!current_user_can('edit_posts')) {
        show_admin_bar(false);
    }
}
/**
 * Block wp-admin for suscribers (redirecting to homepage)
 */
function remove_wp_admin_access_for_suscribers()
{
    if (!defined('DOING_AJAX') && !current_user_can('edit_posts')) {
        wp_redirect(site_url());
        exit;
    }
}
add_action('admin_init', 'remove_wp_admin_access_for_suscribers');
