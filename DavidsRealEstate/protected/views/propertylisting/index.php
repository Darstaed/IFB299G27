<?php
/* @var $this PropertylistingController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Propertylistings',
);

$this->menu=array(
	array('label'=>'Create Property listing', 'url'=>array('create')),
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

<!-- add a search box: -->
<input type="text" id="q" name="q" />
</br>


<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php  $this->renderPartial('_search',array(
    'model'=>$model,
)); ?>
</div>


<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	'id'=>'proplistview',       // must have id corresponding to js above
    'sortableAttributes'=>array(
        'propertyID',
		'rent',
		'numBathroom',
		'numBedroom',
		'numCarPorts'
		),

)); 
?>
