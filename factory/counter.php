<?
	$filename = 'count.dat';
	function counter(){
		files();
		opens();
		views();
	}

	function files(){
		if (!file_exists( __DIR__ .'/dat/')){
			mkdir( __DIR__ .'/dat/', 0755, TRUE);
		}
		if (!file_exists( __DIR__ .'/dat/'.$filename)){
			touch( __DIR__ .'/dat/'.$filename);
		}
	}

	function opens(){
		global $filename;
		$result = adds();
		$opf = fopen( __DIR__ .'/dat/'.$filename, 'w');
		fwrite($opf,"{$result[0]},{$result[1]},{$result[2]}");
		fclose($opf);
	}

	function views(){
		global $filename;
		$files = file(__DIR__ .'/dat/'.$filename);
		foreach($files as $fileview){
			// カンマで分ける
			$fileview = explode(",", $fileview);
			//echo $fileview[0].$fileview[1].$fileview[2];
			echo $fileview[0];
		}
	}

	function adds(){
		global $filename;
		$files = file(__DIR__ .'/dat/'.$filename);
		foreach($files as $fileview){
			// カンマで分ける
			$fileview = explode(",", $fileview);
		}
		//echo $fileview[2].'and'.$_SERVER["REMOTE_ADDR"];
		date_default_timezone_set('Asia/Tokyo');
		if($fileview[1] !== date("Y-m-d")){
			$ipadd = $_SERVER["REMOTE_ADDR"];
			$counts = $fileview[0] + 1;
			$days = date("Y-m-d");
		} elseif($fileview[2] !== $_SERVER["REMOTE_ADDR"]){
			$ipadd = $_SERVER["REMOTE_ADDR"];
			$counts = $fileview[0] + 1;
			$days = date("Y-m-d");
		} else {
			$ipadd = $fileview[2];
			$days = $fileview[1];
			$counts = $fileview[0];
		}
		//$counts = $fileview[0] + 1;
		return array($counts , $days, $ipadd);
	}
?>