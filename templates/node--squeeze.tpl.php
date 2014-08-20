
<div class="main-container container">
  <div class="row-fluid">
    <section class="<?php print _bootstrap_content_span($columns); ?>"> 
<article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
<?php 
if($node->field_clock_position['und']['0']['value']==1):
	$clocposition = 'positionTop';
elseif($node->field_clock_position['und'][0]['value']==2):
	$clocposition = 'positionBottom';
endif;
?>
<header>
	<?php 
	// Header text or image
	if($node->field_header_type['und']['0']['value']==0):
		print '<h2 class="header">“' . $node->field_header_text_3['und'][0]['value'] . '”</h2>';
	elseif($node->field_header_type['und']['0']['value']==1):
		print '<div class="header-background">'. '<img src="'. $node->field_header_image_url['und'][0]['value'].'"/>' . '</div>';
	endif;
	?>
</header>

	<div class="row-fluid">
		<div class="span12 body-content">
			<div class="video-background" >
			<a href="#myModal" role="button" data-toggle="modal">
				<img class="video-image" src="<?php print $node->field_video_image_url['und'][0]['value'];?>" />
				<a class="play-icon" href="#myModal" role="button" data-toggle="modal"><img src="<?php print base_path( )?><?php print path_to_theme() ?>/css/image/va2-images/play-button.png" width="100"/></a>
			</a>
			</div>
			<a href="#myModal" class="btn btn-large btn-warning" role="button" data-toggle="modal">Click here to continue</a>
		</div>
	</div>

	<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<div class="modal-header">
		</div>
		<div class="modal-body <?php print $node->field_form_style['und'][0]['value']; ?>">
			<form id="webform" accept-charset="utf-8" action="https://app.getresponse.com/add_contact_webform.html?u=Z5Ft"
			method="post">
				<div id="WFIcenter" class="wf-body">
				
				<!--field form-->
					<div class="field">
						<?php if($node->field_show_form_header['und']['0']['value']==1):?>
						<div class="form-header"><?php print $node->field_form_header['und'][0]['value']; ?></div>
						<?php endif; ?>
						<?php if($node->field_show_form_label['und']['0']['value']==1):?><label class="field-label">Name</label><?php endif; ?>
						<input class="field-name" type="text" name="name" placeholder="<?php print $node->field_name_preset_text['und'][0]['value']; ?>">
						<br>
						<?php if($node->field_show_form_label['und']['0']['value']==1):?><label class="field-label">Email</label><?php endif; ?>
						<input class="field-email" type="text" name="email" placeholder="<?php print $node->field_email_preset_text['und'][0]['value']; ?>">
					</div>						
					<input type="submit" class="btn btn-large btn-warning" id="submit" name="submit" value="<?php print $node->field_submit_text['und'][0]['value']; ?>"></input>
					<script>
						jQuery('#submit').on('click', function() {
							if(jQuery("#webform").valid() == true)
								ga('send', 'event', '<?php print $node->field_campaign_name['und'][0]['value']; ?>', 'click', 'var1');
						});
					</script>
					
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
				<input type="hidden" name="custom_Variation" id="custom_Variation" value="var3"></input>
			</form>
		</div>
	</div>
</article> <!-- /.node -->
<script type="text/javascript">
    jQuery(document).ready(function(){
	  jQuery('body').addClass('style2');
	});
</script>
</div>
</div>
</div>
