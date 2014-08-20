<article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

<?//php print krumo($node); ?>
<div id="ExitSplashMainOuterLayer">
	<div id="ExitSplashDiv" align="center">
		<iframe src="<?php print $node->field_frame_url['und'][0]['value']; ?>" width="100%" height="100%" align="middle" frameborder="0" allowfullscreen></iframe>
	</div>
</div>
<!-- /.iframe -->

<div id="popup" class="modal fade">
	<div class="close">x</div>
	<div class="popup-body">
		<h1>Your browser does not support iframes.</h1>
	</div>
</div> <!-- /.popup -->

<script>
	var showTime = <?php print $node->field_waiting_time['und'][0]['value']; ?> - 500;
	var addClassTime = <?php print $node->field_waiting_time['und'][0]['value']; ?>;
	jQuery(document).ready(function () {
		setTimeout(function(){ jQuery('#popup').show(); }, showTime);
		setTimeout(function(){ jQuery('#popup').addClass('in'); }, addClassTime);
		setTimeout(function(){ jQuery('body').append('<div class="modal-backdrop fade in"></div>'); }, addClassTime);
	});
	jQuery('#popup .close').click(function(){
		jQuery('#popup').hide().removeClass('in');
		jQuery('.node-type-frame .modal-backdrop.fade.in').remove();
	});
</script>
<script>
	var exitsplashmessage = '<?php print $node->field_exit_page_message['und'][0]['value']; ?>';
	var exitsplashpage = '<?php if($node->field_exit_confirm['und']['0']['value']==1): print $node->field_exit_page_url['und'][0]['value']; ?>';
</script>
<script src="<?php print base_path( )?><?php print path_to_theme() ?>/js/exitsplash.js"></script>
</article> <!-- /.node -->