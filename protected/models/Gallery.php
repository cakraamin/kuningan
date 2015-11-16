<?php

/**
 * This is the model class for table "gallery".
 *
 * The followings are the available columns in table 'gallery':
 * @property integer $id_gellery
 * @property string $judul_gallery
 * @property string $date_gallery
 * @property string $image_gallery
 * @property string $desk_gallery
 */
class Gallery extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Gallery the static model class
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
		return 'gallery';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('image_gallery', 'file','types'=>'jpg, gif, png', 'allowEmpty'=>true, 'on'=>'update'),
			array('image_gallery', 'length', 'max'=>100, 'on'=>'insert,update'),
			array('judul_gallery, image_gallery', 'length', 'max'=>100),
			array('date_gallery, desk_gallery', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_gellery, judul_gallery, date_gallery, image_gallery, desk_gallery', 'safe', 'on'=>'search'),
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
			'id_gellery' => 'Id Gellery',
			'judul_gallery' => 'Judul Gallery',
			'date_gallery' => 'Date Gallery',
			'image_gallery' => 'Image Gallery',
			'desk_gallery' => 'Desk Gallery',
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

		$criteria->compare('id_gellery',$this->id_gellery);
		$criteria->compare('judul_gallery',$this->judul_gallery,true);
		$criteria->compare('date_gallery',$this->date_gallery,true);
		$criteria->compare('image_gallery',$this->image_gallery,true);
		$criteria->compare('desk_gallery',$this->desk_gallery,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}