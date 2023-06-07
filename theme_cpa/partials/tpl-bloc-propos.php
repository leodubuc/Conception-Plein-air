<section class="compo_propos" id="intro">
    <?php if( have_rows('contenu_composante') ): ?>
        <?php while( have_rows('contenu_composante') ) : the_row(); ?>
            <article>
                <div class="blur"></div>
                <div class="wrapper">
                    <h2 data-scrolly="fromLeft"><?php the_sub_field('background_flou_title'); ?></h2>
                    <p data-scrolly="fromLeft"><?php the_sub_field('background_flou_text'); ?></p>
                </div>

                <div class="bg_image">
                    <?php if( get_sub_field('background_flou_image') ): ?>
                        <img data-scrolly="fromRight" src="<?php the_sub_field('background_flou_image'); ?>" />
                    <?php endif; ?>
                </div>
            </article>
        <?php endwhile; ?>
    <?php endif; ?>  
</section>