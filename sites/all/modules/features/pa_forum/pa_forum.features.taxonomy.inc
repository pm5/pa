<?php
/**
 * @file
 * pa_forum.features.taxonomy.inc
 */

/**
 * Implements hook_taxonomy_default_vocabularies().
 */
function pa_forum_taxonomy_default_vocabularies() {
  return array(
    'forum' => array(
      'name' => '討論區',
      'machine_name' => 'forum',
      'description' => '新增、修改討論區。',
      'hierarchy' => 0,
      'module' => 'forum',
      'weight' => -10,
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
