<?php
/**
 * @file
 * pa_admin.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function pa_admin_ctools_plugin_api($module = NULL, $api = NULL) {
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_node_info().
 */
function pa_admin_node_info() {
  $items = array(
    'book' => array(
      'name' => t('手冊'),
      'base' => 'node_content',
      'description' => t('「網站使用手冊」的內容。'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  drupal_alter('node_info', $items);
  return $items;
}
