<section class="composante_swiper">
            <h1 data-scrolly="fromBottom"><?php the_sub_field('swiper_titre'); ?></h1>

            <div data-scrolly="fromBottom" class="swiper" data-component="Carousel" data-carousel="navigation">
                <div class="swiper-wrapper">

                    <?php if(have_rows('swiper_container')) : ?>
                            <?php while( have_rows('swiper_container') ): the_row(); ?>
                        <div class="swiper-slide">
                            <?php $sub_field = get_sub_field('swiper_slide_content'); ?>
                            <p class="wrapper"><?php echo $sub_field; ?></p>
                        </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </section>