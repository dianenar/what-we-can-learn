<div id="content">
    <a name="top"></a>
    <?=displayStatus();?>
    <?=(isset($content)) ? $content : NULL; ?>
    <?php
    if( isset($page)){
    if( isset($module)){
            $this->load->module_view($module,$page);
        } else {
            $this->load->view($page);
        }}
    ?>
</div>