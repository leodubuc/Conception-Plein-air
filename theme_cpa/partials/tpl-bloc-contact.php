<section class="compcontact">
            <img data-scrolly="fromRight" class="deco1" src="https://mhebert.dectim.net/pfe/ltdp/wp-content/themes/theme_ltdp/assets/images/illustrations/deco/bleu-blanc.svg" />
            <div class="wrapper">
                <h1 data-scrolly="fromBottom"><?php the_sub_field('bloc_contact_titre'); ?></h1>

                <div class="info_contact" data-scrolly="fromBottom">
                    <?php if(have_rows('bloc_contact_com')) : ?>   
                        <?php while (have_rows('bloc_contact_com')) : the_row() ?> 
                            <div>
                                <svg class="icon">
                                    <use xlink:href="#icon-cell"></use>
                                </svg>
                                        
                                <?php 
                                $link = get_sub_field('bloc_contact_phone');
                                if( $link ): 
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                                ?>
                                    <h4><a data-scrolly="fromBottom" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a></h4>
                                <?php endif; ?>           
                            </div> 
                            
                            <div>
                            <svg class="icon">
                                    <use xlink:href="#icon-email"></use>
                                </svg>
                                        
                                <?php 
                                $link = get_sub_field('bloc_contact_email');
                                if( $link ): 
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                                ?>
                                    <h4><a data-scrolly="fromBottom" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a></h4>
                                <?php endif; ?>
                            </div>

                            <div>
                            <svg class="icon">
                                    <use xlink:href="#icon-mao"></use>
                                </svg>
                                        
                                <?php 
                                $link = get_sub_field('bloc_contact_adress');
                                if( $link ): 
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                                ?>
                                    <h4><a data-scrolly="fromBottom" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a></h4>
                                <?php endif; ?>
                            </div>
                            
                        <?php endwhile; ?>                
                    <?php endif; ?>       
                </div>                     
            </div>

            <img data-scrolly="fromRight" class="deco2" src="https://mhebert.dectim.net/pfe/ltdp/wp-content/themes/theme_ltdp/assets/images/illustrations/deco/bleu-fonce-pale.svg" />
</section>