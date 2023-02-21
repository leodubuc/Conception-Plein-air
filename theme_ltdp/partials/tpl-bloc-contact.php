<section class="compcontact">
            <?php if( get_sub_field('bloc_contact_deco_top') ): ?>
                <img data-scrolly="fromRight" class="deco1" src="<?php the_sub_field('bloc_contact_deco_top'); ?>" />
            <?php endif; ?>
            <?php if( get_sub_field('bloc_contact__bottom') ): ?>
                <img data-scrolly="fromLeft" class="deco2" src="<?php the_sub_field('bloc_contact__bottom'); ?>" />
            <?php endif; ?>
            <div class="wrapper">
                <h1 data-scrolly="fromBottom"><?php the_sub_field('bloc_contact_titre'); ?></h1>

                <div class="info_contact" data-scrolly="fromBottom">
                <?php $rows = get_sub_field('bloc_contact_com'); ?>
                        <?php if( $rows ) {
                            $image = $row['image'];
                            echo '<div>';
                                echo wp_get_attachment_image( $image, 'full' );
                                echo wpautop( $row['bloc_contact_text'] );
                            echo '</div>';
                        } ?>
                    <div>
                        <img src="assets/icons/cell.svg" alt="" />
                        <h4>514 373-9851</h4>
                    </div>
                    <div>
                        <img src="assets/icons/email.svg" alt="" />
                        <h4>admissions@tempsdunepause.org</h4>
                    </div>
                    <div>
                        <img src="assets/icons/mao.svg" alt="" />
                        <h4><a href="">Où nous trouver?</a></h4>
                    </div>
                </div>
            </div>
            <img
                data-scrolly="fromLeft"
                class="deco2"
                src="assets/images/illustrations/deco/bleu-fonce-pale.svg"
                alt=""
            />
        </section>