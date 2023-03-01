<section class="comp_grille">
            <div class="wrapper">
                <h1><?php the_sub_field('bloc_team_titre'); ?></h1>
                <div class="grille">
                    <?php if( have_rows('bloc_team_members') ): ?>
                        <?php while( have_rows('bloc_team_members') ) : the_row(); ?>

                        <div class="staff border" data-scrolly="fromRight"></div>

                            <?php if( get_sub_field('bloc_team_member_image') ): ?>
                                <img data-scrolly="fromBottom" src="<?php the_sub_field('bloc_team_member_image'); ?>" />
                            <?php endif; ?>

                            <?php $sub_name_value = get_sub_field('bloc_team_member_name'); ?>
                            <h3><?php echo ($sub_name_value); ?></h3>

                            <?php $sub_role_value = get_sub_field('bloc_team_member_role'); ?>
                            <h4><?php echo ($sub_role_value); ?></h4>
                        </div>
                        <?php endwhile; ?>
                    <?php endif; ?>           
                </div>
                <?php 
                    $link = get_sub_field('bloc_team_button');
                    if( $link ): 
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                        <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                    <?php endif; ?>
                
            </div>
        </section>