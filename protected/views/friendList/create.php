<?php
$this->breadcrumbs=array(
	'Friend Lists'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List FriendList', 'url'=>array('index')),
	array('label'=>'Manage FriendList', 'url'=>array('admin')),
);
?>

<h1>Create FriendList</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>