<?php
/**
 * @file
 * pa_courses.features.taxonomy.inc
 */

/**
 * Implements hook_taxonomy_default_vocabularies().
 */
function pa_courses_taxonomy_default_vocabularies() {
  return array(
    'course' => array(
      'name' => '課程類別',
      'machine_name' => 'course',
      'description' => '「經營管理教材」的課程類別。',
      'hierarchy' => 1,
      'module' => 'taxonomy',
      'weight' => 0,
      'rdf_mapping' => array(
        'rdftype' => array(
          0 => 'skos:ConceptScheme',
        ),
        'name' => array(
          'predicates' => array(
            0 => 'dc:title',
          ),
        ),
        'description' => array(
          'predicates' => array(
            0 => 'rdfs:comment',
          ),
        ),
      ),
    ),
  );
}
