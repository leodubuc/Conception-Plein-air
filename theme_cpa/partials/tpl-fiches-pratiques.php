<section class="fichespratiques">
<div class="fiche_chiffreR">
<?php if( have_rows('fiches_pratiques') ): ?>
    <?php while( have_rows('fiches_pratiques') ) : the_row(); ?>
            <div class="wrapper">
                <div class="content">
                    <h2><?php the_sub_field('fiches_pratiques_titre'); ?></h2>

                    <div class="liste">                                   
                                <ul class="left">
                                    <?php if( have_rows('fiches_pratiques_left') ): ?>
                                        <?php while( have_rows('fiches_pratiques_left') ) : the_row(); ?> 
                                            <li> 
                                                <?php 
                                                $link = get_sub_field('fiche_pratique_download_left');
                                                if( $link ): 
                                                    $link_url = $link['url'];
                                                    $link_title = $link['title'];
                                                    $link_target = $link['target'] ? $link['target'] : '_blank';
                                                    ?>
                                                    <a data-scrolly="fromBottom" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                                                <?php endif; ?>
                                            </li>
                                        <?php endwhile; ?>
                                    <?php endif; ?> 
                                </ul>

                                <ul class="right">
                                    <?php if( have_rows('fiches_pratiques_right') ): ?>
                                        <?php while( have_rows('fiches_pratiques_right') ) : the_row(); ?> 
                                            <li> 
                                                <?php 
                                                $link = get_sub_field('fiches_pratiques_download_right');
                                                if( $link ): 
                                                    $link_url = $link['url'];
                                                    $link_title = $link['title'];
                                                    $link_target = $link['target'] ? $link['target'] : '_blank';
                                                    ?>
                                                    <a data-scrolly="fromBottom" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                                                <?php endif; ?>
                                            </li>
                                        <?php endwhile; ?>
                                    <?php endif; ?> 
                                </ul>
                    </div>
                </div>

                <div class="chiffre" data-scrolly="fromLeft">
                    <h2><?php the_sub_field('fiches_pratiques_number'); ?></h2>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?> 
</div>
</section>