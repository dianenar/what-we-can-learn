<div class="status_box <?=$type?>">
    <h6><?=ucfirst($type)?></h6>
    <ul>
	<?php
		foreach($messages as $text)
			print "<li>" . $text . "</li>";
	?>
	</ul>    
</div>
