<?php
/**
 * Implements hook_form_system_theme_settings_alter()
 *
 * @param $form
 * @param $form_state
 */

function edu_form_system_theme_settings_alter(&$form, &$form_state) {
	
	// Main settings wrapper
	$form['options'] = array(
		'#type' => 'vertical_tabs',
		'#default_tab' => 'defaults',
		'#weight' => '-10',
		'#attached' => array(
			'css' => array(drupal_get_path('theme', 'edu') . '/css/theme-settings.css'),
		),
	);
	// General
	$form['options']['general'] = array(
		'#type' => 'fieldset',
		'#title' => t('General'),
	);
	
	// CSS
	$form['options']['css'] = array(
		'#type' => 'fieldset',
		'#title' => t('CSS'),
	);

		// User CSS
		$form['options']['css']['user_css'] = array(
			'#type' => 'textarea',
			'#title' => t('Add your own CSS'),
			'#default_value' => theme_get_setting('user_css'),
		);
	
	// JS
	$form['options']['js'] = array(
		'#type' => 'fieldset',
		'#title' => t('JS'),
	);

		// User JS
		$form['options']['js']['user_js'] = array(
			'#type' => 'textarea',
			'#title' => t('Add your own JS'),
			'#default_value' => theme_get_setting('user_js'),
		);
	
}
