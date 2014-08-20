
<div class="main-container container">
  <div class="row-fluid">
    <section class="<?php print _bootstrap_content_span($columns); ?>"> 
      <?php 
	  if ($is_front)
		print '<img class="home-page-image" src="http://www.betterlife247.com/sites/all/themes/Squeezepage/css/image/website-maintenance.jpg">';
	  else 
		print render($page['content']); 
	  ?>
    </section>
  </div>
</div>