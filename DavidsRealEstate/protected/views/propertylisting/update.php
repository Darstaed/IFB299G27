<?php
/* @var $this PropertylistingController */
/* @var $model Propertylisting */

$this->breadcrumbs=array(
	'Property listings'=>array('index'),
	$model->propertyID=>array('view','id'=>$model->propertyID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Property listing', 'url'=>array('index')),
	array('label'=>'Create Property listing', 'url'=>array('create')),
	array('label'=>'View Property listing', 'url'=>array('view', 'id'=>$model->propertyID)),
	array('label'=>'Manage Property listing', 'url'=>array('admin')),
);
?>

<h1>Update Property listing <?php echo $model->propertyID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>