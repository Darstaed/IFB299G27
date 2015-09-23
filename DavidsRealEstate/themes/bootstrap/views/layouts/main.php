<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/styles.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>

	<?php Yii::app()->bootstrap->register(); ?>
	<?php $image = CHtml::image(Yii::app()->request->baseUrl.'/images/titleDavids Real Estate.gif', 'Davids Real Estate', array('height'=>'135', 'width'=>'260'));?>
	
</head>

<body>

<?php $this->widget('bootstrap.widgets.TbNavbar',array(
	'type' =>'inverse',// null or inverse
	//'brand'=>CHtml::image(Yii::app()->getBaseUrl().'/images/titleDavids Real Estate.gif', 'Davids Real Estate', array('height'=>'150', 'width'=>'150')),
	'brand'=>'Davids Real Estate',
	'brandUrl'=>'/DavidsRealEstate',
    'items'=>array(
        array(
            'class'=>'bootstrap.widgets.TbMenu',
            'htmlOptions'=>array('class'=>'pull-right'),
            'items'=>array(
                array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
            ),
        ),
    ),
)); ?>




<div class="container" id="page">

	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>
	
	<div id="footer">
	
<?php $this->widget('zii.widgets.CMenu',array(
		'items'=>array(
				array('label'=>'About', 'url'=>array('/site/page', 'visible'=>Yii::app()->user->isGuest, 'view'=>'about')),
				array('label'=>'Community Guidelines', 'url'=>array('/site/page', 'visible'=>Yii::app()->user->isGuest, 'view'=>'communityGuidelines')),
				array('label'=>'Contact Us', 'url'=>array('/site/contact','visible'=>Yii::app()->user->isGuest)),
				array('label'=>'Privacy', 'url'=>array('/site/page','visible'=>Yii::app()->user->isGuest, 'view'=>'privacy')),
			),
			'htmlOptions' => array('class'=>'footermenu')
		)); ?>
	
	<p></p>
	
	
		Copyright &copy; <?php echo date('Y'); ?> by Davids Real Estate.<br/>
		Authors: Team Green <br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
