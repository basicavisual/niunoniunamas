<div class="all">
    <article class="article">
      <a href="<?php the_permalink(); ?>"><h2 class="article-title-display"><?php the_title(); ?></h2></a>
      <?php the_post_thumbnail('full', array('class' => 'article-pic-display')); ?>
      <?php the_date($post_id); ?>
    </br>
    <?php the_content();?>

    </article>
</div>
