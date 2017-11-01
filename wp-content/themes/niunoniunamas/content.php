<div class="article-box-small">
    <div class="row">
        <div class="col-3 archive-box">
          <?php if ( has_post_thumbnail() ) : ?>
              <a href="<?php the_permalink(); ?>"><img src="<?php
              the_post_thumbnail_url();?>" alt="<?php the_title(); ?>" class="article-pic-sm"></a>
              </a>
          <?php else: ?>
            <a href="<?php the_permalink() ?>"><div class="no-thumb-sm article-pic-sm"><p>Ni uno ni una más</p></div></a>
          <?php endif; ?>

        </div>
        <div class="col-9 archive-box">
          <h3 class="article-title-posts"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          <p><?php the_excerpt(); ?></p>
          <p><a href="<?php the_permalink(); ?>" class="read-more">Leer más...</a></p>
        </div>
    </div>
</div>
