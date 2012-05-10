<?php
$this->breadcrumbs=array(
	'Thumb Up Downs'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List ThumbUpDown', 'url'=>array('index')),
	array('label'=>'Create ThumbUpDown', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('thumb-up-down-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Thumb Up Downs</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'thumb-up-down-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'thumb_up_down_id',
		'flag',
		'created',
		'status_id',
		'friend_id',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
