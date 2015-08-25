<?php

/**
 * Define $root global variable.
 */
global $theme_root, $parent_root, $theme_path;
$theme_root = base_path() . path_to_theme();
$parent_root = base_path() . drupal_get_path('theme', 'edu');


/**
* Implements hook_css_alter().
*/
function edu_css_alter(&$css) {
	// Use Seven's vertical tabs style instead of the default one.
	if (isset($css['misc/vertical-tabs.css'])) {
		///$css['misc/vertical-tabs.css']['data'] = drupal_get_path('theme','seven') . '/vertical-tabs.css';
	}
	// Use Seven's jQuery UI theme style instead of the default one.
	if (isset($css['misc/ui/jquery.ui.theme.css'])) {
		///$css['misc/ui/jquery.ui.theme.css']['data'] = drupal_get_path('theme', 'seven') . '/jquery.ui.theme.css';
	}
}

/**
 * Implements hook_theme().
*/

function edu_theme() {
  return array(
	'contact_site_form' => array(
      // Specifies 'form' as a render element.
      'render element' => 'form',
    ),
	'edu_plan_a_visit_form' => array(
      'render element' => 'form',
    ),
  ); 
}

/**
 * Implements theme_FORM_ID().
 */
function edu_contact_site_form($variables) {
	global $parent_root, $language;
	
	// Create output any way you want.
	unset($variables['form']['#pre_render']);
	unset($variables['form']['#theme_wrappers']);
	//unset($variables['form']['#theme']);
	
	unset($variables['form']['name']['#attributes']);
	unset($variables['form']['name']['#theme_wrappers']);
	unset($variables['form']['name']['#after_build']);
	unset($variables['form']['name']['#prefix']);
	unset($variables['form']['name']['#suffix']);
	//unset($variables['form']['name']['#theme']);
	unset($variables['form']['name']['#title']);
	
	unset($variables['form']['last_name']['#attributes']);
	unset($variables['form']['last_name']['#theme_wrappers']);
	unset($variables['form']['last_name']['#after_build']);
	unset($variables['form']['last_name']['#prefix']);
	unset($variables['form']['last_name']['#suffix']);
	//unset($variables['form']['last_name']['#theme']);
	unset($variables['form']['last_name']['#title']);
	
	unset($variables['form']['mail']['#attributes']);
	unset($variables['form']['mail']['#theme_wrappers']);
	unset($variables['form']['mail']['#after_build']);
	unset($variables['form']['mail']['#prefix']);
	unset($variables['form']['mail']['#suffix']);
	//unset($variables['form']['mail']['#theme']);
	unset($variables['form']['mail']['#title']);
	
	unset($variables['form']['phone']['#attributes']);
	unset($variables['form']['phone']['#theme_wrappers']);
	unset($variables['form']['phone']['#after_build']);
	unset($variables['form']['phone']['#prefix']);
	unset($variables['form']['phone']['#suffix']);
	//unset($variables['form']['phone']['#theme']);
	unset($variables['form']['phone']['#title']);
	
	unset($variables['form']['verify_contact']['#attributes']);
	unset($variables['form']['verify_contact']['#theme_wrappers']);
	unset($variables['form']['verify_contact']['#after_build']);
	unset($variables['form']['verify_contact']['#prefix']);
	unset($variables['form']['verify_contact']['#suffix']);
	//unset($variables['form']['verify_contact']['#theme']);
	unset($variables['form']['verify_contact']['#title']);
	
	unset($variables['form']['department']['#attributes']);
	unset($variables['form']['department']['#theme_wrappers']);
	unset($variables['form']['department']['#after_build']);
	unset($variables['form']['department']['#prefix']);
	unset($variables['form']['department']['#suffix']);
	//unset($variables['form']['department']['#theme']);
	unset($variables['form']['department']['#title']);
	
	unset($variables['form']['message']['#attributes']);
	unset($variables['form']['message']['#theme_wrappers']);
	unset($variables['form']['message']['#after_build']);
	unset($variables['form']['message']['#prefix']);
	unset($variables['form']['message']['#suffix']);
	//unset($variables['form']['message']['#theme']);
	unset($variables['form']['message']['#title']);
	
	unset($variables['form']['subject']['#attributes']);
	unset($variables['form']['subject']['#theme_wrappers']);
	unset($variables['form']['subject']['#after_build']);
	unset($variables['form']['subject']['#prefix']);
	unset($variables['form']['subject']['#suffix']);
	//unset($variables['form']['subject']['#theme']);
	unset($variables['form']['subject']['#title']);
	
	unset($variables['form']['copy']['#attributes']);
	unset($variables['form']['copy']['#theme_wrappers']);
	unset($variables['form']['copy']['#after_build']);
	unset($variables['form']['copy']['#prefix']);
	unset($variables['form']['copy']['#suffix']);
	//unset($variables['form']['copy']['#theme']);
	unset($variables['form']['copy']['#title']);
	
	$variables['form']['message']['#attributes']['class'] = array('span6');
	$variables['form']['message']['#resizable'] = false;
	$variables['form']['phone']['#attributes']['class'] = array('span3','ie7-margin');
	$variables['form']['name']['#attributes']['class'] = array('span3','ie7-margin');
	$variables['form']['last_name']['#attributes']['class'] = array('span3','ie7-margin');
	$variables['form']['mail']['#attributes']['class'] = array('span3','ie7-margin');
	$variables['form']['verify_contact']['#attributes']['class'] = array('span2');
	//unset($variables['form']['submit']['#theme_wrappers']);
	$variables['form']['actions']['submit']['#attributes']['class'] = array('button_medium');
	$variables['form']['actions']['submit']['#value'] = t('Submit');
	//unset($variables['form']['actions']['submit']['#theme_wrappers']);
	
	
	//dsm($variables['form']);
	
	$output = '<hr>
			<h4>'.t('General Enquire or Apply').'</h4>
            
			<div id="message-contact"></div>
			<!-- form method="post" action="assets/contact.php" id="contactform" -->
				<div class="row">
					<div class="span3">
						<label>Name <span class="required">* </span></label>';
	$output .= render($variables['form']['name']);
	$output .= '	</div>
					<div class="span3">
						<label>Last name <span class="required">* </span></label>';
	$output .= render($variables['form']['last_name']);
	$output .= '	</div>
				</div>
				<div class="row">
					<div class="span3">
						<label>Email <span class="required">* </span></label>';
	$output .= render($variables['form']['mail']);
	$output .= '	</div>
					<div class="span3">
						<label>Phone <span class="required">* </span></label>';
	$output .= render($variables['form']['phone']);
	$output .= '	</div>
				</div>
				<div class="row">
					<div class="span3">
						<label>Select a department</label>';
	$output .= render($variables['form']['department']);
	$output .= '	</div>
				</div>
                <div class="row">
					<div class="span3">
						<label>Message <span class="required">*</span></label>';
	$output .= render($variables['form']['message']);
	$output .= '	</div>
				</div>
				<div class="row">
					<div class="span3">
						<label><span class="required">*</span> Are you human? 3 + 1 =</label>';
	$output .= render($variables['form']['verify_contact']);
	$output .= '	</div>
					<div class="button-align span3">
						<!-- input type="submit" id="submit-contact" value="Submit" class=" button_medium" -->';
	$output .= render($variables['form']['actions']['submit']);
	$output .= '	</div>
				</div>
				<hr>
			<!-- /form -->';
	$variables['form']['subject']['#value'] = t('Message from Contact site');
	$variables['form']['subject']['#type'] = 'hidden'; //#theme
	$variables['form']['copy']['#type'] = 'hidden';
	$variables['form']['subject']['#theme'] = 'hidden';
	$variables['form']['copy']['#theme'] = 'hidden';
	// Be sure to include a rendered version of the remaining form items.
	$output .= drupal_render_children($variables['form']);
	
	//dsm();
	// Return the output.
	return $output;
	
}

/**
 * Implements theme_FORM_ID().
 */
function edu_edu_plan_a_visit_form($variables) {
	
	// Create output any way you want.
	unset($variables['form']['#pre_render']);
	unset($variables['form']['#theme_wrappers']);
	//unset($variables['form']['#theme']);
	
	unset($variables['form']['name_visit']['#attributes']);
	unset($variables['form']['name_visit']['#theme_wrappers']);
	unset($variables['form']['name_visit']['#after_build']);
	unset($variables['form']['name_visit']['#prefix']);
	unset($variables['form']['name_visit']['#suffix']);
	//unset($variables['form']['name_visit']['#theme']);
	unset($variables['form']['name_visit']['#title']);
	
	unset($variables['form']['lastname_visit']['#attributes']);
	unset($variables['form']['lastname_visit']['#theme_wrappers']);
	unset($variables['form']['lastname_visit']['#after_build']);
	unset($variables['form']['lastname_visit']['#prefix']);
	unset($variables['form']['lastname_visit']['#suffix']);
	//unset($variables['form']['lastname_visit']['#theme']);
	unset($variables['form']['lastname_visit']['#title']);
	
	unset($variables['form']['email_visit']['#attributes']);
	unset($variables['form']['email_visit']['#theme_wrappers']);
	unset($variables['form']['email_visit']['#after_build']);
	unset($variables['form']['email_visit']['#prefix']);
	unset($variables['form']['email_visit']['#suffix']);
	//unset($variables['form']['email_visit']['#theme']);
	unset($variables['form']['email_visit']['#title']);
	
	unset($variables['form']['phone_visit']['#attributes']);
	unset($variables['form']['phone_visit']['#theme_wrappers']);
	unset($variables['form']['phone_visit']['#after_build']);
	unset($variables['form']['phone_visit']['#prefix']);
	unset($variables['form']['phone_visit']['#suffix']);
	//unset($variables['form']['phone_visit']['#theme']);
	unset($variables['form']['phone_visit']['#title']);
	
	unset($variables['form']['date_visit']['#attributes']);
	unset($variables['form']['date_visit']['#theme_wrappers']);
	unset($variables['form']['date_visit']['#after_build']);
	unset($variables['form']['date_visit']['#prefix']);
	unset($variables['form']['date_visit']['#suffix']);
	//unset($variables['form']['date_visit']['#theme']);
	unset($variables['form']['date_visit']['#title']);
	
	unset($variables['form']['verify_visit']['#attributes']);
	unset($variables['form']['verify_visit']['#theme_wrappers']);
	unset($variables['form']['verify_visit']['#after_build']);
	unset($variables['form']['verify_visit']['#prefix']);
	unset($variables['form']['verify_visit']['#suffix']);
	//unset($variables['form']['verify_visit']['#theme']);
	unset($variables['form']['verify_visit']['#title']);
		
	
	$variables['form']['message']['#attributes']['class'] = array('span6');
	$variables['form']['message']['#resizable'] = false;
	$variables['form']['phone']['#attributes']['class'] = array('span3','ie7-margin');
	$variables['form']['name']['#attributes']['class'] = array('span3','ie7-margin');
	$variables['form']['last_name']['#attributes']['class'] = array('span3','ie7-margin');
	$variables['form']['mail']['#attributes']['class'] = array('span3','ie7-margin');
	$variables['form']['verify_contact']['#attributes']['class'] = array('span2');
	//unset($variables['form']['submit']['#theme_wrappers']);
	$variables['form']['actions']['submit']['#attributes']['class'] = array('button_medium');
	$variables['form']['actions']['submit']['#value'] = t('Submit');
	//unset($variables['form']['actions']['submit']['#theme_wrappers']);
	
	$output = '<h4>'.t('Plan a visit').'</h4>
			<div id="message-visit"></div>
			<!-- form method="post" action="assets/visit.php" id="visit" -->
				<div class="row">
					<div class="span3">
						<label>Name <span class="required">* </span></label>
						<!-- input type="text" class="span3 ie7-margin" id="name_visit" -->';
	$output .= render($variables['form']['name_visit']);
	$output .= '	</div>
					<div class="span3">
						<label>Last name <span class="required">* </span></label>
						<!-- input type="text" class="span3 ie7-margin" id="lastname_visit" -->';
	$output .= render($variables['form']['lastname_visit']);
	$output .= '	</div>
				</div>
				<div class="row">
					<div class="span3">
						<label>Email <span class="required">* </span></label>
						<!-- input type="email" id="email_visit" class="span3 ie7-margin" -->';
	$output .= render($variables['form']['email_visit']);
	$output .= '	</div>
					<div class="span3">
						<label>Phone <span class="required">* </span></label>
						<!-- input type="text" id="phone_visit" class="span3 ie7-margin" -->';
	$output .= render($variables['form']['phone_visit']);
	$output .= '	</div>
				</div>
				<div class="row">
					<div class="span3">
						<div id="datetimepicker" class="input-append">
							<label>Select a date <span class="required">* </span></label>
							<!-- input type="text" class=" dateinput" id="date_visit" readonly -->';
	$output .= render($variables['form']['date_visit']);
	$output .= '			<span class="add-on"><i data-time-icon="icon-time" data-date-icon="icon-calendar"></i></span>
						</div>
					</div>
					<div class="span3">
						<label><span class="required">*</span> Are you human? 3 + 1 =</label>
						<!-- input type="text" id="verify_visit" class="span2" -->';
	$output .= render($variables['form']['verify_visit']);
	$output .= '	</div>
				</div>
				<!-- end row-->';
	$output .= render($variables['form']['submit']);
	$output .= '	
				<!-- input type="submit" id="submit-visit" value="Submit" class=" button_medium" -->
			<!-- /form -->';
	return $output;
}

function edu_html_head_alter(&$head_elements) {
	unset($head_elements['system_meta_generator']);
	foreach ($head_elements as $key => $element) {
		if (isset($element['#attributes']['rel']) && $element['#attributes']['rel'] == 'canonical') {
		  unset($head_elements[$key]);
		}
		if (isset($element['#attributes']['rel']) && $element['#attributes']['rel'] == 'shortlink') {
		  unset($head_elements[$key]);
		}
  }
}


/**
 * Overwrite theme_textarea()
 * @file template.php
 */
function edu_textarea($variables) {
  $element = $variables['element'];
  $element['#attributes']['name'] = $element['#name'];
  $element['#attributes']['id'] = $element['#id'];
  $element['#attributes']['cols'] = $element['#cols'];
  $element['#attributes']['rows'] = $element['#rows'];
  _form_set_class($element, array('form-textarea'));

  $wrapper_attributes = array(
    'class' => array('form-textarea-wrapper'),
  );

  // Add resizable behavior.
  if (!empty($element['#resizable'])) {
    $wrapper_attributes['class'][] = 'resizable';
  }

  //$output = '<div' . drupal_attributes($wrapper_attributes) . '>';
  $output = '<textarea' . drupal_attributes($element['#attributes']) . '>' . check_plain($element['#value']) . '</textarea>';
  //$output .= '</div>';
  return $output;
}

/**
 * Overwrite theme_button()
 * @file template.php
 */
function edu_button($variables) {

//dsm($variables);
	$element = $variables['element'];
	$element['#attributes']['type'] = 'submit';
	
	element_set_attributes($element, array('id', 'name'));
	
	$element['#attributes']['class'][] = 'button_medium';
	unset($element['#theme_wrappers']);
	return '<button' . drupal_attributes($element['#attributes']) . '>'.$element['#value'].'</button>';

}


/**
 * Assign theme hook suggestions for custom templates.
 */  
function edu_preprocess_page(&$variables, $hook) {
  if (arg(0) == 'taxonomy' && arg(1) == 'term' )
  {
    $term = taxonomy_term_load(arg(2));
    $vocabulary = taxonomy_vocabulary_load($term->vid);
	$variables['theme_hook_suggestions'][] = 'page__taxonomy_vocabulary_' . $vocabulary->machine_name;
	
  }
  
  if (isset($variables['node'])) {
    $suggest = "page__node__{$variables['node']->type}";
    $variables['theme_hook_suggestions'][] = $suggest;
  }
  
  $status = drupal_get_http_header("status");  
  if($status == "404 Not Found") {      
    $variables['theme_hook_suggestions'][] = 'page__404';
  }
  
  if (arg(0) == 'taxonomy' && arg(1) == 'term' ){
    $term = taxonomy_term_load(arg(2));
    $variables['theme_hook_suggestions'][] = 'page--taxonomy--vocabulary--' . $term->vid;
  }

}

/**
 * Define some variables for use in theme templates.
 */
function edu_process_page(&$variables) {
	global $parent_root;
	$variables['theme_path'] = $parent_root;
	// Assign site name and slogan toggle theme settings to variables.
	$variables['disable_site_name']   = theme_get_setting('toggle_name') ? FALSE : TRUE;
	$variables['disable_site_slogan'] = theme_get_setting('toggle_slogan') ? FALSE : TRUE;
	// Assign site name/slogan defaults if there is no value.
	if ($variables['disable_site_name']) {
		$variables['site_name'] = filter_xss_admin(variable_get('site_name', 'Drupal'));
	}
	if ($variables['disable_site_slogan']) {
		$variables['site_slogan'] = filter_xss_admin(variable_get('site_slogan', ''));
	}
	//dsm($variables);
}	

/**
 * Customize search form.
 */
function edu_form_alter(&$form, &$form_state, $form_id) {
	if (substr($form['#form_id'], 0, 21) == "simplenews_block_form") {
		//dsm($form);
		unset($form['mail']['#title']);
		$form['mail']['#attributes']['placeholder'] = t('Your Email');
		$form['mail']['#attributes']['id'] = 'email_newsletter';
		$form['mail'] += array('#form_id' => $form['#form_id']);
	}
	
	// We want this on a specific node type
    if ($form_id == 'comment_node_blog_form') {
		
        $form['#after_build'][] = 'edu_blog_node_form_after_build';
    }	
} 

// afterbuild function
function edu_blog_node_form_after_build($form) {
	
    // We want this on a specific field
    $form['comment_body']['und']['0']['format']['#access'] = FALSE;
	$form['author']['name']['#attributes'] = array('class'=>array('span5'));
	$form['subject']['#attributes']['class'][] = 'span5';
	$form['comment_body']['und'][0]['value']['#attributes']['class'][] = 'span7';
	$form['actions']['submit']['#value'] = t('Post Comment');
	unset($form['comment_body']['#theme_wrappers']);
	unset($form['comment_body']['und'][0]['#theme_wrappers']);
	unset($form['actions']['preview']);
	//dsm($form);
    return $form;
}

/**
 * Put Breadcrumbs in a ul li structure and add descending z-index style to each <a href> tag.
 */
function edu_breadcrumb($variables) {

 $breadcrumb = $variables['breadcrumb'];
  if (!empty($breadcrumb)) {
    // Provide a navigational heading to give context for breadcrumb links to
    // screen-reader users. Make the heading invisible with .element-invisible.
	
    $output = '';
	foreach($breadcrumb as $key => $value){
		$output .= '<li>'.$value.'<span class="divider">/</span></li>';
	}
    return $output;
  }
  
}

/**
 * Preprocess variables for the username.
 */
function edu_preprocess_username(&$variables) {
  global $theme_key;
  $theme_name = $theme_key;
  
  // Add rel=author for SEO and supporting search engines
  if (isset($variables['link_path'])) {
    $variables['link_attributes']['rel'][] = 'author';
  }
  else {
    $variables['attributes_array']['rel'][] = 'author';
  }
}

/**
 * Overrides theme_item_list().
 */
function edu_item_list($variables) {
  if (isset($variables['attributes']['class']) && in_array('pager', $variables['attributes']['class'])) {
    unset($variables['attributes']['class']);
    foreach ($variables['items'] as $i => &$item) {
      if (in_array('pager-current', $item['class'])) {
        $item['class'] = array('active');
        $item['data'] = '<a href="#">' . $item['data'] . '</a>';
      }
      elseif (in_array('pager-ellipsis', $item['class'])) {
        $item['class'] = array('disabled');
        $item['data'] = '<a href="#">' . $item['data'] . '</a>';
      }
    }
    return '<div class="pagination pagination-large pull-right">' . theme_item_list($variables) . '</div>';
  }
  return theme_item_list($variables);
}

/**
 * User CSS function. Separate from edu_preprocess_html so function can be called directly before </head> tag.
 */
function edu_user_css() {
  //echo "<!-- User defined CSS -->";
  //echo "<style type='text/css'>";
  echo theme_get_setting('user_css');
  //echo "</style>";
  //echo "<!-- End user defined CSS -->";	
}

function edu_user_js() {
  //echo '<!-- User defined JS -->';
  //echo '<script type="text/javascript">';
  echo theme_get_setting('user_js');
  //echo '</script>';
  //echo '<!-- End user defined JS -->';	
}

/**
 * Add theme META tags and style sheets to the header.
 */
function edu_preprocess_html(&$variables){
  global $parent_root;
  $variables['theme_path'] = $parent_root;
}

function edu_container($variables) {
	return $variables['element']['#children'];
}

function edu_form($variables) {
	
	if ($variables['element']['#form_id'] == "search_block_form") {
		$element = $variables['element'];
		unset($element['#theme_wrappers']['block']);
		if (isset($element['#action'])) {
			$element['#attributes']['action'] = drupal_strip_dangerous_protocols($element['#action']);
		}
		element_set_attributes($element, array('method', 'id'));
		if (empty($element['#attributes']['accept-charset'])) {
			$element['#attributes']['accept-charset'] = "UTF-8";
		}
		$element['#attributes']['class'] = array('form-search','form-inline');
		//dsm($variables);
		// Anonymous DIV to satisfy XHTML compliance.
		return '<div class="widget"><form' . drupal_attributes($element['#attributes']) . '>' . $element['#children'] . '</form></div>';
	}
	elseif( $variables['element']['#form_id'] == "comment_form"){
		$element = $variables['element'];
		unset($element['subject']);
		$output = '<form' . drupal_attributes($element['#attributes']) . '>' . $element['#children'] . '</form>';
		
		return $output;
	}
	else{
		$element = $variables['element'];
		if (isset($element['#action'])) {
			$element['#attributes']['action'] = drupal_strip_dangerous_protocols($element['#action']);
		}
		element_set_attributes($element, array('method', 'id'));
		if (empty($element['#attributes']['accept-charset'])) {
			$element['#attributes']['accept-charset'] = "UTF-8";
		}
		// Anonymous DIV to satisfy XHTML compliance.
		return '<form' . drupal_attributes($element['#attributes']) . '><div>' . $element['#children'] . '</div></form>';
	}
	
}

function edu_form_element($variables) {
	//dsm($variables['element']);	
	if ((isset($variables['element']['#name']))&&($variables['element']['#name'] == "search_block_form")) {
		//dsm($variables['element']);
		$element = $variables['element'];
		//input-medium
		return $element['#children'].'&nbsp;';
	}elseif((isset($variables['element']['#form_id']))&&(substr($variables['element']['#form_id'], 0, 21) == "simplenews_block_form")){
		$element = $variables['element'];
		return $element['#children'].'&nbsp;';
	}
	else{
		$element = &$variables['element'];
		// This is also used in the installer, pre-database setup.
		$t = get_t();
		
		// This function is invoked as theme wrapper, but the rendered form element
		// may not necessarily have been processed by form_builder().
		$element += array(
		'#title_display' => 'before',
		);
		
		// Add element #id for #type 'item'.
		if (isset($element['#markup']) && !empty($element['#id'])) {
		$attributes['id'] = $element['#id'];
		}
		// Add element's #type and #name as class to aid with JS/CSS selectors.
		$attributes['class'] = array('form-item');
		if (!empty($element['#type'])) {
		$attributes['class'][] = 'form-type-' . strtr($element['#type'], '_', '-');
		}
		if (!empty($element['#name'])) {
		$attributes['class'][] = 'form-item-' . strtr($element['#name'], array(' ' => '-', '_' => '-', '[' => '-', ']' => ''));
		}
		// Add a class for disabled elements to facilitate cross-browser styling.
		if (!empty($element['#attributes']['disabled'])) {
		$attributes['class'][] = 'form-disabled';
		}
		$output = '<div' . drupal_attributes($attributes) . '>' . "\n";
		
		// If #title is not set, we don't display any label or required marker.
		if (!isset($element['#title'])) {
		$element['#title_display'] = 'none';
		}
		$prefix = isset($element['#field_prefix']) ? '<span class="field-prefix">' . $element['#field_prefix'] . '</span> ' : '';
		$suffix = isset($element['#field_suffix']) ? ' <span class="field-suffix">' . $element['#field_suffix'] . '</span>' : '';
		
		switch ($element['#title_display']) {
			case 'before':
			case 'invisible':
			$output .= ' ' . theme('form_element_label', $variables);
			$output .= ' ' . $prefix . $element['#children'] . $suffix . "\n";
			break;
			
			case 'after':
			$output .= ' ' . $prefix . $element['#children'] . $suffix;
			$output .= ' ' . theme('form_element_label', $variables) . "\n";
			break;
			
			case 'none':
			case 'attribute':
			// Output no label and no required marker, only the children.
			$output .= ' ' . $prefix . $element['#children'] . $suffix . "\n";
			break;
		}
		
		if (!empty($element['#description'])) {
		$output .= '<div class="description">' . $element['#description'] . "</div>\n";
		}
		
		$output .= "</div>\n";
		
		return $output;
	}
	
}


function edu_form_search_block_form_alter(&$form, &$form_state) {
	$form['search_block_form']['#attributes']['class'] = array('input-medium');
}


function edu_preprocess_node(&$variables) {
    	//dsm($variables);
    	$variables['edu_theme_directory'] = base_path().path_to_theme();
}

// Add "img-responsive" class to the img tag for images uploaded
// through the images content type
function edu_field__field_image__staff($variables) {
    //dsm($variables);
    // Translate a filepath like public://somefile.txt into an accessible 
    // URL like http://example.com/sites/default/files/somefile.txt.
    $path = file_create_url($variables['items'][0]['#item']['uri']);
    
    $output = '';   
   

// Render the label, if it's not hidden.
    if (!$variables['label_hidden']) {
        //$output .= '<div class="field-label"' . $variables['title_attributes'] . '>' . $variables['label'] . ':&nbsp;</div>';
    }
    
    // Add the img-responsive class to the img tag
    $output .= '<img class="img-rounded shadow" src="';
    
    $output .= $path;
    $output .= '" />';
    return $output;
}

function edu_field__body__megamenu($variables) {
	//dsm($variables);
}

function edu_field__body__staff($variables) {
	//dsm($variables);
}