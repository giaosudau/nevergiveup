<?php
$this->breadcrumbs = array(
'Statuses' => array('index'),
 $model->status_id,
);

$this->menu = array(
array('label' => 'List Status', 'url' => array('index')),
 array('label' => 'Create Status', 'url' => array('create')),
 array('label' => 'Update Status', 'url' => array('update', 'id' => $model->status_id)),
 array('label' => 'Delete Status', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->status_id), 'confirm' => 'Are you sure you want to delete this item?')),
 array('label' => 'Manage Status', 'url' => array('admin')),
);
?>

<h1>View Status #<?php echo $model->status_id; ?></h1>

<?php
$this->widget('zii.widgets.CDetailView', array(
'data' => $model,
 'attributes' => array(
'status_id',
 'message',
 'created',
 'thumbs_up',
 'thumbs_down',
 'reply',
 'user_id',
 ),
));
?>

<div id="comments">
    <?php if($model->commentCount >= 1): ?>
    <h3>
        <?php echo $model->commentCount > 1 ? $model->commentCount . '
comments' : 'One comment'; ?>
    </h3>
     <?php endif; ?>
    <?php
    $this->renderPartial('_comments', array(
    'post' => $model,
    'comments' => $model->comments,
    ));
    ?>



    <h4>Leave a Comment</h4>

    <?php if(Yii::app()->user->hasFlash('commentSubmitted')): ?>
    <div class="flash-success">
        <?php echo Yii::app()->user->getFlash('commentSubmitted'); ?>
    </div>
    <?php else: ?>
    <?php
    $this->renderPartial('/comment/_form', array(
    'model' => $comment,
    ));
    ?>
    <?php endif; ?>

</div>
