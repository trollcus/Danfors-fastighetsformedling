<?php
/**
 * Danfors Fastighetsförmedling functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Danfors_Fastighetsförmedling
 */

if ( ! function_exists( 'danfors_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function danfors_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Danfors Fastighetsförmedling, use a find and replace
	 * to change 'danfors' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'danfors', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'danfors' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'danfors_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support( 'custom-logo', array(
		'height'      => 250,
		'width'       => 250,
		'flex-width'  => true,
		'flex-height' => true,
	) );
}
endif;
add_action( 'after_setup_theme', 'danfors_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function danfors_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'danfors_content_width', 640 );
}
add_action( 'after_setup_theme', 'danfors_content_width', 0 );

add_action('pmxi_before_xml_import', 'before_xml_import', 10, 1);

/* Before WPAllimport, is required for importing images and putting them in correct structure */

// function before_xml_import($import_id) {
//   	echo 'pmxi_before_xml_import';
//     // Import images from vitec Connect
// 		// echo "http://$_SERVER[HTTP_HOST]/wp-content/uploads/wpallimport/files/{$list_id}/{$imageID}_$imageText.jpg";
// 		$readJSON = file_get_contents("http://$_SERVER[HTTP_HOST]/wp-content/uploads/wpallimport/files/test123.json");
// 		$decodedJSON = json_decode($readJSON, true);
// 		foreach houses -> if status name = 'Till salu' > get id and call for function to go through each folder file_get_contents("http://$_SERVER[HTTP_HOST]/wp-content/uploads/wpallimport/files/objektID/objektID.json"); -> foreach images as image get url and text
//     // Foreach Objekt, Bring imageID when fetching each image as an argument for naming reason -> foreach -> Image -> Get response code and store the image with correct name
//     // WPALLimport has imageID and locates it using name on image
//
//
// 		function imageImporter($imageURL, $objectName, $list_id){
// 			$URL = $imageURL;
// 			// $URL = "https://connect.maklare.vitec.net:443/image/GetImage?customerId=M31845&imageId=MEDAC2F81A02A6E4C77BF289420DBD79F99";
//
// 			$ch = curl_init();
//
// 			curl_setopt($ch, CURLOPT_USERNAME, "224");
// 			curl_setopt($ch, CURLOPT_PASSWORD, "oFK66Odooi0anQQRMKN2a8fKkhdlQubUvLqXKV8rjicurNCDDNxaCXKgZ0JMjpMs");
// 			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// 			curl_setopt($ch, CURLOPT_BINARYTRANSFER, 1);
// 			curl_setopt($ch, CURLOPT_URL, $URL);
//
// 			$result = curl_exec($ch);
//
// 			if (curl_errno($ch)) {
// 			    die(curl_getinfo($ch));
// 			}
//
// 			$info = curl_getinfo($ch);
// 			curl_close($ch);
//
// 			$http_code = $info["http_code"];
// 			if ($http_code == 401) {
// 			    // Användarnamnet eller lösenordet är felaktigt
// 			}
// 			if ($http_code == 403) {
// 			    // Begärt data som det saknas åtkomst till
// 			}
// 			if ($http_code == 500) {
// 			    // Oväntat fel, kontakta Vitec
// 			}
// 			if ($http_code == 400) {
// 			    $json = json_decode($result, true);
// 			    // Hantera valideringsfel, presenteras i $json
// 			}
// 			$imageCode = base64_encode($result);
//
//
// 			// correct
// 			mkdir("../wp-content/uploads/wpallimport/files/{$list_id}", 0777, true);
// 			file_put_contents( "../wp-content/uploads/wpallimport/files/{$list_id}/{$objectName}_{$imageText}.jpg" , base64_decode($imageCode));
// 			// return $imageCode;
//
// }
//
//
//
//
//
// }


/* End of WPAllimport function */

function my_acf_init() {

	acf_update_setting('google_api_key', 'AIzaSyCmIkJw5rfPQmYCwkdm3-UqJEZnTSt1pPM');
}

add_action('acf/init', 'my_acf_init');

// Added to extend allowed files types in Media upload
add_filter('upload_mimes', 'custom_upload_mimes');
function custom_upload_mimes ( $existing_mimes=array() ) {

// Add *.EPS files to Media upload
$existing_mimes['eps'] = 'application/postscript';

// Add *.AI files to Media upload
$existing_mimes['ai'] = 'application/postscript';

return $existing_mimes;
}

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function danfors_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'danfors' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'danfors' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'danfors_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function danfors_scripts() {
	wp_enqueue_style( 'danfors-style', get_stylesheet_uri() );

	wp_enqueue_script( 'danfors-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'danfors-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'danfors_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 12;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

/**
 * Filter the excerpt "read more" string.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */
function wpdocs_excerpt_more( $more ) {
    return ' ...';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );
