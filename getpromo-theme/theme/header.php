<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<link rel="icon" href="/favicon.ico" />
	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" />
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@300;400;600;700;900&display=swap" media="all" />
	<?php wp_head(); ?>
</head>

<body <?php body_class('bg-white text-gray-900 antialiased'); ?>>

	<?php do_action('otherland_site_before'); ?>

	<div id="page" class="min-h-screen flex flex-col">

		<?php do_action('otherland_header'); ?>

		<header class="bg-black text-white text-lg relative z-10">

			<div class="mx-auto container px-4">
				<div class="lg:flex lg:justify-between lg:items-center">
					<div class="flex justify-between px-4 items-center">
						<div>
							<?php if  (has_custom_logo()) { ?>
								<div class="w-36 h-auto py-4"><?php the_custom_logo(); ?>
								</div>
							<?php } else { ?>
								<div class="text-lg uppercase">
									<a href="<?php echo get_bloginfo('url'); ?>" class="font-extrabold text-lg uppercase">
										<?php echo get_bloginfo('name'); ?>
									</a>
								</div>

								<p class="text-sm font-light text-gray-600">
									<?php echo get_bloginfo('description'); ?>
								</p>

							<?php } ?>
						</div>

						<div class="lg:hidden">
							<a href="#" aria-label="Toggle navigation" id="primary-menu-toggle">
								<svg viewBox="0 0 20 20" class="inline-block w-6 h-6" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
									<g stroke="none" stroke-width="1" fill="currentColor" fill-rule="evenodd">
										<g id="icon-shape">
											<path d="M0,3 L20,3 L20,5 L0,5 L0,3 Z M0,9 L20,9 L20,11 L0,11 L0,9 Z M0,15 L20,15 L20,17 L0,17 L0,15 Z" id="Combined-Shape"></path>
										</g>
									</g>
								</svg>
							</a>
						</div>
					</div>

					<?php
					wp_nav_menu(
						array(
							'container_id'    => 'primary-menu',
							'container_class' => 'hidden bg-black mt-4 p-4 lg:mt-0 lg:p-0 lg:bg-transparent lg:block',
							'menu_class'      => 'lg:flex lg:-mx-4',
							'theme_location'  => 'menu-1',
							'li_class'        => 'lg:mx-4 hover:text-primary',
							'fallback_cb'     => false,
						)
					);
					?>
				</div>
			</div>
		</header>

		<div id="content" class="site-content flex-grow">

			<!-- Start introduction -->
			<!-- <?php if (is_front_page()) : ?>
			<div class="container mx-auto my-12 border-b pb-12">
				<h1 class="font-bold text-lg text-secondary uppercase">otherland</h1>
				<h2 class="text-3xl lg:text-7xl tracking-tight font-extrabold my-4">Rapidly build your WordPress theme
					with <a href="https://tailwindcss.com" class="text-primary">Tailwind CSS</a>.</h2>
				<p class="max-w-screen-lg text-gray-700 text-lg font-medium mb-10">otherland is your go-to starting
					point for developing WordPress themes with TailwindCSS and comes with basic block-editor support out
					of the box.</p>
				<a href="https://github.com/jeffreyvr/otherland"
				   class="w-full sm:w-auto flex-none bg-gray-900 text-white text-lg leading-6 font-semibold py-3 px-6 border border-transparent rounded-xl focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-gray-900 focus:outline-none transition-colors duration-200">View
					on Github</a>
			</div>
		<?php endif; ?> -->
			<!-- End introduction -->

			<?php do_action('otherland_content_start'); ?>

			<main>