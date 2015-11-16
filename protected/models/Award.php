<?php

/**
 * This is the model class for table "award".
 *
 * The followings are the available columns in table 'award':
 * @property integer $id_award
 * @property integer $id_jenis_award
 * @property string $nama_award
 */
class Award extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Award the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'award';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_jenis_award', 'numerical', 'integerOnly'=>true),
			array('nama_award', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_award, id_jenis_award, nama_award', 'safe', 'on'=>'search'),
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
			'id_award' => 'Id Award',
			'id_jenis_award' => 'Id Jenis Award',
			'nama_award' => 'Nama Award',
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

		$criteria->compare('id_award',$this->id_award);
		$criteria->compare('id_jenis_award',$this->id_jenis_award);
		$criteria->compare('nama_award',$this->nama_award,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}