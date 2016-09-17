<header>
	<div class="container">
   	  <div class="row">
    	<div class="span4" id="logo">
			<?php if ($logo): ?>
				<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
					<img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"/>
				</a>
				<!-- /.logo -->
            <?php endif; ?>
		</div><!-- End span4-->
        <div class="span8">
			<?php print render($page['header']); ?>
        </div><!-- End span8-->
        </div><!-- End row-->
    </div><!-- End container-->
</header><!-- End Header-->

<nav>
	<?php print render($page['megamenu']); ?>
</nav><!-- /navbar -->

<?php print render($page['page_space']); ?>

<div class="container">
	<div class="row">
		<?php if (!$is_front): ?>
		<?php //print render($title_prefix); ?>
		  <?php if ($title): ?>
			<h1 class="title span12" id="page-title">
			  <?php print $title; ?>
			</h1>
		<?php //print render($title_suffix); ?>
		<?php endif; ?>


		<div class="span12">
			<ul class="breadcrumb">
				<?php if ($breadcrumb): print $breadcrumb; endif;?>
				<li class="active"><?php print $title; ?></li>
			</ul>

		</div>
		<?php endif; ?>
		<!-- =========================Start Col left section ============================= -->
		<aside class="span4 ">
			<?php if (!empty($page['sidebar_left_top'])) : ?>
				<div class="col-left">
					<div class="sidebar">
						<?php print render($page['sidebar_left_top']); ?>
					</div><!-- end siedebar  -->
				</div><!--End col left -->
				<br/>
			<?php endif; ?>

			<?php print render($page['sidebar_left']); ?>
		</aside>

		<!-- =========================Start Col right section ============================= -->
		<section class="span8  ">
				<?php print $messages; ?>
				<?php if ($tabs): ?>
					<?php print render($tabs); ?>
				<?php endif; ?>
				<?php print render($page['help']); ?>
				<?php if ($action_links): ?>
					<ul class="action-links">
					  <?php print render($action_links); ?>
					</ul>
					<br/>
				<?php endif; ?>

			<div class="col-right">

				<?php if (isset($page['before_content'])) : ?>
					<?php print render($page['before_content']); ?>
				<?php endif; ?>
					<?php
						if(isset($page['content']['system_main']['nodes'])){
						$nodes = $page['content']['system_main']['nodes'];
						}

						unset($page['content']['system_main']['nodes']);
						unset($page['content']['system_main']['pager']);
						//print render($page['content']);
						$term = $page['content']['system_main']['term_heading']['term'];
						//dsm($term);
						unset($page['content']['system_main']['term_heading']['term']);
					?>

								<div class="main-img">
									<!-- img src="/sites/all/themes/custom/edu/img/pic-4.jpg" alt="" -->
									<?php print render($term['field_image']); ?>
									<p class="lead"><?php print render($term['field_headline']); ?> </p>
								</div>


								<?php
									if(!empty($nodes)):
									foreach($nodes as $key => $node):
										$lesson = node_load($key);
										if($lesson):
								?>
								<div class="strip-lessons">
								<div class="row">
									<div class="span2">
                  <div class="box-style-one borders">
                    <?php print t('<a href="@url"><img src="@imgUrl" alt="@instructor" class="picture"><h5>@instructor</h5></a>', array(
                      '@url' => url('node/' . $lesson->nid),
                      '@imgUrl' => url(file_create_url($lesson->field_image['und'][0]['uri'])),
                      '@instructor' => $lesson->field_instructor['und'][0]['value']
                      ));
                    ?>
                  </div>
									</div>
									<div class="span5">
										<h4><?php print $lesson->title; ?></h4>
										<p><?php print render($lesson->body); ?></p>
										<ul class="data-lessons">
                      <li><i class="icon-file"></i><?php print t('<a href="@url">課程內容</a>', array('@url' => url('node/' . $lesson->nid))); ?></li>
											<!-- <li><i class="icon-film"></i><a class="fancybox-media" href="<?php print $lesson->field_video['und'][0]['value']; ?>">Play video</a></li>
											<li><i class="icon-cloud-download"></i><a href="<?php print $lesson->field_prospect['und'][0]['value']; ?>">Donwload prospect</a></li> -->
										</ul>
									</div>
								</div>
								</div><!-- End Strip course -->
								<?php endif; endforeach; ?>

								<div class="widget borders widget-table">

											<div class="widget-header">
												<h5>Course detail</h5>
											</div> <!-- .widget-header -->

											<div class="widget-content">
												<table class="table table-bordered table-striped">

													<thead>
													<tr>
														<th>Lesson</th>
														<th>Instructor</th>
														<th>Time</th>
														<th>Room</th>
													</tr></thead>

												<tbody>
												<?php
													foreach($nodes as $key => $node):
														$lesson = node_load($key);
														if($lesson):
												?>
												<tr>
													<td><?php print $lesson->title; ?> </td>
													<td><?php print $lesson->field_instructor['und'][0]['value']; ?></td>
													<td><?php print $lesson->field_time['und'][0]['value']; ?></td>
													<td><?php print $lesson->field_room['und'][0]['value']; ?></td>
												</tr>
												<?php endif; endforeach; ?>

											</tbody></table>

											</div> <!-- .widget-content -->

								</div> <!-- /widget -->


								<p class="text-center"><a href="/contact" class="button_large">Apply now </a></p>
							   <?php endif; ?>
						<!-- ---------------------------- -->
				<?php if (isset($page['after_content'])) : ?>
					<?php print render($page['after_content']); ?>
				<?php endif; ?>
			</div><!-- end col right-->
		</section>
	</div><!-- end row-->
</div> <!-- end container-->

<footer>
	<div class="container">
		<div class="row">
			<div class="span4" id="brand-footer">
				<?php if (!empty($page['footer_left'])) : ?>
					<?php print render($page['footer_left']); ?>
				<?php endif; ?>
			</div>
			<div class="span4" id="contacts-footer">
				<?php if (!empty($page['footer_middel'])) : ?>
					<?php print render($page['footer_middel']); ?>
				<?php endif; ?>
			</div>
			<div class="span4" id="quick-links">
				<?php if (!empty($page['footer_right'])) : ?>
					<?php print render($page['footer_right']); ?>
				<?php endif; ?>
			</div>

		</div>
	</div>
</footer><!-- End footer-->
<div id="toTop"><?php print t('Back to Top'); ?></div>
