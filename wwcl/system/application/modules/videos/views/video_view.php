<?php $this->load->view("header"); ?>
<div class="wrap">
	<?= $navigation; ?>
</div>	
<div class="wrap">
	
	<h1><?=$heading?></h1>
	<div id="video-player">
		<!--[if !IE]> <-->
		<object type="application/x-shockwave-flash" width="640" height="385" data="http://www.youtube.com/v/<?=$video_id?>&rel=0&autoplay=1">
		<!--> <![endif]-->
		<!--[if IE]>
		<object type="application/x-shockwave-flash" width="640" height="385"
		classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
		codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0">
		<![endif]-->
		<param name="movie" value="http://www.youtube.com/v/<?=$video_id?>&rel=0&autoplay=1" />
		<p>Your browser is not able to display this multimedia content.</p>
		</object>

		
	</div>
	<div id="video-links">
		<?=$video_list?>
	</div>
</div>
<?php $this->load->view("footer"); ?>