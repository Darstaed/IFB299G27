<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>CHtml::encode(Yii::app()->user->name), 'icon'=>'user'),
	array('label'=>'User Account Management'),
	array('label'=>'User Accounts', 'icon' => 'icon-list', 'url'=>array('index')),
	array('label'=>'Create User Accounts', 'icon'=>'pencil', 'url'=>array('site/register')),
	array('label'=>'Delete User Accounts','icon'=>'icon-trash', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage User Accounts', 'icon'=>'book', 'url'=>array('admin')),
);
?>

<h1>View User #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'username',
		'password',
		'email',
		'firstname',
		'surname',
		'phoneNumber',
		'propertyOwned',
		'roles',
	),
)); ?>
