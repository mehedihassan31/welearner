<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Welearner
 */

?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <footer id="colophon" class="site-footer" style="color: white">
                <div class="site-info">
                    <span class="sep"> | </span>
					<?php
					/* translators: 1: Theme name, 2: Theme author. */
					printf( esc_html__( 'Theme: %1$s by %2$s.', 'welearner' ), 'welearner', '<a href=""></a>' );
					?>
                </div><!-- .site-info -->
            </footer><!-- #colophon -->
        </div>
    </div>
</div>


</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
