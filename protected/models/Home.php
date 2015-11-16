<?php

class Home extends CActiveRecord
{
	public function getAward()
	{
		$data = array();
		$detail = array();

		$arey = array('0' => 'Tribute', '1' => 'Press News');
		foreach($arey as $key => $dt_arey){
			echo $key;
			$award=Award::model()->findAllByAttributes(array('id_jenis_award'=>$key));			
			foreach($award as $dt_award){
				$detail[] = $dt_award->nama_award;
			}
			$data[$key] = $detail;			
		}

		return $detail;
	}
}