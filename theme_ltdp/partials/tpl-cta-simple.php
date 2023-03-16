<section class="composante_h1_p_button">
            <div class="wrapper">
                <h1 data-scrolly="fromBottom"><?php the_sub_field('cta_titre'); ?></h1>
                <p data-scrolly="fromBottom"><?php the_sub_field('cta_text_area'); ?></p>
                    
                
                <?php 
                    $link = get_sub_field('cta_button');
                    if( $link ): 
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                        <a data-scrolly="fromBottom" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                    <?php endif; ?>
            </div>
        </section>