<?php
/* ------------------------------------------------------------------------- *
 *  Dynamic styles
/* ------------------------------------------------------------------------- */

/*  Convert hexadecimal to rgb
/* ------------------------------------ */
if ( ! function_exists( 'clearwork_hex2rgb' ) ) {

	function clearwork_hex2rgb( $hex, $array=false ) {
		$hex = str_replace("#", "", $hex);

		if ( strlen($hex) == 3 ) {
			$r = hexdec(substr($hex,0,1).substr($hex,0,1));
			$g = hexdec(substr($hex,1,1).substr($hex,1,1));
			$b = hexdec(substr($hex,2,1).substr($hex,2,1));
		} else {
			$r = hexdec(substr($hex,0,2));
			$g = hexdec(substr($hex,2,2));
			$b = hexdec(substr($hex,4,2));
		}

		$rgb = array( $r, $g, $b );
		if ( !$array ) { $rgb = implode(",", $rgb); }
		return $rgb;
	}
	
}	


/*  Google fonts
/* ------------------------------------ */
if ( ! function_exists( 'clearwork_enqueue_google_fonts' ) ) {

	function clearwork_enqueue_google_fonts () {
		if ( get_theme_mod('dynamic-styles', 'on') == 'on' ) {
			if ( get_theme_mod( 'font' ) == 'titillium-web-ext' ) { wp_enqueue_style( 'titillium-web-ext', '//fonts.googleapis.com/css?family=Titillium+Web:400,400italic,300italic,300,600&subset=latin,latin-ext' ); }		
			if ( get_theme_mod( 'font' ) == 'droid-serif' )	{ wp_enqueue_style( 'droid-serif', '//fonts.googleapis.com/css?family=Droid+Serif:400,400italic,700' ); }				
			if ( get_theme_mod( 'font' ) == 'source-sans-pro' )	{ wp_enqueue_style( 'source-sans-pro', '//fonts.googleapis.com/css?family=Source+Sans+Pro:400,300italic,300,400italic,600&subset=latin,latin-ext' ); }
			if ( get_theme_mod( 'font' ) == 'lato' ) { wp_enqueue_style( 'lato', '//fonts.googleapis.com/css?family=Lato:400,300,300italic,400italic,700' ); }
			if ( get_theme_mod( 'font' ) == 'raleway' )	{ wp_enqueue_style( 'raleway', '//fonts.googleapis.com/css?family=Raleway:400,300,600' ); }
			if ( get_theme_mod( 'font' ) == 'ubuntu' ) { wp_enqueue_style( 'ubuntu', '//fonts.googleapis.com/css?family=Ubuntu:400,400italic,300italic,300,700&subset=latin,latin-ext' ); }
			if ( get_theme_mod( 'font' ) == 'ubuntu-cyr' ) { wp_enqueue_style( 'ubuntu-cyr', '//fonts.googleapis.com/css?family=Ubuntu:400,400italic,300italic,300,700&subset=latin,cyrillic-ext' ); }
			if ( get_theme_mod( 'font' ) == 'roboto' ) { wp_enqueue_style( 'roboto', '//fonts.googleapis.com/css?family=Roboto:400,300italic,300,400italic,700&subset=latin,latin-ext' ); }
			if ( get_theme_mod( 'font' ) == 'roboto-cyr' ) { wp_enqueue_style( 'roboto-cyr', '//fonts.googleapis.com/css?family=Roboto:400,300italic,300,400italic,700&subset=latin,cyrillic-ext' ); }
			if ( get_theme_mod( 'font' ) == 'roboto-condensed' ) { wp_enqueue_style( 'roboto-condensed', '//fonts.googleapis.com/css?family=Roboto+Condensed:400,300italic,300,400italic,700&subset=latin,latin-ext' ); }
			if ( get_theme_mod( 'font' ) == 'roboto-condensed-cyr' ) { wp_enqueue_style( 'roboto-condensed-cyr', '//fonts.googleapis.com/css?family=Roboto+Condensed:400,300italic,300,400italic,700&subset=latin,cyrillic-ext' ); }
			if ( get_theme_mod( 'font' ) == 'roboto-slab' ) { wp_enqueue_style( 'roboto-slab', '//fonts.googleapis.com/css?family=Roboto+Slab:400,300italic,300,400italic,700&subset=latin,latin-ext' ); }
			if ( get_theme_mod( 'font' ) == 'roboto-slab-cyr' ) { wp_enqueue_style( 'roboto-slab-cyr', '//fonts.googleapis.com/css?family=Roboto+Slab:400,300italic,300,400italic,700&subset=latin,cyrillic-ext' ); }
			/*default*/ if ( ( get_theme_mod( 'font' ) == '' ) || ( get_theme_mod( 'font' ) == 'playfair-display' ) ) { wp_enqueue_style( 'playfair-display', '//fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700&subset=latin,latin-ext' ); }
			if ( get_theme_mod( 'font' ) == 'playfair-display-cyr' ) { wp_enqueue_style( 'playfair-display-cyr', '//fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700&subset=latin,cyrillic' ); }
			if ( get_theme_mod( 'font' ) == 'open-sans' ) { wp_enqueue_style( 'open-sans', '//fonts.googleapis.com/css?family=Open+Sans:400,400italic,300italic,300,600&subset=latin,latin-ext' ); }
			if ( get_theme_mod( 'font' ) == 'open-sans-cyr' ) { wp_enqueue_style( 'open-sans-cyr', '//fonts.googleapis.com/css?family=Open+Sans:400,400italic,300italic,300,600&subset=latin,cyrillic-ext' ); }
			if ( get_theme_mod( 'font' ) == 'pt-serif' ) { wp_enqueue_style( 'pt-serif', '//fonts.googleapis.com/css?family=PT+Serif:400,700,400italic&subset=latin,latin-ext' ); }
			if ( get_theme_mod( 'font' ) == 'pt-serif-cyr' ) { wp_enqueue_style( 'pt-serif-cyr', '//fonts.googleapis.com/css?family=PT+Serif:400,700,400italic&subset=latin,cyrillic-ext' ); }
		}
	}	
	
}
add_action( 'wp_enqueue_scripts', 'clearwork_enqueue_google_fonts' ); 	


/*  Dynamic css output
/* ------------------------------------ */
if ( ! function_exists( 'clearwork_dynamic_css' ) ) {

	function clearwork_dynamic_css() {
		if ( get_theme_mod('dynamic-styles', 'on') == 'on' ) {
		
			// rgb values
			$color_1 = get_theme_mod('color-1');
			$color_1_rgb = clearwork_hex2rgb($color_1);
			
			// start output
			$styles = '';		
			
			// google fonts
			if ( get_theme_mod( 'font' ) == 'titillium-web-ext' ) { $styles .= 'body { font-family: "Titillium Web", Arial, sans-serif; }'."\n"; }
			if ( get_theme_mod( 'font' ) == 'droid-serif' ) { $styles .= 'body { font-family: "Droid Serif", serif; }'."\n"; }
			if ( get_theme_mod( 'font' ) == 'source-sans-pro' ) { $styles .= 'body { font-family: "Source Sans Pro", Arial, sans-serif; }'."\n"; }
			if ( get_theme_mod( 'font' ) == 'lato' ) { $styles .= 'body { font-family: "Lato", Arial, sans-serif; }'."\n"; }
			if ( get_theme_mod( 'font' ) == 'raleway' ) { $styles .= 'body { font-family: "Raleway", Arial, sans-serif; }'."\n"; }
			if ( ( get_theme_mod( 'font' ) == 'ubuntu' ) || ( get_theme_mod( 'font' ) == 'ubuntu-cyr' ) ) { $styles .= 'body { font-family: "Ubuntu", Arial, sans-serif; }'."\n"; }	
			if ( ( get_theme_mod( 'font' ) == 'roboto' ) || ( get_theme_mod( 'font' ) == 'roboto-cyr' ) ) { $styles .= 'body { font-family: "Roboto", Arial, sans-serif; }'."\n"; }
			if ( ( get_theme_mod( 'font' ) == 'roboto-condensed' ) || ( get_theme_mod( 'font' ) == 'roboto-condensed-cyr' ) ) { $styles .= 'body { font-family: "Roboto Condensed", Arial, sans-serif; }'."\n"; }
			if ( ( get_theme_mod( 'font' ) == 'roboto-slab' ) || ( get_theme_mod( 'font' ) == 'roboto-slab-cyr' ) ) { $styles .= 'body { font-family: "Roboto Slab", Arial, sans-serif; }'."\n"; }			
			/*default*/ if ( ( get_theme_mod( 'font' ) == '' ) || ( get_theme_mod( 'font' ) == 'playfair-display' ) || ( get_theme_mod( 'font' ) == 'playfair-display-cyr' ) ) { $styles .= 'body { font-family: "Playfair Display", Arial, sans-serif; }'."\n"; }
			if ( ( get_theme_mod( 'font' ) == 'open-sans' ) || ( get_theme_mod( 'font' ) == 'open-sans-cyr' ) )	{ $styles .= 'body { font-family: "Open Sans", Arial, sans-serif; }'."\n"; }
			if ( ( get_theme_mod( 'font' ) == 'pt-serif' ) || ( get_theme_mod( 'font' ) == 'pt-serif-cyr' ) ) { $styles .= 'body { font-family: "PT Serif", serif; }'."\n"; }	
			if ( get_theme_mod( 'font' ) == 'arial' ) { $styles .= 'body { font-family: Arial, sans-serif; }'."\n"; }
			if ( get_theme_mod( 'font' ) == 'georgia' ) { $styles .= 'body { font-family: Georgia, serif; }'."\n"; }
			if ( get_theme_mod( 'font' ) == 'verdana' ) { $styles .= 'body { font-family: Verdana, sans-serif; }'."\n"; }
			if ( get_theme_mod( 'font' ) == 'tahoma' ) { $styles .= 'body { font-family: Tahoma, sans-serif; }'."\n"; }
			
			// container width
			if ( get_theme_mod('container-width','1200') != '1200' ) {			
				if ( get_theme_mod( 'boxed' ) ) { 
					$styles .= '.boxed #wrapper { max-width: '.esc_attr( get_theme_mod('container-width') ).'px; }'."\n";
				}
				else {
					$styles .= '.full-width #wrapper { max-width: '.esc_attr( get_theme_mod('container-width') ).'px; margin-left: auto; margin-right: auto; }'."\n";
				}
			}
			// post format max-width
			if ( get_theme_mod('post-format-width','940') != '940' ) {
				$styles .= '
.entry-media { max-width: '.esc_attr( get_theme_mod('post-format-width') ).'px; }
				'."\n";
			}
			// content max-width
			if ( get_theme_mod('content-width','640') != '640' ) {
				$styles .= '
.entry > :not(.alignfull),
.entry-header,
.entry-footer { max-width: '.esc_attr( get_theme_mod('content-width') ).'px; }
				'."\n";
			}
			// logo background
			if ( get_theme_mod('logo-background','#ffffff') != '#ffffff' ) {
				$styles .= '
.site-title { background-color: '.esc_attr( get_theme_mod('logo-background') ).'; }
.site-title a { color: #fff; }
.site-description { margin-left: 20px; }
				'."\n";
			}
			// header background
			if ( get_theme_mod('header-background','#ffffff') != '#ffffff' ) {
				$styles .= '
#header { background-color: '.esc_attr( get_theme_mod('header-background') ).'; }
.site-title a { color: #fff; }
.site-description { color: rgba(255,255,255,0.7); }

@media only screen and (max-width: 719px) {
	.site-title { border-bottom-color: rgba(255,255,255,0.2)!important; }
}

.nav-menu:not(.mobile) a { color: rgba(255,255,255,0.8); }
.nav-menu:not(.mobile) a:hover { color: #fff; }
.nav-menu:not(.mobile) li.current_page_item > span > a, 
.nav-menu:not(.mobile) li.current-menu-item > span > a, 
.nav-menu:not(.mobile) li.current-menu-ancestor > span > a, 
.nav-menu:not(.mobile) li.current-post-parent > span > a { color: #fff; }
.nav-menu:not(.mobile) button .svg-icon { fill: rgba(255,255,255,0.5); }
.nav-menu:not(.mobile) button.active { background: rgba(255,255,255,0.2); }
.menu-toggle-icon span { background: #fff; }
.nav-menu .svg-icon { fill: #fff; }
.nav-menu.mobile button.active .svg-icon { fill: #fff; }
.nav-menu.mobile ul ul { background: rgba(0,0,0,0.06); }
.nav-menu.mobile ul li .menu-item-wrapper,
.nav-menu.mobile ul ul li .menu-item-wrapper { border-bottom: 1px solid rgba(255,255,255,0.2); }
.nav-menu.mobile ul li a { color: #fff; }
.nav-menu.mobile ul button,
.nav-menu.mobile ul ul button { border-left: 1px solid rgba(255,255,255,0.2); }
.nav-menu.mobile > div > ul { border-top: 1px solid rgba(255,255,255,0.2); }

				'."\n";
			}
			// social sidebar background
			if ( get_theme_mod('social-sidebar-background','#ffffff') != '#ffffff' ) {
				$styles .= '
.s2,
.toggle-search,
.toggle-search.active,
.search-expand { background-color: '.esc_attr( get_theme_mod('social-sidebar-background') ).'; }
.toggle-search { border-color: rgba(255,255,255,0.2)!important; }
.toggle-search .svg-icon { fill: #fff; }
.s2 .social-links .social-tooltip { color: rgba(255,255,255,0.8); }
.s2 .social-links .social-tooltip:hover { color: #fff; }
				'."\n";
			}
			// footer background
			if ( get_theme_mod('footer-background','#ffffff') != '#ffffff' ) {
				$styles .= '
#footer-bottom { background-color: '.esc_attr( get_theme_mod('footer-background') ).'; }
#footer-bottom #copyright, 
#footer-bottom #credit { color: rgba(255,255,255,0.6); }
#footer-bottom a { color: rgba(255,255,255,0.8); }
#footer-bottom a:hover { color: #fff; }
#footer-bottom #back-to-top { color: rgba(255,255,255,0.8); border-color: rgba(255,255,255,0.3); }
#footer-bottom #back-to-top:hover { color: #fff; }
#footer-bottom .social-links a { color: rgba(255,255,255,0.8); }
#footer-bottom .social-links a:hover { color: #fff; }
#footer-bottom .social-links .social-tooltip:hover:before { border-color: #fff transparent; }
#footer-bottom .social-links .social-tooltip:hover:after { background: #fff; color: #333; }
				'."\n";
			}
			// header logo max-height
			if ( get_theme_mod('logo-max-height','60') != '60' ) {
				$styles .= '.site-title a img { max-height: '.esc_attr( get_theme_mod('logo-max-height') ).'px; }'."\n";
			}
			// header text color
			if ( get_theme_mod( 'header_textcolor' ) != '' ) {
				$styles .= '.site-title a, .site-description { color: #'.esc_attr( get_theme_mod( 'header_textcolor' ) ).'; }'."\n";
			}
			wp_add_inline_style( 'clearwork-style', $styles );	
		}
	}
	
}
add_action( 'wp_enqueue_scripts', 'clearwork_dynamic_css' );
