
        <section class="composante_service">
            <?php if( get_sub_field('intro_service_deco') ): ?>
                <img class="deco" src="<?php the_sub_field('intro_service_deco'); ?>" />
            <?php endif; ?>
            <div class="wrapper">
                <h1 data-scrolly="fromBottom"><?php the_sub_field('intro_service_titre'); ?></h1>
                <div class="content">
                    <div class="liste">
                        <h3 data-scrolly="fromBottom"><?php the_sub_field('intro_service_sous_titre'); ?></h3>
                        <p data-scrolly="fromBottom"><?php the_sub_field('intro_service_texte'); ?></p>


                        <?php $rows = get_sub_field('intro_service_liste'); ?>
                        <?php if( $rows ) {
                            echo '<ul>';
                            foreach( $rows as $row ) {
                                echo '<li data-scrolly="fromLeft">';
                                    echo( $row['intro_service_element_liste'] );
                                echo '</li>';
                            }
                            echo '</ul>';
                        } ?>
          
                        <span><?php the_sub_field('intro_service_commentaire'); ?></span>
                        
                    </div>

                    <?php if( get_sub_field('intro_service_image') ): ?>
                        <img data-scrolly="fromRight" src="<?php the_sub_field('intro_service_image'); ?>" />
                    <?php endif; ?>
                </div>
                
                <?php 
                $link = get_sub_field('intro_service_bouton');
                if( $link ): 
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                <?php endif; ?>
            </div>
        </section>
