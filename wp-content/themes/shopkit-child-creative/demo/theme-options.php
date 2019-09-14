<?php

	function shopkit_creative_general_settings( $custom_settings ) {

	$custom_settings['settings']['logo_image']['std'] = esc_url( preg_replace( '(^https?:)', '', untrailingslashit( get_template_directory_uri() ) . '/demos/logo-creative.png' ) );
	
	$custom_settings['settings']['logo_image_link']['std'] = '';
	
	$custom_settings['settings']['site_title_font']['std'] = array (
	  'font-color' => '',
	  'font-family' => '',
	  'font-size' => '25px',
	  'font-style' => '',
	  'font-variant' => '',
	  'font-weight' => '',
	  'letter-spacing' => '',
	  'line-height' => '25px',
	  'text-decoration' => '',
	  'text-transform' => '',
	);
	
	$custom_settings['settings']['site_description_font']['std'] = array (
	  'font-color' => '',
	  'font-family' => '',
	  'font-size' => '',
	  'font-style' => '',
	  'font-variant' => '',
	  'font-weight' => 'normal',
	  'letter-spacing' => '',
	  'line-height' => '18px',
	  'text-decoration' => '',
	  'text-transform' => '',
	);
	
	$custom_settings['settings']['favorites_icon']['std'] = esc_url( preg_replace( '(^https?:)', '', untrailingslashit( get_template_directory_uri() ) . '/demos/logo-creative.png' ) );
	
	$custom_settings['settings']['favorites_ipad57']['std'] = esc_url( preg_replace( '(^https?:)', '', untrailingslashit( get_template_directory_uri() ) . '/demos/logo-creative.png' ) );
	
	$custom_settings['settings']['favorites_ipad72']['std'] = esc_url( preg_replace( '(^https?:)', '', untrailingslashit( get_template_directory_uri() ) . '/demos/logo-creative.png' ) );
	
	$custom_settings['settings']['favorites_ipad114']['std'] = esc_url( preg_replace( '(^https?:)', '', untrailingslashit( get_template_directory_uri() ) . '/demos/logo-creative.png' ) );
	
	$custom_settings['settings']['favorites_ipad144']['std'] = esc_url( preg_replace( '(^https?:)', '', untrailingslashit( get_template_directory_uri() ) . '/demos/logo-creative.png' ) );
	
	$custom_settings['settings']['seo_publisher']['std'] = '';
	
	$custom_settings['settings']['fb_publisher']['std'] = '';
	
	$custom_settings['settings']['header_elements']['std'] = array (
	  2 => 
	  array (
		'title' => 'Top Bar',
		'select_element' => 'elements-bar',
		'fullwidth' => 'off',
	  ),
	  0 => 
	  array (
		'title' => 'Header',
		'select_element' => 'elements-bar',
		'fullwidth' => 'off',
	  ),
	  1 => 
	  array (
		'title' => 'Extended Menu',
		'select_element' => 'widget-section',
		'fullwidth' => 'off',
	  ),
	);
	
	$custom_settings['settings']['footer_elements']['std'] = array (
	  4 => 
	  array (
		'title' => 'Shop Information',
		'select_element' => 'widget-section',
		'fullwidth' => 'off',
	  ),
	  3 => 
	  array (
		'title' => 'Shop Widgets',
		'select_element' => 'widget-section',
		'fullwidth' => 'off',
	  ),
	  0 => 
	  array (
		'title' => 'Footer',
		'select_element' => 'widget-section',
		'fullwidth' => 'off',
	  ),
	);
	
	$custom_settings['settings']['content_padding']['std'] = '60px 0';
	
	$custom_settings['settings']['content_font']['std'] = array (
	  'font-color' => '#444444',
	  'font-family' => 'ggl-poppins',
	  'font-size' => '14px',
	  'font-style' => '',
	  'font-variant' => '',
	  'font-weight' => '',
	  'letter-spacing' => '',
	  'line-height' => '28px',
	  'text-decoration' => '',
	  'text-transform' => '',
	);
	
	$custom_settings['settings']['content_link']['std'] = '#ffcc44';
	
	$custom_settings['settings']['content_link_hover']['std'] = '#6a4a3c';
	
	$custom_settings['settings']['content_separator']['std'] = '#bbbbbb';
	
	$custom_settings['settings']['content_button_font']['std'] = array (
	  'font-color' => '#ffcc44',
	  'font-family' => '',
	  'font-size' => '14px',
	  'font-style' => '',
	  'font-variant' => '',
	  'font-weight' => '',
	  'letter-spacing' => '',
	  'line-height' => '36px',
	  'text-decoration' => '',
	  'text-transform' => 'uppercase',
	);
	
	$custom_settings['settings']['content_button_hover_font']['std'] = array (
	  'font-color' => '#6a4a3c',
	  'font-family' => '',
	  'font-size' => '14px',
	  'font-style' => '',
	  'font-variant' => '',
	  'font-weight' => '',
	  'letter-spacing' => '',
	  'line-height' => '36px',
	  'text-decoration' => '',
	  'text-transform' => '',
	);
	
	$custom_settings['settings']['content_button_style']['std'] = 'hued';
	
	$custom_settings['settings']['content_background']['std'] = array (
	  'background-color' => '#ffffff',
	  'background-repeat' => '',
	  'background-attachment' => '',
	  'background-position' => '',
	  'background-size' => '',
	  'background-image' => '',
	);
	
	$custom_settings['settings']['content_boxshadow']['std'] = array (
	  'offset-x' => '',
	  'offset-y' => '',
	  'blur-radius' => '',
	  'spread-radius' => '',
	  'color' => '',
	);
	
	$custom_settings['settings']['content_h1_font']['std'] = array (
	  'font-color' => '#222222',
	  'font-family' => '',
	  'font-size' => '36px',
	  'font-style' => '',
	  'font-variant' => '',
	  'font-weight' => '600',
	  'letter-spacing' => '',
	  'line-height' => '42px',
	  'text-decoration' => '',
	  'text-transform' => '',
	);
	
	$custom_settings['settings']['content_h2_font']['std'] = array (
	  'font-color' => '#222222',
	  'font-family' => '',
	  'font-size' => '30px',
	  'font-style' => '',
	  'font-variant' => '',
	  'font-weight' => '600',
	  'letter-spacing' => '',
	  'line-height' => '36px',
	  'text-decoration' => '',
	  'text-transform' => '',
	);
	
	$custom_settings['settings']['content_h3_font']['std'] = array (
	  'font-color' => '#222222',
	  'font-family' => '',
	  'font-size' => '24px',
	  'font-style' => '',
	  'font-variant' => '',
	  'font-weight' => '600',
	  'letter-spacing' => '',
	  'line-height' => '28px',
	  'text-decoration' => '',
	  'text-transform' => '',
	);
	
	$custom_settings['settings']['content_h4_font']['std'] = array (
	  'font-color' => '#222222',
	  'font-family' => '',
	  'font-size' => '18px',
	  'font-style' => '',
	  'font-variant' => '',
	  'font-weight' => '600',
	  'letter-spacing' => '',
	  'line-height' => '28px',
	  'text-decoration' => '',
	  'text-transform' => '',
	);
	
	$custom_settings['settings']['content_h5_font']['std'] = array (
	  'font-color' => '#222222',
	  'font-family' => '',
	  'font-size' => '16px',
	  'font-style' => '',
	  'font-variant' => '',
	  'font-weight' => '600',
	  'letter-spacing' => '',
	  'line-height' => '28px',
	  'text-decoration' => '',
	  'text-transform' => '',
	);
	
	$custom_settings['settings']['content_h6_font']['std'] = array (
	  'font-color' => '#222222',
	  'font-family' => '',
	  'font-size' => '14px',
	  'font-style' => '',
	  'font-variant' => '',
	  'font-weight' => '600',
	  'letter-spacing' => '',
	  'line-height' => '28px',
	  'text-decoration' => '',
	  'text-transform' => '',
	);
	
	$custom_settings['settings']['_wrapper_background']['std'] = array (
	  'background-color' => '',
	  'background-repeat' => '',
	  'background-attachment' => '',
	  'background-position' => '',
	  'background-size' => '',
	  'background-image' => '',
	);
	
	$custom_settings['settings']['_wrapper_boxshadow']['std'] = array (
	  'offset-x' => '',
	  'offset-y' => '',
	  'blur-radius' => '',
	  'spread-radius' => '',
	  'color' => '',
	);
	
	$custom_settings['settings']['_header_background']['std'] = array (
	  'background-color' => '',
	  'background-repeat' => '',
	  'background-attachment' => '',
	  'background-position' => '',
	  'background-size' => '',
	  'background-image' => '',
	);
	
	$custom_settings['settings']['_header_boxshadow']['std'] = array (
	  'offset-x' => '0',
	  'offset-y' => '20px',
	  'blur-radius' => '40px',
	  'spread-radius' => '0',
	  'color' => 'rgba(0,0,0,0.06)',
	);
	
	$custom_settings['settings']['_footer_background']['std'] = array (
	  'background-color' => '',
	  'background-repeat' => '',
	  'background-attachment' => '',
	  'background-position' => '',
	  'background-size' => '',
	  'background-image' => '',
	);
	
	$custom_settings['settings']['_footer_boxshadow']['std'] = array (
	  'offset-x' => '',
	  'offset-y' => '',
	  'blur-radius' => '',
	  'spread-radius' => '',
	  'color' => '',
	);
	
	$custom_settings['settings']['page_title']['std'] = 'content';
	
	$custom_settings['settings']['page_comments']['std'] = 'on';
	
	$custom_settings['settings']['blog_style']['std'] = 'full';
	
	$custom_settings['settings']['post_comments']['std'] = 'on';
	
	$custom_settings['settings']['404_image']['std'] = '';
	
	$custom_settings['settings']['wrapper_padding']['std'] = '';
	
	$custom_settings['settings']['wrapper_mode']['std'] = 'shopkit-central';
	
	$custom_settings['settings']['wrapper_width']['std'] = '4096';
	
	$custom_settings['settings']['inner_wrapper_width']['std'] = '1340';
	
	$custom_settings['settings']['columns_margin']['std'] = '40';
	
	$custom_settings['settings']['rows_margin']['std'] = '40';
	
	$custom_settings['settings']['custom_css']['std'] = '#top_bar_section .shopkit-section-left .shopkit-layout-element:first-child {display:none;}
	.home #top_bar_section .shopkit-section-left .shopkit-layout-element:first-child {display:inline-block;}';
	
	$custom_settings['settings']['responsive_tablet_mode']['std'] = '1024';
	
	$custom_settings['settings']['responsive_tablet_css']['std'] = '';
	
	$custom_settings['settings']['responsive_mobile_mode']['std'] = '840';
	
	$custom_settings['settings']['responsive_mobile_css']['std'] = '';
	
	$custom_settings['settings']['sticky_header']['std'] = 'off';
	
	$custom_settings['settings']['sticky_top']['std'] = '200';
	
	$custom_settings['settings']['sticky_anim']['std'] = '500';
	
	$custom_settings['settings']['sidebar_heading']['std'] = 'h4';
	
	$custom_settings['settings']['left_sidebar_1']['std'] = 'off';
	
	$custom_settings['settings']['left_sidebar_width_1']['std'] = '200';
	
	$custom_settings['settings']['left_sidebar_2']['std'] = 'off';
	
	$custom_settings['settings']['left_sidebar_width_2']['std'] = '200';
	
	$custom_settings['settings']['right_sidebar_1']['std'] = 'on';
	
	$custom_settings['settings']['right_sidebar_width_1']['std'] = '300';
	
	$custom_settings['settings']['right_sidebar_1_visibility']['std'] = array (
	  0 => 'shopkit-responsive-low',
	  1 => 'shopkit-responsive-medium',
	);
	
	$custom_settings['settings']['right_sidebar_2']['std'] = 'off';
	
	$custom_settings['settings']['right_sidebar_width_2']['std'] = '250';
	
	$custom_settings['settings']['sidebars']['std'] = array (
	  0 => 
	  array (
		'title' => 'Single Product Layout',
		'display_condition' => 'is_product||is_cart||is_checkout||is_account_page',
		'left_sidebar_1' => 'off',
		'left_sidebar_width_1' => '200',
		'left_sidebar_2' => 'off',
		'left_sidebar_width_2' => '200',
		'right_sidebar_1' => 'on',
		'right_sidebar_width_1' => '320',
		'right_sidebar_1_visibility' => 
		array (
		  0 => 'shopkit-responsive-low',
		  1 => 'shopkit-responsive-medium',
		),
		'right_sidebar_2' => 'off',
		'right_sidebar_width_2' => '200',
	  ),
	  1 => 
	  array (
		'title' => 'WooCommerce Layout',
		'display_condition' => 'is_woocommerce',
		'left_sidebar_1' => 'on',
		'left_sidebar_width_1' => '320',
		'left_sidebar_2' => 'off',
		'left_sidebar_width_2' => '200',
		'right_sidebar_1' => 'off',
		'right_sidebar_width_1' => '200',
		'right_sidebar_2' => 'off',
		'right_sidebar_width_2' => '200',
	  ),
	);
	
	$custom_settings['settings']['wc_orderby']['std'] = 'shopkit-orderby-bc';
	
	$custom_settings['settings']['wc_product_style']['std'] = 'none';
	
	$custom_settings['settings']['wc_image_effect']['std'] = 'zoom';
	
	$custom_settings['settings']['wc_shop_title']['std'] = 'off';
	
	$custom_settings['settings']['wc_shop_rating']['std'] = 'off';
	
	$custom_settings['settings']['wc_shop_price']['std'] = 'off';
	
	$custom_settings['settings']['wc_shop_desc']['std'] = 'on';
	
	$custom_settings['settings']['wc_shop_add_to_cart']['std'] = 'off';
	
	$custom_settings['settings']['wc_shop_products_margin']['std'] = 'off';
	
	$custom_settings['settings']['wc_image_position']['std'] = 'imageleft';
	
	$custom_settings['settings']['wc_thumbnails_columns']['std'] = '4';
	
	$custom_settings['settings']['wc_single_image_size']['std'] = '2';
	
	$custom_settings['settings']['wc_upsell_columns']['std'] = '4';
	
	$custom_settings['settings']['wc_related_columns']['std'] = '4';
	
	$custom_settings['settings']['wc_product_sidebars']['std'] = 'off';
	
	$custom_settings['settings']['wc_single_rating']['std'] = 'off';
	
	$custom_settings['settings']['wc_single_price']['std'] = 'off';
	
	$custom_settings['settings']['wc_single_desc']['std'] = 'off';
	
	$custom_settings['settings']['wc_single_add_to_cart']['std'] = 'off';
	
	$custom_settings['settings']['wc_single_meta']['std'] = 'off';
	
	$custom_settings['settings']['wc_single_upsells']['std'] = 'off';
	
	$custom_settings['settings']['wc_product_tabs']['std'] = 'off';
	
	$custom_settings['settings']['wc_single_related']['std'] = 'off';
	
		return $custom_settings;
	
	}
	add_filter( 'shopkit_creative_general_settings_args', 'shopkit_creative_general_settings' );
	
	
	function shopkit_creative_section_top_bar_settings( $custom_settings ) {
	
	$custom_settings['settings']['top_bar_elements_align']['std'] = 'shopkit-sections-leftright';
	
	$custom_settings['settings']['top_bar_elements_on_left']['std'] = array (
	  0 => 
	  array (
		'title' => 'Welcome!',
		'select_element' => 'text',
		'text' => 'Welcome to ShopKit!',
		'class' => '',
	  ),
	  1 => 
	  array (
		'title' => 'Breadcrumbs',
		'select_element' => 'breadcrumbs',
		'text' => '',
		'class' => '',
	  ),
	);
	
	$custom_settings['settings']['top_bar_elements_on_right']['std'] = array (
	  0 => 
	  array (
		'title' => 'Login',
		'select_element' => 'login-registration',
		'text' => '',
		'icon' => 'line-icon',
		'height' => 'shopkit-height-18',
		'class' => '',
	  ),
	);
	
	$custom_settings['settings']['top_bar_outer_elements_align']['std'] = 'middle';
	
	$custom_settings['settings']['top_bar_inner_elements_align']['std'] = 'middle';
	
	$custom_settings['settings']['top_bar_padding']['std'] = '5px 0';
	
	$custom_settings['settings']['top_bar_font']['std'] = array (
	  'font-color' => '#444444',
	  'font-family' => '',
	  'font-size' => '12px',
	  'font-style' => '',
	  'font-variant' => '',
	  'font-weight' => '',
	  'letter-spacing' => '',
	  'line-height' => '',
	  'text-decoration' => '',
	  'text-transform' => '',
	);
	
	$custom_settings['settings']['top_bar_link']['std'] = '#222222';
	
	$custom_settings['settings']['top_bar_link_hover']['std'] = '#222222';
	
	$custom_settings['settings']['top_bar_separator']['std'] = '#eeeeee';
	
	$custom_settings['settings']['top_bar_button_font']['std'] = array (
	  'font-color' => '#ffcc44',
	  'font-family' => '',
	  'font-size' => '14px',
	  'font-style' => '',
	  'font-variant' => '',
	  'font-weight' => '',
	  'letter-spacing' => '',
	  'line-height' => '36px',
	  'text-decoration' => '',
	  'text-transform' => '',
	);
	
	$custom_settings['settings']['top_bar_button_hover_font']['std'] = array (
	  'font-color' => '#6a4a3c',
	  'font-family' => '',
	  'font-size' => '14px',
	  'font-style' => '',
	  'font-variant' => '',
	  'font-weight' => '',
	  'letter-spacing' => '',
	  'line-height' => '36px',
	  'text-decoration' => '',
	  'text-transform' => '',
	);
	
	$custom_settings['settings']['top_bar_button_style']['std'] = 'hued';
	
	$custom_settings['settings']['top_bar_background']['std'] = array (
	  'background-color' => '',
	  'background-repeat' => '',
	  'background-attachment' => '',
	  'background-position' => '',
	  'background-size' => '',
	  'background-image' => '',
	);
	
	$custom_settings['settings']['top_bar_boxshadow']['std'] = array (
	  'offset-x' => '',
	  'offset-y' => '',
	  'blur-radius' => '',
	  'spread-radius' => '',
	  'color' => '',
	);
	
	$custom_settings['settings']['top_bar_h1_font']['std'] = array (
	  'font-color' => '#222222',
	  'font-family' => '',
	  'font-size' => '36px',
	  'font-style' => '',
	  'font-variant' => '',
	  'font-weight' => '600',
	  'letter-spacing' => '',
	  'line-height' => '42px',
	  'text-decoration' => '',
	  'text-transform' => '',
	);
	
	$custom_settings['settings']['top_bar_h2_font']['std'] = array (
	  'font-color' => '#222222',
	  'font-family' => '',
	  'font-size' => '30px',
	  'font-style' => '',
	  'font-variant' => '',
	  'font-weight' => '600',
	  'letter-spacing' => '',
	  'line-height' => '36px',
	  'text-decoration' => '',
	  'text-transform' => '',
	);
	
	$custom_settings['settings']['top_bar_h3_font']['std'] = array (
	  'font-color' => '#222222',
	  'font-family' => '',
	  'font-size' => '24px',
	  'font-style' => '',
	  'font-variant' => '',
	  'font-weight' => '600',
	  'letter-spacing' => '',
	  'line-height' => '28px',
	  'text-decoration' => '',
	  'text-transform' => '',
	);
	
	$custom_settings['settings']['top_bar_h4_font']['std'] = array (
	  'font-color' => '#222222',
	  'font-family' => '',
	  'font-size' => '18px',
	  'font-style' => '',
	  'font-variant' => '',
	  'font-weight' => '600',
	  'letter-spacing' => '',
	  'line-height' => '28px',
	  'text-decoration' => '',
	  'text-transform' => '',
	);
	
	$custom_settings['settings']['top_bar_h5_font']['std'] = array (
	  'font-color' => '#222222',
	  'font-family' => '',
	  'font-size' => '16px',
	  'font-style' => '',
	  'font-variant' => '',
	  'font-weight' => '600',
	  'letter-spacing' => '',
	  'line-height' => '28px',
	  'text-decoration' => '',
	  'text-transform' => '',
	);
	
	$custom_settings['settings']['top_bar_h6_font']['std'] = array (
	  'font-color' => '#222222',
	  'font-family' => '',
	  'font-size' => '14px',
	  'font-style' => '',
	  'font-variant' => '',
	  'font-weight' => '600',
	  'letter-spacing' => '',
	  'line-height' => '28px',
	  'text-decoration' => '',
	  'text-transform' => '',
	);
	
	$custom_settings['settings']['top_bar_type']['std'] = 'normal';
	
	$custom_settings['settings']['top_bar_type_height']['std'] = 'shopkit-height-30';
	
	$custom_settings['settings']['top_bar_condition']['std'] = '';
	
	$custom_settings['settings']['top_bar_visibility']['std'] = array (
	  0 => 'shopkit-responsive-low',
	  1 => 'shopkit-responsive-medium',
	);
	
		return $custom_settings;
	
	}
	add_filter( 'shopkit_creative_section_top_bar_args', 'shopkit_creative_section_top_bar_settings' );
	
	
	function shopkit_creative_section_header_settings( $custom_settings ) {
	
	$custom_settings['settings']['header_elements_align']['std'] = 'shopkit-sections-leftright';
	
	$custom_settings['settings']['header_elements_on_left']['std'] = array (
	  1 => 
	  array (
		'title' => 'Extended Menu Trigger',
		'select_element' => 'trigger',
		'text' => '',
		'trigger' => 'extended-menu',
		'class' => '',
	  ),
	  3 => 
	  array (
		'title' => 'Separator',
		'select_element' => 'separator',
		'text' => '',
		'height' => 'shopkit-height-30',
		'class' => '',
	  ),
	  0 => 
	  array (
		'title' => 'Logo',
		'select_element' => 'logo',
		'text' => '',
		'height' => 'shopkit-height-48',
		'class' => '',
		'element_visibility' => 
		array (
		  0 => 'shopkit-responsive-low',
		),
	  ),
	  2 => 
	  array (
		'title' => 'Site Title',
		'select_element' => 'site-title',
		'text' => '',
		'class' => '',
	  ),
	);
	
	$custom_settings['settings']['header_elements_on_right']['std'] = array (
	  1 => 
	  array (
		'title' => 'Search',
		'select_element' => 'woo-search',
		'text' => '',
		'icon' => 'line-icon',
		'height' => 'shopkit-height-48',
		'class' => '',
		'element_visibility' => 
		array (
		  0 => 'shopkit-responsive-low',
		  1 => 'shopkit-responsive-medium',
		),
	  ),
	  2 => 
	  array (
		'title' => 'Separator',
		'select_element' => 'separator',
		'text' => '',
		'height' => 'shopkit-height-36',
		'class' => '',
		'element_visibility' => 
		array (
		  0 => 'shopkit-responsive-low',
		  1 => 'shopkit-responsive-medium',
		),
	  ),
	  0 => 
	  array (
		'title' => 'Cart',
		'select_element' => 'woo-cart',
		'text' => '',
		'woo_cart_icon' => 'line-icon',
		'height' => 'shopkit-height-48',
		'class' => '',
	  ),
	);
	
	$custom_settings['settings']['header_outer_elements_align']['std'] = 'middle';
	
	$custom_settings['settings']['header_inner_elements_align']['std'] = 'middle';
	
	$custom_settings['settings']['header_padding']['std'] = '20px 0';
	
	$custom_settings['settings']['header_font']['std'] = array (
	  'font-color' => '#444444',
	  'font-family' => '',
	  'font-size' => '',
	  'font-style' => '',
	  'font-variant' => '',
	  'font-weight' => '',
	  'letter-spacing' => '',
	  'line-height' => '',
	  'text-decoration' => '',
	  'text-transform' => '',
	);
	
	$custom_settings['settings']['header_link']['std'] = '#ffcc44';
	
	$custom_settings['settings']['header_link_hover']['std'] = '#6a4a3c';
	
	$custom_settings['settings']['header_separator']['std'] = '#eeeeee';
	
	$custom_settings['settings']['header_button_font']['std'] = array (
	  'font-color' => '#ffcc44',
	  'font-family' => '',
	  'font-size' => '14px',
	  'font-style' => '',
	  'font-variant' => '',
	  'font-weight' => '',
	  'letter-spacing' => '',
	  'line-height' => '36px',
	  'text-decoration' => '',
	  'text-transform' => '',
	);
	
	$custom_settings['settings']['header_button_hover_font']['std'] = array (
	  'font-color' => '#6a4a3c',
	  'font-family' => '',
	  'font-size' => '14px',
	  'font-style' => '',
	  'font-variant' => '',
	  'font-weight' => '',
	  'letter-spacing' => '',
	  'line-height' => '36px',
	  'text-decoration' => '',
	  'text-transform' => '',
	);
	
	$custom_settings['settings']['header_button_style']['std'] = 'hued';
	
	$custom_settings['settings']['header_background']['std'] = array (
	  'background-color' => '',
	  'background-repeat' => '',
	  'background-attachment' => '',
	  'background-position' => '',
	  'background-size' => '',
	  'background-image' => '',
	);
	
	$custom_settings['settings']['header_boxshadow']['std'] = array (
	  'inset' => 'inset',
	  'offset-x' => '0',
	  'offset-y' => '-2px',
	  'blur-radius' => '0',
	  'spread-radius' => '0',
	  'color' => '#ffcc44',
	);
	
	$custom_settings['settings']['header_h1_font']['std'] = array (
	  'font-color' => '#222222',
	  'font-family' => '',
	  'font-size' => '36px',
	  'font-style' => '',
	  'font-variant' => '',
	  'font-weight' => '600',
	  'letter-spacing' => '',
	  'line-height' => '42px',
	  'text-decoration' => '',
	  'text-transform' => '',
	);
	
	$custom_settings['settings']['header_h2_font']['std'] = array (
	  'font-color' => '#222222',
	  'font-family' => '',
	  'font-size' => '30px',
	  'font-style' => '',
	  'font-variant' => '',
	  'font-weight' => '600',
	  'letter-spacing' => '',
	  'line-height' => '36px',
	  'text-decoration' => '',
	  'text-transform' => '',
	);
	
	$custom_settings['settings']['header_h3_font']['std'] = array (
	  'font-color' => '#222222',
	  'font-family' => '',
	  'font-size' => '24px',
	  'font-style' => '',
	  'font-variant' => '',
	  'font-weight' => '600',
	  'letter-spacing' => '',
	  'line-height' => '28px',
	  'text-decoration' => '',
	  'text-transform' => '',
	);
	
	$custom_settings['settings']['header_h4_font']['std'] = array (
	  'font-color' => '#222222',
	  'font-family' => '',
	  'font-size' => '18px',
	  'font-style' => '',
	  'font-variant' => '',
	  'font-weight' => '600',
	  'letter-spacing' => '',
	  'line-height' => '28px',
	  'text-decoration' => '',
	  'text-transform' => '',
	);
	
	$custom_settings['settings']['header_h5_font']['std'] = array (
	  'font-color' => '#222222',
	  'font-family' => '',
	  'font-size' => '16px',
	  'font-style' => '',
	  'font-variant' => '',
	  'font-weight' => '600',
	  'letter-spacing' => '',
	  'line-height' => '28px',
	  'text-decoration' => '',
	  'text-transform' => '',
	);
	
	$custom_settings['settings']['header_h6_font']['std'] = array (
	  'font-color' => '#222222',
	  'font-family' => '',
	  'font-size' => '150px',
	  'font-style' => '',
	  'font-variant' => '',
	  'font-weight' => '600',
	  'letter-spacing' => '',
	  'line-height' => '28px',
	  'text-decoration' => '',
	  'text-transform' => '',
	);
	
	$custom_settings['settings']['header_type']['std'] = 'normal';
	
	$custom_settings['settings']['header_type_height']['std'] = 'shopkit-height-30';
	
	$custom_settings['settings']['header_condition']['std'] = '';
	
		return $custom_settings;
	
	}
	add_filter( 'shopkit_creative_section_header_args', 'shopkit_creative_section_header_settings' );
	
	
	function shopkit_creative_section_extended_menu_settings( $custom_settings ) {
	
	$custom_settings['settings']['extended_menu_sidebar_heading']['std'] = 'h4';
	
	$custom_settings['settings']['extended_menu_rows']['std'] = array (
	  0 => 
	  array (
		'title' => 'Extended Menu #1',
		'select_element' => 'widget-1-columns-1',
	  ),
	  1 => 
	  array (
		'title' => 'Extended Menu #2',
		'select_element' => 'widget-3-columns-3',
	  ),
	);
	
	$custom_settings['settings']['extended_menu_padding']['std'] = '50px 0 0';
	
	$custom_settings['settings']['extended_menu_font']['std'] = array (
	  'font-color' => '#333333',
	  'font-family' => '',
	  'font-size' => '',
	  'font-style' => '',
	  'font-variant' => '',
	  'font-weight' => '',
	  'letter-spacing' => '',
	  'line-height' => '',
	  'text-decoration' => '',
	  'text-transform' => '',
	);
	
	$custom_settings['settings']['extended_menu_link']['std'] = '#6a4a3c';
	
	$custom_settings['settings']['extended_menu_link_hover']['std'] = '#222222';
	
	$custom_settings['settings']['extended_menu_separator']['std'] = 'rgba(0,0,0,0.3)';
	
	$custom_settings['settings']['extended_menu_button_font']['std'] = array (
	  'font-color' => '#6a4a3c',
	  'font-family' => '',
	  'font-size' => '14px',
	  'font-style' => '',
	  'font-variant' => '',
	  'font-weight' => '',
	  'letter-spacing' => '',
	  'line-height' => '36px',
	  'text-decoration' => '',
	  'text-transform' => '',
	);
	
	$custom_settings['settings']['extended_menu_button_hover_font']['std'] = array (
	  'font-color' => '#444444',
	  'font-family' => '',
	  'font-size' => '14px',
	  'font-style' => '',
	  'font-variant' => '',
	  'font-weight' => '',
	  'letter-spacing' => '',
	  'line-height' => '36px',
	  'text-decoration' => '',
	  'text-transform' => '',
	);
	
	$custom_settings['settings']['extended_menu_button_style']['std'] = 'hued';
	
	$custom_settings['settings']['extended_menu_background']['std'] = array (
	  'background-color' => '#ffcc44',
	  'background-repeat' => '',
	  'background-attachment' => '',
	  'background-position' => '',
	  'background-size' => '',
	  'background-image' => '',
	);
	
	$custom_settings['settings']['extended_menu_boxshadow']['std'] = array (
	  'offset-x' => '',
	  'offset-y' => '',
	  'blur-radius' => '',
	  'spread-radius' => '',
	  'color' => '',
	);
	
	$custom_settings['settings']['extended_menu_h1_font']['std'] = array (
	  'font-color' => '#222222',
	  'font-family' => '',
	  'font-size' => '36px',
	  'font-style' => '',
	  'font-variant' => '',
	  'font-weight' => '600',
	  'letter-spacing' => '',
	  'line-height' => '42px',
	  'text-decoration' => '',
	  'text-transform' => '',
	);
	
	$custom_settings['settings']['extended_menu_h2_font']['std'] = array (
	  'font-color' => '#222222',
	  'font-family' => '',
	  'font-size' => '30px',
	  'font-style' => '',
	  'font-variant' => '',
	  'font-weight' => '600',
	  'letter-spacing' => '',
	  'line-height' => '36px',
	  'text-decoration' => '',
	  'text-transform' => '',
	);
	
	$custom_settings['settings']['extended_menu_h3_font']['std'] = array (
	  'font-color' => '#222222',
	  'font-family' => '',
	  'font-size' => '20px',
	  'font-style' => '',
	  'font-variant' => '',
	  'font-weight' => '600',
	  'letter-spacing' => '',
	  'line-height' => '28px',
	  'text-decoration' => '',
	  'text-transform' => 'uppercase',
	);
	
	$custom_settings['settings']['extended_menu_h4_font']['std'] = array (
	  'font-color' => '#222222',
	  'font-family' => '',
	  'font-size' => '16px',
	  'font-style' => '',
	  'font-variant' => '',
	  'font-weight' => '600',
	  'letter-spacing' => '',
	  'line-height' => '20px',
	  'text-decoration' => '',
	  'text-transform' => 'uppercase',
	);
	
	$custom_settings['settings']['extended_menu_h5_font']['std'] = array (
	  'font-color' => '#222222',
	  'font-family' => '',
	  'font-size' => '14px',
	  'font-style' => '',
	  'font-variant' => '',
	  'font-weight' => '600',
	  'letter-spacing' => '',
	  'line-height' => '20px',
	  'text-decoration' => '',
	  'text-transform' => 'uppercase',
	);
	
	$custom_settings['settings']['extended_menu_h6_font']['std'] = array (
	  'font-color' => '#222222',
	  'font-family' => '',
	  'font-size' => '12px',
	  'font-style' => '',
	  'font-variant' => '',
	  'font-weight' => '600',
	  'letter-spacing' => '',
	  'line-height' => '20px',
	  'text-decoration' => '',
	  'text-transform' => 'uppercase',
	);
	
	$custom_settings['settings']['extended_menu_margin_override']['std'] = 'off';
	
	$custom_settings['settings']['extended_menu_type']['std'] = 'always-collapsed-with-trigger';
	
	$custom_settings['settings']['extended_menu_type_height']['std'] = 'shopkit-height-30';
	
	$custom_settings['settings']['extended_menu_condition']['std'] = '';
	
		return $custom_settings;
	
	}
	add_filter( 'shopkit_creative_section_extended_menu_args', 'shopkit_creative_section_extended_menu_settings' );
	
	
	function shopkit_creative_section_shop_information_settings( $custom_settings ) {
	
	$custom_settings['settings']['shop_information_sidebar_heading']['std'] = 'h3';
	
	$custom_settings['settings']['shop_information_rows']['std'] = array (
	  0 => 
	  array (
		'title' => 'Shop Information Row',
		'select_element' => 'widget-4-columns-4',
	  ),
	);
	
	$custom_settings['settings']['shop_information_padding']['std'] = '40px 0 0';
	
	$custom_settings['settings']['shop_information_font']['std'] = array (
	  'font-color' => '#bbbbbb',
	  'font-family' => '',
	  'font-size' => '12px',
	  'font-style' => '',
	  'font-variant' => '',
	  'font-weight' => '',
	  'letter-spacing' => '',
	  'line-height' => '18px',
	  'text-decoration' => '',
	  'text-transform' => '',
	);
	
	$custom_settings['settings']['shop_information_link']['std'] = '#ffcc44';
	
	$custom_settings['settings']['shop_information_link_hover']['std'] = '#6a4a3c';
	
	$custom_settings['settings']['shop_information_separator']['std'] = '#eeeeee';
	
	$custom_settings['settings']['shop_information_button_font']['std'] = array (
	  'font-color' => '#ffcc44',
	  'font-family' => '',
	  'font-size' => '14px',
	  'font-style' => '',
	  'font-variant' => '',
	  'font-weight' => '',
	  'letter-spacing' => '',
	  'line-height' => '36px',
	  'text-decoration' => '',
	  'text-transform' => '',
	);
	
	$custom_settings['settings']['shop_information_button_hover_font']['std'] = array (
	  'font-color' => '#6a4a3c',
	  'font-family' => '',
	  'font-size' => '14px',
	  'font-style' => '',
	  'font-variant' => '',
	  'font-weight' => '',
	  'letter-spacing' => '',
	  'line-height' => '36px',
	  'text-decoration' => '',
	  'text-transform' => '',
	);
	
	$custom_settings['settings']['shop_information_button_style']['std'] = 'hued';
	
	$custom_settings['settings']['shop_information_background']['std'] = array (
	  'background-color' => '',
	  'background-repeat' => '',
	  'background-attachment' => '',
	  'background-position' => '',
	  'background-size' => '',
	  'background-image' => '',
	);
	
	$custom_settings['settings']['shop_information_boxshadow']['std'] = array (
	  'offset-x' => '',
	  'offset-y' => '',
	  'blur-radius' => '',
	  'spread-radius' => '',
	  'color' => '',
	);
	
	$custom_settings['settings']['shop_information_h1_font']['std'] = array (
	  'font-color' => '#888888',
	  'font-family' => '',
	  'font-size' => '36px',
	  'font-style' => '',
	  'font-variant' => '',
	  'font-weight' => '600',
	  'letter-spacing' => '',
	  'line-height' => '42px',
	  'text-decoration' => '',
	  'text-transform' => '',
	);
	
	$custom_settings['settings']['shop_information_h2_font']['std'] = array (
	  'font-color' => '#888888',
	  'font-family' => '',
	  'font-size' => '32px',
	  'font-style' => '',
	  'font-variant' => '',
	  'font-weight' => '600',
	  'letter-spacing' => '',
	  'line-height' => '36px',
	  'text-decoration' => '',
	  'text-transform' => '',
	);
	
	$custom_settings['settings']['shop_information_h3_font']['std'] = array (
	  'font-color' => '#888888',
	  'font-family' => '',
	  'font-size' => '24px',
	  'font-style' => '',
	  'font-variant' => '',
	  'font-weight' => '600',
	  'letter-spacing' => '',
	  'line-height' => '28px',
	  'text-decoration' => '',
	  'text-transform' => '',
	);
	
	$custom_settings['settings']['shop_information_h4_font']['std'] = array (
	  'font-color' => '#888888',
	  'font-family' => '',
	  'font-size' => '16px',
	  'font-style' => '',
	  'font-variant' => '',
	  'font-weight' => '600',
	  'letter-spacing' => '',
	  'line-height' => '20px',
	  'text-decoration' => '',
	  'text-transform' => '',
	);
	
	$custom_settings['settings']['shop_information_h5_font']['std'] = array (
	  'font-color' => '#888888',
	  'font-family' => '',
	  'font-size' => '14px',
	  'font-style' => '',
	  'font-variant' => '',
	  'font-weight' => '600',
	  'letter-spacing' => '',
	  'line-height' => '20px',
	  'text-decoration' => '',
	  'text-transform' => '',
	);
	
	$custom_settings['settings']['shop_information_h6_font']['std'] = array (
	  'font-color' => '#888888',
	  'font-family' => '',
	  'font-size' => '12px',
	  'font-style' => '',
	  'font-variant' => '',
	  'font-weight' => '600',
	  'letter-spacing' => '',
	  'line-height' => '20px',
	  'text-decoration' => '',
	  'text-transform' => '',
	);
	
	$custom_settings['settings']['shop_information_margin_override']['std'] = 'off';
	
	$custom_settings['settings']['shop_information_type']['std'] = 'normal';
	
	$custom_settings['settings']['shop_information_type_height']['std'] = 'shopkit-height-30';
	
	$custom_settings['settings']['shop_information_condition']['std'] = 'is_woocommerce';
	
		return $custom_settings;
	
	}
	add_filter( 'shopkit_creative_section_shop_information_args', 'shopkit_creative_section_shop_information_settings' );
	
	
	function shopkit_creative_section_shop_widgets_settings( $custom_settings ) {
	
	$custom_settings['settings']['shop_widgets_sidebar_heading']['std'] = 'h4';
	
	$custom_settings['settings']['shop_widgets_rows']['std'] = array (
	  0 => 
	  array (
		'title' => 'Product Widgets',
		'select_element' => 'widget-4-columns-4',
	  ),
	);
	
	$custom_settings['settings']['shop_widgets_padding']['std'] = '40px 0 0';
	
	$custom_settings['settings']['shop_widgets_font']['std'] = array (
	  'font-color' => '#eeeeee',
	  'font-family' => '',
	  'font-size' => '',
	  'font-style' => '',
	  'font-variant' => '',
	  'font-weight' => '',
	  'letter-spacing' => '',
	  'line-height' => '',
	  'text-decoration' => '',
	  'text-transform' => '',
	);
	
	$custom_settings['settings']['shop_widgets_link']['std'] = '#aaaaaa';
	
	$custom_settings['settings']['shop_widgets_link_hover']['std'] = '#ffffff';
	
	$custom_settings['settings']['shop_widgets_separator']['std'] = '#777777';
	
	$custom_settings['settings']['shop_widgets_button_font']['std'] = array (
	  'font-color' => '#ffcc44',
	  'font-family' => '',
	  'font-size' => '14px',
	  'font-style' => '',
	  'font-variant' => '',
	  'font-weight' => '',
	  'letter-spacing' => '',
	  'line-height' => '36px',
	  'text-decoration' => '',
	  'text-transform' => '',
	);
	
	$custom_settings['settings']['shop_widgets_button_hover_font']['std'] = array (
	  'font-color' => '#6a4a3c',
	  'font-family' => '',
	  'font-size' => '14px',
	  'font-style' => '',
	  'font-variant' => '',
	  'font-weight' => '',
	  'letter-spacing' => '',
	  'line-height' => '36px',
	  'text-decoration' => '',
	  'text-transform' => '',
	);
	
	$custom_settings['settings']['shop_widgets_button_style']['std'] = 'hued';
	
	$custom_settings['settings']['shop_widgets_background']['std'] = array (
	  'background-color' => '#444444',
	  'background-repeat' => '',
	  'background-attachment' => '',
	  'background-position' => '',
	  'background-size' => '',
	  'background-image' => '',
	);
	
	$custom_settings['settings']['shop_widgets_boxshadow']['std'] = array (
	  'inset' => 'inset',
	  'offset-x' => '0',
	  'offset-y' => '-20px',
	  'blur-radius' => '40px',
	  'spread-radius' => '0',
	  'color' => 'rgba(0,0,0,0.1)',
	);
	
	$custom_settings['settings']['shop_widgets_h1_font']['std'] = array (
	  'font-color' => '#ffcc44',
	  'font-family' => '',
	  'font-size' => '36px',
	  'font-style' => '',
	  'font-variant' => '',
	  'font-weight' => '600',
	  'letter-spacing' => '',
	  'line-height' => '42px',
	  'text-decoration' => '',
	  'text-transform' => '',
	);
	
	$custom_settings['settings']['shop_widgets_h2_font']['std'] = array (
	  'font-color' => '#ffcc44',
	  'font-family' => '',
	  'font-size' => '30px',
	  'font-style' => '',
	  'font-variant' => '',
	  'font-weight' => '600',
	  'letter-spacing' => '',
	  'line-height' => '36px',
	  'text-decoration' => '',
	  'text-transform' => '',
	);
	
	$custom_settings['settings']['shop_widgets_h3_font']['std'] = array (
	  'font-color' => '#ffcc44',
	  'font-family' => '',
	  'font-size' => '24px',
	  'font-style' => '',
	  'font-variant' => '',
	  'font-weight' => '600',
	  'letter-spacing' => '',
	  'line-height' => '28px',
	  'text-decoration' => '',
	  'text-transform' => '',
	);
	
	$custom_settings['settings']['shop_widgets_h4_font']['std'] = array (
	  'font-color' => '#ffcc44',
	  'font-family' => '',
	  'font-size' => '14px',
	  'font-style' => '',
	  'font-variant' => '',
	  'font-weight' => '600',
	  'letter-spacing' => '',
	  'line-height' => '28px',
	  'text-decoration' => '',
	  'text-transform' => 'uppercase',
	);
	
	$custom_settings['settings']['shop_widgets_h5_font']['std'] = array (
	  'font-color' => '#ffcc44',
	  'font-family' => '',
	  'font-size' => '13px',
	  'font-style' => '',
	  'font-variant' => '',
	  'font-weight' => '600',
	  'letter-spacing' => '',
	  'line-height' => '28px',
	  'text-decoration' => '',
	  'text-transform' => '',
	);
	
	$custom_settings['settings']['shop_widgets_h6_font']['std'] = array (
	  'font-color' => '#ffcc44',
	  'font-family' => '',
	  'font-size' => '12px',
	  'font-style' => '',
	  'font-variant' => '',
	  'font-weight' => '600',
	  'letter-spacing' => '',
	  'line-height' => '28px',
	  'text-decoration' => '',
	  'text-transform' => '',
	);
	
	$custom_settings['settings']['shop_widgets_margin_override']['std'] = 'off';

	$custom_settings['settings']['shop_widgets_type']['std'] = 'normal';
	
	$custom_settings['settings']['shop_widgets_type_height']['std'] = 'shopkit-height-30';
	
	$custom_settings['settings']['shop_widgets_condition']['std'] = 'is_woocommerce';
	
		return $custom_settings;
	
	}
	add_filter( 'shopkit_creative_section_shop_widgets_args', 'shopkit_creative_section_shop_widgets_settings' );
	
	
	function shopkit_creative_section_footer_settings( $custom_settings ) {
	
	$custom_settings['settings']['footer_sidebar_heading']['std'] = 'h4';
	
	$custom_settings['settings']['footer_rows']['std'] = array (
	  1 => 
	  array (
		'title' => 'Footer #1',
		'select_element' => 'widget-4-columns-4',
	  ),
	  0 => 
	  array (
		'title' => 'Footer #2',
		'select_element' => 'widget-7-columns-3',
	  ),
	);
	
	$custom_settings['settings']['footer_padding']['std'] = '10px 0 30px';
	
	$custom_settings['settings']['footer_font']['std'] = array (
	  'font-color' => '#999999',
	  'font-family' => '',
	  'font-size' => '',
	  'font-style' => '',
	  'font-variant' => '',
	  'font-weight' => '',
	  'letter-spacing' => '',
	  'line-height' => '',
	  'text-decoration' => '',
	  'text-transform' => '',
	);
	
	$custom_settings['settings']['footer_link']['std'] = '#ffcc44';
	
	$custom_settings['settings']['footer_link_hover']['std'] = '#ffffff';
	
	$custom_settings['settings']['footer_separator']['std'] = 'rgba(255,255,255,0.66)';
	
	$custom_settings['settings']['footer_button_font']['std'] = array (
	  'font-color' => '#ffcc44',
	  'font-family' => '',
	  'font-size' => '14px',
	  'font-style' => '',
	  'font-variant' => '',
	  'font-weight' => '',
	  'letter-spacing' => '',
	  'line-height' => '36px',
	  'text-decoration' => '',
	  'text-transform' => '',
	);
	
	$custom_settings['settings']['footer_button_hover_font']['std'] = array (
	  'font-color' => '#6a4a3c',
	  'font-family' => '',
	  'font-size' => '14px',
	  'font-style' => '',
	  'font-variant' => '',
	  'font-weight' => '',
	  'letter-spacing' => '',
	  'line-height' => '36px',
	  'text-decoration' => '',
	  'text-transform' => '',
	);
	
	$custom_settings['settings']['footer_button_style']['std'] = 'hued';
	
	$custom_settings['settings']['footer_background']['std'] = array (
	  'background-color' => '#111111',
	  'background-repeat' => '',
	  'background-attachment' => '',
	  'background-position' => '',
	  'background-size' => '',
	  'background-image' => '',
	);
	
	$custom_settings['settings']['footer_boxshadow']['std'] = array (
	  'offset-x' => '',
	  'offset-y' => '',
	  'blur-radius' => '',
	  'spread-radius' => '',
	  'color' => '',
	);
	
	$custom_settings['settings']['footer_h1_font']['std'] = array (
	  'font-color' => '#aaaaaa',
	  'font-family' => '',
	  'font-size' => '36px',
	  'font-style' => '',
	  'font-variant' => '',
	  'font-weight' => '600',
	  'letter-spacing' => '',
	  'line-height' => '42px',
	  'text-decoration' => '',
	  'text-transform' => '',
	);
	
	$custom_settings['settings']['footer_h2_font']['std'] = array (
	  'font-color' => '#aaaaaa',
	  'font-family' => '',
	  'font-size' => '30px',
	  'font-style' => '',
	  'font-variant' => '',
	  'font-weight' => '600',
	  'letter-spacing' => '',
	  'line-height' => '36px',
	  'text-decoration' => '',
	  'text-transform' => '',
	);
	
	$custom_settings['settings']['footer_h3_font']['std'] = array (
	  'font-color' => '#aaaaaa',
	  'font-family' => '',
	  'font-size' => '24px',
	  'font-style' => '',
	  'font-variant' => '',
	  'font-weight' => '600',
	  'letter-spacing' => '',
	  'line-height' => '28px',
	  'text-decoration' => '',
	  'text-transform' => '',
	);
	
	$custom_settings['settings']['footer_h4_font']['std'] = array (
	  'font-color' => '#aaaaaa',
	  'font-family' => '',
	  'font-size' => '18px',
	  'font-style' => '',
	  'font-variant' => '',
	  'font-weight' => '600',
	  'letter-spacing' => '',
	  'line-height' => '28px',
	  'text-decoration' => '',
	  'text-transform' => '',
	);
	
	$custom_settings['settings']['footer_h5_font']['std'] = array (
	  'font-color' => '#aaaaaa',
	  'font-family' => '',
	  'font-size' => '16px',
	  'font-style' => '',
	  'font-variant' => '',
	  'font-weight' => '600',
	  'letter-spacing' => '',
	  'line-height' => '28px',
	  'text-decoration' => '',
	  'text-transform' => '',
	);
	
	$custom_settings['settings']['footer_h6_font']['std'] = array (
	  'font-color' => '#aaaaaa',
	  'font-family' => '',
	  'font-size' => '14px',
	  'font-style' => '',
	  'font-variant' => '',
	  'font-weight' => 'inherit',
	  'letter-spacing' => '',
	  'line-height' => '28px',
	  'text-decoration' => '',
	  'text-transform' => '',
	);
	
	$custom_settings['settings']['footer_margin_override']['std'] = 'off';
	
	$custom_settings['settings']['footer_type']['std'] = 'collapsed-with-icon';
	
	$custom_settings['settings']['footer_type_height']['std'] = 'shopkit-height-30';
	
	$custom_settings['settings']['footer_condition']['std'] = '';
	
		return $custom_settings;
	
	}
	add_filter( 'shopkit_creative_section_footer_args', 'shopkit_creative_section_footer_settings' );
	