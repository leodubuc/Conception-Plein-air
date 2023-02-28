<section class="contact">
    <div class="wrapper">
        <?php $titre_contact = get_sub_field('static_titre') ?>
        <h1 data-scrolly="fromBottom"><?php echo ($titre_contact); ?></h1>

        <div>
            <div class="info">
                <?php if(have_rows('tout_les_info')) : ?>   
                <?php while (have_rows('tout_les_info')) : the_row() ?> 
                <h3>Téléphone</h3>
                <div>
                    <a href="tel:514-373-9851">514 373-9851</a>
                </div>

                <h3>Courriel</h3>
                <div>
                    <a href="mailto: admissions@tempsdunepause.org">admissions@tempsdunepause.org</a>
                </div>

                <h3>Bureaux</h3>

                <div>
                    <a href="https://goo.gl/maps/n9hmv1Q5t8L9R32Q9">
                        CHSLD Joseph-François-Perreault 7400 Boulevard Saint-Michel, H2A 2Z8. Métro St-Michel
                    </a>
                    <p><strong>Lundi au samedi</strong></p>
                </div>

                <div>
                    <a href="https://goo.gl/maps/mxmsxVqREGjWohQt9">
                        Villeray / Petite-Patrie : Maison St-Étienne 6001, boul. Christophe-Colomb, H2S 2G3. Métro
                        Rosemont
                    </a>

                    <p><strong>Vendredi</strong></p>
                </div>

                <div>
                    <a href="https://goo.gl/maps/nr7xMsTcP9YbbhSA7">
                        Anjou : Les Jardins Angevin 7750, boul. Châteauneuf, H1K4G3
                    </a>

                    <p><strong>Mardi et jeudi</strong></p>
                </div>
            </div>
            <div>
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