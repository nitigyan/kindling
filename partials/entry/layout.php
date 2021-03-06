<?php
/**
 * Default post entry layout
 *
 * @package Kindling Theme
 */

# Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

# Get post format
$format = get_post_format();

# Quote format is completely different
if ( 'quote' == $format ) {

	# Get quote entry content
	get_template_part( 'partials/entry/quote' );

	return;

}

# Add classes to the blog entry post class
$classes = kindling_post_entry_classes(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class( $classes ); ?>>

	<div class="blog-entry-inner clr">

		<?php
		# Get elements
		$elements = kindling_blog_entry_elements_positioning();

		# Loop through elements
		foreach ( $elements as $element ) {

			# Featured Image
			if ( 'featured_image' == $element ) {

				get_template_part( 'partials/entry/media/blog-entry', $format );

			}

			# Title
			if ( 'title' == $element ) {

				get_template_part( 'partials/entry/header' );

			}

			# Meta
			if ( 'meta' == $element ) {

				get_template_part( 'partials/entry/meta' );

			}

			# Content
			if ( 'content' == $element ) {

				get_template_part( 'partials/entry/content' );

			}

			# Read more button
			if ( 'read_more' == $element ) {

				get_template_part( 'partials/entry/readmore' );

			}

		} ?>

	</div><!-- .blog-entry-inner -->

</article><!-- #post-## -->