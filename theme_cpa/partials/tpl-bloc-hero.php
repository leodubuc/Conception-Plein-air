<section class="hero">
    <div class="wrapper">
        <div>
            <h1 data-scrolly="fromBottom"><?php the_sub_field('hero_titre'); ?></h1>

            <?php $text_hero = get_sub_field('hero_texte') ?>
            <p data-scrolly="fromBottom"><?php echo ($text_hero); ?></p>

            <a href="#" class="plus">En savoir plus</a>
        </div>

        <a href="#intro">
            <?php if( get_sub_field('hero_fleche') ): ?>
                <img data-scrolly="fromRight" src="<?php the_sub_field('hero_fleche'); ?>" />
            <?php endif; ?>
        </a>

    </div>

    <div class="bg_image">
        <?php if( get_sub_field('hero_background') ): ?>
            <img data-scrolly="fromRight" src="<?php the_sub_field('hero_background'); ?>" />
        <?php endif; ?>

        <div class="blur"></div>
    </div>

</section>