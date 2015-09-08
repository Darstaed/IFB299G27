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
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
	
	<div class="row">
		<?php echo $form->labelEx($model,'propertyID'); ?>
		<?php echo $form->textField($model,'propertyID'); ?>
		<?php echo $form->error($model,'propertyID'); ?>
	</div>
	

	<div class="row">
		<?php echo $form->labelEx($model,'address'); ?>
		<?php echo $form->textField($model,'address',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'address'); ?>
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
		<?php echo $form->textField($model,'imageID',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'imageID'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->