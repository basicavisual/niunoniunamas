  <label for="s">Search:</label>
    <form role="search" id="searchform" method="get" action="<?php echo home_url( '/' ); ?>">
      <div>
         <input type="text" name="s" id="s" size="15" placeholder="<?php the_search_query(); ?>" />
         <input type="submit" id="searchsubmit" value="Búsqueda" />
      </div>
     </form>
