<?php

class AboutController extends Controller
{
	/**
	 * This is the action to handle external exceptions.
	 */
	public $layout='//layouts/template';

	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index'),
				'users'=>array('@'),
			),			
		);
	}

	public function actionIndex()
	{
		$model=new AboutForm;
		$filee = "./file/about.txt";
		if(isset($_POST['AboutForm']))
		{
			$model->attributes=$_POST['AboutForm'];
			if($model->validate())
			{
				$aboutFile = fopen($filee, "w") or die("Unable to open file!");
				$txt = $model->about;
				fwrite($aboutFile, $txt);				
				$this->refresh();
			}
		}
		if (file_exists($filee)) {
		    $aboutFile = fopen($filee, "r") or die("Unable to open file!");
		    while(!feof($aboutFile)) {
				$model->about .= fgets($aboutFile) . "<br>";
			}
			fclose($aboutFile);
		} else {
		    $model->about = "";
		}		

		$this->render('index',array('model'=>$model));
	}
}