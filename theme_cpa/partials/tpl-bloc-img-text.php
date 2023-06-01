<section class="intro" id="intro">
    <?php if( have_rows('bloc-img-text-contenu') ): ?>
        <?php while( have_rows('bloc-img-text-contenu') ) : the_row(); ?>
        <article class="composante_texte_image_1">
            <div class="content">
                <h2 data-scrolly="fromLeft"><?php the_sub_field('bloc-img-text-titre'); ?></h2>

                <p data-scrolly="fromLeft"><?php the_sub_field('bloc-img-text-text'); ?></p>
            </div>

            <?php if( get_sub_field('bloc-img-text-image') ): ?>
                <img data-scrolly="fromRight" src="<?php the_sub_field('bloc-img-text-image'); ?>" />
            <?php endif; ?>
        </article>
        <?php endwhile; ?>
    <?php endif; ?>  
</section>