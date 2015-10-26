<?php
/* @var $this UserController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Users',
);

$this->menu=array(
	array('label'=>CHtml::encode(Yii::app()->user->name), 'icon'=>'user'),
	array('label'=>'User Account Management'),
	array('label'=>'Create User Accounts', 'icon'=>'pencil', 'url'=>array('site/register')),
	array('label'=>'Manage User Accounts', 'icon'=>'book', 'url'=>array('admin')),
);
?>


<h1>Users</h1>
<?php echo "The current role stored for the user is: " . Yii::app()->user->getState('roles'); ?>



<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
