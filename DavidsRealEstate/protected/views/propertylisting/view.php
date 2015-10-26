<?php
/* @var $this PropertylistingController */
/* @var $model Propertylisting */

$this->breadcrumbs=array(
	'Property listings'=>array('index'),
	$model->streetNumber . " " . ucfirst($model->streetName) . " ". ucfirst($model->streetType) .  ", " . $model->state . " " . $model->postcode,
);

$this->menu=array(
	array('label'=>CHtml::encode(Yii::app()->user->name), 'icon'=>'user'),
	array('label'=>'Property Listing Management'),
	array('label'=>'Property listings', 'icon' => 'icon-list', 'url'=>array('index')),
	array('label'=>'Create Property Listing', 'icon'=>'pencil', 'url'=>array('create')),
	array('label'=>'Delete Property listing','icon'=>'icon-trash', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->propertyID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Property Listings', 'icon'=>'book', 'url'=>array('admin')),
);
?>


<h1><?php echo $model->streetNumber . " " . $model->streetName . " ". $model->streetType .  ", " . strtoupper($model->state) . " " . $model->postcode; ?></h1>



<?php $model->numViews++;
$model->save();
?>

<?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/'.$model->imageID,"image",array("width"=>450)); ?>

<p class = "pull-right">
<font size="5"> 
<?php echo "Property Manager:"; ?>
</font>
<br>
<font size="4"> 
<?php echo ucfirst($model->propertyManager->firstname) . ' ' . ucfirst($model->propertyManager->surname); ?>
<br>
<?php echo $model->propertyManager->email; ?>
<br>
<?php echo $model->propertyManager->phoneNumber; ?>
</font>
</p>

<br>
<br>
<b>
<p class = "pull-right">
<?php 	echo "First inspection time: " . $model->inspectionTime1;?>
<br>
<?php 	echo "Second inspection time: " . $model->inspectionTime2;?>
</b>
</p>

<br>
<br>

<b>
<font size="6"> 
<br>
<br>
<?php 
	echo "$" . $model->rent . " " .  $model->rentfreq;
?>

</font>

<br>
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

<?php
	echo "Furnished: " . $model->furnished; 
?>

<br>

<?php
	echo "Property type: " . $model->propertyType; 
?>

<br>
<br>

<?php
	echo "Property ID: " . $model->propertyID
?>
<br>


<?php
	echo "Last Updated: " . Yii::app()->dateFormatter->formatDateTime($model->updateTime, 'short');
?>
<br>

<?php
	echo "Status: " . CHtml::encode(Lookup::item("PostStatus", $model->status)); 
?>


<br>
<?php
	if(Yii::app()->user->checkAccess('admin') or Yii::app()->user->checkAccess('property manager'))
	{
		if($model->tenantID!=NULL) // a tennant was assigned
		{
			
			echo  "Tenant: " . ucfirst($model->tenant->firstname) . ' ' . ucfirst($model->tenant->surname);
		}
	}
?>

</b>
</font>
