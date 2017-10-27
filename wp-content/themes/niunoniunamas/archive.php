<?php get_header(); ?>

    <main>
      <div class="subtitle-box">
        <h3 class="subtitle-text">Archivos</h3>
        <?php // get_search_form(); ?>

      </div>

        <?php global $post;
        // $args = array( 'category' => 2 );
        $myposts = get_posts();
        foreach ( $myposts as $post ) :
          setup_postdata( $post ); ?>

<div class="article-box-small">
      <div class="row">
        <div class="col-3 archive-box">
          <?php if ( has_post_thumbnail() ) : ?>
              <a href="<?php the_permalink(); ?>"><img src="<?php
              the_post_thumbnail_url();?>" alt="<?php the_title(); ?>" class="article-pic-sm"></a>
              </a>
          <?php else: ?>
            <a href="<?php the_permalink() ?>"><div class="no-thumb-sm article-pic-sm"><p>Ni uno ni una más</p></div></a>
          <?php endif; ?>

        </div>
        <div class="col-9 archive-box">
          <h3 class="article-title-posts"><?php the_title(); ?></h3>
          <p><?php the_excerpt(); ?></p>
          <p><a href="<?php the_permalink(); ?>" class="read-more">Leer más...</a></p>
        </div>
      </div>
      </div>
<?php endforeach;
      wp_reset_postdata();
?>

</main>

<?php get_footer(); ?>
