<?php
    /**
    * Template Name: Site Archive
    */
?>

  <?php // get_template_part( 'archive' );  ?>
  <?php get_header(); ?>
  <main>
    <?php
    $args = array(
        'post_type' => 'post'
    );
    $post_query = new WP_Query($args);
    if($post_query->have_posts() ) :
      	?>
        <div class="subtitle-box">
          <h3 class="subtitle-text">Archivos:</h3>
        </div>


      	<?php
      	while ($post_query->have_posts()) : $post_query->the_post();
      	get_template_part('content');
      	endwhile;
      	else :
      		get_template_part('nullcontent');
      	endif;
        wp_reset_postdata();
        ?>
        </main>

<?php get_footer(); ?>
