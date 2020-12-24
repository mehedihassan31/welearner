
<?php

$tranding = new WP_Query(
	array(
		'post_type' => 'course',
		'cat'       => 'course_category',
		'ignore_sticky_posts' => 1,
		'orderby'   => 'date',
		'Order'     => 'ASC'
	)
);

?>
<div class="container">
    <div >
        <h2><?php _e('Tranding','welearner');?></h2>
    </div>
    <div class="row">
		<?php
		while ($tranding->have_posts()) {
			$tranding->the_post();
			?>

            <div class="col-md-4  inline-block ">
                <div class="card" style="width: 14rem;">
					<?php
					if ( ! empty( get_the_post_thumbnail_url() ) ) {
						?>
                        <img class="card-img-top" src="<?php echo get_the_post_thumbnail_url('', 'thumbnail'); ?>" alt="Card image cap">

						<?php
					}
					?>
                    <div><p> price: <?php echo get_post_meta($post->ID,'price',true);?> </p></div>
                    <div class="card-body">
                        <a href="#" class="card-title"><h5><?php the_title(); ?> </h5></a>
                    </div>
                </div>
            </div>

			<?php
			wp_reset_query();
		}
		?>
    </div>
</div>
