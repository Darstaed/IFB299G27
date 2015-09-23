<?php
/* @var $this TenantsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tenants',
);

$this->menu=array(
	array('label'=>'Create Tenants', 'url'=>array('create')),
	array('label'=>'Manage Tenants', 'url'=>array('admin')),
);
?>

<h1>Tenants</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
