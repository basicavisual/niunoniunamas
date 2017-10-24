<div class="article-box">
    <article class="article">
      <?php
      $args = array( 'numberposts' => 1, 'post_status' => 'publish', 'category_name' => 'Editorial' );
      $recent_posts = wp_get_recent_posts( $args );
      $post_id = $recent_posts[$i]['ID'];
      echo '<a href="' . get_permalink($post_id) . '"><h2 class="article-title-display">' . get_the_title($post_id) . '</h2></a>';
      echo get_the_post_thumbnail($post_id, 'full', array('class' => 'article-pic-display'));
      echo '</br>' . get_the_date($post_id) . '</br>';
      echo '</br>' . get_the_content($post_id);

      ?>

    </article>
</div>
