<?php

class DashboardController extends Controller
{
	public $layout='//layouts/template';

	/**
	 * Displays the login page
	 */
	public function filters()
	{
		return array(
			'accessControl',
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
		$this->render('index');
	}

	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	function actionCek()
	{
		echo Yii::app()->user->getId();;
		echo "ok";
	}
}