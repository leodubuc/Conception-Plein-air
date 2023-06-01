<section class="composante_3colones">
    <h2 data-scrolly="fromLeft"><?php the_sub_field('column_titre'); ?></h2>
    
    <div class="wrapper">
        <?php if(have_rows('column_contenu')) : ?>
            <?php while( have_rows('column_contenu') ): the_row(); ?>
                <div>
                    <?php if( get_sub_field('column_content_image') ): ?>
                        <img data-scrolly="fromBottom" src="<?php the_sub_field('column_content_image'); ?>" />
                    <?php endif; ?>
                
                    <p data-scrolly="fromLeft"><?php the_sub_field('column_content_text'); ?></p>
                </div>
            <?php endwhile; ?>
        <?php endif; ?> 
    </div>
</section>