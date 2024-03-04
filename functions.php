<?php

// WP enqueue - Registrar Scripts, Fontes e CSS
function load_css_js()
{
	wp_register_script('plugins-script', get_template_directory_uri() . '/js/plugins.js', array(), false, true);
	wp_register_script('main-script', get_template_directory_uri() . '/js/all.js', array('plugins-script'), false, true);
	wp_enqueue_script('main-script');

	wp_register_style('custom-font', get_template_directory_uri() . '/fonts/fonts.css', array(), false, false);
	wp_enqueue_style('custom-font');

	wp_register_style('plugins-style', get_template_directory_uri() . '/css/plugins.css', array(), false, false);
	wp_register_style('main-style', get_template_directory_uri() . '/css/main.css', array('plugins-style'), false, false);
	wp_enqueue_style('main-style');
}
add_action('wp_enqueue_scripts', 'load_css_js');


// Funções para Limpar o Header
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');


// Adicionar suporte a thumbnails
add_theme_support('post-thumbnails');

add_theme_support( 'html5',
    array(
    'comment—list',
    'comment-form',
    'search-form',
    'gallery',
    'caption'
));

// Habilitar Menu
add_theme_support('menus');

function register_my_menu()
{
	register_nav_menu('menu-principal', __('Menu Principal'));
	register_nav_menu('menu-mobile', __('Menu Mobile'));
	register_nav_menu('submenu-mobile', __('Submenu Mobile'));
}
add_action('init', 'register_my_menu');

function my_theme_enqueue_scripts() {
	wp_enqueue_script('jquery');
 }
 
 add_action('wp_enqueue_scripts', 'my_theme_enqueue_scripts');

function load_more_posts() {
	$page = $_POST['page'];
 
	$args = array(
	   'post_type' => 'post',
	   'post_status' => 'publish',
	   'paged' => $page,
	);
 
	$query = new WP_Query($args);
 
	if ($query->have_posts()) :
	   while ($query->have_posts()) : $query->the_post();
		?>
		
		<div class="card-post group p-2" data-aos="fade-up">
			<a href="<?php the_permalink(); ?>">
				<div class="bg-white mx-auto min-md:rounded-3xl md:rounded-lg md:pb-6 shadow-xl max-w-[380px] w-full p-6 lg:p-2 text-purple">
					<div class="image relative flex justify-center md:py-4">
						<img class="max-w-[332px] w-full h-[180px] object-cover" loading="lazy" src="<?php echo the_post_thumbnail_url( ); ?>" alt="<?php the_post_thumbnail_caption( ); ?>" width="332" height="180">
						<div class="arrow-box bg-purple stroke-white group-hover:bg-yellow group-hover:stroke-purple size-10 md:size-8 transition-all grid place-items-center rounded-lg absolute top-0 md:top-3 right-0 md:right-3 translate-x-2 -translate-y-2 cursor-pointer">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<g id="arrow-up-right">
									<path id="Icon" d="M7 17L17 7M17 7H8M17 7V16" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
								</g>
							</svg>
						</div>
					</div>
					<div class="info flex flex-col justify-between md:px-4">
						<p class="text-2xl md:text-xl font-bold min-md:pt-6 pb-6"><?php the_title( ); ?></p>
						<p>
						Natal, <?php echo get_the_date('j \d\e F \d\e Y'); ?>
						</p>
					</div>
				</div>
			</a>
		</div>
		
		<?php
	   endwhile;
	endif;
 
	wp_reset_postdata();
	
 }
 
 add_action('wp_ajax_load_more_posts', 'load_more_posts');
 add_action('wp_ajax_nopriv_load_more_posts', 'load_more_posts');

 $themeurl = get_template_directory_uri( );
 