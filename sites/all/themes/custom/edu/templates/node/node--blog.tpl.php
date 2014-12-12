
<div id="node-<?php print $node->nid; ?>" class="post <?php print $classes; ?>" <?php print $attributes; ?>>
		<h2><a href="<?php print drupal_get_path_alias($node_url); ?>"><?php print $title; ?></a></h2>
		
		<?php //if (render($content['field_image'])) : ?>
			<?php print render($content['field_image']); ?>
		<?php //endif; ?>
		<div class="post_info clearfix">
			<div class="post-left">
				<ul>
					<li><i class="icon-calendar-empty"></i><?php print t('On'); ?> <span><?php print date('d M Y',$created); ?></span></li>
					<li><i class="icon-user"></i><?php print t('By'); ?> <a href="<?php print '/user/'.$uid; ?>"><?php $author = user_load($uid); print $author->name; ?></a></li>
					
					<?php if (render($content['field_tags'])): ?>
					<li>
						<i class="icon-tags"></i><?php print t('Tags'); ?>
						<?php print render($content['field_tags']); ?>
					</li>
					<?php endif; ?>
				</ul>
			</div>
			<div class="post-right"><i class="icon-comments"></i><a href="#"><?php print $comment_count; ?> </a><?php print t('Comments'); ?></div>
		</div>
		<p><?php 
				// Hide comments, tags, and links now so that we can render them later.
				//hide($content['field_tags']);
				//hide($content['field_image']);
				hide($content['comments']);
				hide($content['links']);
				print render($content); ?></p>
		<!-- p><a href="blog_post.html" class="button_medium">Read more</a></p -->
	</div>
	<?php print render($content['comments']); ?>