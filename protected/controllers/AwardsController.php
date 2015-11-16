<?php

class AwardsController extends Controller
{
	/**
	 * This is the action to handle external exceptions.
	 */
	public $layout='//layouts/f_award';

	public function actionIndex()
	{
		$data = array();	
		$gale = array();	

		$arey = array('0' => 'Tribute', '1' => 'Press News');
		foreach($arey as $key => $dt_arey){			
			unset($detail);
			$detail = array();
			$award=Award::model()->findAllByAttributes(array('id_jenis_award'=>$key));			
			foreach($award as $dt_award){
				$detail[] = $dt_award->nama_award;
			}
			$data[$dt_arey] = $detail;
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

		$this->render('index',array('model'=>$hasil));
	}
}