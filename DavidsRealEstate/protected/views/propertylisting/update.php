<?php
/* @var $this PropertylistingController */
/* @var $model Propertylisting */

$this->breadcrumbs=array(
	'Property listings'=>array('index'),
	$model->propertyID=>array('view','id'=>$model->propertyID),
	'Update',
);

$this->menu=array(
	array('label'=>CHtml::encode(Yii::app()->user->name), 'icon'=>'user'),
	array('label'=>'Property Listing Management'),
<<<<<<< HEAD
	array('label'=>'Property listings', 'icon' => 'icon-list', 'url'=>array('index')),
=======
	array('label'=>'List Property listing', 'icon' => 'icon-list', 'url'=>array('index')),
>>>>>>> origin/Beta
	array('label'=>'Create Property Listing', 'icon'=>'pencil', 'url'=>array('create')),
	array('label'=>'View Property listing', 'icon' => ' icon-list-alt', 'url'=>array('view', 'id'=>$model->propertyID)),
	array('label'=>'Manage Property Listings', 'icon'=>'book', 'url'=>array('admin')),
);
?>

<h1>Update Property listing <?php echo $model->propertyID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>