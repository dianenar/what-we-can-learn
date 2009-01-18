<?php $this->load->view("header"); ?>
<div class="wrap">
	<?= $navigation; ?>
</div>	
<div class="wrap">	
	<h1><?=$heading?></h1>	
    <div id="video-archive">    	
		<?=$this->video_model->getVideosByCategory(1);?>		
		<?=$this->video_model->getVideosByCategory(2);?>	
 	</div><!-- //video-archive-->
</div>
<?php $this->load->view("footer"); ?>