<?php
$this->breadcrumbs = array (
		'Registers' => array (
				'index' 
		),
		'Create' 
);

$this->menu = array (
		array (
				'label' => 'List Register',
				'url' => array (
						'index' 
				) 
		),
		array (
				'label' => 'Manage Register',
				'url' => array (
						'admin' 
				) 
		),
		
);
?>

<h1>Create Register</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>