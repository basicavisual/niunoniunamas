
<?php get_header(); ?>

    <main>
      <?php get_sidebar(); ?>
      <?php
      if ( have_posts() ) : while ( have_posts() ) : the_post();

        get_template_part( 'content', get_post_format() );

      endwhile; endif;
      ?>
    </main>
  </body>
</html>
