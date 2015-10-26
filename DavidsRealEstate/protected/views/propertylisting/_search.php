<?php
/* @var $this PropertylistingController */
/* @var $model Propertylisting */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'propertyID'); ?>
		<?php echo $form->textField($model,'propertyID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'streetName'); ?>
		<?php echo $form->textField($model,'streetName',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'streetNumber'); ?>
		<?php echo $form->textField($model,'streetNumber'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'streetType'); ?>
		<?php echo $form->textField($model,'streetType',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'suburb'); ?>
		<?php echo $form->textField($model,'suburb',array('size'=>60,'maxlength'=>255)); ?>
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
		<?php echo $form->label($model,'postcode'); ?>
		<?php echo $form->textField($model,'postcode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'state'); ?>
		<?php echo $form->dropDownList($model,'state',  array('QLD' => 'QLD', 'NSW' => 'NSW', 'TAS' => 'TAS', 'SA' => 'SA', 'NT' => 'NT', 'WA' => 'WA')); ?>
		<?php echo $form->error($model,'state'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rent'); ?>
		<?php echo $form->textField($model,'rent',array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rentfreq'); ?>
		<?php echo $form->textField($model,'rentfreq',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'numBathroom'); ?>
		<?php echo $form->textField($model,'numBathroom'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'numBedroom'); ?>
		<?php echo $form->textField($model,'numBedroom'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'numCarPorts'); ?>
		<?php echo $form->textField($model,'numCarPorts'); ?>
	</div>



	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->