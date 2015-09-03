<?php
/**
 * @file
 * pa_courses.context.inc
 */

/**
 * Implements hook_context_default_contexts().
 */
function pa_courses_context_default_contexts() {
  $export = array();

  $context = new stdClass();
  $context->disabled = FALSE; /* Edit this to true to make a default context disabled initially */
  $context->api_version = 3;
  $context->name = 'course';
  $context->description = '「經營管理教材」內容';
  $context->tag = 'pa';
  $context->conditions = array(
    'path' => array(
      'values' => array(
        'course/*' => 'course/*',
        'all-courses' => 'all-courses',
      ),
    ),
  );
  $context->reactions = array();
  $context->condition_mode = 0;

  // Translatables
  // Included for use with string extractors like potx.
  t('pa');
  t('「經營管理教材」內容');
  $export['course'] = $context;

  return $export;
}
