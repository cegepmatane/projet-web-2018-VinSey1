<?php

session_start();
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package AwesomePress
 * @since   1.0.0
 */

?><!DOCTYPE html>
<?php awesomepress_html_before(); ?>
<html <?php language_attributes(); ?>>
<head>
<?php awesomepress_head_top(); ?>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<title><?php echo gettext("Survie étudiante") ?></title>
<link rel="stylesheet" href="../../decoration/style_general.css">
<link rel="stylesheet" type="text/css" href="../../decoration/MyFontsWebfontsKit.css">	
<?php awesomepress_head_bottom(); ?>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php awesomepress_body_top(); ?>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'awesomepress'); ?></a>

    <?php awesomepress_header_before(); ?>
    <header id="masthead" class="site-header" role="banner">
    <?php awesomepress_header_top(); ?>
    <div id="titre"> <?php echo gettext("Survie étudiante") ?></div>
        <div id="sous-titre"><?php echo gettext("Partie Publique") ?> </div>
        <div id="date"><?php  setlocale (LC_TIME, 'fr_FR.utf8','fra'); echo (strftime("%A %d %B"));  ?>
        <?php 
		if (isset($_SESSION['id']) && isset($_SESSION['pseudonyme'])) {
		?>
		<div id="session"> <?php echo gettext($_SESSION['pseudonyme']) ?>
	<?php } ?>
        <div class="site-branding">
            <?php the_custom_logo(); ?>
            <?php if (is_front_page() && is_home() ) : ?>
                <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
            <?php else : ?>
                <p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
            <?php endif; ?>

            <?php $description = get_bloginfo('description', 'display'); ?>
            <?php if ($description || is_customize_preview() ) : ?>
                <p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
            <?php endif; ?>
        </div><!-- .site-branding -->

        <nav id="site-navigation" class="main-navigation" role="navigation">
                <ul>
                    <li><a href="accueil" title="<?php echo gettext("Aller sur la page d'Accueil")?>"><?php echo gettext("Accueil")?></a></li>
                    <li><a href="catalogue" title="<?php echo gettext("Aller sur la page Catalogue")?>"><?php echo gettext("Catalogue")?></a></li>
                    <li><a href="blog" title="<?php echo gettext("Aller sur le blog")?>"><?php echo gettext("Blog")?></a></li>
                    <li><a href="doc/page-mission.html" title="<?php echo gettext("Aller sur la page mission")?>"><?php echo gettext("Page mission")?></a></li>
                    <?php if (isset($_SESSION['id']) && isset($_SESSION['pseudonyme'])){ ?>
                            <li><a href="vue/prive/profil.php" title="<?php echo gettext("Aller sur la page Profil")?>"><?php echo gettext("Profil")?></a></li>
                        <?php if ($_SESSION['role'] == 1){  ?>
                            <li><a href="vue/prive/administration-utilisateur.php" title="<?php echo gettext("Aller sur la page Administration utilisateur")?>"><?php echo gettext("Administration utilisateur")?></a></li>
                            <li><a href="vue/prive/administration-objet.php" title="<?php echo gettext("Aller sur la page Administration Objet")?>"><?php echo gettext("Administration objet")?></a></li>
                            <li><a href="vue/prive/panneau-administration.php" title="<?php echo gettext("Aller sur le panneau d'administration")?>"><?php echo gettext("Panneau d'administration")?></a></li>
                    <?php }} ?>
                </ul> 
            <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                <?php if (AWESOMEPRESS_SUPPORT_FONTAWESOME ) : ?>
                    <i class="fa fa-reorder" aria-hidden="true"></i>
                <?php endif; ?>
                <?php esc_html_e('Primary Menu', 'awesomepress'); ?>
            </button>
            <?php wp_nav_menu(array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' )); ?>
        </nav><!-- #site-navigation -->

    <?php awesomepress_header_bottom(); ?>
    </header><!-- #masthead -->

    <?php awesomepress_header_after(); ?>

    <?php awesomepress_content_before(); ?>
    <div id="content" class="site-content">
    <?php awesomepress_content_top(); ?>
