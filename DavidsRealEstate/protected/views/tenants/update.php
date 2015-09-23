<?php
/* @var $this TenantsController */
/* @var $model Tenants */

$this->breadcrumbs=array(
	'Tenants'=>array('index'),
	$model->tenantID=>array('view','id'=>$model->tenantID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Tenants', 'url'=>array('index')),
	array('label'=>'Create Tenants', 'url'=>array('create')),
	array('label'=>'View Tenants', 'url'=>array('view', 'id'=>$model->tenantID)),
	array('label'=>'Manage Tenants', 'url'=>array('admin')),
);
?>

<h1>Update Tenants <?php echo $model->tenantID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>