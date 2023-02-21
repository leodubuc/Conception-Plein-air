<footer>
    <div class="wrapper">
        <div class="nav_footer">
            <nav>
                <ul>
                    <li><a href="#">À propos</a></li>
                    <li><a href="#">Nos services</a></li>
                    <a href="index.html"><img src="/pfe/ltdp/wp-content/themes/theme_ltdp/assets/images/logo.png" alt="Logo de l'organisme"></a>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Fiches pratiques</a></li>

                    <?php wp_nav_menu(array(
                        'theme_location' => 'menu_principal',
                        'container' => 'ul',
                    )); ?>
                </ul>
            </nav>
        </div>

        <div class="coordonees">
            <div class="contact">
                <span>Contact</span>
                <div>
                    <div class="list-contact phone">
                        <?php if(have_rows('footer_contact', 'options')) : ?>   
                                <?php while (have_rows('footer_contact', 'options')) : the_row() ?>   
                                    <?php $img = get_sub_field('icon_contact') ?>
                                    <?php $url = $img['url'] ?>
                                <a href="<?php echo get_sub_field('info_contact')?>" target="_blank"><img src="<?php echo esc_url($url); ?>" alt="Logos de réseaux sociaux"></a>
                                <?php endwhile; ?>
                        <?php endif; ?> 
                    </div>
                    <div class="list-contact mail">
                        <img src="/pfe/ltdp/wp-content/themes/theme_ltdp/assets/images/footer/mail.png" alt="Icon de e-mail">
                        <a href="mailto: admissions@tempsdunepause.org">admissions@tempsdunepause.org</a> 
                    </div>

                    <div class="list-contact map">
                        <img src="/pfe/ltdp/wp-content/themes/theme_ltdp/assets/images/footer/pointer.png" alt="Icon de pointeur">
                        <a href="https://goo.gl/maps/tzHtqSvpB76DQwwP7" target="_blank">Où nous trouver?</a> 
                    </div>
                </div>
            </div>

            <div class="medias">
                <span>Réseaux Sociaux</span>
                <div class="reseaux">
                    <?php if(have_rows('footer_socials', 'options')) : ?>   
                            <?php while (have_rows('footer_socials', 'options')) : the_row() ?>   
                                <?php $img = get_sub_field('image_socials') ?>
                                <?php $url = $img['url'] ?>
                            <a href="<?php echo get_sub_field('url_socials')?>" target="_blank"><img src="<?php echo esc_url($url); ?>" alt="Logos de réseaux sociaux"></a>
                            <?php endwhile; ?>
                    <?php endif; ?>  
                </div>
            </div>

              

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
