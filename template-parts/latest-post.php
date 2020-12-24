
	<?php
	$welearner_recent_posts = new WP_Query(array(
		'posts_per_page' => 6,
		'ignore_sticky_posts' => 1,
		'orderby' => "dsec"
	));
?>
<div class="container">
	<div class="div">
		<h2>Learning Support<br>Features</h2>
	</div>
	<div class="row">
		<?php
		while ($welearner_recent_posts->have_posts()) {
			$welearner_recent_posts->the_post();
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
