<?php

/**
 * Theme setup.
 */

namespace App;

use function Roots\asset;

/**
 * Register the theme assets.
 *
 * @return void
 */
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_script('sage/vendor.js', asset('scripts/vendor.js')->uri(), ['jquery'], null, true);
    wp_enqueue_script('sage/app.js', asset('scripts/app.js')->uri(), ['sage/vendor.js', 'jquery'], null, true);

    wp_enqueue_script('lottie', asset('scripts/lottie.min.js')->uri(), ['jquery'], null, true);
    wp_enqueue_script('animations', asset('scripts/animations.js')->uri(), ['jquery'], null, true);
		$translation_array = array( 'templateUrl' => get_stylesheet_directory_uri() );
		wp_localize_script( 'animations', 'obj', $translation_array );

    wp_add_inline_script('sage/vendor.js', asset('scripts/manifest.js')->contents(), 'before');

    if (is_single() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }

    wp_enqueue_style('sage/app.css', asset('styles/app.css')->uri(), false, null);
}, 100);

/**
 * Register the theme assets with the block editor.
 *
 * @return void
 */
add_action('enqueue_block_editor_assets', function () {
    if ($manifest = asset('scripts/manifest.asset.php')->get()) {
        wp_enqueue_script('sage/vendor.js', asset('scripts/vendor.js')->uri(), $manifest['dependencies'], null, true);
        wp_enqueue_script('sage/editor.js', asset('scripts/editor.js')->uri(), ['sage/vendor.js'], null, true);

        wp_add_inline_script('sage/vendor.js', asset('scripts/manifest.js')->contents(), 'before');
    }

    wp_enqueue_style('sage/editor.css', asset('styles/editor.css')->uri(), false, null);
}, 100);

/**
 * Register the initial theme setup.
 *
 * @return void
 */
add_action('after_setup_theme', function () {
    /**
     * Enable features from Soil when plugin is activated
     * @link https://roots.io/plugins/soil/
     */
    add_theme_support('soil', [
        'clean-up',
        'nav-walker',
        'nice-search',
        'relative-urls'
    ]);

    /**
     * Enable plugins to manage the document title
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#title-tag
     */
    add_theme_support('title-tag');

    /**
     * Register navigation menus
     * @link https://developer.wordpress.org/reference/functions/register_nav_menus/
     */
    register_nav_menus([
        'primary_navigation' => __('Primary Navigation', 'sage'),
        'mobile_navigation' => __('Mobile Navigation', 'sage')
    ]);

    /**
     * Enable post thumbnails
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support('post-thumbnails');

    /**
     * Add theme support for Wide Alignment
     * @link https://wordpress.org/gutenberg/handbook/designers-developers/developers/themes/theme-support/#wide-alignment
     */
    add_theme_support('align-wide');

    /**
     * Enable responsive embeds
     * @link https://wordpress.org/gutenberg/handbook/designers-developers/developers/themes/theme-support/#responsive-embedded-content
     */
    add_theme_support('responsive-embeds');

    /**
     * Enable HTML5 markup support
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#html5
     */
    add_theme_support('html5', [
        'caption',
        'comment-form',
        'comment-list',
        'gallery',
        'search-form',
        'script',
        'style'
    ]);

    /**
     * Enable selective refresh for widgets in customizer
     * @link https://developer.wordpress.org/themes/advanced-topics/customizer-api/#theme-support-in-sidebars
     */
    add_theme_support('customize-selective-refresh-widgets');

    /**
     * Enable theme color palette support
     * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#block-color-palettes
     */
    add_theme_support('editor-color-palette', [
        [
            'name' => __('Primary', 'sage'),
            'slug' => 'primary',
            'color' => '#525ddc',
        ]
    ]);
}, 20);

/**
 * Register the theme sidebars.
 *
 * @return void
 */
add_action('widgets_init', function () {
    $configFooter = [
        'before_widget' => '<section class="widget %1$s %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h3 class="font-bold mb-3 text-lg text-red uppercase">',
        'after_title' => '</h3>'
    ];

    register_sidebar([
        'name' => __('Footer1', 'sage'),
        'id' => 'sidebar-footer1'
    ] + $configFooter);

    register_sidebar([
        'name' => __('Footer2', 'sage'),
        'id' => 'sidebar-footer2'
    ] + $configFooter);

    register_sidebar([
        'name' => __('Footer3', 'sage'),
        'id' => 'sidebar-footer3'
    ] + $configFooter);

    register_sidebar([
        'name' => __('Subfooter left', 'sage'),
        'id' => 'sidebar-subfooter-left',
        'before_widget' => '<section class="widget text-xs %1$s %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h3 class="font-bold mb-3 text-lg text-red uppercase">',
        'after_title' => '</h3>'
    ]);

    register_sidebar([
        'name' => __('Subfooter right', 'sage'),
        'id' => 'sidebar-subfooter-right',
        'before_widget' => '<section class="widget text-xs %1$s %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h3 class="font-bold mb-3 text-lg text-red uppercase">',
        'after_title' => '</h3>'
    ]);

});
