<?php
function my_theme_enqueue_styles() {

    $parent_style = 'moesia-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

function moesia_nav_bar() {
	echo '<div class="top-bar">
			<div class="container">
				<div class="site-branding col-md-3">';
				if ( get_theme_mod('site_logo') ) :
					echo '<a href="' . esc_url( home_url( '/' ) ) . '" title="';
						bloginfo('name');
					echo '"><img class="site-logo" src="' . esc_url(get_theme_mod('site_logo')) . '" alt="';
						bloginfo('name');
					echo '" /></a>';
				else :
					echo '<h1 class="site-title"><a href="' . esc_url( home_url( '/' ) ) . '" rel="home">';
						bloginfo( 'name' );
					echo '</a></h1>';
					echo '<h2 class="site-description">';
						bloginfo( 'description' );
					echo '</h2>';
				endif;
			echo '</div>';
			echo '<button class="menu-toggle btn"><i class="fa fa-bars"></i></button>
				<nav id="site-navigation" class="main-navigation col-md-9" role="navigation">';
				wp_nav_menu( array( 'theme_location' => 'primary' ) );
			echo '</nav>';
			
			if ( get_theme_mod('toggle_search', 0) ) :
				echo '<span class="nav-search"><i class="fa fa-search"></i></span>';
				echo '<span class="nav-deco"></span>';
				echo '<div class="nav-search-box">';
					get_search_form();
				echo '</div>';
			endif;
		echo '</div>';
	echo '</div>';
}