<?php get_header(); ?>

<?php if( have_rows('ltdp_composantes') ): ?>
    <?php while( have_rows('ltdp_composantes') ): the_row(); ?>

        <?php if( get_row_layout() == 'bloc_titre_paragraphe_liste_image_bouton' ): ?>
            <?php include 'partials/tpl-intro-service.php';?>

        <?php elseif ( get_row_layout() == 'bloc_contact' ):  ?>
            <?php include 'partials/tpl-bloc-contact.php';?>

        <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>