<?php
/**
 * @file
 * EDU's Drupal theme.
 */
?>
<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="<?php print $language->language; ?>"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="<?php print $language->language; ?>"> <![endif]-->
<html lang="<?php print $language->language; ?>">
<!--<![endif]--><head>

<!-- Basic Page Needs -->
<?php print $head; ?>
<meta name="author" content="Ansonika & Sowailem ">
<!-- Favicons-->
<link rel="shortcut icon" href="<?php echo $theme_path; ?>/img/favicon.ico" type="image/x-icon"/>
<link rel="apple-touch-icon" type="image/x-icon" href="<?php echo $theme_path; ?>/img/apple-touch-icon-57x57-precomposed.png">
<link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="<?php echo $theme_path; ?>/img/apple-touch-icon-72x72-precomposed.png">
<link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="<?php echo $theme_path; ?>/img/apple-touch-icon-114x114-precomposed.png">
<link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="<?php echo $theme_path; ?>/img/apple-touch-icon-144x144-precomposed.png">

<!-- Mobile Specific Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title><?php print $head_title; ?></title>
<?php print $styles; ?>
<?php print $scripts; ?>

<?php edu_user_css();?>

<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->


<!--[if IE 7]>
  <link rel="stylesheet" href="<?php echo $theme_path; ?>/font-awesome/css/font-awesome-ie7.min.css">
<![endif]-->
	
</head>
<body class="<?php print $classes; ?>"<?php print $attributes;?>>
<!--[if !IE]><!--><script>if(/*@cc_on!@*/false){document.documentElement.className+=' ie10';}</script><!--<![endif]--> <!-- Border radius fixed IE10-->
	<?php print $page_top; ?>
	<?php print $page; ?>
	<?php print $page_bottom; ?>
	
	
	<?php edu_user_js();?>
</body>
</html>