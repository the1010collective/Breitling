<?php get_header(); ?>
  <div class="row"><div class="span8"><?php wpstrapped_breadcrumb(); ?></div></div>

  <div class="row-fluid">
    <div class="span8">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <h1 class="entry-title"><?php the_title(); ?></h1>
                <?php the_content(); ?>
                <?php //comments_template(); ?>
      <?php endwhile; else: ?>
                <p><?php _e('Sorry, this page does not exist.'); ?></p>
      <?php endif; ?>
    </div>
    <?php get_sidebar(); ?> 
  </div>

<?php get_footer(); ?>