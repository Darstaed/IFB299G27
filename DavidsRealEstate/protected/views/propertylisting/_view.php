<?php
/* @var $this PropertylistingController */
/* @var $data Propertylisting */
?>

<section class="indent-1">
    <!-- Section 1 --> 
    <section>
	<div>
	<h4>
	<br />
	
	<?php echo CHtml::link($data->streetNumber . " " . strtoupper($data->streetName) . " ". strtoupper($data->streetType) .  ", " . strtoupper($data->suburb) . " " . strtoupper($data->state) . " " . $data->postcode, CHtml::encode($data->propertyID)); ?>
	</h4>
	</div>
	<div>
	<?php echo CHtml::link(CHtml::image(Yii::app()->request->baseUrl.'/images/'.$data->imageID,"image",array("width"=>200)), CHtml::encode($data->propertyID)); ?>
	<br/>
	</div>
</section>

 <!-- Section 2 -->
 <section>
 <div>
	<b>
	<?php echo CHtml::encode($data->getAttributeLabel('propertyID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->propertyID), array('view', 'id'=>$data->propertyID)); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('rent')); ?>:</b>
	<?php echo CHtml::encode("$" . $data->rent . " " . $data->rentfreq); ?>
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
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('numViews')); ?>:</b>
	<?php echo CHtml::encode($data->numViews); ?>
	<br />
	
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('updateTime')); ?>:</b>
	<?php echo  strftime("%d-%m-%Y, %H:%M:%S", CHtml::encode($data->updateTime)); ?>
	<br />
	
	<b>
	<?php echo CHtml::link("More Details >", CHtml::encode($data->propertyID)) ?>
	<br />
	
	
	
	<br/>
	</div>
	  </section>
</section>
