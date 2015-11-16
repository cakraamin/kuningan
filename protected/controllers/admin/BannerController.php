<?php

class BannerController extends Controller
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
				'actions'=>array('admin','delete'),
				'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	public function actionIndex()
	{
		$model = new BannerForm;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);


		$rnd = "banner.swf";
		$folder = "./uploads/banner/";

		if (file_exists($folder.$rnd)) {
		    $model->image = $folder.$rnd;		    
		}

		if(isset($_POST['BannerForm']))
		{												
			$uploadedFile=CUploadedFile::getInstance($model,'image');			
            $fileName = "{$rnd}";
			if($uploadedFile->saveAs(Yii::app()->basePath.'/../uploads/banner/'.$fileName)){
				echo "okelah";
			}else{
				echo "gagal";
			}
			$this->refresh();
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
}
