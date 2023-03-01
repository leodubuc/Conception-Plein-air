<section class="avantagesCAJ">
    <div class="wrapper">
        <h1><?php the_sub_field('bloc_info_columns_titre'); ?></h1>

        <div class="cards">

            <?php if( have_rows('bloc_info_columns_left_card') ): ?>
                <?php while( have_rows('bloc_info_columns_left_card') ) : the_row(); ?>

                    <div data-scrolly="fromLeft" class="card personneaidante">
                        <div class="title">
                            <h3><?php echo get_sub_field('bloc_info_columns_left_card_titre'); ?></h3>
                            <img src="/pfe/ltdp/wp-content/themes/theme_ltdp/assets/images/pour_personne_aidante.png" alt="Icon de coeur sur la main" />
                        </div>

                        <div class="content">
                            <?php $rows = get_sub_field('bloc_info_columns_left_card_list'); ?>
                            <?php if( $rows ) {
                                echo '<ul>';
                                foreach( $rows as $row ) {
                                    echo '<li >';
                                        echo( $row['bloc_info_columns_left_card_list_element'] );
                                    echo '</li>';
                                }
                                echo '</ul>';
                            } ?>
                            
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>   

            <?php if( have_rows('bloc_info_columns_right_card') ): ?>
                <?php while( have_rows('bloc_info_columns_right_card') ) : the_row(); ?>     

                    <div data-scrolly="fromRight" class="card personneatteinte">
                        <div class="title">
                            <h3><?php echo get_sub_field('bloc_info_columns_right_card_titre'); ?></h3>
                            <img src="/pfe/ltdp/wp-content/themes/theme_ltdp/assets/images/pour_personne_atteinte.png" alt="Icon de tête avec coeur à l'intérieur" />
                        </div>

                        <div class="content">
                            <?php $rows = get_sub_field('bloc_info_columns_right_card_list'); ?>
                            <?php if( $rows ) {
                                echo '<ul>';
                                foreach( $rows as $row ) {
                                    echo '<li >';
                                        echo( $row['bloc_info_columns_right_card_list_element'] );
                                    echo '</li>';
                                }
                                echo '</ul>';
                            } ?>
                        </div>    
                    </div>
                <?php endwhile; ?>
            <?php endif; ?> 

        </div>
    </div>
</section>