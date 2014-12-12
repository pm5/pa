<hr>
<h3>Latest news</h3>
<div class="widget">
		<ul class="latest_news">
<?php
        $recent_posts = array();
	$query = db_select('node', 'n')
      ->fields('n', array('nid', 'title', 'created'))
      ->condition('type', 'news')
      ->condition('status', 1)
      ->orderBy('created', 'DESC')
      ->range(0,2)
	  ->execute();

	foreach ($query as $post) {
?>
                    <li>
                    	<i class="icon-calendar-empty"></i> <?php print date('jS F, Y',$post->created); ?> <div><a href="<?php print url('node/'.$post->nid); ?>"><?php print $post->title; ?></a></div>
                    </li>
<?php
	}

?>
		</ul>
	</div>