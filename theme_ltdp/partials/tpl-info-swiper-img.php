<section class="composante_texte_et_swiper">
            <div class="wrapper">
                <h1 data-scrolly="fromBottom"><?php the_sub_field('info_swiper_titre'); ?></h1>
                <p data-scrolly="fromBottom"><?php the_sub_field('info_swiper_text_area'); ?></p>

                <div class="swiper" data-component="Carousel" data-carousel="navigation" data-scrolly="fromBottom">
                    <div class="swiper-wrapper">
                    <?php if(have_rows('info_swiper_content')) : ?>
                        <?php while( have_rows('info_swiper_content') ): the_row(); ?>
                                <div class="swiper-slide">
                                    <?php $image = get_sub_field('info_swiper_slide'); ?>
                                    <?php if ($image) : ?>
                                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                                    <?php endif; ?>
                                </div>    
                        <?php endwhile; ?>
                    <?php endif; ?>
                    </div>
                </div>    
                
            </div>

            <?php if( get_sub_field('info_swiper_deco') ): ?>
                <img data-scrolly="fromRight" class="deco" src="<?php the_sub_field('info_swiper_deco'); ?>" />
            <?php endif; ?>
        </section>