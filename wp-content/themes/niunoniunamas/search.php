
<?php get_header(); ?>

    <main>
      <div class="subtitle-box">
        <h2>Resultados para: <?php the_search_query(); ?></h2>
      </div>
      <?php
      if (have_posts()) : ?>

        	<?php
        	while (have_posts()) : the_post();

        	get_template_part('content');

        	endwhile;

        	else :

        		get_template_part('nullcontent');

        	endif; ?>
    </main>
<?php get_footer(); ?>
