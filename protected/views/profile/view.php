<?php
$this->breadcrumbs=array(
	'Profiles'=>array('index'),
	$model->profile_id,
);

$this->menu=array(
	array('label'=>'List Profile', 'url'=>array('index')),
	array('label'=>'Create Profile', 'url'=>array('create')),
	array('label'=>'Update Profile', 'url'=>array('update', 'id'=>$model->profile_id)),
	array('label'=>'Delete Profile', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->profile_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Profile', 'url'=>array('admin')),
);
?>

<h1>View Profile #<?php echo $model->profile_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'profile_id',
		'user_id',
		'rating',
		'dob',
		'nickname',
		'about',
		'relationship',
		'looking_for',
		'phone',
		'interest',
		'education',
		'hobbies',
		'created',
	),
)); ?>
