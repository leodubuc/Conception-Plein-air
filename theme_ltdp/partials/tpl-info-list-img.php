<section class="composante_texte_image_2">
    <div class="wrapper">
        <div class="content">
            <div>
                <h2 data-scrolly="fromLeft"><?php the_sub_field('bloc_info_list_img_titre'); ?></h2>
                
                        <?php $rows = get_sub_field('bloc_info_list_img_liste'); ?>
                                    <?php if( $rows ) {
                                        echo '<ul>';
                                        foreach( $rows as $row ) {
                                            echo '<li data-scrolly="fromLeft">';
                                                echo( $row['bloc_info_list_img_list_element'] );
                                            echo '</li>';
                                        }
                                        echo '</ul>';
                                    } ?>                   
                    

                <?php 
                        $link = get_sub_field('bloc_info_list_img_button');
                        if( $link ): 
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                            ?>
                            <a data-scrolly="fromBottom" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                    <?php endif; ?>
            </div>

            <?php if( get_sub_field('bloc_info_list_img_image') ): ?>
                <img data-scrolly="fromBottom" src="<?php the_sub_field('bloc_info_list_img_image'); ?>" />
            <?php endif; ?>
        </div>
    </div>
</section>
