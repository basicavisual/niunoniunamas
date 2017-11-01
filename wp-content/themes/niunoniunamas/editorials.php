<?php
    /**
    * Template Name: Editorials
    */
?>
<?php get_header(); ?>

    <main>
      <div class="subtitle-box">
        <h3 class="subtitle-text">Editoriales:</h3>
      </div>
      
<?php
$argus = array(
    'post_type' => 'post',
    'cat' => 2
);

$post_query1 = new WP_Query($argus);
 if($post_query1->have_posts() ) :

   while ($post_query1->have_posts()) : $post_query1->the_post();

      get_template_part('content');

   endwhile;

   else :

     get_template_part('nullcontent');

   endif;
  wp_reset_postdata();
  ?>

</main>

<?php get_footer(); ?>
