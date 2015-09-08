<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;

?>

<div id="leftcontainer">
<?php $this->beginWidget('bootstrap.widgets.TbHeroUnit', array(
    'heading'=>'Find a Property',
)); ?>
 
    <p>Use the map to find a property to rent</p>
    <p><?php $this->widget('bootstrap.widgets.TbButton', array(
        'type'=>'primary',
        'size'=>'large',
        'label'=>'Learn more',
		'url'=>array('propertylisting/index'),
    )); ?></p>
 
<?php $this->endWidget(); ?>


</div>

