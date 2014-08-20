<!DOCTYPE html>
<html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces;?>>
<head profile="<?php print $grddl_profile; ?>">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <!-- HTML5 element support for IE6-8 -->
  <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <?php   
		$variation = $_GET['var'];
		if($variation == null)
			$variation = 1;
		if($variation == 1): ?>
  <?php endif; ?>
  <?php print $scripts; ?>  
  <script src="<?php print base_path( )?><?php print path_to_theme() ?>/js/jquery.validate.js"></script>
  <script src="<?php print base_path( )?><?php print path_to_theme() ?>/js/jquery.flexslider.js"></script>
  <script>
	jQuery().ready(function() {
	// validate signup form on keyup and submit
	jQuery("#webform").validate({
		rules: {
			name: {
				required: true,
				minlength: 3
			},
			email: {
				required: true,
				email: true
			}
		},
		messages: {
			name: {
				required: "Please enter a username"
			},
			email: {
				required: "Please enter a username",
				email: "Email is abc@example.com"
			}
		}
	});
	});
	</script>
</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?> style="padding-top: 0!important;">
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>
