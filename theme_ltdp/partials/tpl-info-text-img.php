<section class="composante_texte_image_1">
    <div class="wrapper">
        <div class="content">
            <h2 data-scrolly="fromLeft"><?php the_sub_field('bloc_info_text_img_titre'); ?></h2>

            <p data-scrolly="fromLeft"><?php the_sub_field('bloc_info_text_img_text_area')?></p>

            <?php 
                    $link = get_sub_field('bloc_info_text_img_button');
                    if( $link ): 
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                        <a data-scrolly="fromBottom" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                <?php endif; ?>
        </div>

        <?php 
        $image = get_sub_field('bloc_info_text_img_image');
        if( $image ): ?>
                <img data-scrolly="fromBottom" src="<?php echo esc_url($image['sizes']['thumbnail']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        
    </div>
</section>