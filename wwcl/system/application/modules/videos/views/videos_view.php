<?php $this->load->view("header"); ?>
<div class="wrap">
	<?= $navigation; ?>
</div>	
<div class="wrap">
	
	<h1><?=$heading?></h1>
	
      <div id="video-archive">
       <!-- Row One Recipe -->
	   <ul class="archive-row cf">
	   		<li class="featured-video">
	   			<div class="desc">
	   				test					
	   			</div>
				<a href=""><img alt="" src="images/" width="242" height="228" border="0" /></a>
	   		</li>
			<li class="more-videos">
				<h3 class="title">
          			Near Death Experience Videos
         		</h3>
				<div class="archive-wrap">
					<ul class="archive">
						<li class="row cf">
							<div class="photo">
								<a href=""><img alt="" src="images/photo-video-th.jpg" width="40" height="41" border="0" /></a>
							</div>		
							<div class="text">
								<a href="">This is an archive title.</a> This is an archive. This is an archive. This is an archive. This is an archive.
							</div>
						</li><!--//row -->          
					</ul><!-- //archive -->
 				</div><!-- //archive-wrap -->				
			</li>
	   </ul>
   </div><!-- //video-archive-->
	
	
	
	
	
	<div id="video-links">
		
		<?=$video_list?>
		
	</div>
</div>
<?php $this->load->view("footer"); ?>