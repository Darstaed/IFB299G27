<?php
/* @var $this PropertylistingController */
/* @var $model Propertylisting */

$this->breadcrumbs=array(
	'Property listings'=>array('index'),
	$model->propertyID,
);

$this->menu=array(
	array('label'=>'List Property listing', 'url'=>array('index')),
	array('label'=>'Create Property listing', 'url'=>array('create')),
	array('label'=>'Update Property listing', 'url'=>array('update', 'id'=>$model->propertyID)),
	array('label'=>'Delete Property listing', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->propertyID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Property listing', 'url'=>array('admin')),
);
?>

<h1>View Property listing #<?php echo $model->propertyID; ?></h1>

<?php $model->numViews++; //Update number of page views
$model->save();
?>

<?php
	//echo author infomation
	$author=$model->author;
	echo $author -> firstname;
	echo ' ';
	echo $author -> surname;
	echo ' ';
	echo $author ->  email;
?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'propertyID',
		'address',
		'rent',
		'rentfreq',
		'numBathroom',
		'numBedroom',
		'numCarPorts',
		array(
			'name'=>'createTime',
			'type'=>'datetime',
			'filter'=>false,
			),
		array(
			'name'=>'updateTime',
			'type'=>'datetime',
			'filter'=>false,
			),
		'imageID',
		'numViews',
	),
));
?>
