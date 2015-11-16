<?php

class GalleriesController extends Controller
{
	/**
	 * This is the action to handle external exceptions.
	 */
	public $layout='//layouts/f_galleri';

	public function actionIndex()
	{
		$data = array();	
		$gale = array();	

		$partner=Partner::model()->findAll();			
		foreach($partner as $dt_partner){
			$data[] = $dt_partner->nama_partner;
		}

		$gallery = Gallery::model()->findAll(); 
		foreach($gallery as $dt_gallery){
			$gale[] = array(
				'judul_gale'	=> $dt_gallery->judul_gallery,
				'gambar'		=> $dt_gallery->image_gallery
			);			
		}

		$hasil = array(
			'samping'	=> $data,
			'gale'		=> $gale
		);

		$this->render('index',array('modele'=>$hasil));
	}
}