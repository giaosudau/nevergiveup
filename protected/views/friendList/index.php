<?php
$this->breadcrumbs=array(
	'Friend Lists',
);

$this->menu=array(
	array('label'=>'Create FriendList', 'url'=>array('create')),
	array('label'=>'Manage FriendList', 'url'=>array('admin')),
);
?>

<h1>Friend Lists</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
