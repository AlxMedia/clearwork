<?php
if ( ! class_exists( 'Kirki' ) ) {
	return;
}

/*  Add Config
/* ------------------------------------ */
Kirki::add_config( 'clearwork', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );

/*  Add Links
/* ------------------------------------ */
Kirki::add_section( 'morelink', array(
	'title'       => esc_html__( 'AlxMedia', 'clearwork' ),
	'type'        => 'link',
	'button_text' => esc_html__( 'View More Themes', 'clearwork' ),
	'button_url'  => 'http://alx.media/themes/',
	'priority'    => 13,
) );
Kirki::add_section( 'reviewlink', array(
	'title'       => esc_html__( 'Like This Theme?', 'clearwork' ),
	'panel'       => 'options',
	'type'        => 'link',
	'button_text' => esc_html__( 'Write a Review', 'clearwork' ),
	'button_url'  => 'https://wordpress.org/support/theme/clearwork/reviews/#new-post',
	'priority'    => 1,
) );

/*  Add Panels
/* ------------------------------------ */
Kirki::add_panel( 'options', array(
    'priority'    => 10,
    'title'       => esc_html__( 'Theme Options', 'clearwork' ),
) );

/*  Add Sections
/* ------------------------------------ */
Kirki::add_section( 'general', array(
    'priority'    => 10,
    'title'       => esc_html__( 'General', 'clearwork' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'blog', array(
    'priority'    => 20,
    'title'       => esc_html__( 'Blog', 'clearwork' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'header', array(
    'priority'    => 30,
    'title'       => esc_html__( 'Header', 'clearwork' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'footer', array(
    'priority'    => 40,
    'title'       => esc_html__( 'Footer', 'clearwork' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'layout', array(
    'priority'    => 50,
    'title'       => esc_html__( 'Layout', 'clearwork' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'sidebars', array(
    'priority'    => 60,
    'title'       => esc_html__( 'Sidebars', 'clearwork' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'social', array(
    'priority'    => 70,
    'title'       => esc_html__( 'Social Links', 'clearwork' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'styling', array(
    'priority'    => 80,
    'title'       => esc_html__( 'Styling', 'clearwork' ),
	'panel'       => 'options',
) );

/*  Add Fields
/* ------------------------------------ */

// General: Mobile Sidebar
Kirki::add_field( 'clearwork_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'mobile-sidebar-hide',
	'label'			=> esc_html__( 'Mobile Sidebar Content', 'clearwork' ),
	'description'	=> esc_html__( 'Sidebar content on low-resolution mobile devices (320px)', 'clearwork' ),
	'section'		=> 'general',
	'default'		=> 'on',
) );
// General: Recommended Plugins
Kirki::add_field( 'clearwork_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'recommended-plugins',
	'label'			=> esc_html__( 'Recommended Plugins', 'clearwork' ),
	'description'	=> esc_html__( 'Enable or disable the recommended plugins notice', 'clearwork' ),
	'section'		=> 'general',
	'default'		=> 'on',
) );
// Blog: Enable Blog Heading
Kirki::add_field( 'clearwork_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'heading-enable',
	'label'			=> esc_html__( 'Enable Blog Heading', 'clearwork' ),
	'description'	=> esc_html__( 'Show heading on blog home', 'clearwork' ),
	'section'		=> 'blog',
	'default'		=> 'off',
) );
// Blog: Heading
Kirki::add_field( 'clearwork_theme', array(
	'type'			=> 'text',
	'settings'		=> 'blog-heading',
	'label'			=> esc_html__( 'Heading', 'clearwork' ),
	'description'	=> esc_html__( 'Your blog heading', 'clearwork' ),
	'section'		=> 'blog',
	'default'		=> '',
) );
// Blog: Subheading
Kirki::add_field( 'clearwork_theme', array(
	'type'			=> 'text',
	'settings'		=> 'blog-subheading',
	'label'			=> esc_html__( 'Subheading', 'clearwork' ),
	'description'	=> esc_html__( 'Your blog subheading', 'clearwork' ),
	'section'		=> 'blog',
	'default'		=> '',
) );
// Blog: Frontpage Widgets Top
Kirki::add_field( 'clearwork_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'frontpage-widgets-top',
	'label'			=> esc_html__( 'Frontpage Widgets Top', 'clearwork' ),
	'description'	=> esc_html__( '2 columns of widgets', 'clearwork' ),
	'section'		=> 'blog',
	'default'		=> 'off',
) );
// Blog: Frontpage Widgets Bottom
Kirki::add_field( 'clearwork_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'frontpage-widgets-bottom',
	'label'			=> esc_html__( 'Frontpage Widgets Bottom', 'clearwork' ),
	'description'	=> esc_html__( '2 columns of widgets', 'clearwork' ),
	'section'		=> 'blog',
	'default'		=> 'off',
) );
// Blog: Excerpt Length
Kirki::add_field( 'clearwork_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'excerpt-length',
	'label'			=> esc_html__( 'Item Excerpt Length', 'clearwork' ),
	'description'	=> esc_html__( 'Max number of words. Set it to 0 to disable.', 'clearwork' ),
	'section'		=> 'blog',
	'default'		=> '0',
	'choices'     => array(
		'min'	=> '0',
		'max'	=> '100',
		'step'	=> '1',
	),
) );
// Blog: Comment Count
Kirki::add_field( 'clearwork_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'comment-count',
	'label'			=> esc_html__( 'Item Comment Count', 'clearwork' ),
	'description'	=> esc_html__( 'Comment count with bubbles', 'clearwork' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Titles
Kirki::add_field( 'clearwork_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'item-titles',
	'label'			=> esc_html__( 'Item Titles', 'clearwork' ),
	'description'	=> esc_html__( 'Show titles on items', 'clearwork' ),
	'section'		=> 'blog',
	'default'		=> 'off',
) );
// Blog: Category
Kirki::add_field( 'clearwork_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'item-category',
	'label'			=> esc_html__( 'Item Categories', 'clearwork' ),
	'description'	=> esc_html__( 'Show categories below each item', 'clearwork' ),
	'section'		=> 'blog',
	'default'		=> 'off',
) );
// Blog: Single - Authorbox
Kirki::add_field( 'clearwork_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'author-bio',
	'label'			=> esc_html__( 'Single - Author Bio', 'clearwork' ),
	'description'	=> esc_html__( 'Shows post author description, if it exists', 'clearwork' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Single - Related Posts
Kirki::add_field( 'clearwork_theme', array(
	'type'			=> 'radio',
	'settings'		=> 'related-posts',
	'label'			=> esc_html__( 'Single - Related Posts', 'clearwork' ),
	'description'	=> esc_html__( 'Shows randomized related articles below the post', 'clearwork' ),
	'section'		=> 'blog',
	'default'		=> 'categories',
	'choices'		=> array(
		'disable'	=> esc_html__( 'Disable', 'clearwork' ),
		'categories'=> esc_html__( 'Related by categories', 'clearwork' ),
		'tags'		=> esc_html__( 'Related by tags', 'clearwork' ),
	),
) );
// Blog: Single - Post Navigation
Kirki::add_field( 'clearwork_theme', array(
	'type'			=> 'radio',
	'settings'		=> 'post-nav',
	'label'			=> esc_html__( 'Single - Post Navigation', 'clearwork' ),
	'description'	=> esc_html__( 'Shows links to the next and previous article', 'clearwork' ),
	'section'		=> 'blog',
	'default'		=> 'content',
	'choices'		=> array(
		'disable'	=> esc_html__( 'Disable', 'clearwork' ),
		'content'	=> esc_html__( 'Below content', 'clearwork' ),
	),
) );
// Header: Search
Kirki::add_field( 'clearwork_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'header-search',
	'label'			=> esc_html__( 'Header Search', 'clearwork' ),
	'description'	=> esc_html__( 'Header search button', 'clearwork' ),
	'section'		=> 'header',
	'default'		=> 'on',
) );
// Header: Social Links
Kirki::add_field( 'clearwork_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'header-social',
	'label'			=> esc_html__( 'Header Social Links', 'clearwork' ),
	'description'	=> esc_html__( 'Social link icon buttons', 'clearwork' ),
	'section'		=> 'header',
	'default'		=> 'on',
) );
// Header: Profile Avatar
Kirki::add_field( 'clearwork_theme', array(
	'type'			=> 'image',
	'settings'		=> 'profile-image',
	'label'			=> esc_html__( 'Profile Image', 'clearwork' ),
	'description'	=> esc_html__( 'Minimum width of 220px', 'clearwork' ),
	'section'		=> 'header',
	'default'		=> '',
) );
// Header: Profile Name
Kirki::add_field( 'clearwork_theme', array(
	'type'			=> 'text',
	'settings'		=> 'profile-name',
	'label'			=> esc_html__( 'Profile Name', 'clearwork' ),
	'description'	=> esc_html__( 'Your name appears below the image', 'clearwork' ),
	'section'		=> 'header',
	'default'		=> '',
) );
// Header: Profile Description
Kirki::add_field( 'clearwork_theme', array(
	'type'			=> 'textarea',
	'settings'		=> 'profile-description',
	'label'			=> esc_html__( 'Profile Description', 'clearwork' ),
	'description'	=> esc_html__( 'A short description of you', 'clearwork' ),
	'section'		=> 'header',
	'default'		=> '',
) );
// Footer: Ads
Kirki::add_field( 'clearwork_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'footer-ads',
	'label'			=> esc_html__( 'Footer Ads', 'clearwork' ),
	'description'	=> esc_html__( 'Footer widget ads area', 'clearwork' ),
	'section'		=> 'footer',
	'default'		=> 'off',
) );
// Footer: Widget Columns
Kirki::add_field( 'clearwork_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'footer-widgets',
	'label'			=> esc_html__( 'Footer Widget Columns', 'clearwork' ),
	'description'	=> esc_html__( 'Select columns to enable footer widgets. Recommended number: 3', 'clearwork' ),
	'section'		=> 'footer',
	'default'		=> '0',
	'choices'     => array(
		'0'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'1'	=> get_template_directory_uri() . '/functions/images/footer-widgets-1.png',
		'2'	=> get_template_directory_uri() . '/functions/images/footer-widgets-2.png',
		'3'	=> get_template_directory_uri() . '/functions/images/footer-widgets-3.png',
		'4'	=> get_template_directory_uri() . '/functions/images/footer-widgets-4.png',
	),
) );
// Footer: Social Links
Kirki::add_field( 'clearwork_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'footer-social',
	'label'			=> esc_html__( 'Footer Social Links', 'clearwork' ),
	'description'	=> esc_html__( 'Social link icon buttons', 'clearwork' ),
	'section'		=> 'footer',
	'default'		=> 'on',
) );
// Footer: Custom Logo
Kirki::add_field( 'clearwork_theme', array(
	'type'			=> 'image',
	'settings'		=> 'footer-logo',
	'label'			=> esc_html__( 'Footer Logo', 'clearwork' ),
	'description'	=> esc_html__( 'Upload your custom logo image', 'clearwork' ),
	'section'		=> 'footer',
	'default'		=> '',
) );
// Footer: Copyright
Kirki::add_field( 'clearwork_theme', array(
	'type'			=> 'text',
	'settings'		=> 'copyright',
	'label'			=> esc_html__( 'Footer Copyright', 'clearwork' ),
	'description'	=> esc_html__( 'Replace the footer copyright text', 'clearwork' ),
	'section'		=> 'footer',
	'default'		=> '',
) );
// Footer: Credit
Kirki::add_field( 'clearwork_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'credit',
	'label'			=> esc_html__( 'Footer Credit', 'clearwork' ),
	'description'	=> esc_html__( 'Footer credit text', 'clearwork' ),
	'section'		=> 'footer',
	'default'		=> 'on',
) );
// Layout: Global
Kirki::add_field( 'clearwork_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-global',
	'label'			=> esc_html__( 'Global Layout', 'clearwork' ),
	'description'	=> esc_html__( 'Other layouts will override this option if they are set', 'clearwork' ),
	'section'		=> 'layout',
	'default'		=> 'col-2cl',
	'choices'     => array(
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Home
Kirki::add_field( 'clearwork_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-home',
	'label'			=> esc_html__( 'Home', 'clearwork' ),
	'description'	=> esc_html__( '(is_home) Posts homepage layout', 'clearwork' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Single
Kirki::add_field( 'clearwork_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-single',
	'label'			=> esc_html__( 'Single', 'clearwork' ),
	'description'	=> esc_html__( '(is_single) Single post layout - If a post has a set layout, it will override this.', 'clearwork' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Archive
Kirki::add_field( 'clearwork_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-archive',
	'label'			=> esc_html__( 'Archive', 'clearwork' ),
	'description'	=> esc_html__( '(is_archive) Category, date, tag and author archive layout', 'clearwork' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout : Archive - Category
Kirki::add_field( 'clearwork_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-archive-category',
	'label'			=> esc_html__( 'Archive - Category', 'clearwork' ),
	'description'	=> esc_html__( '(is_category) Category archive layout', 'clearwork' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Search
Kirki::add_field( 'clearwork_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-search',
	'label'			=> esc_html__( 'Search', 'clearwork' ),
	'description'	=> esc_html__( '(is_search) Search page layout', 'clearwork' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Error 404
Kirki::add_field( 'clearwork_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-404',
	'label'			=> esc_html__( 'Error 404', 'clearwork' ),
	'description'	=> esc_html__( '(is_404) Error 404 page layout', 'clearwork' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );
// Layout: Default Page
Kirki::add_field( 'clearwork_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-page',
	'label'			=> esc_html__( 'Default Page', 'clearwork' ),
	'description'	=> esc_html__( '(is_page) Default page layout - If a page has a set layout, it will override this.', 'clearwork' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
	),
) );


function clearwork_kirki_sidebars_select() { 
 	$sidebars = array(); 
 	if ( isset( $GLOBALS['wp_registered_sidebars'] ) ) { 
 		$sidebars = $GLOBALS['wp_registered_sidebars']; 
 	} 
 	$sidebars_choices = array(); 
 	foreach ( $sidebars as $sidebar ) { 
 		$sidebars_choices[ $sidebar['id'] ] = $sidebar['name']; 
 	} 
 	if ( ! class_exists( 'Kirki' ) ) { 
 		return; 
 	}
	// Sidebars: Select
	Kirki::add_field( 'clearwork_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-home',
		'label'			=> esc_html__( 'Home', 'clearwork' ),
		'description'	=> esc_html__( '(is_home) Primary', 'clearwork' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'clearwork' ),
	) );
	Kirki::add_field( 'clearwork_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-single',
		'label'			=> esc_html__( 'Single', 'clearwork' ),
		'description'	=> esc_html__( '(is_single) Primary - If a single post has a unique sidebar, it will override this.', 'clearwork' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'clearwork' ),
	) );
	Kirki::add_field( 'clearwork_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-archive',
		'label'			=> esc_html__( 'Archive', 'clearwork' ),
		'description'	=> esc_html__( '(is_archive) Primary', 'clearwork' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'clearwork' ),
	) );
	Kirki::add_field( 'clearwork_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-archive-category',
		'label'			=> esc_html__( 'Archive - Category', 'clearwork' ),
		'description'	=> esc_html__( '(is_category) Primary', 'clearwork' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'clearwork' ),
	) );
	Kirki::add_field( 'clearwork_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-search',
		'label'			=> esc_html__( 'Search', 'clearwork' ),
		'description'	=> esc_html__( '(is_search) Primary', 'clearwork' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'clearwork' ),
	) );
	Kirki::add_field( 'clearwork_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-404',
		'label'			=> esc_html__( 'Error 404', 'clearwork' ),
		'description'	=> esc_html__( '(is_404) Primary', 'clearwork' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'clearwork' ),
	) );
	Kirki::add_field( 'clearwork_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-page',
		'label'			=> esc_html__( 'Default Page', 'clearwork' ),
		'description'	=> esc_html__( '(is_page) Primary - If a page has a unique sidebar, it will override this.', 'clearwork' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'clearwork' ),
	) );
	
 } 
add_action( 'init', 'clearwork_kirki_sidebars_select', 999 ); 

// Social Links: List
Kirki::add_field( 'clearwork_theme', array(
	'type'			=> 'repeater',
	'label'			=> esc_html__( 'Create Social Links', 'clearwork' ),
	'description'	=> esc_html__( 'Create and organize your social links', 'clearwork' ),
	'section'		=> 'social',
	'tooltip'		=> esc_html__( 'Font Awesome names:', 'clearwork' ) . ' <a href="https://fontawesome.com/v5/search?s=brands" target="_blank"><strong>' . esc_html__( 'View All', 'clearwork' ) . ' </strong></a>',
	'row_label'		=> array(
		'type'	=> 'text',
		'value'	=> esc_html__('social link', 'clearwork' ),
	),
	'settings'		=> 'social-links',
	'default'		=> '',
	'fields'		=> array(
		'social-title'	=> array(
			'type'			=> 'text',
			'label'			=> esc_html__( 'Title', 'clearwork' ),
			'description'	=> esc_html__( 'Ex: Facebook', 'clearwork' ),
			'default'		=> '',
		),
		'social-icon'	=> array(
			'type'			=> 'text',
			'label'			=> esc_html__( 'Icon Name', 'clearwork' ),
			'description'	=> esc_html__( 'Font Awesome icons. Ex: fa-facebook ', 'clearwork' ) . ' <a href="https://fontawesome.com/v5/search?s=brands" target="_blank"><strong>' . esc_html__( 'View All', 'clearwork' ) . ' </strong></a>',
			'default'		=> 'fa-',
		),
		'social-link'	=> array(
			'type'			=> 'link',
			'label'			=> esc_html__( 'Link', 'clearwork' ),
			'description'	=> esc_html__( 'Enter the full url for your icon button', 'clearwork' ),
			'default'		=> 'http://',
		),
		'social-color'	=> array(
			'type'			=> 'color',
			'label'			=> esc_html__( 'Icon Color', 'clearwork' ),
			'description'	=> esc_html__( 'Set a unique color for your icon (optional)', 'clearwork' ),
			'default'		=> '',
		),
		'social-target'	=> array(
			'type'			=> 'checkbox',
			'label'			=> esc_html__( 'Open in new window', 'clearwork' ),
			'default'		=> false,
		),
	)
) );
// Styling: Enable
Kirki::add_field( 'clearwork_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'dynamic-styles',
	'label'			=> esc_html__( 'Dynamic Styles', 'clearwork' ),
	'description'	=> esc_html__( 'Turn on to use the styling options below', 'clearwork' ),
	'section'		=> 'styling',
	'default'		=> 'on',
) );
// Styling: Font
Kirki::add_field( 'clearwork_theme', array(
	'type'			=> 'select',
	'settings'		=> 'font',
	'label'			=> esc_html__( 'Font', 'clearwork' ),
	'description'	=> esc_html__( 'Select font for the theme', 'clearwork' ),
	'section'		=> 'styling',
	'default'		=> 'playfair-display',
	'choices'     => array(
		'titillium-web'			=> esc_html__( 'Titillium Web, Latin (Self-hosted)', 'clearwork' ),
		'titillium-web-ext'		=> esc_html__( 'Titillium Web, Latin-Ext', 'clearwork' ),
		'droid-serif'			=> esc_html__( 'Droid Serif, Latin', 'clearwork' ),
		'source-sans-pro'		=> esc_html__( 'Source Sans Pro, Latin-Ext', 'clearwork' ),
		'lato'					=> esc_html__( 'Lato, Latin', 'clearwork' ),
		'raleway'				=> esc_html__( 'Raleway, Latin', 'clearwork' ),
		'ubuntu'				=> esc_html__( 'Ubuntu, Latin-Ext', 'clearwork' ),
		'ubuntu-cyr'			=> esc_html__( 'Ubuntu, Latin / Cyrillic-Ext', 'clearwork' ),
		'roboto'				=> esc_html__( 'Roboto, Latin-Ext', 'clearwork' ),
		'roboto-cyr'			=> esc_html__( 'Roboto, Latin / Cyrillic-Ext', 'clearwork' ),
		'roboto-condensed'		=> esc_html__( 'Roboto Condensed, Latin-Ext', 'clearwork' ),
		'roboto-condensed-cyr'	=> esc_html__( 'Roboto Condensed, Latin / Cyrillic-Ext', 'clearwork' ),
		'roboto-slab'			=> esc_html__( 'Roboto Slab, Latin-Ext', 'clearwork' ),
		'roboto-slab-cyr'		=> esc_html__( 'Roboto Slab, Latin / Cyrillic-Ext', 'clearwork' ),
		'playfair-display'		=> esc_html__( 'Playfair Display, Latin-Ext', 'clearwork' ),
		'playfair-display-cyr'	=> esc_html__( 'Playfair Display, Latin / Cyrillic', 'clearwork' ),
		'open-sans'				=> esc_html__( 'Open Sans, Latin-Ext', 'clearwork' ),
		'open-sans-cyr'			=> esc_html__( 'Open Sans, Latin / Cyrillic-Ext', 'clearwork' ),
		'pt-serif'				=> esc_html__( 'PT Serif, Latin-Ext', 'clearwork' ),
		'pt-serif-cyr'			=> esc_html__( 'PT Serif, Latin / Cyrillic-Ext', 'clearwork' ),
		'arial'					=> esc_html__( 'Arial', 'clearwork' ),
		'georgia'				=> esc_html__( 'Georgia', 'clearwork' ),
		'verdana'				=> esc_html__( 'Verdana', 'clearwork' ),
		'tahoma'				=> esc_html__( 'Tahoma', 'clearwork' ),
	),
) );
// Styling: Header Logo Max-height
Kirki::add_field( 'clearwork_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'logo-max-height',
	'label'			=> esc_html__( 'Header Logo Image Max-height', 'clearwork' ),
	'description'	=> esc_html__( 'Your logo image should have the double height of this to be high resolution', 'clearwork' ),
	'section'		=> 'styling',
	'default'		=> '60',
	'choices'     => array(
		'min'	=> '40',
		'max'	=> '200',
		'step'	=> '1',
	),
) );
// Styling: Container Width
Kirki::add_field( 'clearwork_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'container-width',
	'label'			=> esc_html__( 'Website Max-width', 'clearwork' ),
	'description'	=> esc_html__( 'Max-width of the container. Set to default for full width.', 'clearwork' ),
	'section'		=> 'styling',
	'default'		=> '1200',
	'choices'     => array(
		'min'	=> '1024',
		'max'	=> '1920',
		'step'	=> '1',
	),
) );
// Styling: Post Format Width
Kirki::add_field( 'clearwork_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'post-format-width',
	'label'			=> esc_html__( 'Post Format Max-width', 'clearwork' ),
	'description'	=> esc_html__( 'Max-width of the post formats, shown at the top of articles', 'clearwork' ),
	'section'		=> 'styling',
	'default'		=> '940',
	'choices'     => array(
		'min'	=> '500',
		'max'	=> '1920',
		'step'	=> '1',
	),
) );
// Styling: Content Max-width
Kirki::add_field( 'clearwork_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'content-width',
	'label'			=> esc_html__( 'Content Max-width', 'clearwork' ),
	'description'	=> esc_html__( 'Max-width of the website content', 'clearwork' ),
	'section'		=> 'styling',
	'default'		=> '640',
	'choices'     => array(
		'min'	=> '500',
		'max'	=> '1920',
		'step'	=> '1',
	),
) );
// Styling: Logo Background
Kirki::add_field( 'clearwork_theme', array(
	'type'			=> 'color',
	'settings'		=> 'logo-background',
	'label'			=> esc_html__( 'Logo Background', 'clearwork' ),
	'section'		=> 'styling',
	'default'		=> '#ffffff',
) );
// Styling: Header Background
Kirki::add_field( 'clearwork_theme', array(
	'type'			=> 'color',
	'settings'		=> 'header-background',
	'label'			=> esc_html__( 'Header Background', 'clearwork' ),
	'section'		=> 'styling',
	'default'		=> '#ffffff',
) );
// Styling: Social Sidebar Background
Kirki::add_field( 'clearwork_theme', array(
	'type'			=> 'color',
	'settings'		=> 'social-sidebar-background',
	'label'			=> esc_html__( 'Social Sidebar Background', 'clearwork' ),
	'section'		=> 'styling',
	'default'		=> '#ffffff',
) );
// Styling: Footer Background
Kirki::add_field( 'clearwork_theme', array(
	'type'			=> 'color',
	'settings'		=> 'footer-background',
	'label'			=> esc_html__( 'Footer Background', 'clearwork' ),
	'section'		=> 'styling',
	'default'		=> '#ffffff',
) );