<div class="megamenu_container">
<a id="megamenu-button-mobile" href="#">Menu</a><!-- Menu button responsive-->
    
	<!-- Begin Mega Menu Container -->
	<ul class="megamenu">
		<!-- Begin Mega Menu -->
		<li><a href="#" class="drop-down">Courses</a>
		<!-- Begin Item -->
		<div class="drop-down-container">
			<div class="row">
            
				<div class="span3">
<?php
$alias = "megamenu/quick-links";
$path = drupal_lookup_path("source", $alias);
$node = menu_get_object("node", 1, $path);
$body = field_view_field('node', $node, 'body');
print render($body);
?>
				</div>
                
				<div class="span9">
					
					<?php
						$vocabulary = taxonomy_vocabulary_machine_name_load('course');
						$tree = taxonomy_get_tree($vocabulary->vid);
						$col = 3;
						foreach ($tree as $key => $term){
							$course = taxonomy_term_load($term->tid);
							$count = db_query("SELECT COUNT(nid) FROM {taxonomy_index} WHERE tid = :aid", array(':aid' => $course->tid) )->fetchField();
							
							if($col == 3) {
					?>
					<div class="row">
					<?php
							}
					?>
						<div class="span3">
							<h5><a href="<?php print url('taxonomy/term/' . $course->tid); ?>"><i class="icon-book"></i><?php print $course->name; ?></a> (<?php print $count; ?>)</h5>
							<p><?php print $course->description; ?></p>
							<p><a href="<?php print url('taxonomy/term/' . $course->tid); ?>" class="button_red_small">Read more</a></p>
						</div>
					<?php
                                                        --$col;
							if($col == 0) {
								$col = 3;
					?>
					</div><!-- End row -->
					<?php							
						} }
                                                if($col != 0){ print '</div><!-- End row -->'; }
					?>
                                 
				</div><!-- End span9 -->
			</div><!-- End row -->
		</div><!-- End Item Container -->
		</li><!-- End Item -->
        
		<li><a href="#" class="drop-down">School &amp; Academics</a>
		<!-- Begin Item -->
		<div class="drop-down-container">
<?php
$alias = "megamenu/school-academics";
$path = drupal_lookup_path("source", $alias);
$node = menu_get_object("node", 1, $path);
$body = field_view_field('node', $node, 'body');
print render($body);
?>        
			
		</div><!-- End Item Container -->
		</li><!-- End Item -->
        
		<li><a href="#" class="drop-down">About</a>
		<!-- Begin Item -->
		<div class="drop-down-container">
        
			<div class="row">
            
				<div class="span3">
<?php
$alias = "megamenu/quick-links";
$path = drupal_lookup_path("source", $alias);
$node = menu_get_object("node", 1, $path);
$body = field_view_field('node', $node, 'body');
print render($body);
?>
				</div>
                
                    <div class="span9">
                        <ul class="tabs">
                            <li><a class="active" href="#section-1">Staff</a></li>
                            <li><a href="#section-2">History</a></li>
                        </ul>
                        
                        <ul class="tabs-content">
                        
                            <li class="active" id="section-1">
                                                       <div class="row">
                            				<?php
								$query = db_select('node', 'n')
									->fields('n', array('nid'))
									->condition('type', 'staff')
									->condition('status', 1)
									->orderBy('created', 'DESC')
                                                                        ->range(0,3)
									->execute();
								
								foreach ($query as $node) {
									$staff = node_load($node->nid);
									
							?>
                                <div class="span3">
                                    <p><?php $body = field_view_field('node', $staff, 'field_image'); print render($body); ?></p>
                                    <h5><?php print $staff->title; ?> <em><?php $body = field_view_field('node', $staff, 'field_position'); print render($body); ?></em></h5>
                                    <?php $body = field_view_field('node', $staff, 'body'); print render($body); ?>
                                    <p><a href="/staff" class="button_red_small" title="staff">Read more</a></p>
                                </div>
							<?php
								}
							?>
							</div><!-- End row -->
                            </li>
                            
                            <li id="section-2">
                            <?php
$alias = "megamenu/history";
$path = drupal_lookup_path("source", $alias);
$node = menu_get_object("node", 1, $path);
$body = field_view_field('node', $node, 'body');
print render($body);
?>
                             
                            </li>
                            
                        </ul><!-- End tabs-->
                    </div><!-- End span9 -->

			</div><!-- End row -->
		</div><!-- End Item Container -->
		</li><!-- End Item -->
        
		<li><a href="#" class="drop-down">Pages</a>
		<!-- Begin Item -->
		<div class="drop-down-container" id="icon-menu">
<?php
$alias = "megamenu/pages";
$path = drupal_lookup_path("source", $alias);
$node = menu_get_object("node", 1, $path);
$body = field_view_field('node', $node, 'body');
print render($body);
?>
		</div><!-- End Item Container -->
		</li><!-- End Item -->
        
                <!-- Begin Item -->
		<li>
                          <a href="/blog" class="nodrop-down">Blog</a>
                </li><!-- End Item -->
                <li><a href="#" class="drop-down">Contacts</a>
		<!-- Begin Item -->
		<div class="drop-down-container">
<?php
$alias = "megamenu/contacts";
$path = drupal_lookup_path("source", $alias);
$node = menu_get_object("node", 1, $path);
$body = field_view_field('node', $node, 'body');
print render($body);
?>
		</div><!-- End Item Container -->
		</li><!-- End Item -->
	</ul><!-- End Mega Menu -->
</div>