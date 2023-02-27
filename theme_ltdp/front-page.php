<?php /* Template Name: Accueil */ ?>

<?php get_header(); ?>

<section class="hero">
    <video autoplay muted loop>
        <source src="/pfe/ltdp/wp-content/themes/theme_ltdp/assets/video/Mattress Store (SpongeBob Clip).mp4" type="video/mp4" />
    </video>

    <?php if(have_rows('static_hero')) : ?>   
        <?php while (have_rows('static_hero')) : the_row() ?> 

            <div class="wrapper">
                <div class="bleu">
                    <?php $texte_bleu_hero = get_sub_field('static_hero_p_blue') ?>
                    <p data-scrolly="fromLeft"><?php echo ($texte_bleu_hero); ?></p>
                </div>

                <div class="vert">
                    <?php $texte_vert_hero = get_sub_field('static_hero_p_green') ?>
                    <p data-scrolly="fromRight"><?php echo ($texte_vert_hero); ?></p>
                </div>
            </div>

        <?php endwhile; ?>
    <?php endif; ?>  
    <img src="/pfe/ltdp/wp-content/themes/theme_ltdp/assets/images/hero/green-shape.svg" alt="Forme courbée verte" class="courbe_vert style-svg" />
    <img class="full-width courbe_bleu" src="/pfe/ltdp/wp-content/themes/theme_ltdp/assets/images/hero/blue-shape.svg" alt="Forme courbée bleue" />
</section> 


<section class="services">
    <div class="wrapper">

    <?php if(have_rows('static_services_grid')) : ?>   
    <?php while (have_rows('static_services_grid')) : the_row() ?> 

        <?php $titre_service = get_sub_field('static_services_grid_titre') ?>
        <h1 data-scrolly="fromBottom"><?php echo ($titre_service); ?></h1>

        <div class="grid">
            <?php if(have_rows('static_services_grid_cards')) : ?>   
            <?php while (have_rows('static_services_grid_cards')) : the_row() ?>

            <a data-scrolly="fromBottom" href="<?php echo get_sub_field('static_services_grid_card_link')?>">
                <div>
                    <?php $service = get_sub_field('static_services_grid_card_name') ?>
                    <h2><?php echo ($service); ?></h2>

                    <?php $icon = get_sub_field('static_services_grid_card_icon'); ?>
                    <?php if ($icon) : ?>
                        <img class="icon" src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>">
                    <?php endif ?>
                </div>

                <div class="fond"></div>
            </a>
            <?php endwhile; ?>
            <?php endif; ?>  


            <?php 
                $link = get_field('btn_cta_link');
                if( $link ): 
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">Plus d'information</a>
            <?php endif; ?>

            
        <?php endwhile; ?>
        <?php endif; ?>
        </div>
    </div>
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
    <?php if( get_sub_field('static_maladies_deco') ): ?>
        <img data-scrolly="fromLeft" class="deco" src="<?php the_sub_field('static_maladies_deco'); ?>" />
    <?php endif; ?>

    
    <div class="wrapper">
        <?php if( have_rows('static_maladie') ): ?>
        <?php while( have_rows('static_maladie') ) : the_row(); ?>
        <h1 data-scrolly="fromBottom"><?php the_sub_field('static_maladie_titre'); ?></h1>

        <?php if( have_rows('static_maladie_list') ): ?>
        <?php while( have_rows('static_maladie_list') ) : the_row(); ?>

            <div class="content">
            <?php $rows = get_sub_field('static_liste_maladie'); ?>
                <?php if( $rows ) {
                    echo '<ul>';
                    foreach( $rows as $row ) {
                        echo '<li>';
                            echo( $row['static_maladie_element'] );
                        echo '</li>';
                    }
                    echo '</ul>';
            } ?>

        <?php endwhile; ?>
        <?php endif; ?>    

    <?php endwhile; ?>
    <?php endif; ?>   

                <div class="content-right" data-scrolly="fromRight">
                    <img class="brain" src="/pfe/ltdp/wp-content/themes/theme_ltdp/assets/images/composante-maladie/brain.png" alt="Illustration de cerveau" />
                    <img
                        class="doodle"
                        src="/pfe/ltdp/wp-content/themes/theme_ltdp/assets/images/composante-maladie/green-circle.png"
                        alt="Dessin de cercle vert avec traits"
                    />
                    <a href="#">En savoir plus</a>
                </div>
            </div>
    </div>
</section>

<section class="composante_service">
    <img class="deco" src="/pfe/ltdp/wp-content/themes/theme_ltdp/assets/images/illustrations/deco/vert-blanc.svg" alt="Cercles décoratifs" />
    <div class="wrapper">
        <h1 data-scrolly="fromBottom">Soutien Psychosocial</h1>
        <div class="content">
            <div class="liste">
                <h3 data-scrolly="fromBottom">Types d’intervention</h3>
                <p>Paragraphe d'intro optionnel ici</p>
                <ul>
                    <li data-scrolly="fromLeft">
                        Identifier vos besoins et attentes pour favoriser une meilleure collaboration avec les
                        professionnels autour de vous;
                    </li>
                    <li data-scrolly="fromLeft">
                        Reconnaître les bouleversements occasionnés par la maladie sur la dynamique familiale;
                    </li>
                    <li data-scrolly="fromLeft">
                        Trouver des moyens pour mieux faire face aux difficultés de la vie courante;
                    </li>
                    <li data-scrolly="fromLeft">Découvrir l'ensemble des options qui s'offrent à vous;</li>
                    <li data-scrolly="fromLeft">Vous familiariser avec les démarches;</li>
                    <li data-scrolly="fromLeft">
                        Comprendre les enjeux liés à la relation d’aide pour prévenir votre épuisement.​​
                    </li>
                    <span>
                        *Il est également possible de présenter des troubles cognitifs sans recevoir de diagnostic
                        précis.
                    </span>
                </ul>
            </div>

            <img
                data-scrolly="fromRight"
                src="/pfe/ltdp/wp-content/themes/theme_ltdp/assets/images/illustrations/soutien-psycho.svg"
                alt="Deux personnes assises qui discutent"
            />
        </div>
        <a href="#">En savoir plus</a>
    </div>
</section>

<section class="questionnaire">
    <img data-scrolly="fromRight" class="deco1" src="/pfe/ltdp/wp-content/themes/theme_ltdp/assets/images/illustrations/deco/bleu-blanc.svg" alt="" />
    <div class="wrapper">
        <h1 data-scrolly="fromBottom">Besoin de nos services?</h1>

        <div class="question" data-scrolly="fromBottom">
            <p>Moi ou la personne que je soutiens réside à l’Est du boulevard Saint-Laurent.</p>

            <div class="answers">
                <p>Oui</p>
                <p>Non</p>
            </div>
        </div>
    </div>
    <img data-scrolly="fromLeft" class="deco2" src="/pfe/ltdp/wp-content/themes/theme_ltdp/assets/images/illustrations/deco/bleu-fonce-pale.svg" alt="" />
</section>

<section class="composante_swiper">
    <h1 data-scrolly="fromBottom">Témoignages</h1>

    <div data-scrolly="fromBottom" class="swiper" data-component="Carousel" data-carousel="navigation">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <p class="wrapper">« Enfin ma mère retrouve son fils. »</p>
            </div>

            <div class="swiper-slide">
                <p>
                    « Le Temps d'une pause est le seul organisme qui m'a aiguillée vers des solutions humaines et très
                    aidantes. Merci ! »
                </p>
            </div>

            <div class="swiper-slide">
                <p class="wrapper">
                    À chaque fois que j’ai été en contact avec une des intervenantes, je me suis toujours sentie
                    respectée, écoutée et mon expérience était validée. C’est lors des moments les plus difficiles que
                    j’ai communiqué avec elles. Ceci m’a donné de l’espoir et du réconfort à des moments tellement
                    déchirants avec ma mère. Merci beaucoup!
                </p>
            </div>

            <div class="swiper-slide">
                <p>
                    Parmi la gamme de services [disponibles dans le secteur], le soutien et le suivi personnalisés que
                    vous offrez sont uniques et irremplaçables.
                </p>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</section>

<section class="composante_texte_et_swiper">
    <div class="wrapper">
        <h1 data-scrolly="fromBottom">Centre d’activités de jour</h1>
        <p data-scrolly="fromBottom">
            Raison d'être du Temps d’une pause depuis 2002, le centre d'activités de jour évolue année après année pour
            s'adapter au mieux aux besoins des familles. Destiné aux personnes atteintes de maladies cognitives en stade
            modéré à sévère.
        </p>
        <div class="swiper" data-component="Carousel" data-carousel="navigation" data-scrolly="fromBottom">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="/pfe/ltdp/wp-content/themes/theme_ltdp/assets/images/swiper_img.png" alt="" />
                </div>
                <div class="swiper-slide">
                    <img src="/pfe/ltdp/wp-content/themes/theme_ltdp/assets/images/swiper_img.png" alt="" />
                </div>
                <div class="swiper-slide">
                    <img src="/pfe/ltdp/wp-content/themes/theme_ltdp/assets/images/swiper_img.png" alt="" />
                </div>
            </div>
        </div>
    </div>

    <img data-scrolly="fromRight" class="deco" src="/pfe/ltdp/wp-content/themes/theme_ltdp/assets/images/illustrations/deco/vert-blanc.svg" alt="" />
</section>

<section class="composante_approches">
    <img data-scrolly="fromLeft" class="deco" src="/pfe/ltdp/wp-content/themes/theme_ltdp/assets/images/illustrations/deco/jaune-bleu.svg" alt="" />
    <div class="wrapper">
        <h1 data-scrolly="fromBottom">Types d’approches</h1>
        <div class="cards">
            <div class="card" data-scrolly="fromBottom">
                <h3>Approche personalisée</h3>
                <ul>
                    <li>Activités de stimulation cognitive et physique adaptées à la personne</li>
                    <li>Ratio d’un.e intervenant.e pour trois participant.e.s</li>
                </ul>
            </div>

            <div class="card" data-scrolly="fromBottom">
                <h3>Approche spécialisée</h3>
                <ul>
                    <li>Suivi clinique, continuité et complémentarité avec l’offre de service du CLSC</li>
                    <li>
                        Des plans d’intervention individuels pour diminuer les comportements réactifs de la personne
                        atteinte
                    </li>
                    <li>
                        Équipe multidisciplinaire : formée en éducation spécialisée, gérontologie, travail social, soins
                        à la personne.
                    </li>
                </ul>
            </div>

            <div class="card" data-scrolly="fromBottom">
                <h3>Flexibilité et diversité</h3>
                <ul>
                    <li>Formules complémentaires : De manière régulière, 1 ou 2 journées par semaine</li>
                    <li>Selon vos préférences : à la journée ou demi-journée</li>
                    <li>Plages horaires modulables : entre 9h et 11h le matin.</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="info_membre">
    <div class="wrapper">
        <h2 data-scrolly="fromBottom">Ce qui signifie être membre</h2>

        <h4 data-scrolly="fromBottom">Devenir membre du Temps d’une pause, c'est :</h4>

        <div data-scrolly="fromLeft">
            <ul>
                <li>Appuyer notre mission et nous donner du poids;</li>
                <li>Agir ensemble pour améliorer nos activités;</li>
                <li>
                    Participer à une réflexion collective sur les enjeux et les défis du développement de nos activités;
                </li>
                <li>Voir vos valeurs et vos principes promus et défendus.</li>
            </ul>
        </div>

        <a href="#" data-scrolly="fromBottom">Devenir membre</a>

        <p data-scrolly="fromBottom">
            * La cotisation annuelle est de 10$ et est valide du 1er avril au 31 mars de l'an suivant.
        </p>
    </div>
</section>

<section class="composante_h1_p_button">
    <div class="wrapper">
        <h1>Devenir membre</h1>
        <p>
            Être membre du Temps d'une pause, c'est soutenir et encourager notre mission auprès d'aînés et leur
            entourage. C'est valider et encourager notre action auprès des personnes atteintes de maladies de type
            Alzheimer et de leurs proches.
        </p>
        <a href="#">Devenir membre</a>
    </div>
</section>

<section class="composante_texte_image_1">
    <div class="wrapper">
        <div>
            <div>
                <h2 data-scrolly="fromLeft">Qu’est ce que la maladie d’alzheimer</h2>
                <p data-scrolly="fromLeft">
                    Les maladies de type d'Alzheimer sont des maladies dégénératives du cerveau. Elles évoluent et
                    affectent progressivement le fonctionnement et la qualité de vie des personnes atteintes.
                </p>
            </div>
            <a data-scrolly="fromBottom" href="#">En savoir plus</a>
        </div>
        <img data-scrolly="fromBottom" src="/pfe/ltdp/wp-content/themes/theme_ltdp/assets/images/composante-maladie/image1.jpg" alt="" />
    </div>
</section>

<section class="composante_texte_image_2">
    <div class="wrapper">
        <div>
            <h2 data-scrolly="fromLeft">Qu’est ce que la maladie d’alzheimer</h2>
            <ul data-scrolly="fromLeft">
                <li data-scrolly="fromLeft">La maladie d'Alzheimer.</li>
                <li data-scrolly="fromLeft">La maladie de Parkinson.</li>
                <li data-scrolly="fromLeft">Les maladies cérébro-vasculaires.</li>
                <li data-scrolly="fromLeft">Les atteintes fronto-temporales.</li>
                <li data-scrolly="fromLeft">La maladie à Corps de Lewy.</li>
                <li data-scrolly="fromLeft">La maladie de Creutzfeldt-Jakob.</li>
            </ul>

            <a data-scrolly="fromBottom" href="#">En savoir plus</a>
        </div>
        <img src="/pfe/ltdp/wp-content/themes/theme_ltdp/assets/images/composante-maladie/image1.jpg" alt="" />
    </div>
</section>

<section class="composante_4colonnes_fondcouleur">
    <div class="wrapper">
        <h1 data-scrolly="fromBottom">Types de don</h1>

        <div class="cards-4colonnes" data-scrolly="fromBottom">
            <div class="card 1">
                <h3>25$</h3>
                <p>
                    Votre don permettra le transport sécuritaire d'une personne atteinte d'une maladie neurodégénérative
                    vers notre centre d'activités de jour. Un petit plus qui facilite la vie de bien des familles.​
                </p>
            </div>
            <div class="card 2">
                <h3>50$</h3>
                <p>
                    Votre don permettra de célébrer les anniversaires des personnes atteintes en leur offrant un cadeau
                    et en partageant un gâteau. Un moment de vie sociale auquel nous tenons au Temps d'une pause.​
                </p>
            </div>
            <div class="card 3">
                <h3>100$</h3>
                <p>
                    Votre don permettra à l'organisme de renouveler son matériel et ses activités afin d'offrir une
                    stimulation adaptée et personnalisée en fonction des personnalités et habiletés de chaque personne.
                </p>
            </div>
            <div class="card 4">
                <h3>250$</h3>
                <p>
                    Votre don permettra d'offrir une place à prix subventionné au centre d'activités de jour pendant un
                    mois à une famille à faible revenu et de leur donner accès à notre soutien de qualité.​
                </p>
            </div>
        </div>
    </div>
</section>

<section class="galerie">
    <div class="wrapper" data-scrolly="fromBottom">
        <img src="/pfe/ltdp/wp-content/themes/theme_ltdp/assets/images/composante-maladie/image1.jpg" alt="" />
        <img src="/pfe/ltdp/wp-content/themes/theme_ltdp/assets/images/composante-maladie/image1.jpg" alt="" />
        <img src="/pfe/ltdp/wp-content/themes/theme_ltdp/assets/images/composante-maladie/image1.jpg" alt="" />
        <img src="/pfe/ltdp/wp-content/themes/theme_ltdp/assets/images/composante-maladie/image1.jpg" alt="" />
        <img src="/pfe/ltdp/wp-content/themes/theme_ltdp/assets/images/composante-maladie/image1.jpg" alt="" />
        <img src="/pfe/ltdp/wp-content/themes/theme_ltdp/assets/images/composante-maladie/image1.jpg" alt="" />
        <img src="/pfe/ltdp/wp-content/themes/theme_ltdp/assets/images/composante-maladie/image1.jpg" alt="" />
    </div>
</section>

<section class="compcontact">
    <img data-scrolly="fromRight" class="deco1" src="/pfe/ltdp/wp-content/themes/theme_ltdp//pfe/ltdp/wp-content/themes/theme_ltdp/assets/images/illustrations/deco/bleu-blanc.svg" alt="" />
    <div class="wrapper">
        <h1 data-scrolly="fromBottom">Besoin de nos services?</h1>

        <div class="info_contact" data-scrolly="fromBottom">
            <div>
                <img src="/pfe/ltdp/wp-content/themes/theme_ltdp/assets/icons/cell.svg" alt="" />
                <h4>514 373-9851</h4>
            </div>
            <div>
                <img src="/pfe/ltdp/wp-content/themes/theme_ltdp/assets/icons/email.svg" alt="" />
                <h4>admissions@tempsdunepause.org</h4>
            </div>
            <div>
                <img src="/pfe/ltdp/wp-content/themes/theme_ltdp/assets/icons/mao.svg" alt="" />
                <h4><a href="">Où nous trouver?</a></h4>
            </div>
        </div>
    </div>
    <img data-scrolly="fromLeft" class="deco2" src="/pfe/ltdp/wp-content/themes/theme_ltdp/assets/images/illustrations/deco/bleu-fonce-pale.svg" alt="" />
</section>

<section class="comp_video">
    <div class="wrapper">
        <h1>Titre</h1>
        <iframe
            data-scrolly="fromRight"
            width="1280"
            height="720"
            src="https://www.youtube.com/embed/lWA2pjMjpBs"
            title="Rihanna - Diamonds"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen
        ></iframe>
    </div>
</section>

<section class="comp_grille">
    <div class="wrapper">
        <h1>Notre Équipe</h1>
        <div class="grille">
            <div class="staff border1" data-scrolly="fromRight">
                <img src="/pfe/ltdp/wp-content/themes/theme_ltdp/assets/images/staff1.png" alt="" />
                <h3>Nom</h3>
                <h4>role</h4>
            </div>
            <div class="staff border2" data-scrolly="fromBottom">
                <img src="/pfe/ltdp/wp-content/themes/theme_ltdp/assets/images/staff2.png" alt="" />
                <h3>Nom</h3>
                <h4>role</h4>
            </div>
            <div class="staff border3" data-scrolly="fromBottom">
                <img src="/pfe/ltdp/wp-content/themes/theme_ltdp/assets/images/staff3.png" alt="" />
                <h3>Nom</h3>
                <h4>role</h4>
            </div>
            <div class="staff border1" data-scrolly="fromRight">
                <img src="/pfe/ltdp/wp-content/themes/theme_ltdp/assets/images/staff4.png" alt="" />
                <h3>Nom</h3>
                <h4>role</h4>
            </div>
            <div class="staff border2" data-scrolly="fromBottom">
                <img src="/pfe/ltdp/wp-content/themes/theme_ltdp/assets/images/staff5.png" alt="" />
                <h3>Nom</h3>
                <h4>role</h4>
            </div>
            <div class="staff border3" data-scrolly="fromBottom">
                <img src="/pfe/ltdp/wp-content/themes/theme_ltdp/assets/images/staff6.png" alt="" />
                <h3>Nom</h3>
                <h4>role</h4>
            </div>
            <div class="staff border1" data-scrolly="fromRight">
                <img src="/pfe/ltdp/wp-content/themes/theme_ltdp/assets/images/staff7.png" alt="" />
                <h3>Nom</h3>
                <h4>role</h4>
            </div>
        </div>
    </div>
</section>

<section class="comp_h2_list_button">
    <img data-scrolly="fromRight" class="deco" src="/pfe/ltdp/wp-content/themes/theme_ltdp/assets/images/illustrations/deco/vert-bleu.svg" alt="" />
    <div class="wrapper">
        <h2 data-scrolly="fromLeft">Faire du bénévolat</h2>
        <span data-scrolly="fromLeft">Types de bénévolat :</span>
        <ul>
            <li data-scrolly="fromLeft">
                Dans le centre d'activités de jour : chaque bénévole donne une touche personnelle à la relation avec les
                participants. Vous apportez une écoute, une attention et une considération supplémentaire. Aide
                précieuse pour l'équipe permanente, votre présence facilite, par exemple, le déroulement des activités.​
            </li>
            <li data-scrolly="fromLeft">
                Lors d'événements : vous nous aidez à offrir un service de qualité, doté de toutes les petites
                attentions qui sont chères à notre signature. Vous participez à maintenir le lien de proximité essentiel
                entre l'organisme et ses membres, et contribuez au bon déroulement de nos activités (conférences,
                activités festives, rencontre d’information, kiosque de représentation).
            </li>
            <li data-scrolly="fromLeft">Dans nos bureaux : tâches administratives​.</li>
        </ul>
        <div class="button_container">
            <a data-scrolly="fromRight" href="#">En savoir plus</a>
        </div>
    </div>
</section>

<section class="comp_links">
    <img data-scrolly="fromLeft" class="deco" src="/pfe/ltdp/wp-content/themes/theme_ltdp/assets/images/illustrations/deco/vert-beige.svg" alt="" />
    <div class="wrapper">
        <h2 data-scrolly="fromBottom">Plus d'information</h2>
        <div class="links">
            <a data-scrolly="fromBottom" href="#">SYMPTÔMES STADE AVANCÉ</a>
            <a data-scrolly="fromBottom" href="#">SYMPTÔMES STADE LÉGER</a>
            <a data-scrolly="fromBottom" href="#">SYMPTÔMES STADE MODÉRÉ</a>
            <a data-scrolly="fromBottom" href="#">ACCOMPAGNER LA PERSONNE ATTEINTE</a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
