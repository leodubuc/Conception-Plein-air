<?php get_header(); ?>

<?php if( have_rows('ltdp_composantes') ): ?>
    <?php while( have_rows('ltdp_composantes') ): the_row(); ?>

        <?php if( get_row_layout() == 'bloc_titre_paragraphe_liste_image_bouton' ): ?>
            <?php include 'partials/tpl-intro-service.php';?>
            <?php #fini ?>

        <?php elseif ( get_row_layout() == 'bloc_contact' ):  ?>
            <?php include 'partials/tpl-bloc-contact.php';?>

        <?php elseif ( get_row_layout() == 'call_to_action_simple' ):  ?> 
            <?php include 'partials/tpl-cta-simple.php';?>
            <?php #fini ?>

        <?php elseif ( get_row_layout() == 'call_to_action_list_middle' ):  ?> 
            <?php include 'partials/tpl-cta-list-middle.php';?>
            <?php #fini ?>    

        <?php elseif ( get_row_layout() == 'call_to_action_list_left' ):  ?> 
            <?php include 'partials/tpl-cta-list-left.php';?>
            <?php #fini ?> 

        <?php elseif ( get_row_layout() == 'bloc_temoignages_carrousel' ):  ?> 
            <?php include 'partials/tpl-carrousel.php';?>

        <?php elseif ( get_row_layout() == 'bloc_cartes_info_liste' ):  ?> 
            <?php include 'partials/tpl-cards-info-list.php';?>
            <?php #fini ?> 

        <?php elseif ( get_row_layout() == 'bloc_cards_info_text' ):  ?> 
            <?php include 'partials/tpl-cards-info-text.php';?>
            <?php #fini ?>

        <?php elseif ( get_row_layout() == 'info_swiper_img' ):  ?> 
            <?php include 'partials/tpl-info-swiper-img.php';?>
            <?php #fini ?>

        <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>