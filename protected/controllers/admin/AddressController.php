<?php

class AddressController extends Controller
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
		$model=new AddressForm;
		$filee = "./file/address.txt";
		if(isset($_POST['AddressForm']))
		{
			$model->attributes=$_POST['AddressForm'];
			if($model->validate())
			{
				$addressFile = fopen($filee, "w") or die("Unable to open file!");
				$txt = $model->address;
				fwrite($addressFile, $txt);				
				$this->refresh();
			}
		}
		if (file_exists($filee)) {
		    $addressFile = fopen($filee, "r") or die("Unable to open file!");
		    while(!feof($addressFile)) {
				$model->address .= fgets($addressFile) . "<br>";
			}
			fclose($addressFile);
		} else {
		    $model->address = "";
		}		

		$this->render('index',array('model'=>$model));
	}
}