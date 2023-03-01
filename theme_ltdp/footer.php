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
                            'theme_location' => 'menu_droite',
                            'container' => 'ul',
                            'container_class' => 'nav-primary__item',
                        )); ?>
                </ul>
            </nav>
        </div>


<?php if(have_rows('footer_coordonnees', 'options')) : ?>   
<?php while (have_rows('footer_coordonnees', 'options')) : the_row() ?> 

    <div class="coordonees">
    <?php if(have_rows('footer_contact', 'options')) : ?>   
        <?php while (have_rows('footer_contact', 'options')) : the_row() ?> 
        
        <div class="contact">
            <?php $titre_contact = get_sub_field('footer_contact_titre') ?>
            <span><?php echo ($titre_contact); ?></span>
                           
                <div>  
                    <div class="list-contact phone">
                                <svg class="icon">
                                    <use xlink:href="#icon-cell"></use>
                                </svg>
                                        
                                <?php 
                                $link = get_sub_field('footer_contact_phone');
                                if( $link ): 
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                                ?>
                                    <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                                <?php endif; ?>           
                            </div> 
                            
                            <div class="list-contact mail">
                            <svg class="icon">
                                    <use xlink:href="#icon-email"></use>
                                </svg>
                                        
                                <?php 
                                $link = get_sub_field('footer_contact_email');
                                if( $link ): 
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                                ?>
                                    <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                                <?php endif; ?>
                            </div>

                            <div class="list-contact map">
                            <svg class="icon">
                                    <use xlink:href="#icon-mao"></use>
                                </svg>
                                        
                                <?php 
                                $link = get_sub_field('footer_contact_adress');
                                if( $link ): 
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_blank';
                                ?>
                                    <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                                <?php endif; ?>
                    </div>
                            
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>        


    <div class="medias">
        <?php if(have_rows('footer_socials', 'options')) : ?>   
            <?php while (have_rows('footer_socials', 'options')) : the_row() ?> 

            <?php $titre_social = get_sub_field('footer_socials_titre') ?>
            <span><?php echo ($titre_social); ?></span>

            <div class="reseaux">  

            <?php if(have_rows('footer_socials_list', 'options')) : ?>   
                <?php while (have_rows('footer_socials_list', 'options')) : the_row() ?>   
                    <?php $img = get_sub_field('footer_socials_list_icon') ?>
                    <?php $url = $img['url'] ?>
                    <a href="<?php echo get_sub_field('footer_socials_list_link')?>" target="_blank"><img src="<?php echo esc_url($url); ?>" alt="Logos de réseaux sociaux"></a>   
                <?php endwhile; ?>
            <?php endif; ?> 
            </div>
            <?php endwhile; ?>
        <?php endif; ?>      
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
