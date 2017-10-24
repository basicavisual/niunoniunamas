
<?php get_header(); ?>

    <main>
      <?php get_sidebar(); ?>
      <?php
      // if ( have_posts() ) : while ( have_posts() ) : the_post();
  //      get_template_part( 'content', get_post_format() );
      get_template_part( 'editorial-content');
//      endwhile; endif;
      ?>
    </main>
<?php get_footer(); ?>
