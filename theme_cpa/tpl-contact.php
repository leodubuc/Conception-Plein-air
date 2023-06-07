<?php /* Template Name: Contact */ ?>

<?php get_header(); ?>

<?php include 'page-builder.php';?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post() ?>

        <section class="contact_page" >
            <?php if( get_field('contact_image') ): ?>
                <img class="img_contact" data-scrolly="fromRight" src="<?php the_field('contact_image'); ?>" />
            <?php endif; ?>
            
            <div class="content_contact" id="intro">
                <h2 data-scrolly="fromLeft"><?php the_field('contact_titre'); ?></h2>
            
                <div>
                    <div class="list-contact phone">
                        <img src="http://localhost/conception_plein_air/wp-content/themes/theme_cpa/assets/images/phone.png" alt="Icon de téléphone" />
                        <?php 
                            $link = get_field('contact_phone');
                            if( $link ): 
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                            ?>
                                <a data-scrolly="fromLeft" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                        <?php endif; ?>
                    </div>
                    <div class="list-contact mail">
                        <img src="http://localhost/conception_plein_air/wp-content/themes/theme_cpa/assets/images/mail.png" alt="Icon de e-mail" />
                        <?php 
                            $link = get_field('contact_mail');
                            if( $link ): 
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                            ?>
                                <a data-scrolly="fromLeft" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                        <?php endif; ?>
                    </div>
                            
                    <p data-scrolly="fromLeft"><?php the_field('contact_adresse'); ?></p>
                </div>
                            
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22373.41630079585!2d-75.58765370640828!3d45.49644799368349!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cce1092990d113f%3A0xa39759dcbf2c34bc!2s1243%20Rue%20Couture%2C%20Gatineau%2C%20QC%20J8P%201R5!5e0!3m2!1sfr!2sca!4v1685720562577!5m2!1sfr!2sca"
                    width="600"
                    height="450"
                    style="border: 0"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                ></iframe>
            </div>
        </section>

    <?php endwhile; ?> 
<?php endif; ?>

<?php get_footer(); ?>