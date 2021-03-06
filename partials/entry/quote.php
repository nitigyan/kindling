<?php
/**
 * Blog entry quote format
 *
 * @package Kindling Theme
 */

# Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

# Return if Kindling Extra is not active
if ( ! class_exists( 'Kindling_Extra' ) ) {
	return;
}

# Quote link
$link = get_post_meta( get_the_ID(), 'kindling_quote_format_link', true );

# Add post classes
$classes = kindling_post_entry_classes(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class( $classes ); ?>>
	<div class="post-quote-wrap">
		<?php if ( 'post' == $link ) { ?>
			<a href="<?php the_permalink(); ?>" class="thumbnail-link">
		<?php } ?>
				<div class="post-quote-content">
					<?php echo get_post_meta( get_the_ID(), 'kindling_quote_format', true ); ?>
					<span class="post-quote-icon icon-speech"></span>
				</div>
				<div class="post-quote-author"><?php the_title(); ?></div>
		<?php if ( 'post' == $link ) { ?>
			</a>
		<?php } ?>
	</div>
</article>