<section class="comp_grille">
    <?php if( have_rows('grid_content') ): ?>
        <?php while( have_rows('grid_content') ) : the_row(); ?>
            <?php if( have_rows('organisateur_grille') ): ?>
                <?php while( have_rows('organisateur_grille') ) : the_row(); ?>
                <?php 
                    $link = get_sub_field('grid_link');
                    if( $link ): 
                        $link_url = $link['url'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                        <a data-scrolly="fromBottom" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">

                        <?php if( get_sub_field('grid_image') ): ?>
                            <img data-scrolly="fromRight" src="<?php the_sub_field('grid_image'); ?>" />
                        <?php endif; ?>

                        <div class="hover">
                            <span data-scrolly="fromLeft"><?php the_sub_field('grid_project_title'); ?></span>

                            <p data-scrolly="fromLeft"><?php the_sub_field('grid_tags'); ?></p>

                            <div></div>
                        </div>
                    <?php endif; ?> 
                </a>
                <?php endwhile; ?>
            <?php endif; ?>     
        <?php endwhile; ?>
    <?php endif; ?> 
</section>