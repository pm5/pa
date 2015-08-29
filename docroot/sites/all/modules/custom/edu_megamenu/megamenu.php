<div class="megamenu_container">
<a id="megamenu-button-mobile" href="#">Menu</a><!-- Menu button responsive-->

  <!-- Begin Mega Menu Container -->
  <ul class="megamenu">
    <!-- Begin Mega Menu -->
    <!-- Begin Item -->
    <li>
      <a href="/news" class="nodrop-down">最新消息</a>
    </li>
    <!-- End Item -->

    <li><a href="#" class="drop-down">保護區最佳實務</a>
    <!-- Begin Item -->
    <div class="drop-down-container">
<?php
$alias = "megamenu/case";
$path = drupal_lookup_path("source", $alias);
$node = menu_get_object("node", 1, $path);
$body = field_view_field('node', $node, 'body');
print render($body);
?>
    </div><!-- End Item Container -->
    </li><!-- End Item -->

    <li><a href="#" class="drop-down">經營管理教材</a>
    <!-- Begin Item -->
    <div class="drop-down-container">
      <div class="row">
        <div class="span3">
<?php
$alias = "megamenu/courses";
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
              if ($col == 3) {
          ?>
          <div class="row">
          <?php
              }
          ?>
            <div class="span3">
              <h5><a href="<?php print url('taxonomy/term/' . $course->tid); ?>"><i class="icon-book"></i><?php print $course->name; ?></a> (<?php print $count; ?>)</h5>
              <p><?php print $course->description; ?></p>
              <p><a href="<?php print url('taxonomy/term/' . $course->tid); ?>" class="button_red_small">瞭解更多</a></p>
            </div>
          <?php
              --$col;
              if ($col == 0) {
                $col = 3;
          ?>
          </div><!-- End row -->
          <?php
              }
            }
            //if ($col != 0) { print '</div><!-- End row -->'; }
          ?>
        </div><!-- End span9 -->
      </div><!-- End row -->
    </div><!-- End Item Container -->
    </li><!-- End Item -->

    <!-- Begin Item -->
    <li>
      <a href="/story" class="nodrop-down">國際交流</a>
    </li>
    <!-- End Item -->

    <li><a href="#" class="drop-down">相關網站</a>
    <!-- Begin Item -->
    <div class="drop-down-container" id="icon-menu">
      <div class="row">
        <div class="span3">
<?php
$alias = "megamenu/link";
$path = drupal_lookup_path("source", $alias);
$node = menu_get_object("node", 1, $path);
$body = field_view_field('node', $node, 'body');
print render($body);
?>
        </div>
        <div class="span9">
          <div class="row">
<?php
$query = new EntityFieldQuery();
$query
  ->entityCondition('entity_type', 'node')
  ->entityCondition('bundle', 'resource')
  ->propertyCondition('status', 1);
$result = $query->execute();
$nids = array_keys($result['node']);
$nodes = node_load_multiple($nids);
?>
            <?php foreach ($nodes as $node) : ?>
            <div class="span3"><a href="/resource/<?php echo $node->nid; ?>" title="<?php echo $node->title; ?>"><i class="icon-group icon-2x"></i><?php echo $node->title; ?><?php print render(field_view_field('node', $node, 'field_image', array('label' => 'hidden'))); ?></a></div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div><!-- End Item Container -->
    </li><!-- End Item -->

    <!-- Begin Item -->
    <li>
      <a href="/forum" class="nodrop-down">討論區</a>
    </li><!-- End Item -->

    <!-- Begin Item -->
    <li>
      <a href="/en/about" class="nodrop-down">English</a>
    </li><!-- End Item -->

  </ul><!-- End Mega Menu -->
</div>

