<?php
/* @var $this TenantsController */
/* @var $model Tenants */

$this->breadcrumbs=array(
	'Tenants'=>array('index'),
	$model->tenantID,
);

$this->menu=array(
	array('label'=>'List Tenants', 'url'=>array('index')),
	array('label'=>'Create Tenants', 'url'=>array('create')),
	array('label'=>'Update Tenants', 'url'=>array('update', 'id'=>$model->tenantID)),
	array('label'=>'Delete Tenants', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->tenantID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Tenants', 'url'=>array('admin')),
);
?>

<h1>View Tenants #<?php echo $model->tenantID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
	    'propertyID',
		'tenantID',
		'firstname',
		'surname',
		'email',
		'phoneNumber',
	),
	
)); ?>
