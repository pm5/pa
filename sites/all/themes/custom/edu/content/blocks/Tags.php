<hr>
<div class="widget tags">
				<h4>Tags</h4>
<?php
	$tags = array();
	
	$url = explode("/", current_path());
	
	$node = node_load($url[1]);
	if ($node != NULL) {
		$field = $node->field_tags['und'];
		foreach ($field as $term) {
			$taxonomy_term = taxonomy_term_load($term['tid']);
?>

				<a href="<?php print url('taxonomy/term/'.$taxonomy_term->tid); ?>"><?php print $taxonomy_term->name; ?></a>
<?php
		}
	}
?>
			</div>