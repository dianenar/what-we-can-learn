<?php $this->load->view("header"); ?>
<div class="wrap">
	<?= $navigation; ?>
</div>	
<div class="wrap">
	<h1><?=$heading?></h1>
	<div class="colums">
		<form id="function_search_form" method="post" action="<?= site_url('glossary/search');?>">
			<label for="function_name">Search by function name </label>
		    <input type="text" name="glossary_term" id="glossary_term" />
			<input type="submit" value="search" id="search_button" />
			<div id="autocomplete_choices" class="autocomplete"></div>	
		</form>	
	</div>
	
</div>
<?php $this->load->view("footer"); ?>