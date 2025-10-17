<?php
/**
 * Header template.
 *
 * @package Wordpress-Land
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
<link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>

	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php
if ( function_exists( 'wp_body_open' ) ) {
	wp_body_open();
}
?>
<?php 
// 1. Get Site Logo URL (Requires Site Logo to be set in Customizer)

$custom_logo_id = get_theme_mod('custom_logo');
$logo_url = $custom_logo_id ? wp_get_attachment_image_src($custom_logo_id, 'full')[0] : '';

// 2. Get Site URL
$site_url = get_bloginfo('url');

// 3. Get Site Title
$site_title = get_bloginfo('name');

// 4. Get Navigation Menu Items (Change 'primary' to your menu location or menu slug)
$menu_location = 'primary';
$menu_items = [];
if (has_nav_menu($menu_location)) {
    $menu_id = wp_get_nav_menu_object(get_nav_menu_locations()[$menu_location])->term_id;
    $menu_items = wp_get_nav_menu_items($menu_id);
}
?>
<div id="page" class="site">
	<header id="masthead" class="site-header" role="banner">
		<nav class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
		<div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4 text-center ">
		<a href="<?php echo esc_url($site_url); ?>" class="flex items-center space-x-3 rtl:space-x-reverse">
			<?php if ($logo_url): ?>
				<img src="<?php echo esc_url($logo_url); ?>" class="h-8" alt="<?php echo esc_attr($site_title); ?>">
			<?php endif; ?>
			<span class="self-center hidden sm:block text-2xl font-semibold whitespace-nowrap dark:text-white"><?php echo esc_html($site_title); ?></span>
		</a>
		<div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
			<a href="<?php echo esc_url($site_url); ?>/contact-us/">
			<button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Call US</button>
			</a>
			<button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
				<span class="sr-only">Open main menu</span>
				<svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
					<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
				</svg>
			</button>
		</div>
		 <?php if (!empty($menu_items)): ?>
			<div class="site-menu items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
				<ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
					<?php foreach ($menu_items as $item): ?>
				<li>
					<a href="<?php echo esc_url($item->url); ?>" class="block py-2 px-3 text-white bg-sky-500/75 hover:bg-sky-500/100 sm:bg-transparent sm:hover:bg-transparent transform transition my-2 sm:my-0 rounded-sm md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500" aria-current="page"> <?php echo esc_html($item->title); ?></a>
				</li>
				<?php endforeach; ?>

				</ul>
			</div>
		<?php else: ?>
			<div class="site-menu items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
				<ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">

				<li>
					<a href="<?php echo esc_url($site_url); ?>" class="block py-2 px-3 text-white bg-sky-500/75 hover:bg-sky-500/100 sm:bg-transparent sm:hover:bg-transparent transform transition my-2 sm:my-0 rounded-sm md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500" aria-current="page">Home</a>
				</li>
				<li>
					<a href="#" class="block py-2 px-3 text-white bg-sky-500/75 hover:bg-sky-500/100 sm:bg-transparent sm:hover:bg-transparent transform transition my-2 sm:my-0 rounded-sm md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500" aria-current="page">About us</a>
				</li>

				</ul>
			</div>
		 <?php endif; ?>
		</div>
		</nav>

	</header>
	<div id="content" class="site-content ">

