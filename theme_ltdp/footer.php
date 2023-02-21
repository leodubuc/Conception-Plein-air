<footer>
    <div class="wrapper">
        <div class="nav_footer">
            <nav>
                <ul>
                    <?php wp_nav_menu(array(
                            'theme_location' => 'menu_gauche',
                            'container' => 'ul',
                            'container_class' => 'nav-primary__item',
                        )); ?>

                    <a href="<?php bloginfo('url'); ?>">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/logo.png" alt="">
                    </a>

                    <?php wp_nav_menu(array(
                            'theme_location' => 'menu_gauche',
                            'container' => 'ul',
                            'container_class' => 'nav-primary__item',
                        )); ?>
                </ul>
            </nav>
        </div>


<?php if(have_rows('footer_coordonnees', 'options')) : ?>   
<?php while (have_rows('footer_coordonnees', 'options')) : the_row() ?>   

    <?php
    $contact = get_field('footer_contact');
    if( $contact ): ?>
        <div class="coordonees">
            <div class="contact">
                <?php the_field('footer_contact_titre') ?>
                <div>
                    <div class="list-contact phone">
                        <?php if(have_rows('footer_contact_list', 'options')) : ?>   
                                <?php while (have_rows('footer_contact_list', 'options')) : the_row() ?>   
                                    <?php $img = get_sub_field('footer_contact_list_icon') ?>
                                    <?php $url = $img['url'] ?>
                                <a href="<?php echo get_sub_field('footer_contact_list_link')?>" target="_blank"><img src="<?php echo esc_url($url); ?>" alt="Coordonée du Temps d'une pause"></a>
                                <?php endwhile; ?>
                        <?php endif; ?> 
                    </div>
                </div>
            </div>
    <?php endif; ?>        


    <?php
    $reseaux = get_field('footer_socials');
    if( $reseaux ): ?>
            <div class="medias">
                <?php the_field('footer_socials_titre') ?>
                <div class="reseaux">  

                <?php if(have_rows('footer_socials_list', 'options')) : ?>   
                    <?php while (have_rows('footer_socials_list', 'options')) : the_row() ?>   
                        <?php $img = get_sub_field('footer_socials_list_icon') ?>
                        <?php $url = $img['url'] ?>
                        <a href="<?php echo get_sub_field('footer_socials_list_link')?>" target="_blank"><img src="<?php echo esc_url($url); ?>" alt="Logos de réseaux sociaux"></a>   
                    <?php endwhile; ?>
                <?php endif; ?> 
                </div>
            </div>
    <?php endif; ?>      
              

            <div class="infolettre">
                <span>Infolettre</span>
                <form action="">
                    <div class="container">
                    <input type="text" name="email" placeholder="Votre email" required>
                </div>

                <div class="button">
                    <input type="submit" value="Soumettre">
                </div>
                </form>
                
            </div>
        </div>

<?php endwhile; ?>
<?php endif; ?>  


        <div class="partenaires">
            <?php if(have_rows('footer_partenaire', 'options')) : ?>   
                <?php while (have_rows('footer_partenaire', 'options')) : the_row() ?>   
                    <?php $img = get_sub_field('image_partenaire') ?>
                    <?php $url = $img['url'] ?>
                <a href="<?php echo get_sub_field('url_partenaire')?>" target="_blank"><img src="<?php echo esc_url($url); ?>" alt="Logos de réseaux sociaux"></a>
                <?php endwhile; ?>
            <?php endif; ?> 
        </div>

        
    </div>
</footer>

</body>
</html>
