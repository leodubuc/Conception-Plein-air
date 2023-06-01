<?php /* Template Name: Accueil */ ?>

<?php get_header(); ?>



<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post() ?>

    

<?php /* Pour l'instant, je vais mettre seulement le hero avec un BG et le header ba rester blanc, comme ça on va pouvoir changer l'image
dans chacune des pages 

        <section class="services">
            <div class="wrapper">

            <?php if(have_rows('static_services_grid')) : ?>   
            <?php while (have_rows('static_services_grid')) : the_row() ?> 

                <?php $titre_service = get_sub_field('static_services_grid_titre') ?>
                <h1 data-scrolly="fromBottom"><?php echo ($titre_service); ?></h1>

                <div class="grid">
                    <?php if(have_rows('static_services_grid_cards')) : ?>   
                        <?php while (have_rows('static_services_grid_cards')) : the_row() ?>
                            <?php 
                                $link = get_sub_field('static_services_grid_card_link');
                                if( $link ): 
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                    ?>
                                    <a data-scrolly="fromBottom" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                                        <div>
                                            <?php $service = get_sub_field('static_services_grid_card_name') ?>
                                            <h2><?php echo ($service); ?></h2>

                                            <?php $image = get_sub_field('static_services_grid_card_icon'); ?>
                                            <?php if ($image) : ?>
                                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                                            <?php endif ?>
                                        </div>

                                        <div class="fond"></div>
                                    </a>
                                <?php endif; ?>

                        <?php endwhile; ?>
                    <?php endif; ?>     
                    </div>     
                </div>
            <?php endwhile; ?>
            <?php endif; ?>              
        </section> 


        <section class="etape">
            <?php if(have_rows('static_steps')) : ?>   
                <?php while (have_rows('static_steps')) : the_row() ?> 
                <h1 class="wrapper" data-scrolly="fromBottom"><?php echo get_sub_field('static_steps_titre'); ?></h1>
                    <div class="alignement">
                        <div class="wrapper">
                                <?php $rows = get_sub_field('static_steps_first'); ?>
                                    <?php if( $rows ) {
                                        echo '<ul data-scrolly="fromLeft">';
                                        foreach( $rows as $row ) {
                                            echo '<li>';
                                                echo( $row['static_steps_first_step'] );
                                            echo '</li>';
                                        }
                                        echo '</ul>';
                                } ?>   
                        </div>        
                
                        <img src="/pfe/ltdp/wp-content/themes/theme_ltdp/assets/images/etape.png" alt="ligne pour les étapes" />
                        
                        <div class="wrapper">
                                <?php $rows = get_sub_field('static_steps_last'); ?>
                                    <?php if( $rows ) {
                                        echo '<ul data-scrolly="fromRight">';
                                        foreach( $rows as $row ) {
                                            echo '<li>';
                                                echo( $row['static_steps_last_step'] );
                                            echo '</li>';
                                        }
                                        echo '</ul>';
                                } ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </section>

        <section class="composante_chiffres">
            <img
                data-scrolly="fromRight"
                class="deco"
                src="/pfe/ltdp/wp-content/themes/theme_ltdp/assets/images/illustrations/deco/blanc.svg"
                alt="Cercle décoratif"
            />
            <?php if(have_rows('stastic_statistiques')) : ?>   
                <?php while (have_rows('stastic_statistiques')) : the_row() ?> 
                    <div class="wrapper">
                        <h1 data-scrolly="fromBottom"><?php the_sub_field('static_stats_titre'); ?></h1>
                        <div class="numbers" data-scrolly="fromBottom">

                            <?php if(have_rows('static_stats_numbers')) : ?>   
                                <?php while (have_rows('static_stats_numbers')) : the_row() ?> 
                                    <?php get_sub_field('static_stats_stat'); ?>    
                                    
                                        <?php if(have_rows('static_stats_stat')) : ?>   
                                            <?php while (have_rows('static_stats_stat')) : the_row() ?> 
                                            <div>
                                                <span><?php echo get_sub_field('static_stats_numbers'); ?></span> 

                                                <p><?php echo get_sub_field('static_stats_subject'); ?> </p>
                                            </div>
                                            <?php endwhile; ?>
                                        <?php endif; ?>
                                    
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </section>

        <section class="composante_maladies">
            <img
                data-scrolly="fromRight"
                class="deco"
                src="/pfe/ltdp/wp-content/themes/theme_ltdp/assets/images/illustrations/deco/vert-beige.svg"
                alt="Cercle décoratif"
            />

            
            <div class="wrapper">
                <?php if( have_rows('static_maladie') ): ?>
                    <?php while( have_rows('static_maladie') ) : the_row(); ?>
                        <h1 data-scrolly="fromBottom"><?php the_sub_field('static_maladie_titre'); ?></h1>

                        <div class="content">
                            <?php $rows = get_sub_field('static_maladie_list'); ?>
                                <?php if( $rows ) {
                                    echo '<ul>';
                                    foreach( $rows as $row ) {
                                        echo '<li data-scrolly="fromLeft">';
                                            echo( $row['static_maladie_element'] );
                                        echo '</li>';
                                    }
                                    echo '</ul>';
                            } ?>

                            <div class="content-right" data-scrolly="fromRight">
                                <img class="brain" src="/pfe/ltdp/wp-content/themes/theme_ltdp/assets/images/composante-maladie/brain.png" alt="Illustration de cerveau" />
                                <img
                                    class="doodle"
                                    src="/pfe/ltdp/wp-content/themes/theme_ltdp/assets/images/composante-maladie/green-circle.png"
                                    alt="Dessin de cercle vert avec traits"
                                />
                                <?php 
                                $link = get_sub_field('static_maladie_button');
                                if( $link ): 
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                                ?>
                                    <a data-scrolly="fromBottom" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                                <?php endif; ?>
                                
                            </div>
                        </div>

                    <?php endwhile; ?>
                <?php endif; ?>                      
            </div>
        </section>


        <section class="questionnaire">
            <img data-scrolly="fromRight" class="deco1" src="/pfe/ltdp/wp-content/themes/theme_ltdp/assets/images/illustrations/deco/bleu-blanc.svg" alt="Cercles décoratifs bleus" />
            <div data-scrolly="fromLeft" class="wrapper">
                <?php echo the_content(); ?>
            </div>
            <img data-scrolly="fromLeft" class="deco2" src="/pfe/ltdp/wp-content/themes/theme_ltdp/assets/images/illustrations/deco/bleu-fonce-pale.svg" alt="Cercles décoratifs bleus" />
        </section>*/ ?>
        
        <?php include 'page-builder.php';?>
        
    <?php endwhile; ?> 
<?php endif; ?>

<?php get_footer(); ?>
