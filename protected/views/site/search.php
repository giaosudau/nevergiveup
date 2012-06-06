<?php

$this->widget('zii.widgets.jui.CJuiAutoComplete', array(
    'name' => 'searchform',
    'value' => 'Search',
    'source' => $this->createUrl('register/searchUser'),
    'options'=>array(
            'showAnim'=>'fold',     
    ),
));
?>