
<div class="span4">
<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

        <aside id="archives" class="widget">
            <h3 class="widget-title"><?php _e( 'Archives', 'bckspace' ); ?></h3>

            <ul>
                <?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
            </ul>
        </aside>

        <aside id="meta" class="widget">
            <h3 class="widget-title"><?php _e( 'Meta', 'bckspace' ); ?></h3>
            <ul>
                <?php wp_register(); ?>
                <li><?php wp_loginout(); ?></li>
                <?php wp_meta(); ?>
            </ul>
        </aside>

<?php endif; // end sidebar widget area ?>
</div>
