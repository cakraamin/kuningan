<?php

class ContactController extends Controller
{
	/**
	 * This is the action to handle external exceptions.
	 */
	public $layout='//layouts/f_kontak';

	public function actions()
	{
		return array(
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			)
		);
	}

	public function actionIndex()
	{
		$model=new Kontak;

		$filee = "./file/address.txt";
		if (file_exists($filee)) {
		    $addressFile = fopen($filee, "r") or die("Unable to open file!");
		    while(!feof($addressFile)) {
				$model->address .= fgets($addressFile) . "<br>";
			}
			fclose($addressFile);
		} else {
		    $model->address = "";
		}

		if(isset($_POST['Kontak']))
		{
			$model->attributes=$_POST['Kontak'];
			if($model->save())
				$this->refresh();
		}

		$this->render('index',array(
			'model'=>$model,
		));
	}
}