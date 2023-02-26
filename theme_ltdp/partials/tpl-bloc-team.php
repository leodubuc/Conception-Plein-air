<section class="comp_grille">
            <div class="wrapper">
                <h1><?php the_sub_field('bloc_team_titre'); ?></h1>
                <div class="grille">

                    <?php if( have_rows('bloc_team_members') ): ?>
                        <?php while( have_rows('bloc_team_members') ) : the_row(); ?>
                        <div class="staff border1" data-scrolly="fromRight">
                            <?php 
                            $image = get_sub_field('bloc_team_member_image');
                            if( $image ): ?>
                                <img data-scrolly="fromBottom" src="<?php echo esc_url($image['sizes']['thumbnail']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php endif; ?>

                            <?php $sub_name_value = get_sub_field('bloc_team_member_name'); ?>
                            <h3><?php echo ($sub_name_value); ?></h3>

                            <?php $sub_role_value = get_sub_field('bloc_team_member_role'); ?>
                            <h4><?php echo ($sub_role_value); ?></h4>
                        </div>
                        <?php endwhile; ?>
                    <?php endif; ?>           
                </div>
            </div>
        </section>