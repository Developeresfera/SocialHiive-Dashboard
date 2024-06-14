<?php
/**
 * The template for displaying the header
 *
 * This is the template that displays all of the <head> section, opens the <body> tag and adds the site's header.
 *
 * @package HelloElementor
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$viewport_content = apply_filters( 'hello_elementor_viewport_content', 'width=device-width, initial-scale=1' );
$enable_skip_link = apply_filters( 'hello_elementor_enable_skip_link', true );
$skip_link_url = apply_filters( 'hello_elementor_skip_link_url', '#content' );
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="<?php echo esc_attr( $viewport_content ); ?>">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php
		$currentUrl = $_SERVER['REQUEST_URI'];
		$segments = explode('/', rtrim($currentUrl, '/'));
		$lastSlug = end($segments);
		$metaTitle = ucwords(str_replace('-', ' ', $lastSlug));
		echo "<title>$metaTitle</title>";
	?>
	<?php wp_head(); ?>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Avenir:wght@400;500;600;700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Avenir+Next+Thai+Modern&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />

</head>
<body <?php body_class($lastSlug); ?>  id = "bodyclass-<?php echo $lastSlug ?>">

<?php wp_body_open(); ?>
