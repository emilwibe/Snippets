<form id="searchform" class="searchform" method="get" action="<?php echo home_url('/'); ?>">
  <img src="<?php echo get_template_directory_uri() . '/assets/icons/magnifying-glass.svg'; ?>" id="search-icon" alt="search icon" class="icon search">  
  <input type="text" class="search-field is-hidden" id="search-input" name="s" value="<?php the_search_query(); ?>">
  <input type="submit" value="Search" class="submit search">
</form>