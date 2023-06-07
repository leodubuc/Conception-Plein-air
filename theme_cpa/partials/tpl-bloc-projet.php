<section class="comp_realisation" id="intro">
    <?php if( have_rows('project_content') ): ?>
        <?php while( have_rows('project_content') ) : the_row(); ?>
            <article>
                <h2 data-scrolly="fromLeft"><?php the_sub_field('project_title'); ?></h2>
                <div class="contenu_text">
                    <p data-scrolly="fromLeft"><?php the_sub_field('project_text'); ?></p>
                </div>
                <div>
                    <?php if( get_sub_field('project_image') ): ?>
                        <img data-scrolly="fromRight" src="<?php the_sub_field('project_image'); ?>" />
                    <?php endif; ?>
                </div>
            </article>
        <?php endwhile; ?>
    <?php endif; ?>  
</section>