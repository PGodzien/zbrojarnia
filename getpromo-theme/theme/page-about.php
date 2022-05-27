<?php

/**
 * Template part for displaying page content in page-about.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package getpromo
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="">
		<!-- Section 1 -->
		<section class="relative w-full z-0 h-auto bg-no-repeat bg-bottom bg-cover" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">
			<div class="container flex max-w-4xl items-center justify-start h-auto py-28 mx-auto">
				<div class="z-10 text-left flex flex-col items-start px-8 xl:px-0">
						<?php the_title('<h1 class="text-white font-bold text-5xl text-center lg:text-left">', '</h1>'); ?>
					<p class="text-3xl mt-2 text-white font-heading"><?php echo get_secondary_title(); ?></p>
					</p>
				</div>
			</div>
		</section>
	</header>
	<div class="entry-content max-w-5xl mx-auto py-16 text-xl ">
		<?php
		the_content();

		// wp_link_pages(
		// 	array(
		// 		'before' => '<div>' . esc_html__('Pages:', 'getpromo'),
		// 		'after'  => '</div>',
		// 	)
		// );
		?>
	</div>

	<?php if (get_edit_post_link()) : ?>
		<footer>

		</footer>
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->