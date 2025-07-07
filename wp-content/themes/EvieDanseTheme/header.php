<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="main-header">
        <nav class="navbar">
            <div class="container">
                <div class="nav-brand">
                    <a href="<?php echo home_url(); ?>" class="logo">
                        <div class="logo-icon">
                            <svg viewBox="0 0 60 60" width="50" height="50">
                                <!-- Libellule stylisée -->
                                <path d="M30 15 L20 8 L23 18 L28 22 Z" fill="#e91e63" opacity="0.9"/>
                                <path d="M30 15 L40 8 L37 18 L32 22 Z" fill="#e91e63" opacity="0.9"/>
                                <path d="M30 22 L20 32 L23 38 L28 35 Z" fill="#9c27b0" opacity="0.9"/>
                                <path d="M30 22 L40 32 L37 38 L32 35 Z" fill="#9c27b0" opacity="0.9"/>
                                <circle cx="30" cy="18" r="6" fill="#673ab7"/>
                                <line x1="30" y1="24" x2="30" y2="45" stroke="#673ab7" stroke-width="2"/>
                                <circle cx="30" cy="47" r="2" fill="#673ab7"/>
                            </svg>
                        </div>
                        <div class="logo-text">
                            <span class="logo-main">éVieDanse</span>
                            <span class="logo-tagline">Inclusion • Bien-être • Performance</span>
                        </div>
                    </a>
                </div>

                <div class="nav-menu" id="navMenu">
                    <ul class="nav-links">
                        <li><a href="<?php echo home_url(); ?>" class="nav-link <?php echo is_home() ? 'active' : ''; ?>">Accueil</a></li>
                        <li><a href="<?php echo home_url('/nous-connaitre'); ?>" class="nav-link <?php echo is_page('nous-connaitre') ? 'active' : ''; ?>">Nous connaître</a></li>
                        <li class="nav-item-dropdown">
                            <a href="#" class="nav-link">Nos prestations <span class="dropdown-arrow">▼</span></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo home_url('/cours-particuliers'); ?>">Cours particuliers</a></li>
                                <li><a href="<?php echo home_url('/cours-collectifs'); ?>">Cours collectifs</a></li>
                                <li><a href="<?php echo home_url('/coaching-entreprise'); ?>">Coaching entreprise</a></li>
                                <li><a href="<?php echo home_url('/formations'); ?>">Formations</a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo home_url('/planning'); ?>" class="nav-link">Planning</a></li>
                        <li><a href="<?php echo home_url('/tarifs'); ?>" class="nav-link">Tarifs</a></li>
                        <li><a href="<?php echo home_url('/contact'); ?>" class="nav-link">Contact</a></li>
                    </ul>
                    
                    <div class="nav-actions">
                        <a href="tel:0687793732" class="phone-btn">
                            <span class="phone-icon">📞</span>
                            <span class="phone-text">06 87 79 37 32</span>
                        </a>
                        <a href="<?php echo home_url('/inscription'); ?>" class="cta-btn">S'inscrire</a>
                    </div>
                </div>

                <div class="mobile-menu-toggle" id="mobileToggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </nav>
    </header>

    <main class="main-content">