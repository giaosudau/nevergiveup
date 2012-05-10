<?php
$this->breadcrumbs = array(
    'Statuses',
);

$this->menu = array(
    array('label' => 'Create Status', 'url' => array('create')),
    array('label' => 'Manage Status', 'url' => array('admin')),
);
?>

<h1>Statuses</h1>
<div class="con">
<div class="pd">
<div class="share">Share:</div>
<div class="status">Status</div>
<div class="loading"></div>
</div>
<div class="img_top"></div>
<div class="text_status">
<textarea class="input_box" /> So what's on your mind?</div>
<div class="button_outside_border_blue" id="share">
<div class="button_inside_border_blue">
Share
</div>
</div>
<div class="clear"></div>
<div class="load_status_out"></div>
</div>

<?php

$this->widget('zii.widgets.CListView', array(
    'dataProvider' => $dataProvider,
    'itemView' => '_view',
));
?>


<?php $this->widget('UserWidget'); ?>