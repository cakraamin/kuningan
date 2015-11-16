<?php

/**
 * ContactForm class.
 * ContactForm is the data structure for keeping
 * contact form data. It is used by the 'contact' action of 'SiteController'.
 */
class BannerForm extends CFormModel
{	
	public $image;

	/**
	 * Declares the validation rules.
	 */
	public function rules()
	{
		return array(
			array('image', 'file','types'=>'jpg, gif, png', 'allowEmpty'=>true, 'on'=>'update'),
		);
	}
}