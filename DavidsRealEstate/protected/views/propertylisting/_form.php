<?php
/* @var $this PropertylistingController */
/* @var $model Propertylisting */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'propertylisting-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
		
	<div class="row">
		<?php echo $form->labelEx($model,'streetNumber'); ?>
		<?php echo $form->textField($model,'streetNumber'); ?>
		<?php echo $form->error($model,'streetNumber'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'streetName'); ?>
		<?php echo $form->textField($model,'streetName',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'streetName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'streetType'); ?>
		<?php echo $form->textField($model,'streetType',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'streetType'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'suburb'); ?>
		<?php echo $form->textField($model,'suburb'); ?>
		<?php echo $form->error($model,'suburb'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'postcode'); ?>
		<?php echo $form->textField($model,'postcode'); ?>
		<?php echo $form->error($model,'postcode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'state'); ?>
		<?php echo $form->dropDownList($model,'state',  array('QLD' => 'QLD', 'NSW' => 'NSW', 'TAS' => 'TAS', 'SA' => 'SA', 'NT' => 'NT', 'WA' => 'WA')); ?>
		<?php echo $form->error($model,'state'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'propertyType'); ?>
		<?php echo $form->dropDownList($model,'propertyType',  array('house' => 'house', 'townhouse' => 'townhouse', 'apartment' => 'apartment', 'duplex' => 'duplex', 'cottage' => 'cottage')); ?>
		<?php echo $form->error($model,'propertyType'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'furnished'); ?>
		<?php echo $form->dropDownList($model,'furnished',  array('no' => 'no', 'yes' => 'yes')); ?>
		<?php echo $form->error($model,'furnished'); ?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'rent'); ?>
		<?php echo "$" ?>
		<?php echo $form->textField($model,'rent',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'rent'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rentfreq'); ?>
		<?php echo $form->dropDownList($model,'rentfreq',  array('Weekly' => 'Weekly', 'Fortnightly' => 'Fortnightly', 'Monthly' => 'Monthly')); ?>
		<?php echo $form->error($model,'rentfreq'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'numBathroom'); ?>
		<?php echo $form->textField($model,'numBathroom'); ?>
		<?php echo $form->error($model,'numBathroom'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'numBedroom'); ?>
		<?php echo $form->textField($model,'numBedroom'); ?>
		<?php echo $form->error($model,'numBedroom'); ?>
	</div>

	<div class="row"> 
		<?php echo $form->labelEx($model,'numCarPorts'); ?>
		<?php echo $form->textField($model,'numCarPorts'); ?>
		<?php echo $form->error($model,'numCarPorts'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'imageID'); ?>
		<?php echo CHtml::activeFileField($model, 'imageID'); ?>
		<?php echo $form->error($model,'imageID'); ?>
	</div>
	
	<div class="row">
	<?php echo $form->labelEx($model,'status'); ?>
	<?php echo $form->dropDownList($model,'status',Lookup::items('PostStatus')); ?>
	</div>
	
	
	<div class="row">
	<?php echo $form->labelEx($model,'inspectionTime1'); ?>
	<?php 
		$this->widget('application.extensions.timepicker.timepicker', array(
			'model'=>$model,
			'name'=>'inspectionTime1',
		));
	?>
</div>
	
	<div class="row">
	<?php echo $form->labelEx($model,'inspectionTime2'); ?>
	<?php 
		$this->widget('application.extensions.timepicker.timepicker', array(
			'model'=>$model,
			'name'=>'inspectionTime2',
		));
	?>
</div>
	
	
	
	
	<div class="row">
	<?php echo $form->labelEx($model,'tenantID'); ?>
	<?php $myRole = 'tenant';				
	echo $form->dropDownList($model, 'tenantID', CHtml::listData(User::model()->findAllByAttributes((array('roles'=>$myRole))) ,'id','fullName'), 
	array('empty' => '--please select--') ); 
	?>
	<?php echo $form->error($model,'tenantID'); ?>
	</div>
	
	<div class="row">
	<?php echo $form->labelEx($model,'propertyManagerID'); ?>
	<?php $myRole = 'property manager';				
	echo $form->dropDownList($model, 'propertyManagerID', CHtml::listData(User::model()->findAllByAttributes((array('roles'=>$myRole))) ,'id','fullName'), 
	array('empty' => '--please select--') ); 
	?>
	<?php echo $form->error($model,'propertyManagerID'); ?>
	</div>
	


	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->