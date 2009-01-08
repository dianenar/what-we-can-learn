<?php $this->load->view("header"); ?>
<div class="wrap">
	<?= $navigation; ?>
</div>	
<div class="wrap">
	<form id="function_search_form" method="post" action="<?= site_url('glossary/search');?>">
		<label for="function_name">Search by function name </label>
	    <input type="text" name="glossary_term" id="glossary_term" />
		<input type="submit" value="search" id="search_button" />
		<div id="autocomplete_choices" class="autocomplete"></div>	
	</form>	
	
	
	<div id="glossary">
		<!--- <? foreach($query->result() as $row): ?>
			<dl>
				<dt><?=$row->term?></dt>
				<dd><?=$row->definition?></dd>
			</dl>
		<? endforeach; ?> --->
	</div>
	<div style="font-size: 24px; font-family: calibri, arial, sans-serif; text-align: center; width: 700px; margin: 100px auto;">
		<?=$heading?>
	</div>
</div>
<?php $this->load->view("footer"); ?>