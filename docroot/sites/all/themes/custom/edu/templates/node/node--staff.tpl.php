
        <div id="node-<?php print $node->nid; ?>" class="strip-staff <?php print $classes; ?>" <?php print $attributes; ?>>
				<div class="row">
					<div class="span2 pic-teacher">
						<div class="borders">
							<!-- img src="<?php if(isset($node->field_image['und'][0]['uri'])){ print file_create_url($node->field_image['und'][0]['uri']); } ?>" alt="" class=" img-rounded" -->
							<?php 
								print render($content['field_image']);
							?>
						</div>
					</div>
					<div class="span5">
						<h4><?php print $title; ?> <em>
						<?php 
							print render($content['field_position']);
						?></em></h4>
						<?php 
							hide($content['field_phone']);
							hide($content['field_social_networks']);
							print render($content);   
						?>
						<ul class="data-staff">
							<li><i class="icon-phone"></i> 
							<?php 
								print render($content['field_phone']); 
							?></li>
							<?php 
								print render($content['field_social_networks']);
							?>
						</ul>
					</div>
				</div>
			</div>
