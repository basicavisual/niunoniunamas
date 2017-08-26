<img src="<?php echo get_bloginfo('template_directory'); ?>/public/carrousel.png" alt="carrousel" class="carrousel">
<div class="secondo">
<div class="last-articles row">
  <?php
  $args = array( 'numberposts' => 3, 'post_status' => 'publish' );
  $recent_posts = wp_get_recent_posts( $args );

   for ( $i = 0; $i < 3; $i++ ) {
     $post_id = $recent_posts[$i]['ID'];
     echo '<div class="col-4">';
      if ( has_post_thumbnail($post_id) ) {
           echo get_the_post_thumbnail( $post_id, 0, array('class' => 'article-pic-sm') );
      } else {
             echo '<div class="no-thumb-sm article-pic-sm"><p>Ni uno ni una más</p></div>';
           };
     echo '<a href="' . get_permalink($post_id) . '">' . '<p class="article-title">' . get_the_title($post_id) . '</p></a>';
     echo '</div>';

   }

       ?>

  </div>
</div>
