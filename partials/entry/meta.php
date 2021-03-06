<?php
/**
 * The default template for displaying post meta.
 *
 * @package Kindling Theme
 */

# Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

# Get meta sections
$sections = kindling_blog_entry_meta();

# Return if sections are empty
if ( empty( $sections ) ) {
	return;
}

if ( 'post' == get_post_type() ) { ?>

	<ul class="meta clr">

		<?php
		# Loop through meta sections
		foreach ( $sections as $section ) { ?>

			<?php if ( 'author' == $section ) { ?>
				<li class="meta-author" itemprop="name"><i class="icon-user"></i><?php echo the_author_posts_link(); ?></li>
			<?php }

			if ( 'date' == $section ) { ?>
				<li class="meta-date" itemprop="datePublished" pubdate><i class="icon-clock"></i><?php echo get_the_date(); ?></li>
			<?php }

			if ( 'categories' == $section ) { ?>
				<li class="meta-cat"><i class="icon-folder"></i><?php the_category( ' / ', get_the_ID() ); ?></li>
			<?php }

			if ( 'comments' == $section && comments_open() && ! post_password_required() ) { ?>
				<li class="meta-comments"><i class="icon-bubble"></i><?php comments_popup_link( esc_html__( '0 Comments', 'kindling' ), esc_html__( '1 Comment',  'kindling' ), esc_html__( '% Comments', 'kindling' ), 'comments-link' ); ?></li>
			<?php }

		} ?>
		
	</ul>
	
<?php } ?>