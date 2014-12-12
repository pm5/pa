<div class="main-img">
				<img src="/sites/all/themes/custom/edu/img/staff.jpg" alt="">
				<p class="lead">Tibique dolores adversarium ne vel. At vide errem duo, vis luptatum menandri ullamcorper id.</p>
			</div>
			<p>
				Lorem ipsum dolor sit amet, elitr nullam ei duo. Duo ut omnes scribentur. <strong>Vim ne quas invidunt intellegam</strong>, quo docendi blandit electram ei, vel ex omittam detracto philosophia. Ei nam reque etiam, possit eripuit ad vel. Aperiri deserunt ea cum. Eam animal principes neglegentur cu, facer audiam forensibus his ex. Tibique dolores adversarium ne vel. At vide errem duo, vis luptatum menandri ullamcorper id. Duo cu <a href="#">tractatos interesset</a>, at usu soluta tibique principes. Ei cum dicam suavitate, eum ex erant homero mandamus, his te albucius platonem mediocritatem.
			</p>
			<hr>

<?php

$build = array();
	$query = db_select('node', 'n')->extend('PagerDefault');
	$nids = $query
		->fields('n', array('nid', 'sticky', 'created'))
		->condition('type', 'staff')
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

