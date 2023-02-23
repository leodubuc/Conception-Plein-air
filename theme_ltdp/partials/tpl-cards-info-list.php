<section class="composante_approches">
    <img data-scrolly="fromLeft" class="deco" src="https://mhebert.dectim.net/pfe/ltdp/wp-content/themes/theme_ltdp/assets/images/illustrations/deco/jaune-bleu.svg" />
            <div class="wrapper">
                <h1 data-scrolly="fromBottom"><?php the_sub_field('cards_liste_titre'); ?></h1>
                <div class="cards">
                    <?php if( have_rows('cards_liste_cards_container') ): ?>
                    <?php while( have_rows('cards_liste_cards_container') ) : the_row(); ?>
                        
                        <div class="card" data-scrolly="fromBottom">

                            <?php $sub_value = get_sub_field('cards_liste_card'); ?>

                            <?php if( have_rows('cards_liste_card')): ?>
                                <?php while( have_rows('cards_liste_card')) : the_row(); ?>
                                
                                <?php $sub_sub_value = get_sub_field('cards_liste_titre'); ?>
                                <h3><?php echo ($sub_sub_value); ?></h3>

                                <?php $rows = get_sub_field('cards_liste_list'); ?>
                                <?php if( $rows ) {
                                    echo '<ul>';
                                    foreach( $rows as $row ) {
                                        echo '<li>';
                                            echo( $row['cards_liste_element'] );
                                        echo '</li>';
                                    }
                                    echo '</ul>';
                                } ?>

                                <?php endwhile; ?>
                            <?php endif; ?>

                        </div>

                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>        
            </div>
        </section>