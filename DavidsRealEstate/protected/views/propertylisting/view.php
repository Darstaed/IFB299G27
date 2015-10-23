<?php
/* @var $this PropertylistingController */
/* @var $model Propertylisting */

$this->breadcrumbs=array(
	'Property listings'=>array('index'),
	$model->address,
);

$this->menu=array(
	array('label'=>CHtml::encode(Yii::app()->user->name), 'icon'=>'user'),
	array('label'=>'Property Listing Management'),
	array('label'=>'List Property listing', 'url'=>array('index')),
	array('label'=>'Create Property Listing', 'icon'=>'pencil', 'url'=>array('create')),
	array('label'=>'Delete Property listing', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->propertyID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Property Listings', 'icon'=>'book', 'url'=>array('admin')),
);
?>


<h1><?php echo $model->address; ?></h1>



<?php $model->numViews++;
$model->save();
?>

<?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/'.$model->imageID,"image",array("width"=>700)); ?>




<br>
<br>

<b>
<font size="6"> 
<?php 
echo $model->address;
?>
<br>
<br>
<?php 
	echo "$" . $model->rent . " " .  $model->rentfreq;
?>

</font>

<br>
<br>

<font size="3"> 
<?php
	echo "Bedrooms: " . $model->numBedroom;
?>
<br>

<?php
	echo "Bathrooms: " . $model->numBathroom; 
?>
<br>

<?php
	echo "Garages: " . $model->numCarPorts; 
?>

<br>
<br>

<?php
	echo "Property ID: " . $model->propertyID
?>
<br>

<?php
	echo "Create Time: " . Yii::app()->dateFormatter->formatDateTime($model->createTime, 'short');
?>
<br>

<?php
	echo "Last Updated: " . Yii::app()->dateFormatter->formatDateTime($model->updateTime, 'short');
?>
<br>

<?php
	echo "Status: " . CHtml::encode(Lookup::item("PostStatus", $model->status)); 
?>
</b>
</font>
