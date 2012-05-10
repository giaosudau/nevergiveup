<?php
$this->breadcrumbs=array(
	'Registers'=>array('index'),
	$model->user_id=>array('view','id'=>$model->user_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Register', 'url'=>array('index')),
	array('label'=>'Create Register', 'url'=>array('create')),
	array('label'=>'View Register', 'url'=>array('view', 'id'=>$model->user_id)),
	array('label'=>'Manage Register', 'url'=>array('admin')),
);
?>

<h1>Update Register <?php echo $model->user_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>