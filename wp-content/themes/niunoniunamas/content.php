<div class="all">
    <article class="article">
      <h2 class="article-title-display"><?php the_title(); ?></h2>
      <?php	the_post_thumbnail('full', array('class' => 'article-pic-display')); ?>
      <p class="article-date"><?php the_date(); ?></p>
      <?php the_content(); ?>
    </article>
</div>
