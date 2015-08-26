



<div id="comments">

	<h3>Leave a Comment</h3>
 
    <?php if(Yii::app()->user->hasFlash('commentSubmitted')): ?>
        <div class="flash-success">
            <?php echo Yii::app()->user->getFlash('commentSubmitted'); ?>
        </div>
    <?php else: ?>
        <?php $this->renderPartial('/comment/_form',array(
            'model'=>$comment,
        )); ?>
    <?php endif; ?>
    
        
	<?php if($model->commentCount>=1): ?>
        <h3>
            <?php echo $model->commentCount . 'comment(s)'; ?>
        </h3>
 
        <?php $this->renderPartial('_comments',array(
            'post'=>$model,
            'comments'=>$model->comments,
        )); ?>
    <?php endif; ?>
    
    
    <?php if($model->commentCount>=1): ?>
        <h3>
            <?php echo $model->commentCount . 'comment(s)'; ?>
        </h3>
 
        <?php $this->renderPartial('_comments',array(
            'post'=>$model,
            'comments'=>$model->comments,
        )); ?>
    <?php endif; ?>
    
 
</div><!-- comments -->



<?php
/* @var $this PostController */
/* @var $model Post */



$this->breadcrumbs=array(
	'Posts'=>array('index'),
	$model->title,
);

