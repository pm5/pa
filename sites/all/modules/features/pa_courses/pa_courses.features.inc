<?php
/**
 * @file
 * pa_courses.features.inc
 */

/**
 * Implements hook_node_info().
 */
function pa_courses_node_info() {
  $items = array(
    'lesson' => array(
      'name' => t('教材'),
      'base' => 'node_content',
      'description' => t('「經營管理教材」的內容。'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  drupal_alter('node_info', $items);
  return $items;
}
