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
					<?php print render($page['content']); ?> 
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
