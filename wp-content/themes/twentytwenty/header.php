<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>
	  <meta charset="?php bloginfo( 'charset' ); ?>">
	  <meta content="width=device-width, initial-scale=1.0" name="viewport">

	  <title><?php echo get_bloginfo( 'name' ) . ' : '. get_bloginfo( 'description' ); ?></title>
	  <meta content="" name="description">
	  <meta content="" name="keywords">
	  
	  <link href="<?php echo get_site_url(); ?>/wp-content/uploads/2023/05/favicon-1.png" rel="icon">
	  <!-- Google Fonts -->
	  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	  <link href="wp-content/themes/twentytwenty/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	  
	  <!-- Template Main CSS File -->
	  <link href="wp-content/themes/twentytwenty/assets/css/style.css" rel="stylesheet">

	</head>

	<body <?php body_class(); ?>>

		<?php
		wp_body_open();
		?>

		<!-- #site-header -->

		<?php
		// Output the menu modal.
		
