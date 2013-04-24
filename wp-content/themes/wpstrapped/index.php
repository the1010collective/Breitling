<?php get_header(); ?>

      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit">
        <img src="<?php echo get_template_directory_uri() ?>/images/hero.png" class="pull-right" />
        <h1>WpStraps WordPres Theme</h1>
        <p>Fully Responsive WordPress theme built on top of Twitter Bootstrap.</p>
        <p><a class="btn btn-primary btn-large">Learn more &raquo;</a></p>
      </div>

      
      
      <div class="row">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
              
              <div class="span4">
                <h1 class="entry-title"><?php the_title(); ?></h1>	
                <?php the_excerpt(); ?>
              </div>              
          <?php endwhile; else: ?>
          <div class="span12">
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
          </div>
      <?php endif; ?>
      </div>

<?php get_footer(); ?>