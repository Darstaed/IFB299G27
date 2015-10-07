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

<?php $model->numViews++;
$model->save();
?>

<?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/'.$model->imageID,"image",array("width"=>200)); ?>

<?php 
if(Yii::app()->user->isGuest) {
$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		array(              
            'name'=>'Property Manager',
            'type'=>'raw',
            'value'=>CHtml::link(CHtml::encode($model->author->firstname. ' ' . $model->author->surname)),
		),
		array(              
            'name'=>'Email',
            'type'=>'raw',
            'value'=>CHtml::link(CHtml::encode($model->author->email)),
		),
		array(              
            'name'=>'Phone Number',
            'type'=>'text',
            'value'=>CHtml::encode($model->author->phoneNumber),
		),
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
		array(
			'name'=>'Status',
			'type'=>'text',
			'value'=>CHtml::encode(Lookup::item("PostStatus",$model->status)),
			),
		'numViews'
		
	),
)); 
}else // user is not guest
{
$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		array(              
            'name'=>'Property Manager',
            'type'=>'raw',
            'value'=>CHtml::link(CHtml::encode($model->author->firstname. ' ' . $model->author->surname)),
		),
		array(              
            'name'=>'Email',
            'type'=>'raw',
            'value'=>CHtml::link(CHtml::encode($model->author->email)),
		),
		array(              
            'name'=>'Phone Number',
            'type'=>'text',
            'value'=>CHtml::encode($model->author->phoneNumber),
		),
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
		array(
			'name'=>'Status',
			'type'=>'text',
			'value'=>CHtml::encode(Lookup::item("PostStatus",$model->status)),
			),
		array(              
            'name'=>'TenantID',
            'type'=>'raw',
            'value'=>CHtml::link(CHtml::encode($model->tenantID)),
		),
		
	),
)); 

}
?>
