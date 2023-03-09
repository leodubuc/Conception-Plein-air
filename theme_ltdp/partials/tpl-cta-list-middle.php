<section class="info_membre">
            <div class="wrapper">
                <h2 data-scrolly="fromBottom"><?php the_sub_field('call_to_action_titre'); ?></h2>

                <?php if( get_sub_field('call_to_action_sous_titre') ): ?>
                    <h4 data-scrolly="fromBottom"><?php the_sub_field('call_to_action_sous_titre'); ?></h4>
                <?php endif; ?> 
                

                <div data-scrolly="fromLeft">
                <?php $rows = get_sub_field('call_to_action_liste'); ?>
                        <?php if( $rows ) {
                            echo '<ul>';
                            foreach( $rows as $row ) {
                                echo '<li>';
                                    echo( $row['call_to_action_element'] );
                                echo '</li>';
                            }
                            echo '</ul>';
                        } ?>
                </div>

                <?php 
                    $link = get_sub_field('call_to_action_bouton');
                    if( $link ): 
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                        <a data-scrolly="fromBottom" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                    <?php endif; ?>

                <?php if( get_sub_field('call_to_action_commentaire') ): ?>
                    <p data-scrolly="fromBottom"><?php the_sub_field('call_to_action_commentaire'); ?></p>
                <?php endif; ?> 
                
            </div>
        </section>