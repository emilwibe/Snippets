<?php if(have_posts()) : ?>

    <main class="main">

      <?php numeric_posts_pagination (); ?>
  <?php while(have_posts()) : the_post(); ?>

        <article>
    <?php if(is_home() || is_category() || is_tag() || is_search()) : ?>

            <h2><a href="<?php echo get_the_permalink(); ?>" class="link article"><?php the_title(); ?></a></h2>

            <div class="tags"><?php the_tags(); ?></div>

            <?php the_excerpt(); ?>

    <?php else : ?>

            <?php get_template_part('template-parts/breadcrumbs'); ?>

            <?php the_content(); ?>

    <?php endif; ?>

        </article>

  <?php if(is_single() || is_page()) : ?>

  <section class="comments-area">

    <?php
      // If comments are open or we have at least one comment, load up the comment template.
 if ( comments_open() || get_comments_number() ) :
  comments_template();
  ?>

</section><!--/.comments-area-->
  <?php endif; ?>

  <?php endif; //SINGULAR ?>

  <?php endwhile; ?>

  <?php numeric_posts_pagination (); ?>

  </main>
<?php endif; ?>