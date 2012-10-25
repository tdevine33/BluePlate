<?php
/**
 * Define our settings sections
 *
 * array key=$id, array value=$title in: add_settings_section( $id, $title, $callback, $page );
 * @return array
 */
function blueplate_options_page_sections() {
	
	$sections = array();
	// $sections[$id] 				= __($title, 'blueplate_textdomain');
	$sections['callout_section'] 		= __('Default Callout', 'blueplate_textdomain');/*
	$sections['txtarea_section'] 	= __('Textarea Form Fields', 'blueplate_textdomain');
	$sections['select_section'] 	= __('Select Form Fields', 'blueplate_textdomain');
	$sections['checkbox_section'] 	= __('Checkbox Form Fields', 'blueplate_textdomain');*/
	
	return $sections;	
}

/**
 * Define our form fields (settings) 
 *
 * @return array
 */
function blueplate_options_page_fields() {

	$options[] = array(
		"section" => "callout_section",
		"id"      => BLUEPLATE_SHORTNAME . "_facebook",
		"title"   => __( 'Facebook Link', 'blueplate_textdomain' ),
		"desc"    => __( 'Paste URL to facebook page', 'blueplate_textdomain' ),
		"type"    => "text",
		"std"     => __('','blueplate_textdomain')
	);

	$options[] = array(
		"section" => "callout_section",
		"id"      => BLUEPLATE_SHORTNAME . "_tripadvisor",
		"title"   => __( 'Trip Advisor Link', 'blueplate_textdomain' ),
		"desc"    => __( 'Paste URL to Trip Advisor page', 'blueplate_textdomain' ),
		"type"    => "text",
		"std"     => __('','blueplate_textdomain')
	);

	$options[] = array(
		"section" => "callout_section",
		"id"      => BLUEPLATE_SHORTNAME . "_googleplus",
		"title"   => __( 'Google Plus Link', 'blueplate_textdomain' ),
		"desc"    => __( 'Paste URL to Google Plus page', 'blueplate_textdomain' ),
		"type"    => "text",
		"std"     => __('','blueplate_textdomain')
	);

	$options[] = array(
		"section" => "callout_section",
		"id"      => BLUEPLATE_SHORTNAME . "_yelp",
		"title"   => __( 'Yelp Link', 'blueplate_textdomain' ),
		"desc"    => __( 'Paste URL to Yelp page', 'blueplate_textdomain' ),
		"type"    => "text",
		"std"     => __('','blueplate_textdomain')
	);
	
	$options[] = array(
		"section" => "callout_section",
		"id"      => BLUEPLATE_SHORTNAME . "_open_closed",
		"title"   => __( 'Open or Closed', 'blueplate_textdomain' ),
		"desc"    => __( 'Choose if Restaurant is open or closed', 'blueplate_textdomain' ),
		"type"    => "select2",
		"std"    => "",
		"choices" => array( __('Open','blueplate_textdomain') . "|open", __('Closed','blueplate_textdomain') . "|closed")
	);
	
	return $options;	
}

/**
 * Contextual Help
 */
function blueplate_options_page_contextual_help() {
	
	$text 	= "<h3>" . __('BluePlate Settings - Contextual Help','blueplate_textdomain') . "</h3>";
	$text 	.= "<p>" . __('Contextual help goes here. You may want to use different html elements to format your text as you want.','blueplate_textdomain') . "</p>";
	
	// must return text! NOT echo
	return $text;
} ?>