$asal = "./uploads/images/".$fileName;

				list($width, $height) = getimagesize($asal);				
				
				$dir_th = './uploads/thumbnail/';				
				
				$img = Yii::app()->simpleImage->load($asal);
				if ($width > $height) { //cek ukuran width dan height
					$img->resizeToWidth(100); //resize width
				} else {
				    $img->resizeToHeight(100); //resize height
				}			
				
				$img->save(Yii::getPathOfAlias('webroot') . $dir_th . $rnd);