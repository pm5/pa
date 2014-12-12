    	<h3>Browse Courses</h3>
            <ul class="submenu-col">
                <li><a href="/all-courses" <?php $url_string = current_path(); if( url($url_string) == "/all-courses"){ print 'id="active"'; } ?>>All Courses</a></li>
					<?php
						$vocabulary = taxonomy_vocabulary_machine_name_load('course');
						$tree = taxonomy_get_tree($vocabulary->vid);
						//$url = explode("/", current_path());
						foreach ($tree as $key => $term){
							$course = taxonomy_term_load($term->tid);
							$count = db_query("SELECT COUNT(nid) FROM {taxonomy_index} WHERE tid = :aid", array(':aid' => $course->tid) )->fetchField();

?>
                <li><a href="<?php print url('taxonomy/term/' . $course->tid); ?>" <?php if($url_string == 'taxonomy/term/' .$course->tid ){ print 'id="active"'; } ?>><?php print $course->name; ?> (<?php print $count; ?>)</a></li>
<?php

}
?>
            </ul>
