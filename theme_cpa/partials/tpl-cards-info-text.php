<section class="composante_4colonnes_fondcouleur">
            <div class="wrapper">
                <h1 data-scrolly="fromBottom"><?php the_sub_field('bloc_cards_info_text_titre'); ?></h1>

                <div class="cards-4colonnes" data-scrolly="fromBottom">
                    <?php if( have_rows('bloc_cards_info_text_cards') ): ?>
                    <?php while( have_rows('bloc_cards_info_text_cards') ) : the_row(); ?>
                        
                        <div class="card" data-scrolly="fromBottom">

                            <?php $sub_value = get_sub_field('bloc_cards_info_text_card_content'); ?>

                            <?php if( have_rows('bloc_cards_info_text_card_content')): ?>
                                <?php while( have_rows('bloc_cards_info_text_card_content')) : the_row(); ?>
                                
                                <?php $sub_title_value = get_sub_field('bloc_cards_info_text_card_titre'); ?>
                                <h3><?php echo ($sub_title_value); ?></h3>

                                <?php $sub_text_value = get_sub_field('bloc_cards_info_text_card_text_area'); ?>
                                <p><?php echo ($sub_text_value); ?></p>
                            
                                <?php endwhile; ?>
                            <?php endif; ?>

                        </div>

                        <?php endwhile; ?>
                    <?php endif; ?>
                </div> 
            </div>
        </section>