<div class="article-box">
    <article class="article">

      <div class="article-box-small">
        <div class="row">
          <div class="col-3">
            <a href="#"><img src="<?php the_post_thumbnail( 'medium' );?>" alt="<?php the_title(); ?>" class="article-pic-sm"></a>
          </div>
          <div class="col-9">
            <h3 class="article-title-posts"><?php the_title(); ?></h3>
            <p><?php the_excerpt(); ?></p>
            <a href="<?php get_permalink($post_id); ?>" class="read-more">Read more...</a>
          </div>
        </div>
      </div>

    </article>
</div>
