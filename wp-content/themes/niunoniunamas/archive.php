<?php get_header(); ?>
<main>
<?php
      if(have_posts() ) :

      	?>
        <div class="subtitle-box">
          <h3 class="subtitle-text">
            <?php

            if ( is_category() ) {
              echo 'Archivos de la categoría: ' . single_cat_title('', false);
            } elseif ( is_tag() ) {
              echo 'Archivos de la etiqueta: ' . single_tag_title('', false);
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
      	while (have_posts()) : the_post();

      	get_template_part('content');

      	endwhile;

      	else :
      		get_template_part('nullcontent');

      	endif;

        ?>

</main>

<?php get_footer(); ?>
