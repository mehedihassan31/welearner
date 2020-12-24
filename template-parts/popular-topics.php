<?php

$term = get_terms( array(
	'taxonomy'   => 'course_category',
	'hide_empty' => false,
     'orderby'=>'datetime'

) );

?>
<div class="container">
    <div class="div">
        <h2>Popular Topics</h2>
    </div>
    <div class="row">
			<?php
			foreach ( $term as $terms ) {
				?>
                <div class="col-md-3 col-4 inline-block m-2">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                            <a href="#" class="card-title"><h5><?php echo $terms->name; ?> </h5></a>
                        </div>
                    </div>
                </div>
				<?php
			}

			?>
    </div>

</div>
