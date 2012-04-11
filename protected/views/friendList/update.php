<?php
$this->breadcrumbs=array(
	'Friend Lists'=>array('index'),
	$model->name=>array('view','id'=>$model->friend_list_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List FriendList', 'url'=>array('index')),
	array('label'=>'Create FriendList', 'url'=>array('create')),
	array('label'=>'View FriendList', 'url'=>array('view', 'id'=>$model->friend_list_id)),
	array('label'=>'Manage FriendList', 'url'=>array('admin')),
);
?>

<h1>Update FriendList <?php echo $model->friend_list_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>