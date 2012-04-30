<?php
$this->breadcrumbs=array(
	'Thumb Up Downs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ThumbUpDown', 'url'=>array('index')),
	array('label'=>'Manage ThumbUpDown', 'url'=>array('admin')),
);
?>

<h1>Create ThumbUpDown</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>