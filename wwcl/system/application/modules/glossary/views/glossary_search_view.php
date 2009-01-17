<?php $this->load->view("header"); ?>
<div class="wrap">
	<?= $navigation; ?>
</div>	
	<div class="wrap">
    <h2><?= $title;?></h2>

    <div id="function_description"> 
	<?= $search_results;?>
	</div>
</div>
<?php $this->load->view("footer"); ?>