<?php
$this->breadcrumbs=array(
	'Profiles'=>array('index'),
	$model->profile_id=>array('view','id'=>$model->profile_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Profile', 'url'=>array('index')),
	array('label'=>'Create Profile', 'url'=>array('create')),
	array('label'=>'View Profile', 'url'=>array('view', 'id'=>$model->profile_id)),
	array('label'=>'Manage Profile', 'url'=>array('admin')),
);
?>

<h1>Update Profile <?php echo $model->profile_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>