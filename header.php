<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Welearner
 */
?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="<?php site_url() ?>">
			            <?php if (has_custom_logo()) {
				            echo '<img class="img-fluid"'.the_custom_logo().'>';
			            } else { echo  get_bloginfo('name'); }
			            ?>
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                    data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                    aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
	                    <?php
	                    wp_nav_menu(
		                    array(
			                    'theme_location' => 'menu-1',
			                    'menu_id'        => 'primary-menu',
                                'items_wrap' => '<li id="" class="nav-item">%3$s</li>',
		                    )
	                    );
	                    ?>
                    </li>
                    <li class="nav-item" id="get_start">
                        <a class="nav-link" href="">Get Started</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/home-bg.jpg')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="site-heading">
                        <h1>HH</h1>
                        <span class="subheading">Theme </span>
                    </div>
                </div>
            </div>
        </div>
    </header>
</div>

