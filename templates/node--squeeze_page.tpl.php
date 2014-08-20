<?php 
	$variation = $_GET['var'];
	if($variation == null)
		$variation = 1;
		
	if($variation == 1)
	{
		include 'node--squeeze_page_1.tpl.php';
	}
	else if ($variation == 2)
	{
		include 'node--squeeze_page_2.tpl.php';
	}
	else if ($variation == 3)
	{
		include 'node--squeeze_page_3.tpl.php';
	}
	else if ($variation == 4)
	{
		include 'node--squeeze_page_4.tpl.php';
	}
?>
<script>
	var exitsplashmessage = '<?php print $node->field_exit_page_message['und'][0]['value']; ?>';
	var exitsplashpage = '<?php print $node->field_exit_page_url['und'][0]['value'] . $variation ?>';
</script>

<script src="<?php print base_path( )?><?php print path_to_theme() ?>/js/exitsplash.js"></script>