<?php /* Template Name: 404 */ ?>

<?php get_header(); ?>
<section class="erreur">
    <div class="wrapper">
        <div class="content-left">
            <h1 data-scrolly="fromBottom">404</h1>

            <p data-scrolly="fromBottom"><?php _e('Cette page est inexistante', 'cpa'); ?></p>

            <a href="https://mhebert.dectim.net/pfe/ltdp/" data-scrolly="fromBottom"><?php _e('Revenir sur le chemin', 'ltdp'); ?></a>
        </div>
    </div>
</section>
<?php get_footer(); ?>