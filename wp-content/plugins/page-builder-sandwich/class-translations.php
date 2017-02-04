<?php
/**
 * We put all translations here.
 *
 * @package Page Builder Sandwich
 */

if ( ! defined( 'ABSPATH' ) ) { exit; // Exit if accessed directly.
}

if ( ! class_exists( 'PBSTranslations' ) ) {

	/**
	 * This is where all the strings are inputted.
	 */
	class PBSTranslations {

		/**
		 * Hook into the frontend.
		 */
		function __construct() {
			add_filter( 'pbs_localize_scripts', array( $this, 'add_labels' ) );
			add_filter( 'pbs_error_notice_localize_scripts', array( $this, 'add_error_labels' ) );
		}

		/**
		 * Add our translatable text.
		 *
		 * @since 2.13
		 *
		 * @param array $args Localization array.
		 *
		 * @return array The modified localization array.
		 */
		public function add_labels( $args ) {

			$args['labels'] = array(

				// Used in _element-html.js.
				'html_frame_button' => __( 'Save HTML', PAGE_BUILDER_SANDWICH ),

				// Used in _element-icon.js.
				'icon_frame_change_title' => __( 'Change Icon', PAGE_BUILDER_SANDWICH ),
				'icon_frame_change_button' => __( 'Change Icon', PAGE_BUILDER_SANDWICH ),

				// Used in _element-newsletter.js.
				'newsletter_default_button' => __( 'Subscribe', PAGE_BUILDER_SANDWICH ),

				// Used in _get-premium.js.
				'get_the_premium_plugin' => __( 'Get the Premium Plugin to get more tools and features', PAGE_BUILDER_SANDWICH ),

				// Used in _inspector-newsletter.js.
				'newsletter' => __( 'Newsletter', PAGE_BUILDER_SANDWICH ),
				'show_button_when_typed_on' => __( 'Show Button When Typed On', PAGE_BUILDER_SANDWICH ),
				'error_message_color' => __( 'Error Message Color', PAGE_BUILDER_SANDWICH ),
				'success_message_color' => __( 'Success Message Color', PAGE_BUILDER_SANDWICH ),
				'success_message' => __( 'Success Message', PAGE_BUILDER_SANDWICH ),
				'thank_you_for_subscribing' => __( 'Thank you for subscribing!', PAGE_BUILDER_SANDWICH ),
				'newsletter_service' => __( 'Newsletter Service', PAGE_BUILDER_SANDWICH ),
				'newsletter_settings' => __( 'Newsletter Settings', PAGE_BUILDER_SANDWICH ),
				'mailchimp_api_key' => __( 'MailChimp API Key', PAGE_BUILDER_SANDWICH ),
				'get_mailchimp_api_key' => __( 'Get your MailChimp API Key', PAGE_BUILDER_SANDWICH ),
				'mailchimp_list_key' => __( 'MailChimp List Key', PAGE_BUILDER_SANDWICH ),
				'get_mailchimp_list_key' => __( 'Get your MailChimp List Key', PAGE_BUILDER_SANDWICH ),
				'aweber_list_id' => __( 'AWeber List ID', PAGE_BUILDER_SANDWICH ),
				'get_aweber_list_id' => __( 'Get your AWeber List ID', PAGE_BUILDER_SANDWICH ),
				'mailpoet_list' => __( 'MailPoet List', PAGE_BUILDER_SANDWICH ),

				// Used in _inspector-options.js.
				'widget_properties_title' => __( '%s Widget Properties', PAGE_BUILDER_SANDWICH ),

				// Used in _inspector-sidebar.js.
				'sidebar_inspector_desc' => __( 'Add a sidebar or widget area', PAGE_BUILDER_SANDWICH ),
				'select_a_sidebar' => __( 'Select a Sidebar', PAGE_BUILDER_SANDWICH ),

				// Used in _inspector-widgets.js.
				'widget_inspector_desc' => __( 'Add a WordPress widget', PAGE_BUILDER_SANDWICH ),

				// Used in _inspector.js.
				'shortcodes_not_attributes_detected' => __( 'No attributes or content detected', PAGE_BUILDER_SANDWICH ),
				'no_attributes_available' => __( 'No attributes available.', PAGE_BUILDER_SANDWICH ),
				'inspector_title' => __( '%s Properties', PAGE_BUILDER_SANDWICH ),
				'note_options_are_detected' => __( 'Options are detected from usage of this shortcode', PAGE_BUILDER_SANDWICH ),
				'note_shortcode_not_appearing' => __( "Note: If the element doesn't show up, you may need to refresh the page.", PAGE_BUILDER_SANDWICH ),

				// Used in _pbs-intro.js.
				// TODO continue adding this.
				// 'tour_intro_title' => __( "Hello! I See You're New to Page Builder Sandwich", PAGE_BUILDER_SANDWICH ),
				// 'tour_intro_body' => __( 'This quick tour will teach you how to get started. Click the <strong>Edit button</strong> above to start editing this page.', PAGE_BUILDER_SANDWICH ),
				// 'tour_content_area_title' => __( 'Your Content Area', PAGE_BUILDER_SANDWICH ),
				// 'tour_content_area_body' => __( 'In Page Builder Sandwich, everything is simple. This is your content area, and you can start typing right away to start building your site.<br><br><em>Go ahead and type the word "<strong>Sandwich</strong>" to proceed.</em>', PAGE_BUILDER_SANDWICH ),
				// 'tour_inspector_title' => __( 'This Is the Inspector', PAGE_BUILDER_SANDWICH ),
				// 'tour_inspector_body' => __( "This panel area contains all the styling tools that you'll ever need. Each icon is a button that you can click to apply styles on the item you have currently selected.<br><br>Hover your mouse over each tool to get a description of what they do. Some even have shortcut keys that you can perform to quickly apply them.<br><br><em>Go hover your mouse over the text formatting buttons on the top part to proceed.</em>", PAGE_BUILDER_SANDWICH ),
				// 'tour_done_title' => __( "That's It!", PAGE_BUILDER_SANDWICH ),
				// 'tour_done_body' => __( "Finally, when you're done editing, click on this save button to finalize your changes.", PAGE_BUILDER_SANDWICH ),
				// Used in _pbs-stats-tracking.js.
				'optin_error' => __( 'Communication error, please refresh the page and try again', PAGE_BUILDER_SANDWICH ),

				// Inspector labels.
				'properties_inspector' => __( 'Properties Inspector', PAGE_BUILDER_SANDWICH ),
				'general' => __( 'General', PAGE_BUILDER_SANDWICH ),
				'input_field' => __( 'Input Field', PAGE_BUILDER_SANDWICH ),
				'edit_link' => sprintf( __( 'Edit %s', PAGE_BUILDER_SANDWICH ), __( 'Link', PAGE_BUILDER_SANDWICH ) ),
				'button_padding' => __( 'Button Padding', PAGE_BUILDER_SANDWICH ),
				'desc_button_padding' => __( 'Use this to make your button larger.', PAGE_BUILDER_SANDWICH ),
				'pick_an_icon' => __( 'Pick an icon', PAGE_BUILDER_SANDWICH ),
				'button_color' => __( 'Button Color', PAGE_BUILDER_SANDWICH ),
				'button_text_color' => __( 'Button Text Color', PAGE_BUILDER_SANDWICH ),
				'vertical_padding' => __( 'Vertical Padding', PAGE_BUILDER_SANDWICH ),
				'horizontal_padding' => __( 'Horizontal Padding', PAGE_BUILDER_SANDWICH ),
				'ghost_button_style' => __( 'Ghost Button Style', PAGE_BUILDER_SANDWICH ),
				'desc_ghost_button' => __( 'Turn your button into a ghost button. Ghost buttons are outlined buttons that blend into your design.', PAGE_BUILDER_SANDWICH ),
				'choose_button_icon' => __( 'Choose Button Icon', PAGE_BUILDER_SANDWICH ),
				'button_icon' => __( 'Button Icon', PAGE_BUILDER_SANDWICH ),
				'use_icon' => __( 'Use Icon', PAGE_BUILDER_SANDWICH ),
				'icon_color' => __( 'Icon Color', PAGE_BUILDER_SANDWICH ),
				'move' => __( 'Move', PAGE_BUILDER_SANDWICH ),
				'move_carousel' => sprintf( __( 'Move %s', PAGE_BUILDER_SANDWICH ), __( 'Carousel', PAGE_BUILDER_SANDWICH ) ),
				'move_left' => __( 'Move Left', PAGE_BUILDER_SANDWICH ),
				'move_right' => __( 'Move Right', PAGE_BUILDER_SANDWICH ),
				'default' => __( 'Default', PAGE_BUILDER_SANDWICH ),
				'inside_left' => __( 'Inside Left', PAGE_BUILDER_SANDWICH ),
				'inside_center' => __( 'Inside Center', PAGE_BUILDER_SANDWICH ),
				'inside_right' => __( 'Inside Right', PAGE_BUILDER_SANDWICH ),
				'icon_size' => __( 'Icon Size', PAGE_BUILDER_SANDWICH ),
				'full_height' => __( 'Full Height', PAGE_BUILDER_SANDWICH ),
				'full_width' => __( 'Full-Width', PAGE_BUILDER_SANDWICH ),
				'normal_width' => __( 'Normal Width', PAGE_BUILDER_SANDWICH ),
				'full_height' => __( 'Full-Height', PAGE_BUILDER_SANDWICH ),
				'automatic_height' => __( 'Automatic Height', PAGE_BUILDER_SANDWICH ),
				'move_slide_left' => __( 'Move Slide Left', PAGE_BUILDER_SANDWICH ),
				'slides' => __( 'Slides', PAGE_BUILDER_SANDWICH ),
				'move_slide_right' => __( 'Move Slide Right', PAGE_BUILDER_SANDWICH ),
				'remove_slide' => sprintf( __( 'Remove %s', PAGE_BUILDER_SANDWICH ), __( 'Slide', PAGE_BUILDER_SANDWICH ) ),
				'add_slide' => sprintf( __( 'Add %s', PAGE_BUILDER_SANDWICH ), __( 'Slide', PAGE_BUILDER_SANDWICH ) ),
				'clone_slide' => sprintf( __( 'Clone %s', PAGE_BUILDER_SANDWICH ), __( 'Slide', PAGE_BUILDER_SANDWICH ) ),
				'bullet' => __( 'Bullet', PAGE_BUILDER_SANDWICH ),
				'bullet_color' => __( 'Bullet Color', PAGE_BUILDER_SANDWICH ),
				'bullets' => __( 'Bullets', PAGE_BUILDER_SANDWICH ),
				'bullet_location' => __( 'Bullet Location', PAGE_BUILDER_SANDWICH ),
				'slide_delay' => __( 'Slide Delay', PAGE_BUILDER_SANDWICH ),
				'embedded_url' => __( 'Embedded URL', PAGE_BUILDER_SANDWICH ),
				'delete' => __( 'Delete', PAGE_BUILDER_SANDWICH ),
				'delete_carousel' => sprintf( __( 'Delete %s', PAGE_BUILDER_SANDWICH ), __( 'Carousel', PAGE_BUILDER_SANDWICH ) ),
				'row_width' => __( 'Row Width', PAGE_BUILDER_SANDWICH ),
				'desc_row_width' => __( 'Let your row occupy the whole browser width. This only affects the outer-most row.', PAGE_BUILDER_SANDWICH ),
				'full_width_retained_content_width' => __( 'Full-Width Retained Content Width', PAGE_BUILDER_SANDWICH ),
				'normal' => __( 'Normal', PAGE_BUILDER_SANDWICH ),
				'fixed_background' => __( 'Fixed Background', PAGE_BUILDER_SANDWICH ),
				'background_color' => __( 'Background Color', PAGE_BUILDER_SANDWICH ),
				'background_color_focused' => __( 'Background Color (When Focused)', PAGE_BUILDER_SANDWICH ),
				'desc_icon_tooltip' => __( 'Place something in this field to show a tooltip when the mouse is hovered on the icon.', PAGE_BUILDER_SANDWICH ),
				'background' => __( 'Background', PAGE_BUILDER_SANDWICH ),
				'desc_background_tint' => __( 'Add color to your background image. Use the color picker above to change the tint.', PAGE_BUILDER_SANDWICH ),
				'background_size' => __( 'Background Size', PAGE_BUILDER_SANDWICH ),
				'desc_background_size' => __( 'Background image size in pixels. Can be used to make your background a pattern. Use 0 (or blank) to make the background cover the whole area.', PAGE_BUILDER_SANDWICH ),
				'image' => __( 'Image', PAGE_BUILDER_SANDWICH ),
				'background_image' => __( 'Background Image', PAGE_BUILDER_SANDWICH ),
				'vertical_column_alignment' => __( 'Vertical Column Alignment', PAGE_BUILDER_SANDWICH ),
				'desc_vertical_column_alignment' => __( 'The alignment of the column vertically. Helpful if the row is tall because of other columns, and this column is short.', PAGE_BUILDER_SANDWICH ),
				'occupy_entire_space' => __( 'Occupy entire space', PAGE_BUILDER_SANDWICH ),
				'alignment' => __( 'Alignment', PAGE_BUILDER_SANDWICH ),
				'vertical_content_alignment' => __( 'Vertical Content Alignment', PAGE_BUILDER_SANDWICH ),
				'desc_vertical_content_alignment' => __( 'The alignment of the content inside this column vertically. Helpful if the column is tall and only has a short content.', PAGE_BUILDER_SANDWICH ),
				'spread_evenly_top_to_bottom' => __( 'Spread evenly from top to bottom (space-between)', PAGE_BUILDER_SANDWICH ),
				'equally_spaced' => __( 'Each item is equally spaced (space-around)', PAGE_BUILDER_SANDWICH ),
				'horizontal_content_alignment' => __( 'Horizontal Content Alignment', PAGE_BUILDER_SANDWICH ),
				'desc_horizontal_content_alignment' => __( 'The alignment of the content inside this column horizontally. Helpful for specifying alignment all at once.', PAGE_BUILDER_SANDWICH ),
				'add_column' => sprintf( __( 'Add %s', PAGE_BUILDER_SANDWICH ), __( 'Column', PAGE_BUILDER_SANDWICH ) ),
				'clear_all_row_styles' => __( 'Clear All Row Styles', PAGE_BUILDER_SANDWICH ),
				'clone_row' => sprintf( __( 'Clone %s', PAGE_BUILDER_SANDWICH ), __( 'Row', PAGE_BUILDER_SANDWICH ) ),
				'delete_row' => sprintf( __( 'Delete %s', PAGE_BUILDER_SANDWICH ), __( 'Row', PAGE_BUILDER_SANDWICH ) ),
				'clear_all_column_styles' => __( 'Clear All Column Styles', PAGE_BUILDER_SANDWICH ),
				'row' => __( 'Row', PAGE_BUILDER_SANDWICH ),
				'column' => __( 'Column', PAGE_BUILDER_SANDWICH ),
				'clone_column' => sprintf( __( 'Clone %s', PAGE_BUILDER_SANDWICH ), __( 'Column', PAGE_BUILDER_SANDWICH ) ),
				'delete_column' => sprintf( __( 'Delete %s', PAGE_BUILDER_SANDWICH ), __( 'Column', PAGE_BUILDER_SANDWICH ) ),
				'desc_newsletter_success_color' => __( 'The color of the success message when someone subscribes.', PAGE_BUILDER_SANDWICH ),
				'desc_newsletter_error_color' => __( 'The color of the error message when something went wrong.', PAGE_BUILDER_SANDWICH ),
				'border_color' => __( 'Border Color', PAGE_BUILDER_SANDWICH ),
				'list' => __( 'List', PAGE_BUILDER_SANDWICH ),
				'borders' => __( 'Borders', PAGE_BUILDER_SANDWICH ),
				'solid' => __( 'Solid', PAGE_BUILDER_SANDWICH ),
				'dashed' => __( 'Dashed', PAGE_BUILDER_SANDWICH ),
				'dotted' => __( 'Dotted', PAGE_BUILDER_SANDWICH ),
				'border_style' => __( 'Border Style', PAGE_BUILDER_SANDWICH ),
				'border_thickness' => __( 'Border Thickness', PAGE_BUILDER_SANDWICH ),
				'border_radius' => __( 'Border Radius', PAGE_BUILDER_SANDWICH ),
				'toggle_background_image_tint' => __( 'Toggle Background Image Tint', PAGE_BUILDER_SANDWICH ),
				'convert_to_1_column' => sprintf( __( 'Convert to %s', PAGE_BUILDER_SANDWICH ), __( '1 Column', PAGE_BUILDER_SANDWICH ) ),
				'change_columns' => sprintf( __( 'Change %s', PAGE_BUILDER_SANDWICH ), __( 'Columns', PAGE_BUILDER_SANDWICH ) ),
				'convert_to_even_2_columns' => sprintf( __( 'Convert to %s', PAGE_BUILDER_SANDWICH ), sprintf( __( 'Even %d Columns', PAGE_BUILDER_SANDWICH ), 2 ) ),
				'convert_to_uneven_2_columns' => sprintf( __( 'Convert to %s', PAGE_BUILDER_SANDWICH ), sprintf( __( 'Uneven %d Columns', PAGE_BUILDER_SANDWICH ), 2 ) ),
				'convert_to_even_3_columns' => sprintf( __( 'Convert to %s', PAGE_BUILDER_SANDWICH ), sprintf( __( 'Even %d Columns', PAGE_BUILDER_SANDWICH ), 3 ) ),
				'convert_to_uneven_3_columns' => sprintf( __( 'Convert to %s', PAGE_BUILDER_SANDWICH ), sprintf( __( 'Uneven %d Columns', PAGE_BUILDER_SANDWICH ), 3 ) ),
				'convert_to_even_4_columns' => sprintf( __( 'Convert to %s', PAGE_BUILDER_SANDWICH ), sprintf( __( 'Even %d Columns', PAGE_BUILDER_SANDWICH ), 4 ) ),
				'convert_to_uneven_4_columns' => sprintf( __( 'Convert to %s', PAGE_BUILDER_SANDWICH ), sprintf( __( 'Uneven %d Columns', PAGE_BUILDER_SANDWICH ), 4 ) ),
				'spacing' => __( 'Spacing', PAGE_BUILDER_SANDWICH ),
				'column_width' => __( 'Column Width', PAGE_BUILDER_SANDWICH ),
				'column_gap' => __( 'Column Gap', PAGE_BUILDER_SANDWICH ),
				'custom_class' => __( 'Custom Class', PAGE_BUILDER_SANDWICH ),
				'desc_custom_class' => __( 'Assign custom classes to this element that you can reference inside your CSS or Javascript.', PAGE_BUILDER_SANDWICH ),
				'custom_id' => __( 'Custom ID', PAGE_BUILDER_SANDWICH ),
				'desc_custom_id' => __( 'Assign a custom unique ID to this element that you can reference inside your CSS or Javascript.', PAGE_BUILDER_SANDWICH ),
				'advanced' => __( 'Advanced', PAGE_BUILDER_SANDWICH ),
				'choose_icon' => __( 'Choose Icon', PAGE_BUILDER_SANDWICH ),
				'padding' => __( 'Padding', PAGE_BUILDER_SANDWICH ),
				'desc_input_field_padding' => __( 'Use this to make your input field larger', PAGE_BUILDER_SANDWICH ),
				'remove_icon' => sprintf( __( 'Remove %s', PAGE_BUILDER_SANDWICH ), __( 'Icon', PAGE_BUILDER_SANDWICH ) ),
				'width' => __( 'Width', PAGE_BUILDER_SANDWICH ),
				'shadows' => __( 'Shadows', PAGE_BUILDER_SANDWICH ),
				'shadow_strength' => __( 'Shadow Strength', PAGE_BUILDER_SANDWICH ),
				'simple_shadow_small' => __( 'Simple Shadow Small', PAGE_BUILDER_SANDWICH ),
				'simple_shadow_normal' => __( 'Simple Shadow Normal', PAGE_BUILDER_SANDWICH ),
				'simple_shadow_medium' => __( 'Simple Shadow Medium', PAGE_BUILDER_SANDWICH ),
				'simple_shadow_large' => __( 'Simple Shadow Large', PAGE_BUILDER_SANDWICH ),
				'simple_shadow_huge' => __( 'Simple Shadow Huge', PAGE_BUILDER_SANDWICH ),
				'shadow_fancy_bottom_tilted' => __( 'Fancy Bottom Tilted (Needs Background Color)', PAGE_BUILDER_SANDWICH ),
				'shadow_fancy_vertical' => __( 'Fancy Vertical (Needs Background Color)', PAGE_BUILDER_SANDWICH ),
				'shadow_fancy_horizontal' => __( 'Fancy Horizontal (Needs Background Color)', PAGE_BUILDER_SANDWICH ),
				'shadow_fancy_center_bottom' => __( 'Fancy Center Bottom (Needs Background Color)', PAGE_BUILDER_SANDWICH ),
				'tooltip' => __( 'Tooltip', PAGE_BUILDER_SANDWICH ),
				'tooltip_location' => __( 'Tooltip Location', PAGE_BUILDER_SANDWICH ),
				'toggle_shadow' => sprintf( __( 'Toggle %s', PAGE_BUILDER_SANDWICH ), __( 'Shadow', PAGE_BUILDER_SANDWICH ) ),
				'tooltip_text' => __( 'Tooltip Text (Shows on Hover)', PAGE_BUILDER_SANDWICH ),
				'note_overridden_by_elements' => __( 'Note: this can be overridden by other elements.', PAGE_BUILDER_SANDWICH ),
				'text_color' => __( 'Text Color', PAGE_BUILDER_SANDWICH ),
				'text_color_focused' => __( 'Text Color (When Focused)', PAGE_BUILDER_SANDWICH ),
				'text_alignment' => __( 'Text Alignment', PAGE_BUILDER_SANDWICH ),
				'border' => __( 'Border', PAGE_BUILDER_SANDWICH ),
				'all_sides' => __( 'All Sides', PAGE_BUILDER_SANDWICH ),
				'top_and_bottom' => __( 'Top & Bottom', PAGE_BUILDER_SANDWICH ),
				'left_and_right' => __( 'Left & Right', PAGE_BUILDER_SANDWICH ),
				'top' => __( 'Top', PAGE_BUILDER_SANDWICH ),
				'right' => __( 'Right', PAGE_BUILDER_SANDWICH ),
				'bottom' => __( 'Bottom', PAGE_BUILDER_SANDWICH ),
				'left' => __( 'Left', PAGE_BUILDER_SANDWICH ),
				'none' => __( 'None', PAGE_BUILDER_SANDWICH ),
				'all' => __( 'All', PAGE_BUILDER_SANDWICH ),
				'center' => __( 'Center', PAGE_BUILDER_SANDWICH ),
				'colors' => __( 'Colors', PAGE_BUILDER_SANDWICH ),
				'placeholder_color' => __( 'Placeholder Color', PAGE_BUILDER_SANDWICH ),
				'placeholder_color_focused' => __( 'Placeholder Color (When Focused)', PAGE_BUILDER_SANDWICH ),
				'bullet_icon' => __( 'Bullet Icon', PAGE_BUILDER_SANDWICH ),
				'reset_bullet_icon' => sprintf( __( 'Reset %s', PAGE_BUILDER_SANDWICH ), __( 'Bullet Icon', PAGE_BUILDER_SANDWICH ) ),
				'choose_bullet_icon' => sprintf( __( 'Choose %s', PAGE_BUILDER_SANDWICH ), __( 'Bullet Icon', PAGE_BUILDER_SANDWICH ) ),
				'use_as_bullet' => __( 'Use As Bullet', PAGE_BUILDER_SANDWICH ),
				'font_size' => __( 'Font Size', PAGE_BUILDER_SANDWICH ),
				'increase_font_size' => sprintf( __( 'Increase %s', PAGE_BUILDER_SANDWICH ), __( 'Font Size', PAGE_BUILDER_SANDWICH ) ),
				'decrease_font_size' => sprintf( __( 'Decrease %s', PAGE_BUILDER_SANDWICH ), __( 'Font Size', PAGE_BUILDER_SANDWICH ) ),
				'reset_font_size' => sprintf( __( 'Reset %s', PAGE_BUILDER_SANDWICH ), __( 'Font Size', PAGE_BUILDER_SANDWICH ) ),
				'heading_label' => __( 'Heading %d', PAGE_BUILDER_SANDWICH ),
				'horizontal_rule' => __( 'Horizontal Rule', PAGE_BUILDER_SANDWICH ),
				'map' => __( 'Map', PAGE_BUILDER_SANDWICH ),
				'text' => __( 'Text', PAGE_BUILDER_SANDWICH ),
				'insert_icon' => sprintf( __( 'Insert %s', PAGE_BUILDER_SANDWICH ), __( 'Icon', PAGE_BUILDER_SANDWICH ) ),
				'line_height' => __( 'Line Height', PAGE_BUILDER_SANDWICH ),
				'increase_line_height' => sprintf( __( 'Insert %s', PAGE_BUILDER_SANDWICH ), __( 'Line Height', PAGE_BUILDER_SANDWICH ) ),
				'decrease_line_height' => sprintf( __( 'Decrease %s', PAGE_BUILDER_SANDWICH ), __( 'Line Height', PAGE_BUILDER_SANDWICH ) ),
				'reset_line_height' => sprintf( __( 'Reset %s', PAGE_BUILDER_SANDWICH ), __( 'Line Height', PAGE_BUILDER_SANDWICH ) ),
				'text_formatting' => __( 'Text Formatting', PAGE_BUILDER_SANDWICH ),
				'change_type' => __( 'Change Type', PAGE_BUILDER_SANDWICH ),
				'elements' => __( 'Elements', PAGE_BUILDER_SANDWICH ),
				'rows_and_columns' => __( 'Rows & Columns', PAGE_BUILDER_SANDWICH ),
				'pre_designed_sections' => __( 'Pre-Designed Sections', PAGE_BUILDER_SANDWICH ),
				'map_controls' => __( 'Map Controls', PAGE_BUILDER_SANDWICH ),
				'map_marker' => __( 'Map Marker', PAGE_BUILDER_SANDWICH ),
				'custom_map_marker' => __( 'Custom Map Marker', PAGE_BUILDER_SANDWICH ),
				'tint_map' => __( 'Tint Map', PAGE_BUILDER_SANDWICH ),
				'latitude_longitude_and_address' => __( 'Latitude & Longitude / Address', PAGE_BUILDER_SANDWICH ),
				'latitude_longitude_desc' => __( 'A number pair separated by a comma e.g. "37.09024, -95.712891" or enter an address', PAGE_BUILDER_SANDWICH ),
				'custom_map_styles' => __( 'Custom Map Styles', PAGE_BUILDER_SANDWICH ),
				'custom_map_styles_desc' => __( 'Enter custom map styles here. Read about <a href="https://developers.google.com/maps/documentation/javascript/styling#styling_the_default_map" target="_blank">Google\'s styling guide</a>. You can use sites like <a href="https://snazzymaps.com" target="_blank">SnazzyMaps.com</a> to create custom map styles.', PAGE_BUILDER_SANDWICH ),
				'auto' => __( 'Auto', PAGE_BUILDER_SANDWICH ),
				'move_above_s' => __( 'Move Above %s', PAGE_BUILDER_SANDWICH ),
				'move_below_s' => __( 'Move Below %s', PAGE_BUILDER_SANDWICH ),
				'move_inside_column' => __( 'Move Inside Column', PAGE_BUILDER_SANDWICH ),
				'tab_style' => __( 'Tab Style', PAGE_BUILDER_SANDWICH ),
				'tab_styles' => __( 'Tab Styles', PAGE_BUILDER_SANDWICH ),
				'active_tab_background_color' => __( 'Active Tab Background Color', PAGE_BUILDER_SANDWICH ),
				'active_tab_text_color' => __( 'Active Tab Text Color', PAGE_BUILDER_SANDWICH ),
				'inactive_tab_text_color' => __( 'Inactive Tab Text Color', PAGE_BUILDER_SANDWICH ),
				'tab_content_background_color' => __( 'Tab Content Background Color', PAGE_BUILDER_SANDWICH ),
				'tab_content_text_color' => __( 'Tab Content Text Color', PAGE_BUILDER_SANDWICH ),
				'overflow_hidden' => __( 'Overflow Hidden', PAGE_BUILDER_SANDWICH ),
				'desc_overflow_hidden' => __( 'Turning this on will hide or clip elements that go outside this container.', PAGE_BUILDER_SANDWICH ),
				'classic' => __( 'Classic', PAGE_BUILDER_SANDWICH ),
				'clean' => __( 'Clean', PAGE_BUILDER_SANDWICH ),
				'vertical_tabs' => __( 'Vertical tabs', PAGE_BUILDER_SANDWICH ),
				'tab_alignment' => __( 'Tab Alignment', PAGE_BUILDER_SANDWICH ),
				'stretch' => __( 'Stretch', PAGE_BUILDER_SANDWICH ),
				'properties' => __( 'Properties', PAGE_BUILDER_SANDWICH ),
				'margin' => __( 'Margin', PAGE_BUILDER_SANDWICH ),
				'add_tab' => sprintf( __( 'Add %s', PAGE_BUILDER_SANDWICH ), __( 'Tab', PAGE_BUILDER_SANDWICH ) ),
				'remove_tab' => sprintf( __( 'Remove %s', PAGE_BUILDER_SANDWICH ), __( 'Tab', PAGE_BUILDER_SANDWICH ) ),
				'delete_tabs' => sprintf( __( 'Delete %s', PAGE_BUILDER_SANDWICH ), __( 'Tabs', PAGE_BUILDER_SANDWICH ) ),
				'open' => __( 'Open', PAGE_BUILDER_SANDWICH ),
				'loading_options' => __( 'Loading Options', PAGE_BUILDER_SANDWICH ),
				'loading_options_errored' => __( 'Error loading options', PAGE_BUILDER_SANDWICH ),
				'insert_element' => sprintf( __( 'Insert %s', PAGE_BUILDER_SANDWICH ), __( 'Elements', PAGE_BUILDER_SANDWICH ) ),
				'add_element' => sprintf( __( 'Add %s', PAGE_BUILDER_SANDWICH ), __( 'Element', PAGE_BUILDER_SANDWICH ) ),
				'fade' => __( 'Fade', PAGE_BUILDER_SANDWICH ),
				'fade_up' => __( 'Fade Up', PAGE_BUILDER_SANDWICH ),
				'fade_down' => __( 'Fade Down', PAGE_BUILDER_SANDWICH ),
				'fade_left' => __( 'Fade Left', PAGE_BUILDER_SANDWICH ),
				'fade_right' => __( 'Fade Right', PAGE_BUILDER_SANDWICH ),
				'fade_up_right' => __( 'Fade Up Right', PAGE_BUILDER_SANDWICH ),
				'fade_up_left' => __( 'Fade Up Left', PAGE_BUILDER_SANDWICH ),
				'fade_down_right' => __( 'Fade Down Right', PAGE_BUILDER_SANDWICH ),
				'fade_down_left' => __( 'Fade Down Left', PAGE_BUILDER_SANDWICH ),
				'flip_up' => __( 'Flip Up', PAGE_BUILDER_SANDWICH ),
				'flip_down' => __( 'Flip Down', PAGE_BUILDER_SANDWICH ),
				'flip_left' => __( 'Flip Left', PAGE_BUILDER_SANDWICH ),
				'flip_right' => __( 'Flip Right', PAGE_BUILDER_SANDWICH ),
				'roll_3d_bottom_to_top' => __( 'Roll 3D Bottom to Top', PAGE_BUILDER_SANDWICH ),
				'roll_3d_left_to_right' => __( 'Roll 3D Left to Right', PAGE_BUILDER_SANDWICH ),
				'roll_3d_right_to_left' => __( 'Roll 3D Right to Left', PAGE_BUILDER_SANDWICH ),
				'spin' => __( 'Spin', PAGE_BUILDER_SANDWICH ),
				'spin_reverse' => __( 'Spin Reverse', PAGE_BUILDER_SANDWICH ),
				'spin_3d' => __( 'Spin 3D', PAGE_BUILDER_SANDWICH ),
				'spin_3d_reverse' => __( 'Spin 3D Reverse', PAGE_BUILDER_SANDWICH ),
				'slide_up' => __( 'Slide Up', PAGE_BUILDER_SANDWICH ),
				'slide_down' => __( 'Slide Down', PAGE_BUILDER_SANDWICH ),
				'slide_left' => __( 'Slide Left', PAGE_BUILDER_SANDWICH ),
				'slide_right' => __( 'Slide Right', PAGE_BUILDER_SANDWICH ),
				'rotate_top_left' => __( 'Rotate Top Left', PAGE_BUILDER_SANDWICH ),
				'rotate_top_right' => __( 'Rotate Top Right', PAGE_BUILDER_SANDWICH ),
				'rotate_bottom_left' => __( 'Rotate Bottom Left', PAGE_BUILDER_SANDWICH ),
				'rotate_bottom_right' => __( 'Rotate Bottom Right', PAGE_BUILDER_SANDWICH ),
				'zoom_in' => __( 'Zoom In', PAGE_BUILDER_SANDWICH ),
				'zoom_in_up' => __( 'Zoom In Up', PAGE_BUILDER_SANDWICH ),
				'zoom_in_down' => __( 'Zoom In Down', PAGE_BUILDER_SANDWICH ),
				'zoom_in_left' => __( 'Zoom In Left', PAGE_BUILDER_SANDWICH ),
				'zoom_in_right' => __( 'Zoom In Right', PAGE_BUILDER_SANDWICH ),
				'zoom_out' => __( 'Zoom Out', PAGE_BUILDER_SANDWICH ),
				'zoom_out_up' => __( 'Zoom Out Up', PAGE_BUILDER_SANDWICH ),
				'zoom_out_down' => __( 'Zoom Out Down', PAGE_BUILDER_SANDWICH ),
				'zoom_out_left' => __( 'Zoom Out Left', PAGE_BUILDER_SANDWICH ),
				'zoom_out_right' => __( 'Zoom Out Right', PAGE_BUILDER_SANDWICH ),
				'loop_pulsate' => __( 'Pulsate (Loop)', PAGE_BUILDER_SANDWICH ),
				'loop_pulsate_fade' => __( 'Pulsate Fade (Loop)', PAGE_BUILDER_SANDWICH ),
				'loop_hover' => __( 'Hover (Loop)', PAGE_BUILDER_SANDWICH ),
				'loop_hover_float' => __( 'Hover Floar (Loop)', PAGE_BUILDER_SANDWICH ),
				'loop_wobble' => __( 'Wobble (Loop)', PAGE_BUILDER_SANDWICH ),
				'loop_wobble_3d' => __( 'Wobble 3D (Loop)', PAGE_BUILDER_SANDWICH ),
				'loop_dangle' => __( 'Dangle (Loop)', PAGE_BUILDER_SANDWICH ),
				'animation' => __( 'Animation', PAGE_BUILDER_SANDWICH ),
				'desc_animation' => __( 'Play an animation when the element enters the view.', PAGE_BUILDER_SANDWICH ),
				'animation_speed' => __( 'Animation Speed', PAGE_BUILDER_SANDWICH ),
				'in_milliseconds' => __( 'In milliseconds', PAGE_BUILDER_SANDWICH ),
				'animation_start_delay' => __( 'Animation Start Delay', PAGE_BUILDER_SANDWICH ),
				'desc_animation_start_delay' => __( 'In milliseconds. Does not apply to looped animations.', PAGE_BUILDER_SANDWICH ),
				'elastic_animation' => __( 'Elastic Animation', PAGE_BUILDER_SANDWICH ),
				'desc_elastic_animation' => __( 'Turn this on for a bouncy/elastic animation effect.', PAGE_BUILDER_SANDWICH ),
				'play_animation_once' => __( 'Play Animation Once', PAGE_BUILDER_SANDWICH ),
				'desc_play_animation_once' => __( 'Animations play every time they get into view, turn this on to only play it once. Does not apply to looped animations.', PAGE_BUILDER_SANDWICH ),
				'toggle' => __( 'Toggle', PAGE_BUILDER_SANDWICH ),

				// Tools.
				'text_style' => __( 'Text Style', PAGE_BUILDER_SANDWICH ),
				'heading_1' => sprintf( __( 'Heading %d', PAGE_BUILDER_SANDWICH ), 1 ),
				'heading_2' => sprintf( __( 'Heading %d', PAGE_BUILDER_SANDWICH ), 2 ),
				'heading_3' => sprintf( __( 'Heading %d', PAGE_BUILDER_SANDWICH ), 3 ),
				'heading_4' => sprintf( __( 'Heading %d', PAGE_BUILDER_SANDWICH ), 4 ),
				'heading_5' => sprintf( __( 'Heading %d', PAGE_BUILDER_SANDWICH ), 5 ),
				'heading_6' => sprintf( __( 'Heading %d', PAGE_BUILDER_SANDWICH ), 6 ),
				'blockquote' => __( 'Blockquote', PAGE_BUILDER_SANDWICH ),
				'preformatted' => __( 'Preformatted', PAGE_BUILDER_SANDWICH ),
				'paragraph' => __( 'Paragraph', PAGE_BUILDER_SANDWICH ),
				'button' => __( 'Button', PAGE_BUILDER_SANDWICH ),
				'carousel' => __( 'Carousel', PAGE_BUILDER_SANDWICH ),
				'clear_formatting' => __( 'Clear Formatting', PAGE_BUILDER_SANDWICH ),
				'code' => __( 'Code', PAGE_BUILDER_SANDWICH ),
				'color' => __( 'Color', PAGE_BUILDER_SANDWICH ),
				'add_row' => sprintf( __( 'Add %s', PAGE_BUILDER_SANDWICH ), __( 'Row', PAGE_BUILDER_SANDWICH ) ),
				'one_column' => sprintf( __( '%s Column', PAGE_BUILDER_SANDWICH ), 1 ),
				'two_column' => sprintf( __( '%s Columns', PAGE_BUILDER_SANDWICH ), 2 ),
				'three_column' => sprintf( __( '%s Columns', PAGE_BUILDER_SANDWICH ), 3 ),
				'four_column' => sprintf( __( '%s Columns', PAGE_BUILDER_SANDWICH ), 4 ),
				'add_2_column_row' => sprintf( __( 'Add a %s-Column Row', PAGE_BUILDER_SANDWICH ), 2 ),
				'add_3_column_row' => sprintf( __( 'Add a %s-Column Row', PAGE_BUILDER_SANDWICH ), 3 ),
				'add_4_column_row' => sprintf( __( 'Add a %s-Column Row', PAGE_BUILDER_SANDWICH ), 4 ),
				'add_23_13_column_row' => sprintf( __( 'Add a %s-Column Row', PAGE_BUILDER_SANDWICH ), '2/3-1/3' ),
				'add_13_23_column_row' => sprintf( __( 'Add a %s-Column Row', PAGE_BUILDER_SANDWICH ), '1/3-2/3' ),
				'add_14_12_14_column_row' => sprintf( __( 'Add a %s-Column Row', PAGE_BUILDER_SANDWICH ), '1/4-1/2-1/4' ),
				'add_n_column_row' => __( 'Add an N-Column Row', PAGE_BUILDER_SANDWICH ),
				'html' => __( 'HTML', PAGE_BUILDER_SANDWICH ),
				'iframe' => __( 'Iframe', PAGE_BUILDER_SANDWICH ),
				'icon' => __( 'Icon', PAGE_BUILDER_SANDWICH ),
				'justify' => __( 'Justify', PAGE_BUILDER_SANDWICH ),
				'media' => __( 'Media', PAGE_BUILDER_SANDWICH ),
				'newsletter_signup_form' => __( 'Newsletter Signup Form', PAGE_BUILDER_SANDWICH ),
				'table' => __( 'Table', PAGE_BUILDER_SANDWICH ),
				'shortcode' => __( 'Shortcode', PAGE_BUILDER_SANDWICH ),
				'insert_shortcode' => __( 'Insert Shortcode', PAGE_BUILDER_SANDWICH ),
				'undo' => __( 'Undo', PAGE_BUILDER_SANDWICH ),
				'redo' => __( 'Redo', PAGE_BUILDER_SANDWICH ),
				'sidebar_or_widget_area' => __( 'Sidebar or Widget Area', PAGE_BUILDER_SANDWICH ),
				'sidebar' => __( 'Sidebar', PAGE_BUILDER_SANDWICH ),
				'strikethrough' => __( 'Strikethrough', PAGE_BUILDER_SANDWICH ),
				'more_tools' => __( 'More Tools', PAGE_BUILDER_SANDWICH ),
				'less_tools' => __( 'Less Tools', PAGE_BUILDER_SANDWICH ),
				'underline' => __( 'Underline', PAGE_BUILDER_SANDWICH ),
				'uppercase' => __( 'Uppercase', PAGE_BUILDER_SANDWICH ),
				'reset_case' => __( 'Reset Case', PAGE_BUILDER_SANDWICH ),
				'insert_widget' => sprintf( __( 'Insert %s', PAGE_BUILDER_SANDWICH ), __( 'Widget', PAGE_BUILDER_SANDWICH ) ),
				'edit_html' => sprintf( __( 'Edit %s', PAGE_BUILDER_SANDWICH ), __( 'HTML', PAGE_BUILDER_SANDWICH ) ),
				'align_left' => __( 'Align left', PAGE_BUILDER_SANDWICH ),
				'align_center' => __( 'Align center', PAGE_BUILDER_SANDWICH ),
				'align_right' => __( 'Align right', PAGE_BUILDER_SANDWICH ),
				'edit' => __( 'Edit', PAGE_BUILDER_SANDWICH ),
				'align_none' => __( 'Align None', PAGE_BUILDER_SANDWICH ),
				'edit_shortcode' => sprintf( __( 'Edit %s', PAGE_BUILDER_SANDWICH ), __( 'Shortcode', PAGE_BUILDER_SANDWICH ) ),
				'insert_design' => __( 'Insert Design', PAGE_BUILDER_SANDWICH ),
				'insert_content' => __( 'Insert Content', PAGE_BUILDER_SANDWICH ),
				'tab' => __( 'Tab', PAGE_BUILDER_SANDWICH ),
				'tabs' => __( 'Tabs', PAGE_BUILDER_SANDWICH ),
				's_attribute' => __( '%s attribute', PAGE_BUILDER_SANDWICH ),
				'select_one' => __( 'Select one', PAGE_BUILDER_SANDWICH ),
				'select_a_post_type' => __( 'Select a post type', PAGE_BUILDER_SANDWICH ),

				// Tooltips.
				'visit_link' => __( 'Visit Link', PAGE_BUILDER_SANDWICH ),
				'edit_link' => sprintf( __( 'Edit %s', PAGE_BUILDER_SANDWICH ), __( 'Link', PAGE_BUILDER_SANDWICH ) ),
				'unlink' => __( 'Unlink', PAGE_BUILDER_SANDWICH ),
				'clone' => __( 'Clone', PAGE_BUILDER_SANDWICH ),
				'remove_column' => sprintf( __( 'Remove %s', PAGE_BUILDER_SANDWICH ), __( 'Column', PAGE_BUILDER_SANDWICH ) ),
				'edit_embed' => sprintf( __( 'Edit %s', PAGE_BUILDER_SANDWICH ), __( 'Embed', PAGE_BUILDER_SANDWICH ) ),
				'remove' => __( 'Remove', PAGE_BUILDER_SANDWICH ),

				// Various uses.
				'sidebar' => __( 'Sidebar', PAGE_BUILDER_SANDWICH ),
				'widget' => __( 'Widget', PAGE_BUILDER_SANDWICH ),
				'next' => __( 'Next', PAGE_BUILDER_SANDWICH ),
				'close' => __( 'Close', PAGE_BUILDER_SANDWICH ),
				'select_image' => __( 'Select Image', PAGE_BUILDER_SANDWICH ),
				'use_selected_image' => __( 'Use Selected Image', PAGE_BUILDER_SANDWICH ),
				'your_email_address' => esc_attr( __( 'Your email address', PAGE_BUILDER_SANDWICH ) ),
				'drag_an_element' => __( 'Drag an element below into your content', PAGE_BUILDER_SANDWICH ),

				// Admin bar.
				'save_and_update' => __( 'Save and Update', PAGE_BUILDER_SANDWICH ),
				'save_as_draft' => __( 'Save as Draft', PAGE_BUILDER_SANDWICH ),
				'save_as_pending' => __( 'Save as Pending Review', PAGE_BUILDER_SANDWICH ),

				// Lite version notes.
				'map_lite_footer' => sprintf( __( 'You can further stylize your maps with the %sPremium Version%s.', PAGE_BUILDER_SANDWICH ), '<a href="https://pagebuildersandwich.com/compare?utm_source=lite-plugin&utm_medium=map-inspector&utm_campaign=Page%20Builder%20Sandwich" target="_blank">', '</a>' ),
				'tabs_lite_footer' => sprintf( __( 'Vertical tabs and more options are available with the %sPremium Version%s.', PAGE_BUILDER_SANDWICH ), '<a href="https://pagebuildersandwich.com/compare?utm_source=lite-plugin&utm_medium=tabs-inspector&utm_campaign=Page%20Builder%20Sandwich" target="_blank">', '</a>' ),
				'icon_lite_footer' => sprintf( __( 'Get more icons, further style and add tooltips to your icons with the %sPremium Version%s.', PAGE_BUILDER_SANDWICH ), '<a href="https://pagebuildersandwich.com/compare?utm_source=lite-plugin&utm_medium=icon-inspector&utm_campaign=Page%20Builder%20Sandwich" target="_blank">', '</a>' ),
			);
			return $args;
		}


		/**
		 * Add localization scripts in the error notices.
		 *
		 * @since 2.13
		 *
		 * @param array $args Localization params.
		 *
		 * @return array Localization params.
		 */
		public function add_error_labels( $args ) {
			$args['labels'] = array(
				'toolbar_notice' => __( 'Please turn on your admin toolbar from your user profile in order for Page Builder Sandwich to work correctly.', PAGE_BUILDER_SANDWICH ),
				'error_notice' => __( "There are errors on this page that may affect Page Builder Sandwich from working correctly. Please check the browser's console for the errors. These would need to be fixed first. Please contact the theme/plugin author", PAGE_BUILDER_SANDWICH ),
			);
			return $args;
		}
	}
}

new PBSTranslations();