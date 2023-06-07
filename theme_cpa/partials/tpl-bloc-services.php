<section class="services" id="intro">
    <div class="wrapper">
    <?php if( have_rows('contenu_bloc_liste_numero') ): ?>
        <?php while( have_rows('contenu_bloc_liste_numero') ) : the_row(); ?>
            <article>
                <h2 data-scrolly="fromLeft"><?php the_sub_field('titre_services'); ?></h2>
                
                <?php if( have_rows('contenu_services') ): ?>
                    <?php while( have_rows('contenu_services') ) : the_row(); ?>
                        <ul>
                            <li data-scrolly="fromLeft"><?php the_sub_field('listes_services'); ?></li>
                        </ul>
                    <?php endwhile; ?>
                <?php endif; ?> 

                <span data-scrolly="fromBottom"><?php the_sub_field('chiffre_services'); ?></span>
                
                <?php if( get_sub_field('image_services') ): ?>
                    <img src="<?php the_sub_field('image_services'); ?>" />
                <?php endif; ?>
            </article>
        <?php endwhile; ?>
    <?php endif; ?> 
    </div>
</section>