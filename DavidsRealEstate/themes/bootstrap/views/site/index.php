<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;

?>

<div id="leftcontainer">
<?php $this->beginWidget('bootstrap.widgets.TbHeroUnit', array(
    'heading'=>'Find a Property',
)); ?>
 
    <p>Click the button below to view davids realestate property listings</p>
    <p><?php $this->widget('bootstrap.widgets.TbButton', array(
        'type'=>'primary',
        'size'=>'large',
        'label'=>'View Property Listings',
		'url'=>array('propertylisting/index'),
    )); ?></p>
 
<?php $this->endWidget(); ?>


</div>

