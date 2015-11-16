<?php

class ChangePasswordForm extends CFormModel
{
	public $currentPassword;
  	public $newPassword;
  	public $newPassword_repeat;
  	private $_user;
  
  	public function rules()
  	{
    	return array(      		
      		array(
        		'currentPassword, newPassword, newPassword_repeat', 'required',
        		'message'=>'{attribute} cannot be blank.',
      		),
      		array(
        		'currentPassword', 'compareCurrentPassword'
      		),
      		array(
        		'newPassword_repeat', 'compare',
        		'compareAttribute'=>'newPassword',
        		'message'=>'Confirm Password Tidak Cocok',
      		),
    	);		
  	}
  
  	public function compareCurrentPassword($attribute,$params)
  	{
  		$salt = $this->_user->salt_password;		
  		$acak = md5($this->currentPassword.$salt);			  		
		$password = substr($acak, 4, 10);				
		
    	if( $password !== $this->_user->pass_word ){
      		$this->addError($attribute,'Old Password Salah');
    	}
  	}
  
  	public function init()
  	{
    	$this->_user = Users::model()->findByAttributes( array( 'user_name'=>Yii::app()->User->name ) );
  	}
  
  	public function attributeLabels()
  	{
    	return array(
      		'currentPassword'=>'Old Password',
      		'newPassword'=>'New Password',
      		'newPassword_repeat'=>'Confirm Password',
    	);
  	}
  
  	public function changePassword()
  	{  		
  		$salt = $this->_user->salt_password;		
  		$acak = md5($this->newPassword.$salt);			  		
		$password = substr($acak, 4, 10);

    	$this->_user->pass_word = $password;
    	if( $this->_user->save() )
      		return true;
    	return false;
  	}
}