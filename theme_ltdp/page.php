<?php get_header(); ?>


<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post() ?>
    
    <div class="wrapper">
        <?php the_content(); ?>
    </div>
    

    <?php include 'page-builder.php';?>

        <?php endwhile; ?> 
<?php endif; ?>

<?php get_footer(); ?>