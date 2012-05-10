<?php
$this->breadcrumbs=array(
	'Friend Lists'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List FriendList', 'url'=>array('index')),
	array('label'=>'Create FriendList', 'url'=>array('create')),
	array('label'=>'Update FriendList', 'url'=>array('update', 'id'=>$model->friend_list_id)),
	array('label'=>'Delete FriendList', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->friend_list_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage FriendList', 'url'=>array('admin')),
);
?>

<h1>View FriendList #<?php echo $model->friend_list_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'friend_list_id',
		'name',
		'friend_id',
		'user_id',
	),
)); ?>
