<?php

/**
 * Useful links for adminbar
 */

function sage_adminbar_buttons()
{
    global $wp_admin_bar;

    // remove logo
    $wp_admin_bar->remove_menu('wp-logo');

    // menu link
    $wp_admin_bar->add_menu(array(
        //'parent' => 'false', // use 'false' for a root menu, or pass the ID of the parent menu
        'id' => 'menulink', // link ID, defaults to a sanitized title value
        'title' => __('Menu'), // link title
        'href' => admin_url('nav-menus.php'), // name of file
        'meta' => false, // array of any of the following options: array( 'html' => '', 'class' => '', 'onclick' => '', target => '', title => '' );
    ));

    //widgets
    $wp_admin_bar->add_menu(array(
        'id' => 'widgetlink',
        'title' => __('Widgets'),
        'href' => admin_url('widgets.php'),
        'meta' => false,
    ));
}
add_action('wp_before_admin_bar_render', 'sage_adminbar_buttons', 0);
