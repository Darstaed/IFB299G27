<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;

?>

<?php

	echo  Yii::app()->user->getState('roles');
	
	echo  Yii::app()->user->id;
	
	

	if(Yii::app()->user->checkAccess('admin'))
	{
		echo "You are an admin";
	} else
	{
		echo "This is not working";
	}

?>

<div id="leftcontainer">

<?php $this->beginWidget('bootstrap.widgets.TbHeroUnit', array(
    'heading'=>'Find a Property',
)); ?>
 
    <p>Click the button below to view properties available for rent</p>
    <p><?php $this->widget('bootstrap.widgets.TbButton', array(
        'type'=>'primary',
        'size'=>'large',
        'label'=>'View Property Listings',
		'url'=>array('propertylisting/index'),
    )); ?></p>
 
<?php $this->endWidget(); ?>




</div>

