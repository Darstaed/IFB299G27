<?php
/* @var $this TenantsController */
/* @var $model Tenants */

$this->breadcrumbs=array(
	'Tenants'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Tenants', 'url'=>array('index')),
	array('label'=>'Manage Tenants', 'url'=>array('admin')),
);
?>

<h1>Create Tenants</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>