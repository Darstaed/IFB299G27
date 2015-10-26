
<?php
$this->widget('bootstrap.widgets.TbMenu', array(
    'type'=>'list',
    'items'=>array(
		array('label'=>CHtml::encode(Yii::app()->user->name), 'icon'=>'user'),
    ),
    

)); 




if(Yii::app()->user->checkAccess('admin'))
{
$this->widget('bootstrap.widgets.TbMenu', array(
    'type'=>'list',
    'items'=>array(

		array('label'=>'Property Listing Management'),
		array('label'=>'Create Property Listing', 'icon'=>'pencil', 'url'=>array('propertylisting/create')),
		array('label'=>'Manage Property Listings', 'icon'=>'book', 'url'=>array('propertylisting/admin')),	
    ),
    

)); 


$this->widget('bootstrap.widgets.TbMenu', array(
    'type'=>'list',
    'items'=>array(
		array('label'=>'User account management'),
		array('label'=>'Create an account', 'icon'=>'pencil', 'url'=>array('site/register')),
		array('label'=>'Manage user accounts', 'icon'=>'book', 'url'=>array('user/admin')),	
    ),
    

)); 
	
}

$this->widget('bootstrap.widgets.TbMenu', array(
    'type'=>'list',
    'items'=>array(
		array('label'=>'Account Control'),
		array('label'=>'Account Settings', 'icon'=>'cog', 'url'=>array('user/update/'. Yii::app()->user->id)),
		array('label'=>'Logout', 'icon'=>'logout', 'icon'=>'icon-off', 'url'=>'site/logout'),
    ),
    

)); 

?>




