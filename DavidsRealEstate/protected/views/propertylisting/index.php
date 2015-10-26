<?php
/* @var $this PropertylistingController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Propertylistings',
);
if(Yii::app()->user->checkAccess('admin'))
{
$this->menu=array(
	array('label'=>CHtml::encode(Yii::app()->user->name), 'icon'=>'user'),
	array('label'=>'Property Listing Management'),
	array('label'=>'Create Property Listing', 'icon'=>'pencil', 'url'=>array('create')),
	array('label'=>'Manage Property Listings', 'icon'=>'book', 'url'=>array('admin')),
);
}else
{
	$this->menu=array(
	array('label'=>CHtml::encode(Yii::app()->user->name), 'icon'=>'user'),
	);
}
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


<?php

if(Yii::app()->user->checkAccess('admin') or Yii::app()->user->checkAccess('property manager'))
{
 $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$model->search(),
	'itemView'=>'_view',
	'id'=>'proplistview',       // must have id corresponding to js above
    'sortableAttributes'=>array(
        'propertyID',
		'rent',
		'numBathroom',
		'numBedroom',
		'numCarPorts',
		'updateTime',
		),
)); 
} else
{
	 $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$model->search(),
	'itemView'=>'_view',
	'id'=>'proplistview',       // must have id corresponding to js above
    'sortableAttributes'=>array(
        'propertyID',
		'rent',
		'numBathroom',
		'numBedroom',
		'numCarPorts',
		'updateTime',
		'numViews',
		),
)); 
}
?>

