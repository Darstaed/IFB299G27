<?php

class PropertylistingController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('admin'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView()
	{
		$propertylisting=$this->loadModel();
		$this->render('view',array('model'=>$propertylisting,));
	}
 

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Propertylisting;
		
		if(isset($_POST['Propertylisting']))
        {
            $rnd = rand(0,9999);  // generate random number between 0-9999
            $model->attributes=$_POST['Propertylisting'];
 
            $uploadedFile=CUploadedFile::getInstance($model, 'imageID');
            $fileName = "{$rnd}-{$uploadedFile}";  // random number + file name
            $model->imageID = $fileName;
            if($model->save())
            {
				if($uploadedFile!=NULL) // did they upload an image
				{
					  $uploadedFile->saveAs(Yii::app()->basePath.'/../images/'.$fileName);
				}
                
                $this->redirect('admin',array('model'=>$model));
            }
        }
        $this->render('create',array(
            'model'=>$model,
        ));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		if(isset($_POST['Propertylisting']))
		{
		$rnd = rand(0,9999);  // generate random number between 0-9999
		$model->attributes=$_POST['Propertylisting'];
			
		$uploadedFile=CUploadedFile::getInstance($model, 'imageID');
		$fileName = "{$rnd}-{$uploadedFile}";  // random number + file name
		if($uploadedFile!=NULL)
		{
			$model->imageID = $fileName;
		}
		
	
		
		if($model->save())
		{
			if($uploadedFile==NULL)
			{
				$this->redirect(array('view','id'=>$model->propertyID));
			}
			else
			{
				$uploadedFile->saveAs(Yii::app()->basePath.'/../images/'.$fileName);
				$this->redirect(array('view','id'=>$model->propertyID));
			}
		}
			
			
		}
	
		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$model=new Propertylisting('search');
		$model->unsetAttributes();  // clear any default values
		$model->status = 2;
		if(isset($_GET['Propertylisting']))
			$model->attributes=$_GET['Propertylisting'];
	
		$criteria=new CDbCriteria(array(
		'condition'=>'status='.Propertylisting::STATUS_PUBLISHED,
		'with'=>array('author'),
		));
	
		$dataProvider=new CActiveDataProvider('Propertylisting', array('pagination'=>array('pageSize'=>5,), 'criteria'=>$criteria));
		
		
		$this->render('index',array(
        'model'=>$model)
		);
	}
	

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Propertylisting('search');
		$model->unsetAttributes();  // clear any default values
		
		if(isset($_GET['Propertylisting']))
			$model->attributes=$_GET['Propertylisting'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	private $_model;
	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Propertylisting the loaded model
	 * @throws CHttpException
	 */
	public function loadModel()
{
    if($this->_model===null)
    {
        if(isset($_GET['id']))
        {
            if(Yii::app()->user->isGuest)
                $condition='status='.Propertylisting::STATUS_PUBLISHED
                    .' OR status='.Propertylisting::STATUS_ARCHIVED;
            else
                $condition='';
            $this->_model=Propertylisting::model()->findByPk($_GET['id'], $condition);
        }
        if($this->_model===null)
            throw new CHttpException(404,'The requested page does not exist.');
    }
    return $this->_model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Propertylisting $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='propertylisting-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
	

	
	
	
}
