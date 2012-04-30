<?php
$this->breadcrumbs=array(
	'Thumb Up Downs',
);

$this->menu=array(
	array('label'=>'Create ThumbUpDown', 'url'=>array('create')),
	array('label'=>'Manage ThumbUpDown', 'url'=>array('admin')),
);
?>

<h1>Thumb Up Downs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
