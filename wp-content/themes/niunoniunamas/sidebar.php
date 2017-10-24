<div class="slider-main">
<?php
echo do_shortcode('[slide-anything id="44"]');
?>
</div>
<div class="secondo">
<div class="last-articles row">
  <div class="carousel slide multi-item-carousel" id="theCarousel">
    <div class="carousel-inner">
  <?php
  $args = array( 'numberposts' => 10, 'post_status' => 'publish' );
  $recent_posts = wp_get_recent_posts( $args );

  for ( $i = 0; $i < count($recent_posts); $i++ ) {
        $post_id = $recent_posts[$i]['ID'];
    echo '<div class="item" id="slide-' . $i. '"><div class="col-xs-4">';
     if ( has_post_thumbnail($post_id) ) {
          echo '<a href="' . get_permalink($post_id) . '">' . get_the_post_thumbnail( $post_id, 0, array('class' => 'article-pic-sm') ) . '</a>';
     } else {
          echo '<a href="' . get_permalink($post_id) . '">' . '<div class="no-thumb-sm article-pic-sm"><p>Ni uno ni una más</p></div></a>';
          };
    echo '<a href="' . get_permalink($post_id) . '">' . '<p class="article-title">' . get_the_title($post_id) . '</p></a>';
    echo '</div></div>';
    wp_reset_query();

  }


       ?>

         <!-- <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
       <a class="next" onclick="plusSlides(1)">&#10095;</a> -->
        </div>
        <a class="left carousel-control" href="#theCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
        <a class="right carousel-control" href="#theCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
      </div>
  </div>
</div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js" ></script>

  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script> -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" ></script>
  <script>var $j = jQuery.noConflict(true);</script>
  <script type="text/javascript">
  var d = document.getElementById("slide-0");
  d.className += " active";
  </script>
  <script type="text/javascript">
        // Instantiate the Bootstrap carousel
        $j('.multi-item-carousel').carousel({
        interval: false
        });

        // for every slide in carousel, copy the next slide's item in the slide.
        // Do the same for the next, next item.
        $j('.multi-item-carousel .item').each(function(){
        var next = $j(this).next();
        if (!next.length) {
          next = $j(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo($j(this));

        if (next.next().length>0) {
          next.next().children(':first-child').clone().appendTo($j(this));
        } else {
          $j(this).siblings(':first').children(':first-child').clone().appendTo($j(this));
        }
        });
  </script>
