<div class="slider-main">
<?php echo do_shortcode('[slide-anything id="44"]'); ?>
</div>
<div class="secondo">
<div class="last-articles row">
  <?php
  $args = array( 'numberposts' => 10, 'post_status' => 'publish' );
  $recent_posts = wp_get_recent_posts( $args );

  for ( $i = 0; $i < count($recent_posts); $i++ ) {
        $post_id = $recent_posts[$i]['ID'];
    echo '<div class="col-4 item" id="slide-' . $i. '">';
     if ( has_post_thumbnail($post_id) ) {
          echo get_the_post_thumbnail( $post_id, 0, array('class' => 'article-pic-sm') );
     } else {
            echo '<div class="no-thumb-sm article-pic-sm"><p>Ni uno ni una más</p></div>';
          };
    echo '<a href="' . get_permalink($post_id) . '">' . '<p class="article-title">' . get_the_title($post_id) . '</p></a>';
    echo '</div>';
    wp_reset_query();

  }

       ?>

         <!-- <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
       <a class="next" onclick="plusSlides(1)">&#10095;</a> -->

  </div>
</div>
