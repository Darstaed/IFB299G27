<?php
/* @var $this PropertylistingController */
/* @var $data Propertylisting */
?>

<div class="view">
	
	<h4>
	<br />
	<?php echo CHtml::link($data->address, CHtml::encode($data->propertyID)); ?>
	</h4>
	
	<?php echo CHtml::link(CHtml::image(Yii::app()->request->baseUrl.'/images/'.$data->imageID,"image",array("width"=>200)), CHtml::encode($data->propertyID)); ?>
	<br/>
	
	<b><?php echo 'Author: ' ?></b>
	<?php echo Chtml::encode($data->author->firstname); ?>
	<?php echo Chtml::encode($data->author->surname); ?>
	</br>
	
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('propertyID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->propertyID), array('view', 'id'=>$data->propertyID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('address')); ?>:</b>
	<?php echo CHtml::encode($data->address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rent')); ?>:</b>
	<?php echo '$'; ?>
	<?php echo CHtml::encode($data->rent); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rentfreq')); ?>:</b>
	<?php echo CHtml::encode($data->rentfreq); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numBathroom')); ?>:</b>
	<?php echo CHtml::encode($data->numBathroom); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numBedroom')); ?>:</b>
	<?php echo CHtml::encode($data->numBedroom); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numCarPorts')); ?>:</b>
	<?php echo CHtml::encode($data->numCarPorts); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('createTime')); ?>:</b>
	<?php echo  strftime("%d-%m-%Y, %H:%M:%S", CHtml::encode($data->createTime)); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('updateTime')); ?>:</b>
	<?php echo  strftime("%d-%m-%Y, %H:%M:%S", CHtml::encode($data->updateTime)); ?>
	<br />


	<b><?php echo CHtml::encode($data->getAttributeLabel('imageID')); ?>:</b>
	<?php echo CHtml::encode($data->imageID); ?>
	<br />
	
	
		<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode(Lookup::item("PostStatus",$data->status)); ?>
	<br />
	
	
	<br/>
	

	 

</div>