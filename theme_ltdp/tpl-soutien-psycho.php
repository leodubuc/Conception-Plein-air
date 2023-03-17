<?php /* Template Name: Soutien psychosocial */ ?>

<?php get_header(); ?>

<?php include 'page-builder.php';?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post() ?>
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
                    <?php if(have_rows('static_risks_levels')) : ?>   
                        <?php while (have_rows('static_risks_levels')) : the_row() ?> 
                    <div data-scrolly="fromBottom" class="txt">
                                <div class="rectangle"></div>
                                <p><?php the_sub_field('static_risks_explanation'); ?></p>

                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>              
                </div>

            <img class="jaugeimg" src="/pfe/ltdp/wp-content/themes/theme_ltdp/assets/images/illustrations/raisons-epuisement/jauge.png" alt="Illustration de jauge colorée" />
                    
            <?php endwhile; ?>
                    <?php endif; ?>  
            </div>
        </section>
        
        <section class="questionnaire">
            <img data-scrolly="fromRight" class="deco1" src="/pfe/ltdp/wp-content/themes/theme_ltdp/assets/images/illustrations/deco/bleu-blanc.svg" alt="Cercles décoratifs bleus" />
            <div data-scrolly="fromLeft" class="wrapper">
                <?php echo the_content(); ?>
            </div>
            <img data-scrolly="fromLeft" class="deco2" src="/pfe/ltdp/wp-content/themes/theme_ltdp/assets/images/illustrations/deco/bleu-fonce-pale.svg" alt="Cercles décoratifs bleus" />
        </section>

        <?php endwhile; ?>
        <?php endif; ?>  

<?php get_footer(); ?>