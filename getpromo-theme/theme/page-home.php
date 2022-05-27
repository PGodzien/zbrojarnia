<?php

/**
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package getpromo
 */

/*
 * The template for displaying page-home.php
 * Template Name: Home
 */

get_header();
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="">



		<section class="relative w-full h-auto bg-no-repeat bg-cover" x-data="{ showMenu: false }" style="background-image: url(/wp-content/uploads/2022/01/slider-1024x576-1.webp)">
			<div class="absolute inset-0 z-0 h-full bg-gray-900 opacity-75"></div>




			<div class="container flex items-center justify-center h-auto py-32">
				<div class="z-10 flex flex-col px-8 xl:px-0">
					<h1 class="mt-1 text-xl md:text-5xl text-white font-bold lg:text-6xl sm:mx-0">
						Prefabrykaty zbrojeniowe i <br /> wyroby
						hutnicze
					</h1>
					<p class="w-2/3 my-6 text-xl font-normal text-gray-200">
						<?php echo get_secondary_title(); ?>
					</p>
					<div class="flex flex-col md:flex-row md:mt-10">
						<a href="/kontakt" class="px-8 py-4 text-white bg-primary border-2 border-primary rounded-md hover:bg-transparent">Skontaktuj
							się</a>
						<a href="/oferta" class="px-8 py-4 mt-2 md:mt-0 md:ml-2 text-white border-2 border-primary rounded-md hover:bg-primary">Zobacz
							ofertę</a>
					</div>
				</div>
			</div>
		</section>
	</header>
  <!-- section 2 -->

  <section>
    <div class="py-20 bg-gray-50 radius-for-skewed">
      <div class="container mx-auto px-4">
        <div class="relative flex">
          <div class="hidden xl:absolute inset-y-0 left-0 -ml-6 xl:flex items-center"></div>
          <div class="w-full xl:w-4/5 xl:ml-auto">
            <img class="md:max-w-xl xl:max-w-4xl mx-auto relative object-cover rounded"
              src="/wp-content/uploads/2022/01/about-section-2.webp" alt="" />
            <div
              class="xl:absolute top-0 left-20 mt-12 xl:mt-20 max-w-xl mx-auto space-y-6 xl:mx-0 p-6 xl:py-24 rounded bg-white border-gray-50 shadow text-center">
              <h2 class="text-4xl font-bold text-left font-heading">
                Produkcja prefabrykatów zbrojeniowych
              </h2>
              <p class="max-w-xs text-base text-gray-500 lg:text-xl md:max-w-lg text-left">
                Nasza zbrojarnia obejmuje wykonywanie prefabrykatów z prętów o
                średnicach od 6 mm do 40 mm. Wykorzystujemy stal B500A,B500B
                oraz B500SP.
              </p>
              <a href="/oferta"
                class="flex items-center mx-auto w-full mb-3 text-lg text-black sm:mb-0 sm:w-auto hover:text-primary">
                Cała oferta
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-1" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <line x1="5" y1="12" x2="19" y2="12"></line>
                  <polyline points="12 5 19 12 12 19"></polyline>
                </svg>
              </a>
            </div>
          </div>
          <div class="hidden xl:absolute inset-y-0 right-0 -mr-8 xl:flex items-center"></div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section 3 -->
  <section class="relative flex items-center justify-center py-0 bg-gradient-to-tl from-orange-600 to-orange-500 min-w-screen">
    <div class="absolute inset-0 bg-cover opacity-20"></div>
	  <div class="absolute inset-0 bg-cover opacity-20"
      style="background-image: url('/wp-content/uploads/2022/01/construction-white.svg')"></div> 
    <div
      class="relative flex-col items-center max-w-6xl px-4 py-8 mx-auto text-center lg:text-left lg:block sm:px-6 md:pb-0 md:pt-12 lg:px-12 lg:py-12">
      <div class="">
        <h2 class="my-4 text-3xl font-bold tracking-tight text-white sm:text-4xl lg:my-0 sm:leading-tight">
          Zapraszamy do kontaktu
        </h2>
        <p class="mt-1 mb-10 max-w-xl text-lg font-medium text-gray-200 xl:text-xl xl:tracking-wider lg:mb-0">
          Chętnie odpowiemy na wszelkie pytania dotyczące oferty prefabrykatów
          zbrojeniowych.
        </p>
      </div>
      <div class="flex justify-center lg:justify-start mb-8 lg:mt-6 lg:mb-0">
        <div class="inline-flex">
          <a href="/kontakt"
            class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-white transition duration-150 ease-in-out bg-black rounded-md hover:text-gray-900 hover:bg-white focus:outline-none focus:shadow-outline">
            Skontaktuj się
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- section 4-->

  <section class="bg-white px-4 my-12">

    <div class="max-w-6xl mb-12 mx-auto">
      <div class="py-12">
        <h2 class="my-4 text-3xl font-bold tracking-tight sm:text-4xl lg:my-0 sm:leading-tight">
          Dlaczego Transbet?
        </h2>
      </div>
      <div class="grid gap-8 items-center text-center md:grid-cols-2 lg:gap-12 ">
        <div href="#_"
          class="flex flex-col items-center p-6 space-y-6 transition-all duration-500 bg-white border border-gray-50 rounded-lg shadow hover:shadow-xl lg:p-8 lg:flex-row lg:space-y-0 lg:space-x-6">
          <div class="flex items-center justify-center w-16 h-16  shadow-inner bg-black rounded-xl lg:h-20 lg:w-20">
            <svg class="h-10 w-10 text-white" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
              <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
              <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
            </svg>
          </div>
          <div class="flex-1">
            <h5 class="mt-1 mb-2 text-xl lg:text-2xl">zautomatyzowany park maszynowy</h5>
          </div>
        </div>
        <div href="#_"
          class="flex flex-col items-center p-6 space-y-6 transition-all duration-500 bg-white border border-gray-50 rounded-lg shadow hover:shadow-xl lg:p-8 lg:flex-row lg:space-y-0 lg:space-x-6">
          <div class="flex items-center justify-center w-16 h-16  shadow-inner bg-black rounded-xl lg:h-20 lg:w-20">
            <svg class="h-10 w-10 text-white" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-check" viewBox="0 0 16 16">
              <path d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
              <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
            </svg>
          </div>
          <div class="flex-1">
            <h5 class="mt-1 mb-2 text-xl lg:text-2xl">szybkie terminy realizacji</h5>
          </div>
        </div>
      </div>
    </div>
    <div class="max-w-6xl mx-auto text-center">
      <div class="grid gap-8 items-center md:grid-cols-2 lg:gap-12 ">
        <div href="#_"
          class="flex flex-col items-center p-6 space-y-6 transition-all duration-500 bg-white border border-gray-50 rounded-lg shadow hover:shadow-xl lg:p-8 lg:flex-row lg:space-y-0 lg:space-x-6">
          <div class="flex items-center justify-center w-16 h-16  shadow-inner bg-black rounded-xl lg:h-20 lg:w-20">
            <svg class="h-10 w-10 text-white" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
              <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
            </svg>
          </div>
          <div class="flex-1">
            <h5 class="mt-1 mb-2 text-xl lg:text-2xl">sprawna obsługa i doradztwo techniczne</h5>
          </div>
        </div>
        <div href="#_"
          class="flex flex-col items-center p-6 space-y-6 transition-all duration-500 bg-white border border-gray-50 rounded-lg shadow hover:shadow-xl lg:p-8 lg:flex-row lg:space-y-0 lg:space-x-6">
          <div class="flex items-center justify-center w-16 h-16  shadow-inner bg-black rounded-xl lg:h-20 lg:w-20">
            <svg class="h-10 w-10 text-white" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-truck" viewBox="0 0 16 16">
              <path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
            </svg>
          </div>
          <div class="flex-1">
            <h5 class="mt-1 mb-2 text-xl lg:text-2xl">dostarczamy w każde miejsce w Polsce i za granice</h5>
          </div>
        </div>
      </div>
    </div>
  </section>

  
  <!-- Section 5 -->
  <section class="flex flex-col mt-20 w-full md:flex-row max-w-6xl mx-auto px-4">
    <div class="flex flex-col items-center justify-center w-full md:w-1/2 ">
      <h2 class="max-w-lg text-4xl font-bold leading-tight md:text-3xl mr-auto lg:text-4xl xl:text-5xl">Zapraszamy<br>
        do kontaktu</h2>
      <p class="max-w-lg mt-5 text-xl text-gray-500 md:text-base mr-auto lg:text-xl">Nasi specjaliści czekają na pytania
        dotyczące oferty wyrobów hutniczych.</p>
    </div>

    <div class="w-full md:w-1/2 md:mt-0 mt-12">
      <img src="/wp-content/uploads/2022/01/map-light.webp" class="inset-0 object-cover">
    </div>
  </section>

	<div class="entry-content max-w-5xl mx-auto text-xl ">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div>' . esc_html__('Pages:', 'getpromo'),
				'after'  => '</div>',
			)
		);
		?>
	</div>

	<?php if (get_edit_post_link()) : ?>
		<footer>

		</footer>
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
<?php
// get_sidebar();
get_footer();
