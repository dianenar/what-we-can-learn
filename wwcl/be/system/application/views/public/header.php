<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">    
<html xmlns="http://www.w3.org/1999/xhtml">  
<head>
	<?=$this->page->output_metatags(); ?>
	<title><?=$header.' | '.$this->preference->item('site_name')?></title>
	<?=$this->page->output_variables()?>
	<?=$this->page->output_assets('public')?>
</head>
    
<body>
<div id="wrapper">
    <div id="header">  
        <h1><?=$this->preference->item('site_name')?></h1>
    </div>