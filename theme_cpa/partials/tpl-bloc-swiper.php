<section class="composante_swiper">
    <h2 data-scrolly="fromBottom"><?php the_sub_field('swiper_titre'); ?></h2>

    <div data-scrolly="fromBottom" class="swiper" data-component="Carousel" data-carousel="navigation">
        <div class="swiper-wrapper">
            <?php if(have_rows('swiper_slide')) : ?>
                <?php while( have_rows('swiper_slide') ): the_row(); ?>

                    <div class="swiper-slide">
                        <?php if( get_sub_field('swiper_image') ): ?>
                            <img data-scrolly="fromBottom" src="<?php the_sub_field('swiper_image'); ?>" />
                        <?php endif; ?>

                        <div>
                            <h3 data-scrolly="fromBottom"><?php the_sub_field('swiper_sous_titre'); ?></h3>
                            
                            <p data-scrolly="fromBottom"><?php the_sub_field('swiper_text'); ?></p>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>                    
        <div class="swiper-pagination"></div>
    </div>
</section>