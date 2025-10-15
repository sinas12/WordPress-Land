<?php
/**
 * Front page template
 *
 * @package Wordpress-Land
 */


get_header();

?>

	<div id="primary">
		<main id="main" class="site-main mt-5" role="main">
			<div class="home-page-wrap ">
                    <section class="bg-white dark:bg-gray-900 flex h-screen bg-[url(<?php echo get_template_directory_uri(); ?>/assets/src/img/ai_back.jpg)] bg-center bg-no-repeat bg-cover">
                        <div class="flex  px-4 py-8 mx-auto gap-3  lg:py-16 w-full m-auto text-center justify-center">
                            <div class=" place-self-center lg:col-span-7 ">
                                <h1 class=" w-full rounded-md  mb-4 sm:text-6xl text-8xl text-6xl font-extrabold tracking-tight leading-none text-[#1447e6] bg-white p-6 dark:text-[#1447e6]">Unlock the Power of AI</h1>

                            </div>
            
                        </div>
                    </section>

			</div>
		</main>
	</div>

<?php
get_footer();

