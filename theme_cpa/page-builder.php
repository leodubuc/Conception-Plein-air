<?php if( have_rows('cpa_composantes') ): ?>
    <?php while( have_rows('cpa_composantes') ): the_row(); ?>

        <?php if( get_row_layout() == 'hero' ): ?>
            <?php include 'partials/tpl-bloc-hero.php';?>
            <?php #fini ?>

        <?php elseif( get_row_layout() == 'bloc-img-text' ): ?>
            <?php include 'partials/tpl-bloc-img-text.php';?>
            <?php #fini ?>    

        <?php elseif( get_row_layout() == 'swipper_titre_text' ): ?>
            <?php include 'partials/tpl-bloc-swiper.php';?>
            <?php #fini ?>    
            
        <?php elseif( get_row_layout() == 'trois_colonne' ): ?>
            <?php include 'partials/tpl-bloc-trois-colonnes.php';?>
            <?php #fini ?> 
            
        <?php elseif( get_row_layout() == 'grid_hover' ): ?>
            <?php include 'partials/tpl-bloc-grille-realisation.php';?>
            <?php #fini ?>  
            
        <?php elseif( get_row_layout() == 'titre_texte_image_align' ): ?>
            <?php include 'partials/tpl-bloc-projet.php';?>
            <?php #fini ?>

        <?php elseif( get_row_layout() == 'texte_background_flou' ): ?>
            <?php include 'partials/tpl-bloc-propos.php';?>
            <?php #fini ?>
        <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>