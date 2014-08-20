
<div class="main-container container">
  <div class="row-fluid">
    <section class="<?php print _bootstrap_content_span($columns); ?>"> 
<article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

<script >
var seconds = 600;
function secondPassed() {
    var minutes = Math.round((seconds - 30)/60);
    var remainingSeconds = seconds % 60;
    if (remainingSeconds < 10) {
        remainingSeconds = "0" + remainingSeconds;  
    }
    document.getElementById('countdown').innerHTML = minutes + ":" + remainingSeconds;
    if (seconds == 0) {
        clearInterval(countdownTimer);
        document.getElementById('countdown').innerHTML = "They Are Ready!";
    } else {
        seconds--;
    }
}
var countdownTimer = setInterval('secondPassed()', '<?php print $node->field_count_down['und'][0]['value']; ?>');
</script>

<?php
if($node->field_clock_position['und']['0']['value']==1):
	$clocposition = 'positionTop';
elseif($node->field_clock_position['und'][0]['value']==2):
	$clocposition = 'positionBottom';
endif;
?>

<div id="countdown" class="<?php print $clocposition; ?>"></div>
	<header>
		<?php 
		// Header text or image
		if($node->field_header_type['und']['0']['value']==0):
			print '<h2 class="header">' . $node->field_header_text['und'][0]['value'] . '</h2>';
		elseif($node->field_header_type['und']['0']['value']==1):
			print '<div class="header-background">'. '<img src="'. $node->field_header_image_url['und'][0]['value'].'"/>' . '</div>';
		endif;
		?>
	</header>

	<div class="row-fluid">
		<div class="span8 left-content">
			<div class="body-content"><?php print $node->body['und'][0]['value']; ?></div>
		</div>
		<div class="span4">
			<form id="webform" class=" <?php print $node->field_form_style['und'][0]['value']; ?>" accept-charset="utf-8" action="https://app.getresponse.com/add_contact_webform.html?u=Z5Ft"
			method="post">
				<div id="WFIcenter" class="wf-body">
				
				<!--field form-->
					<div class="field">
						<?php if($node->field_show_form_header['und']['0']['value']==1):?>
						<div class="form-header"><?php print $node->field_form_header['und'][0]['value']; ?></div>
						<?php endif; ?>
						<?php if($node->field_show_form_label['und']['0']['value']==1):?><label class="field-label">Name:</label><?php endif; ?>
						<input class="field-name" type="text" name="name" placeholder="<?php print $node->field_name_preset_text['und'][0]['value']; ?>">
						<br>
						<?php if($node->field_show_form_label['und']['0']['value']==1):?><label class="field-label">Email:</label><?php endif; ?>
						<input class="field-email" type="text" name="email" placeholder="<?php print $node->field_email_preset_text['und'][0]['value']; ?>">
					</div>
						<input type="submit" class="btn btn-large btn-warning" name="submit" value="<?php print $node->field_submit_text['und'][0]['value']; ?>" onclick="trackEvent('submit-<?php print $node->field_campaign_name['und'][0]['value']; ?>', 'clicked', ''); return false;"
></input>
					
					<?php if($node->field_show_form_footer['und']['0']['value']==1):?>
					<div class="form-footer-text">
						<?php print $node->field_form_footer['und'][0]['value']; ?>
					</div>
					<?php endif; ?>
					
					<?php if($node->field_show_private_policy['und']['0']['value']==1):?>
					<div class="privacy">
						<a class="wf-privacy wf-privacyico" href="<?php print $node->field_private_policy_link['und'][0]['value']; ?>"
						target="_blank"><?php print $node->field_private_policy_text['und'][0]['value']; ?></a>
					</div>
					<?php endif; ?>
				<!--end field form-->
				
				
					<ul class="wf-sortable" id="wf-sort-id">
						<li class="wf-counter" rel="undefined" style="display:  none !important;">
							<div class="wf-contbox">
								<div>
									<span style="padding: 4px 6px 8px 24px; background: url(https://app.getresponse.com/images/core/webforms/countertemplates.png) 0% 0px no-repeat;"
									class="wf-counterbox">
										<span class="wf-counterboxbg" style="padding: 4px 12px 8px 5px; background: url(https://app.getresponse.com/images/core/webforms/countertemplates.png) 100% -36px no-repeat;">
											<span class="wf-counterbox0" style="padding: 5px 0px;">subscribed:</span>
											<span style="padding: 5px;" name="https://app.getresponse.com/display_subscribers_count.js?campaign_name=willson&var=0"
											class="wf-counterbox1 wf-counterq">0</span>
											<span style="padding: 5px 0px;" class="wf-counterbox2"></span>
										</span>
									</span>
								</div>
							</div>
						</li>
						<li class="wf-captcha" rel="undefined" style="display:  none !important;">
							<div class="wf-contbox wf-captcha-1" id="wf-captcha-1" wf-captchaword="Enter the words above:"
							wf-captchasound="Enter the numbers you hear:" wf-captchaerror="Incorrect please try again"></div>
						</li>
					</ul>
				</div>
				<input type="hidden" name="webform_id" value="<?php print $node->field_webform_id['und'][0]['value']; ?>" />
			</form>
		</div>
	</div>
	
	<!-- Place somewhere in the <body> of your page -->
	<div class="flexslider">
	  <ul class="slides">
		<li><img src="<?php print base_path( )?><?php print path_to_theme() ?>/slide-image/before-after-01.jpg" /></li>
		<li><img src="<?php print base_path( )?><?php print path_to_theme() ?>/slide-image/before-after-02.jpg" /></li>
		<li><img src="<?php print base_path( )?><?php print path_to_theme() ?>/slide-image/before-after-03.jpg" /></li>
		<li><img src="<?php print base_path( )?><?php print path_to_theme() ?>/slide-image/before-after-03.jpg" /></li>
		<li><img src="<?php print base_path( )?><?php print path_to_theme() ?>/slide-image/before-after-02.jpg" /></li>
		<li><img src="<?php print base_path( )?><?php print path_to_theme() ?>/slide-image/before-after-01.jpg" /></li>
		<!-- items mirrored twice, total of 12 -->
	  </ul>
	</div>

    <footer>
					
	<?php if($node->field_show_copyright['und']['0']['value']==1):?>
	<div class="copyright">
		<?php print $node->field_copyright_text['und'][0]['value']; ?>
	</div>
	<?php endif; ?><br>
	
	<div class="footer-menu-list">
		<a href="#" target="_blank">
			Home</a> |
		<?php if($node->field_show_protect_privacy['und']['0']['value']==1):?>
		<a target="_blank" href="#">
			<?php print $node->field_protect_privacy_text['und'][0]['value']; ?></a> |
		<?php endif; ?>
		
		<?php if($node->field_show_disclaim['und']['0']['value']==1):?>
		<a target="_blank" href="<?php print $node->field_disclaim_link['und'][0]['value']; ?>">
			<?php print $node->field_disclaim_text['und'][0]['value']; ?></a>
		<?php endif; ?>
	</div>
	</footer>
</article> <!-- /.node -->
<script type="text/javascript">
    jQuery(document).ready(function(){
	  jQuery('body').addClass('style1');
	});
</script>
</div>
</div>
</div>
