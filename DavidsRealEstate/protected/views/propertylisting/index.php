<?php
/* @var $this PropertylistingController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Propertylistings',
);

$this->menu=array(
	array('label'=>CHtml::encode(Yii::app()->user->name), 'icon'=>'user'),
	array('label'=>'Property Listing Management'),
	array('label'=>'Create Property Listing', 'icon'=>'pencil', 'url'=>array('create')),
	array('label'=>'Manage Property Listings', 'icon'=>'book', 'url'=>array('admin')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
    $('.search-form').toggle();
    return false;
});
$('.search-form form').submit(function(){
    $.fn.yiiListView.update('proplistview', { 
        //this entire js section is taken from admin.php. w/only this line diff
        data: $(this).serialize()
    });
    return false;
});



");


?>


<h1>Property listings</h1>


<?php /** @var BootActiveForm $form */
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id'=>'searchForm',
    'type'=>'search',
    'htmlOptions'=>array('class'=>'pull-right'),
)); ?>

<?php echo $form->textFieldRow($model, 'propertyID', array('class'=>'input-medium', 'prepend'=>'<i class="icon-search"></i>')); ?>
<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'label'=>'Go')); ?>
 
<?php $this->endWidget(); ?>
<br><br>
<div class ="pull-right">
<b><?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?></b>
</div>
<div class="search-form" style="display:none">
<?php  $this->renderPartial('_search',array(
    'model'=>$model,
)); ?>
</div>


<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$model->search(),
	'itemView'=>'_view',
	'id'=>'proplistview',       
	'template'=>"{items}\n{pager}",
    'sortableAttributes'=>array(
        'propertyID',
		'rent',
		'numBathroom',
		'numBedroom',
		'numCarPorts',
		'status',
		),
)); 
?>
