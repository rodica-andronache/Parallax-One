<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package parallax-one
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
<style>
	.paralax_one_only_customizer{
		display:none !important;
	}
</style>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<!-- =========================
     PRE LOADER       
    ============================== -->
	<?php
		
	 global $wp_customize;

	 if(is_front_page() && !isset( $wp_customize ) && get_option( 'show_on_front' ) != 'page' ): 
	 
		$parallax_one_disable_preloader = get_theme_mod('paralax_one_disable_preloader');
		
		if( isset($parallax_one_disable_preloader) && ($parallax_one_disable_preloader != 1)):
			 
			echo '<div class="preloader">';
				echo '<div class="status">&nbsp;</div>';
			echo '</div>';
			
		endif;	

	endif; ?>


	<!-- =========================
     SECTION: HOME / HEADER  
    ============================== -->
	<header class="header header-style-one" data-stellar-background-ratio="0.5" id="home">

        <!-- COLOR OVER IMAGE -->
        <?php
        	if( !is_front_page() ){
        		$fixedheader = 'sticky-navigation-open';
        	}else{
        		$fixedheader = '';
        	}
        ?>
        <div class="overlay-layer-wrap <?php echo $fixedheader; ?>">

            <!-- STICKY NAVIGATION -->
            <div class="navbar navbar-inverse bs-docs-nav navbar-fixed-top sticky-navigation appear-on-scroll" role="navigation">
				<!-- CONTAINER -->
                <div class="container">
				
                    <div class="navbar-header">
                        
                        <!-- LOGO ON STICKY NAV BAR -->
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#stamp-navigation">
                            <span class="sr-only"><?php _e('Toggle navigation','parallax-one'); ?></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                     
                        <!-- LOGO -->
						
						<?php
							global $wp_customize;
							
							$parallax_one = get_theme_mod('paralax_one_logo', get_stylesheet_directory_uri().'/images/logo-nav.png');

							
							
							if(!empty($parallax_one)):

								echo '<a href="'.esc_url( home_url( '/' ) ).'" class="navbar-brand" title="'.get_bloginfo('title').'">';

									echo '<img src="'.$parallax_one.'" alt="'.get_bloginfo('title').'">';

								echo '</a>';
							
							else:
							
								if( isset( $wp_customize ) ):
								
									echo '<a href="'.esc_url( home_url( '/' ) ).'" class="navbar-brand" title="'.get_bloginfo('title').'">';

										echo '<img src="" alt="'.get_bloginfo('title').'" class="paralax_one_only_customizer">';

									echo '</a>';
								
								endif;
							
								echo '<div class="header-logo-wrap">';

									echo "<h1 class='site-title'><a href='".esc_url( home_url( '/' ) )."' title='".esc_attr( get_bloginfo( 'name', 'display' ) )."' rel='home'>".get_bloginfo( 'name' )."</a></h1>";
								
									echo "<h2 class='site-description'>".get_bloginfo( 'description' )."</h2>";

								echo '</div>';							
							endif;	

						?>

                    </div>
                    
                    <!-- MENU -->
                    <div class="navbar-collapse collapse" id="stamp-navigation">		
    					<?php 
    						wp_nav_menu( 
                                array( 
                                    'theme_location'    => 'primary',
                                    'container'         => false,
                                    'menu_class'        => 'nav navbar-nav navbar-right main-navigation small-text', 
                                    'fallback_cb'       => 'parallax_one_wp_page_menu' ) );
    					?>
                    </div>
					<!-- /END MENU -->
                </div>
                <!-- /END CONTAINER -->
            </div>
            <!-- /END STICKY NAVIGATION -->