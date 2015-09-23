<?php
/* @var $this TenantsController */
/* @var $data Tenants */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('tenantID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->tenantID), array('view', 'id'=>$data->tenantID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('firstname')); ?>:</b>
	<?php echo CHtml::encode($data->firstname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('surname')); ?>:</b>
	<?php echo CHtml::encode($data->surname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('phoneNumber')); ?>:</b>
	<?php echo CHtml::encode($data->phoneNumber); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('propertyID')); ?>:</b>
	<?php echo CHtml::encode($data->propertyID); ?>
	<br />


</div>