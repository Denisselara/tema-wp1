

  <?php get_header(); ?>

<div class="container">

	<div class="row">
  	<?php
  		$arg = array(
  			'post_type'		 => 'post',
  			'posts_per_page' => -1
  		);
  		$get_arg = new WP_Query( $arg );
  		while ( $get_arg->have_posts() ) {
  			$get_arg->the_post();
  		?>
  			<div class="col-md-4 mt-5">
  				<h4><?php the_title() ?></h4>

      <?php
      the_post_thumbnail('medium');

      // Ruta de la imagen destacada (tamaño completo)
      /*global $post;
      $thumbID = get_post_thumbnail_id( $post->ID );
      $imgDestacada = wp_get_attachment_url( $thumbID );
      echo $imgDestacada;*/
      ?>
  				<p><?php the_excerpt() ?></p>
  				<a class="btn btn-primary" href="<?php get_permalink() ?>">Léeme completo</a>
  			</div>
  		<?php } wp_reset_postdata();
  	?>
	</div>
</div>

holaaaaaaa
<?php get_footer(); ?>
