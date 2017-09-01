<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<script type="text/javascript">
document.getElementById("slide-0").className += " active";

(function(){
  $('.carousel-showmanymoveone .item').each(function(){
    var itemToClone = $(this);

    for (var i=1;i<4;i++) {
      itemToClone = itemToClone.next();

      // wrap around if at end of item collection
      if (!itemToClone.length) {
        itemToClone = $(this).siblings(':first');
      }

      // grab item, clone, add marker class, add to collection
      itemToClone.children(':first-child').clone()
        .addClass("cloneditem-"+(i))
        .appendTo($(this));
    }
  });
}());

</script> -->



<?php wp_footer(); ?>
<script type="text/javascript">
	jQuery(document).ready(function() {
		jQuery('#slider_44').owlCarousel({
			items : 1,
			smartSpeed : 200,
			autoplay : true,
			autoplayTimeout : 5000,
			smartSpeed : 200,
			fluidSpeed : 200,
			autoplaySpeed : 200,
			navSpeed : 200,
			dotsSpeed : 200,
			loop : true,
			autoplayHoverPause : true,
			nav : true,
			navText : ['',''],
			dots : true,
			responsiveRefreshRate : 200,
			mergeFit : true,
			mouseDrag : true,
			touchDrag : true
		});
		sa_resize_slider_44();
		window.addEventListener('resize', sa_resize_slider_44);
		function sa_resize_slider_44() {
			var min_height = '15';
			var win_width = jQuery(window).width();
			var slider_width = jQuery('#slider_44').width();
			if (win_width < 480) {
				var slide_width = slider_width / 1;
			} else if (win_width < 768) {
				var slide_width = slider_width / 1;
			} else if (win_width < 980) {
				var slide_width = slider_width / 1;
			} else if (win_width < 1200) {
				var slide_width = slider_width / 1;
			} else if (win_width < 1500) {
				var slide_width = slider_width / 1;
			} else {
				var slide_width = slider_width / 1;
			}
			slide_width = Math.round(slide_width);
			var slide_height = '0';
			if (min_height == 'aspect43') {
				slide_height = (slide_width / 4) * 3;				slide_height = Math.round(slide_height);
			} else if (min_height == 'aspect169') {
				slide_height = (slide_width / 16) * 9;				slide_height = Math.round(slide_height);
			} else {
				slide_height = (slide_width / 100) * min_height;				slide_height = Math.round(slide_height);
			}
			jQuery('#slider_44 .owl-item .sa_hover_container').css('min-height', slide_height+'px');
		}
	});
</script>

</body>
</html>
