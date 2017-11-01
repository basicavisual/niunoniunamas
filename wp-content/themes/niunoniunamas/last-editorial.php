
      <?php
      $args = array( 'posts_per_page' => 1, 'post_status' => 'publish', 'category_name' => 'Editorial' );

      $post_query1 = new WP_Query($args);
       if($post_query1->have_posts() ) :

         while ($post_query1->have_posts()) : $post_query1->the_post();
          ?>
          <div class="article-box-ed">
          <?php
            get_template_part('content', 'single');
          ?>
          </div>
          <?php
         endwhile;

         else :

           get_template_part('nullcontent');

         endif;
        wp_reset_postdata();
        ?>
