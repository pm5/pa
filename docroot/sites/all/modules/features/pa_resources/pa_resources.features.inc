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
    'name' => 'pa_resource_header',
    'label' => '相關網站圖片',
    'effects' => array(
      2 => array(
        'label' => '縮放和裁剪',
        'help' => '比例縮放將會保持原始圖片的寬高比，然後裁切最大邊。這通常對建立不拉伸的完美的方形縮略圖是最有用的。',
        'effect callback' => 'image_scale_and_crop_effect',
        'dimensions callback' => 'image_resize_dimensions',
        'form callback' => 'image_resize_form',
        'summary theme' => 'image_resize_summary',
        'module' => 'image',
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
      'description' => '',
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  drupal_alter('node_info', $items);
  return $items;
}
