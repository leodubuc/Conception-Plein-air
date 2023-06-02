<?php /* Template Name: Accueil */ ?>

<?php get_header(); ?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post() ?>
        
        <?php include 'page-builder.php';?>
        
    <?php endwhile; ?> 
<?php endif; ?>

<?php get_footer(); ?>
