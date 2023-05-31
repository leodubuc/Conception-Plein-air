<section class="comp_links">
            <img data-scrolly="fromRight" class="deco" src="https://mhebert.dectim.net/pfe/ltdp/wp-content/themes/theme_ltdp/assets/images/illustrations/deco/jaune-bleu.svg" />
            <div class="wrapper">
                <h2 data-scrolly="fromBottom"><?php the_sub_field('bloc_links_titre'); ?></h2>
                <div class="links">
                    <?php if( have_rows('bloc_links_buttons') ): ?>
                        <?php while( have_rows('bloc_links_buttons') ) : the_row(); ?>
                            <?php 
                            $link = get_sub_field('bloc_links_button_link');
                            if( $link ): 
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                                ?>
                                <a data-scrolly="fromBottom" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </section>

