<?php
$this->breadcrumbs=array(
	'Friends'=>array('index'),
	$model->friend_id=>array('view','id'=>$model->friend_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Friend', 'url'=>array('index')),
	array('label'=>'Create Friend', 'url'=>array('create')),
	array('label'=>'View Friend', 'url'=>array('view', 'id'=>$model->friend_id)),
	array('label'=>'Manage Friend', 'url'=>array('admin')),
);
?>

<h1>Update Friend <?php echo $model->friend_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>