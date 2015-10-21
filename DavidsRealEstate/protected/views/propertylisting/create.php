<?php
/* @var $this PropertylistingController */
/* @var $model Propertylisting */

$this->breadcrumbs=array(
	'Property listings'=>array('index'),
	'Create',
);


$this->menu=array(
	array('label'=>CHtml::encode(Yii::app()->user->name), 'icon'=>'user'),
	array('label'=>'Property Listing Management'),
	array('label'=>'Manage Property Listings', 'icon'=>'book', 'url'=>array('admin')),
);

?>

<h1>Create Property listing</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>