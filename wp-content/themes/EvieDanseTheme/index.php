<?php get_header(); ?>

<!-- Hero Section -->
<section class="hero">
    <div class="hero-background">
        <div class="hero-pattern"></div>
    </div>
    <div class="container">
        <div class="hero-content">
            <h1 class="hero-title">
                <span class="hero-title-main">Inclusion, Bien-être & Performance</span>
                <span class="hero-title-sub">individuelle et collective</span>
            </h1>
            <div class="hero-services">
                <span class="hero-service">Cours de danse solo et duo</span>
                <span class="hero-service">Danse inclusive et adaptée</span>
                <span class="hero-service">Danse-thérapie, Projets RSE</span>
                <span class="hero-service">Performance individuelle et collective</span>
            </div>
            <div class="hero-actions">
                <a href="#contact" class="hero-cta-primary">
                    <i class="fas fa-arrow-right"></i>
                    <span>Contactez-nous</span>
                </a>
                <a href="<?php echo home_url('/nous-connaitre'); ?>" class="hero-cta-secondary">
                    En savoir plus
                </a>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="about-home">
    <div class="container">
        <div class="about-home-content">
            <div class="about-home-image">
                <div class="about-image-container">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/eviedanse-about.jpg" alt="éVieDanse - Danse et bien-être" />
                    <div class="about-image-overlay">
                        <div class="dragonfly-animation">
                            <svg viewBox="0 0 60 60" width="80" height="80">
                                <path d="M30 15 L20 8 L23 18 L28 22 Z" fill="#e91e63" opacity="0.9"/>
                                <path d="M30 15 L40 8 L37 18 L32 22 Z" fill="#e91e63" opacity="0.9"/>
                                <path d="M30 22 L20 32 L23 38 L28 35 Z" fill="#9c27b0" opacity="0.9"/>
                                <path d="M30 22 L40 32 L37 38 L32 35 Z" fill="#9c27b0" opacity="0.9"/>
                                <circle cx="30" cy="18" r="6" fill="#673ab7"/>
                                <line x1="30" y1="24" x2="30" y2="45" stroke="#673ab7" stroke-width="2"/>
                                <circle cx="30" cy="47" r="2" fill="#673ab7"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about-home-text">
                <h2>éVieDanse, votre partenaire idéal</h2>
                <p class="about-lead">
                    Vous êtes un particulier en quête de bien-être, de dépassement de soi ou une entreprise impliquée dans la RSE, soucieuse d'améliorer la qualité de vie au travail (QVT) de vos collaborateurs ? <strong>éVieDanse est votre partenaire idéal !</strong>
                </p>
                <p>
                    Notre équipe passionnée vous guidera à travers une expérience unique, alliant exercices de danse et d'arts créatifs à des techniques maîtrisées de communication et de management.
                </p>
                <div class="about-highlight">
                    <p><strong>Venez découvrir notre univers festif, dynamique et coloré où l'on apprend pas à pas, à accroître son bonheur et à redécouvrir son pouvoir personnel !</strong></p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="services-home">
    <div class="container">
        <div class="services-header">
            <h2>Nos prestations</h2>
        </div>
        <div class="services-grid">
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-music"></i>
                </div>
                <h3>Cours & animations danse</h3>
                <p>Cours particuliers et collectifs, danse solo, couple ou duo : Salsa, Bachata, danses de salon, rock-swing, danse inclusive</p>
                <div class="service-link">
                    <a href="<?php echo home_url('/cours-de-danse'); ?>">En savoir plus</a>
                </div>
            </div>
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-users"></i>
                </div>
                <h3>Formations & ateliers entreprise</h3>
                <p>Formations thématiques en management des équipes, cohésion et team-building, leadership, gestion du stress et des émotions</p>
                <div class="service-link">
                    <a href="<?php echo home_url('/formations'); ?>">En savoir plus</a>
                </div>
            </div>
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-brain"></i>
                </div>
                <h3>Séances & ateliers Psychopédagogie</h3>
                <p>Séances individuelles ou collectives pour intégrer de nouvelles compétences personnelles ou professionnelles et redécouvrir son potentiel</p>
                <div class="service-link">
                    <a href="<?php echo home_url('/psychopedagogie'); ?>">En savoir plus</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Target Audience Section -->
<section class="audience-home">
    <div class="container">
        <div class="audience-header">
            <h2>Pour qui ?</h2>
        </div>
        <div class="audience-grid">
            <div class="audience-card">
                <div class="audience-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/particuliers.jpg" alt="Particuliers" />
                </div>
                <div class="audience-content">
                    <h4>Particuliers</h4>
                    <p>Vous souhaitez libérer une émotion, mieux gérer votre stress, atteindre un objectif personnel ou professionnel ou tout simplement vous sentir mieux au quotidien ?</p>
                    <a href="#contact" class="audience-btn">Réservez votre séance</a>
                </div>
            </div>
            <div class="audience-card">
                <div class="audience-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/entreprises.jpg" alt="Entreprises" />
                </div>
                <div class="audience-content">
                    <h4>TPE/PME, Grandes entreprises, CE</h4>
                    <p>Formations intra ou inter-entreprises pour redonner du rythme à vos équipes et booster la productivité</p>
                    <a href="#contact" class="audience-btn">Demandez votre devis</a>
                </div>
            </div>
            <div class="audience-card">
                <div class="audience-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/medical.jpg" alt="Secteur médical" />
                </div>
                <div class="audience-content">
                    <h4>EHPAD, hôpitaux, maisons de retraites</h4>
                    <p>Ateliers alternant temps de parole et activités artistiques pour lâcher prise et libérer les tensions psycho-corporelles</p>
                    <a href="#contact" class="audience-btn">Demandez votre devis</a>
                </div>
            </div>
            <div class="audience-card">
                <div class="audience-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/associations.jpg" alt="Associations" />
                </div>
                <div class="audience-content">
                    <h4>Clubs, associations, fondations d'aide</h4>
                    <p>Animations individuelles ou collectives pour personnes (adulte, jeune ou enfant) en situation de handicap ou atteint de maladie chronique ou ALD</p>
                    <a href="#contact" class="audience-btn">Demandez votre devis</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- News Section -->
<section class="news-home">
    <div class="container">
        <div class="news-content">
            <div class="news-info">
                <h2>La danse et l'art, comme une éVieDanse</h2>
                <h3>Suivez nos éVie-Actus…</h3>
                <p>Cliquez sur l'image pour lire l'article</p>
            </div>
            <div class="news-grid">
                <?php
                $recent_posts = wp_get_recent_posts(array(
                    'numberposts' => 4,
                    'post_status' => 'publish'
                ));
                
                foreach($recent_posts as $post) :
                    $thumbnail = get_the_post_thumbnail_url($post['ID'], 'medium');
                ?>
                <article class="news-card">
                    <a href="<?php echo get_permalink($post['ID']); ?>" class="news-link">
                        <?php if($thumbnail) : ?>
                            <div class="news-image">
                                <img src="<?php echo $thumbnail; ?>" alt="<?php echo esc_attr($post['post_title']); ?>" />
                                <div class="news-overlay">
                                    <i class="fas fa-arrow-right"></i>
                                </div>
                            </div>
                        <?php endif; ?>
                        <div class="news-content">
                            <h4><?php echo esc_html($post['post_title']); ?></h4>
                            <div class="news-excerpt">
                                <?php echo wp_trim_words($post['post_content'], 20, '...'); ?>
                            </div>
                        </div>
                    </a>
                </article>
                <?php endforeach; ?>
            </div>
            <div class="news-cta">
                <a href="<?php echo get_permalink(get_option('page_for_posts')); ?>" class="news-more-btn">
                    Découvrir toutes les éVie-Actus
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Partners Section -->
<section class="partners-home">
    <div class="container">
        <div class="partners-content">
            <div class="partners-text">
                <h3>Nos engagements et partenaires</h3>
            </div>
            <div class="partners-logos">
                <div class="partner-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/face-31.png" alt="FACE 31" />
                </div>
                <div class="partner-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/avenue-reseaux.jpg" alt="Avenue des Réseaux" />
                </div>
                <div class="partner-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/logo-mf.jpg" alt="Logo MF" />
                </div>
                <div class="partner-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/ainsi-danse.jpg" alt="Ainsi Danse Balma" />
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="contact-home" id="contact">
    <div class="container">
        <div class="contact-content">
            <div class="contact-form">
                <h3>Contactez-nous</h3>
                <form class="contact-form-fields" method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>">
                    <input type="hidden" name="action" value="contact_form_submission">
                    <?php wp_nonce_field('contact_form_nonce', 'contact_nonce'); ?>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="first_name">Prénom <span class="required">*</span></label>
                            <input type="text" id="first_name" name="first_name" required>
                        </div>
                        <div class="form-group">
                            <label for="last_name">Nom <span class="required">*</span></label>
                            <input type="text" id="last_name" name="last_name" required>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email <span class="required">*</span></label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="phone">Numéro de téléphone <span class="required">*</span></label>
                        <input type="tel" id="phone" name="phone" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="message">Votre demande ou message :</label>
                        <textarea id="message" name="message" rows="4"></textarea>
                    </div>
                    
                    <div class="form-submit">
                        <button type="submit" class="submit-btn">
                            J'envoie ma demande <i class="fas fa-arrow-right"></i>
                        </button>
                    </div>
                </form>
            </div>
            <div class="contact-info">
                <div class="contact-details">
                    <h4>Besoin de changement ?</h4>
                    <p>Découvrez le pouvoir transformateur de nos prestations</p>
                    <a href="tel:0687793732" class="contact-phone">
                        <i class="fas fa-phone"></i>
                        06 87 79 37 32
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>