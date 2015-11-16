<?php

/**
 * This is the model class for table "kontak".
 *
 * The followings are the available columns in table 'kontak':
 * @property integer $id_kontak
 * @property string $nama_kontak
 * @property string $email_kontak
 * @property string $phone_kontak
 * @property string $subyek_kontak
 * @property string $komen_kontak
 */

class Kontak extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Kontak the static model class
	 */
	public $verifyCode;
	public $address;
	
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'kontak';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nama_kontak, email_kontak, phone_kontak, subyek_kontak', 'length', 'max'=>100),
			array('komen_kontak', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_kontak, nama_kontak, email_kontak, phone_kontak, subyek_kontak, komen_kontak', 'safe', 'on'=>'search'),

			array('verifyCode', 'captcha', 'allowEmpty'=>!CCaptcha::checkRequirements()),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_kontak' => 'Id Kontak',
			'nama_kontak' => 'Nama Kontak',
			'email_kontak' => 'Email Kontak',
			'phone_kontak' => 'Phone Kontak',
			'subyek_kontak' => 'Subyek Kontak',
			'komen_kontak' => 'Komen Kontak',
			'verifyCode'=>'Verification Code',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_kontak',$this->id_kontak);
		$criteria->compare('nama_kontak',$this->nama_kontak,true);
		$criteria->compare('email_kontak',$this->email_kontak,true);
		$criteria->compare('phone_kontak',$this->phone_kontak,true);
		$criteria->compare('subyek_kontak',$this->subyek_kontak,true);
		$criteria->compare('komen_kontak',$this->komen_kontak,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}