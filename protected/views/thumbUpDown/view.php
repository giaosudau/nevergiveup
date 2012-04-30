<?php
$this->breadcrumbs=array(
	'Thumb Up Downs'=>array('index'),
	$model->thumb_up_down_id,
);

$this->menu=array(
	array('label'=>'List ThumbUpDown', 'url'=>array('index')),
	array('label'=>'Create ThumbUpDown', 'url'=>array('create')),
	array('label'=>'Update ThumbUpDown', 'url'=>array('update', 'id'=>$model->thumb_up_down_id)),
	array('label'=>'Delete ThumbUpDown', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->thumb_up_down_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ThumbUpDown', 'url'=>array('admin')),
);
?>

<h1>View ThumbUpDown #<?php echo $model->thumb_up_down_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'thumb_up_down_id',
		'flag',
		'created',
		'status_id',
		'friend_id',
	),
)); ?>
