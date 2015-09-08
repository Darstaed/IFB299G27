<?php
/* @var $this PropertylistingController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Propertylistings',
);

$this->menu=array(
	array('label'=>'Create Property listing', 'url'=>array('create')),
	array('label'=>'Manage Property listing', 'url'=>array('admin')),
);
?>

<h1>Property listings</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
