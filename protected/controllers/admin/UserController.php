<?php

class UserController extends Controller
{
	public $layout='//layouts/template';

  public function filters()
  {
   	return array(
       	'accessControl',
        'postOnly + delete',
   	);
  }
  
  public function accessRules()
  {
   	return array(
         array('allow',  // allow all users to perform 'index' and 'view' actions
           'actions'=>array('changepassword'),
           'users'=>array('@'),
         ),
     		array(
       		'deny',
       		'actions'=>array('ChangePassword'),
       		// Denegar a usuarios anónimos.
       		'users'=>array('?'),
       		// Solo disponible para autenticacion con MySQL
       		'expression'=>"Yii::app()->params['authSystem']['type'] === 'MySqlUserIdentity'",
     		),
   	);
  }
 
 	public function actionChangePassword()
  	{
    	$model = new ChangePasswordForm;
    	if(isset($_POST['ajax']) && $_POST['ajax']==='login-form'){
      		echo CActiveForm::validate($model);
      		Yii::app()->end();
    	}

    	// collect user input data
    	if(isset($_POST['ChangePasswordForm'])){
      		$model->attributes=$_POST['ChangePasswordForm'];
      		// Validar input del usuario y cambiar contraseña.
      		if($model->validate() && $model->changePassword()){
       			Yii::app()->user->setFlash('success', '<strong>Selamat</strong> Update Password Berhasil.');
       			$this->redirect( $this->action->id );
       			//$this->addError($attribute,'Password Berhasil Diupdate');
      		}
    	}

    	// Mostrar formulario de cambio de contraseña.
    	$this->render('changePassword',array('model'=>$model));
  	}
}