<?php $this->pageTitle=Yii::app()->name . ' - Register'; ?>



<div class="yiiForm">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>
<?php echo CHtml::beginForm(); ?>

<?php echo CHtml::errorSummary($model); ?>

<div class="simple">

<?php echo CHtml::activeLabel($model,'username', array('style'=>'width:150px;')); ?>
<?php echo CHtml::activeTextField($model,'username') ?>
</div>

<div class="simple">
<?php echo CHtml::activeLabel($model,'password', array('style'=>'width:150px;')); ?>
<?php echo CHtml::activePasswordField($model,'password') ?>
</div>

<div class="simple">
<?php echo CHtml::activeLabel($model,'Confirm Password', array('style'=>'width:150px;')); ?>
<?php echo CHtml::activePasswordField($model,'password2') ?>
</div>

<div class="simple">
<?php echo CHtml::activeLabel($model,'email', array('style'=>'width:150px;')); ?>
<?php echo CHtml::activeTextField($model,'email') ?>
</div>

<div class="simple">
<?php echo CHtml::activeLabel($model,'firstname', array('style'=>'width:150px;')); ?>
<?php echo CHtml::activeTextField($model,'firstname') ?>
</div>

<div class="simple">
<?php echo CHtml::activeLabel($model,'surname', array('style'=>'width:150px;')); ?>
<?php echo CHtml::activeTextField($model,'surname') ?>
</div>

<div class="simple">
<?php echo CHtml::activeLabel($model,'phoneNumber', array('style'=>'width:150px;')); ?>
<?php echo CHtml::activeTextField($model,'phoneNumber') ?>
</div>



<div class="simple">
	<?php
		if(Yii::app()->user->getName()=='admin')// user is an admin
		{
			echo $form->labelEx($model,'roles'); 
			echo $form->dropDownList($model,'roles', array('admin'=>'admin', 'property manager'=>'property manager', 'owner'=>'owner', 'tenant'=>'tenant')); 
			echo $form->error($model,'roles'); 
			
		}
	?>
	</div>
	


<br/>

<br/>

<?php if(CCaptcha::checkRequirements()): ?>
<div class="row">
    <?php echo $form->labelEx($model,'verifyCode'); ?>
    <div>
    <?php $this->widget('CCaptcha'); ?>
    <?php echo $form->textField($model,'verifyCode'); ?>
    </div>
    <div class="hint">Please enter the letters as they are shown in the image above.
    <br/>Letters are not case-sensitive.</div>
    <?php echo $form->error($model,'verifyCode'); ?>
</div>
<?php endif; ?>

<div class="action">
<?php echo CHtml::submitButton('Register'); ?>
</div>

<?php echo CHtml::endForm(); ?>

</div><!-- yiiForm -->

<?php $this->endWidget(); ?>