<?php
/* @var $this PropertylistingController */
/* @var $model Propertylisting */

$this->breadcrumbs=array(
	'Property listings'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Property listing', 'url'=>array('index')),
	array('label'=>'Manage Property listing', 'url'=>array('admin')),
);
?>

<h1>Create Property listing</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>