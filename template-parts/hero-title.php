<div class="introduction">
    <?php if(is_front_page()) : ?>

        <h1 class="title"><?php bloginfo('name'); ?></h1>
        <p class="description"><?php bloginfo('description'); ?></p>

    <?php elseif(is_category() || is_tag()) : ?>

        <h1 class="title"><?php echo single_term_title(); ?></h1>

    <?php elseif($_GET['s']) : ?>

        <h1 class="title"><?php echo __('Search Result:', 'snippetsdk'); ?>: <?php echo $_GET['s']; ?></h1>

    <?php elseif( is_404() ) : ?>

        <h1 class="title">404 - Siden findes ikke</h1>

    <?php else : ?>

        <h1 class="title"><?php the_title(); ?></h1>

    <?php endif; ?>
</div>