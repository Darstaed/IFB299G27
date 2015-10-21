<?php $this->widget('bootstrap.widgets.TbMenu', array(
    'type'=>'list',
    'items'=>array(
        array('label'=>CHtml::encode(Yii::app()->user->name), 'icon'=>'user'),
		array('label'=>'Property Listing Management'),
		array('label'=>'Create Property Listing', 'icon'=>'pencil', 'url'=>'index.php/propertylisting/create'),
		array('label'=>'Manage Property Listings', 'icon'=>'book', 'url'=>'index.php/propertylisting/admin'),
		array('label'=>'Account Control'),
		array('label'=>'Account Settings', 'icon'=>'cog', 'url'=>''),
		array('label'=>'Logout', 'icon'=>'logout', 'url'=>'site/logout'),
		
    ),
)); ?>