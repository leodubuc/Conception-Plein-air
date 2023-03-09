<section class="comp_h2_list_button">
                <img data-scrolly="fromRight" class="deco" src="https://mhebert.dectim.net/pfe/ltdp/wp-content/themes/theme_ltdp/assets/images/illustrations/deco/vert-bleu.svg" />
            <div class="wrapper">
                <h2 data-scrolly="fromLeft"><?php the_sub_field('call_to_action_left_titre'); ?></h2>
                <span data-scrolly="fromLeft"><?php the_sub_field('call_to_action_left_sous_titre'); ?></span>

                <?php $rows = get_sub_field('call_to_action_left_liste'); ?>
                        <?php if( $rows ) {
                            echo '<ul>';
                            foreach( $rows as $row ) {
                                echo '<li data-scrolly="fromLeft">';
                                    echo( $row['call_to_action_left_element'] );
                                echo '</li>';
                            }
                            echo '</ul>';
                        } ?>
                        <?php if( get_sub_field('call_to_action_left_commentaire') ): ?>
                            <p><?php the_sub_field('call_to_action_left_commentaire'); ?></p>
                        <?php endif; ?>    
                    <?php 
                    $link = get_sub_field('call_to_action_left_bouton');
                    if( $link ): 
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                        <div class="button_container">
                            <a data-scrolly="fromRight" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                        </div>
                <?php endif; ?>
                
                </div>   
            </div>
        </section>