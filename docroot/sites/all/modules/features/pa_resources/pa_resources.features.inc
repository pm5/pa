<?php
/**
 * @file
 * pa_resources.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function pa_resources_ctools_plugin_api($module = NULL, $api = NULL) {
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_image_default_styles().
 */
function pa_resources_image_default_styles() {
  $styles = array();

  // Exported image style: pa_resource_header.
  $styles['pa_resource_header'] = array(
    'label' => '相關網站圖片',
    'effects' => array(
      2 => array(
        'name' => 'image_scale_and_crop',
        'data' => array(
          'width' => 960,
          'height' => 200,
        ),
        'weight' => 1,
      ),
    ),
  );

  return $styles;
}

/**
 * Implements hook_node_info().
 */
function pa_resources_node_info() {
  $items = array(
    'resource' => array(
      'name' => t('相關網站'),
      'base' => 'node_content',
      'description' => t('「相關網站」底下的內容。會條列在下拉式選單中。'),
      'has_title' => '1',
      'title_label' => t('標題'),
      'help' => '',
    ),
  );
  drupal_alter('node_info', $items);
  return $items;
}
