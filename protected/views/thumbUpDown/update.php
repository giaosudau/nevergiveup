<?php
$this->breadcrumbs=array(
	'Thumb Up Downs'=>array('index'),
	$model->thumb_up_down_id=>array('view','id'=>$model->thumb_up_down_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ThumbUpDown', 'url'=>array('index')),
	array('label'=>'Create ThumbUpDown', 'url'=>array('create')),
	array('label'=>'View ThumbUpDown', 'url'=>array('view', 'id'=>$model->thumb_up_down_id)),
	array('label'=>'Manage ThumbUpDown', 'url'=>array('admin')),
);
?>

<h1>Update ThumbUpDown <?php echo $model->thumb_up_down_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>