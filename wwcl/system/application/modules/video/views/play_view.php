<?php $this->load->view("header"); ?>
<div class="wrap">
	<?= $navigation; ?>
</div>	
<div class="wrap">
	
	<h1><?=$heading?></h1>
	<div id="video-player">
		<object width="425" height="344">
			<param name="movie" value="http://www.youtube.com/v/lFQZQYaBL_U&hl=en&fs=1"></param>
			<param name="allowFullScreen" value="true"></param>
			<param name="allowscriptaccess" value="always"></param>
			<embed src="http://www.youtube.com/v/<?=$video_id?>&hl=en&fs=1" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="425" height="344"></embed>
		</object>
	</div>
	<div id="video-links">
		<?=anchor('videos/video/6sQL_w8LzSs', 'First Video')?>
	</div>
</div>
<?php $this->load->view("footer"); ?>