<?php

class GalleryController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/template';

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
				'users'=>array('@'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete','DeleteAll'),
				'users'=>array('@'),
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
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Gallery;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Gallery']))
		{									
			$uploadedFile=CUploadedFile::getInstance($model,'image_gallery');
			$rnd = "gallery_".$this->generate_code(10).".".end(explode(".", $uploadedFile));
            $fileName = "{$rnd}";
			$model->attributes=$_POST['Gallery'];
			$model->image_gallery = $fileName;            
			$model->date_gallery = new CDbExpression('NOW()');
			if($model->save())
				$uploadedFile->saveAs(Yii::app()->basePath.'/../uploads/images/'.$model->image_gallery);				

				$image = new EasyImage('./uploads/images/'.$model->image_gallery);
				$image->resize(500, 500);
				$image->save('./uploads/thumbnail/'.$model->image_gallery);
				$image->scaleAndCrop(500, 280);
				$image->save('./uploads/crop/'.$model->image_gallery);

				$this->redirect(array('view','id'=>$model->id_gellery));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	private function generate_code($length = 10)
	{
    	if ($length <= 0)
        {
        	return false;
        }
            
        $code = "";
        $chars = "abcdefghijklmnpqrstuvwxyzABCDEFGHIJKLMNPQRSTUVWXYZ123456789";
        srand((double)microtime() * 1000000);
        for ($i = 0; $i < $length; $i++)
        {
        	$code = $code . substr($chars, rand() % strlen($chars), 1);
        }
        return $code;
            
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

		if(isset($_POST['Gallery']))
		{
			$_POST['Banner']['image'] = $model->image_gallery;
			$model->attributes=$_POST['Gallery'];

			$uploadedFile=CUploadedFile::getInstance($model,'image');

			$model->date_gallery = new CDbExpression('NOW()');
			if($model->save())
				if(!empty($uploadedFile))  // check if uploaded file is set or not
                {
                    $uploadedFile->saveAs(Yii::app()->basePath.'/../uploads/images/'.$model->image_gallery);

                    $image = new EasyImage('./uploads/images/'.$model->image_gallery);
					$image->resize(500, 500);
					$image->save('./uploads/thumbnail/'.$fileName);
					$image->scaleAndCrop(500, 280);
					$image->save('./uploads/crop/'.$model->image_gallery);
                }

				$this->redirect(array('view','id'=>$model->id_gellery));
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
		$dataProvider=new CActiveDataProvider('Gallery',array(
			'pagination'=>array(
			    'pageSize'=>10,
			),
		));
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Gallery('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Gallery']))
			$model->attributes=$_GET['Gallery'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Gallery the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Gallery::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Gallery $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='gallery-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	public function actionDeleteAll()
	{
		$idList = Yii::app()->request->getParam('idList');
		$allIds = (is_array($idList)) ? implode(",",$idList) : $idLsit;
		Gallery::model()->deleteAll('id_gellery IN (' . $allIds . ')');		
	}
}
