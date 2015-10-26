<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>CHtml::encode(Yii::app()->user->name), 'icon'=>'user'),
	array('label'=>'User Account Management'),
	array('label'=>'User Accounts', 'icon' => 'icon-list', 'url'=>array('index')),
	array('label'=>'Create User Accounts', 'icon'=>'pencil', 'url'=>array('site/register')),
	array('label'=>'View User Account', 'icon' => ' icon-list-alt', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage User Accounts', 'icon'=>'book', 'url'=>array('admin')),
);
?>

<h1>Update User <?php echo $model->username; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>