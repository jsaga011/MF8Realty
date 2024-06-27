<?php
/**
 * Real Estate Management Theme Customizer
 *
 * @link: https://developer.wordpress.org/themes/customize-api/customizer-objects/
 *
 * @package Real Estate Management
 */

if ( ! defined( 'REAL_ESTATE_MANAGEMENT_URL' ) ) {
    define( 'REAL_ESTATE_MANAGEMENT_URL', esc_url( 'https://www.themagnifico.net/themes/property-management-wordpress-theme/', 'real-estate-management') );
}
if ( ! defined( 'REAL_ESTATE_MANAGEMENT_TEXT' ) ) {
    define( 'REAL_ESTATE_MANAGEMENT_TEXT', __( 'Real Estate Pro','real-estate-management' ));
}


if ( ! defined( 'REAL_ESTATE_MANAGEMENT_BUY_TEXT' ) ) {
    define( 'REAL_ESTATE_MANAGEMENT_BUY_TEXT', __( 'Buy Real Estate Pro','real-estate-management' ));
}

use WPTRT\Customize\Section\Real_Estate_Management_Button;

add_action( 'customize_register', function( $manager ) {

    $manager->register_section_type( Real_Estate_Management_Button::class );

    $manager->add_section(
        new Real_Estate_Management_Button( $manager, 'real_estate_management_pro', [
            'title'       => esc_html( REAL_ESTATE_MANAGEMENT_TEXT, 'real-estate-management' ),
            'priority'    => 0,
            'button_text' => __( 'GET PREMIUM', 'real-estate-management' ),
            'button_url'  => esc_url( REAL_ESTATE_MANAGEMENT_URL)
        ] )
    );

} );

// Load the JS and CSS.
add_action( 'customize_controls_enqueue_scripts', function() {

    $version = wp_get_theme()->get( 'Version' );

    wp_enqueue_script(
        'real-estate-management-customize-section-button',
        get_theme_file_uri( 'vendor/wptrt/customize-section-button/public/js/customize-controls.js' ),
        [ 'customize-controls' ],
        $version,
        true
    );

    wp_enqueue_style(
        'real-estate-management-customize-section-button',
        get_theme_file_uri( 'vendor/wptrt/customize-section-button/public/css/customize-controls.css' ),
        [ 'customize-controls' ],
        $version
    );

} );

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function real_estate_management_customize_register($wp_customize){

     // Pro Version
    class Real_Estate_Management_Customize_Pro_Version extends WP_Customize_Control {
        public $type = 'pro_options';

        public function render_content() {
            echo '<span>For More <strong>'. esc_html( $this->label ) .'</strong>?</span>';
            echo '<a href="'. esc_url($this->description) .'" target="_blank">';
                echo '<span class="dashicons dashicons-info"></span>';
                echo '<strong> '. esc_html( REAL_ESTATE_MANAGEMENT_BUY_TEXT,'real-estate-management' ) .'<strong></a>';
            echo '</a>';
        }
    }

    // Custom Controls
    function Real_Estate_Management_sanitize_custom_control( $input ) {
        return $input;
    }

    $wp_customize->get_setting('blogname')->transport = 'postMessage';
    $wp_customize->get_setting('blogdescription')->transport = 'postMessage';

    $wp_customize->add_setting('real_estate_management_logo_title_text', array(
        'default' => true,
        'sanitize_callback' => 'real_estate_management_sanitize_checkbox'
    ));
    
    //Logo
    $wp_customize->add_setting('real_estate_management_logo_max_height',array(
        'default'   => '',
        'sanitize_callback' => 'real_estate_management_sanitize_number_absint'
    ));
    $wp_customize->add_control('real_estate_management_logo_max_height',array(
        'label' => esc_html__('Logo Width','real-estate-management'),
        'section'   => 'title_tagline',
        'type'      => 'number'
    ));

    $wp_customize->add_control( new WP_Customize_Control($wp_customize,'real_estate_management_logo_title_text',array(
        'label'          => __( 'Enable Disable Title', 'real-estate-management' ),
        'section'        => 'title_tagline',
        'settings'       => 'real_estate_management_logo_title_text',
        'type'           => 'checkbox',
    )));

    $wp_customize->add_setting('real_estate_management_theme_description', array(
        'default' => false,
        'sanitize_callback' => 'real_estate_management_sanitize_checkbox'
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize,'real_estate_management_theme_description',array(
        'label'          => __( 'Enable Disable Tagline', 'real-estate-management' ),
        'section'        => 'title_tagline',
        'settings'       => 'real_estate_management_theme_description',
        'type'           => 'checkbox',
    )));


    //Header
    $wp_customize->add_section('real_estate_management_header',array(
        'title' => esc_html__('Header Option','real-estate-management')
    ));

    $wp_customize->add_setting('real_estate_management_email_text',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('real_estate_management_email_text',array(
        'label' => esc_html__('Email Text','real-estate-management'),
        'section' => 'real_estate_management_header',
        'setting' => 'real_estate_management_email_text',
        'type'  => 'text'
    ));

    $wp_customize->add_setting('real_estate_management_email',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_email'
    ));
    $wp_customize->add_control('real_estate_management_email',array(
        'label' => esc_html__('Email','real-estate-management'),
        'section' => 'real_estate_management_header',
        'setting' => 'real_estate_management_email',
        'type'  => 'text'
    ));

    $wp_customize->add_setting('real_estate_management_topbar_btn_text',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('real_estate_management_topbar_btn_text',array(
        'label' => esc_html__('Button Text','real-estate-management'),
        'section' => 'real_estate_management_header',
        'setting' => 'real_estate_management_topbar_btn_text',
        'type'  => 'text'
    ));

    $wp_customize->add_setting('real_estate_management_topbar_btn_url',array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    $wp_customize->add_control('real_estate_management_topbar_btn_url',array(
        'label' => esc_html__('Button URL','real-estate-management'),
        'section' => 'real_estate_management_header',
        'setting' => 'real_estate_management_topbar_btn_url',
        'type'  => 'text'
    ));

    // Pro Version
    $wp_customize->add_setting( 'pro_version_header_setting', array(
        'sanitize_callback' => 'Real_Estate_Management_sanitize_custom_control'
    ));
    $wp_customize->add_control( new Real_Estate_Management_Customize_Pro_Version ( $wp_customize,'pro_version_header_setting', array(
                'section'     => 'real_estate_management_header',
                'type'        => 'pro_options',
                'label'       => esc_html__( 'Customizer Options', 'real-estate-management' ),
                'description' => esc_url( REAL_ESTATE_MANAGEMENT_URL ),
                'priority'    => 100
    )));

    // General Settings
     $wp_customize->add_section('real_estate_management_general_settings',array(
        'title' => esc_html__('General Settings','real-estate-management'),
        'priority'   => 1,
    ));

    $wp_customize->add_setting('real_estate_management_preloader_hide', array(
        'default' => 0,
        'sanitize_callback' => 'real_estate_management_sanitize_checkbox'
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize,'real_estate_management_preloader_hide',array(
        'label'          => __( 'Show Theme Preloader', 'real-estate-management' ),
        'section'        => 'real_estate_management_general_settings',
        'settings'       => 'real_estate_management_preloader_hide',
        'type'           => 'checkbox',
    )));

    $wp_customize->add_setting( 'real_estate_management_preloader_bg_color', array(
        'default' => '#fff',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'real_estate_management_preloader_bg_color', array(
        'label' => esc_html__('Preloader Background Color','real-estate-management'),
        'section' => 'real_estate_management_general_settings',
        'settings' => 'real_estate_management_preloader_bg_color'
    )));

    $wp_customize->add_setting( 'real_estate_management_preloader_dot_1_color', array(
        'default' => '#fff',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'real_estate_management_preloader_dot_1_color', array(
        'label' => esc_html__('Preloader First Dot Color','real-estate-management'),
        'section' => 'real_estate_management_general_settings',
        'settings' => 'real_estate_management_preloader_dot_1_color'
    )));

    $wp_customize->add_setting( 'real_estate_management_preloader_dot_2_color', array(
        'default' => '#ff6f2f',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'real_estate_management_preloader_dot_2_color', array(
        'label' => esc_html__('Preloader Second Dot Color','real-estate-management'),
        'section' => 'real_estate_management_general_settings',
        'settings' => 'real_estate_management_preloader_dot_2_color'
    )));

    $wp_customize->add_setting('real_estate_management_sticky_header', array(
        'default' => false,
        'sanitize_callback' => 'real_estate_management_sanitize_checkbox'
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize,'real_estate_management_sticky_header',array(
        'label'          => __( 'Show Sticky Header', 'real-estate-management' ),
        'section'        => 'real_estate_management_general_settings',
        'settings'       => 'real_estate_management_sticky_header',
        'type'           => 'checkbox',
    )));

    $wp_customize->add_setting('real_estate_management_scroll_hide', array(
        'default' => false,
        'sanitize_callback' => 'real_estate_management_sanitize_checkbox'
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize,'real_estate_management_scroll_hide',array(
        'label'          => __( 'Show Theme Scroll To Top', 'real-estate-management' ),
        'section'        => 'real_estate_management_general_settings',
        'settings'       => 'real_estate_management_scroll_hide',
        'type'           => 'checkbox',
    )));

    // Pro Version
    $wp_customize->add_setting( 'pro_version_general_setting', array(
        'sanitize_callback' => 'Real_Estate_Management_sanitize_custom_control'
    ));
    $wp_customize->add_control( new Real_Estate_Management_Customize_Pro_Version ( $wp_customize,'pro_version_general_setting', array(
                'section'     => 'real_estate_management_general_settings',
                'type'        => 'pro_options',
                'label'       => esc_html__( 'Customizer Options', 'real-estate-management' ),
                'description' => esc_url( REAL_ESTATE_MANAGEMENT_URL ),
                'priority'    => 100
    )));

    //Slider
    $wp_customize->add_section('real_estate_management_top_slider',array(
        'title' => esc_html__('Slider Option','real-estate-management')
    ));

    for ( $count = 1; $count <= 3; $count++ ) {
        $wp_customize->add_setting( 'real_estate_management_top_slider_page' . $count, array(
            'default'           => '',
            'sanitize_callback' => 'real_estate_management_sanitize_dropdown_pages'
        ) );
        $wp_customize->add_control( 'real_estate_management_top_slider_page' . $count, array(
            'label'    => __( 'Select Slide Page', 'real-estate-management' ),
            'section'  => 'real_estate_management_top_slider',
            'type'     => 'dropdown-pages'
        ) );
    }

    $wp_customize->add_setting('real_estate_management_phone_text',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('real_estate_management_phone_text',array(
        'label' => esc_html__('Phone Text','real-estate-management'),
        'section' => 'real_estate_management_top_slider',
        'setting' => 'real_estate_management_phone_text',
        'type'  => 'text'
    ));

    $wp_customize->add_setting('real_estate_management_phone',array(
        'default' => '',
        'sanitize_callback' => 'real_estate_management_sanitize_phone_number'
    ));
    $wp_customize->add_control('real_estate_management_phone',array(
        'label' => esc_html__('Phone Number','real-estate-management'),
        'section' => 'real_estate_management_top_slider',
        'setting' => 'real_estate_management_phone',
        'type'  => 'text'
    ));

    // Pro Version
    $wp_customize->add_setting( 'pro_version_slider_setting', array(
        'sanitize_callback' => 'Real_Estate_Management_sanitize_custom_control'
    ));
    $wp_customize->add_control( new Real_Estate_Management_Customize_Pro_Version ( $wp_customize,'pro_version_slider_setting', array(
                'section'     => 'real_estate_management_top_slider',
                'type'        => 'pro_options',
                'label'       => esc_html__( 'Customizer Options', 'real-estate-management' ),
                'description' => esc_url( REAL_ESTATE_MANAGEMENT_URL ),
                'priority'    => 100
    )));

    //Latest Property
    $wp_customize->add_section('real_estate_management_new_project',array(
        'title' => esc_html__('Latest Properties','real-estate-management'),
        'description' => esc_html__('Here you have to select properties which will display perticular latest properties in the home page.','real-estate-management')
    ));

    $wp_customize->add_setting('real_estate_management_projects_short_title',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('real_estate_management_projects_short_title',array(
        'label' => esc_html__('Short Title','real-estate-management'),
        'section' => 'real_estate_management_new_project',
        'setting' => 'real_estate_management_projects_short_title',
        'type'  => 'text'
    ));

    $wp_customize->add_setting('real_estate_management_projects_title',array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('real_estate_management_projects_title',array(
        'label' => esc_html__('Title','real-estate-management'),
        'section' => 'real_estate_management_new_project',
        'setting' => 'real_estate_management_projects_title',
        'type'  => 'text'
    ));

    $categories = get_categories();
    $cat_post = array();
    $cat_post[]= 'select';
    $i = 0;
    foreach($categories as $category){
        if($i==0){
            $default = $category->slug;
            $i++;
        }
        $cat_post[$category->slug] = $category->name;
    }

    $wp_customize->add_setting('real_estate_management_projects_category',array(
        'default'   => 'select',
        'sanitize_callback' => 'real_estate_management_sanitize_select',
    ));
    $wp_customize->add_control('real_estate_management_projects_category',array(
        'type'    => 'select',
        'choices' => $cat_post,
        'label' => __('Select category to display latest properties','real-estate-management'),
        'section' => 'real_estate_management_new_project',
    ));

    // Pro Version
    $wp_customize->add_setting( 'pro_version_projects_setting', array(
        'sanitize_callback' => 'Real_Estate_Management_sanitize_custom_control'
    ));
    $wp_customize->add_control( new Real_Estate_Management_Customize_Pro_Version ( $wp_customize,'pro_version_projects_setting', array(
                'section'     => 'real_estate_management_new_project',
                'type'        => 'pro_options',
                'label'       => esc_html__( 'Customizer Options', 'real-estate-management' ),
                'description' => esc_url( REAL_ESTATE_MANAGEMENT_URL ),
                'priority'    => 100
    )));

    // Footer
    $wp_customize->add_section('real_estate_management_site_footer_section', array(
        'title' => esc_html__('Footer', 'real-estate-management'),
    ));

    $wp_customize->add_setting('real_estate_management_footer_text_setting', array(
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('real_estate_management_footer_text_setting', array(
        'label' => __('Replace the footer text', 'real-estate-management'),
        'section' => 'real_estate_management_site_footer_section',
        'priority' => 1,
        'type' => 'text',
    ));

     // Pro Version
    $wp_customize->add_setting( 'pro_version_footer_setting', array(
        'sanitize_callback' => 'Real_Estate_Management_sanitize_custom_control'
    ));
    $wp_customize->add_control( new Real_Estate_Management_Customize_Pro_Version ( $wp_customize,'pro_version_footer_setting', array(
                'section'     => 'real_estate_management_site_footer_section',
                'type'        => 'pro_options',
                'label'       => esc_html__( 'Customizer Options', 'real-estate-management' ),
                'description' => esc_url( REAL_ESTATE_MANAGEMENT_URL ),
                'priority'    => 100
    )));
}
add_action('customize_register', 'real_estate_management_customize_register');

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function real_estate_management_customize_partial_blogname(){
    bloginfo('name');
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function real_estate_management_customize_partial_blogdescription(){
    bloginfo('description');
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function real_estate_management_customize_preview_js(){
    wp_enqueue_script('real-estate-management-customizer', esc_url(get_template_directory_uri()) . '/assets/js/customizer.js', array('customize-preview'), '20151215', true);
}
add_action('customize_preview_init', 'real_estate_management_customize_preview_js');

/*
** Load dynamic logic for the customizer controls area.
*/
function real_estate_management_panels_js() {
    wp_enqueue_style( 'real-estate-management-customizer-layout-css', get_theme_file_uri( '/assets/css/customizer-layout.css' ) );
    wp_enqueue_script( 'real-estate-management-customize-layout', get_theme_file_uri( '/assets/js/customize-layout.js' ), array(), '1.2', true );
}
add_action( 'customize_controls_enqueue_scripts', 'real_estate_management_panels_js' );


