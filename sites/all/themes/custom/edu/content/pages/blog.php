<?php

$build = array();
	$query = db_select('node', 'n')->extend('PagerDefault');
	$nids = $query
		->fields('n', array('nid', 'sticky', 'created'))
		->condition('type', 'blog')
		->condition('status', 1)
		->orderBy('sticky', 'DESC')
		->orderBy('created', 'DESC')
		->limit(3)
		->addTag('node_access')
		->execute()
		->fetchCol();

	if (!empty($nids)) {
		$nodes = node_load_multiple($nids);
		$build += node_view_multiple($nodes,'full');
		$build['pager'] = array(
			'#theme' => 'pager',
			'#weight' => 5,
		);
	}
	else {
		drupal_set_message(t('No blog entries have been created.'));
	}

        print render($build);

?>
