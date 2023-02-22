<section class="comp_h2_list_button">
            <?php if( get_sub_field('call_to_action_left_deco') ): ?>
                <img data-scrolly="fromRight" class="deco" src="<?php the_sub_field('call_to_action_left_deco'); ?>" />
            <?php endif; ?>
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
                <p><?php the_sub_field('call_to_action_left_commentaire'); ?></p>
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