<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package persist
 */

?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<div id="home_marquee"></div>
		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'persist' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

		</div><!-- #post-<?php the_ID(); ?> -->
