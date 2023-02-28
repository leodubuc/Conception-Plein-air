<section class="galerie">
    <div class="wrapper">
        <?php 
        $images = get_sub_field('bloc_gallery_container');
        if( $images ): ?>
            <?php foreach( $images as $image ): ?>
                <img data-scrolly="fromBottom" src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</section>  
    