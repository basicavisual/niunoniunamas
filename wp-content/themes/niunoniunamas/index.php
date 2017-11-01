
<?php get_header(); ?>

    <main>
      <?php get_sidebar(); ?>
      <?php
          
          if(is_home() ) {
            get_template_part( 'last', 'editorial' );
          }
      ?>
    </main>
<?php get_footer(); ?>
