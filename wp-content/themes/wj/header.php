<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WJ_Molding
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'wj' ); ?></a>

<header id="masthead" class="site-header">
    <div class="container-site">
        <div class="logo-container">
            <span class="screen-reader-text">WJ Molding Inc.</span>

            <?php if( is_front_page() ) : ?>
                <div class="logo">
                    <?php echo file_get_contents( get_template_directory() . '/assets/wj-logo-2.svg'); ?>
                </div>
            <?php else : ?>

                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo" rel="home">
                    <?php echo file_get_contents( get_template_directory() . '/assets/wj-logo-2.svg'); ?>
                </a>
            <?php endif; ?>

    	</div>

        <button class="menu-toggle no-button-style" aria-controls="primary-menu" aria-expanded="false">
            <svg>
                <use xlink:href="#icon-menu"></use>
            </svg>
            <span>Primary Menu</span>
        </button>

        <nav id="site-navigation" class="site-nav">
            <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'menu-1',
                        'container' => '',
                    )
                );
            ?>
        </nav><!-- #site-navigation -->
    </div>
</header><!-- #masthead -->

<main id="primary" class="site-content">
