<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lblog
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'lblog' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			?>
			<h1 class="site-title"><a class="link" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php
			$lblog_description = get_bloginfo( 'description', 'display' );
			if ( $lblog_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $lblog_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
        <img alt="Navigation Menu" class="icon" src="<?= get_stylesheet_directory_uri() ?>/public/glyphicons_free/glyphicons/png/glyphicons-517-menu-hamburger.png">
      </button>

      <div id="primary-menu" class="menu">
        <ul>
          <li class="page_item page-item-100 current_page_item"><a href="<?= home_url() ?>">Hom<span class="lastletter">e</span></a></li>
          <li class="page_item page-item-100 current_page_item"><a href="<?= get_permalink(get_page_by_path('/portfolio/')->ID) ?>">Portfoli<span class="lastletter">o</span></a></li>
        </ul>
      </div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
