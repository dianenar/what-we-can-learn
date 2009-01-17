<?php $this->load->view("header"); ?>
<div class="wrap">
	<?= $navigation; ?>
</div>	
<div class="wrap">
	
	<h1><?=$heading?></h1>
	<div id="video-links">
		<?=anchor('videos/video/WOhtjodjiQE', 'First Video')?>
	</div>
</div>
<?php $this->load->view("footer"); ?>