<?php

class HomeController extends Controller
{
	/**
	 * This is the action to handle external exceptions.
	 */
	public $layout='//layouts/f_home';

	public function actionIndex()
	{
		$gale = array();

		$gallery = Gallery::model()->findAll(); 
		foreach($gallery as $dt_gallery){
			$gale[] = array(
				'judul'		=> $dt_gallery->judul_gallery,
				'gambar'	=> $dt_gallery->image_gallery
			);
		}

		$model = array(
			//'samping'		=> $about,
			'gale'			=> $gale
		);

		$this->render('index',array('model'=>$model));
	}

	public function actionError()
	{
		echo "error";
	}
}