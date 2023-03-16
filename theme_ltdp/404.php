<?php /* Template Name: 404 */ ?>

<?php get_header(); ?>
<section class="erreur">
    <div class="wrapper">
        <div class="content-left">
            <h1 data-scrolly="fromBottom">404</h1>

            <p data-scrolly="fromBottom"><?php _e('Cette page est inexistante', 'ltdp'); ?></p>

            <a href="https://mhebert.dectim.net/pfe/ltdp/" data-scrolly="fromBottom"><?php _e('Revenir en lieu sûr', 'ltdp'); ?></a>
        </div>

        <img data-scrolly="fromBottom" src="https://mhebert.dectim.net/pfe/ltdp/wp-content/themes/theme_ltdp/assets/images/illustrations/404.svg" alt="Illustration 404" />
    </div>
</section>
<?php get_footer(); ?>