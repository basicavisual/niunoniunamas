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
          <h3 class="subtitle-text">
            <?php

            if ( is_category() ) {
              single_cat_title();
            } elseif ( is_tag() ) {
              single_tag_title();
            } elseif ( is_author() ) {
              the_post();
              echo 'Archivos del autor: ' . get_the_author();
              rewind_posts();
            } elseif ( is_day() ) {
              echo 'Archivos del día: ' . get_the_date();
            } elseif ( is_month() ) {
              echo 'Archivos del mes: ' . get_the_date('F Y');
            } elseif ( is_year() ) {
              echo 'Archivos del año: ' . get_the_date('Y');
            } else {
              echo 'Archivos:';
            }

          ?></h3>
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
