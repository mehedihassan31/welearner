<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Welearner
 */

get_header();
?>

<?php
get_template_part( '/template-parts/popular-topics' );
get_template_part( '/template-parts/Tranding' );
get_template_part( '/template-parts/toprated' );
get_template_part( '/template-parts/counter' );
get_template_part( '/template-parts/testimonial' );
get_template_part( '/template-parts/latest-post' );
get_template_part( '/template-parts/calltoaction' );

?>











<?php

get_footer();
