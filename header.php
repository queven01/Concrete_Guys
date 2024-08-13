<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package KC_Portfolio_Theme
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
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'kc_portfolio_theme' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="top-header-section header-section">
			<div class="container content">
				phone email and social media
				<?php 
					$social_media = get_field('social_media', 'option');
					if($social_media){
						$facebook = $social_media['facebook'];
						$instagram = "";
						$twitter = $social_media['twitter'];
						$tik_tok = $social_media['tik_tok'];
					} else {
						$facebook = "";
						$instagram = "";
						$twitter = "";
						$tik_tok = "";
					}
				?>
				<?php if($facebook||$instagram||$twitter||$tik_tok): ?>
					<div class="social_media">
							<?php 
								if($facebook){ 
									echo '<a target="_blank" href="'.$facebook.'">'.file_get_contents( get_template_directory_uri() . '/assets/icons/facebook.svg' ).'</a>';
								}
								if($instagram){ 
									echo '<a target="_blank" href="'.$instagram.'">'.file_get_contents( get_template_directory_uri() . '/assets/icons/instagram.svg' ).'</a>';
								}
								if($twitter){ 
									echo '<a target="_blank" href="'.$twitter.'">'.file_get_contents( get_template_directory_uri() . '/assets/icons/twitter-x.svg' ).'</a>';
								}
								if($tik_tok){ 
									echo '<a target="_blank" href="'.$tik_tok.'">'.file_get_contents( get_template_directory_uri() . '/assets/icons/tic-toc.svg' ).'</a>';
								}
							?>
					</div>
				<?php endif; ?>
			</div>
		</div>	
		<div class="middle-header-section header-section">
			<div class="container content">
				<div class="site-branding">
					<?php
					
					if ( has_custom_logo() ) : 
						the_custom_logo();
					else : ?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>					
					<?php endif;
					$kc_portfolio_theme_description = get_bloginfo( 'description', 'display' );
					if ( $kc_portfolio_theme_description || is_customize_preview() ) :
						?>
						<p class="site-description"><?php echo $kc_portfolio_theme_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
					<?php endif; ?>
				</div><!-- .site-branding -->
				
				<!-- Call to Action buttons -->
				<div class="site-call-to-action">
					<a href="" class="btn">Request an Estimate</a>
					<a href="" class="btn">Schedule a Quick Call</a>
				</div>
			</div>
		</div>
		<div class="bottom-header-section header-section">
			<div class="container content">
				<nav id="site-navigation" class="main-navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
						<span class="bar"></span>
						<span class="bar"></span>
						<span class="bar"></span>
					</button>
					<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'kc_portfolio_theme' ); ?></button> -->
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						)
					);
					?>
				</nav><!-- #site-navigation -->
			</div>
		</div>
	</header><!-- #masthead -->
