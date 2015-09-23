<?php
/* @var $this PropertylistingController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Propertylistings',
);

$this->menu=array(
	array('label'=>'Create Property listing', 'url'=>array('create')),
	array('label'=>'Manage Property listing', 'url'=>array('admin')),
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



<b><?php echo CHtml::link('Search','#',array('class'=>'search-button')); ?></b>
<div class="search-form" style="display:none">
<?php  $this->renderPartial('_search',array(
    'model'=>$model,
)); ?>
</div>


<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$model->search(),
	'itemView'=>'_view',
	'id'=>'proplistview',       // must have id corresponding to js above
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
