<li id="node-<?php print $node->nid; ?>"  class="row <?php print $classes; ?>" <?php print $attributes; ?>>
	<div class="date-news"><strong><?php print date('d',$created); ?></strong><?php print date('M Y',$created); ?></div>
	<div class="span6">
		<h5><a href="#<?php //print url($node_url); ?>"><i class="icon-file"></i><?php print $title; ?></a></h5>
		<p><?php print render($content); ?></p>
	</div>
</li>
