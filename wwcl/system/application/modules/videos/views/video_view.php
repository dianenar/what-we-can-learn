<?php $this->load->view("header"); ?>
<div class="wrap">
	<?= $navigation; ?>
</div>	
<div class="wrap">
	<h1><?=$this->video_model->getVideoTitle($video_id);?></h1>
	
	<div class="cf" id="video-player">
       <div class="video">
       <!--[if !IE]> <-->
		<object type="application/x-shockwave-flash" width="640" height="385" data="http://www.youtube.com/v/<?=$video_id?>&rel=0&autoplay=0">
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
       <!-- //video -->

       <div class="content">
        <div class="tools cf">
         <div class="email-video"><a href="<?=site_url()?>videos/video/<?=$this->uri->segment(3);?>">Link to this Video</a></div>
         <div class="video-archive"><a href="<?=site_url()?>videos">Video Archive</a></div>
        </div>
        <div id="related-videos">
         <div class="title">Related Videos</div>
         <div class="related-wrap">
          <div class="related">
           <?=$this->video_model->getRelatedVideos($video_id)?>
          </div><!-- //related -->
         </div><!-- //related-wrap -->       
         
        </div><!-- //related-videos -->
       </div><!-- //content -->
      </div>	
	
	
	<div id="video-player">
		

		
	</div>
	<div id="video-links">
		
	</div>
</div>
<?php $this->load->view("footer"); ?>