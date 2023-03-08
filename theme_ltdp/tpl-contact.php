<?php /* Template Name: Contact */ ?>

<?php get_header(); ?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post() ?>
    
        <section class="contact_page">
            <div class="wrapper">
                <h1 data-scrolly="fromBottom"><?php the_field('static_contact_titre'); ?></h1>

                <div>
                    <div class="info">
                    <?php if( have_rows('static_contact_info') ): ?>
                        <?php while( have_rows('static_contact_info') ) : the_row(); ?>
                        <div>
                            <h3>Téléphone</h3>
                            <div>
                                <?php 
                                    $link = get_sub_field('static_contact_phone');
                                    if( $link ): 
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                    ?>
                                        <a data-scrolly="fromLeft" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                                    <?php endif; ?>
                            </div>
                        </div>
                            
                        <div>
                            <h3>Courriel</h3>
                            <div>
                                <?php 
                                    $link = get_sub_field('static_contact_email');
                                    if( $link ): 
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                    ?>
                                        <a data-scrolly="fromLeft" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                                    <?php endif; ?>
                            </div>
                        </div>
                            
                        <div>
                            <h3>Bureaux</h3>
                            <?php if( have_rows('static_contact_adress') ): ?>
                                <?php while( have_rows('static_contact_adress') ) : the_row(); ?> 
                                    <div> 
                                        <?php 
                                        $link = get_sub_field('static_contact_adresses');
                                        if( $link ): 
                                            $link_url = $link['url'];
                                            $link_title = $link['title'];
                                            $link_target = $link['target'] ? $link['target'] : '_blank';
                                            ?>
                                            <a data-scrolly="fromLeft" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                                        <?php endif; ?>

                                        <p><strong><?php the_sub_field('static_contact_days'); ?></strong></p>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?> 
                        </div>
                            

                        <?php endwhile; ?>
                    <?php endif; ?>
                    </div>
                    <div class="iframe">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2793.5294583970817!2d-73.60410598514635!3d45.55979043508209!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cc91ecb21fdc06d%3A0x3d1eb87219f23114!2sCHSLD%20Joseph-Fran%C3%A7ois-Perrault%20(anciennement%20CHSLD%20des%20Quatre-Temps)!5e0!3m2!1sfr!2sca!4v1677532328389!5m2!1sfr!2sca"
                            width="100%"
                            height="100%"
                            style="border: 0"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"
                        ></iframe>
                    </div>
                </div>
            </div>
        </section>
        
    <?php endwhile; ?> 
<?php endif; ?>

<?php include 'page-builder.php';?>
<?php get_footer(); ?>