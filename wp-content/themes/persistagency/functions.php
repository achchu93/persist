<?php

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our theme. We will simply require it into the script here so that we
| don't have to worry about manually loading any of our classes later on.
|
*/

if (!file_exists($composer = __DIR__ . '/vendor/autoload.php')) {
    wp_die(__('Error locating autoloader. Please run <code>composer install</code>.', 'sage'));
}

require $composer;

/*
|--------------------------------------------------------------------------
| Register Sage Theme Files
|--------------------------------------------------------------------------
|
| Out of the box, Sage ships with categorically named theme files
| containing common functionality and setup to be bootstrapped with your
| theme. Simply add (or remove) files from the array below to change what
| is registered alongside Sage.
|
*/

collect([
    'helpers',
    'setup',
    'filters',
    'admin',
    'disable-xmlrpc',
    'remove-admin-and-backend-for-suscribers',
    // 'image-sizes',
    'acf',
    'insert-code-header-footer',
    'adminbar-buttons',
    'clean-dashboard',
    'allow-svg-uploads',
    'Shortcodes/social-icons',
    'Blocks/block-background-and-story',
    'Blocks/block-big-image',
    'Blocks/block-case-studies-list',
    'Blocks/block-case-study-intro',
    'Blocks/block-contact',
    'Blocks/block-cta',
    'Blocks/block-cta-scratch',
    'Blocks/block-header-scratch',
    'Blocks/block-header-title-text-illustration',
    'Blocks/block-hero',
    'Blocks/block-hero-small',
    'Blocks/block-our-partners',
    'Blocks/block-our-team',
    'Blocks/block-our-work',
    'Blocks/block-poster-content-links',
    'Blocks/block-services-black',
    'Blocks/block-statement-red',
    'Blocks/block-story-stats',
    'Blocks/block-text-image',
    'Blocks/block-values',
    'Blocks/block-what-we-do',
    'Blocks/block-who-we-are',
    'Blocks/block-work-slider',
    'Blocks/block-work-with',
])
    ->each(function ($file) {
        $file = "app/{$file}.php";

        if (!locate_template($file, true, true)) {
            wp_die(
                sprintf(__('Error locating <code>%s</code> for inclusion.', 'sage'), $file)
            );
        }
    });

/*
|--------------------------------------------------------------------------
| Enable Sage Theme Support
|--------------------------------------------------------------------------
|
| Once our theme files are registered and available for use, we are almost
| ready to boot our application. But first, we need to signal to Acorn
| that we will need to initialize the necessary service providers built in
| for Sage when booting.
|
*/

add_theme_support('sage');

/*
|--------------------------------------------------------------------------
| Turn On The Lights
|--------------------------------------------------------------------------
|
| We are ready to bootstrap the Acorn framework and get it ready for use.
| Acorn will provide us support for Blade templating as well as the ability
| to utilize the Laravel framework and its beautifully written packages.
|
*/

new Roots\Acorn\Bootloader();
