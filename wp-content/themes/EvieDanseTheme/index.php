<?php get_header(); ?>

<!-- Hero Section -->
<section id="accueil" class="hero">
    <div class="hero-content">
        <h1><?php echo get_field('hero_title') ?: 'Inclusion, Bien-être & Performance'; ?></h1>
        <p class="hero-subtitle"><?php echo get_field('hero_subtitle') ?: 'individuelle et collective'; ?></p>
        <p class="hero-description">
            <?php echo get_field('hero_description') ?: 'Vous êtes un particulier en quête de bien-être, de dépassement de soi ou une entreprise impliquée dans la RSE, soucieuse d\'améliorer la qualité de vie au travail (QVT) de vos collaborateurs ? <strong>éVieDanse est votre partenaire idéal !</strong>'; ?>
        </p>
        <a href="#contact" class="cta-button">
            <i class="fas fa-envelope"></i> Contactez-nous
        </a>
    </div>
</section>

<!-- About Section -->
<section id="about" class="about">
    <div class="container">
        <div class="about-content">
            <div class="about-text fade-in">
                <h2>Notre univers festif et coloré</h2>
                <p>
                    Notre équipe passionnée vous guidera à travers une expérience unique, alliant exercices de danse 
                    et d'arts créatifs à des techniques maîtrisées de communication et de management.
                </p>
                <p>
                    <strong>Venez découvrir notre univers festif, dynamique et coloré où l'on apprend pas à pas, 
                    à accroître son bonheur et à redécouvrir son pouvoir personnel !</strong>
                </p>
            </div>
            <div class="about-image fade-in">
                <div class="about-image-content">
                    <i class="fas fa-music"></i>
                    <h3>La danse et l'art, comme une éVieDanse</h3>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section id="services" class="services">
    <div class="container">
        <h2 class="section-title fade-in">Nos prestations</h2>
        <div class="services-grid">
            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-dance"></i>
                </div>
                <h3>Cours & animations danse</h3>
                <p>Cours particuliers et collectifs, danse solo, couple ou duo : Salsa, Bachata, danses de salon, rock-swing, danse inclusive</p>
            </div>
            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-users"></i>
                </div>
                <h3>Formations & ateliers entreprise</h3>
                <p>Formations thématiques en management des équipes, cohésion et team-building, leadership, gestion du stress et des émotions</p>
            </div>
            <div class="service-card fade-in">
                <div class="service-icon">
                    <i class="fas fa-brain"></i>
                </div>
                <h3>Séances & ateliers Psychopédagogie</h3>
                <p>Séances individuelles ou collectives pour intégrer de nouvelles compétences personnelles ou professionnelles et redécouvrir son potentiel</p>
            </div>
        </div>
    </div>
</section>

<!-- Target Audience -->
<section id="inclusive" class="target-audience">
    <div class="container">
        <h2 class="section-title fade-in">Pour qui ?</h2>
        <div class="audience-grid">
            <div class="audience-card fade-in">
                <div class="audience-icon">
                    <i class="fas fa-user"></i>
                </div>
                <h3>Particuliers</h3>
                <p>Vous souhaitez libérer une émotion, mieux gérer votre stress, atteindre un objectif personnel ou professionnel ou tout simplement vous sentir mieux au quotidien ?</p>
                <a href="#contact" class="audience-button">Réservez votre séance</a>
            </div>
            <div class="audience-card fade-in">
                <div class="audience-icon">
                    <i class="fas fa-building"></i>
                </div>
                <h3>TPE/PME, Grandes entreprises, CE</h3>
                <p>Formations intra ou inter-entreprises pour redonner du rythme à vos équipes et booster la productivité</p>
                <a href="#contact" class="audience-button">Demandez votre devis</a>
            </div>
            <div class="audience-card fade-in">
                <div class="audience-icon">
                    <i class="fas fa-heartbeat"></i>
                </div>
                <h3>EHPAD, hôpitaux, maisons de retraites</h3>
                <p>Ateliers alternant temps de parole et activités artistiques pour lâcher prise et libérer les tensions psycho-corporelles</p>
                <a href="#contact" class="audience-button">Demandez votre devis</a>
            </div>
            <div class="audience-card fade-in">
                <div class="audience-icon">
                    <i class="fas fa-hands-helping"></i>
                </div>
                <h3>Clubs, associations, fondations d'aide</h3>
                <p>Animations individuelles ou collectives pour personnes (adulte, jeune ou enfant) en situation de handicap ou atteint de maladie chronique ou ALD</p>
                <a href="#contact" class="audience-button">Demandez votre devis</a>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="contact">
    <div class="container">
        <h2 class="section-title fade-in">Contactez-nous</h2>
        <div class="contact-content">
            <div class="contact-form fade-in">
                <?php echo do_shortcode('[contact-form-7 id="1"]'); // Ou votre formulaire de contact ?>
            </div>
            <div class="contact-info fade-in">
                <h3>Suivez nos éVie-Actus…</h3>
                <p>Découvrez nos dernières actualités, événements et témoignages de nos participants.</p>
                <div style="text-align: center; margin: 2rem 0;">
                    <i class="fas fa-newspaper" style="font-size: 3rem; color: #667eea; margin-bottom: 1rem;"></i>
                    <br>
                    <a href="<?php echo get_permalink(get_option('page_for_posts')); ?>" style="color: #667eea; text-decoration: none; font-weight: bold;">
                        Découvrir toutes les éVie-Actus
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>