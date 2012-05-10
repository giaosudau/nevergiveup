<?php
$this->breadcrumbs = array (
		'Registers' => array (
				'index' 
		),
		$model->user_id 
);

$this->menu = array (
		array (
				'label' => 'List Register',
				'url' => array (
						'index' 
				) 
		),
		array (
				'label' => 'Create Register',
				'url' => array (
						'create' 
				) 
		),
		array (
				'label' => 'Update Register',
				'url' => array (
						'update',
						'id' => $model->user_id 
				) 
		),
		array (
				'label' => 'Delete Register',
				'url' => '#',
				'linkOptions' => array (
						'submit' => array (
								'delete',
								'id' => $model->user_id 
						),
						'confirm' => 'Are you sure you want to delete this item?' 
				) 
		),
		array (
				'label' => 'Manage Register',
				'url' => array (
						'admin' 
				) 
		),
		array (
				'label' => 'Add Friend',
				'url' => array (
						'newfriend',
                                                'id' => $model->user_id 
				) 
		) 
);
?>

<h1>View Register #<?php echo $model->user_id; ?></h1>

<?php

$this->widget ( 'zii.widgets.CDetailView', array (
		'data' => $model,
		'attributes' => array (
				'user_id',
				'username',
				'password',
				'name_first',
				'name_last',
				'email',
				'picture',
				'active',
				'created' 
		) 
) );
?>
