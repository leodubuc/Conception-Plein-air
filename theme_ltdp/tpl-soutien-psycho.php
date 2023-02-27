<?php /* Template Name: Soutien psychosocial */ ?>

<?php get_header(); ?>

<section class="raisondep">
<div class="wrapper">
    <?php if(have_rows('static_epuisement')) : ?>   
        <?php while (have_rows('static_epuisement')) : the_row() ?> 
        
            <h1 data-scrolly="fromBottom"><?php the_sub_field('static_epuisement_titre'); ?></h1>

            <div class="container">
                <div data-scrolly="fromRight" class="gr1">
                    <?php $rows = get_sub_field('static_epuisement_left_group'); ?>
                        <?php if( $rows ) {
                            foreach( $rows as $row ) {
                                echo '<p>';
                                    echo( $row['static_epuisement_reasons'] );
                                echo '</p>';
                            }
                    } ?>
                </div>

                <img data-scrolly="fromBottom" src="/pfe/ltdp/wp-content/themes/theme_ltdp/assets/images/illustrations/raisons-epuisement/raisondep_Personnage.png" alt="Illustration de personnage debout" />
                
                <div data-scrolly="fromLeft" class="gr2">
                    <?php $rows = get_sub_field('static_epuisement_reasons_right'); ?>
                            <?php if( $rows ) {
                                foreach( $rows as $row ) {
                                    echo '<p>';
                                        echo( $row['static_epuisement_reasons_right'] );
                                    echo '</p>';
                                }
                        } ?>
                </div>
            </div>
            <img data-scrolly="fromLeft" class="cercleL" src="/pfe/ltdp/wp-content/themes/theme_ltdp/assets/images/illustrations/raisons-epuisement/cercleL.png" alt="Grande illustration de demi-cercle bleu à gauche" />
            <img data-scrolly="fromRight" class="cercleR" src="/pfe/ltdp/wp-content/themes/theme_ltdp/assets/images/illustrations/raisons-epuisement/cercleR.png" alt="Grande illustration de demi-cercle bleu à droites" />
        
        <?php endwhile; ?>
    <?php endif; ?>  
</div>
</section>


<section class="jauge">
<div class="wrapper">
    <?php if(have_rows('static_risks')) : ?>   
        <?php while (have_rows('static_risks')) : the_row() ?> 
        
            <h1 data-scrolly="fromRight"><?php the_sub_field('static_risks_titre'); ?></h1>
            <div class="infojauge">
                <div class="jaugetext">
                    <?php $rows = get_sub_field('static_risks_levels'); ?>
                        
                            <?php if( $rows ) {
                                
                                foreach( $rows as $row ) {
                                    echo '<div data-scrolly="fromBottom">';
                                        echo '<div>';
                                        echo '</div>';
                                        echo '<p>';
                                            echo( $row['static_risks_explanation'] );
                                        echo '</p>';
                                    echo '</div>';
                                }  
                               
                            } ?>
                    </div>
            </div>
            <img class="jaugeimg" src="/pfe/ltdp/wp-content/themes/theme_ltdp/assets/images/illustrations/raisons-epuisement/jauge.png" alt="Illustration de jauge colorée" />
        <?php endwhile; ?>
    <?php endif; ?>  
</div>
</section>

<?php get_footer(); ?>