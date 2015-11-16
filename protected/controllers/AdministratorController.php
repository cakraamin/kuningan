<?php

class AdministratorController extends Controller
{
	public $layout='//layouts/t_login';

	/**
	 * Displays the login page
	 */
	public function actionIndex()
	{				
		if(Yii::app()->user->name != "Guest"){
			$this->redirect(Yii::app()->request->baseUrl."/admin/dashboard");
		}	

		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$redir = Yii::app()->user->returnUrl;				
				if(end(explode("/", $redir)) == ""){
					$this->redirect(Yii::app()->request->baseUrl."/admin/dashboard");
				}else{
					$this->redirect($redir);
				}				
		}
		// display the login form
		$this->render('login',array('model'=>$model));
		/*$passs = "vespasuper";
		$salt = "xI876Fphfe";
		$acak = md5($passs.$salt);
		echo substr($acak, 4, 10);*/
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		//$this->redirect(Yii::app()->homeUrl);
		$this->redirect(Yii::app()->request->baseUrl."/administrator");
	}
}