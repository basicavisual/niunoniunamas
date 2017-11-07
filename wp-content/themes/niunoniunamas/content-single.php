<div class="article-box">
    <article class="article">
      <a href="<?php the_permalink(); ?>"><h2 class="article-title-display"><?php the_title(); ?></h2></a>
      <?php get_template_part( 'postinfo' ); ?>
      <?php the_post_thumbnail('full', array('class' => 'article-pic-display')); ?>    
    <?php the_content();?>
    <p><?php the_tags( 'Tags: ', ', ', '<br />' ); ?></p>
    </article>
</div>
