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
		<?php echo $form->label($model,'address'); ?>
		<?php echo $form->textField($model,'address',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rent'); ?>
		<?php echo $form->textField($model,'rent',array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rentfreq'); ?>
		<?php echo $form->textField($model,'rentfreq',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,"Minimum ".'numBathroom'); ?>
		<?php echo $form->textField($model,'numBathroom'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,"Minimum ".'numBedroom'); ?>
		<?php echo $form->textField($model,'numBedroom'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,"Minimum ".'numCarPorts'); ?>
		<?php echo $form->textField($model,'numCarPorts'); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model,'createTime'); ?>
		<?php //echo $form->textField($model,'createTime'); ?>
	</div>

	<div class="row">
		<?php //echo $form->label($model,'updateTime'); ?>
		<?php //echo $form->textField($model,'updateTime'); ?>
	</div>
	
	<div class="row">
	<?php //echo $form->labelEx($model,'status'); ?>
	<?php //echo $form->dropDownList($model,'status',Lookup::items('PostStatus')); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->