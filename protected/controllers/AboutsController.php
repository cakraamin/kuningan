<?php

class AboutsController extends Controller
{
	/**
	 * This is the action to handle external exceptions.
	 */
	public $layout='//layouts/f_about';

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

		$filee = "./file/about.txt";
		$about = "";
		if (file_exists($filee)) {
		    $aboutFile = fopen($filee, "r") or die("Unable to open file!");
		    while(!feof($aboutFile)) {
				$about .= fgets($aboutFile) . "<br>";
			}
			fclose($aboutFile);
		} else {
		    $about = "";
		}	

		$model = array(
			'samping'		=> $about,
			'gale'			=> $gale
		);

		$this->render('index',array('model'=>$model));
	}
}